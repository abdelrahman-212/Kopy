<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Api\FrontController;
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
        $return = (app(FrontController::class)->getAboutUS())->getOriginalContent();
        if($return['success'] == 'success'){
            $menu['aboutus'] = $return['data'][0];
        }
        //return  $menu;
        return view('website.menu',compact(['menu']));

    }
}
