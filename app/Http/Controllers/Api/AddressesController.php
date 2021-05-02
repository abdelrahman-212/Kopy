<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController;
use App\Models\Address;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use App\Models\City;
use App\Models\Area;

class AddressesController extends BaseController
{

    protected $validationRules = [
        'name' => ['string', 'required'],
        'street' => ['string', 'nullable'],
        'building_number' => ['string', 'nullable'],
        'floor_number' => ['int', 'nullable'],
        'landmark' => ['string', 'nullable'],
        'city_id' => ['required', 'exists:cities,id'],
        'area_id' => ['required', 'exists:areas,id'],
        'customer_id' => ['exists:customer,id'],
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $guard = 'api')
    {
        if ($request->user()) {
                $user = $request->user();
        }
        else {
            $user = auth()->guard($guard)->user();
        }
        $address = Address::where('customer_id', $user->id)->orderBy('created_at', 'DESC')->get();
        return $this->sendResponse($address, 'The addresses returned successfuly');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), $this->validationRules);

        if ($validator->fails()) {
            return $this->sendError('Validation Error!', $validator->errors(), 400);
        }

        // attach customer reference
        if ($request->user()) {
            if ($request->user()->hasRole('customer')) {
                $request->merge(['customer_id' => $request->user()->id]);
            }
        }
        else {
            if (auth()->user()->hasRole('customer')) {
                $request->merge(['customer_id' => auth()->user()->id]);
            }
        }
        
        if ($request->has('_token')) {
            unset($request['_token']);
        }
        $address = Address::firstOrCreate($request->all());

        if (!$address) {
            return $this->sendError("Address not created!", 400);
        }


        return $this->sendResponse($address, 'The address created successfuly');
    }

    public function sotreWithMaps(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string',],
            'street' => ['nullable', 'string'],
            'building_number' => ['nullable', 'string'],
            'floor_number' => ['nullable', 'string'],
            'landmark' => ['nullable'],
            'city' => ['nullable', 'string'],
            'area' => ['nullable', 'string'],
            'customer_id' => ['exists:customer,id'],
        ]);

        if ($validator->fails())
            return $this->sendError('Validation Error!', $validator->errors(), 400);

        $city = City::where('name_en', "LIKE", "%$request->city%")->orWhere('name_ar', "LIKE", "%$request->city%")->first();
        $area = Area::where('name_en', "LIKE", "%$request->area%")->orWhere('name_ar', "LIKE", "%$request->area%")->first();

        // TODO: handle errors
        if (!$city or !$area)
            return $this->sendError('Some information not correct');

        // attach customer reference
        if ($request->user()) {
            if ($request->user()->hasRole('customer')) {
                    $request->merge([
                        'customer_id' => $request->user()->id,
                        'city_id' => $city->id,
                        'area_id' => $area->id
                    ]);
            }
        }
        else {
            if (auth()->user()->hasRole('customer')) {
                $request->merge([
                        'customer_id' => auth()->user()->id,
                        'city_id' => $city->id,
                        'area_id' => $area->id
                    ]);
            }
        }

        $address = Address::firstOrCreate($request->all());

        if (!$address)
            return $this->sendError("Address not created!", 400);

        return $this->sendResponse($address, 'The address created successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Address $address)
    {
        return $this->sendResponse($address, 'Address returned successfuly');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Address $address)
    {
        $validator = Validator::make($request->all(), $this->validationRules);
        if ($validator->fails()) {
            return $this->sendError($validator->errors(), 'Validation Errors', 400);
        }

        if (!$address->update($request->all())) {
            return $this->sendError('Error!', 500);
        }

        return $this->sendResponse(null, 'The address updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Address $address, Request $request, $guard = 'api')
    {
        if ($request->user()) {
            if ($address->customer->id == $request->user()->id) {
                if ($address->delete())
                    return $this->sendResponse(null, 'The address deleted successfully!');
            }
        }
        else {
            if ($address->customer->id == auth()->user()->id) {
                if ($address->delete())
                    return $this->sendResponse(null, 'The address deleted successfully!');
            }
        }

        return $this->sendError('The cannot be deleted');
    }
}
