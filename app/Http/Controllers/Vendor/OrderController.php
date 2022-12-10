<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Commission;
use App\Models\Order;
use App\Models\OrderLog;
use App\Models\Product;
use App\Models\User;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{


    public function allOrder()
    {
        Session::put('page', 'all_orders');
        // Session::forget('success_message');
        $vendor_id = Auth::guard('vendor')->user()->id;
        $getOrder =   Order::with('admins', 'users', 'vendors', 'products')->where('vendor_id', $vendor_id)->get()->toArray();
        $orderLogs =   OrderLog::get()->toArray();
        return view('vendors_view.page.all_order')
            ->with('orderLogs', $orderLogs)
            ->with('getOrder', $getOrder);
    }
    public function OrderStore(Request $request)
    {

        if ($request->isMethod('post')) {

            $data = $request->all();


            // echo "<pre>"; print_r($data); die;
            DB::beginTransaction();
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
            $getProduct = Product::where('id',$data['product_id'])->first()->toArray();

            $grand_total =  $grand + $adminCommission['charges'];
            $order->price = $data['price'];
            $order->status = $data['order_status'];
            $order->shipping_charges = $shipping_charges;
            $order->reservation_charges = $data['reservation_charges'];
            $order->grand_total =  $grand_total;
            $order->invoice_number = $invoice;
            $order->tex = 0;
            $order->vendor_id = $getProduct['vendor_id'];
            $order->puppy_id = $data['product_id'];
            $order->user_id = $data['user_id'];
            // dd($order);
            $order->save();


            $order_id = DB::getpdo()->lastInsertId();
            $orderId = Order::where('id', $order_id)->first();
            Session::put('order_id', $order_id);

            // emails deliver
            $userEmail = User::where('id', $data['user_id'])->first();
            $vendroEmail = Vendor::where('id', $getProduct['vendor_id'])->first();
            $email = $userEmail['email'];
            $vendEmail = $vendroEmail['email'];
            $emails = [$email, $vendEmail];
            $messageData = [
                'name' => $userEmail['name'],
                'admin_id' => "info@trustedkennels.com",
                'vendor_id' => $orderId['vendor_id'],
                'pupName' => $orderId['puppy_id'],
                'shcharges' => $orderId['shipping_charges'],
                'email' => $userEmail['email']
            ];
            Mail::send('admin.email.order_ststus_cart',  $messageData, function ($message) use ($emails) {
                $message->to($emails)->subject('This is test e-mail');
            });

            DB::commit();
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
            $vendroEmail = Vendor::where('id', $data['vendor_id'])->first();
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
