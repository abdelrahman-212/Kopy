<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Filters\OrderFilters;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Api\BaseController;
use App\Models\Branch;
use App\Models\Order;
use App\Models\Item;
use App\Models\User;
use App\Models\Extra;
use App\Models\Offer;
use App\Models\Without;
use App\Models\PointsTransaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrdersController extends BaseController
{

    protected $validationRules = [
        'customer_id' => 'exists:users,id',
        'address_id' => 'required|exists:addresses,id',
        'branch_id' => 'exists:branches,id',
        'service_type' => 'required',
        'offer_id' => 'exists:offers,id'
    ];

    public function index(Request $request, OrderFilters $filters)
    {

        $orders = Order::filter($filters);

        $user_branches = Auth::user()->branches()->pluck('branches.id')->toArray();//??

        if (!empty($user_branches)) {
            $orders = $orders->whereIn('branch_id', $user_branches);
        }

        $orders = $orders->with(['customer', 'branch', 'items'])->with(['address' => function ($address) {
            $address->with(['city', 'area']);
        }])->orderBy('id', 'DESC')->paginate(10);


        foreach ($orders as $order) {
            foreach ($order->items as $item) {
                $extras = $item->pivot->item_extras;
                $extras = $extras ? explode(", ", $extras) : [];

                $all_extras = [];
                foreach ($extras as $extra) {
                    $all_extras[] = Extra::find($extra);
                }

                $item->extras = $all_extras;
            }
        }

        return $this->sendResponse($orders->toArray(), 'Orders retrieved successfully.');
    }

    public function getUserOrders(Request $request)
    {
        // get branch in case of reorder
        $orders = Auth::user()->orders()->with(['branch', 'items'])->with(['address' => function ($address) {
            $address->with(['city', 'area']);
        }])->orderBy('id', 'DESC')->paginate(10);

        return $this->sendResponse($orders->toArray(), 'Orders retrieved successfully.');
    }

    /**
     * Request Body:
     *  - customer_id
     *  - address_id
     *  - service_type (delivery, takeaway)
     *  - offer_id
     *  - branch_id
     *  - subtotal
     *  - taxes
     *  - delivery_fees
     *  - total
     *  - points_paid
     *  - items[]
     *      - item_id
     *      - extras[]
     *      - withouts[]
     *
     *
     * Followed Steps:
     *  1- Get Customer information by customer id from "users" table.
     *      1.1- Check for customer role.
     *  2- Check for the service type.
     *      2.1- In case of delivery.
     *          2.1.1- Form validation for (address_id, service_type, offer_id).
     *          2.1.2- Get the customer address for "address" table by address_id.
     *          2.1.3- Get the area for the fetched address.
     *          2.1.4- Get the branch id from "branch_delivery_areas" table using the fetched area id.
     *          2.1.5- Check if there's branch already exists for this id.
     *          2.1.6- Output: $branch_id.
     *      2.2- In case of takeaway.
     *          2.2.1- Form validation for (branch_id, service_type, offer_id).
     *          2.2.2- Get branch by "branch_id" then check if there's abranch already exists for this id.
     *          2.2.3- Output: $branch_id.
     *  3- Grap the rest of order data from request.
     *  4- Create new order.
     *  5- Send a push notification for all the nearby branches with the new order details.
     *  6- Loop through each item of the items array found in request body.
     *      6.1- Grap the item model based on $item['item_id'].
     *      6.2- Grap the extras models based on $item['extras'].
     *      6.3- Grap the withouts models based on $item['withouts'].
     *      6.4- If the request has $item['price'] means that order has offer.
     *          6.4.1- Grap the sum of withouts.
     *          6.4.2- Grap the sum of extras.
     *          6.4.3- Subtotal += price + extras - withouts.
     *      6.5- If the request doesn't have $item['price'].
     *          6.5.1- Grap the sum of withouts.
     *          6.5.2- Grap the sum of extras.
     *          6.5.3- Subtotal += $itemModel->price + extras - withouts.
     *      6.6 Attach the rest of data to the pivot table.
     */

    public function store(Request $request)
    {
        // get customer information
        $customer = User::where('id', $request->customer_id)->whereHas('roles', function ($role) {
            $role->where('name', 'customer');
        })->first();

        $branch_id = 0;

        if ($request->service_type == 'delivery') {

            // validate user input
            $validator = Validator::make($request->all(), [
                'address_id' => 'required|exists:addresses,id',
                'service_type' => 'required',
            ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Errors!', $validator->errors());
            }
            $customerAddress = $customer->addresses->where('id', $request->address_id)->first();

            // get the branch covers customer area and open
            $area = $customerAddress->area;

            if ($area) {
                $branch = DB::table('branch_delivery_areas')->where('area_id', $area->id . "")->first();

                if ($branch) {
                    $branch = Branch::find($branch->branch_id);

                    if ($branch) {
                        $branch_id = $branch->id;
                    } else {
                        return $this->sendError("sorry there is no branch cover this area");
                    }
                } else {
                    return $this->sendError("sorry there is no branch cover this area");
                }
            } else {
                return $this->sendError("sorry there is no branch cover this area");
            }
        }

        if ($request->service_type == 'takeaway') {

            // validate user input
            $validator = Validator::make($request->all(), [
                'branch_id' => 'exists:branches,id',
                'service_type' => 'required',
            ]);
            if ($validator->fails()) {
                return $this->sendError('Validation Errors!', $validator->errors());
            }
            $branch = Branch::find($request->branch_id);

            if (!$branch) {
                return $this->sendError('there is no branch by this id');
            }

            $branch_id = $branch->id;
        }


        $orderData = [
            "service_type" => $request->service_type,
            "address_id" => $request->address_id,
            "customer_id" => $request->customer_id, //$request->user()->id,
            "branch_id" => $branch_id, //$branch->id,
            "service_type" => $request->service_type,
            "state" => 'pending',
            "subtotal" => $request->subtotal,
            "taxes" => $request->taxes,
            "delivery_fees" => $request->delivery_fees,
            "total" => $request->total,
            "points_paid" => $request->points_paid
        ];

        $order = Order::create($orderData);

        if (!$order) {
            return $this->sendError('Order did not placed');
        }
        // send notification to all user_branches
        $cashiers = Branch::find($branch_id);
        if ($cashiers) {
            foreach ($cashiers->cashiers2 as $cashier) {
                \App\Http\Controllers\NotificationController::pushNotifications($cashier->id,  "New Order has been placed", "Order");
            }
        }

        $subtotal = 0;

        foreach ($request->items as $item) {

            //dd($request->items);
            $orderItem = Item::where('id', $item['item_id'])->first();
            $orderItemExtras = null;
            if (array_key_exists('extras', $item)) {
                $orderItemExtras = Extra::whereIn('id', $item['extras'])->get();
            }

            $orderItemWithouts = null;
            if (array_key_exists('withouts', $item)) {
                $orderItemWithouts = Without::whereIn('id', $item['withouts'])->get();
            }


            // check if there is offer price
            // count sum of extras price and item price
            if (array_key_exists('price', $item)) {
                $extras = $orderItemExtras ? $orderItemExtras->sum('price') : 0;
                $itemPrice = $item['price'] + $extras;
            } else {
                $extras = $orderItemExtras ? $orderItemExtras->sum('price') : 0;
                $itemPrice = $orderItem->price + $extras;
            }

            $subtotal = $subtotal + $itemPrice;

            $offer = Offer::find(isset($item['offerId']) ? $item['offerId'] : 0);

            $order->items()->attach($item['item_id'], [
                'item_extras' =>  array_key_exists('extras', $item) ? implode(', ', $item['extras']) : null,
                'item_withouts' =>  array_key_exists('withouts', $item) ? implode(', ', $item['withouts']) : null,
                'dough_type_ar' => array_key_exists('dough_type_ar', $item) ? $item['dough_type_ar'] : null,
                'dough_type_en' => array_key_exists('dough_type_en', $item) ? $item['dough_type_en'] : null,
                'price' => $itemPrice,
                'offer_price' => array_key_exists('price', $item) ? $item['price'] : null, // TODO: Remove price
                'offer_id' =>  optional($offer)->id,
                'offer_last_updated_at' =>  optional($offer)->updated_at,
                'quantity' => array_key_exists('quantity', $item) ? $item['quantity'] : 1
            ]);
        }

        return $this->sendResponse($order, 'Order created successfuly!');
    }

    public function getById(Request $request, Order $order)
    {
        return $this->sendResponse($order->toArray(), 'Order retrieved successfully.');
    }

    public function acceptOrder(Request $request, Order $order)
    {

        if ($order->state != 'pending') {
            return $this->sendError('You cannot accept this order', 400);
        }

        $order->update(['state' => 'in-progress']);

        \App\Http\Controllers\NotificationController::pushNotifications($order->customer_id,  "Your Order has been Accepted, لقد تم قبول طلبك", "Order");
        return $this->sendResponse($order->toArray(), 'Order has been accepted');
    }

    public function rejectOrder(Request $request, Order $order)
    {

        if ($order->state != 'pending') {
            return $this->sendError("You cannot reject this order!", 400);
        }

        $order->update(['state' => 'rejected', 'cancellation_reason' => $request->cancellation_reason]);


        if ($order->points_paid != 0) {
            PointsTransaction::create([
                'points'   => $order->points_paid,
                'user_id'  => $order->customer_id,
                'order_id' => $order->id,
                'status'   => 3
            ]);
        }


        \App\Http\Controllers\NotificationController::pushNotifications($order->customer_id,  "Your Order has been Rejected, لقد تم رفض طلبك", "Order");
        return $this->sendResponse($order->toArray(), 'Order has been rejected');
    }

    public function completeOrder(Request $request, Order $order)
    {

        if ($order->state != 'in-progress') {
            return $this->sendError('You cannot complete this order');
        }

        $order->update(['state' => 'completed']);

        PointsTransaction::create([
            'points'   => round($order->total) / 10,
            'user_id'  => $order->customer_id,
            'order_id' => $order->id,
            'status'   => 0
        ]);

        if ($order->service_type == 'delivery') {
            \App\Http\Controllers\NotificationController::pushNotifications($order->customer_id,  "Your Order is on the way, الطلب في الطريق إليك", "Order");
            return $this->sendResponse($order->toArray(), 'Order is on the way');
        }

        if ($order->service_type == 'takeaway') {
            \App\Http\Controllers\NotificationController::pushNotifications($order->customer_id,  "Your Order has been completed, تم تجهيز الطلب", "Order");
            return $this->sendResponse($order->toArray(), 'Order has been completed');
        }
    }

    public function cancelOrder(Request $request, Order $order)
    {

        if ($order->state == 'completed' or $order == 'rejected') {
            return $this->sendError('You cannot cancel this order');
        }

        $order->update(['state' => 'canceled', 'cancellation_reason' => $request->cancellation_reason]);


        if ($order->points_paid != 0) {
            PointsTransaction::create([
                'points'   => $order->points_paid,
                'user_id'  => $order->customer_id,
                'order_id' => $order->id,
                'status'   => 3
            ]);
        }

        \App\Http\Controllers\NotificationController::pushNotifications($order->customer_id,  "Your Order has been Cancelled, لقد تم إلغاء طلبك", "Order");
        return $this->sendResponse($order->toArray(), 'Order has been canceled');
    }

    public function getBranch(Request $request)
    {
        $customer = User::where('id', $request->customer_id)->whereHas('roles', function ($role) {
            $role->where('name', 'customer');
        })->first();

        $customerAddress = $customer->addresses->where('id', $request->address_id)->first();

        // get the branch covers customer area and open
        $area = $customerAddress->area;
        if ($area) {
            $branch = DB::table('branch_delivery_areas')->where('area_id', $area->id . "")->first();

            if ($branch) {
                $branch = Branch::find($branch->branch_id);

                if ($branch) {
                    $branch_id = $branch->id;
                    return $this->sendResponse($branch_id, 'Related Branch');
                } else {
                    return $this->sendError("sorry there is no branch cover this area");
                }
            } else {
                return $this->sendError("sorry there is no branch cover this area");
            }
        } else {
            return $this->sendError("sorry there is no branch cover this area");
        }
    }
}
