<?php

namespace App\Http\Controllers\Website;

use App\Models\Address;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddressController extends Controller
{
    public function get_address()
    {

        $request = new \Illuminate\Http\Request();


        $return = (app(\App\Http\Controllers\Api\AddressesController::class)->index($request, 'web'))->getOriginalContent();
        if ($return['success'] == 'success') {
            $addresses = $return['data'];

        }
        //return  $menu;
        return view('website.profile', compact(['addresses']));
    }

    public function delete(Address $address)
    {
        $request = new \Illuminate\Http\Request();
        $return = (app(\App\Http\Controllers\Api\AddressesController::class)->destroy($address, $request, 'web'))->getOriginalContent();
        if ($return['success'] == 'success') {
            return view('website.profile')->with(['success' => 'address deleted successfully']);

        }
    }

    public function update(Address $address)
    {
        $request = new \Illuminate\Http\Request();
        $return = (app(\App\Http\Controllers\Api\AddressesController::class)->update($address, $request, 'web'))->getOriginalContent();
        if ($return['success'] == 'success') {
            return view('website.profile')->with(['success' => 'address deleted successfully']);

        }
    }
}
