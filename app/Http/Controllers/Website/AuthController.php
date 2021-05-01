<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
            $error = [];
            if(array_key_exists('message', $return)){
                $error['message'] = "Failed to sign up, Try again later.";
                return back()->with('error', $error);
            }
            else{
                if($return['error']->first('email')){
                    $error['email'] = $return['error']->first('email');
                }
                if ($return['error']->first('name')){
                    $error['name'] = $return['error']->first('name');
                }
                if ($return['error']->first('password')){
                    $error['password'] = $return['error']->first('password');
                }
                if ($return['error']->first('phone')){
                    $error['phone'] = $return['error']->first('phone');
                }

                return $error['phone'];
                return back()->with('error', 'Failed to find that resource');
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
        return redirect()->back()->withErrors(['error' => 'unauthorized!, Please Check Your Credentials.']);

    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('get.login')->with(['success' => 'Successfully logged out']);
    }

}
