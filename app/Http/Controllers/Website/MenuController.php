<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Api\FrontController;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    public function menuPage(){
        $menu = [];
        $return = (app(\App\Http\Controllers\Api\MenuController::class)->getAllCategories())->getOriginalContent();
        if($return['success'] == 'success'){
            $menu['categories'] = $return['data'];
        }
        return view('website.menu',compact(['menu']));
    }

    public function itemPage($category_id, $item_id){
        $item = 0;
        $category = Category::find($category_id);
        $request = new \Illuminate\Http\Request();
        $request->branch_id = (session()->has('branch_id'))? session()->get('branch_id'): 0 ;//det branch_id
        $return = (app(\App\Http\Controllers\Api\MenuController::class)->getItems($request,$category))->getOriginalContent();
        foreach ($return['data'] as $product){
            if($product->id == $item_id){
                $item = $product;
                break;
            }
        }
        return view('website.item',compact(['item']));
    }

}
