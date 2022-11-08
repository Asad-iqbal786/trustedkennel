<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Laravel\Cashier\Cashier;
use \Stripe\Stripe;
use App\Models\Order;
use App\Models\OrderPayment;

class StripePaymentController extends Controller
{
  public function stripe()
  {
    return view('admin.stripe.stripe_two');
  }


  public function stripePost(Request $request)
  {

    return view('admin.stripe.stripe');
  }
}
