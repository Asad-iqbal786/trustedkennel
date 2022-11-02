<header class="header shop">
    <div class="topbar bg-dark p-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    
                </div>
                <div class="col-lg-8 col-md-12 col-12">
                    <div class="right-content">
                        <ul class="list-main">

                            {{-- <li>
                                <div class="dropdown">
                                    <i class="ti-user"></i>
                                    <a href="#" class="dropdown-toggle" type="button" id="kenneldropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        kennel Account
                                    </a>
                                    <div class="dropdown-menu bg-dark" aria-labelledby="kenneldropdown">

                                        @if(Auth::guard('admin')->check())
                                            <a class="dropdown-item" href="{{route('vendorDashboard')}}">kennel Dashboard</a>
                                            <a class="dropdown-item" href="{{route('logoutvendor')}}">kennel Logout</a>
                                        @else
                                            <a class="dropdown-item" href="{{route('loginPage')}}">kennel Login</a>
                                            <a class="dropdown-item" href="{{route('vendorRegister')}}">Register </a>
                                        @endif
                                    

                                    </div>
                                  </div>
                            </li> --}}
                            <li>
                                <div class="dropdown">
                                    <i class="ti-user"></i>
                                    <a href="#" class="dropdown-toggle" type="button" id="userDropdow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       Login
                                    </a>
                                    <div class="dropdown-menu bg-dark" aria-labelledby="userDropdow">
                                        @auth

                                        {{-- // The user is login... --}}
                                        <a class="dropdown-item" href="{{route('userIndex')}}">User Dashboard</a>
                                        <a class="dropdown-item" href="{{route('addEditApplication')}}">Application </a>
                                        <a class="dropdown-item" href="{{route('logout')}}">User Logout</a>
                                        @endauth
                                        
                                        
                                        @guest
                                        <a class="dropdown-item" href="{{route('login')}}">User Login</a>
                                            {{-- // The user is not login... --}}
                                        
                                        @endguest
                                        
                       
                                      
                                      

                                    </div>
                                  </div>
                            </li>
                            {{-- <li><i class="ti-power-off"></i><a href=""></a></li>
                            <li><i class="ti-power-off"></i> <a href="">kennel Login</a></li> --}}

                        </ul>
                    </div>
                    <!-- End Top Right -->
                </div>
            </div>
        </div>
    </div>
    <div class="middle-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-12 d-md-none ">
                    <div class="logo w-25">
                        <a href="index.html"><img src="{{asset('frontend/images/logo.png')}}" alt="logo"></a>
                    </div>
                    <div class="mobile-nav"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Inner -->
    <div class="header-inner">
        <div class="container">
            <div class="cat-nav-head">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="logo w-100">
                            <a href="{{route('frontendHome')}}"><img src="{{asset('frontend/images/logo.png')}}" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-12">
                        <div class="menu-area">
                            <!-- Main Menu -->
                            <nav class="navbar navbar-expand-lg">
                                <div class="navbar-collapse">	
                                    <div class="nav-inner">	
                                        <ul class="nav main-menu menu navbar-nav">
                                                <li
                                                    @if(Session::get('page')=="home_page")
                                                        class="active"
                                                    @else   @endif  ><a href="{{route('frontendHome')}}">Home</a></li>
                                                <li   @if(Session::get('page')=="find_kennnels")
                                                        class="active"
                                                    @else   @endif ><a href="{{route('findKennel')}}">Find a Kennel</a></li>												
                                                <li   @if(Session::get('page')=="find_puppy")
                                                        class="active"
                                                    @else   @endif ><a href="{{route('findPuppy')}}">Find A Puppy</a></li>
                                                <li   @if(Session::get('page')=="oru_services")
                                                        class="active"
                                                    @else   @endif ><a href="{{route('Ourservices')}}">Services</a></li>									
                                                <li   @if(Session::get('page')=="our_stories")
                                                        class="active"
                                                    @else   @endif ><a href="{{route('OurStories')}}">Our Stories</a></li>									
                                                <li   @if(Session::get('page')=="contact_us")
                                                        class="active"
                                                    @else   @endif ><a href="{{route('contactUs')}}">Contact Us</a></li>
                                            </ul>
                                    </div>
                                    
                                </div>
                            </nav>
                            <!--/ End Main Menu -->	
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
</header>


<?php

    Session::forget('home_page');
    Session::forget('find_kennnels');
    Session::forget('find_puppy');
    Session::forget('oru_services');
    Session::forget('our_stories');
    Session::forget('contact_us');

?>