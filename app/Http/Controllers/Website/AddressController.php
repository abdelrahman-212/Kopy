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
            return redirect()->route('profile')->with(['success' => 'address deleted successfully']);
        }
    }

    public function update(Address $address, Request $request)
    {
        $success= 'Unauthorized, Please Check Your Credentials.';

        $return = (app(\App\Http\Controllers\Api\AddressesController::class)->update($request, $address, 'web'))->getOriginalContent();
        if ($return['success'] == true) {
            $success= 'Unauthorized, Please Check Your Credentials.';
             return redirect()->route('profile')->with(compact(['success']));
        }


        if ($return['success'] == false) {
            $errorarray = [];
            if (array_key_exists('message', $return)) {
                $errorarray['message'] = "Update Addresses Failed";

                return view('website.profile', compact(['errorarray']));
            } else {
                if ($return['error']->first('city_id')) {
                    $errorarray['city_id'] = $return['message']->first('city_id');
                }
                if ($return['error']->first('name')) {
                    $errorarray['name'] = $return['message']->first('name');
                }
                if ($return['error']->first('password')) {
                    $errorarray['area_id'] = $return['message']->first('area_id');
                }

                return view('website.profile', compact(['errorarray']));
            }
            return redirect()->route('profile')->with(compact(['success']));
        }

    }
}
