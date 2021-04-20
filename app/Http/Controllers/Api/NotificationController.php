<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use App\Models\User;
use App\Models\NotiToken;


class NotificationController extends BaseController
{
    
    public function setPushToken(Request $request)
    {
        if ($request->user_id == null || $request->platform == null) {
            return $this->sendError('Information is Missed', [], 404);
        }
        
        try {
            $user = User::findorFail($request->user_id);
            
        } catch (\Exception $e) {
            return $this->sendError('User Not Exist', [], 404);
        }
        
        $tokens = NotiToken::where('user_id', $request->user_id)->where('platform', $request->platform)->get();
        
        if($tokens->count() > 0) {
            NotiToken::where('user_id', $request->user_id)->where('platform', $request->platform)->update(['token' => $request->token]);
        } else {
            $token = new NotiToken;
            $token->user_id = $request->user_id;
            $token->platform = $request->platform;
            $token->token = $request->token;
            $token->save();
        }
        
        
        $token = NotiToken::where('user_id', $request->user_id)->where('platform', $request->platform)->first();
        return $this->sendResponse($token, 'Token Updated Successfully');
        
    }
    
}
