<?php

namespace App\Http\Controllers\Vendors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Auth;
use Session;

use App\Models\VendorPayment;
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
        // echo "<pre>"; print_r($vendorPya); die;
dd($withdReq);
        return view('admin.payment.vendor-money-withdraw-requests')
        ->with('vendorPya',$vendorPya)
        ->with('withdReq',$withdReq);
    }

    public function withdrawRequestStore(Request $request){

        // return $request->all();

        $withd = new WithdrawRequest;
        $withd->admin_id = Auth::guard('admin')->user()->id;
        $withd->amount = $request->amount;
        $withd->message = $request->message;
        $withd->status = "Pending";
        $withd->save();
        return redirect()->back();

    }

}
