<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Notifications\PasswordResetRequest;
use App\Notifications\PasswordResetSuccess;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PasswordResetController extends BaseController
{

    /**
    * Create token password reset
    *
    * @param  [string] email
    * @return [string] message
    */
    public function create(Request $request)
    {

        $validator = Validator::make($request->all(), ['email' => 'required|string|email']);

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }

        $user = User::where('email', $request->email)->first();

        if (!$user)
            return $this->sendError("We can't find a user with that e-mail address.");

        $data = [
            'email' => $user->email,
            'token' => mt_rand(100000, 999999)
        ];

        $passwordReset = DB::table('password_resets')->updateOrInsert($data);

        if ($user && $passwordReset) {
            $user->notify(new PasswordResetRequest($data['token']));
            return $this->sendResponse(null, "We have e-mailed your password reset link!");
        }

        return $this->sendError("You are not a user");
    }

    /**
     * Find token password reset
     *
     * @param [string] $token
     * @return [string] message
     * @return [json] passwordReset object
     */
    public function find($token)
    {
        $passwordReset = DB::table('password_resets')->where('token', $token)->first();

        if (!$passwordReset)
            return $this->sendError('This password reset token is invalid.');


        if (Carbon::parse($passwordReset->created_at)->addMinutes(720)->isPast()) {
            $passwordReset->delete();
            return $this->sendError('This password reset token is invalid.');
        }

        return $this->sendResponse($passwordReset, 'success message');
    }

    /**
     * Reset password
     *
     * @param  [string] email
     * @param  [string] password
     * @param  [string] password_confirmation
     * @param  [string] token
     * @return [string] message
     * @return [json] user object
     */
    public function createNewPassword(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string',
            'token' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }

        $passwordReset = DB::table('password_resets')->where([['token', $request->token],['email', $request->email]])->first();

        if (!$passwordReset)
            return $this->sendError("This password reset token is invalid.");

        $user = User::where('email', $passwordReset->email)->first();

        if (!$user)
            return $this->sendError("We can't find a user with that e-mail address.");

        $user->update(['password' => bcrypt($request->password)]);
        DB::table('password_resets')->where([['token', $request->token],['email', $request->email]])->delete();

        $user->notify(new PasswordResetSuccess($passwordReset));
        return $this->sendresponse($user, 'successfult message');
    }
}
