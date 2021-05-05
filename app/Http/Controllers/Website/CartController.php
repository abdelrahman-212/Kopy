<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function get_cart()
    {
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
