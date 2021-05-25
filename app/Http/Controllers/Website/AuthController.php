<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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

        if ($return['success'] == true) {
            return redirect()->route('get.login')->with(['success' => 'your application been submitted']);
        }
        else{
            $errorarray = [];
            if(array_key_exists('message', $return)){
                $errorarray['message'] = "Failed to sign up, Try again later.";

                return view('website.signup',compact(['errorarray']));
            }
            else{
                if($return['error']->first('email')){
                    $errorarray['email'] = $return['error']->first('email');
                }
                if ($return['error']->first('name')){
                    $errorarray['name'] = $return['error']->first('name');
                }
                if ($return['error']->first('password')){
                    $errorarray['password'] = $return['error']->first('password');
                }
                if ($return['error']->first('phone')){
                    $errorarray['phone'] = $return['error']->first('phone');
                }

               return view('website.signup',compact(['errorarray']));
            }
        }


    }

    public function login(Request $request)
    {

        $credentials = [
            'email' => request('email'),
            'password' => request('password')
        ];

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->hasRole('customer')) {
                if ($request->has('device_token')) {
                    $user->device_token = $request->device_token;
                    $user->save();
                }

                $user->branches;//??

                $data = [
                    'userData' => $user,
                ];

                return redirect()->route('home.page');
            }
        }
        $error = 'Unauthorized, Please Check Your Credentials.';
        return view('website.login',compact(['error']));

    }

    public function logout()
    {
        auth()->logout();
        session()->flush();
        return redirect()->route('get.login')->with(['success' => 'Successfully logged out']);
    }

}
