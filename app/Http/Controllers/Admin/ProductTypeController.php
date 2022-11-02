<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Models\ProductType;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use Auth;
class ProductTypeController extends Controller
{
    
    




    public function addEditProductType(Request $request ,$id = null)
    {

        if($id==""){
            $title = "Add ProductType";
            $productType = new ProductType;
            $productTypeData = array();
            $message ="ProductType add successfully ";
            Session::put('page','all_types');
        }else{
            $title ="edit ProductType";
            $productTypeData = ProductType::where('id',$id)->first();

            $productTypeData = json_decode(json_encode( $productTypeData),true);
            $productType=  ProductType::find($id);
            $message ="ProductType update successfully ";
            Session::put('page','all_types');
        }
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>";print_r($data);die;
            $rules = [
                'name' => 'required',
                'image' => 'image'
            ];
            $customMessages= [
                'name.required' => 'ProductType Name is requires',
                'image.image' => 'Valid image is required',
            ];
            $this->validate($request,$rules,$customMessages);

   			$image = $request->image;
  			$imageName = Str::slug($request->name, '-').'-' . uniqid() . '.' . $image->getClientOriginalExtension();

            if (!Storage::disk('public')->exists('admin/images/admin_photos/productType/')) {
                Storage::disk('public')->makeDirectory('admin/images/admin_photos/productType/');
            }

            $productName = Image::make($image)->resize(640, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->stream();
            Storage::disk('public')->put('admin/images/admin_photos/productType/' . $imageName, $productName); 

            
            $productType->image = $imageName;
            $productType->name = $data['name'];
            $productType->description = $data['description'];
            $productType->link = $data['link'];
            $productType->status = 1;
            // dd($category);
            $productType->save();
            Session::flash('success_message',$message);
            return redirect()->route('addEditProductType');

        }
        $productType = ProductType::get()->toArray();
        return view('admin.product.add-edit-product-type')
        ->with('title',$title)
        ->with('productType',$productType)
        ->with('productTypeData',$productTypeData);
    }






    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        // dd($category->category_image);


        Storage::disk('public')->delete('admin/images/admin_photos/product/' . $product->image);
        // dd(  $product);
        $product->delete();
        Session::flash('success_message','Product Delete successfully ! ');
        return redirect()->back();
    }
}
