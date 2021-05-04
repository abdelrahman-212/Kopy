<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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


        $return2 = (app(\App\Http\Controllers\Api\AuthController::class)->changeUserPoints())->getOriginalContent();
         return $return2;
    }

}
