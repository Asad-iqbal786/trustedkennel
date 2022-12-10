<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StripeAccount;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Cart;
use App\Models\Vendor;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules;
use Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use Hash;
use App\Models\User;
use App\Models\VendorImage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index()
    {
        DB::beginTransaction();
        Session::put('page', 'dashboard');
        $totalSales = Order::sum('grand_total');


        $getProduct = Product::with('category')->where('status', 0)->get()->toArray();
        $now = Carbon::now();
        $currentMonth = date($now->month);
        $currentYear = date($now->year);
        $monthlySales = Order::whereRaw('MONTH(created_at) = ?', [$currentMonth])
            ->sum('grand_total');
        $totalReser = Cart::count();
        $monthlyResv = Cart::whereRaw('MONTH(created_at) = ?', [$currentMonth])->count();
        $totalAvailabePuppy = Product::where('produt_type_id', '=', 'Available Puppy')->count();
        $thisYearPuppy = Product::whereRaw('year(created_at) = ?', [$currentYear])
            ->where('produt_type_id', '=', 'Available Puppy')
            ->count();
        $totalplanLittles = Product::where('produt_type_id', '=', 'Planned Litter')->count();
        $totalLittleThisYear = Product::whereRaw('year(created_at) = ?', [$currentYear])
            ->where('produt_type_id', '=', 'Planned Litter')
            ->count();
        // echo "<pre>"; print_r($thisYearPuppy); die;

        return view('admin.index')
            ->with('thisYearPuppy', $thisYearPuppy)
            ->with('totalAvailabePuppy', $totalAvailabePuppy)

            ->with('totalplanLittles', $totalplanLittles)
            ->with('totalLittleThisYear', $totalLittleThisYear)

            ->with('monthlyResv', $monthlyResv)
            ->with('totalReser', $totalReser)

            ->with('monthlySales', $monthlySales)
            ->with('totalSales', $totalSales)

            ->with('getProduct', $getProduct);
    }
    public function login()
    {

        return view('admin.admin_auth.login');
    }
    public function register()
    {
        // $getCat = Category::where('status', 1)->get()->toArray();
        $getCat = Category::where('status', 1)->get()->toArray();

        return view('admin.admin_auth.vendor_register')->with('getCat', $getCat);
    }
    public function vendorHome()
    {
        return "this is vendor home page";
    }
    public function newRegister(Request $request)
    {
        // return $request->all();

        $rules = [
            'email' => 'required|email|unique:vendors,email',
            // 'kennel_name' => 'required|regex:/^[\pL\s\-]+$/u',
            'kennel_name' => 'required',
            'kennel_affiliations' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'registration_number' => 'required',
            // 'established_year' => 'required',
            'breeds' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            // 'number_of_litters' => 'required',
            'about' => 'required',
            'health_check' => 'required',
            // 'how_many_champions' => 'required',
            'website' => 'required',
            'instagram_url' => 'required',
            'facebook_url' => 'required',
            'twitter_url' => 'required',
            'image' => 'image',
            'recent_img' => 'image',
            // 'multiple_img' => 'image',
        ];
        $customMessages = [
            'kennel_name.required' => 'kennel_name is requires',
            'kennel_affiliations.alpha' => 'Valid kennel_affiliations is required',
            'email.email' => 'Valid Email is required',
            'city.required' => 'City is Required...',
            'state.required' => 'State is Required...',
            'country.required' => 'Country is Required...',
            'registration_number.required' => 'KKENNEL REGISTRATION NUMBER is Required...',
            // 'established_year.required' => 'established_year is Required...',
            'breeds.required' => ' breeds Year is Required...',
            // 'number_of_litters.required' => 'number_of_litters  is Required...',
            'first_name.required' => 'first_name is Required...',
            'last_name .required' => 'last_name is Required...',
            'phone.required' => 'phone is Required...',
            'about.required' => 'about is Required...',
            'health_check.required' => 'health_check Check is Required...',
            'image.image' => 'Valid image is required',
            'recent_img.image' => 'Valid recent_img is required',
            // 'multiple_img.image' => 'Valid multiple_img is required',
            'how_many_champions.required' => 'how_many_champions is Required...',
            'website.required' => 'website is Required...',
            'instagram_url.required' => 'instagram_url is Required...',
            'facebook_url.required' => 'facebook_url is Required...',
            'twitter_url.required' => 'twitter_url is Required...',


        ];
        $this->validate($request, $rules, $customMessages);

        if ($request->isMethod('post')) {
            $data = $request->all();
            // echo "<pre>";print_r($data);  die;
            $image_tmp = $request->file('image');
            $image_tmp_recent_img = $request->file('recent_img');
            if (empty($image_tmp)) {
                $message = "PLEASE ADD KENNEL PROFILE PICTURE ";
                Session::put('error_message', $message);
                return redirect()->back();
            }
            if (empty($image_tmp_recent_img)) {
                $message = "PLEASE ADD A RECENT PICTURE OF YOUR KENNEL FACILITIES ";
                Session::put('error_message', $message);
                return redirect()->back();
            }
            $vendorCount = Admin::where('email', $data['email'])->count();
            if ($vendorCount > 0) {
                $message = "This Email id is alread exists use different Email for register ";
                Session::put('error_message', $message);
                return redirect()->back();
            }
            $shopName = Vendor::where('kennel_name', $data['kennel_name'])->count();
            if ($shopName > 0) {
                $message = "Shop name is already exist please try differnt one";
                Session::put('error_message', $message);
                return redirect()->back();
            }
            if ($data['password'] !=  $data['password_confirmation']) {
                $message = "Password and confirm Password is no match please try agin with new password ";
                Session::put('error_message', $message);
                return redirect()->back();
            }
            DB::beginTransaction();

            $vendors = new Vendor;
            
            $image_tmp = $request->file('image');
            $extention = $image_tmp->getClientOriginalExtension();
            $adminImage = rand(111, 99999) . '.' . $extention;
            $imagePath = 'admin/images/admin_photos/admins/' . $adminImage;
            Image::make($image_tmp)->save($imagePath);
            $vendors->image = $adminImage;
            $vendors->email = $data['email'];
            $vendors->kennel_name = $data['kennel_name'];
            $vendors->kennel_affiliations = $data['kennel_affiliations'];
            $vendors->country = $data['country'];
            $vendors->state = $data['state'];
            $vendors->city = $data['city'];
            // $vendors->area = $data['area'];
            $vendors->registration_number = $data['registration_number'];
            $vendors->established_year = $data['established_year'];
            $breeds =  $data['breeds'] = implode(',', $request->breeds);
            $vendors->breeds = $breeds;
            $vendors->first_name = $data['first_name'];
            $vendors->last_name = $data['last_name'];
            $vendors->about = $data['about'];
            $vendors->number_of_litters = $data['number_of_litters'];
            $vendors->how_many_champions = $data['how_many_champions'];
            $vendors->website = $data['website'];
            $vendors->password = bcrypt($data['password']);
            $vendors->instagram_url = $data['instagram_url'];
            $vendors->facebook_url = $data['facebook_url'];
            $vendors->twitter_url = $data['twitter_url'];
            // dd($vendors);
            $vendors->save();

            $vendor_id = DB::getPdo()->lastInsertId();

            //recen multiple images
            foreach ($image_tmp_recent_img as $key => $image) {
                $images = new VendorImage;
                $image_tmp = Image::make($image);
                $extension = $image->getClientOriginalExtension();
                $recentImage = rand(111, 99999) . time() . '.' . $extension;
                $large_image_path = 'admin/images/admin_photos/recent_img/' . $recentImage;
                Image::make($image_tmp)->resize('1240,600')->save($large_image_path);
                $images->recent_img = $recentImage;
                $images->vendor_id = $vendor_id;
                // dd($images);
                $images->save();
            }
            $message = "Please confirm your Email to activate your account!";
            Session::put('success_message', $message);
            // StripeAccount
            $stripe = new StripeAccount;
            $stripeApi = new \Stripe\StripeClient(env('STRIPE_SECRET'));
            $acc = $stripeApi->accounts->create(['type' => 'express']);
            $stripe->vendor_id = $vendor_id;
            $stripe->stripe_account = $acc->id;
            $stripe->save();
            DB::commit();
            //   Session::put('page','product_index');
            // Session::put('page','records_submited_succesfully');

            $message = "Your account is register Plese login Now!";
            Session::put('success_message', $message);
            Session::put('records_submited_succesfully');


            return redirect()->back();
        }
    }


    public function dashboard(Request $request)
    {

        // return $request->all();
        if ($request->isMethod('post')) {
            $data = $request->all();

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

            $vendorEmail = Admin::where('email', '=', $data['email'])->first();

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

            // echo "<pre>"; print_r($data); die;

            if (Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password']])) {

                return redirect()->route('adminDashboard');
            } else {
                dd("adfafasf");
            }
        }
        Session::flash('error_message', 'Invalid Email or password');
        return view('admin.admin_auth.login');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/ts-login');
    }
    public function allAdmin()
    {
        Session::put('page', 'all_admins');
        $getVendors = Vendor::get()->toArray();

        // echo "<pre>"; print_r($getVendors); die;

        return view('admin.admin_index.all_admin')
            ->with('getVendors', $getVendors);
    }
    public function allUsers()
    {
        Session::put('page', 'all_users');
        $getAdmins = User::get()->toArray();

        return view('admin.admin_index.all_users')
            ->with('getAdmins', $getAdmins);
    }

    public function VendorAccoutActive(Request $request)
    {
        if ($request->isMethod('post')) {
            Session::forget('success_message');
            Session::forget('error_message');
            $data = $request->all();
            // dd( $data);

            Admin::where('id', $data['id'])->update(['approved' => $data['approved'], 'type' => $data['type']]);
            $vendorDetails = Admin::where('id', $data['id'])->first();
            $email = $vendorDetails['email'];
            $messageData = ['name' => $vendorDetails['name'], 'email' => $vendorDetails['email']];
            Mail::send('admin.email.vendor_approved', $messageData, function ($message) use ($email) {
                $message->to($email)->subject('Welcome to E-commer website');
            });
            $message = "Your account is Approved pleas login now!";
            // $request->session()->put('success_message', $message);
            Session::put('success_message', $message);
            return redirect()->route('allAdmin');
        }
    }

    public function confirmAccount($email)
    {
        $email = base64_decode($email);
        $vendorCount = Admin::where('email', $email)->count();

        // update vendor status activate account
        Admin::where('email', $email)->update(['status' => 1]);
        // $email = $data['email'];
        $messageData = ['name' => $vendorDetails['name'], 'email' => $vendorDetails['email']];
        Mail::send('admin.email.register', $messageData, function ($message) use ($email) {
            $message->to($email)->subject('Welcome to E-commer website');
        });
        $message = "Your account is Activated pleas login now!";
        Session::put('success_message', $message);
        return redirect()->bacck();
    }



    public function statusUpdate($id)
    {
        $admin = Admin::where('id', $id)->first()->toArray();
        // dd($admin);
        return view('admin.admin_auth.status_update')->with('admin', $admin);
    }
    public function adminStatusUpdate(Request $request)
    {
        if ($request->ajax()) {
            $data = $request->all();
            if ($data['status'] == "Active") {
                $status = 0;
            } else {
                $status = 1;
            }
            Admin::where('id', $data['admin_id'])->update(['status' => $status]);

            return response()->json(['status' => $status, 'admin_id' => $data['admin_id']]);
        }
    }
    public function vendorTypeUpdate(Request $request)
    {

        $data = $request->all();

        // echo "<pre>"; print_r($data);die;

        Vendor::where('id', $data['vendor_id'])->update(['vendor_type' => $data['vendor_type']]);

        // emails deliver
        $vendorData = Vendor::where('id', $data['vendor_id'])->first();

        $admin_id = "vendor@trustedkennels.com";
        $vendEmail = $vendorData['email'];
        $emails = [$vendEmail, $admin_id];

        $messageData = [
            'first_name' => $vendorData['first_name'],
            'email' => $vendorData['email'],
            'vendor_type' => $vendorData['vendor_type'],
            'mobile' => $vendorData['mobile']
        ];
        Mail::send('admin.email.vendor_status_update',  $messageData, function ($message) use ($emails) {
            $message->to($emails)->subject('This is test e-mail');
        });



        return redirect()->back();
    }

    public function updatePassword(Request $request)
    {
        Session::put('page', 'update_admin_password');
        if ($request->isMethod('post')) {
            $data = $request->all();
            // echo "<pre>"; print_r($data);die;
            if (Hash::check($data['current_pwd'], Auth::guard('admin')->user()->password)) {
                // check if new and confirm password is matching
                if ($data['new_pwd'] == $data['confirm_pwd']) {
                    Admin::where('id', Auth::guard('admin')->user()->id)->update(['password' => bcrypt($data['new_pwd'])]);
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


    public function adminDetails(Request $request)
    {
        Session::put('page', 'update_admin_details');

        $admin = Admin::get();
        // echo "<pre>"; print_r(Auth::guard('admin')->user());die;
        $adminDetaiils = Admin::where('email', Auth::guard('admin')->user()->email)->first();
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
            // uploadd image
            // if($request->hasFile('image')){
            //     $image_tmp = $request->file('image');
            //     if($image_tmp->isValid()){
            //         //get image extension
            //         $extention = $image_tmp->getClientOriginalExtension();
            //         // Generate new Name
            //         $imageName = rand(111,99999).'.'.$extention;
            //         $imagePath = 'images/admin_images/admin_photos/'.$imageName;
            //         //upload the image
            //         Image::make($image_tmp)->save($imagePath);
            //     }else if(!empty($data['current_admin_image'])){
            //         $imageName = $data['current_admin_image'];
            //     }else{
            //         $imagename = "";
            //     }
            // }



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
            Admin::where('email', Auth::guard('admin')->user()->email)->update(['first_name' => $data['first_name'], 'mobile' => $data['mobile'], 'image' => $imageName]);
            Session::flash('success_message', 'Admin Details Updata Successfully !');
            return redirect()->back();
        }
        $getCat = Category::where('status', 1)->get()->toArray();
        $vendoDetails = Admin::where('email', Auth::guard('admin')->user()->email)->with('vendors')->first()->toArray();

        // echo "<pre>"; print_r($vendoDetails);die;




        // $getCounties = Country::get()->toArray();
        return view('admin.admin_auth.admin_details')
            // ->with('getCounties',$getCounties)
            ->with('getCat', $getCat)
            ->with('vendoDetails', $vendoDetails)
            ->with('admin', $admin)
            ->with('adminDetaiils', $adminDetaiils);
    }

    public function updateAdminDetails(Request $request)
    {
        Session::put('page', 'update_admin_details');
        $admin = Admin::get();
        $adminDetaiils = Admin::where('email', Auth::guard('admin')->user()->email)->first();

        // return $request->all();
        if ($request->isMethod('post')) {
            $data = $request->all();
            // echo "<pre>"; print_r($data['current_admin_image']);die;

            $rules = [
                'first_name' => 'required|regex:/^[\pL\s\-]+$/u',
                'mobile' => 'required|numeric',
                'admin_image' => 'image'
            ];
            $customMessages = [
                'first_name.required' => 'first_name is requires',
                'first_name.alpha' => 'Valid first_name is required',
                'mobile.required' => 'asad Mobile is required',
                'mobile.numeric' => 'asad Valid Mobile is required',
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

            //upadate admin details
            $adminsss = Admin::where('email', Auth::guard('admin')->user()->email)->update(['first_name' => $data['first_name'], 'last_name' => $data['last_name'], 'mobile' => $data['mobile'], 'admin_image' => $imageName]);

            Session::flash('success_message', 'Admin Details Updata Successfully !');
            return redirect()->back();
        }
        return redirect()->back()
            ->with('admin', $admin)
            ->with('adminDetaiils', $adminDetaiils);
    }

    public function updateAdminPasword(Request $request)
    {
        $data = $request->all();
        // echo "<pre>"; print_r($data);die;
        // echo "<pre>"; print_r(Auth::guard('admin')->user->passsword());die;
        if (Hash::check($data['current_pwd'], Auth::guard('admin')->user()->password)) {
            echo "true";
        } else {
            echo "false";
        }
    }
}
