<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrdersController extends Controller
{
    public function make_order(Request $request)
    {

        $items = auth()->user()->carts;
        $request = $request->merge([
            'items' => $items
        ]);
        $return = (app(\App\Http\Controllers\Api\OrdersController::class)->store($request))->getOriginalContent();
        if ($return['success'] == true) {
            session()->put(['success' => $return['message']]);
            foreach ($items as $item) {
                $item->delete();
            }
            if (session()->has('point_claim')) {
                session()->forget('point_claim_value');
                session()->forget('point_claim');
            }
            return redirect()->route('get.cart');

        }

    }

    public function my_orders()
    {
        $pending_orders = auth()->user()->orders()->where('state', 'pending')->get();
        $completed_orders = auth()->user()->orders()->where('state', 'completed')->get();
        $inprogress_orders = auth()->user()->orders()->where('state', 'in-progress')->get();
        $canceled_orders = auth()->user()->orders()->where('state', 'canceled')->get();
        $on_way = auth()->user()->orders()->where('state', 'on-way')->get();

        return view('website.myOrder', compact('pending_orders', 'completed_orders', 'canceled_orders'));
    }
}
