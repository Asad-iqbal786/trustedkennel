<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderLog;
use Illuminate\Http\Request;
use App\Models\VendorPayment;
use App\Models\WesternUnionPayment;
use App\Models\WithdrawRequest;
use Illuminate\Support\Facades\Auth;
use Session;

class DashboardController extends Controller
{
    public function withdrawAmount(){

        
        Session::put('page', 'all_payment_withdraw');

        $western = WesternUnionPayment::with('vendors')->get()->toArray();

            // echo "<pre>"; print_r($western); die;
        return view('admin.payment.withdraw_amount')
        ->with('western',$western);
    }

    public function allOrder()
    {
        Session::put('page', 'all_orders');
        // Session::forget('success_message');
        $getOrder =   Order::with('admins', 'users', 'vendors', 'products')->get()->toArray();
        $orderLogs =   OrderLog::get()->toArray();
        return view('admin.cateloge.order.all_order')
            ->with('orderLogs', $orderLogs)
            ->with('getOrder', $getOrder);
    }
}
