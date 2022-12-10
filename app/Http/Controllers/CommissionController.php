<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Commission;
use Auth;
use DB;
use App\Models\VendorPayment;
use App\Models\WithdrawRequest;
use Illuminate\Support\Facades\Session as FacadesSession;
use Session;

class CommissionController extends Controller
{

    public function index()
    {
        $commData = Commission::first()->toArray();
        return view('admin.cateloge.commission.add-edit-commission')->with('commData',$commData);
    }




    public function addEditCommission(Request $request)
    {

        $count = Commission::count();
        if ($count > 0) {
            $commData = Commission::first()->toArray();
            Session::put('page', 'admin_commission');

            if ($request->isMethod('post')) {
                $data = $request->all();

                Session::put('page', 'admin_commission');

                Commission::where('id', $commData['id'])->update(['charges' => $data['charges'], 'text' => $data['text']]);
            }
        }else{


            if ($request->isMethod('post')) {
                $data = $request->all();
                // echo "<pte>";print_r($data);die;

                $commission = new Commission;
                $commission->charges = $data['charges'];
                $commission->text = $data['text'];
                // dd( $commission);
                $commission->save();
            }

        }


        return redirect()->back();
    }



    public function addEditVendorPayments(Request $request, $id = null){
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
            $withdReq = WithdrawRequest::where('admin_id',Auth::guard('admin')->user()->id)->get()->toArray();
        } else {
            $withdReq = WithdrawRequest::get()->toArray();
        }
        
       

        return view('admin.payment.vendor-money-withdraw-requests')->with('withdReq',$withdReq);
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
