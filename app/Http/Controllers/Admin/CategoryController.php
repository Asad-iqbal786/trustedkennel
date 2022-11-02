<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Session;

use Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class CategoryController extends Controller
{


     public function addEditCategories(Request $request ,$id = null)
    {

        if($id==""){
            $title = "Add Breed";
            $category = new Category;
            $categoryData = array();
            $message ="Category add successfully ";
            Session::put('page','all_categories');
        }else{
            $title ="Edit Breed";
            $categoryData = Category::where('id',$id)->first();

            $categoryData = json_decode(json_encode( $categoryData),true);
            $category=  Category::find($id);
            $message ="Category update successfully ";
            Session::put('page','all_categories');
        }
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>";print_r($data);die;
            $rules = [
                'name' => 'required',
                'image' => 'image'
            ];
            $customMessages= [
                'name.required' => 'Category Name is requires',
                'image.image' => 'Valid image is required',
            ];
            $this->validate($request,$rules,$customMessages);

            // uploadd image
            // if($request->hasFile('image')){
            //     $image_tmp = $request->file('image');
            //     if($image_tmp->isValid()){
            //         //get image extension
                    
            //         $extention = $image_tmp->getClientOriginalExtension();

            //         // Generate new Name
            //         // $imageName = rand(111,99999).'.'.$extention;
            //         // $imagePath = 'images/admin_images/admin_photos/'.$imageName;
            //         // $imagePath = 'images/admin_images/category/'.$imageName;

            //         $imageName = rand(111,99999).'.'.$extention;
            //     	// dd(  $imageName);

            //         $imagePath = 'admin/images/admin_photos/category/'.$imageName;

            //         // dd(  $imagePath);

            //         //upload the image
            //         Image::make($image_tmp)->resize('600,370')->save($imagePath);
            //         $category->image = $imageName;

            //     }else{
            //         $category->image = "";
            //     }
            // }



            
   			$image = $request->image;
  			$imageName = Str::slug($request->name, '-').'-' . uniqid() . '.' . $image->getClientOriginalExtension();

            if (!Storage::disk('public')->exists('admin/images/admin_photos/category/')) {
                Storage::disk('public')->makeDirectory('admin/images/admin_photos/category/');
            }

            $productName = Image::make($image)->resize(640, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->stream();
            Storage::disk('public')->put('admin/images/admin_photos/category/' . $imageName, $productName); 
            $category->image = $imageName;

            $category->name = $data['name'];
            $category->status = 1;
            // dd($category);
            $category->save();
            // Session::flash('success_message',$message);
            return redirect()->route('addEditCategories');

        }
        $category = Category::get()->toArray();
        return view('admin.cateloge.add-edit-categories')
        ->with('title',$title)
        ->with('category',$category)
        ->with('categoryData',$categoryData);
    }
	

	public function destroy($id)
    {
        $category = Category::findOrFail($id);
        // dd($category->category_image);


        Storage::disk('public')->delete('admin/images/admin_photos/category/' . $category->category_image);
        // dd(  $category);
        $category->delete();
        Session::flash('success_message','Category Delete successfully ! ');
        return redirect()->back();
    }



}
