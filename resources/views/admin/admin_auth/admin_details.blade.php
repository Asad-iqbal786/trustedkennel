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
                                            <input class="typeahead" type="text" name="first_name"
                                                value="{{ $adminDetaiils->first_name }}" placeholder="first_name">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label>Last Name</label>
                                        <div id="last_name">
                                            <input class="typeahead" type="text" name="last_name"
                                                value="{{ $adminDetaiils->last_name }}" placeholder="last_name">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label>Kennel Name</label>
                                        <div id="the-basics">
                                            <input class="typeahead" type="text" name="kennel_name"
                                                value="{{ $vendoDetails['vendors']['kennel_name'] }}" placeholder="kennel_name">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label>Registration Number</label>
                                        <div id="bloodhound">
                                            <input class="typeahead" type="text" name="registration_number"
                                                value="{{ $vendoDetails['vendors']['registration_number'] }}"
                                                placeholder="Registration Number">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label> KENNEL AFFILIATIONS </label>
                                        <select class="form-control form-control-lg" name="kennel_affiliations">
                                            <option>AKC</option>
                                            <option>CKC</option>
                                            <option>FCI</option>
                                            <option>KC</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="location">LOCATION</label>
                                        <input type="text" class="form-control" required name="location" id="location"
                                       value="{{ $vendoDetails['vendors']['location'] }}" placeholder="location">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label for="established_year">YEAR ESTABLISHED</label>
                                        <input type="date" class="form-control" required name="established_year"
                                        value="{{ $vendoDetails['vendors']['location'] }}" id="established_year" value=""
                                            placeholder="established_year">
                                    </div>
                                    <div class="col">
                                        <label> BREED(S) </label>
                                        <select class="js-example-basic-multiple" name="breeds[]"
                                            multiple="multiple">
                                            <option>--Select any one Breeds--</option>
                                            @foreach ($getCat as $item)
                                                <option value=" {{ $item['id'] }}">
                                                    {{ $item['name'] }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label for="vendor_about"> ABOUT YOUR KENNEL</label>
                                        <textarea class="form-control"  name="vendor_about" value="{{ $vendoDetails['vendors']['location'] }}" id="vendor_about" rows="4"></textarea>
 
                                    </div>
                                    
                                </div>
                                <div class="form-group row">
                                   
                                    <div class="col">
                                        <label for="health_check">HEALTH CHECKS</label>
                                        <textarea class="form-control" name="health_check" id="health_check" rows="4">{{ old('health_check') }}</textarea>
                                
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label for="website"> WEBSITE </label>
                                        <input type="text" class="form-control"
                                        value="{{ $vendoDetails['vendors']['location'] }}" required name="website"
                                            id="website" value="" placeholder="website">
                                    </div>
                                    <div class="col">
                                        <label for="instagram_url"> INSTAGRAM URL </label>
                                        <input type="text"
                                            class="form-control" value="{{ $vendoDetails['vendors']['location'] }}" required
                                            name="instagram_url" id="instagram_url" value=""
                                            placeholder="instagram_url">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label for="facebook_url"> FACEBOOK URL </label>
                                        <input type="text"
                                            class="form-control" value="{{ $vendoDetails['vendors']['location'] }}"
                                            required name="facebook_url" id="facebook_url"
                                            value="" placeholder="facebook_url">
                                    </div>
                                    <div class="col">
                                        <label for="twitter_url"> TWITTER URL </label>
                                        <input type="text"
                                            class="form-control" value="{{ $vendoDetails['vendors']['location'] }}"
                                            name="twitter_url" id="twitter_url" value=""
                                            placeholder="twitter_url">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label for="mobile">Mobile</label>
                                        <input type="text" class="form-control" id="mobile" name="mobile"
                                            placeholder="mobile" value="{{ $adminDetaiils->mobile }}">
                                    </div>
                                    <div class="col">
                                        <label>Country</label>
                                        <div id="country">
                                            <input class="typeahead" type="text" name="country"
                                                value="{{ $vendoDetails['vendors']['country'] }}" placeholder="country">
                                        </div>
                                    </div>
                                </div>
                              
                                <div class="form-group row">
                                    <div class="col">
                                        <label>Image</label>
                                        <input type="file" class="form-control" id="admin_image" name="admin_image">

                                            <a href="{{ url('admin/images/admin_photos/admins/' . $vendoDetails['vendors']['admin_image']) }}"
                                                target="blank">View Image</a>
                                            <input type="hidden" name="current_admin_image" id="current_admin_image"
                                                value="{{ $vendoDetails['vendors']['admin_image'] }}">
                                    </div>
                                    <div class="col">
                                        <label for="recent_img">A recent Picture of your Kennel
                                        </label>
                                        <input type="file"  class="form-control"name="recent_img" id="recent_img" value="" placeholder="recent_img">

                                        <a href="{{ url('admin/images/admin_photos/admins/' . $vendoDetails['vendors']['recent_img']) }}"
                                        target="blank">View Image</a>
                                    <input type="hidden" name="recent_img" id="recent_img"
                                        value="{{ $vendoDetails['vendors']['recent_img'] }}">
                                    </div>
                                </div>

                                {{-- @if (Auth::guard('admin')->user()->type == 'Vendor')
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
                                @endif --}}

                              

                                {{-- <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" class="form-control" id="admin_image" name="admin_image">
                                    @if (!empty(Auth::guard('admin')->user()->admin_image))
                                        <a href="{{ url('admin/images/admin_photos/admins/' . Auth::guard('admin')->user()->admin_image) }}"
                                            target="blank">View Image</a>
                                        <input type="hidden" name="current_admin_image" id="current_admin_image"
                                            value="{{ Auth::guard('admin')->user()->admin_image }}">
                                    @endif
                                </div> --}}
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
