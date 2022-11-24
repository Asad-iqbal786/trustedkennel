<?php

namespace App\Http\Controllers\Vendors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Validation\Rules;
use Auth;
use Hash;;

use Session;
use App\Models\User;
use App\Models\Cart;
use App\Models\Chat;
use App\Models\ChatMessage;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class VendorController extends Controller
{
    public function index()
    {
        Session::put('page', 'dashboard');

        return view('admin.index');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/ts-login');
    }

    public function vendorApplication()
    {
        Session::put('page', 'vendor_application');
        Session::forget('success_message');
        Session::forget('error_message');
        $Vendor_r_app = Cart::with('products:id,sire_name,puppy_price,admin_id', 'users:id,name,email', 'vendors',)->where('vendor_id', Auth::guard('admin')->user()->vendor_id)->get()->toArray();

        // echo "<pre>";print_r($Vendor_r_app);die;


        return view('vendor.application_receive')->with('Vendor_r_app', $Vendor_r_app);
    }

    public function applicationDetails($id)
    {


        Session::put('page', 'vendor_application_details');
        $appDetails = Cart::with('users')->where('id', $id)->first()->toArray();
        // echo "<pre>";print_r($appDetails);die;
        return view('vendor.application_details')->with('appDetails', $appDetails);
    }

    public function confirmAccountApproved(Request $request)
    {
        if ($request->isMethod('post')) {
            Session::forget('success_message');
            Session::forget('error_message');
            $data = $request->all();
            // dd( $data);

            Admin::where('id', $data['id'])->update(['approved' => $data['approved'], 'admin_type' => 'Vendor']);

            $vendorDetails = Admin::where('id', $data['id'])->first();
            $email = $vendorDetails['email'];
            $messageData = ['name' => $vendorDetails['name'], 'email' => $vendorDetails['email']];
            Mail::send('admin.email.vendor_approved', $messageData, function ($message) use ($email) {
                $message->to($email)->subject('Welcome to E-commer website');
            });
            $message = "Your account is Approved pleas login now!";
            Session::put('success_message', $message);
            return redirect()->back();
        }
    }



    public function chatDetails($name)
    {
        $getChat = Chat::with('vendors', 'users', 'products')->get()->toArray();
        $userID = User::where('name', $name)->first()->toArray();

        $getMessage = Chat::where('user_id', $userID['id'])->with('vendors', 'users', 'products')->get()->toArray();

        $getCustomer = Chat::where([
            'user_id'=>$userID['id'],
            'vendor_id'=> Auth::guard('admin')->user()->vendor_id,
        ]        
        )->with('vendors', 'users', 'products')->first()->toArray();


        $getVendorMessage = ChatMessage::where('chat_id', $getCustomer['id'])->with('vendors:id','users', 'chats:id', )->get()->toArray();

        //   echo "<pre>"; print_r($getVendorMessage);die;


        return view('vendor.chat.vendor_chat')
            ->with('getChat', $getChat)
            ->with('getCustomer', $getCustomer)
            ->with('getVendorMessage', $getVendorMessage)
            ->with('userID', $userID)
            ->with('getMessage', $getMessage);
    }
    public function vendorReply(Request $request)
    {


        if ($request->isMethod('post')) {
            $data = $request->all();
            $mesg = new ChatMessage;
            $mesg->user_id = $data['user_id'];
            $mesg->type = $data['type'];
            $mesg->chat_id = $data['chat_id'];
            $mesg->vendor_id = $data['vendor_id'];
            $mesg->product_id = $data['product_id'];
            $mesg->messages = $data['messages'];
            // dd($mesg);
            $mesg->save();
            // Session::flash('success_message',$message);
            return redirect()->back();
        }
    }
}
