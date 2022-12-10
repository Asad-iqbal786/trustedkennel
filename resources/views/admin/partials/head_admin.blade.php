<nav
    @if (Auth::guard('admin')->user()) class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row bg-white"
@else
    class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row bg-dark" @endif>
    <div
        @if (Auth::guard('admin')->user()) class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center bg-white"
      @else
          class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center bg-dark" @endif>
        <a class="navbar-brand brand-logo mr-5" href="{{ route('frontendHome') }}" target="_blank"><img
                src="{{ asset('frontend/images/logo_final.png') }}" class="mr-2" alt="logo" /></a>
        {{-- <a class="navbar-brand brand-logo-mini" href="" target="_blank"><img src="{{asset('admin/images/logo-mini.svg')}}" alt="logo"/></a> --}}
    </div>
    <div
        @if (Auth::guard('admin')->user()) class="navbar-menu-wrapper d-flex align-items-center justify-content-end bg-white"
    @else
        class="navbar-menu-wrapper d-flex align-items-center justify-content-end bg-dark" @endif>
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="icon-menu"></span>
        </button>

        <ul class="navbar-nav navbar-nav-right">

            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                    <img src=""
                        alt="profile" />
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                    <a class="dropdown-item">
                        <i class="ti-settings text-primary"></i>
                        Name : {{ Auth::guard('admin')->user()->email }}
                    </a>
                    <a class="dropdown-item">
                        <i class="ti-settings text-primary"></i>
                        Type :
                    </a>
                    @if (Auth::guard('admin')->user())
                        <a class="dropdown-item" href="{{ route('logoutadmin') }}">
                            <i class="ti-power-off text-primary"></i>
                            Logout
                        </a>
                    @else
                        <a class="dropdown-item" href="{{ route('logoutvendor') }}">
                            <i class="ti-power-off text-primary"></i>
                            Logout
                        </a>
                    @endif

                </div>
            </li>

        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="icon-menu"></span>
        </button>
    </div>
</nav>
