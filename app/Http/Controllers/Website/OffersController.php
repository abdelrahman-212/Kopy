<?php

namespace App\Http\Controllers\Website;

use App\Filters\OfferFilters;
use App\Models\Address;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OffersController extends Controller
{
    public function get_offers()
    {
        $request = new \Illuminate\Http\Request();

        $request->merge(['branches' => 16]);
        $filters = new OfferFilters($request);
        $return = (app(\App\Http\Controllers\Api\OffersController::class)->index($request, $filters))->getOriginalContent();
        if ($return['success'] == 'success') {
            $offers = $return['data'];
        }
        if (session()->has('service_type')) {

            $collection = collect($offers->json());
            $filtered = $collection->whereIn('service_type', session()->get('service_type'));
            $offers = $filtered->all();
            return view('website.offers', compact(['offers']));

        } else {


            return view('website.offers', compact(['offers']));

            return "Pleas Chose Service Type";
        }
    }
}
