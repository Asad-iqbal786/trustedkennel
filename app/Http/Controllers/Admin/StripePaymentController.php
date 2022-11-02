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



    // Stripe::setApiKey(env('STRIPE_SECRET'));


    // $payment = new OrderPayment;
    // $payment->price = 100 * 100;

    // $payment->puppy_id = 0;
    // $payment->admin_id = 0;
    // $payment->user_id = 0;
    // $payment->order_id = 69;

    // $payment->invoice_number = $request->stripeToken;
    // // dd( $payment);
    // $payment->save();


    // \Stripe\Charge::create([
    //     "amount" => 100 * 100,
    //     "currency" => "usd",
    //     "source" => $request->stripeToken,
    //     "description" => "Test payment from."
    // ]);
    // return $request->all();

    $getOrdr = Order::where('id', Session::get('order_id'))->first()->toArray();
    $stripe = new \Stripe\StripeClient(
      'sk_test_51LtqrmCULLnih9KrPhtZlRDITP7rJatABuXD4JUjaKG3dRPAzjP2fkZLlTnozTCxTvwXHB7UV38WUytjjKxYQftg00nCSTylTj'
    );

    //   dd($stripe);
    $stripe->charges->create([
      "amount" => $getOrdr['grand_total'] * 100,
      'currency' => 'usd',
      'source' => 'tok_mastercard',
      'description' => 'My First Test Charge (created for API docs at https://www.stripe.com/docs/api)',
    ]);

    Session::flash('success', 'Payment successful!');

    return view('admin.stripe.stripe');
  }
}
