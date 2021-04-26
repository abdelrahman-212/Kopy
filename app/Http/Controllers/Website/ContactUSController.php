<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Api\FrontController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactUSController extends Controller
{
    public function contactPage(){
        return view('website.page-contacts');
    }
}
