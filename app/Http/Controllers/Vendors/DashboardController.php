<?php

namespace App\Http\Controllers\Vendors;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index()
    {

        $countStrip = StripeAccount::where('vendor_id',Auth::guard('admin')->user()->vendor_id)->first()->toArray();

        if ($countStrip['status'] == 0) {
            return view('vendors_view.upload_bank_Details');
        }


        // dd( $countStrip);

        Session::put('page', 'dashboard');

        $getProduct = Product::where('admin_id', Auth::guard('admin')->user()->id)->with('category', 'admins')->where('status', 0)->get()->toArray();
        $countAvailablePuppy = Product::where('vendor_id', Auth::guard('admin')->user()->vendor_id)->where('produt_type_id', '=', 'Available Puppy')->count();
        $countPlanedPuppy = Product::where('vendor_id', Auth::guard('admin')->user()->vendor_id)->where('produt_type_id', '=', 'Planned Litter')->count();

        $orderSum = Order::where('vendor_id', Auth::guard('admin')->user()->vendor_id)->sum('grand_total');

        $count = Cart::with('products:id,sire_name,puppy_price,admin_id', 'users:id,name,email', 'vendors',)->where('vendor_id', Auth::guard('admin')->user()->vendor_id)->count();


        $current_month_users = Order::where('vendor_id', Auth::guard('admin')->user()
            ->vendor_id)->whereYear('created_at', Carbon::now()
            ->year)->whereMonth('created_at', Carbon::now()->month)
            ->count();
        $before_1_month_users  = Order::where('vendor_id', Auth::guard('admin')->user()->vendor_id)->whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', Carbon::now()->subMonth(1))->count();
        $before_2_month_users  = Order::where('vendor_id', Auth::guard('admin')->user()->vendor_id)->whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', Carbon::now()->subMonth(2))->count();
        $before_3_month_users  = Order::where('vendor_id', Auth::guard('admin')->user()->vendor_id)->whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', Carbon::now()->subMonth(3))->count();
        $before_4_month_users  = Order::where('vendor_id', Auth::guard('admin')->user()->vendor_id)->whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', Carbon::now()->subMonth(4))->count();
        $userCount =  array($current_month_users, $before_1_month_users, $before_2_month_users, $before_3_month_users, $before_4_month_users);
        // echo "<pre>"; print_r($orderSum); die;

        return view('vendors_view.index')
            ->with('userCount', $userCount)
            ->with('countStrip', $countStrip)
            ->with('countAvailablePuppy', $countAvailablePuppy)
            ->with('countPlanedPuppy', $countPlanedPuppy)
            ->with('count', $count)
            ->with('orderSum', $orderSum)
            ->with('getProduct', $getProduct)
            ->with('stripeAccount', $stripe);
    }
    public function addBankDetails(){
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $stripeAccount = StripeAccount::where('vendor_id', Auth::guard('admin')->user()->vendor_id)->first();
        $returnUrl = route('changeStatus');
        $returnUrl2 = route('vendorDashboard');
        $account = $stripe->accountLinks->create(
            [
                'account' => $stripeAccount->stripe_account,
                'refresh_url' => $returnUrl2,
                'return_url' => $returnUrl,
                'type' => 'account_onboarding',
            ]
        );
        return redirect($account->url);
//        dd($account);
    }
    public function changeStatusApprove()
    {

        $account = StripeAccount::where('vendor_id', Auth::guard('admin')->user()->vendor_id)->first();
        $stripe = new \Stripe\StripeClient(
            env('STRIPE_SECRET')
        );
       $data =  $stripe->accounts->retrieve(
            $account->stripe_account,
            []
        );
       if($data['details_submitted']){
           StripeAccount::where('vendor_id', Auth::guard('admin')->user()->vendor_id)->update(['status' => 1]);
       }
        return redirect(route('vendorDashboard'));
    }
}
