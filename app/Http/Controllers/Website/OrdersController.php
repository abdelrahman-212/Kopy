<?php

namespace App\Http\Controllers\Website;

use App\Models\Branch;
use App\Models\Item;
use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrdersController extends Controller
{
    public function make_order(Request $request)
    {
        $items = auth()->user()->carts;
        foreach ($items as $item) {
            $item->extras = json_decode($item->extras);
            $item->withouts = json_decode($item->withouts);
            $item->offerId = $item->offer_id;
            $item->price = Item::find($item->item_id)->price;
        }
        if (!$request->has('points_paid')) {
            $request = $request->merge([
                'items' => $items,
                'points_paid' => 0,
            ]);
        } else {
            $request = $request->merge([
                'items' => $items,
                'points_paid' => $request->points_paid,
            ]);
        }
        $return = (app(\App\Http\Controllers\Api\OrdersController::class)->store($request))->getOriginalContent();
        if ($return['success'] == true) {
            session()->put(['success' => $return['message']]);
            foreach ($items as $item) {
                $item->delete();
            }
            if (session()->has('point_claim')) {
                session()->forget('point_claim_value');
                session()->forget('point_claim');
            }
            return redirect()->route('get.cart');

        }
    }

    /* To view payment page */
    public function make_order_payment(Request $request)
    {
        if ($request->status == 'paid' && $request->message == 'Succeeded!' && session('checkOut_details')) {


            if (session()->has('checkOut_details')) {
                $request->merge([
                    'total' => session('checkOut_details')['total'],
                    'subtotal' => session('checkOut_details')['subtotal'],
                    'delivery_fees' => session('checkOut_details')['delivery_fees'],
                    'branch_id' => session('checkOut_details')['branch_id'],
                    'address_id' => array_key_exists('address_id',session('checkOut_details'))?session('checkOut_details')['address_id']:null,
                    'service_type' => session('checkOut_details')['service_type'],
                    'points_paid' => array_key_exists("points_paid", session('checkOut_details')) ? session('checkOut_details')['points_paid'] : 0,
                    'taxes' => session('checkOut_details')['taxes'],
                    'customer_id' => auth()->user()->id,
                ]);

                // submit order
                $items = auth()->user()->carts;
                foreach ($items as $item) {
                    $item->extras = json_decode($item->extras);
                    $item->withouts = json_decode($item->withouts);
                    $item->offerId = $item->offer_id;
                    $item->price = Item::find($item->item_id)->price;
                }
                if (!$request->has('points_paid')) {
                    $request = $request->merge([
                        'items' => $items,
                        'points_paid' => 0,
                    ]);
                } else {
                    $request = $request->merge([
                        'items' => $items,
                        'points_paid' => $request->points_paid,

                    ]);
                }
                $return = (app(\App\Http\Controllers\Api\OrdersController::class)->store($request))->getOriginalContent();
                if ($return['success'] == true) {

                    Payment::create([
                        'payment_id' => $request->id,
                        'customer_id' => auth()->user()->id,
                        'status' => $request->status,
                        'message' => $request->message,
                        'order_id' => $return['data']->id,
                        'total_paid' => $request->amount
                    ]);
                    session()->put(['success' => $return['message']]);
                    foreach ($items as $item) {
                        $item->delete();
                    }
                    if (session()->has('point_claim')) {
                        session()->forget('point_claim_value');
                        session()->forget('point_claim');
                    }
                    session()->flash('success', 'Order Payed Successfully');
                    return redirect()->route('get.cart');
                }
            }
        } else {
            session()->flash('message', 'Order Failed ! , Please Try again later');
            return redirect()->route('checkout');
        }
    }

    public function my_orders()
    {
        $pending_orders = auth()->user()->orders()->where('state', 'pending')->get();
        $completed_orders = auth()->user()->orders()->where('state', 'completed')->get();
        $inprogress_orders = auth()->user()->orders()->where('state', 'in-progress')->get();
        $canceled_orders = auth()->user()->orders()->where('state', 'canceled')->get();
        $on_way = auth()->user()->orders()->where('state', 'on-way')->get();

        return view('website.myOrder', compact('pending_orders', 'completed_orders', 'canceled_orders'));
    }

    public function my_orders_details($id, $reorder = null)
    {

        $order = Order::find($id);

        $items = $order->items;
        if ($reorder != null) {
            return view('website.order_details', compact('items', 'order', 'reorder'));

        } else {
            return view('website.order_details', compact('items', 'order'));

        }
    }

    public function re_order($id)
    {

        $order = Order::find($id);
        $items = [];

        foreach ($order->items as $item) {
            $items[] = collect([
                'item_id' => $item->id,
                'extras' => ((array)$item->pivot->item_extras),
                'withouts' => ((array)$item->pivot->item_withouts),
                'price' => $item->price,
                'dough_type_ar' => $item->pivot->dough_type_ar,
                'dough_type_en' => $item->pivot->dough_type_en,
                'offer_price' => $item->pivot->offer_price,
                'offerId' => $item->pivot->offer_id,
                'quantity' => $item->pivot->quantity,

            ]);
        }

        $branch_id = session()->get('branch_id');
        $address_id = session()->get('address_id');
        $service_type = session()->get('service_type');
        $request = new \Illuminate\Http\Request();


        $request = $request->merge([
            'total' => ($order->points_paid) ? ($order->total + $order->points_paid) : ($order->total),
            'subtotal' => $order->subtotal,
            'taxes' => $order->taxes,
            'delivery_fees' => $order->delivery_fees,
            'points_paid' => 0,
            'branch_id' => $branch_id,
            'address_id' => $address_id,
            'service_type' => $service_type,
            'items' => $items,
            'customer_id' => auth()->user()->id,
        ]);
        $return = (app(\App\Http\Controllers\Api\OrdersController::class)->store($request))->getOriginalContent();
        session()->put(['message' => $return['message']]);
        if (session()->has('point_claim')) {
            session()->forget('point_claim_value');
            session()->forget('point_claim');
        }
        return redirect()->route('get.orders');

    }
}
