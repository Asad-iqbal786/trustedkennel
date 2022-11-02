<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commission;
use Auth;
use DB;


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
}
