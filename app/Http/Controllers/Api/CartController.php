<?php

namespace App\Http\Controllers\Api;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController;
use Auth;
use Validator;

class CartController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCart()
    {
        return $this->sendResponse(Auth::user()->carts()->with('item')->get(), 'User Cart Retrieved');
    }
    
    public function addCart(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'item_id' => ['required', 'exists:items,id'],
            'extras' => ['required'],
            'quantity' => ['required', 'numeric']
        ]);

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }
        
        $cart = Cart::create([
                'user_id' =>  Auth::user()->id,
                'item_id' =>  $request->item_id,
                'extras' =>  $request->extras,
                'quantity' =>  $request->quantity,
                'offer_id' =>  $request->offer_id,
            ]);
            
        // $cart = new Cart;
        // $cart->user_id = Auth::user()->id;
        // $cart->item_id = $request->item_id;
        // $cart->extras = $request->extras;
        // $cart->quantity = $request->quantity;
        // $cart->offer_id = $request->offer_id;
        // $cart->save();
            
        return $this->sendResponse($cart, 'Cart Created Successfully');
    }
    
    public function deleteCart(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'cart_id' => ['required']
        ]);

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }
        
        Auth::user()->carts()->find($request->cart_id)->delete();
        return $this->sendResponse(null, 'User Cart Item Deleted');
    }
    
    public function updateQuantity(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'cart_id' => ['required'],
            'quantity'=> ['required']
        ]);

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }
        
        Auth::user()->carts()->find($request->cart_id)->update(['quantity' => $request->quantity]);
        
        return $this->sendResponse(Auth::user()->carts()->with('item')->get(), 'User Cart Updated');
    }
    
}
