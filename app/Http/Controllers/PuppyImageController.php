<?php

namespace App\Http\Controllers;


use Auth;
use DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use Hash;;
use Session;
use App\Models\PuppyImage;
use Illuminate\Http\Request;

class PuppyImageController extends Controller
{
    public function addEditPuppyImage (Request $request ,$id = null)
    {
        if($request->isMethod('post')){
            if($request->hasFile('puppy_image')){
                $images = $request->file('puppy_image');
                foreach ($images as $key => $image) {
                    $puppyImage = new PuppyImage;
                    $image_tmp = Image::make($image);
                    $extension = $image->getClientOriginalExtension();
                    $imageName = rand(111,99999).'.'.$extension ;
                    $smallimage = Image::make($image_tmp)->resize(160, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })->stream();
                    Storage::disk('public')->put('admin/images/vendors/banners/' . $imageName, $smallimage); 
                    $puppyImage->puppy_image = $imageName;
                    $puppyImage->vendor_id = Auth::guard('admin')->user()->vendor_id;
                    $puppyImage->status = 1;
                    $puppyImage->save();
                    return redirect()->route('addEditPuppyImage');
                   
                }
            }
        }
        $shopRecord = 0;
        $title = 23;
        $shopSettingdata = 23;
        $getImge = PuppyImage::where('vendor_id',Auth::guard('admin')->user()->vendor_id)->get()->toArray();
        return view('admin.cateloge.product.add-edit-puppy_imges',)
        ->with('title',$title)
        ->with('getImge$getImge',$getImge)
        ->with('shopRecord',$shopRecord)
        ->with('shopSettingdata',$shopSettingdata);
    }
}
