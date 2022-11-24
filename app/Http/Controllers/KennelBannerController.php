<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use Hash;;
use Session;
use Auth;

use App\Models\User;
use App\Models\KennelBanner;
class KennelBannerController extends Controller
{
    public function addEditKennelBanner (Request $request ,$id = null)
    {
        if($request->isMethod('post')){
            if($request->hasFile('slider_image')){
                $images = $request->file('slider_image');
                foreach ($images as $key => $image) {
                    $kennelBannerS = new KennelBanner;
                    $image_tmp = Image::make($image);
                    $extension = $image->getClientOriginalExtension();
                    $imageName = rand(111,99999).'.'.$extension ;
                    $smallimage = Image::make($image_tmp)->resize(260, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })->stream();
                    Storage::disk('public')->put('admin/images/vendors/banners/' . $imageName, $smallimage); 
                    $kennelBannerS->slider_image = $imageName;
                    $kennelBannerS->vendor_id = Auth::guard('admin')->user()->vendor_id;
                    $kennelBannerS->status = 1;
                    $kennelBannerS->save();
                    return redirect()->route('addEditKennelBanner');
                   
                }
            }
        }
        $shopRecord = 0;
        $title = 23;
        $shopSettingdata = 23;
        $getBanner = KennelBanner::where('vendor_id',Auth::guard('admin')->user()->vendor_id)->get()->toArray();
        return view('vendors_view.setting.add_edit_kennels_banner',)
        ->with('title',$title)
        ->with('getBanner',$getBanner)
        ->with('shopRecord',$shopRecord)
        ->with('shopSettingdata',$shopSettingdata);
    }
}
