<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Vendor;
use App\Models\Category;
use App\Models\ProductType;
use App\Models\PuppyImage;
use App\Models\Cart;
use App\Models\Product;
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
       $getPro = Cart::where(['product_id'=>$request->product_id,'user_id'=>$user_id])->count();
       $geta = Product::where('id',$request->product_id)->first()->toArray();
       if ( $getPro) {
            $message ="Product is already exists in your cart   ";
            Session::flash('error_message',$message);
            return redirect()->back();
       }
      


       $cart = new Cart;
       $cart->user_id = Auth::user()->id;
       $cart->product_id  = $request->product_id;
       $cart->vendor_id  = $geta['vendor_id'];
       if ($geta['produt_type_id'] == 1) {
            $re = "Available Puppy";
       } else {
            $re = "Planned Litter";
       }
       $cart->produt_type_id  = $re;
       $cart->status= 0;
    //    dd($cart);
       $cart->save();
       $message ="Thank you! you application is submit successfully and please want for admin approvel and reply you in your through email ";
       Session::flash('success_message',$message);
       return redirect()->back();

    }
}
