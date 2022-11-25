<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VendorPayment;
use App\Models\WesternUnionPayment;
use App\Models\WithdrawRequest;
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
}
