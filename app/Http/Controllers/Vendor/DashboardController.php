<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderLog;
use App\Models\Product;
use App\Models\StripeAccount;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index()
    {

        $countStrip = StripeAccount::where('vendor_id',Auth::guard('vendor')->user()->id)->first()->toArray();

        if ($countStrip['status'] == 0) {
            return view('vendors_view.upload_bank_Details');
        }


        // dd( $countStrip);

        Session::put('page', 'dashboard');

        $getProduct = Product::where('vendor_id', Auth::guard('vendor')->user()->id)->with('category')->where('status', 0)->get()->toArray();
        $countAvailablePuppy = Product::where('vendor_id', Auth::guard('vendor')->user()->id)->where('produt_type_id', '=', 'Available Puppy')->count();
        $countPlanedPuppy = Product::where('vendor_id', Auth::guard('vendor')->user()->id)->where('produt_type_id', '=', 'Planned Litter')->count();

        $orderSum = Order::where('vendor_id', Auth::guard('vendor')->user()->id)->sum('grand_total');

        $numberOfApplication = Cart::with('products:id,sire_name,price,vendor_id', 'users:id,name,email',)->where('vendor_id',Auth::guard('vendor')->user()->id)->count();


        $avail = Cart::where('produt_type_id','Planned Litter')->where('vendor_id',Auth::guard('vendor')->user()->id)->count();

        $plan = Cart::where('produt_type_id', 'Available Puppy')->where('vendor_id',Auth::guard('vendor')->user()->id)->count();

        $current_month_users = Order::where('vendor_id', Auth::guard('vendor')->user()
            ->id)->whereYear('created_at', Carbon::now()
            ->year)->whereMonth('created_at', Carbon::now()->month)
            ->count();
        $before_1_month_users  = Order::where('vendor_id', Auth::guard('vendor')->user()->id)->whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', Carbon::now()->subMonth(1))->count();
        $before_2_month_users  = Order::where('vendor_id', Auth::guard('vendor')->user()->id)->whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', Carbon::now()->subMonth(2))->count();
        $before_3_month_users  = Order::where('vendor_id', Auth::guard('vendor')->user()->id)->whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', Carbon::now()->subMonth(3))->count();
        $before_4_month_users  = Order::where('vendor_id', Auth::guard('vendor')->user()->id)->whereYear('created_at', Carbon::now()->year)->whereMonth('created_at', Carbon::now()->subMonth(4))->count();
        $userCount =  array($current_month_users, $before_1_month_users, $before_2_month_users, $before_3_month_users, $before_4_month_users);

        // echo "<pre>"; print_r($getProduct); die;
        
        $stripeAccount = StripeAccount::where('vendor_id', Auth::guard('vendor')->user()->id)->first();

        return view('vendors_view.index')
            ->with('userCount', $userCount)
            ->with('avail', $avail)
            ->with('plan', $plan)
            ->with('countStrip', $countStrip)
            ->with('countAvailablePuppy', $countAvailablePuppy)
            ->with('countPlanedPuppy', $countPlanedPuppy)
            ->with('numberOfApplication', $numberOfApplication)
            ->with('orderSum', $orderSum)
            ->with('getProduct', $getProduct)
            ->with('stripeAccount', $stripeAccount);
    }
    public function addBankDetails(){
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $stripeAccount = StripeAccount::where('vendor_id', Auth::guard('vendor')->user()->id)->first();
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

        $account = StripeAccount::where('vendor_id', Auth::guard('vendor')->user()->vendor_id)->first();
        $stripe = new \Stripe\StripeClient(
            env('STRIPE_SECRET')
        );
       $data =  $stripe->accounts->retrieve(
            $account->stripe_account,
            []
        );
       if($data['details_submitted']){
           StripeAccount::where('vendor_id', Auth::guard('vendor')->user()->id)->update(['status' => 1]);
       }
        return redirect(route('vendorDashboard'));
    }

    public function product(){
        Session::put('page', 'all_products');

        $getProduct = Product::where('vendor_id', Auth::guard('vendor')->user()->id)->with('category')->get()->toArray();

        return view('vendors_view.page.product_index')
            ->with('getProduct', $getProduct);
    }
    public function applications($id){
        
        $aplicaton = Application::where('user_id',$id)->first()->toArray();
        // dd($get);
        return view('vendors_view.page.applications')->with('aplicaton', $aplicaton);
    }
    
}
