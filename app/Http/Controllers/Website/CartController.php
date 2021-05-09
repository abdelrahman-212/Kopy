<?php

namespace App\Http\Controllers\Website;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function addCart(Request $request)
    {
        if ($request->has('buy_items')) {
            foreach ($request->buy_items as $buy_item) {
                $newRequest = new Request();
                $newRequest->merge(['item_id' => $buy_item]);
                $newRequest->merge(['offer_id' => $request->offer_id]);
                $newRequest->merge(['quantity' => $request->quantity]);
                $return = (app(\App\Http\Controllers\Api\CartController::class)->addCart($newRequest))->getOriginalContent();
            }
            foreach ($request->get_items as $get_item) {
                $newRequest = new Request();
                $newRequest->merge(['item_id' => $get_item]);
                $newRequest->merge(['offer_id' => $request->offer_id]);
                $newRequest->merge(['quantity' => $request->quantity]);
                (app(\App\Http\Controllers\Api\CartController::class)->addCart($newRequest))->getOriginalContent();
            }
            return redirect()->route('menu.page');
        }

        if ($request->has('dough_type')) {
            $dough_type = explode(',', $request->dough_type);
            $request->merge(['dough_type_ar' => $dough_type[0]]);
            $request->merge(['dough_type_en' => $dough_type[1]]);
        }

        $request->merge(['withouts' => json_encode($request->withouts)]);
        $request->merge(['extras' => json_encode($request->extras)]);

        $return = (app(\App\Http\Controllers\Api\CartController::class)->getCart())->getOriginalContent();

        if ($return['data']->count() > 0) {
            foreach ($return['data'] as $item) {
                if ($item->item_id == $request->item_id) {
                    if (($item->extras == $request->extras) && ($item->withouts == $request->withouts) && ($item->dough_type_en == $request->dough_type_en)) {
                        $cart = Cart::find($item->id);
                        $cart->quantity = $cart->quantity + $request->quantity;
                        $cart->save();
                        return redirect()->route('menu.page');
                    }
                }
            }
        }

        $return = (app(\App\Http\Controllers\Api\CartController::class)->addCart($request))->getOriginalContent();
        return redirect()->route('menu.page');
    }

    public function get_cart () {

        $return = (app(\App\Http\Controllers\Api\CartController::class)->getCart())->getOriginalContent();

        if ($return['success'] == 'success') {
            $carts = $return['data'];
// foreach ($carts as $cart){
//     return $cart->item->name_en;
// }
            return view('website.cart', compact('carts'));
        }
    }

}
