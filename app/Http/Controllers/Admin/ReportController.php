<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Order;
use App\Models\Category;
use App\Models\Item;
use App\Models\Extra;
use App\Models\Branch;

use App\Filters\CustomerFilter;
use App\Filters\ItemFilters;
use App\Filters\ExtraFilters;
use App\Filters\OrderFilters;
use App\Filters\IncomeFilters;

class ReportController extends Controller
{

    public function getCustomer(Request $requets, CustomerFilter $filters)
    {
        $customers = User::whereHas('roles', function($role){
            $role->where('name', 'customer');
        })->filter($filters)->get();
    	return view('admin.report.customer' , compact('customers'));
   	}

    public function getOrder(Request $request, OrderFilters $filters)
    {
        $orders = Order::filter($filters)->get();
        return view('admin.report.order' , compact('orders'));
    }

    public function getOrderItems(Request $request, IncomeFilters $filters)
    {
        $orders = Order::filter($filters)->where('state', 'completed')->get();
        $branches = Branch::all();

        return view('admin.report.order-item' , compact('orders', 'branches'));
    }

    public function getIncome(Request $request, ItemFilters $filters)
    {
        $orders = Order::filter($filters)->where('state', 'completed')->get();
        $branches = Branch::all();
        return view('admin.report.income' , compact('orders', 'branches'));
    }

    public function getItem(Request $request, ItemFilters $filters)
    {
        $categories = Category::all();
        $items = Item::filter($filters)->get();
        return view('admin.report.item' , compact('items', 'categories'));
    }

    public function getExtra(Request $request, ExtraFilters $filters)
    {
       $categories = Category::all();
        $extras = Extra::filter($filters)->get();
        return view('admin.report.extra' , compact('extras', 'categories'));
    }

    public function getOrderStatus(Request $request, OrderFilters $filters)
    {
       $orders = Order::filter($filters)->get();
        return view('admin.report.order-status' , compact('orders'));
    }

    public function getOrderCustomer(Request $request, OrderFilters $filters)
    {
     $customers = User::whereHas('roles', function($role) {
            $role->where('name', 'customer');
        })->get();

        $orders = Order::filter($filters)->get();

        return view('admin.report.order-customer' , compact('orders', 'customers'));
    }

  
}
