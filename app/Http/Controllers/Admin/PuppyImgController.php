<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use Hash;;
use Session;
use App\Models\PuppyImage;
use App\Models\Product;
class PuppyImgController extends Controller
{
    public function addimage ($id )
    {

        // dd($id);

        $proId=  Product::where('id',$id)->first()->toArray();

        $getImgs = PuppyImage::where('puppy_id',$proId['id'])->get()->toArray();

        // dd( $getImgs);

        return view('admin.cateloge.product.add-edit-puppy_imges'
        )->with('proId',$proId)
        ->with('getImgs',$getImgs);
    }




    public function addEditPuppyImage(Request $request)
    {
        // return $request->all();
        if($request->isMethod('post')){
            if($request->hasFile('puppy_image')){
                $images = $request->file('puppy_image');
                foreach ($images as $key => $image) {
                        $puppyImage = new PuppyImage;
                        $image_tmp = Image::make($image);
                        $extension = $image->getClientOriginalExtension();
                        $imageName = rand(111,99999).'.'.$extension ;       
                              
                        $smallimage = Image::make($image_tmp)->resize(200, null, function ($constraint) {
                            $constraint->aspectRatio();
                            $constraint->upsize();
                        })->stream();
                        Storage::disk('public')->put('admin/images/vendors/puppy_image/' . $imageName, $smallimage); 

                        
                        $puppyImage->puppy_image = $imageName;
                        $puppyImage->vendor_id = Auth::guard('admin')->user()->vendor_id;
                        $puppyImage->puppy_id = $request['puppy_id'];
                        $puppyImage->status = 1;
                        // dd(  $puppyImage);
                        $puppyImage->save();
                }
           return redirect()->back()->with('success_message','Product images upload successfully ! ');

            }
        }
    }






}
