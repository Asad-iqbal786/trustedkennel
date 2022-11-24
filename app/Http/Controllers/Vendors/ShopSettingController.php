<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ShopSetting;
use App\Models\Vendor;
use Session;

use Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
class ShopSettingController extends Controller
{


    public function kennelsEditUpdate(Request $request ,$id = null)
    {
        Session::forget('success_message');
        Session::forget('error_message');
        if($id==""){
            $title = "Add Shop Setting";
            $shopSetting = new ShopSetting;
            $shopSettingdata = array();
            $message ="ShopSetting add successfully ";
            Session::put('page','shop_setting');
        }else{
            $title ="Edit Shop Setting";
            $shopSettingdata = ShopSetting::where('vendor_id',Auth::guard('admin')->user()->vendor_id)->first()->toArray();
            $shopSettingdata = json_decode(json_encode( $shopSettingdata),true);
            $shopSetting=  ShopSetting::find($id);
            $message ="ShopSetting update successfully ";
            Session::put('page','shop_setting');
        }
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>";print_r($data);die;
            $rules = [
                'shop_email' => 'required',
                'shop_address' => 'required',
                'shop_phone' => 'required',
                'meta_description' => 'required',
                'facebook' => 'required',
                'instagram' => 'required',
                'twitter' => 'required',
                'shop_banner' => 'image',
                'shop_logo' => 'image'
            ];
            $customMessages= [
                'shop_email.required' => 'ShopSetting Name is requires',
                'shop_address.required' => 'ShopSetting Name is requires',
                'shop_phone.required' => 'ShopSetting Name is requires',
                'meta_description.required' => 'ShopSetting Name is requires',
                'facebook.required' => 'ShopSetting Name is requires',
                'instagram.required' => 'ShopSetting Name is requires',
                'twitter.required' => 'ShopSetting Name is requires',
                'shop_banner.image' => 'ShopSetting Name is requires',
                'shop_logo.image' => 'Valid shop_logo is required',
            ];
            $this->validate($request,$rules,$customMessages);

            
   			$image = $request->shop_logo;
  			$imageName = Str::slug($request->name, '-').'-' . uniqid() . '.' . $image->getClientOriginalExtension();

            if (!Storage::disk('public')->exists('admin/images/admin_photos/shop-setting/')) {
                Storage::disk('public')->makeDirectory('admin/images/admin_photos/shop-setting/');
            }

            $productName = Image::make($image)->resize(640, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->stream();
            Storage::disk('public')->put('admin/images/admin_photos/shop-setting/' . $imageName, $productName); 
            $shopSetting->shop_logo = $imageName;
            $shopSetting->shop_email = $data['shop_email'];
            $shopSetting->vendor_id = Auth::guard('admin')->user()->vendor_id;
            $shopSetting->shop_address = $data['shop_address'];
            $shopSetting->shop_phone = $data['shop_phone'];
            $shopSetting->meta_description = $data['meta_description'];
            $shopSetting->facebook = $data['facebook'];
            $shopSetting->instagram = $data['instagram'];
            $shopSetting->twitter = $data['twitter'];
            $shopSetting->save();
            // dd( $shopSetting );
            // Session::flash('success_message',$message);
            return redirect()->route('kennelsEditUpdate');

        }


  

        
        if (!empty($shopSettingdata['id'])) {
            $shopSettingdata = 0;
        } else {
            $shopSettingdata = ShopSetting::where('vendor_id',Auth::guard('admin')->user()->vendor_id)->first()->toArray();
            // $shopSettingdata = $id;
        }
        

        $getShopName = Vendor::where('id',Auth::guard('admin')->user()->vendor_id)->first()->toArray();

        // dd(    $getShopName   );

        return view('vendor.setting.add-edit-kennels')
        ->with('title',$title)
        ->with('shopSetting',$shopSetting)
        ->with('getShopName',$getShopName)
        ->with('shopSettingdata',$shopSettingdata);
    }
}
