<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\StripeAccount;
use Illuminate\Http\Request;
use App\Models\Product;
use Carbon\Carbon;
use App\Models\Admin;
use App\Models\Vendor;
use App\Models\Category;
use App\Models\ProductType;
use App\Models\Application;
use App\Models\PuppyImage;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{
   public function index()
   {
      Session::put('page', 'home_page');
      $getProduct = Product::with('vendors', 'category')->where('status', 1)->get()->toArray();
      $getpro = Product::where('status', 1)->first()->toArray();
      $findPuppy = Product::where('produt_type_id', $getpro['produt_type_id'])->where('status', 1)->get()->toArray();
      $findPlanedPuppy = Product::where('produt_type_id', $getpro['produt_type_id'])->where('status', 1)->get()->toArray();
      // echo "<pre>"; print_r($getProduct);die;
      $getCategpru = Category::where('status', 1)->get()->toArray();
      $getFeaturedAdmin = Admin::with('vendors')->where('status', 1)->where('vendor_type', "Futured")->get()->toArray();
      $getProType = ProductType::where('status', 1)->get()->toArray();
      return view('frontend.index')
         ->with('getProduct', $getProduct)
         ->with('getFeaturedAdmin', $getFeaturedAdmin)
         ->with('getProType', $getProType)
         ->with('getCategpru', $getCategpru);
   }


   public function findKennel(Request $request)
   {

      Session::put('page', 'find_kennnels');
      if ($request->ajax()) {

         $gekennels = Product::with('category', 'admins', 'vendors')->where('status', 1)->groupBy('admin_id');

         $data = $request->all();
         $getCountry = Vendor::select('country', 'id')->groupBy('country');
         if (isset($data['category_id']) && !empty($data['category_id'])) {
            $gekennels->whereIn('category_id', $data['category_id']);
         }

         if (isset($data['country_id']) && !empty($data['country_id'])) {
            $getCon = Vendor::whereIn('country', $data['country_id']);

            $gekennels = Vendor::whereIn('country', $data['country_id']);
            // $gekennels->where('vendors.country',$data['country_id']);
         }

         if (isset($data['state_id']) && !empty($data['state_id'])) {

            $getState = Vendor::select('state', 'id')->groupBy('state')->get()->toArray();
            $getSta = Vendor::where('state', $data['state_id']);
            $gekennels = $getSta;
         }
         if (isset($data['city_id']) && !empty($data['city_id'])) {
            $getCity = Vendor::select('city', 'id')->groupBy('city')->get()->toArray();
            $getCiy = Vendor::where('city', $data['city_id']);
            $gekennels = $getCiy;
         }
         if (isset($data['sort']) && !empty($data['sort'])) {
            if ($data['sort'] == "product_latest") {
               $gekennels->orderBy('id', 'DESC');
            } else if ($data['sort'] == "name_z") {
               $gekennels->orderBy('id', 'Desc');
            } else if ($data['sort'] == "name_a") {
               $gekennels->orderBy('id', 'Asc');
            }
         } else {
            $gekennels->orderBy('id', 'Asc');
         }
         $gekennels = $gekennels->paginate(15);

         return view('frontend.pages.ajax_kennel_listing')
            ->with('gekennels', $gekennels);
      } else {

         $gekennels = Product::with('category', 'admins', 'vendors')->groupBy('admin_id')->where('status', 1)->get()->toArray();
      }

      $getCat = Category::where('status', 1)->get()->toArray();
      $getGender = Product::select('Gender', 'id')->groupBy('Gender')->where('status', 1)->get()->toArray();
      $getCountry = Vendor::select('country', 'id')->groupBy('country')->get()->toArray();
      $getState = Vendor::select('state', 'id')->groupBy('state')->get()->toArray();
      $getCity = Vendor::select('city', 'id')->groupBy('city')->get()->toArray();

      return view('frontend.pages.find_kennel')
         ->with('getGender', $getGender)
         ->with('getCountry', $getCountry)
         ->with('getState', $getState)
         ->with('getCity', $getCity)
         ->with('gekennels', $gekennels)
         ->with('getCat', $getCat);
   }










   public function findPuppy(Request $request)
   {

      Session::put('page', 'find_puppy');

      if ($request->ajax()) {
         $gekennels = Product::with('category', 'admins', 'vendors')->where('status', 1);



         $data = $request->all();

         // echo "<pre>"; print_r($data);die;


         if (isset($data['category_id']) && !empty($data['category_id'])) {
            $gekennels->whereIn('category_id', $data['category_id']);
         }

         if (isset($data['gender_id']) && !empty($data['gender_id'])) {
            $gekennels->whereIn('Gender', $data['gender_id']);
         }

         if (isset($data['sort']) && !empty($data['sort'])) {
            if ($data['sort'] == "product_latest") {
               $gekennels->orderBy('id', 'DESC');
            } else if ($data['sort'] == "name_z") {
               $gekennels->orderBy('id', 'Desc');
            } else if ($data['sort'] == "name_a") {
               $gekennels->orderBy('id', 'Asc');
            }
         } else {
            $gekennels->orderBy('id', 'Asc');
         }
         $gekennels = $gekennels->get()->toArray();

         return view('frontend.pages.ajax_puppy_listing')
            ->with('gekennels', $gekennels);
      } else {

         $gekennels = Product::with('category', 'admins', 'vendors')->where('status', 1)->get()->toArray();
      }

      $getCat = Category::where('status', 1)->get()->toArray();

      foreach ($gekennels as $key => $pro) {
         $dbdate = $pro['date_of_birth'];
         $toDate = Carbon::parse($pro['date_of_birth']);
         $fromDate = Carbon::parse(date('Y-m-d'));
         $days = $toDate->diffInDays($fromDate);
         $weeks = $days / 7;
      }
      // dd

      $getGender = Product::select('Gender', 'id')->groupBy('Gender')->where('status', 1)->get()->toArray();


      return view('frontend.pages.find_puppy')
         ->with('gekennels', $gekennels)
         ->with('getGender', $getGender)
         // ->with('weeks',$weeks)
         ->with('getCat', $getCat);
   }
   public function PuppyDetails($slug)
   {
      Session::put('page', 'find_puppy');
      $puppyDetails = Product::where('slug', $slug)->with('vendors', 'category', 'admins')->where('status', 1)->first()->toArray();


      $Relatedpro = Product::where('category_id', $puppyDetails['category_id'])->with('vendors', 'category', 'admins')->where('status', 1)->get()->toArray();


      if (Auth::check()) {
         $user_id = 1;
      } else {
         $user_id = 0;
      }
      $imgCount = PuppyImage::where('puppy_id', $puppyDetails['id'])->with('products', 'vendors')->count();

      $getimg = PuppyImage::where('puppy_id', $puppyDetails['id'])->with('products', 'vendors')->where('status', 1)->get()->toArray();


      // echo "<pre>"; print_r($puppyDetails['image']);die;

      return view('frontend.pages.available_puppy')
         ->with('imgCount', $imgCount)
         ->with('Relatedpro', $Relatedpro)
         ->with('user_id', $user_id)
         ->with('getimg', $getimg)

         ->with('puppyDetails', $puppyDetails);
   }
   public function catDetails($id)
   {
      Session::put('page', 'find_kennnels');
      $getCatProducts = Product::where('category_id', $id)->with('vendors', 'category', 'admins')->where('status', 1)->get()->toArray();

      $catName = Category::where('status', 1)->where('id', $id)->select('id', 'name')->first()->toArray();


      return view('frontend.pages.breeds_details')->with('catName', $catName)->with('getCatProducts', $getCatProducts);
   }
   public function storeDetails($slug)
   {

      $vendorDetails = Vendor::where('slug', $slug)->first()->toArray();

      $getProducts = Product::where('vendor_id', $vendorDetails['id'])->with('category', 'vendors')->where('status', 1)->get()->toArray();


      $getPlannedLitters = Product::where('vendor_id', $vendorDetails['id'])->whereNot('produt_type_id', '!=', 'Planned Litter')->with('category', 'vendors')->groupBy('category_id')->where('status', 1)->get()->toArray();

      $getAbailablePuppy = Product::where('vendor_id', $vendorDetails['id'])->whereNot('produt_type_id', '!=', 'Available Puppy')->with('category', 'vendors')->groupBy('category_id')->where('status', 1)->get()->toArray();

      $getBreeds = Product::where('vendor_id', $vendorDetails['id'])->with('category', 'vendors')->groupBy('category_id')->where('status', 1)->get()->toArray();

      // echo "<pre>"; print_r($getPlannedLitters);die;


      // return view('frontend.pages.store_details')
      return view('frontend.pages.kennel-home')
         ->with('getProducts', $getProducts)
         ->with('getBreeds', $getBreeds)
         ->with('getPlannedLitters', $getPlannedLitters)
         ->with('getAbailablePuppy', $getAbailablePuppy)
         ->with('vendorDetails', $vendorDetails);
   }

   public function shippingAddress($id)
   {
//      Session::put('page', 'shipping_address');
//
      $getOrder = Order::with('products', 'admins', 'users')->where('id', $id)->where('user_id', Auth::user()->id)->first()->toArray();
//      // echo "<pre>"; print_r($getOrder);die;
      return view('frontend.pages.shipping_address')->with('getOrder', $getOrder);

//       STRIPE TESTING
       // Set your secret key. Remember to switch to your live secret key in production.
// See your keys here: https://dashboard.stripe.com/apikeys
       $stripeAccount = StripeAccount::where('vendor_id',$getOrder['admins']['vendor_id'])->first();
//       dd($stripeAccount->stripe_account);
       \Stripe\Stripe::setApiKey(env('STRIPE_KEY'));
       $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
       $product = $stripe->products->create(
           [
               'name' => $getOrder['products']['sire_name'],
               'description' => $getOrder['products']['description'],
               'expand' => ['default_price'],
               'images' =>['https://dummyimage.com/300']
           ]
       );
       $price = $stripe->prices->create(
           [
               'product' => $product->id,
               'unit_amount' => $getOrder['products']['puppy_price']*100,
               'currency' => 'cad',
           ]
       );
       $session = \Stripe\Checkout\Session::create([
           'payment_method_types' => ['card'],
           'line_items' => [[
               'price' => $price->id,
               'quantity' => 1,
           ]],
           'mode' => 'payment',
           'success_url' => 'https://example.com/success',
           'cancel_url' => 'https://example.com/failure',
           'payment_intent_data' => [
               'transfer_data' => [
                   'destination' => $stripeAccount->stripe_account,
               ],
           ],
       ]);
       return redirect($session->url);
   }


   public function Ourservices()
   {
      Session::put('page', 'oru_services');

      return view('frontend.pages.services');
   }
   public function contactUs()
   {
      Session::put('page', 'contact_us');
      return view('frontend.pages.contact_us');
   }
   public function OurStories()
   {
      Session::put('page', 'our_stories');

      return view('frontend.pages.our_story');
   }
   public function availablePuppy()
   {
      Session::put('page', 'available_puppy');

      return view('frontend.pages.available_puppy');
   }
   public function plannedLitter()
   {
      Session::put('page', 'planned_litter');

      return view('frontend.pages.planned_litter');
   }


   public function userProfile()
   {
      if (empty(auth::check())) {
         // dd('auth not login');
      }
      // dd('auth  login');

      return view('frontend.pages.user_profile');
   }

   //////////////////////////////////////////////////////////////////////////////////////////////////////////////
   public function indexUser()
   {
      Session::put('page', 'user_index');

      return view('user.index');
   }






   public function notification()
   {
      Session::put('page', 'user_notification');

      return view('user.include.notification');
   }

   public function cartInvoice($id)
   {
      Session::put('page', 'cart_invoice');

      return view('user.include.cart_invoice');
   }
   public function cartInvoicePDF()
   {
      Session::put('page', 'cart_invoice_pdf');

      return view('user.include.cart_invoice_pdf');
   }
   public function address()
   {
      Session::put('page', 'user_address');

      return view('user.include.address');
   }
   public function agrement()
   {
      Session::put('page', 'user_address');

      return view('user.include.agrements');
   }
   public function logout()
   {
      Auth::logout();

      return redirect()->route('frontendHome');
   }
}
