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
        foreach ($return as $in => $re) {
            if ($in == 'success') {
                $temp = $re;
            }
            if ($in == 'data') {
                if ($temp == true) {
                    $success = $re;
                    return redirect()->route('careers.all')->with(['success' => 'your application been submitted']);
                } else {
                    $error = $re;
                    return redirect()->route('careers.all')->with(['error' => $error]);

                }
            }
            if ($in == 'error') {

                $error = $re;
                return redirect()->route('get.sign.up')->with(['error' => $error]);


            }

        }
    }

    public function login(Request $request)
    {
        $return = (app(\App\Http\Controllers\Api\AuthController::class)->login($request))->getOriginalContent();
        $temp = '';
        foreach ($return as $in => $re) {
            if ($in == 'success') {
                $temp = $re;
            }

            if ($in == 'data') {
                if ($temp == true) {
                    $success = $re;
                    return redirect()->route('careers.all')->with(['success' => 'your application been submitted']);
                } else {
                    $error = $re;
                    return redirect()->route('careers.all')->with(['error' => $error]);

                }
            }
            if ($in == 'error') {

                $error = $re;
                return redirect()->route('get.sign.up')->with(['error' => $error]);


            }


        }
    }

    public function logout()
    {
        auth()->logout();
        return 'logged out Succeccfully';
    }
}
