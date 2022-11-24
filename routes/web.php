<?php

use App\Http\Controllers\Admin\StripePaymentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/ts-register', [App\Http\Controllers\Admin\AdminController::class, 'register'])->name('vendorRegister');


    Route::match(['get','post'],'/ts-login','App\Http\Controllers\Admin\AdminController@login')->name('loginPage');
    Route::post('/register-store', [App\Http\Controllers\Admin\AdminController::class, 'newRegister'])->name('newRegister');

Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->group(function(){

    Route::post('/dashbo', [App\Http\Controllers\Admin\AdminController::class, 'dashboard'])->name('loginNow');

    Route::group(['middleware'=>['admin']],function(){
        Route::get('/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('adminDashboard');
        Route::get('/logout', [App\Http\Controllers\Admin\AdminController::class, 'logout'])->name('logoutadmin');

        Route::get('/home-page','AdminController@index');
        Route::get('/admins','AdminController@allAdmin')->name('allAdmin');
        Route::get('/vendor-home','AdminController@vendorHome')->name('vendorHome');
        Route::get('/update-admin-status/{id}', [App\Http\Controllers\Admin\AdminController::class, 'statusUpdate'])->name('statusUpdate');        
        Route::post('/update-admin-status', [App\Http\Controllers\Admin\AdminController::class, 'adminStatusUpdate'])->name('adminStatusUpdate');        
        Route::post('/update-vendor-type', [App\Http\Controllers\Admin\AdminController::class, 'vendorTypeUpdate'])->name('vendorTypeUpdate');
        Route::post('/update/password', [App\Http\Controllers\Admin\AdminController::class, 'updatePassword'])->name('updatePassword');
        Route::get('/admin-details', [App\Http\Controllers\Admin\AdminController::class, 'adminDetails'])->name('adminDetails');
        Route::post('/update/admin/details', [App\Http\Controllers\Admin\AdminController::class, 'updateAdminDetails'])->name('updateAdminDetails');
        Route::post('/check-current-pwd', [App\Http\Controllers\Admin\AdminController::class, 'updateAdminPasword'])->name('updateAdminPasword');
        // Product Type
        Route::match(['get','post'],'/add-edit-product-type/{id?}', [App\Http\Controllers\Admin\ProductTypeController::class, 'addEditProductType'])->name('addEditProductType');
        Route::get('product-type-destroy/{id}', [App\Http\Controllers\Admin\ProductTypeController::class, 'destroy'])->name('productTypeDestroy');
        Route::get('/categories', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('categoriesIndex');
        Route::match(['get','post'],'/add-edit-categoeirs/{id?}', [App\Http\Controllers\Admin\CategoryController::class, 'addEditCategories'])->name('addEditCategories');
        Route::get('category-destroy/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('categoryDestroy');
        Route::get('/products', [App\Http\Controllers\Admin\ProductController::class, 'index'])->name('productIndex');
        Route::match(['get','post'],'/add-edit-products/{id?}', [App\Http\Controllers\Admin\ProductController::class, 'addEditProduct'])->name('addEditProduct');
        Route::get('product-destroy/{id}', [App\Http\Controllers\Admin\ProductController::class, 'destroy'])->name('productDestroy');
        Route::post('/update-product-status', [App\Http\Controllers\Admin\ProductController::class, 'productStatusUpdate']);

        Route::post('/update-product-statuss', [App\Http\Controllers\Admin\ProductController::class, 'changeStatus'])->name('changeStatus');

        Route::get('/all-orders', [App\Http\Controllers\Admin\OrderController::class, 'allOrder'])->name('allOrderAdmin');
        Route::get('/vendor-application', [App\Http\Controllers\Vendor\VendorController::class, 'vendorApplication'])->name('adminApplication');
        Route::get('commission',  [App\Http\Controllers\CommissionController::class, 'index'])->name('getComissin');
        Route::post('/add-edit-commission', [App\Http\Controllers\CommissionController::class, 'addEditCommission'])->name('addEditCommission');
        Route::get('/money-withdraw-requests', [App\Http\Controllers\Vendor\VendorPaymentController::class, 'withdrawRequest'])->name('withdrawRequestAdmin');
        
    

    });


});

Route::get('/paypel', [App\Http\Controllers\Admin\PaypelController::class, 'paypel'])->name('paypel');

Route::prefix('/vendor')->namespace('App\Http\Controllers\Vendor')->group(function(){

    Route::group(['middleware'=>['vendor']],function(){

        Route::get('/dashboard', [App\Http\Controllers\Vendor\DashboardController::class, 'index'])->name('vendorDashboard');
        Route::get('/logout', [App\Http\Controllers\Vendor\VendorController::class, 'logout'])->name('logoutvendor');
        Route::get('vendor-home', [App\Http\Controllers\Admin\AdminController::class, 'vendorHome'])->name('vendorHome1');
        // update vendor details
        Route::post('/update/password', [App\Http\Controllers\Admin\AdminController::class, 'updatePassword'])->name('updatePassword1');
        Route::get('/vendor-details', [App\Http\Controllers\Admin\AdminController::class, 'adminDetails'])->name('vendorDetails');
        Route::post('/update/admin/details', [App\Http\Controllers\Admin\AdminController::class, 'updateAdminDetails'])->name('updateAdminDetails1');
        Route::post('/check-current-pwd', [App\Http\Controllers\Admin\AdminController::class, 'updateAdminPasword'])->name('updateAdminPasword1');     
        // products 
        Route::get('/products', [App\Http\Controllers\Admin\ProductController::class, 'index'])->name('VendorproductIndex');
        Route::match(['get','post'],'/add-edit-products/{id?}', [App\Http\Controllers\Admin\ProductController::class, 'addEditProduct'])->name('VendoraddEditProduct');
        Route::get('product-destroy/{id}', [App\Http\Controllers\Admin\ProductController::class, 'destroy'])->name('VendorproductDestroy');
        Route::post('/update-product-status', [App\Http\Controllers\Admin\ProductController::class, 'VendorproductStatusUpdate']);
        //shoSetting
        Route::post('/update-product-status', [App\Http\Controllers\Admin\ProductController::class, 'VendorproductStatusUpdate']);
        Route::match(['get','post'],'/kennel-add-edit/{id?}', [App\Http\Controllers\Vendor\ShopSettingController::class, 'kennelsEditUpdate'])->name('kennelsEditUpdate');
        Route::match(['get','post'],'/add-edit-kennel-banners/{id?}', [App\Http\Controllers\KennelBannerController::class, 'addEditKennelBanner'])->name('addEditKennelBanner');
        // Route::match(['get','post'],'/add-edit-puppy-images/{id?}', [App\Http\Controllers\Admin\PuppyImgController::class, 'addEditPuppyImage'])->name('addEditPuppyImage');
        Route::get('/add-edit-puppy-images/{id?}', [App\Http\Controllers\Admin\PuppyImgController::class, 'addimage'])->name('addimage');
        Route::post('/add-edit-puppy-images', [App\Http\Controllers\Admin\PuppyImgController::class, 'addEditPuppyImage'])->name('addEditPuppyImage');
        Route::get('/vendor-application', [App\Http\Controllers\Vendor\VendorController::class, 'vendorApplication'])->name('vendorApplication');
        Route::get('/application-detail/{id}', [App\Http\Controllers\Vendor\VendorController::class, 'applicationDetails'])->name('applicationDetails');
        /// order routes
        Route::get('/all-orders', [App\Http\Controllers\Admin\OrderController::class, 'allOrder'])->name('allOrderVendor');
        Route::post('/OrderStore', [App\Http\Controllers\Admin\OrderController::class, 'OrderStore'])->name('OrderStore');
        Route::post('/order-created', [App\Http\Controllers\Admin\OrderController::class, 'OrderCreated'])->name('OrderCreated');
        Route::post('/order-log', [App\Http\Controllers\Admin\OrderController::class, 'OrderLog'])->name('OrderLog');
        Route::post('/vendor-approved',  [App\Http\Controllers\CommissionController::class, 'confirmAccountApproved'])->name('confirmAccountApproved');
        Route::match(['get','post'],'add-edit-vendor-payments/{id?}', [App\Http\Controllers\CommissionController::class, 'addEditVendorPayments'])->name('addEditVendorPayments');
        Route::get('/money-withdraw-requests', [App\Http\Controllers\CommissionController::class, 'withdrawRequest'])->name('withdrawRequest');
        Route::post('/money-withdraw', [App\Http\Controllers\CommissionController::class, 'withdrawRequestStore'])->name('withdrawRequestStore');

        Route::get('/chat', [App\Http\Controllers\Vendor\ChatController::class, 'index'])->name('vendorChat');
        Route::get('/chat-details/{name}', [App\Http\Controllers\Vendor\VendorController::class, 'chatDetails'])->name('chatDetails');
        Route::post('/vendor-reply', [App\Http\Controllers\Vendor\VendorController::class, 'vendorReply'])->name('vendorReply');


    });
});

//frontend Routs
Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'index'])->name('frontendHome');
Route::get('/find-a-kennel', [App\Http\Controllers\Frontend\FrontendController::class, 'findKennel'])->name('findKennel');
Route::get('/find-a-puppy', [App\Http\Controllers\Frontend\FrontendController::class, 'findPuppy'])->name('findPuppy');
Route::get('/puppy-details/{slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'PuppyDetails'])->name('PuppyDetails');

Route::get('/store-name/{slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'storeDetails'])->name('storeDetails');
Route::get('/category-details/{id}', [App\Http\Controllers\Frontend\FrontendController::class, 'catDetails'])->name('catDetails');
Route::get('/service', [App\Http\Controllers\Frontend\FrontendController::class, 'Ourservices'])->name('Ourservices');
Route::get('/our_stories', [App\Http\Controllers\Frontend\FrontendController::class, 'OurStories'])->name('OurStories');
Route::get('/contact-us', [App\Http\Controllers\Frontend\FrontendController::class, 'contactUs'])->name('contactUs');
Route::get('/breed-questionnaire', [App\Http\Controllers\Frontend\FrontendController::class, 'userProfile'])->name('userProfile');
Route::get('/available_puppy', [App\Http\Controllers\Frontend\FrontendController::class, 'availablePuppy'])->name('availablePuppy');
Route::get('/planned-litter', [App\Http\Controllers\Frontend\FrontendController::class, 'plannedLitter'])->name('plannedLitter');
Route::post('/apply-for-puppy', [App\Http\Controllers\CartController::class, 'applyForPuppies'])->name('applyForPuppies');



Route::get('stripe', [App\Http\Controllers\Admin\StripePaymentController::class, 'stripe']);
Route::post('/stripe-store', [App\Http\Controllers\Admin\StripePaymentController::class, 'stripePost'])->name('stripe.post');

//stripe sample routess
Route::get('/stripe-sample',[App\Http\Controllers\Admin\StripePaymentController::class,'stripeSample']); 




Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/users', [App\Http\Controllers\Frontend\FrontendController::class, 'indexUser'])->name('userIndex');
    Route::match(['get','post'],'/puppy-application/{id?}', [App\Http\Controllers\User\UserController::class, 'addEditApplication'])->name('addEditApplication')->middleware('auth');
    Route::get('/requests', [App\Http\Controllers\User\UserController::class, 'cart'])->name('cart');
    Route::get('/orders-puppies', [App\Http\Controllers\User\UserController::class, 'userOrder'])->name('userOrder');
    Route::get('/users-notification', [App\Http\Controllers\Frontend\FrontendController::class, 'notification'])->name('notification');
    Route::get('/users-address', [App\Http\Controllers\Frontend\FrontendController::class, 'address'])->name('address');
    Route::get('/users-invoice/{id}', [App\Http\Controllers\Frontend\FrontendController::class, 'cartInvoice'])->name('cartInvoice');
    Route::get('/users-invoice-pdf/{id}', [App\Http\Controllers\Frontend\FrontendController::class, 'cartInvoicePDF'])->name('cartInvoicePDF');
    Route::get('/users-agrement', [App\Http\Controllers\Frontend\FrontendController::class, 'agrement'])->name('agrement');
    Route::get('/users-logout', [App\Http\Controllers\Frontend\FrontendController::class, 'logout'])->name('userLogout');
    Route::get('/user-shipping-address/{id}', [App\Http\Controllers\Frontend\FrontendController::class, 'shippingAddress'])->name('shippingAddress');

    // user routes
    Route::get('/users-profile', [App\Http\Controllers\User\UserController::class, 'userProfile'])->name('userProfile');
    Route::get('/terms-and-conditions', [App\Http\Controllers\User\UserController::class, 'termsAndConditions'])->name('termsAndConditions');
    Route::get('/chat', [App\Http\Controllers\User\UserController::class, 'customerChat'])->name('customerChat');
    Route::get('/customer-chat/{id}', [App\Http\Controllers\User\UserController::class, 'chat'])->name('chat');
    Route::post('/customer-chat-store', [App\Http\Controllers\Vendor\ChatController::class, 'chatStore'])->name('chatStore');
    
    Route::post('/vendor-reply', [App\Http\Controllers\Vendor\VendorController::class, 'vendorReply'])->name('customerReply');
});


   
// Route::group(['middleware'=>['adminAuth']],function(){

   
// });