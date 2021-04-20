<?php

namespace App\Http\Controllers\Api;

use App\Models\City;
use Illuminate\Http\Request;

class HelperController extends BaseController
{

    public function getCities() {
        $cities = City::get();

        return $this->sendResponse($cities, 'test');
    }


    public function getAreas(Request $request, City $city) {
        $areas = $city->areas;
        return $areas;
    }


}
