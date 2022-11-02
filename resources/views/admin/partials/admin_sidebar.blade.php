<nav class="sidebar sidebar-offcanvas bg-dark" id="sidebar">
    <ul class="nav">


        <li class="nav-item">
            <a class="nav-link" href="{{ route('adminDashboard') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Admin Dashboard</span>
            </a>
        </li>

        <li class="nav-item" style="background: none;">

            <a class="nav-link"
                @if (Session::get('page') == 'update_admin_details') style="background:#4B49AC !important; color:#fff !important;" @endif
                data-toggle="collapse" href="#form-vendor" aria-expanded="false" aria-controls="form-vendor">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title">Admin Details</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-vendor">
                <ul class="nav flex-column sub-menu" style="background: none;">
                    <li class="nav-item"><a class="nav-link"
                            @if (Session::get('page') == 'update_admin_details') style="background:#4B49AC !important; color:#fff !important;"
            @else tyle="background:none;" @endif
                            href="{{ route('adminDetails') }}">Details</a>
                    </li>
                </ul>
            </div>
        </li>


        <li class="nav-item" style="background: none;">
            <a @if (Session::get('page') == 'all_admins') style="background:#4B49AC !important; color:#fff !important;" @endif
                class="nav-link"data-toggle="collapse" href="#form-payment" aria-expanded="false"
                aria-controls="form-payment">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title">Kennels</span>
                <i class="menu-arrow"></i>
            </a>

            <div class="collapse" id="form-payment">
                <ul class="nav flex-column sub-menu" style="background: none;">
                    <li class="nav-item"><a class="nav-link"
                            @if (Session::get('page') == 'all_admins') style="background:#4B49AC !important; color:#fff !important;"
              @else style="background:none;" @endif
                            href="{{ route('allAdmin') }}">All Kennels </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item" style="background: none;">
            <a @if (Session::get('page') == 'all_users_applications') style="background:#4B49AC !important; color:#fff !important;" @endif
                class="nav-link"data-toggle="collapse" href="#form-users" aria-expanded="false"
                aria-controls="form-users">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title">User</span>
                <i class="menu-arrow"></i>
            </a>

            <div class="collapse" id="form-users">
                <ul class="nav flex-column sub-menu" style="background: none;">
                    <li class="nav-item"><a class="nav-link"
                            @if (Session::get('page') == 'all_users_applications') style="background:#4B49AC !important; color:#fff !important;"
              @else style="background:none;" @endif
                            href="">All User </a></li>
                </ul>
            </div>
        </li>


        <li class="nav-item" style="background: none;">

            <a @if (
                Session::get('page') == 'all_categories' ||
                Session::get('page') == 'all_products' ||
                Session::get('page') == 'all_types' ||
                Session::get('page') == 'admin_commission' ||
                Session::get('page') == 'vendor_application' ||
                Session::get('page') == 'all-vendor-payment' ||
                Session::get('page') == 'all_orders'
                ) style="background:#4B49AC !important; color:#fff !important;" @endif
                class="nav-link"data-toggle="collapse" href="#form-category" aria-expanded="false"
                aria-controls="form-category">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title">Catelog</span>
                <i class="menu-arrow"></i>
            </a>

            <div class="collapse" id="form-category">
                <ul class="nav flex-column sub-menu" style="background: none;">
                    <li class="nav-item"><a class="nav-link"
                            @if (Session::get('page') == 'all_categories') style="background:#4B49AC !important; color:#fff !important;"
              @else style="background:none;" @endif
                            href="{{ route('addEditCategories') }}">Breed </a></li>

                    <li class="nav-item"><a class="nav-link"
                            @if (Session::get('page') == 'all_types') style="background:#4B49AC !important; color:#fff !important;"
                @else style="background:none;" @endif
                            href="{{ route('addEditProductType') }}">Post Type </a></li>

                    <li class="nav-item"><a class="nav-link"
                            @if (Session::get('page') == 'all_products') style="background:#4B49AC !important; color:#fff !important;"
              @else style="background:#none;" @endif
                            href="{{ route('productIndex') }}"> Puppies </a></li>
                    <li class="nav-item"><a class="nav-link"
                            @if (Session::get('page') == 'all_orders') style="background:#4B49AC !important; color:#fff !important;"
                              @else style="background:none;" @endif
                            href="{{ route('allOrderAdmin') }}">All Orders </a></li>


                    <li class="nav-item"><a class="nav-link"
                            @if (Session::get('page') == 'vendor_application') style="background:#4B49AC !important; color:#fff !important;"
                    @else style="background:none;" @endif
                            href="{{ route('adminApplication') }}">All Application </a></li>


                            <li class="nav-item"><a class="nav-link"
                                @if (Session::get('page') == 'admin_commission') style="background:#4B49AC !important; color:#fff !important;"
                        @else style="background:none;" @endif
                                href="{{ route('getComissin') }}">  Admin Commission </a></li>


                    <li class="nav-item"><a class="nav-link"
                            @if (Session::get('page') == 'all-vendor-payment') style="background:#4B49AC !important; color:#fff !important;"
                    @else style="background:none;" @endif
                            href="{{ route('withdrawRequestAdmin') }}"> Withdraw Requests </a></li>






                </ul>
            </div>
        </li>


    </ul>
</nav>
