<?php

namespace App\Http\Controllers\Vendors;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\Product;
use Auth;
use Session;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use App\Models\VendorPayment;
use App\Models\WesternUnionPayment;
use App\Models\WithdrawRequest;


class VendorPaymentController extends Controller
{

    public function addEditVendorPayments(Request $request, $id = null)
    {
        Session::put('page', 'add-vendor-payment');


        if ($id == "") {
            Session::put('page', 'add-vendor-payment');

            $title = "Add VendorPayment Type";
            $payment = new VendorPayment;
            $paymentType = array();
            $message = "VendorPayment add successfully ";
        } else {

            $title = "edit Course Type";
            $paymentType = VendorPayment::where('id', $id)->first();
            Session::put('page', 'add-vendor-payment');

            $paymentType = json_decode(json_encode($paymentType), true);
            $payment =  VendorPayment::find($id);
            $message = "VendorPayment update successfully ";
        }

        if ($request->isMethod('post')) {
            $data = $request->all();

            // echo "<pre>"; print_r($data); die;

            $rules = [
                'bank_name' => 'required',
                'bank_acc_name' => 'required',
                'bank_routing_no' => 'required',
                'bank_acc_no' => 'required',
            ];
            $customMessages = [
                'bank_name.required' => 'bank_name Type is requires',
                'bank_acc_name.required' => 'bank_acc_name Type is requires',
                'bank_acc_no.required' => 'bank_acc_no Type is requires',
                'bank_routing_no.required' => 'bank_routing_no Type is requires',
            ];

            $payment->admin_id = Auth::guard('admin')->user()->id;
            $payment->bank_name = $data['bank_name'];
            $payment->bank_acc_name = $data['bank_acc_name'];
            $payment->bank_acc_no = $data['bank_acc_no'];
            $payment->bank_routing_no = $data['bank_routing_no'];
            $payment->save();
            Session::flash('success_message', $message);
            return redirect()->back();
        }

        if (!empty($paymentType['id'])) {
            $paymentType = 0;
        } else {
            $get = Auth::guard('admin')->user()->id;
            $paymentType = VendorPayment::where('admin_id', $get)->first();
            // $paymentType = $id;
        }


        return view('admin.payment.add_edit_vendor_payment')
            ->with('title', $title)
            ->with('paymentType', $paymentType);
    }

    public function withdrawRequest(){


        Session::put('page', 'all-vendor-payment');
        if (Auth::guard('admin')->user()->type == "Vendor") {
            $withdReq = WithdrawRequest::where('admin_id',Auth::guard('admin')->user()->id)->with('admins')->with('stripeAccount',Auth::guard('admin')->user()->vendor_id)->get()->toArray();
        } else {
            $withdReq = WithdrawRequest::with('admins')->with('stripeAccount')->get()->toArray();
        }
        $vendorPya =VendorPayment::get()->toArray();
<<<<<<< HEAD

=======
        // echo "<pre>"; print_r($vendorPya); die;
dd($withdReq);
>>>>>>> bf8909cfa82b9c0954bc5d2b8e446f1effc1af9d
        return view('admin.payment.vendor-money-withdraw-requests')
        ->with('vendorPya',$vendorPya)
        ->with('withdReq',$withdReq);
    }

    public function withdrawRequestStore(Request $request){

        // return $request->all();
    
        $withd = new WithdrawRequest;
        $withd->admin_id = Auth::guard('admin')->user()->id;
        $withd->vendor_id = Auth::guard('admin')->user()->vendor_id;
        $withd->amount = $request->amount;
        $withd->message = $request->message;
        $withd->status = "Pending";
        $withd->save();
        return redirect()->back();

    } 

    public function paymentSend(Request $request){


        if ($request->isMethod('post')) {
            $data = $request->all();
            $payment = new WesternUnionPayment;

            if ($data['payment_type'] != "western_union") {
                // dd("payment is not western_union type");
                Session::flash('error_message','Please select Western Union Payment Method ! ');
                return redirect()->back();
            }
            // echo "<pre>"; print_r($data); die;

            $rules = [
                'receipt' => 'image'
            ];
            $customMessages= [
                'receipt.image' => 'Valid receipt is required',
            ];
            $this->validate($request,$rules,$customMessages);
            $vendor_id = Admin::where('id',$data['admin_id'])->first()->toArray();

            $image = $request->receipt;
            $imageName = Str::slug($data['mtcn'], '-').'-' . uniqid() . '.' . $image->getClientOriginalExtension();
    
          if (!Storage::disk('public')->exists('admin/images/admin_photos/receipt/')) {
              Storage::disk('public')->makeDirectory('admin/images/admin_photos/receipt/');
          }
    
          $productName = Image::make($image)->resize(640, null, function ($constraint) {
              $constraint->aspectRatio();
              $constraint->upsize();
          })->stream();
          Storage::disk('public')->put('admin/images/admin_photos/receipt/' . $imageName, $productName); 
          $payment->receipt = $imageName;

            $payment->vendor_id = $vendor_id['vendor_id'];
            $payment->mtcn = $data['mtcn'];
            $payment->amount = $data['amount'];
            $payment->message = $data['message'];
            $payment->payment_type = $data['payment_type'];
            $payment->status = "Send";
            // dd( $payment);
            $payment->save();

            Session::flash('success_message','Payment is transferd through western Union');
            return redirect()->back();
        }
    }

}
