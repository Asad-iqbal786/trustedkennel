<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductType;
use App\Models\Admin;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use Auth;

class ProductController extends Controller
{
    public function index()
    {

        Session::put('page', 'all_products');


            $getProduct = Product::with('category', 'vendors')->get()->toArray();
   
        return view('admin.cateloge.product.index')
            ->with('getProduct', $getProduct);
    }

    public function changeStatus(Request $request)
    {

        if ($request->isMethod('post')) {
            $data = $request->all();

            // echo "<pre>"; print_r($data);die;

            Product::where('id', $data['product_id'])->update([
                'status' => $data['status'],
                'reason' => $data['reason']
            ]);
            return redirect()->back();
        }
    }
    public function productStatusUpdate(Request $request)
    {
        if ($request->ajax()) {
            $data = $request->all();
            if ($data['status'] == "Active") {
                $status = 0;
            } else {
                $status = 1;
            }
            Product::where('id', $data['product_id'])->update(['status' => $status]);
            return response()->json(['status' => $status, 'product_id' => $data['product_id']]);
        }
    }
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

            $rules = [
                'sire_name' => 'required',
                'description' => 'required',
                'image' => 'image',
                'sire_registration' => 'required',
                'sire_pedigree_link' => 'required',
                'sire_weight' => 'required',
                'sire_health_tests' => 'required',
                'dam_name_with_titles' => 'required',
                'dam_registration_number' => 'required',
                'dam_pedigree_link' => 'required',
                'dam_weight' => 'required',
                'dam_height' => 'required',
                'date_of_birth' => 'required',
                'dam_health_tests_conducted' => 'required',
            ];
            $customMessages = [
                'sire_name.required' => 'Category Name is requires',
                'description.required' => 'Description is requires',
                'image.image' => 'Valid image is required',
                'sire_registration.required' => 'Sire Registration is requires',
                'sire_pedigree_link.required' => 'Sire Pedigree_link is requires',
                'sire_weight.required' => 'Sire Weight is requires',
                'sire_health_tests.required' => 'Sire Health Tests is requires',
                'descriptidam_name_with_titleson.required' => 'Dam Name With Titles is requires',
                'dam_name_with_titles.required' => 'Description is requires',
                'dam_registration_number.required' => 'Dam Registration Number is requires',
                'dam_pedigree_link.required' => 'Dam Pedigree Link is requires',
                'dam_weight.required' => 'Dam Weight is requires',
                'dam_height.required' => 'Dam Height is requires',
                'date_of_birth.required' => 'Date of Birth is requires',
                'dam_health_tests_conducted.required' => 'Dam Health Tests Conducted is requires',
            ];
            $this->validate($request, $rules, $customMessages);

            if ($request->produt_type_id == "") {

                Session::flash('error_message', "Please Select Product Type");
                return redirect()->back();
            }
            if ($request->category_id == "0") {

                Session::flash('error_message', "Please Select Product Category");
                return redirect()->back();
            }
            $get = Admin::where('id', Auth::guard('admin')->user()->id)->first()->toArray();

            if ($get['vendor_type'] = "Futured") {
                $status = 1;
            } else {
                $status = 0;
            }
            // image store
            if (!empty($data['image'])) {

                $image = $request->image;
                $imageName = Str::slug($request->sire_name, '-') . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
                if (!Storage::disk('public')->exists('admin/images/admin_photos/products/')) {
                    Storage::disk('public')->makeDirectory('admin/images/admin_photos/products/');
                }
                if (!Storage::disk('public')->exists('admin/images/admin_photos/product_small/')) {
                    Storage::disk('public')->makeDirectory('admin/images/admin_photos/product_small/');
                }
                if (!Storage::disk('public')->exists('admin/images/admin_photos/product_medium/')) {
                    Storage::disk('public')->makeDirectory('admin/images/admin_photos/product_medium/');
                }
                if (!Storage::disk('public')->exists('admin/images/admin_photos/product_large/')) {
                    Storage::disk('public')->makeDirectory('admin/images/admin_photos/product_large/');
                }

                $pro_main = Image::make($image)->resize(66, 66, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->stream();
                $productNameSmall = Image::make($image)->resize(66, 66, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->stream();
                $productNameMedium = Image::make($image)->resize(488, 488, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->stream();
                $productNameLarge = Image::make($image)->resize(1600, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->stream();
                Storage::disk('public')->put('admin/images/admin_photos/products/' . $imageName, $pro_main);
                Storage::disk('public')->put('admin/images/admin_photos/product_small/' . $imageName, $productNameSmall);
                Storage::disk('public')->put('admin/images/admin_photos/product_medium/' . $imageName, $productNameMedium);
                Storage::disk('public')->put('admin/images/admin_photos/product_large/' . $imageName, $productNameLarge);
            } else {

                $imageName = $product['image'];
            }

            $product->image = $imageName;
            $product->category_id = $data['category_id'];
            $product->produt_type_id = $data['produt_type_id'];
            $product->sire_name = $data['sire_name'];
            $product->slug = Str::slug($data['sire_name']);
            $product->admin_id = Auth::guard('admin')->user()->id;
            $product->vendor_id = Auth::guard('admin')->user()->vendor_id;
            $product->sire_registration = $data['sire_registration'];
            $product->sire_pedigree_link = $data['sire_pedigree_link'];
            $product->sire_health_tests = $data['sire_health_tests'];
            $product->dam_name_with_titles = $data['dam_name_with_titles'];
            $product->dam_registration_number = $data['dam_registration_number'];
            $product->date_of_birth = $data['date_of_birth'];
            $product->dam_pedigree_link = $data['dam_pedigree_link'];
            $product->gender = $data['gender'];
            $product->sire_weight = $data['sire_weight'];
            $product->sire_weight_measure = $data['sire_weight_measure'];
            $product->sire_height = $data['sire_height'];
            $product->sire_height_measure = $data['sire_height_measure'];
            $product->dam_weight = $data['dam_weight'];
            $product->dam_weight_measure = $data['dam_weight_measure'];
            $product->dam_height = $data['dam_height'];
            $product->dam_height_measure = $data['dam_height_measure'];
            $product->puppy_price = $data['puppy_price'];

            if ($data['produt_type_id'] == "Planned Litter") {
                $product->reservation = $data['reservation'];
            } else {
                $product->reservation = 0;
            }
            
            $product->dam_health_tests_conducted = $data['dam_health_tests_conducted'];
            $product->description = $data['description'];
            $product->status = $status;
            $product->trending = 0;
            // dd($product);
            $product->save();
            Session::flash('success_message', $message);
            return redirect()->back();
        }
        $getCategory = Category::get()->toArray();
        $getProductType = ProductType::get()->toArray();

        return view('admin.cateloge.product.add-edit-prodcut')
            ->with('title', $title)
            ->with('getCategory', $getCategory)
            ->with('getProductType', $getProductType)
            ->with('proData', $proData);
    }


    public function destroy($id)
    {
        $product = Product::findOrFail($id);
   

        Storage::disk('public')->put('admin/images/admin_photos/products/' , $product->image);
        Storage::disk('public')->put('admin/images/admin_photos/product_small/' , $product->image);
        Storage::disk('public')->put('admin/images/admin_photos/product_medium/' , $product->image);
        Storage::disk('public')->put('admin/images/admin_photos/product_large/' , $product->image);

        $product->delete();
        // dd($category->category_image);

        Session::flash('success_message', 'Product Delete successfully ! ');
        return redirect()->back();
    }
}
