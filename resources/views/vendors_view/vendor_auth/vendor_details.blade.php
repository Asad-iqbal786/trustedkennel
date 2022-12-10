@extends('layouts.admin_app')

@section('main-content')


    <div class="row">

        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">

                <div class="card-body">

                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                role="tab" aria-controls="nav-home" aria-selected="true">

                                Vendor Details


                            </a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                role="tab" aria-controls="nav-profile" aria-selected="false"> Vendor Password </a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent" style="border: none;">

                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">

                            <form class="forms-sample" method="post" action="{{ route('updateVendorDetails') }}"
                                id="updateAdminDetails" enctype="multipart/form-data">  @csrf
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
                                <div class="form-group row">
                                    <div class="col-4">
                                        <label>Kennel Name</label>
                                        <div id="the-basics">
                                            <input class="typeahead" type="text" name="kennel_name"
                                                value="{{ $vendoDetails['kennel_name'] }}" placeholder="kennel_name">
                                        </div>
                                    </div>
                                    <div class="col-4"></div>
                                    <div class="col-4">
                                        <label> KENNEL AFFILIATIONS </label>
                                        <select class="form-control form-control-lg" name="kennel_affiliations">
                                            <option>AKC</option>
                                            <option>CKC</option>
                                            <option>FCI</option>
                                            <option>KC</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-4">

                                        <label>BREED(S) </label>
                                        <select class="form-control form-control-lg js-example-basic-multiple"
                                            name="breeds[]" multiple="multiple">
                                            <option>--Select any one Breeds--</option>
                                            @foreach ($getCat as $item)
                                                <option value=" {{ $item['id'] }}">
                                                    {{ $item['name'] }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                    <div class="col-4"></div>
                                    <div class="col-4">
                                        <label>Registration Number</label>
                                        <div id="bloodhound">
                                            <input class="typeahead" type="text" name="registration_number"
                                                value="{{ $vendoDetails['registration_number'] }}"
                                                placeholder="Registration Number">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-4">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" requireds name="address" id="address"
                                            value="" placeholder="Address">
                                    </div>
                                    <div class="col-4"></div>
                                    <div class="col-4">
                                        <label for="established_year">YEAR ESTABLISHED</label>
                                        <input type="date" class="form-control" requireds name="established_year"
                                            value="established_year" id="established_year" value=""
                                            placeholder="established_year">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-4">
                                        <label for="city">City</label>
                                        <input type="text" class="form-control" requireds name="city" id="city"
                                            value="{{ $vendoDetails['city'] }}" placeholder="City">
                                    </div>
                                    <div class="col-4">
                                        <label for="state">STATE / PROVENCE</label>
                                        <input type="text" class="form-control" requireds name="state"
                                            id="state" value="{{ $vendoDetails['state'] }}" placeholder="State">
                                    </div>
                                    <div class="col-4">
                                        <label for="country">Country</label>
                                        <input type="text" class="form-control" requireds name="country"
                                            id="country" value="{{ $vendoDetails['country'] }}" placeholder="Country">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-4">
                                        <label>OWNER FIRST NAME</label>
                                        <div id="first_name">
                                            <input class="typeahead" type="text" name="first_name"
                                                value="{{ $adminDetaiils->first_name }}" placeholder="first_name">
                                        </div>
                                    </div>
                                    <div class="col-4"> </div>
                                    <div class="col-4">
                                        <label>OWNER LAST NAME</label>
                                        <div id="last_name">
                                            <input class="typeahead" type="text" name="last_name"
                                                value="{{ $adminDetaiils->last_name }}" placeholder="last_name">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-4">
                                        <label for="name">EMAIL ADDRESS</label>
                                        <input type="text" class="form-control" name="email"
                                            id="email"value="{{ $adminDetaiils->email }}" readonly=""
                                            placeholder="name">
                                    </div>
                                    <div class="col-4"> </div>
                                    <div class="col-4">
                                        <label for="phone">MOBILE</label>
                                        <input type="text" class="form-control" id="phone" name="phone"
                                            placeholder="phone" value="{{ $adminDetaiils->phone }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label for="vendor_about"> ABOUT YOUR KENNEL</label>
                                        <textarea class="form-control" name="vendor_about" value="" id="vendor_about" rows="4"></textarea>
                                    </div>

                                </div>
                                <div class="form-group row">

                                    <div class="section-title">AVERAGE NUMBER OF PLANNED LITTERS
                                        PER YEAR</div>

                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="0" value="" name="number_of_litters"
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="0">0</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="1" name="number_of_litters" value=""
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="1"> 1
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="2" name="number_of_litters" value=""
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="2">2</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="3" name="number_of_litters" value=""
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="3">3</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="4" name="number_of_litters" value=""
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="4">
                                            4</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="5" name="number_of_litters" value=""
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="5">
                                            5</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="6" name="number_of_litters" value=""
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="6">
                                            6</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="7" name="number_of_litters" value=""
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="7">
                                            7</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="8" name="number_of_litters" value=""
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="8">
                                            8</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="9" name="number_of_litters" value=""
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="9">
                                            9</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="more_then_10" name="number_of_litters" value=""
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="more_then_10">
                                            10</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label for="health_check">HEALTH CHECKS</label>
                                        <textarea class="form-control" name="health_check" id="health_check" rows="4">{{ old('health_check') }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="section-title">HOW MANY CHAMPIONS HAVE YOU PRODUCED IN THE LAST 5 YEARS
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">

                                        <label class="custom-control-label" for="none">NONE</label>
                                        <input type="radio" id="none" value="" name="how_many_champions"
                                            class="custom-control-input">
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="1-2" value="" name="how_many_champions"
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="1-2"> 1-2
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="3-5" value="" name="how_many_champions"
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="3-5">3-5</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="6-10" value="" name="how_many_champions"
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="6-10">6-10</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="more_then" value="" name="how_many_champions"
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="more_then">
                                            MORE THAN 10</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-4">
                                        <label for="website"> WEBSITE </label>
                                        <input type="text" class="form-control"
                                            value="{{ $vendoDetails['website'] }}" requireds name="website"
                                            id="website" value="" placeholder="website">
                                    </div>
                                    <div class="col-4"></div>
                                    <div class="col-4">
                                        <label for="facebook_url"> FACEBOOK URL </label>
                                        <input type="text" class="form-control"
                                            value="{{ $vendoDetails['facebook_url'] }}" requireds name="facebook_url"
                                            id="facebook_url" value="" placeholder="facebook_url">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-4">
                                        <label for="instagram_url"> INSTAGRAM URL </label>
                                        <input type="text" class="form-control"
                                            value="{{ $vendoDetails['instagram_url'] }}" requireds name="instagram_url"
                                            id="instagram_url" value="" placeholder="instagram_url">
                                    </div>
                                    <div class="col-4"></div>
                                    <div class="col-4">
                                        <label for="twitter_url"> TWITTER URL </label>
                                        <input type="text" class="form-control"
                                            value="{{ $vendoDetails['twitter_url'] }}" name="twitter_url"
                                            id="twitter_url" value="" placeholder="twitter_url">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label>KENNEL PROFILE PICTURE</label>
                                        <input type="file" class="form-control" id="admin_image" name="admin_image">

                                        <a href="" target="blank"> View Image </a>
                                        <input type="hidden" name="current_admin_image" id="current_admin_image"
                                            value="#">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label>KENNEL FACILITIES PICTURE</label>
                                        <input type="file" class="form-control" id="admin_image" name="admin_image">

                                        <a href="" target="blank"> View Image </a>
                                        <input type="hidden" name="current_admin_image" id="current_admin_image"
                                            value="#">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label>PICTURES OF YOUR DOFS AND / OR PRODUCED PUPPIES <span> (Multiple
                                                Picture)</span></label>
                                        <input type="file" class="form-control" id="recent_img" name="recent_img[]"
                                            multiple="multiple">

                                        <a href="" target="blank"> View Image </a>
                                        <input type="hidden" name="current_admin_image" id="current_admin_image"
                                            value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col text-left">
                                        <button type="button" class="btn btn-secondary mr-2 ">CANCEL</button>
                                    </div>
                                    <div class="col text-right">
                                        <button type="submit" class="btn btn-primary mr-2 ">SAVE</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

                            <div class="col-6">
                                <form class="forms-sample" method="post" action="{{ route('updatePasswordvendor') }}"
                                    name="updatePasswordForm" id="updatePasswordForm">@csrf
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
                                    <div class="form-group row">
                                        <label for="name">Email address</label>
                                        <input type="text" class="form-control" name="email"
                                            id="email"value="{{ $adminDetaiils->email }}" readonly=""
                                            placeholder="name">
                                    </div>

                                    <div class="form-group row">
                                        <label for="current_pwd"> Current Password </label>
                                        <input type="password" class="form-control" name="current_pwd" id="current_pwd"
                                            placeholder="Current Password">
                                    </div>
                                    <div class="form-group row">
                                        <label for="new_pwd"> New Password </label>
                                        <input type="password" class="form-control" name="new_pwd" id="new_pwd"
                                            placeholder="New Password">
                                    </div>
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
                    url: '/vendor/check-current-pwd',
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
                        // alert("Error");
                    }
                });

            });
        });
    </script>
@endpush
