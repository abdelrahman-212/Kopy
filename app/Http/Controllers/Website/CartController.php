<?php

namespace App\Http\Controllers\Website;

use App\Models\Branch;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Traits\GeneralTrait;

class CartController extends Controller
{
    use GeneralTrait;

    public function get_cart()
    {
        $return = (app(\App\Http\Controllers\Api\CartController::class)->getCart())->getOriginalContent();
        $request = new \Illuminate\Http\Request();
        if ($return['success'] == 'success') {
            $carts = $return['data'];
            $arr_check = $this->get_check();
            if (session()->has('point_claim')) {

                return view('website.cart', compact(['carts', 'arr_check']));
            } else {
                return view('website.cart', compact(['carts', 'arr_check']));

            }
        }
    }

    public function delete_cart(Request $request)
    {

        $return = (app(\App\Http\Controllers\Api\CartController::class)->deleteCart($request))->getOriginalContent();

        $arr_check = $this->get_check();
        return response()->json($arr_check);
    }

    public function update_quantity(Request $request)
    {
        $return = (app(\App\Http\Controllers\Api\CartController::class)->updateQuantity($request))->getOriginalContent();
        $arr_check = $this->get_check();

        return response()->json($arr_check);
    }


    public function get_check()
    {
        $return = (app(\App\Http\Controllers\Api\CartController::class)->getCart())->getOriginalContent();
        $arr_data = [];
        if ($return['success'] == 'success') {
            $carts = $return['data'];
            $final_item_price = 0;
            foreach ($carts as $cart) {
                $quantity = $cart->quantity;
                $item_price = $cart->item->price;
                $final_item_price += ($item_price * $quantity);

                if ($cart->ExtrasObjects) {
                    $extras_price = collect($cart->ExtrasObjects)->sum('price') * $quantity;
                    $final_item_price += $extras_price;
                }
            }
            if (session()->has('point_claim')) {
                $arr_data['points'] = session()->get('point_claim_value');
                $arr_data['taxes'] = round($final_item_price * .15, 2);
                $arr_data['delivery_fees'] = session()->get('service_type') == 'delivery' ? 10 : 0;
                $arr_data['subtotal'] = $final_item_price;
                $final_item_price += ($arr_data['taxes'] + $arr_data['delivery_fees']) - $arr_data['points'];
                $arr_data['total'] = $final_item_price;
                return $arr_data;
            } else {
                $arr_data['taxes'] = round($final_item_price * .15, 2);
                $arr_data['delivery_fees'] = session()->get('service_type') == 'delivery' ? 10 : 0;
                $arr_data['subtotal'] = $final_item_price;

                $final_item_price += $arr_data['taxes'] + $arr_data['delivery_fees'];
                $arr_data['total'] = $final_item_price;
                return $arr_data;
            }

        }


    }

    public function get_checkout(Request $request)
    {
        $address_id = 33;
        $branch_id = 16;
        $service_type = 'delivery';
        $request->merge([
            'address_id' => $address_id,
            'branch_id' => $branch_id,
            'service_type'=>$service_type
        ]);
        $branch = Branch::find($branch_id);
         $return = (app(\App\Http\Controllers\Api\BranchesController::class)->show($request, $branch))->getOriginalContent();
        if ($return['success'] == true) {
            $branch = $return['data'];
            $work_hours = $branch->workingDays()->where('day', strtolower(now()->englishDayOfWeek))->get();
            return view('website.checkout', compact('request', 'branch', 'work_hours'));
        }

        return $request;
        if (session()->has('address_id')) {
            if (session()->has('service_type'))
                if (session()->has('branch_id')) {
                    $address_id = session()->get('address_id');
                    $branch_id = session()->get('branch_id');
                    $service_type = session()->get('service_type');
                    $request->merge([
                        'address_id' => $address_id,
                        'branch_id' => $branch_id,
                        'service_type'=>$service_type
                    ]);
                    return view('website.make-order', compact('request'));
                }
        }
    }

}
