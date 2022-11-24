

<div class="aiz-user-sidenav-wrap position-relative z-1 bg-gray-700 shadow-sm">
    <div class="aiz-user-sidenav rounded overflow-auto c-scrollbar-light pb-5 pb-xl-0 bg-dark">
      

        <div class="p-4 text-xl-center mb-4 border-bottom bg-dark text-white position-relative">
            
            <p> Welcome  {{  Auth::user()->name }} !</p>

        </div>

        <div class="sidemnenu mb-3">
            <ul class="aiz-side-nav-list pb-3 px-2 metismenu" data-toggle="aiz-side-menu">
                <li class="aiz-side-nav-item">
                    <a href="{{ route('userProfile') }}" class="aiz-side-nav-link ">
                        <i class="las la-home aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">Profile</span>
                    </a>
                </li>
                @if (!empty(Auth::guard('admin')->check()))
                    <li class="aiz-side-nav-item">
                        <a href="{{ route('userIndex') }}" class="aiz-side-nav-link ">
                            <i class="las la-home aiz-side-nav-icon"></i>
                            <span class="aiz-side-nav-text">Vendor Dashboard</span>
                        </a>
                    </li>
                @endif
            
                <li class="aiz-side-nav-item mm-active">
                    <a  action="{{ route('addEditApplication') }}" href="{{ route('addEditApplication') }}" class="aiz-side-nav-link" aria-expanded="true">
                        <i class="las la-file-alt aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">Dog Application</span>
                    </a>
                </li>
                <li class="aiz-side-nav-item">
                    <a href="{{route('cart')}}" class="aiz-side-nav-link ">
                        <i class="las la-download aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">Requests</span>
                    </a>
                </li>
               
                <li class="aiz-side-nav-item">
                    <a href="{{route('userOrder')}}" class="aiz-side-nav-link ">
                        <i class="las la-download aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">Orders</span>
                    </a>
                </li>
                <li class="aiz-side-nav-item">
                    <a href="{{route('customerChat')}}" class="aiz-side-nav-link ">
                        <i class="las la-download aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">Customer Chat</span>
                    </a>
                </li>
                <li class="aiz-side-nav-item">
                    <a href="{{route('userLogout')}}" class="aiz-side-nav-link"  onclick="return confirm('Are you sure to delete?')">
                        <i class="las la-download aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text">Logout User</span>
                    </a>
                </li>
                
            </ul>
        </div>
    </div>
    <div class="fixed-bottom d-xl-none bg-white border-top d-flex justify-content-between px-2"
        style="box-shadow: 0 -5px 10px rgb(0 0 0 / 10%);">
       
        <a class="btn btn-sm p-2 d-flex align-items-center" href="{{route('userLogout')}}" onclick="return confirm('Are you sure to delete?')">
            <i class="las la-sign-out-alt fs-18 mr-2"></i>
            <span>Logout User</span>
        </a>
      
       
        <button class="btn btn-sm p-2 " data-toggle="class-toggle" data-backdrop="static"
            data-target=".aiz-mobile-side-nav" data-same=".mobile-side-nav-thumb">
            <i class="las la-times la-2x"></i>
        </button>
    </div>
</div>


@push('styles')
    <style>
        .aiz-side-nav-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .pl-2,
        .px-2 {
            padding-left: 0.5rem !important;
        }

        .pr-2,
        .px-2 {
            padding-right: 0.5rem !important;
        }

        .aiz-side-nav-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .aiz-user-sidenav .aiz-side-nav-list .aiz-side-nav-link {
            color: #ffffff;
            font-weight: 500;
            font-size: 0.8125rem;
            border-radius: 3px;
            padding: 10px 20px 10px 15px;
        }

        .aiz-side-nav-list .aiz-side-nav-link {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            -webkit-box-align: stretch;
            -ms-flex-align: stretch;
            align-items: stretch;
            padding: 10px 25px;
            font-size: 0.875rem;
            font-weight: 400;
            color: #a2a3b7;
        }

        .aiz-side-nav-list .aiz-side-nav-link:hover,
        .aiz-side-nav-list .aiz-side-nav-link.level-2-active,
        .aiz-side-nav-list .aiz-side-nav-link.level-3-active,
        .aiz-side-nav-list .aiz-side-nav-link.active {
            color: #fff;
            background-color: #181827;
        }

        .aiz-user-panel {
            -ms-flex-positive: 1;
            flex-grow: 1;
            padding-left: 30px;
        }
    </style>
@endpush
