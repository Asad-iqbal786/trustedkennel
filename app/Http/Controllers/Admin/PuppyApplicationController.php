<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductType;
use App\Models\PuppyApplication;
use App\Models\Admin;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use Auth;
class PuppyApplicationController extends Controller
{

    public function index(){

	    Session::put('page','all_users_applications');

        $application = PuppyApplication::get()->toArray();

        // if (Auth::guard('admin')->check() && Auth::guard('admin')->user()->type==('Vendor')) {
            
	    //     $getProduct = Product::where('admin_id',Auth::guard('admin')->user()->id)->with('category','admins')->get()->toArray();
            
        // } else {
	    //     $getProduct = Product::with('category','admins')->get()->toArray();
            
        // }

	    return view('admin.user.index')
	    ->with('application',$application);

	}
    public function addEditApplication(Request $request ,$id = null)
    {
       
        
        if($id==""){
            $title = "Add PuppyApplication";
            $application = new PuppyApplication;
            $appData = array();
            $message ="Product add successfully ";
            Session::put('page','all_categories');

            
        }else{
            $title ="edit PuppyApplication";
            $appData = PuppyApplication::where('id',$id)->first();

            $appData = json_decode(json_encode( $appData),true);
            $application=  PuppyApplication::find($id);
            $message ="PuppyApplication update successfully ";
            Session::put('page','all_categories');
        }
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>" ; print_r($data); die;

            // $rules = [
            //     'sire_name' => 'required',
            //     'description' => 'required',
            //     'sire_registration' => 'required',
            //     'sire_pedigree_link' => 'required',
            //     'sire_weight' => 'required',
            //     'sire_health_tests' => 'required',
            //     'dam_name_with_titles' => 'required',
            //     'dam_registration_number' => 'required',
            //     'dam_pedigree_link' => 'required',
            //     'dam_weight' => 'required',
            //     'dam_height' => 'required',
            //     'dam_health_tests_conducted' => 'required',
            // ];
            // $customMessages= [
            //     'sire_name.required' => 'Category Name is requires',
            //     'description.required' => 'Description is requires',
            //     'sire_registration.required' => 'Sire Registration is requires',
            //     'sire_pedigree_link.required' => 'Sire Pedigree_link is requires',
            //     'sire_weight.required' => 'Sire Weight is requires',
            //     'sire_health_tests.required' => 'Sire Health Tests is requires',
            //     'descriptidam_name_with_titleson.required' => 'Dam Name With Titles is requires',
            //     'dam_name_with_titles.required' => 'Description is requires',
            //     'dam_registration_number.required' => 'Dam Registration Number is requires',
            //     'dam_pedigree_link.required' => 'Dam Pedigree Link is requires',
            //     'dam_weight.required' => 'Dam Weight is requires',
            //     'dam_height.required' => 'Dam Height is requires',
            //     'dam_health_tests_conducted.required' => 'Dam Health Tests Conducted is requires',
            // ];
            // $this->validate($request,$rules,$customMessages);

            
            $application->first_name = $data['first_name'];
            $application->last_name = $data['last_name'];
            $application->street = $data['street'];
            $application->phone = $data['phone'];
            $application->user_id = Auth::user()->id;
            $application->state = $data['state'];
            $application->zip_code = $data['zip_code'];
            $application->family_and_home = $data['family_and_home'];
            $application->residence = $data['residence'];
            $application->fenced = $data['fenced'];
            $application->house_member = $data['house_member'];
            $application->why_you_chose_this_breeds = $data['why_you_chose_this_breeds'];
            $application->puppy_experience = $data['puppy_experience'];
            $application->many_dogs = $data['many_dogs'];
            $application->raised_a_puppy = $data['raised_a_puppy'];
            $application->surrendered_a_dog = $data['surrendered_a_dog'];
            $application->how_you_plan_puppy = $data['how_you_plan_puppy'];
            $application->living_situation_puppy = $data['living_situation_puppy'];
            $application->puppy_night = $data['puppy_night'];
            $application->puppy_training = $data['puppy_training'];
            $application->socialization = $data['socialization'];
            $application->plan_new_dog = $data['plan_new_dog'];
            $application->plan_for_anyother_dog = $data['plan_for_anyother_dog'];
            $application->patience_level = $data['patience_level'];

            $application->tell_us_more = $data['tell_us_more'];
            $application->color = $data['color'];
            $application->gender = $data['gender'];
            $application->ideal_time = $data['ideal_time'];
            $application->signature = $data['signature'];
            $application->agree = $data['agree'];
            // dd($application);
            $application->save();
            Session::flash('success_message',$message);
            
            return redirect()->back();

        }

        return view('user.include.user-application')
        ->with('title',$title)
        ->with('appData',$appData);
    }
}
