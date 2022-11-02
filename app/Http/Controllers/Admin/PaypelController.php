<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Cart;
use Auth;
use Session;

class PaypelController extends Controller
{
    public function paypel()
    {

        // Cart::where('user_id', Auth::user()->id)->delete();
        $orderDetails = Order::orderDetails()->where('id', Session::get('order_id'))->first()->toArray();
        // dd($orderDetails);
        return view('admin.payment.paypel')->with(compact('orderDetails',));
    }
}
