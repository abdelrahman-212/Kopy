<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoyalityController extends Controller
{
    public function get_loyalty()
    {
        $request = new \Illuminate\Http\Request();

        $return2 = (app(\App\Http\Controllers\Api\AuthController::class)->getUserPoints($request))->getOriginalContent();
        if ($return2['success'] == 'success') {
            $points = $return2['data'];
        }

        return view('website.loyalty-points', compact(['points']));
    }

    public function get_loyalty_exchange()
    {

        $request = new \Illuminate\Http\Request();
        $return2 = (app(\App\Http\Controllers\Api\AuthController::class)->getUserPoints($request))->getOriginalContent();
        if ($return2['success'] == 'success') {
            $points = $return2['data'];
             $return = (app(\App\Http\Controllers\Api\CartController::class)->getCart())->getOriginalContent();

            if ($return['success'] == 'success') {
                $cart = $return['data'];

                if ($cart->isEmpty()) {
                    session()->put(['point_claim_value' => $points['points_value']]);
                    session()->put(['point_claim'=>$points['user_points']]);
                    return redirect()->route('home.page');
                } else {

                    session()->put(['point_claim_value' => $points['points_value']]);
                    session()->put(['point_claim'=>$points['user_points']]);
                     return redirect()->route('get.cart');

                }
            }
        }


    }

}
