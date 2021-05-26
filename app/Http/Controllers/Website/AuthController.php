<?php

namespace App\Http\Controllers\Website;

use App\Models\User;
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
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'phone' => ['required', 'min:11']
        ]);
//, 'unique:users,first_phone'
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->getMessageBag())->withInput();
        }

        try {

            $name = explode(" ", $request->name);
            if (count($name)<2){
                 return redirect()->back()->withErrors(['errors' => 'Name Must Include  First Name And Last Name !'])->withInput();
            }else{
                $request->merge([
                    'first_name' => $name[0],
                    'last_name' => $name[1],
                    'password' => bcrypt($request->password),
                    'first_phone' => $request->phone,
                    'age' => $request->age,
                    'activation_token' => mt_rand(100000, 999999)
                ]);

                $user = User::create($request->all());
                $user->attachRole(3);
                return redirect(route('get.login'))->with(['success' => 'Your Account Created Successfully']);

            }

        } catch (\Exception $e) {
            return redirect()->back()->with(['errors' => 'Something Went Wrong!! please try again later']);

         }
    }

    public function sign_upz(Request $request)
    {
        $return = (app(\App\Http\Controllers\Api\AuthController::class)->register($request))->getOriginalContent();
        if ($return['success'] == true) {
            return redirect()->route('get.login')->with(['success' => 'your application been submitted']);
        } else {
            $errorarray = [];
            if (array_key_exists('message', $return)) {
                $errorarray['message'] = "Failed to sign up, Try again later.";

                return view('website.signup', compact(['errorarray']));
            } else {
                if ($return['error']->first('email')) {
                    $errorarray['email'] = $return['error']->first('email');
                }
                if ($return['error']->first('name')) {
                    $errorarray['name'] = $return['error']->first('name');
                }
                if ($return['error']->first('password')) {
                    $errorarray['password'] = $return['error']->first('password');
                }
                if ($return['error']->first('phone')) {
                    $errorarray['phone'] = $return['error']->first('phone');
                }

                return view('website.signup', compact(['errorarray']));
            }
        }


    }

    public function login(Request $request)
    {
        $validation_rules = ['email' => 'required',
            'password' => 'required'];
        $validatedData = $request->validate($validation_rules);


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
        return view('website.login', compact(['error']));

    }

    public function logout()
    {
        auth()->logout();
        session()->flush();
        return redirect()->route('home.page')->with(['success' => 'Successfully logged out']);
    }

}
