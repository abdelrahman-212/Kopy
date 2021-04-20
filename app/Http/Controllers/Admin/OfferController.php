<?php

namespace App\Http\Controllers\Admin;

use File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Item;
use App\Models\Offer;
use App\Models\OfferBuyGet;
use App\Models\OfferDiscount;
use App\Models\User;
use Auth;
use Validator;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\Storage;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers = Offer::with('buyGet')->with('discount')->orderBy('created_at', 'DESC')->get();
        return view('admin.offer.index', compact('offers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.offer.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|min:3|max:20',
            'title_ar' => 'required|min:3|max:20',
            'service_type' => 'required|in:takeaway,delivery',
            'date_from' => 'required|date',
            'date_to' => 'required|date',
            'description' => 'nullable',
            'description_ar' => 'nullable',
            'image' => 'image|max:5000',
            'offer_type' => 'required',
        ]);

        if ($validator->fails())
            return redirect()->back()->withErrors($validator->errors());




        if ($request->offer_type == 'discount') {

            $validator = Validator::make($request->all(), [
                'discount_quantity' => 'required',
                'category_id' => 'required',
                'items' => 'required',
                'discount_type' => 'required',
                'discount_value' => 'required'
            ]);

            if ($validator->fails())
                return redirect()->back()->withErrors($validator->errors());
        }

        if ($request->offer_type == 'buy-get') {

            $validator = Validator::make($request->all(), [
                'buy_quantity' => 'required',
                'buy_category_id' => 'required',
                'buy_items' => 'required',
                'get_quantity' => 'required',
                'get_category_id' => 'required',
                'get_items' => 'required',
                'offer_price' => 'required'
            ]);

            if ($validator->fails())
                return redirect()->back()->withErrors($validator->errors());
        }



        $offer = Offer::create([
            'title' => $request->title,
            'title_ar' => $request->title_ar,
            'service_type' => $request->service_type,
            'date_from' =>  Carbon::createFromFormat('Y-m-d\TH:i', $request->date_from),
            'date_to' =>  Carbon::createFromFormat('Y-m-d\TH:i', $request->date_to),
            'description' => $request->description,
            'description_ar' => $request->description_ar,
            'image' => '',
            'offer_type' => $request->offer_type,
            'created_by' => $request->user()->id
        ]);

        if ($request->hasFile('image')) {
            $image = $request->image;
            $image_new_name = time() . $image->getClientOriginalName();
            $image->move(public_path('offers'), $image_new_name);
            $offer->image = '/offers/' . $image_new_name;
            $offer->save();
        } else {
            $image = '';
        }

        if ($request->has('buy_quantity') && $request->buy_quantity != null) {
            $buy_get_offer = OfferBuyGet::create([
                'offer_id' => $offer->id,
                'buy_quantity' => $request->buy_quantity,
                'buy_category_id' => $request->buy_category_id,
                'get_quantity' => $request->get_quantity,
                'get_category_id' => $request->get_category_id,
                'offer_price' => $request->offer_price,
            ]);

            $buy_get_offer->buyItems()->sync($request->buy_items);
            $buy_get_offer->getItems()->sync($request->get_items);
        }

        if ($request->has('discount_quantity') && $request->discount_quantity != null) {

            if (!$request->items) {
                return redirect()->back();
            }

            $discountOffer = OfferDiscount::create([
                'offer_id' => $offer->id,
                'quantity' => $request->discount_quantity,
                'category_id' => $request->category_id,
                'discount_type' => $request->discount_type,
                'discount_value' => $request->discount_value,
            ]);

            $discountOffer->items()->sync($request->items);
        }


        $users = User::whereHas('roles', function ($role) {
            $role->where('name', 'customer');
        })->get();

        foreach ($users as $user) {
            \App\Http\Controllers\NotificationController::pushNotifications($user->id,  "New Offer: " . $request->title, "Offer");
        }

        return redirect()->route('admin.offer.index')->with([
            'type' => 'success',
            'message' => 'Offer insert successfuly'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Offer $offer)
    {
        return view('admin.offer.show', compact('offer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Offer $offer)
    {

        // switch ($offer->offer_type) {
        //     case 'buy-get':
        //         $buy_items = $offer->buyGet->buy_items;
        //         if (strlen($buy_items) > 1) {
        //             $buy_items = explode(',', $buy_items);
        //         } else {
        //             $buy_items = array($buy_items);
        //         }
        //         $get_items = $offer->buyGet->get_items;
        //         if (strlen($get_items) > 1) {
        //             $get_items = explode(',', $get_items);
        //         } else {
        //             $get_items = array($get_items);
        //         }

        //         $buyItemsIds = explode(',', $offer->buyGet->buy_items);
        //         $buyItems = Item::whereIn('id', $buyItemsIds)->get();
        //         // dd($buyItems, $buyItemsIds);

        //         $getItemsIds = explode(',', $offer->buyGet->get_items);
        //         $getItems = Item::whereIn('id', $getItemsIds)->get();
        //         // dd($getItems, $getItemsIds);

        //         foreach ($getItems as $item) {

        //             if ($offer->buyGet->offer_price) {
        //                 $disccountValue = $item->price * $offer->buyGet->offer_price / 100 ;
        //                 $item->offer_price = $item->price - $disccountValue;
        //             } else {
        //                 $item->offer_price = 0;
        //             }
        //         }

        //         $items['buy_items'] = $buyItems;
        //         $items['get_items'] = $getItems;

        //         break;

        //     case 'discount':
        //         $items = $offer->discount->items;
        //         if (strlen($items) > 1) {
        //             $items = explode(',', $items);
        //         } else {
        //             $items = array($items);
        //         }
        //         $items = \App\Models\Item::whereIn('id', $items)->get();
        //         break;
        //     default:
        //         $items = array();
        //         break;
        // }
        $categories = \App\Models\Category::all();
        return view('admin.offer.edit', compact('offer', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offer $offer)
    {
        $attributes = $request->validate([
            'title' => 'required|min:3|max:20',
            'title_ar' => 'required|min:3|max:20',
            'service_type' => 'required',
            'date_from' => 'required|date',
            'date_to' => 'required|date',
            // 'branches' => 'required|array',
            'description' => 'nullable',
            'description_ar' => 'nullable',
            'image' => 'nullable|image|max:5000',
            'offer_type' => 'required',
        ]);
        // $branches = implode(",", $request->get('branches'));


        if ($request->hasFile('image')) {
            $image = $request->image;
            $image_new_name = time() . $image->getClientOriginalName();
            $image->move(public_path('offers'), $image_new_name);
            $offer->image = '/offers/' . $image_new_name;
            $offer->save();
        }


        $offer->update([
            'title' => $request->title,
            'title_ar' => $request->title_ar,
            'service_type' => $request->service_type,
            'date_from' =>  Carbon::createFromFormat('Y-m-d\TH:i', $request->date_from),
            'date_to' =>  Carbon::createFromFormat('Y-m-d\TH:i', $request->date_to),

            // 'branches' => $branches,
            'description' => $request->description,
            'description_ar' => $request->description_ar,
            'offer_type' => $request->offer_type,
            'updated_by' => Auth::user()->id
        ]);
        
        if ($request->offer_type == 'discount') {

            $validator = Validator::make($request->all(), [
                'discount_quantity' => 'required',
                'category_id' => 'required',
                'items' => 'required',
                'discount_type' => 'required',
                'discount_value' => 'required'
            ]);

            if ($validator->fails())
                return redirect()->back()->withErrors($validator->errors());
        }

        if ($request->offer_type == 'buy-get') {

            $validator = Validator::make($request->all(), [
                'buy_quantity' => 'required',
                'buy_category_id' => 'required',
                'buy_items' => 'required',
                'get_quantity' => 'required',
                'get_category_id' => 'required',
                'get_items' => 'required',
                'offer_price' => 'required'
            ]);

            if ($validator->fails())
                return redirect()->back()->withErrors($validator->errors());
        }

        if ($request->has('buy_quantity') && $request->buy_quantity != null) {

            $offer->buyGet()->updateOrCreate([
                'offer_id' => $offer->id,
                'buy_quantity' => $request->buy_quantity,
                'buy_category_id' => $request->buy_category_id,
                'get_quantity' => $request->get_quantity,
                'get_category_id' => $request->get_category_id,
                'offer_price' => $request->offer_price,
            ]);

            $offer->buyGet->buyItems()->sync($request->buy_items);
            $offer->buyGet->getItems()->sync($request->get_items);
            $now = new DateTime();
            $offer->updated_at = $now;
            $offer->save();
        }

        if ($request->has('discount_quantity') && $request->discount_quantity != null) {
            $offer->discount->offer_id = $offer->id;
            $offer->discount->quantity = $request->discount_quantity;
            $offer->discount->category_id = $request->category_id;
            $offer->discount->discount_type = $request->discount_type;
            $offer->discount->discount_value = $request->discount_value;
            $offer->discount->save();
            $offer->discount->items()->sync($request->items);
            $now = new DateTime();
            $offer->updated_at = $now;
            $offer->save();
        }

        return redirect()->route('admin.offer.index')->with([
            'type' => 'success',
            'message' => 'Offer updated successfuly'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offer $offer)
    {
        $offer->delete();

        return redirect()->route('admin.offer.index')->with([
            'type' => 'error',
            'message' => 'Offer deleted successfuly'
        ]);
    }
}
