<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Filters\OrderFilters;
use Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(OrderFilters $filters)
    {
        $user = Auth::user();
        if($user->hasRole('admin'))
        {
            $orders = Order::filter($filters)->get();
        }
        else{
            $branches = $user->branches->pluck('id')->toArray();
            $orders = Order::whereIn('branch_id', $branches)->filter($filters)->get();
        }

        return view('admin.order.index' , compact('orders'));
    }
}
