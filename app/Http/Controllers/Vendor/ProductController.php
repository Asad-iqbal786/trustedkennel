<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    public function addEditProduct(Request $request, $id = null)
    {
        if ($id == "") {
            $title = "Add new Post";
            $product = new Product;
            $proData = array();
            $message = "Product add successfully ";
            Session::put('page', 'all_products');
        } else {
            $title = "Edit new Post";
            $proData = Product::where('id', $id)->first();

            $proData = json_decode(json_encode($proData), true);
            $product =  Product::find($id);
            $message = "Product update successfully ";
            Session::put('page', 'all_products');
        }
        if ($request->isMethod('post')) {
            $data = $request->all();
            // echo "<pre>"; print_r($product);die;

            $rules = [
                'product_name' => 'required',
                'description' => 'required',
                'product_images' => 'image',
                'date_of_birth' => 'required',
                'gender' => 'required',
                'price' => 'required',
                'shipping_fee' => 'required',
                'sire_name' => 'required',
                'sire_title' => 'required',
                'sire_registration' => 'required',
                'sire_weight' => 'required',
                'sire_height' => 'required',
                'sire_health_tests_conducted' => 'required',
                'sire_image' => 'image',
                'dam_name' => 'required',
                'dam_title' => 'required',
                'dam_link' => 'required',
                'dam_weight' => 'required',
                'dam_height' => 'required',
                'dam_health_tests_conducted' => 'required',
                'dam_image' => 'image',
            ];
            $customMessages = [
                'product_name.required' => 'product_name Name is requires',
                'description.required' => 'Description is requires',
                'product_images.image' => 'Valid product_images is required',
                'date_of_birth.required' => 'date_of_birth is requires',
                'gender.required' => 'gender is requires',
                'price.required' => 'price is requires',
                'shipping_fee.required' => 'shipping_fee is requires',
                'sire_name.required' => 'sire_name is requires',
                'sire_title.required' => 'sire_title is requires',
                'sire_registration.required' => 'sire_registration is requires',
                'sire_weight.required' => 'sire_weight is requires',
                'sire_height.required' => 'sire_height is requires',
                'sire_health_tests_conducted.required' => 'sire_health_tests_conducted is requires',
                'sire_image.image' => 'Valid sire_image is required',
                'dam_name.required' => 'dam_name is requires',
                'dam_title.required' => 'dam_title is requires',
                'dam_link.required' => 'dam_link is requires',
                'dam_weight.required' => 'dam_weight is requires',
                'dam_height.required' => 'dam_height is requires',
                'dam_health_tests_conducted.required' => 'dam_health_tests_conducted is requires',
                'dam_image.image' => 'Valid dam_image is required',
            ];
            $this->validate($request, $rules, $customMessages);
          

            if (!empty($data['sire_image'])) {
                $image_tmp = $request->file('sire_image');
                $extention = $image_tmp->getClientOriginalExtension();
                $adminImage = rand(111, 99999) . '.' . $extention;
                $imagePath = 'admin/images/admin_photos/product/sire_image/' . $adminImage;
                Image::make($image_tmp)->save($imagePath);
            } else {
                $sirName = $product['sire_image'];
            }

            if (!empty($data['dam_image'])) {
                $image_tmp = $request->file('dam_image');
                $extention = $image_tmp->getClientOriginalExtension();
                $damImage = rand(111, 99999) . '.' . $extention;
                $imagePath = 'admin/images/admin_photos/product/dam_image/' . $damImage;
                Image::make($image_tmp)->save($imagePath);
            } else {
                $damImage = $product['dam_image'];
            }
            if (!empty($data['product_images'])) {
                $image_tmp = $request->file('product_images');
                $extention = $image_tmp->getClientOriginalExtension();
                $productImage = rand(111, 99999) . '.' . $extention;


                $large_image_path = 'admin/images/admin_photos/product/product_images/large/'.$productImage;
                $medium_image_path = 'admin/images/admin_photos/product/product_images/medium/'.$productImage;
                $small_image_path = 'admin/images/admin_photos/product/product_images/small/'.$productImage;
                Image::make($image_tmp)->save($large_image_path);
                Image::make($image_tmp)->resize('520,600')->save($medium_image_path);
                Image::make($image_tmp)->resize('260,300')->save($small_image_path);
            } else {
                $productImage = $product['product_images'];
            }



            // product_images
            // if (!empty($data['product_images'])) {

            //     $image = $request->product_images;
            //     $imageName = Str::slug($request->product_name, '-') . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            //     if (!Storage::disk('public')->exists('admin/images/admin_photos/product/product_images/normal_size/')) {
            //         Storage::disk('public')->makeDirectory('admin/images/admin_photos/product/product_images/normal_size/');
            //     }
            //     if (!Storage::disk('public')->exists('admin/images/admin_photos/product/product_images/product_small/')) {
            //         Storage::disk('public')->makeDirectory('admin/images/admin_photos/product/product_images/product_small/');
            //     }
            //     if (!Storage::disk('public')->exists('admin/images/admin_photos/product/product_images/product_medium/')) {
            //         Storage::disk('public')->makeDirectory('admin/images/admin_photos/product/product_images/product_medium/');
            //     }
            //     if (!Storage::disk('public')->exists('admin/images/admin_photos/product/product_images/product_large/')) {
            //         Storage::disk('public')->makeDirectory('admin/images/admin_photos/product/product_images/product_large/');
            //     }

            //     $pro_main = Image::make($image)->resize(66, 66, function ($constraint) {
            //         $constraint->aspectRatio();
            //         $constraint->upsize();
            //     })->stream();
            //     $productNameSmall = Image::make($image)->resize(66, 66, function ($constraint) {
            //         $constraint->aspectRatio();
            //         $constraint->upsize();
            //     })->stream();
            //     $productNameMedium = Image::make($image)->resize(488, 488, function ($constraint) {
            //         $constraint->aspectRatio();
            //         $constraint->upsize();
            //     })->stream();
            //     $productNameLarge = Image::make($image)->resize(1600, null, function ($constraint) {
            //         $constraint->aspectRatio();
            //         $constraint->upsize();
            //     })->stream();
            //     Storage::disk('public')->put('admin/images/admin_photos/product/product_images/normal_size/' . $imageName, $pro_main);
            //     Storage::disk('public')->put('admin/images/admin_photos/product/product_images/product_small/' . $imageName, $productNameSmall);
            //     Storage::disk('public')->put('admin/images/admin_photos/product/product_images/product_medium/' . $imageName, $productNameMedium);
            //     Storage::disk('public')->put('admin/images/admin_photos/product/product_images/product_large/' . $imageName, $productNameLarge);
            // } else {
            //     $imageName = $product['product_images'];
            // }
            // // Sire image
            // if (!empty($data['sire_image'])) {

            //     $image = $request->sire_image;
            //     $sirName = Str::slug($request->product_name, '-') . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            //     if (!Storage::disk('public')->exists('admin/images/admin_photos/product/sire_image/')) {
            //         Storage::disk('public')->makeDirectory('admin/images/admin_photos/product/sire_image/');
            //     }
            //     $productNameMedium = Image::make($image)->resize(488, 488, function ($constraint) {
            //         $constraint->aspectRatio();
            //         $constraint->upsize();
            //     })->stream();

            //     Storage::disk('public')->put('admin/images/admin_photos/product/product_images/product_large/' . $sirName, $productNameMedium);
            // } else {
            //     $sirName = $product['sire_image'];
            // }
            // // Dam image
            // if (!empty($data['dam_image'])) {

            //     $image = $request->dam_image;
            //     $damImage = Str::slug($request->product_name, '-') . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            //     if (!Storage::disk('public')->exists('admin/images/admin_photos/product/dam_image/')) {
            //         Storage::disk('public')->makeDirectory('admin/images/admin_photos/product/dam_image/');
            //     }
            //     $dam = Image::make($image)->resize(488, 488, function ($constraint) {
            //         $constraint->aspectRatio();
            //         $constraint->upsize();
            //     })->stream();

            //     Storage::disk('public')->put('admin/images/admin_photos/product/dam_image/' . $damImage, $dam);
            // } else {
            //     $damImage = $product['dam_image'];
            // }


            // dd($product);
            if ($request->produt_type_id == "") {

                Session::flash('error_message', "Please Select Product Type");
                return redirect()->back();
            }
            if ($request->category_id == "0") {

                Session::flash('error_message', "Please Select Product Category");
                return redirect()->back();
            }

            $product->category_id = $data['category_id'];
            $product->produt_type_id = $data['produt_type_id'];
            $product->vendor_id = Auth::guard('vendor')->user()->id;
            $product->product_name = $data['product_name'];
            $product->date_of_birth = $data['date_of_birth'];
            $product->gender = $data['gender'];
            $product->sire_name = $data['sire_name'];
            $product->price = $data['price'];
            if ($data['produt_type_id'] == 2) {
                $reservation = $data['reservation'];
            } else {
                $reservation = 0;
            }
            $product->reservation = $reservation;
            

            $product->shipping_fee = $data['shipping_fee'];
            $product->description = $data['description'];
            $product->sire_title = $data['sire_title'];
            $product->sire_registration = $data['sire_registration'];
            $product->pedigree_link = $data['pedigree_link'];
            $product->sire_height = $data['sire_height'];
            $product->sire_weight = $data['sire_weight'];
            $product->sire_health_tests_conducted = $data['sire_health_tests_conducted'];
            $product->dam_name = $data['dam_name'];
            $product->dam_title = $data['dam_title'];
            $product->dam_link = $data['dam_link'];
            $product->dam_height = $data['dam_height'];
            $product->dam_health_tests_conducted = $data['dam_health_tests_conducted'];
            $product->status = 0;
            $product->trending = 0;
            $product->product_images = $productImage;
            $product->dam_image = $damImage;
            $product->sire_image = $adminImage;
            // dd($product);
            $product->save();
            Session::flash('success_message', $message);
            return redirect()->back();
        }
        $getCategory = Category::get()->toArray();
        $getProductType = ProductType::get()->toArray();

        return view('vendors_view.cateloge.product.add-edit-prodcut')
            ->with('title', $title)
            ->with('getCategory', $getCategory)
            ->with('getProductType', $getProductType)
            ->with('proData', $proData);
    }
    
    public function detaileshow($id)
    {
        $product = Product::with('product_types','category')->findOrFail($id);
        $getCategory = Category::get()->toArray();
        $getProductType = ProductType::get()->toArray();
        // dd($product);

        return view('vendors_view.cateloge.product.prodcut-show')
        ->with('getCategory', $getCategory)
        ->with('getProductType', $getProductType)
        ->with('product', $product);
    } 




    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        Session::flash('success_message', 'Product Delete successfully ! ');
        return redirect()->back();
    }
}
