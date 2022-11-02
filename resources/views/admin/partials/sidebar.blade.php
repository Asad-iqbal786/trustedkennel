

@if (Auth::guard('admin')->user()->type==('superadmin'))

      @include('admin.partials.admin_sidebar')

@else

      @include('admin.partials.vendor_sidebar')


@endif

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






?>