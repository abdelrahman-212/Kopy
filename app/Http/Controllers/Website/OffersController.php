<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OffersController extends Controller
{
    public function get_offers(){
        $return = (app(\App\Http\Controllers\Api\OffersController::class)->index())->getOriginalContent();
        if ($return['success'] == 'success') {
            $message = $return['message'];
        }
        return $return;
         return view('website.offers');
    }
}
