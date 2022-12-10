<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Skydash Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('admin/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('admin/css/vertical-layout-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('admin/images/favicon.png') }}" />
    <style>
        .tab-content {
            border: none;
        }

        .nav-pills {
            border-bottom: none;
        }

        .auth .brand-logo img {
            width: 270px;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #572df6;
            font-weight: 700;
            border: 2px solid;
            background-color: #ffffff;
        }

        .nav-pills .nav-link {
            border: 2px solid #CED4DA;
        }

        .nav-pills .nav-item {
            margin-right: 0;
        }

        .nav-pills .nav-link {
            /* border-radius: 7px 7px 7px 7px; */
        }
    </style>



</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper bg-inverse-light">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0 auth-form-light">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo text-center">
                                <a href="{{ route('frontendHome') }}">
                                    <img src="{{ asset('frontend/images/logo_final.png') }}" alt="logo">
                                </a>
                            </div>
                            <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" style="border-radius: 8px 0px 0px 10px;"
                                        id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                                        aria-controls="pills-home" aria-selected="true">User</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" style="border-radius: 0px 10px 10px 0px;" id="pills-profile-tab"
                                        data-toggle="pill" href="#pills-profile" role="tab"
                                        aria-controls="pills-profile" aria-selected="false">Kennels</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" style="border-radius: 0px 10px 10px 0px;" id="admin-tab"
                                        data-toggle="pill" href="#admin" role="tab"
                                        aria-controls="admin" aria-selected="false">Admin</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">

                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                    aria-labelledby="pills-home-tab">

                                    <form method="POST" action="{{ route('login') }}">

                                        @csrf

                                        @if (Session::has('error_message'))
                                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                {{ Session::get('error_message') }}
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        @endif
                                        @if (Session::has('success_message'))
                                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                {{ Session::get('success_message') }}
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        @endif
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input id="email" type="email" class="form-control" name="email"
                                                tabindex="1">
                                            <div class="invalid-feedback">
                                                Please fill in your email
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="d-block">
                                                <label for="password" class="control-label">Password</label>
                                                <div class="float-right">
                                                    <a href="auth-forgot-password.html" class="text-small">
                                                        Forgot Password?
                                                    </a>
                                                </div>
                                            </div>
                                            <input id="password" type="password" class="form-control" name="password"
                                                tabindex="2">
                                            <div class="invalid-feedback">
                                                please fill in your password
                                            </div>
                                            <div class="float-right pt-1">
                                                <a href="{{ route('register') }}" class="text-small">
                                                    New? Request to become a trusted kennel
                                                </a>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="remember" class="custom-control-input"
                                                    tabindex="3" id="remember-me">
                                                <label class="custom-control-label" for="remember-me">Remember
                                                    Me</label>
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block"
                                                tabindex="4">
                                                Sign in
                                            </button>
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                    aria-labelledby="pills-profile-tab">

                                    <form method="POST"action="{{ route('vendorLogin') }}">@csrf

                                        @if (Session::has('error_message'))
                                            <div class="alert alert-warning alert-dismissible fade show"
                                                role="alert">
                                                {{ Session::get('error_message') }}
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        @endif
                                        @if (Session::has('success_message'))
                                            <div class="alert alert-warning alert-dismissible fade show"
                                                role="alert">
                                                {{ Session::get('success_message') }}
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        @endif
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input id="email" type="email" class="form-control" name="email"
                                                tabindex="1">
                                            <div class="invalid-feedback">
                                                Please fill in your email
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="d-block">
                                                <label for="password" class="control-label">Password</label>
                                                <div class="float-right">
                                                    <a href="auth-forgot-password.html" class="text-small">
                                                        Forgot Password?
                                                    </a>
                                                </div>
                                            </div>
                                            <input id="password" type="password" class="form-control"
                                                name="password" tabindex="2">
                                            <div class="invalid-feedback">
                                                please fill in your password
                                            </div>
                                            <div class="float-right pt-1">
                                                <a href="{{ route('vendorRegister') }}" class="text-small">
                                                    New? Request to become a trusted kennel
                                                </a>

                                            </div>
                                        </div>
                                        <br><br>

                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="remember" class="custom-control-input"
                                                    tabindex="3" id="remember-me">
                                                <label class="custom-control-label" for="remember-me">Remember
                                                    Me</label>
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block"
                                                tabindex="4">
                                                Sign in
                                            </button>
                                        </div>
                                    </form>

                                </div>
                                <div class="tab-pane fade" id="admin" role="tabpanel"
                                aria-labelledby="pills-profile-tab">

                                <form method="POST"action="{{ route('adminLogin') }}">@csrf

                                    @if (Session::has('error_message'))
                                        <div class="alert alert-warning alert-dismissible fade show"
                                            role="alert">
                                            {{ Session::get('error_message') }}
                                            <button type="button" class="close" data-dismiss="alert"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif
                                    @if (Session::has('success_message'))
                                        <div class="alert alert-warning alert-dismissible fade show"
                                            role="alert">
                                            {{ Session::get('success_message') }}
                                            <button type="button" class="close" data-dismiss="alert"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control" name="email"
                                            tabindex="1">
                                        <div class="invalid-feedback">
                                            Please fill in your email
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="password" class="control-label">Password</label>
                                            <div class="float-right">
                                                <a href="auth-forgot-password.html" class="text-small">
                                                    Forgot Password?
                                                </a>
                                            </div>
                                        </div>
                                        <input id="password" type="password" class="form-control"
                                            name="password" tabindex="2">
                                        <div class="invalid-feedback">
                                            please fill in your password
                                        </div>
                                    </div>
                                    <br><br>

                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="remember" class="custom-control-input"
                                                tabindex="3" id="remember-me">
                                            <label class="custom-control-label" for="remember-me">Remember
                                                Me</label>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block"
                                            tabindex="4">
                                            Sign in
                                        </button>
                                    </div>
                                </form>

                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>

    <?php
    Session::forget('error_message');
    Session::forget('success_message');
    ?>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <script src="{{ asset('admin/vendors/js/vendor.bundle.base.js') }}"></script>

    <!-- inject:js -->
    <script src="{{ asset('admin/js/off-canvas.js') }}"></script>
    <script src="{{ asset('admin/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('admin/js/template.js') }}"></script>
    <script src="{{ asset('admin/js/settings.js') }}"></script>
    <script src="{{ asset('admin/js/todolist.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(".gjgfhj").click(function() {
                alert("Hello, world!");
            });
        });
    </script>


</body>

</html>
