<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Models\Admin;
use App\Models\Order;
use App\Models\OrderLog;
use App\Models\User;
use App\Models\Commission;
use DB;
use Illuminate\Support\Facades\Mail;
use Auth;

class OrderController extends Controller
{
    public function allOrder()
    {
        Session::put('page', 'all_orders');
        // Session::forget('success_message');
        $findid = Auth::guard('admin')->user()->type;
        $vendor_id = Auth::guard('admin')->user()->vendor_id;


        // dd( $findid);
        if ($findid == "Vendor") {
            $getOrder =   Order::with('admins', 'users', 'vendors', 'products')->where('vendor_id', $vendor_id)->get()->toArray();
        } else {
            $getOrder =   Order::with('admins', 'users', 'vendors', 'products')->get()->toArray();
        }
        $orderLogs =   OrderLog::get()->toArray();
        return view('admin.order.all_order')
            ->with('orderLogs', $orderLogs)
            ->with('getOrder', $getOrder);
    }


    public function OrderStore(Request $request)
    {

        if ($request->isMethod('post')) {

            $data = $request->all();


            // echo "<pre>"; print_r($data); die;
            // DB::beginTransaction();
            $orderscount = Order::count();
            $orders = Order::latest()->first();
            $invoice = 0;
            if ($orderscount > 0) {
                $invoice = $orders->invoice_number + 1;
            } else {
                $invoice = 1001;
            }

            $order = new Order;
            if ($data['order_status'] == 'reservation_booked') {
                $shipping_charges = 0;
                $grand = $data['reservation_charges'] +  $data['price'];
            } else if ($data['order_status'] == 'accept') {

                $grand = $data['shipping_chargges'] +  $data['price'];
                $shipping_charges = $data['shipping_chargges'];
            } else {
                $grand = $data['price'];
                $shipping_charges = 0;
            }
            $adminCommission = Commission::first()->toArray();

            $grand_total =  $grand + $adminCommission['charges'];
            $order->price = $data['price'];
            $order->status = $data['order_status'];
            $order->shipping_charges = $shipping_charges;
            $order->reservation_charges = $data['reservation_charges'];
            $order->grand_total =  $grand_total;
            $order->invoice_number = $invoice;
            $order->tex = 0;
            $order->admin_commission = $adminCommission['charges'];
            $order->admin_id = $data['admin_id'];
            $order->vendor_id = $data['vendor_id'];
            $order->puppy_id = $data['puppy_id'];
            $order->user_id = $data['user_id'];
            // $order->cart_id = $data['cart_id'];
            // dd($order['cart_id']);
            $order->save();
            // $id = Cart::where('id',$data['cart_id'])->select('id')->first();
            // Cart::where('id', $id)->delete();
            // DB::table('carts')->delete();
            // if ($order->status == "rejact") {
            //     $user = Cart::where('user_id',Auth::user()->id);
            //     $user->delete();
            // }else{
            //     dd('not rejects');
            // }

            $order_id = DB::getpdo()->lastInsertId();
            $orderId = Order::where('id', $order_id)->first();
            Session::put('order_id', $order_id);
            // $admin_id = $orderId['admin_id'];
            // $vendor_id = $orderId['vendor_id'];
            // $pupName = $orderId['puppy_id'];
            // $shcharges = $orderId['shipping_charges'];

            // emails deliver
            $userEmail = User::where('id', $data['user_id'])->first();
            $vendroEmail = Admin::where('id', $data['admin_id'])->first();
            $admin_id = "info@trustedkennels.com";
            $email = $userEmail['email'];


            $vendEmail = $vendroEmail['email'];
            $emails = [$email, $vendEmail];
            $messageData = [
                'name' => $userEmail['name'],
                'admin_id' => $orderId['admin_id'],
                'vendor_id' => $orderId['vendor_id'],
                'pupName' => $orderId['puppy_id'],
                'shcharges' => $orderId['shipping_charges'],
                'email' => $userEmail['email']
            ];
            Mail::send('admin.email.order_ststus_cart',  $messageData, function ($message) use ($emails) {
                $message->to($emails)->subject('This is test e-mail');
            });

            // DB::commit();
            $message = "Your Status hase been changed ";
            Session::put('success_message', $message);
            return redirect()->back();
        }
    }
    public function OrderLog(Request $request)
    {

        if ($request->isMethod('post')) {
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;
            $status = OrderLog::where('status', $data['order_status'])->where('order_id', $data['order_id'])->count();

            //    dd( $status );

            if ($status > 0) {
                // dd("rettuf this page");
                $message = "Your status is already changed this " . $data['order_status'];
                Session::put('success_message', $message);
                return redirect()->back();
            }
            // dd("exists");
            DB::beginTransaction();
            $log = new OrderLog;
            $log->order_id = $data['order_id'];
            $log->status = $data['order_status'];
            // dd($log);
            $log->save();
            // order status Update
            Order::where('id', $data['order_id'])->update(['status' => $data['order_status']]);
            // Email send 
            $userEmail = User::where('id', $data['user_id'])->first();
            $vendroEmail = Admin::where('id', $data['admin_id'])->first();
            $admin_id = Admin::first();
            $email = $userEmail['email'];
            $adminEmail = "asad.jatt41@gmail.com";
            $vendEmail = $vendroEmail['email'];
            $emails = [$email, $vendEmail];

            $messageData = ['name' => $userEmail['name'], 'order_status' => $data['order_status'], 'shipping_chargges' => $data['shipping_chargges'], 'email' => $userEmail['email'], 'admin_id' => $data['admin_id']];
            Mail::send('admin.email.order_status',  $messageData, function ($message) use ($emails, $adminEmail) {
                $message->to($emails)->cc($adminEmail)->subject('This is test e-mail');
            });

            DB::commit();
            // }
            return redirect()->back();
        }
    }

    public function OrderCreated(Request $request)
    {


        if ($request->isMethod('post')) {
            $data = $request->all();

            // echo"<pre>"; print_r($data); die;

            $findOrder = Order::where('id', $data['order_id'])->first()->toArray();

            Session::put('order_id', $findOrder['id']);
            Session::put('grand_total', $findOrder['grand_total']);
            // $pay = new OrderPayment ;
            // $pay->invoice_number =  $findOrder['admin_id'];
            // $pay->user_id = $findOrder['admin_id'];
            // $pay->admin_id = $findOrder['admin_id'];
            // $pay->order_id = $findOrder['id'];
            // $pay->price =  $findOrder['price'];
            // $pay->grand_total =  $findOrder['grand_total'];
            // $pay->invoice_number =  $findOrder['invoice_number'];
            // $pay->shipping_charges =  $findOrder['shipping_charges'];
            // $pay->tex =  $findOrder['tex'];
            // $pay->reservation_charges =  $findOrder['reservation_charges'];
            // $pay->admin_commission =  $findOrder['admin_commission'];
            // $pay->status =  'accept';
            // // dd($pay);
            // $pay->save();


            $id = $findOrder['id'];

            if ($data['payment_method'] ==  "paypel") {
                return redirect('paypel');
            } else if ($data['payment_method'] ==  "stripe") {
                return view('admin.stripe.stripe');
            }
        }



        Session::flash('success_message', 'Product added in your  successfully ! ');
        return redirect()->back();
    }
}
