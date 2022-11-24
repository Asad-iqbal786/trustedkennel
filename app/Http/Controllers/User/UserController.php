<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\Models\Application;
use App\Models\Cart;
use App\Models\Chat;
use App\Models\ChatMessage;
use App\Models\Order;
use App\Models\Vendor;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class UserController extends Controller
{
    
    public function userProfile(){
        Session::put('page', 'user_index');

        return view('user.include.user_profile');
    }

    public function termsAndConditions()
    {
       Session::put('page', 'user_index');
 
       return view('user.include.tersm_and_conditions');
    }
    public function cart()
    {
       Session::put('page', 'user_notification');
 
       $getUserCart = Cart::with('products', 'vendors')->where('user_id', Auth::user()->id)->get()->toArray();
 
       // echo "<pre>"; print_r($getUserCart);die;
 
       return view('user.include.cart')->with('getUserCart', $getUserCart);
    }
    public function userOrder()
    {
       Session::put('page', 'user_notification');
 
       $getUserCart = Order::with('products', 'vendors')->where('user_id', Auth::user()->id)->get()->toArray();
 
 
       return view('user.include.user_order')->with('getUserCart', $getUserCart);
    }


    public function customerChat()
    {
      $vendorChat = Chat::where('user_id',Auth::user()->id)->with('vendors', 'users', 'products')->get()->toArray();

 
       return view('user.include.customer_chat')->with('vendorChat',$vendorChat);
    }
 

    public function chat($id)
    {
      $vendorChat = Chat::where('user_id',Auth::user()->id)->with('vendors', 'users', 'products')->get()->toArray();

      $vendChat = Chat::where('id',$id)->with('vendors', 'users', 'products')->first()->toArray();

      $getChat =  ChatMessage::where('chat_id',$vendChat['id'])->get()->toArray();

 
      // echo "<pre>"; print_r($getChat);die;
 
       return view('user.include.chat')
       ->with('vendorChat',$vendorChat)
       ->with('getChat',$getChat)
       ->with('vendChat',$vendChat);
    }
 
    public function addEditApplication(Request $request, $id = null)
    {
 
 
       if ($id == "") {
          $title = "Add Application ";
          Session::put('page', 'product_index');
          $app = new Application;
          $productData = array();
          $message = "Application  add successfully ";
       } else {
          $title = "edit Application ";
          Session::put('page', 'product_index');
          $productData = Application::where('id', $id)->first();
          $productData = json_decode(json_encode($productData), true);
 
          $app =  Application::find($id);
          $message = "Application  update successfully ";
       }
 
 
 
 
       if ($request->isMethod('post')) {
 
          $data = $request->all();
          // echo "<pre>"; print_r($data);die;
 
          // $rules = [
          // ];
          // $customMessages= [
          // ];
          // $this->validate($request,$rules,$customMessages);
 
          $app->home_style = $data['home_style'];
 
          if (Auth::check()) {
             $user_id = Auth::user()->id;
          } else {
             $user_id = 0;
          }
          $app->user_id = $user_id;
 
          $app->fence = $data['fence'];
          $app->house_members = $data['house_members'];
          $app->special_member = $data['special_member'];
          $app->other_dog = $data['other_dog'];
          $app->other_cat = $data['other_cat'];
          $app->previous_expierience = $data['previous_expierience'];
          $app->total_dog = $data['total_dog'];
          $app->rised_puppy = $data['rised_puppy'];
          $app->surrendered_dog = $data['surrendered_dog'];
          $app->plan_for_other_puppy = $data['plan_for_other_puppy'];
          $app->how_to_integrate = $data['how_to_integrate'];
          $app->descrbe_living_secuation = $data['descrbe_living_secuation'];
          $app->puppu_spent_night = $data['puppu_spent_night'];
          $app->traning_type = $data['traning_type'];
          $app->socialization = $data['socialization'];
          $app->planning_another_puppy = $data['planning_another_puppy'];
          $app->puppies_often_have = $data['puppies_often_have'];
          $app->please_tell_use_more = $data['please_tell_use_more'];
          $app->coat_color = $data['coat_color'];
          $app->prefer = $data['prefer'];
          $app->when_you_ideal = $data['when_you_ideal'];
          $app->energy_level = $data['energy_level'];
          $app->puppy_intended = $data['puppy_intended'];
          $app->if_you_checked = $data['if_you_checked'];
          $app->email = $data['email'];
 
          $app->save();
       }
       if (!empty($productData['id'])) {
          $productData = 0;
       } else {
          $get = Auth::user()->id;
          $productData = Application::where('user_id', $get)->first();
          // $paymentType = $id;
       }
       Session::put('success_message', $message);
       return view('user.include.puppy_application')->with('productData', $productData);
    }

}
