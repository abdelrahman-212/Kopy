<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Filters\OfferFilters;
use App\Http\Controllers\Api\BaseController;
use App\Models\Extra;
use App\Models\Offer;
use App\Models\Item;
use App\Models\Order;
use App\Models\Without;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class OffersController extends BaseController
{
    public function index(Request $request, OfferFilters $filters)
    {
        $offers = Offer::with('buyGet', 'discount')->filter($filters)->get();
        return $this->sendResponse($offers, 'Offers retreived successfully');
    }

    public function get(Request $request, Offer $offer)
    {

        $result = $offer->toArray();


        // if ($offer->offer_type == 'buy-get') {


        //     $buyItemsIds = explode(',', $offer->buyGet->buy_items);
        //     //dd($offer->buyGet->buyCategory->items);
        //     $buyItems = $offer->buyGet->buyCategory->items;
        //     // dd($buyItems, $buyItemsIds);

        //     //$getItemsIds = explode(',', $offer->buyGet->get_items);
        //     $getItems = $offer->buyGet->getCategory->items;
        //     // dd($getItems, $getItemsIds);

        //     foreach ($getItems as $item) {

        //         if ($offer->buyGet->offer_price) {
        //             $disccountValue = $item->price * $offer->buyGet->offer_price / 100;
        //             $item->offer_price = $item->price - $disccountValue;
        //         } else {
        //             $item->offer_price = 0;
        //         }
        //     }


        //     $details = $offer->buyGet;
        //     $details['buy_items'] = $buyItems;
        //     $details['get_items'] = $getItems;

        //     $result['details'] = $details;

        //     return $this->sendResponse($result, 'offer detials');
        // }
        
        if ($offer->offer_type == 'buy-get') {

            $buy_items = $offer->buyGet->buyItems;

            $get_items = $offer->buyGet->getItems;

            foreach ($get_items as $item) {

                if ($offer->buyGet->offer_price) {
                    $disccountValue = $item->price * $offer->buyGet->offer_price / 100;
                    $item->offer_price = $item->price - $disccountValue;
                } else {
                    $item->offer_price = 0;
                }
            }
            $details = $offer->buyGet;
            $details['buy_items'] = $buy_items;
            $details['get_items'] = $get_items;
            $details['buy_category'] = $offer->buyGet->buyCategory;
            $details['get_category'] = $offer->buyGet->getCategory;

            $result['details'] = $details;
            return $this->sendResponse($result, 'offer detials');
        }

        if ($offer->offer_type == 'discount') {
            //dd($offer->discount);
            $itemsIds = explode(',', $offer->discount->items);
            $items = Item::whereIn('id', $itemsIds)->get();

            foreach ($items as $item) {
                if ($offer->discount->discount_type == 1) {
                    $disccountValue = $item->price * $offer->discount->discount_value / 100;
                    $item->offer_price = $item->price - $disccountValue;
                } elseif ($offer->discount->discount_type == 2) {
                    $item->offer_price = $item->price - $offer->discount->discount_value;
                }
            }

            $details = $offer->discount;
            $details['items'] = $items;

            $result['details'] = $details;

            return $this->sendResponse($result, 'offer details');
        }

        return $offer->with('buyGet', 'discount')->first()->toJson();
    }
    
     public function check(Request $request)
    {
        $order = Order::find($request->order_id);

        // check if order exists in DB
        if (!$order) {
            return $this->sendError("Order not found");
        }

        // Get address or branch based on service_type
        $location = [
            'service_type' => $order->service_type
        ];

        if ($order->service_type == 'takeaway') {
            $location['branch'] = $order->branch;
        } else {
            $location['address'] = $order->address;
        }

        // fetch order items information (e.g. item_id, offer_id, offer_last_updated_at)
        // from 'order_item' table
        // Remove items that is hidden by branch
        // Load Extras, Withouts with pivot items

        $visiblePivotItems = collect();
        //dd($visiblePivotItems);
        $visiblePivotRows = DB::table("order_item")->where('order_id', $order->id)
            ->get()
            ->filter(function ($pivot) use ($order, &$visiblePivotItems) {
                $item = Item::find($pivot->item_id);

                $additionals = $this->getAdditionals($pivot);
                $pivot->extras = $additionals['extras'];
                $pivot->withouts = $additionals['withouts'];
                $pivot->item = $additionals['item'];


                if ($item && !$item->isHiddenByBranch($order->branch_id)) {
                    $visiblePivotItems->push($item);
                    return true;
                }

                return false;
            });
        $offerIds = $visiblePivotRows->pluck('offer_id')->filter(function ($id) {
            return !empty($id);
        })->toArray();
        $offers = Offer::find($offerIds);
        $total = 0;

        $discountTypes = [
            'percentage' => 1,
            'amount' => 2,
        ];

        $offers = $offers->map(function ($offer) use ($visiblePivotRows, $visiblePivotItems, &$total, $discountTypes, $order) {
            $sub_offer = $offer ? $offer->details : null;

            $offerBuyItemsQry = $offer->offer_type == 'discount' ? $sub_offer->items() : $sub_offer->buyItems();
            //dd($offerBuyItemsQry);
            $visibleOfferPivotRows = $visiblePivotRows->where('offer_id', $offer->id)->values();

            //Filter items hidden by order branch
            $offerBuyItems = $offerBuyItemsQry->get();
            //dd($offerBuyItems);
            $offerGetItems = $offer->offer_type == 'buy-get' ? $sub_offer->getItems()->get() : collect();

            $offerBuyItemsIds = $offerBuyItems->pluck('id')->toArray();

            $offerGetItemsIds = $offerGetItems->pluck('id')->toArray();

            $visibleOfferPivotRowsItemIds = $visibleOfferPivotRows->pluck('item_id')->toArray();
            $visibleOfferPivotRowsItems = $visiblePivotItems->whereIn('id', $visibleOfferPivotRowsItemIds)->values();
            dd($visibleOfferPivotRowsItems);
            // sum of related items purchased quantity
            $purchasedQty = $visibleOfferPivotRows->sum('quantity');
            $offerQty = $offer->offer_type == 'buy-get' ? $sub_offer->buy_quantity + $sub_offer->get_quantity : $sub_offer->quantity;

            $is_valid = false;
            $is_updated = false;

            // The valid offer is an offer:
            /**
             * 1- Offer not expired or Deleted
             * 2- Related offer items are the same as order items or included.
             * 3- In case of buy-get offer, the GET items must be exists in My DB
             * 4- Purchased quantity must be the greater than offer quantity.
             * 5- Offer doesn't contain items hidden by branch
             */

            if ($offer && $sub_offer && now()->between($offer->date_from, $offer->date_to)) {

                // dd($visibleOfferPivotRowsItemIds, $offerBuyItemsIds);

                /**********************(Discount)*********************
                 * If the offer_type is discount then the items check is valid when
                 * The order contains one item at least found in offer related items.
                 * The ordered quantity is equal to the offer specified quantity
                 **********************(Buy-Get)**********************
                 * If the offer_type is buy-get then the items check is valid when
                 * The order contains one buy item at least found in offer related buy items.
                 * The order contains one get item at least found in offer related get items.
                 * The ordered quantity for buy items is equal to the offer specified buy quantity
                 * The ordered quantity for get items is equal to the offer specified get quantity
                 */
                $is_items_check_valid = false;
                $is_quantity_check_valid = false;

                if ($offer->offer_type == 'discount') {
                    $is_items_check_valid = count(array_intersect($visibleOfferPivotRowsItemIds, $offerBuyItemsIds)) > 0;
                    $is_quantity_check_valid = $purchasedQty >= $offerQty;
                } else {
                    // Buy-Get Offer type
                    $pivotBuyItemsIds = $visibleOfferPivotRows->where('offer_price', '>', 0)->pluck('item_id')->toArray();
                    //dd($pivotBuyItemsIds);
                    $pivotGetItemsIds = $visibleOfferPivotRows->where('offer_price',  0)->pluck('item_id')->toArray();
                    //dd($pivotGetItemsIds);
                    $is_items_check_valid = count(array_intersect($pivotGetItemsIds, $offerGetItemsIds)) >= 0 && count(array_intersect($pivotBuyItemsIds, $offerBuyItemsIds)) >= 0;

                    $pivotGetItemsQty = $visibleOfferPivotRows->where('offer_price', 0)->sum('quantity');
                    $pivotBuyItemsQty = $visibleOfferPivotRows->where('offer_price', '>',  0)->sum('quantity');
                    $is_quantity_check_valid = $pivotGetItemsQty >= $offer->get_quantity && $pivotBuyItemsQty >= $offer->buy_quantity;
                }

                $is_valid = $is_items_check_valid;
            }

            // The updated offer is an offer:
            /**
             * 1- Last updated at timestamp is the less than the current one.
             */
            if (
                $offer &&
                (
                    (!empty($visibleOfferPivotRows->first()->offer_last_updated_at) &&
                        $offer->updated_at->gt($visibleOfferPivotRows->first()->offer_last_updated_at)))
            ) {
                $is_updated = true;
            }
                if ($is_updated == true){
                    $is_valid = false;
                }
            //$is_valid = false;

            $itemOfferPrices = 0; // Offer final total

            if ($is_valid) {
                // Incase of discount offer
                if ($offer->offer_type == 'discount') {


                    //$visiblePivotRows = DB::table("order_item")->where('order_id', $order->id)->get();
                    // The initial itemPrices = sum of latest items prices.
                    //$itemPrices = $visiblePivotRows->where('offer_id', $offer->id)->sum('offer_price') ?: 0;
                    $itemPrices = $visibleOfferPivotRowsItems->sum('price') ?: 0;


                    // dd('Discount'); // PASSED
                    $discountType = $sub_offer->discount_type;
                    $discountValue = $sub_offer->discount_value;

                    if ($discountType == $discountTypes['percentage']) {
                        $itemOfferPrices = $itemPrices - ($itemPrices * $discountValue / 100);
                    } else if ($discountType == $discountTypes['amount']) {

                        $itemOfferPrices = $itemPrices - $discountValue;
                        //dd($itemOfferPrices);
                    }
                    //dd($purchasedQty);
                    // Calculate the final item price after discount * ordered quantity
                    $itemOfferPrices *= $purchasedQty;
                } else {
                    // The initial itemPrices = sum of latest Buy items prices.
                    //$itemPrices = $visibleOfferPivotRowsItems->whereIn('id', $offerBuyItemsIds)->sum('price') ?: 0;
                    //dd($offerBuyItemsIds);
                    // dd('Buy-Get'); // PASSED

                    // Calculate the item prices before discount * ordered buy quantity
                    //dd($offer->buyGet->buy_quantity);
                    //$itemOfferPrices = $itemPrices * $offer->buyGet->buy_quantity;
                    
                    $order_item = DB::table('order_item')->where([
                        ['order_id', $order->id],
                        ['offer_id', $offer->id],
                        ['offer_price', '!=', 0]
                    ])->get();

                    foreach ($order_item as $row) {
                        $item = Item::where('id', $row->item_id)->first();
                        $itemOfferPrices += $item->price * $row->quantity;
                    }

                    //dd($itemOfferPrices); // PASSED

                    /**
                     * The total price of items to get when offer is applied is calculated:
                     * 1- Get the sum of all items before discount
                     * 2- Get The sum of all items after appling discount
                     * 3- Multiply: the sum of all items after discount (X) the number of times to apply the offer based on demanded quantity.
                     *
                     * UNCOMMENT THE FOLLOWING CODE (in case you want to apply offer discount for get items)

                        $getItems = $visibleOfferPivotRowsItems->whereIn('id', $offerGetItemsIds)->values();
                        $getItemsPriceBeforeDiscount = $getItems->sum('price') ?: 0;
                        $getItemsPriceAfterDiscount = $getItemsPriceBeforeDiscount - ($getItemsPriceBeforeDiscount * $sub_offer->offer_price / 100);

                        $howManyTimesToApplyOffer = floor($purchasedQty / $offerQty);
                        $getItemsTotalAfterDiscount = $howManyTimesToApplyOffer * $getItemsPriceAfterDiscount;


                        // Calculate the final item price + the price items to get from offer (get items price * get items quanity).
                        $itemOfferPrices += $getItemsTotalAfterDiscount * $getItems->count();
                     */

                    // dd($getItemsPriceBeforeDiscount, $rItem['offer']->details->offer_price, $getItemsPriceAfterDiscount, $howManyTimesToApplyOffer, $getItemsTotalAfterDiscount, $itemOfferPrice); // PASSED

                }
            } else {

                $order_item = DB::table('order_item')->where('order_id', $order->id)->where('offer_id', $offer->id)->get();
                //dd($order_item);
                foreach ($order_item as $row) {
                    $item = Item::where('id', $row->item_id)->first();
                    
                    //$row->offer_price = $item->price;
                    //$row->save();
                    $itemOfferPrices += $item->price * $row->quantity;
                }
            }

            // Calculate Extras for offers
            $itemOfferPrices = $visibleOfferPivotRows->reduce(function ($carry, $p) {
                //dd($p->quantity);
                return $carry + $p->extras->sum('price') * $p->quantity;
            }, $itemOfferPrices);

            $total += $itemOfferPrices;
            return [
                'offer' => $offer,
                'order_items' => $this->getOfferItems($offer, $visibleOfferPivotRows, $offerBuyItems, $offerGetItems, $is_valid),
                'is_valid' => $is_valid,
                'is_updated' => $is_updated,
                'final_offer_price' =>  $itemOfferPrices,
            ];
        });

        $noOffers = $visiblePivotRows
            ->filter(function ($row) {
                return empty($row->offer_id);
            })
            ->map(function ($pivot) use ($visiblePivotItems, &$total) {

                $item = $visiblePivotItems->where('id', $pivot->item_id)->first();
                $qty = $pivot->quantity;

                // Calculate final price without extras
                $final_item_price = $item->price * $qty;
                // Add extras to final price
                $final_item_price += $pivot->extras->sum('price') * $qty;

                $total += $final_item_price;

                $pivot->offer_price = $item->price;
                $pivot->calories = $item->calories;
                $order_items = $pivot;

                return compact('order_items', 'final_item_price');
            })->values();


        $taxes = round($total * .15, 2);
        $delivery_fees = $order->service_type == 'delivery' ? 10 : 0;
        $subtotal = $total;
        $total += $taxes + $delivery_fees;

        $reorder = compact('location', 'offers', 'noOffers', 'total', 'subtotal', 'taxes', 'delivery_fees');

        if ($request->has('confirm') && $request->input('confirm')) {
            $newOrder = $order->replicate();

            $newOrder->subtotal = $subtotal;
            $newOrder->taxes = $taxes;
            $newOrder->delivery_fees = $delivery_fees;
            $newOrder->total = $total;

            $newOrder->save();

            /**
             * Attach offers items
             */
            foreach ($reorder['offers'] as $offer) {
                foreach ($offer['order_items'] as $item) {
                    if($offer['is_valid'] == true)
                    {
                        $newOrder->items()->attach($item->item_id, [
                            'item_extras' =>   $item->item_extras,
                            'item_withouts' =>   $item->item_withouts,
                            'dough_type_ar' => $item->dough_type_ar,
                            'dough_type_en' => $item->dough_type_en,
                            'price' => 0,
                            'offer_price' => $item->offer_price,
                            'offer_id' =>  $offer['offer']->id, // TODO: Add offer_id
                            'offer_last_updated_at' =>  $offer['offer']->updated_at, // TODO: Add offer_last_updated_at
                            'quantity' => $item->quantity,
                        ]);
                    }
                    else{
                        //dd($item->item_id);
                        $mainItem = Item::where('id', $item->item_id)->first();
                        //dd($mainItem);
                        $newOrder->items()->attach($item->item_id, [
                            'item_extras' =>   $item->item_extras,
                            'item_withouts' =>   $item->item_withouts,
                            'dough_type_ar' => $item->dough_type_ar,
                            'dough_type_en' => $item->dough_type_en,
                            'price' => 0,
                            'offer_price' => $mainItem->price,
                            'offer_id' =>  null, // TODO: Add offer_id
                            'offer_last_updated_at' =>  $offer['offer']->updated_at, // TODO: Add offer_last_updated_at
                            'quantity' => $item->quantity,
                        ]);
                    }
                }
            }

            /**
             * Attach no offers items
             */
            foreach ($reorder['noOffers'] as $offer) {
                $newOrder->items()->attach($offer['order_items']->item_id, [
                    'item_extras' =>   $offer['order_items']->item_extras,
                    'item_withouts' =>   $offer['order_items']->item_withouts,
                    'dough_type_ar' => $offer['order_items']->dough_type_ar,
                    'dough_type_en' => $offer['order_items']->dough_type_en,
                    'price' => 0,
                    'offer_price' => $offer['order_items']->offer_price,
                    'offer_id' => null, // TODO: Add offer_id
                    'offer_last_updated_at' => null, // TODO: Add offer_last_updated_at
                    'quantity' => $offer['order_items']->quantity,
                ]);
            }

            return $this->sendResponse($newOrder, 'Order confirmed successlly');
        }

        return $this->sendResponse($reorder, 'Success.');
    }

    // public function check(Request $request)
    // {
    //     $order = Order::find($request->order_id);

    //     // check if order exists in DB
    //     if (!$order) {
    //         return $this->sendError("Order not found");
    //     }

    //     // Get address or branch based on service_type
    //     $location = [
    //         'service_type' => $order->service_type
    //     ];

    //     if ($order->service_type == 'takeaway') {
    //         $location['branch'] = $order->branch;
    //     } else {
    //         $location['address'] = $order->address;
    //     }

    //     // fetch order items information (e.g. item_id, offer_id, offer_last_updated_at)
    //     // from 'order_item' table
    //     // Remove items that is hidden by branch
    //     // Load Extras, Withouts with pivot items

    //     $visiblePivotItems = collect();
    //     //dd($visiblePivotItems);
    //     $visiblePivotRows = DB::table("order_item")->where('order_id', $order->id)
    //         ->get()
    //         ->filter(function ($pivot) use ($order, &$visiblePivotItems) {
    //             $item = Item::find($pivot->item_id);

    //             $additionals = $this->getAdditionals($pivot);
    //             $pivot->extras = $additionals['extras'];
    //             $pivot->withouts = $additionals['withouts'];
    //             $pivot->item = $additionals['item'];


    //             if ($item && !$item->isHiddenByBranch($order->branch_id)) {
    //                 $visiblePivotItems->push($item);

    //                 return true;
    //             }

    //             return false;
    //         });
    //     $offerIds = $visiblePivotRows->pluck('offer_id')->filter(function ($id) {
    //         return !empty($id);
    //     })->toArray();

    //     $offers = Offer::find($offerIds);
    //     $total = 0;

    //     $discountTypes = [
    //         'percentage' => 1,
    //         'amount' => 2,
    //     ];

    //     $offers = $offers->map(function ($offer) use ($visiblePivotRows, $visiblePivotItems, &$total, $discountTypes, $order) {
    //         $sub_offer = $offer ? $offer->details : null;
    //         //dd($sub_offer);
    //         $offerBuyItemsQry = $offer->offer_type == 'discount' ? $sub_offer->items() : $sub_offer->buyItems();
    //         $visibleOfferPivotRows = $visiblePivotRows->where('offer_id', $offer->id)->values();
    //         //Filter items hidden by order branch
    //         $offerBuyItems = $offerBuyItemsQry->get();
    //         $offerGetItems = $offer->offer_type == 'buy-get' ? $sub_offer->getItems()->get() : collect();

    //         $offerBuyItemsIds = $offerBuyItems->pluck('id')->toArray();
    //         $offerGetItemsIds = $offerGetItems->pluck('id')->toArray();

    //         $visibleOfferPivotRowsItemIds = $visibleOfferPivotRows->pluck('item_id')->toArray();
    //         $visibleOfferPivotRowsItems = $visiblePivotItems->whereIn('id', $visibleOfferPivotRowsItemIds)->values();

    //         // sum of related items purchased quantity
    //         $purchasedQty = $visibleOfferPivotRows->sum('quantity');
    //         $offerQty = $offer->offer_type == 'buy-get' ? $sub_offer->buy_quantity + $sub_offer->get_quantity : $sub_offer->quantity;

    //         $is_valid = false;
    //         $is_updated = false;

    //         // The valid offer is an offer:
    //         /**
    //          * 1- Offer not expired or Deleted
    //          * 2- Related offer items are the same as order items or included.
    //          * 3- In case of buy-get offer, the GET items must be exists in My DB
    //          * 4- Purchased quantity must be the greater than offer quantity.
    //          * 5- Offer doesn't contain items hidden by branch
    //          */

    //         if ($offer && $sub_offer && now()->between($offer->date_from, $offer->date_to)) {

    //             // dd($visibleOfferPivotRowsItemIds, $offerBuyItemsIds);

    //             /**********************(Discount)*********************
    //              * If the offer_type is discount then the items check is valid when
    //              * The order contains one item at least found in offer related items.
    //              * The ordered quantity is equal to the offer specified quantity
    //              **********************(Buy-Get)**********************
    //              * If the offer_type is buy-get then the items check is valid when
    //              * The order contains one buy item at least found in offer related buy items.
    //              * The order contains one get item at least found in offer related get items.
    //              * The ordered quantity for buy items is equal to the offer specified buy quantity
    //              * The ordered quantity for get items is equal to the offer specified get quantity
    //              */
    //             $is_items_check_valid = false;
    //             $is_quantity_check_valid = false;

    //             if ($offer->offer_type == 'discount') {
    //                 $is_items_check_valid = count(array_intersect($visibleOfferPivotRowsItemIds, $offerBuyItemsIds)) > 0;
    //                 $is_quantity_check_valid = $purchasedQty >= $offerQty;
    //             } else {
    //                 // Buy-Get Offer type
    //                 $pivotBuyItemsIds = $visibleOfferPivotRows->where('offer_price', '>', 0)->pluck('item_id')->toArray();
    //                 $pivotGetItemsIds = $visibleOfferPivotRows->where('offer_price',  0)->pluck('item_id')->toArray();
    //                 $is_items_check_valid = count(array_intersect($pivotGetItemsIds, $offerGetItemsIds)) > 0 && count(array_intersect($pivotBuyItemsIds, $offerBuyItemsIds)) > 0;

    //                 $pivotGetItemsQty = $visibleOfferPivotRows->where('offer_price', 0)->sum('quantity');
    //                 $pivotBuyItemsQty = $visibleOfferPivotRows->where('offer_price', '>',  0)->sum('quantity');
    //                 $is_quantity_check_valid = $pivotGetItemsQty >= $offer->get_quantity && $pivotBuyItemsQty >= $offer->buy_quantity;
    //             }

    //             $is_valid = $is_items_check_valid;
    //         }

    //         // The updated offer is an offer:
    //         /**
    //          * 1- Last updated at timestamp is the less than the current one.
    //          */
    //         if (
    //             $offer &&
    //             (
    //                 (!empty($visibleOfferPivotRows->first()->offer_last_updated_at) &&
    //                     $offer->updated_at->gt($visibleOfferPivotRows->first()->offer_last_updated_at)))
    //         ) {
    //             $is_updated = true;
    //         }



    //         $itemOfferPrices = 0; // Offer final total

    //         if ($is_valid) {

    //             // Incase of discount offer
    //             if ($offer->offer_type == 'discount') {

    //                 // The initial itemPrices = sum of latest items prices.
    //                 $itemPrices = $visibleOfferPivotRowsItems->sum('price') ?: 0;

    //                 // dd('Discount'); // PASSED
    //                 $discountType = $sub_offer->discount_type;
    //                 $discountValue = $sub_offer->discount_value;

    //                 if ($discountType == $discountTypes['percentage']) {
    //                     $itemOfferPrices = $itemPrices - ($itemPrices * $discountValue / 100);
    //                 } else if ($discountType == $discountTypes['amount']) {
    //                     $itemOfferPrices = $discountValue;
    //                 }

    //                 // Calculate the final item price after discount * ordered quantity
    //                 $itemOfferPrices *= $purchasedQty;
    //             } else {
    //                 // The initial itemPrices = sum of latest Buy items prices.
    //                 $itemPrices = $visibleOfferPivotRowsItems->whereIn('id', $offerBuyItemsIds)->sum('price') ?: 0;


    //                 // dd('Buy-Get'); // PASSED

    //                 // Calculate the item prices before discount * ordered buy quantity
    //                 $itemOfferPrices = $itemPrices * $offer->buy_quantity;

    //                 // dd($itemOfferPrice); // PASSED

    //                 /**
    //                  * The total price of items to get when offer is applied is calculated:
    //                  * 1- Get the sum of all items before discount
    //                  * 2- Get The sum of all items after appling discount
    //                  * 3- Multiply: the sum of all items after discount (X) the number of times to apply the offer based on demanded quantity.
    //                  *
    //                  * UNCOMMENT THE FOLLOWING CODE (in case you want to apply offer discount for get items)

    //                     $getItems = $visibleOfferPivotRowsItems->whereIn('id', $offerGetItemsIds)->values();
    //                     $getItemsPriceBeforeDiscount = $getItems->sum('price') ?: 0;
    //                     $getItemsPriceAfterDiscount = $getItemsPriceBeforeDiscount - ($getItemsPriceBeforeDiscount * $sub_offer->offer_price / 100);

    //                     $howManyTimesToApplyOffer = floor($purchasedQty / $offerQty);
    //                     $getItemsTotalAfterDiscount = $howManyTimesToApplyOffer * $getItemsPriceAfterDiscount;


    //                     // Calculate the final item price + the price items to get from offer (get items price * get items quanity).
    //                     $itemOfferPrices += $getItemsTotalAfterDiscount * $getItems->count();
    //                  */

    //                 // dd($getItemsPriceBeforeDiscount, $rItem['offer']->details->offer_price, $getItemsPriceAfterDiscount, $howManyTimesToApplyOffer, $getItemsTotalAfterDiscount, $itemOfferPrice); // PASSED

    //             }
    //         }

    //         // Calculate Extras for offers
    //         $itemOfferPrices = $visibleOfferPivotRows->reduce(function ($carry, $p) {
    //             return $carry + $p->extras->sum('price') * $p->quantity;
    //         }, $itemOfferPrices);

    //         $total += $itemOfferPrices;

    //         return [
    //             'offer' => $offer,
    //             'order_items' => $this->getOfferItems($offer, $visibleOfferPivotRows, $offerBuyItems, $offerGetItems),
    //             'is_valid' => $is_valid,
    //             'is_updated' => $is_updated,
    //             'final_offer_price' =>  $itemOfferPrices,
    //         ];
    //     });

    //     $noOffers = $visiblePivotRows
    //         ->filter(function ($row) {
    //             return empty($row->offer_id);
    //         })
    //         ->map(function ($pivot) use ($visiblePivotItems, &$total) {

    //             $item = $visiblePivotItems->where('id', $pivot->item_id)->first();
    //             $qty = $pivot->quantity;

    //             // Calculate final price without extras
    //             $final_item_price = $item->price * $qty;
    //             // Add extras to final price
    //             $final_item_price += $pivot->extras->sum('price') * $qty;

    //             $total += $final_item_price;

    //             $pivot->offer_price = $item->price;
    //             $pivot->calories = $item->calories;
    //             $order_items = $pivot;

    //             return compact('order_items', 'final_item_price');
    //         })->values();


    //     $taxes = round($total * .15, 2);
    //     $delivery_fees = $order->service_type == 'delivery' ? 10 : 0;
    //     $subtotal = $total;
    //     $total += $taxes + $delivery_fees;

    //     $reorder = compact('location', 'offers', 'noOffers', 'total', 'subtotal', 'taxes', 'delivery_fees');

    //     if ($request->has('confirm') && $request->input('confirm')) {
    //         $newOrder = $order->replicate();

    //         $newOrder->subtotal = $subtotal;
    //         $newOrder->taxes = $taxes;
    //         $newOrder->delivery_fees = $delivery_fees;
    //         $newOrder->total = $total;

    //         $newOrder->save();

    //         /**
    //          * Attach offers items
    //          */
    //         foreach ($reorder['offers'] as $offer) {
    //             foreach ($offer['order_items'] as $item) {
    //                 $newOrder->items()->attach($item->item_id, [
    //                     'item_extras' =>   $item->item_extras,
    //                     'item_withouts' =>   $item->item_withouts,
    //                     'dough_type' => $item->dough_type,
    //                     'price' => 0,
    //                     'offer_price' => $item->offer_price,
    //                     'offer_id' =>  $offer['offer']->id, // TODO: Add offer_id
    //                     'offer_last_updated_at' =>  $offer['offer']->updated_at, // TODO: Add offer_last_updated_at
    //                     'quantity' => $item->quantity,
    //                 ]);
    //             }
    //         }

    //         /**
    //          * Attach no offers items
    //          */
    //         foreach ($reorder['noOffers'] as $offer) {
    //             $newOrder->items()->attach($offer['order_items']->item_id, [
    //                 'item_extras' =>   $offer['order_items']->item_extras,
    //                 'item_withouts' =>   $offer['order_items']->item_withouts,
    //                 'dough_type' => $offer['order_items']->dough_type,
    //                 'price' => 0,
    //                 'offer_price' => $offer['order_items']->offer_price,
    //                 'offer_id' => null, // TODO: Add offer_id
    //                 'offer_last_updated_at' => null, // TODO: Add offer_last_updated_at
    //                 'quantity' => $offer['order_items']->quantity,
    //             ]);
    //         }

    //         return $this->sendResponse($newOrder, 'Order confirmed successlly');
    //     }

    //     return $this->sendResponse($reorder, 'Success.');
    // }

    protected  function getOfferItems($offer, $pivots, $buyItems, $getItems, $is_valid)
    {
        $pivots->map(function ($pivot) use ($offer, $buyItems, $getItems, $is_valid) {
            
            $item = $buyItems->where('id', $pivot->item_id)->first();
            $mainItem = Item::where('id', $pivot->item_id)->first();
            
            if($is_valid == true)
            {
               
                $itemType = 'discount';
                if ($offer->offer_type == 'buy-get') {
                    if ($item && $pivot->price !=0) {
                        $itemType = 'buy';
                    } else {
                        $item  = $getItems->where('id', $pivot->item_id)->first();
                        $itemType = 'get';
                    }
                }
    
                $pivot->offer_price = $itemType == 'get' ? 0 : $item->price;
                $pivot->type = $itemType;
            }
            else{
              
                $itemType = 'discount';
                if ($offer->offer_type == 'buy-get') {
                    if ($item && $pivot->price !=0) {
                        $itemType = 'buy';
                    } else {
                        $item  = $getItems->where('id', $pivot->item_id)->first();
                        $itemType = 'get';
                    }
                }
    
                $pivot->offer_price = $mainItem->price;
                $pivot->price = $mainItem->price;
                $pivot->type = $itemType;
            }
        });


        return $pivots;
    }

    protected function getAdditionals($pivot)
    {
        $itemExtras = array_map('trim', explode(',', $pivot->item_extras));
        $itemWithouts = array_map('trim', explode(',', $pivot->item_withouts));

        $extras =  Extra::whereIn('id', $itemExtras)->get();
        $withouts = Without::whereIn('id', $itemWithouts)->get();
        $item = Item::where('id', $pivot->item_id)->first();

        return compact('extras', 'withouts', 'item');
    }
}
