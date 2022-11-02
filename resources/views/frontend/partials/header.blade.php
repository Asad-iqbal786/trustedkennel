<nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
    data-md-layout="rd-navbar-fixed" ta-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
    <div class="rd-navbar-main">
        <div class="rd-navbar-panel">
            <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>

            <div class="rd-navbar-brand">
                <a class="brand" href="{{ route('frontendHome') }}">
                    <img src="{{ asset('frontend/images/logo.png') }}" alt="" width="266"
                        height="46" /></a>
            </div>
        </div>
        <div class="rd-navbar-nav-wrap">




            <ul class="rd-navbar-nav" @if (Session::get('page') == 'home_page' ||
                Session::get('page') == 'find_kennnels' ||
                Session::get('page') == 'find_puppy' ||
                Session::get('page') == 'oru_services')  @endif>
                <li class="rd-nav-item  @if (Session::get('page') == 'home_page') active @else @endif">
                  <a class="rd-nav-link" href="{{ route('frontendHome') }}">Home</a>

                </li>
                <li class="rd-nav-item @if (Session::get('page') == 'find_puppy') active @else @endif">

                    <a class="rd-nav-link" href="{{ route('findPuppy') }}">Puppies</a>

                </li>
                <li class="rd-nav-item @if (Session::get('page') == 'find_kennnels') active @else @endif">
                    <a class="rd-nav-link" href="{{ route('findKennel') }}">Kennels</a>
                </li>
                <li class="rd-nav-item @if (Session::get('page') == 'oru_services') active @else @endif">
                    <a class="rd-nav-link" href="{{ route('Ourservices') }}">Services</a>
                </li>
                <li class="rd-nav-item @if (Session::get('page') == 'our_stories') active @else @endif">
                    <a class="rd-nav-link" href="{{ route('OurStories') }}">Our Story</a>
                </li>
                <li class="rd-nav-item">

                    @if (Auth::guard('admin')->check())
                        <a class="rd-nav-link" href="{{ route('userIndex') }}">User Dashboard</a>

                        <a class="rd-nav-link" href="{{ route('logout') }}">Logout</a>
                    @else
                        <a class="rd-nav-link" href="{{ route('loginPage') }}">Login</a>
                    @endif

                </li>
            </ul>
        </div>
    </div>
</nav>

<?php

Session::forget('home_page');
Session::forget('find_puppy');
Session::forget('find_kennnels');
Session::forget('oru_services');

?>
