@extends('layouts.admin_app')

@section('main-content')


    <div class="row">

        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">

                <div class="card-body">

                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                role="tab" aria-controls="nav-home" aria-selected="true">

                                @if (Auth::guard('admin')->user()->type == 'Vendor')
                                    Details
                                @else
                                    Admin Details
                                @endif


                            </a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                role="tab" aria-controls="nav-profile" aria-selected="false">

                                @if (Auth::guard('admin')->user()->type == 'Vendor')
                                    Change Password
                                @else
                                    Admin Password
                                @endif

                            </a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent" style="border: none;">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">

                            <form class="forms-sample" method="post" action="{{ route('updateAdminDetails') }}"
                                id="updateAdminDetails" enctype="multipart/form-data">
                                @csrf
                                @if (Session::has('error_message'))
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        {{ Session::get('error_message') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                @if (Session::has('success_message'))
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        {{ Session::get('success_message') }}
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

                                <div class="form-group">
                                    <label for="name">Email address</label>
                                    <input type="text" class="form-control" name="email"
                                        id="email"value="{{ $adminDetaiils->email }}" readonly="" placeholder="name">
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label>First Name</label>
                                        <div id="first_name">
                                            <input class="typeahead" type="text" name="first_name" value="{{ $adminDetaiils->first_name }}"  placeholder="first_name">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label>Last Name</label>
                                        <div id="last_name">
                                            <input class="typeahead" type="text" name="last_name" value="{{ $adminDetaiils->last_name }}" placeholder="last_name">
                                        </div>
                                    </div>
                                </div>
                        
                                @if (Auth::guard('admin')->user()->type == 'Vendor')
                                <div class="form-group row">
                                    <div class="col">
                                        <label>Adress One</label>
                                        <div id="the-basics">
                                            <input class="typeahead" type="text" name="adress_one" value="{{ $adminDetaiils->adress_one }}" placeholder="adress_one">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label>Address Two</label>
                                        <div id="bloodhound">
                                            <input class="typeahead" type="text" name="adress_two" value="{{ $adminDetaiils->adress_two }}" placeholder="adress_two">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label>Zip Code</label>
                                        <div id="zipcode">
                                            <input class="typeahead" type="text" name="zipcode" value="{{ $adminDetaiils->zipcode }}"  placeholder="zipcode">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label>country</label>
                                        <div id="country">
                                            <input class="typeahead" type="text" name="country" value="{{ $adminDetaiils->country }}" placeholder="country">
                                        </div>
                                    </div>
                                </div>


                                    {{-- <div class="form-group">
                                        <label for="adress_one"></label>
                                        <input type="text" class="form-control" name="adress_one"
                                            id="adress_one"value="{{ $adminDetaiils->adress_one }}" placeholder="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="adress_two">Address Two</label>
                                        <input type="text" class="form-control" name="adress_two"
                                            id="adress_two"value="{{ $adminDetaiils->adress_two }}"
                                            placeholder="adress_two">
                                    </div>
                                    <div class="form-group">
                                        <label for="zipcode"></label>
                                        <input type="text" class="form-control" name="zipcode"
                                            id="zipcode"value="{{ $adminDetaiils->zipcode }}" placeholder="adress_two">
                                    </div>
                                    <div class="form-group">
                                        <label for="city">city</label>
                                        <input type="text" class="form-control" name="country" id="city"
                                            value="{{ $adminDetaiils->city }}" placeholder="city">
                                    </div> --}}
                                @else
                                    <div class="form-group">
                                        <label for="type">Amin Type</label>
                                        <select class="form-control" name="type" id="exampleSelectGender">
                                            <option value="admin" @if (!empty($adminDetaiils->type) && $adminDetaiils->type == 'admin') selected @endif>Admin
                                            </option>
                                            <option value="superadmin" @if (!empty($adminDetaiils->type) && $adminDetaiils->type == 'superadmin') selected @endif>
                                                Superadmin</option>
                                        </select>
                                    </div>
                                @endif

                                <div class="form-group">
                                    <label for="mobile">Mobile</label>
                                    <input type="text" class="form-control" id="mobile" name="mobile"
                                        placeholder="mobile" value="{{ $adminDetaiils->mobile }}">
                                </div>

                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" class="form-control" id="admin_image" name="admin_image">
                                    @if (!empty(Auth::guard('admin')->user()->admin_image))
                                        <a href="{{ url('admin/images/admin_photos/admins/' . Auth::guard('admin')->user()->admin_image) }}"
                                            target="blank">View Image</a>
                                        <input type="hidden" name="current_admin_image" id="current_admin_image"
                                            value="{{ Auth::guard('admin')->user()->admin_image }}">
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            </form>

                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

                            <form class="forms-sample" method="post" action="{{ route('updatePassword') }}"
                                name="updatePasswordForm" id="updatePasswordForm">@csrf
                                @if (Session::has('error_message'))
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        {{ Session::get('error_message') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                @if (Session::has('success_message'))
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        {{ Session::get('success_message') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                {{-- <div class="form-group row">
                                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="" name="email"
                                            value="{{ $adminDetaiils->email }}" readonly>
                                    </div>
                                </div> --}}

                                <div class="form-group row">
                                    <label for="name">Email address</label>
                                    <input type="text" class="form-control" name="email"
                                        id="email"value="{{ $adminDetaiils->email }}" readonly=""
                                        placeholder="name">
                                </div>



                                {{-- <div class="form-group row">
                                    <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Current Password </label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="current_pwd"
                                            placeholder="current_pwd" name="current_pwd">
                                        <span id="chkCurrentPwd"></span>
                                    </div>
                                </div> --}}

                                <div class="form-group row">
                                    <label for="current_pwd"> Current Password </label>
                                    <input type="password" class="form-control" name="current_pwd" id="current_pwd"
                                        placeholder="Current Password">
                                </div>



                                {{-- <div class="form-group row">
                                    <label for="new_pwd" class="col-sm-3 col-form-label">New Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="new_pwd" name="new_pwd"
                                            placeholder="New Password...">
                                    </div>
                                </div> --}}
                                <div class="form-group row">
                                    <label for="new_pwd"> New Password </label>
                                    <input type="password" class="form-control" name="new_pwd" id="new_pwd"
                                        placeholder="New Password">
                                </div>

                                {{-- <div class="form-group row">
                                    <label for="confirm_pwd" class="col-sm-3 col-form-label">Confirm Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="confirm_pwd" name="confirm_pwd"
                                            placeholder="Confirm Password...">
                                    </div>
                                </div> --}}
                                <div class="form-group row">
                                    <label for="confirm_pwd"> Re Enter Password </label>
                                    <input type="password" class="form-control" name="confirm_pwd" id="confirm_pwd"
                                        placeholder="Confirm Password...">
                                </div>

                                <button type="submit" class="btn btn-primary mr-2">Update</button>
                            </form>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>






@endsection




@push('styles')
    <style>
        .select2-container .select2-selection--single {}


        .select2-container .select2-selection--single {
            box-sizing: border-box;
            cursor: pointer;
            display: block;
            height: 48px !important;
            user-select: none;
            -webkit-user-select: none;
        }
    </style>


    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script>
        $(document).ready(function() {

            $('.js-example-basic-multiple').select2();


            $("#current_pwd").keyup(function() {
                var current_pwd = $("#current_pwd").val();
                // alert(current_pwd);
                $.ajax({
                    type: 'POST',
                    url: '/admin/check-current-pwd',
                    data: {
                        // _token:{{ csrf_token() }} 
                        current_pwd: current_pwd
                    },
                    success: function(resp) {
                        // alert(resp);
                        if (resp == "false") {
                            $("#chkCurrentPwd").html(
                                "<font color=red>Current Password is incorrect</font>");
                        } else if (resp == "true") {
                            $("#chkCurrentPwd").html(
                                "<font color=green>Current Password is Correct</font>");
                        }
                    },
                    error: function() {
                        alert("Error");
                    }
                });

            });
        });
    </script>
@endpush
