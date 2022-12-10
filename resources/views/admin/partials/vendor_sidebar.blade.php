<?php
use App\Models\StripeAccount;
$countStrip = StripeAccount::where('vendor_id', Auth::guard('vendor')->user()->id)
    ->first()
    ->toArray();

?>
<nav class="sidebar sidebar-offcanvas bg-bg-white" id="sidebar">
    @if ($countStrip['status'] == 0)
        <div class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('vendorDashboard') }}">
                    <i class="icon-grid menu-icon"></i>
                    <span class="menu-title">Kennel Dashboard</span>
                </a>
            </li>
        </div>
    @else
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('vendorDashboard') }}">
                    <i class="icon-grid menu-icon"></i>
                    <span class="menu-title">Kennel Dashboard</span>
                </a>
            </li>
            <li class="nav-item" style="background: none;">

                <a class="nav-link"
                    @if (Session::get('page') == 'update_admin_details' ||
                        Session::get('page') == 'add-vendor-payment' ||
                        Session::get('page') == 'all-vendor-payment') ||  style="background:#68616E !important; color:rgb(255, 255, 255) !important;" @endif
                    data-toggle="collapse" href="#form-vendor" aria-expanded="false" aria-controls="form-vendor">
                    <i class="icon-columns menu-icon"></i>
                    <span class="menu-title"> Kennel Profile </span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="form-vendor">
                    <ul class="nav flex-column sub-menu" style="background: none;">
                        <li class="nav-item"><a class="nav-link"
                                @if (Session::get('page') == 'update_admin_details') style="background:#68616E !important; color:rgb(255, 255, 255) !important;"
            @else style="background:#68616E !important; color:rgb(255, 255, 255) !important;" @endif
                                href="{{ route('vendorDetails') }}">Profile</a>
                        </li>



                        <li class="nav-item"><a class="nav-link"
                                @if (Session::get('page') == 'all-vendor-payment') style="background:#68616E !important; color:#fff !important;"
                  @else style="background:#none; color:#000 !important;" @endif
                                href="{{ route('withdrawRequest') }}"> Money Withdraw </a></li>
                    </ul>
                </div>
            </li>

            <li class="nav-item" style="background: none;">
                <a @if (Session::get('page') == 'all_products' ||
                    Session::get('page') == 'vendor_application' ||
                    Session::get('page') == 'all_orders') style="background:#68616E !important; color:rgb(0, 0, 0) !important;" @endif
                    class="nav-link"data-toggle="collapse" href="#form-category" aria-expanded="false"
                    aria-controls="form-category">
                    <i class="icon-columns menu-icon"></i>
                    <span class="menu-title">Marketplace</span>
                    <i class="menu-arrow"></i>
                </a>

                <div class="collapse" id="form-category">

                    <ul class="nav flex-column sub-menu" style="background: none;">


                        <li class="nav-item"><a class="nav-link"
                                @if (Session::get('page') == 'all_products') style="background:#68616E !important; color:#fff !important;"
          @else style="background:#none; color:#000 !important;" @endif
                                href="{{ route('vendorProduct') }}"> Posts </a></li>

                        <li class="nav-item"><a class="nav-link"
                                @if (Session::get('page') == 'vendor_application') style="background:#68616E !important; color:rgb(0, 0, 0) !important;"
              @else style="background:#none; color:#000 !important;" @endif
                                href="{{ route('vendorApplication') }}"> Received applications </a></li>
                        <li class="nav-item"><a class="nav-link"
                                @if (Session::get('page') == 'all_orders') style="background:#68616E !important; color:#fff !important;"
                  @else style="background:#none; color:#000 !important;" @endif
                                href="{{ route('allOrderVendor') }}"> Orders </a></li>

                    </ul>



                </div>

            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('vendorChat') }}">
                    <i class="icon-grid menu-icon"></i>
                    <span class="menu-title"> Chat</span>
                </a>
            </li>
            {{-- <li class="nav-item" style="background: none;">
                <a @if (Session::get('page') == 'add-vendor-payment' || Session::get('page') == 'all-vendor-payment') style="background:#68616E !important; color:rgb(0, 0, 0) !important;" @endif
                    class="nav-link"data-toggle="collapse" href="#form-setting" aria-expanded="false"
                    aria-controls="form-setting">
                    <i class="icon-columns menu-icon"></i>
                    <span class="menu-title">Store Setting</span>
                    <i class="menu-arrow"></i>
                </a>

                <div class="collapse" id="form-setting">
                    <ul class="nav flex-column sub-menu" style="background: none;">

                        

                    </ul>
                </div>
            </li> --}}
        </ul>
    @endif


</nav>



<?php

Session::forget('dashboard');
Session::forget('all_admins');
Session::forget('all_categories');
Session::forget('all_products');
Session::forget('update_admin_details');
Session::forget('all_types');
Session::forget('all_users_applications');
Session::forget('vendor_application');
Session::forget('all_orders');
Session::forget('admin_commission');
Session::forget('all-vendor-payment');

Session::forget('add-vendor-payment');
Session::forget('add-vendor-payments');

?>
