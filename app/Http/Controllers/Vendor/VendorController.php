<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Validation\Rules;

use Hash;
use Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Chat;
use App\Models\ChatMessage;
use App\Models\Order;
use App\Models\Product;
use App\Models\Vendor;
use App\Models\VendorPayment;
use App\Models\WithdrawRequest;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class VendorController extends Controller
{
    public function index()
    {
        Session::put('page', 'dashboard');
        return view('admin.index');
    }
    public function vendorlogin(Request $request)
    {

        // return $request->all();
        if ($request->isMethod('post')) {
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;

            $rule = [
                'email' => 'required|email|max:255',
                'password' => 'required',
            ];
            $customMessage = [
                'email.required' => 'Email is requited',
                'email.email' => 'Valid Email is required',
                'password.required' => 'Password is required',
            ];
            $this->validate($request, $rule, $customMessage);

            $vendorEmail = Vendor::where('email', '=', $data['email'])->first();

            if ($vendorEmail === null) {
                $message = "Your email is not register";
                Session::put('success_message', $message);
                return redirect()->back();
            }


            // $getEmail = Vendor::where('email', $data['email'])->first()->toArray();
            // if ($getEmail['approved'] ==  0) {
            //     $message = "Your account is not Approved yet !";
            //     Session::put('success_message', $message);
            //     return redirect()->back();
            // }

            // echo "<pte>"; print_r($data); die;
            if (Auth::guard('vendor')->attempt(['email' => $data['email'], 'password' => $data['password']])) {

                return redirect()->route('vendorDashboard');
            }
        }
        Session::flash('error_message', 'Invalid Email or password');
        return view('admin.admin_auth.login');
    }
    public function logout()
    {
        Auth::guard('vendor')->logout();
        return redirect('/ts-login');
    }

    public function vendorApplication()
    {
        Session::put('page', 'vendor_application');
        Session::forget('success_message');
        Session::forget('error_message');

        $Vendor_r_app = Cart::with('products', 'users:id,name,email')->where('status',1)->get()->toArray();
        return view('vendors_view.application_receive')->with('Vendor_r_app', $Vendor_r_app);
    }
    public function rejectApplication(Request $request)
    {


        if ($request->isMethod('post')) {

            $data = $request->all();
            $findPro = Product::where('id',$data['product_id'])->first()->toArray();

            // echo "<pre>";print_r($data['cart_id']);die;

            DB::beginTransaction();

            $orders = new Order;
            $orders->vendor_id = $findPro['vendor_id'];
            $orders->puppy_id = $data['product_id'];
            $orders->cart_id = $data['cart_id'];
            $orders->user_id = $data['user_id'];
            $orders->price = $data['price'];
            $orders->grand_total = 0;
            $orders->invoice_number = 0;
            $orders->shipping_charges = 0;
            $orders->tex = 0;
            $orders->status = 4;
            // dd($orders);
            $orders->save();
            
            $carts = Cart::where('id',$data['cart_id'])->first()->toArray();

            Cart::where('id', $carts['id'])->update(['status' => 0]);
            DB::commit();
            return redirect()->back();
        }
    }

    public function adminDetails(Request $request)
    {
        Session::put('page', 'update_admin_details');

        $admin = vendor::get();
        // echo "<pre>"; print_r(Auth::guard('vendor')->user());die;
        $adminDetaiils = Vendor::where('email', Auth::guard('vendor')->user()->email)->first();
        // return $request->all();
        if ($request->isMethod('post')) {
            $data = $request->all();
            // dd($data );
            $rules = [
                'first_name' => 'required|regex:/^[\pL\s\-]+$/u',
                'mobile' => 'required|numeric',
                'image' => 'image'
            ];
            $customMessages = [
                'first_name.required' => 'first_name is requires',
                'first_name.alpha' => 'Valid first_name is required',
                'mobile.required' => 'asad Mobile is required',
                'mobile.numeric' => 'asad Valid Mobile is required',
                'image.image' => 'Valid image is required',
            ];
            $this->validate($request, $rules, $customMessages);

            $image = $request->image;
            $imageName = Str::slug($request->first_name, '-') . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            if (!Storage::disk('public')->exists('admin/images/admin_photos/admins/')) {
                Storage::disk('public')->makeDirectory('admin/images/admin_photos/admins/');
            }

            $productName = Image::make($image)->resize(640, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->stream();
            Storage::disk('public')->put('admin/images/admin_photos/admins/' . $imageName, $productName);
            //upadate admin details
            Vendor::where('email', Auth::guard('vendor')->user()->email)->update(['first_name' => $data['first_name'], 'mobile' => $data['mobile'], 'image' => $imageName]);
            Session::flash('success_message', 'Admin Details Updata Successfully !');
            return redirect()->back();
        }
        $getCat = Category::where('status', 1)->get()->toArray();
        $vendoDetails = Vendor::where('email', Auth::guard('vendor')->user()->email)->first()->toArray();


        return view('vendors_view.vendor_auth.vendor_details')
            // ->with('getCounties',$getCounties)
            ->with('getCat', $getCat)
            ->with('vendoDetails', $vendoDetails)
            ->with('admin', $admin)
            ->with('adminDetaiils', $adminDetaiils);
    }

    public function updateVendorDetails(Request $request)
    {
        Session::put('page', 'update_admin_details');
        $admin = Vendor::get();
        $adminDetaiils = Vendor::where('email', Auth::guard('vendor')->user()->email)->first();

        if ($request->isMethod('post')) {
            $data = $request->all();

            // echo "<pre>"; print_r($data);die;

            $rules = [
                'first_name' => 'required|regex:/^[\pL\s\-]+$/u',
                'phone' => 'required|numeric',
                'admin_image' => 'image'
            ];
            $customMessages = [
                'first_name.required' => 'first_name is requires',
                'first_name.alpha' => 'Valid first_name is required',
                'phone.required' => 'Mobile is required',
                'admin_image.image' => 'Valid image is required',
            ];
            $this->validate($request, $rules, $customMessages);
            // dd($request->image == Null);
            if ($request->admin_image == Null) {
                $imageName = $data['current_admin_image'];
            } else {
                $image_tmp = $request->file('admin_image');
                $extention = $image_tmp->getClientOriginalExtension();
                $imageName = rand(111, 99999) . '.' . $extention;
                $imagePath = 'admin/images/admin_photos/admins/' . $imageName;
                Image::make($image_tmp)->save($imagePath);
            }

            Vendor::where('email', Auth::guard('vendor')->user()->email)->update(['first_name' => $data['first_name'], 'last_name' => $data['last_name'], 'phone' => $data['phone'], 'admin_image' => $imageName]);

            Session::flash('success_message', 'Vendor Details Updata Successfully !');
            return redirect()->back();
        }
        return redirect()->back()
            ->with('admin', $admin)
            ->with('adminDetaiils', $adminDetaiils);
    }

    public function updatePassword(Request $request)
    {
        Session::put('page', 'update_admin_password');
        if ($request->isMethod('post')) {
            $data = $request->all();
            // echo "<pre>"; print_r($data);die;
            if (Hash::check($data['current_pwd'], Auth::guard('vendor')->user()->password)) {
                // check if new and confirm password is matching
                if ($data['new_pwd'] == $data['confirm_pwd']) {
                    Admin::where('id', Auth::guard('vendor')->user()->id)->update(['password' => bcrypt($data['new_pwd'])]);
                    Session::flash('success_message', 'Your Password has been change ! ');
                } else {
                    Session::flash('error_message', 'Your New Password and confirm Password not Match !');
                }
            } else {
                Session::flash('error_message', 'Your Current Password is incorrect');
            }
            return redirect()->back();
        }
    }

    public function applicationDetails($id)
    {
        Session::put('page', 'vendor_application_details');
        $appDetails = Cart::with('users')->where('id', $id)->first()->toArray();
        // echo "<pre>";print_r($appDetails);die;
        return view('vendors_view.application_details')->with('appDetails', $appDetails);
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


    public function withdrawRequest()
    {


        Session::put('page', 'all-vendor-payment');

        $withdReq = WithdrawRequest::where('vendor_id', Auth::guard('vendor')->user()->id)->get()->toArray();


        return view('vendors_view.payment.vendor-money-withdraw-requests')->with('withdReq', $withdReq);
    }

    public function vendorReply(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();

        //   echo "<pre>"; print_r($data);die;

            $rules = [
                'images' => 'image'
            ];
            $customMessages = [
                'images.image' => 'Valid image is required',
            ];
            $this->validate($request, $rules, $customMessages);
            $mesg = new ChatMessage;

            if (!empty($data['images'])) {
                $image_tmp = $request->file('images');
                $extention = $image_tmp->getClientOriginalExtension();
                $adminImage = rand(111, 99999) . '.' . $extention;
                $imagePath = 'admin/images/admin_photos/chat_images/' . $adminImage;
                Image::make($image_tmp)->save($imagePath);
              }else{
                $adminImage = 0;
              }

            $mesg->images = $adminImage;
            $mesg->user_id = $data['user_id'];
            $mesg->type = $data['type'];
            $mesg->chat_id = $data['chat_id'];
            $mesg->vendor_id = $data['vendor_id'];
            $mesg->messages = $data['messages'];
            // dd($mesg);
            $mesg->save();
            // Session::flash('success_message',$message);
            return redirect()->back();
        }
    }
}
