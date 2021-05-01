<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
 class AuthController extends Controller
{
    public function get_login()
    {
        return view('website.login');
    }

    public function get_sign_up()
    {
        return view('website.signup');
    }

    public function sign_up(Request $request)
    {
        $return = (app(\App\Http\Controllers\Api\AuthController::class)->register($request))->getOriginalContent();
        $temp = '';


        if ($return['success'] == true) {
            return redirect()->route('profile')->with(['success' => 'your application been submitted']);

        }
        if ($return['error']) {

             return redirect()->route('get.sign.up')->withErrors($return['error'])->withInput();
        }

    }

    public function login(Request $request)
    {
        $return = (app(\App\Http\Controllers\Api\AuthController::class)->login($request))->getOriginalContent();
        $temp = '';
        $return['message'];


        if ($return['success'] == true) {
            return redirect()->route('profile')->with(['success' => 'your application been submitted']);

        }
        if ($return['message']) {
            return redirect()->route('get.login')->with(['error' => 'Please Check Your Credentials']);
        }

    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('get.login')->with(['success' => 'logged out successfully']);
    }
}
