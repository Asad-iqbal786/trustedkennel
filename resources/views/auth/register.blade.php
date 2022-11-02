<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('admin/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('admin/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('admin/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
<!-- inject:css -->
<link rel="stylesheet" href="{{asset('admin/css/vertical-layout-light/style.css')}}">
<!-- endinject -->
<link rel="shortcut icon" href="{{asset('admin/images/favicon.png')}}" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-6 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo text-center">
                <a href="{{route('frontendHome')}}">
                  <img src="{{asset('admin/images/logo_finale.png')}}" alt="logo">
                </a>
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Register your account in to continue.</h6>
                @if(Session::has('error_message'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{Session::get('error_message')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                @endif
                @if(Session::has('success_message'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{Session::get('success_message')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
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
              <form  method="POST" action="{{route('register')}}"> @csrf
     
                  <div class="form-group >
                    <label for="name">Name</label>
                    <input id="name" type="text" class="form-control" name="name" value="{{old('name')}}" required autofocus>
                  </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input id="email" type="email" class="form-control" required value="{{old('email')}}" name="email">
                  <div class="invalid-feedback">
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                      <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" class="form-control" required name="password" id="password" value=""  placeholder="password">
                      </div>
                  </div>
                  <div class="col-6">
                      <div class="form-group">
                          <label for="password">Confirm Password</label>

                          <input id="password_confirmation" type="password" required class="form-control" name="password_confirmation" tabindex="2" >
                    
                      </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                    <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                  </div>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-lg btn-block">
                    Register
                  </button>
                </div>
              </form>
            
              
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <script src="{{asset('admin/vendors/js/vendor.bundle.base.js')}}"></script>

    <!-- inject:js -->
    <script src="{{asset('admin/js/off-canvas.js')}}"></script>
    <script src="{{asset('admin/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('admin/js/template.js')}}"></script>
    <script src="{{asset('admin/js/settings.js')}}"></script>
    <script src="{{asset('admin/js/todolist.js')}}"></script>
  
</body>

</html>
