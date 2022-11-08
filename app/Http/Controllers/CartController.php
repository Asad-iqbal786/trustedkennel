<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Vendor;
use App\Models\Category;
use App\Models\ProductType;
use App\Models\PuppyImage;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
   
    public function applyForPuppies (Request $request)
    {
        if(Auth::check()){
            $user_id = Auth::user()->id;
            }else{
                $user_id =0;
        }
        if (  $user_id == 0) {
            $message ="Please Login your accout first";
            Session::flash('error_message',$message);
            return redirect()->route('loginPage');
    }

    //    return $request->all();
       $getPro = Cart::where(['puppy_id'=>$request->puppy_id,'user_id'=>$user_id])->count();
       if ( $getPro) {
            $message ="Product is already exists in your cart   ";
            Session::flash('error_message',$message);
            return redirect()->back();
       }
      


       $cart = new Cart;
       $cart->user_id = $user_id;
       $cart->vendor_id = $request['vendor_id'];
       $cart->puppy_id = $request['puppy_id'];
       $cart->price = $request['price'];
       $cart->status= "processing";
       $cart->save();
       $message ="Thank you! you application is submit successfully and please want for admin approvel and reply you in your through email ";
       Session::flash('success_message',$message);
       return redirect()->back();

    }
}
