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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('admin/images/favicon.png') }}" />

</head>
<style>
    .select2-container--default .select2-selection--single {
        background-color: #fff;
        border: 1px solid #aaa;
        border-radius: 8px;
        height: 44px;
    }


    /*Background color*/
    #grad1 {
        background-color: : #9C27B0;
        background-image: linear-gradient(120deg, #FF4081, #81D4FA);
    }

    .select2-container--default .select2-selection--multiple .select2-selection__choice__display {
        cursor: default;
        padding-left: 6px;
        padding-right: 5px;
        font-size: 0.875rem;
    }

    /*form styles*/
    #msform {
        text-align: center;
        position: relative;
        margin-top: 20px;
    }

    #msform fieldset .form-card {
        background: white;
        border: 0 none;
        border-radius: 0px;
        box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
        padding: 20px 40px 30px 40px;
        box-sizing: border-box;
        width: 94%;
        margin: 0 3% 20px 3%;

        /*stacking fieldsets above each other*/
        position: relative;
    }

    #msform fieldset {
        background: white;
        border: 0 none;
        border-radius: 0.5rem;
        box-sizing: border-box;
        width: 100%;
        margin: 0;
        padding-bottom: 20px;

        /*stacking fieldsets above each other*/
        position: relative;
    }

    /*Hide all except first fieldset*/
    #msform fieldset:not(:first-of-type) {
        display: none;
    }

    #msform fieldset .form-card {
        text-align: left;
        color: #9E9E9E;
    }

    #msform input,
    #msform textarea {
        padding: 0px 8px 4px 8px;
        border: none;
        border-bottom: 1px solid #ccc;
        border-radius: 0px;
        margin-bottom: 25px;
        margin-top: 2px;
        width: 100%;
        box-sizing: border-box;
        font-family: montserrat;
        color: #2C3E50;
        font-size: 16px;
        letter-spacing: 1px;
    }

    #msform input:focus,
    #msform textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: none;
        font-weight: bold;
        border-bottom: 2px solid skyblue;
        outline-width: 0;
    }

    /*Blue Buttons*/
    #msform .action-button {
        width: 100px;
        background: skyblue;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px;
    }

    #msform .action-button:hover,
    #msform .action-button:focus {
        box-shadow: 0 0 0 2px white, 0 0 0 3px skyblue;
    }

    /*Previous Buttons*/
    #msform .action-button-previous {
        width: 100px;
        background: #616161;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px;
    }

    #msform .action-button-previous:hover,
    #msform .action-button-previous:focus {
        box-shadow: 0 0 0 2px white, 0 0 0 3px #616161;
    }

    /*Dropdown List Exp Date*/
    select.list-dt {
        border: none;
        outline: 0;
        border-bottom: 1px solid #ccc;
        padding: 2px 5px 3px 5px;
        margin: 2px;
    }

    select.list-dt:focus {
        border-bottom: 2px solid skyblue;
    }

    /*The background card*/
    .card {
        z-index: 0;
        border: none;
        border-radius: 0.5rem;
        position: relative;
    }

    /*FieldSet headings*/
    .fs-title {
        font-size: 25px;
        color: #2C3E50;
        margin-bottom: 10px;
        font-weight: bold;
        text-align: left;
    }

    /*progressbar*/
    #progressbar {
        margin-bottom: 30px;
        overflow: hidden;
        color: lightgrey;
    }

    #progressbar .active {
        color: #000000;
    }

    #progressbar li {
        list-style-type: none;
        font-size: 12px;
        width: 25%;
        float: left;
        position: relative;
    }

    /*Icons in the ProgressBar*/
    #progressbar #account:before {
        font-family: FontAwesome;
        content: "\f023";
    }

    #progressbar #personal:before {
        font-family: FontAwesome;
        content: "\f007";
    }

    #progressbar #payment:before {
        font-family: FontAwesome;
        content: "\f09d";
    }

    #progressbar #confirm:before {
        font-family: FontAwesome;
        content: "\f00c";
    }

    /*ProgressBar before any progress*/
    #progressbar li:before {
        width: 50px;
        height: 50px;
        line-height: 45px;
        display: block;
        font-size: 18px;
        color: #ffffff;
        background: lightgray;
        border-radius: 50%;
        margin: 0 auto 10px auto;
        padding: 2px;
    }

    /*ProgressBar connectors*/
    #progressbar li:after {
        content: '';
        width: 100%;
        height: 2px;
        background: lightgray;
        position: absolute;
        left: 0;
        top: 25px;
        z-index: -1;
    }

    /*Color number of the step and the connector before it*/
    #progressbar li.active:before,
    #progressbar li.active:after {
        background: skyblue;
    }

    /*Imaged Radio Buttons*/
    .radio-group {
        position: relative;
        margin-bottom: 25px;
    }

    .radio {
        display: inline-block;
        width: 204;
        height: 104;
        border-radius: 0;
        background: lightblue;
        box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
        box-sizing: border-box;
        cursor: pointer;
        margin: 8px 2px;
    }

    .radio:hover {
        box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3);
    }

    .radio.selected {
        box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1);
    }

    /*Fit image in bootstrap div*/
    .fit-image {
        width: 100%;
        object-fit: cover;
    }

    .ts-register {
        background-image: url(http://127.0.0.1:8000/website/images/slider-01-2048x1000.jpg);
    }
    .form-group {
       
        font-weight: 900;
        color: black;
    }
    .select2-container {
        box-sizing: border-box;
        display: inline-block;
        margin: 0;
        position: relative;
        vertical-align: middle;
    }
</style>

<body>
    <div class="container-scroller bg-gradient-info ts-register">
        {{-- <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">

                <div class="row w-100 mx-0">
                    <div class="col-lg-6 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo text-center">
                                <a href="{{ route('frontendHome') }}">
                                    <img src="{{ asset('admin/images/logo_finale.png') }}" alt="logo">
                                </a>
                            </div>
                            <h4>Hello! let's get started</h4>
                            <h6 class="font-weight-light">Register your account in to continue.</h6>
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
                            <form method="POST" action="{{ route('newRegister') }}"> @csrf
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="first_name">First Name</label>
                                        <input id="first_name" type="text" class="form-control" name="first_name"
                                            required autofocus>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="last_name">Last Name</label>
                                        <input id="last_name" type="text" class="form-control" required
                                            name="last_name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="form-control" required name="email">
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" required name="password"
                                                id="password" value="" placeholder="password">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="password">Confirm Password</label>

                                            <input id="password_confirmation" type="password" required
                                                class="form-control" name="password_confirmation" tabindex="2">

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="shop_name">shop_name</label>
                                            <input type="text" class="form-control" name="shop_name"
                                                id="return new class extends Migration
                                    "
                                                value="" placeholder="shop_name">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="password">shop_owner</label>

                                            <input id="text" type="shop_owner" class="form-control" required
                                                name="shop_owner" tabindex="2">

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="vendor_Affiliation">vendor_Affiliation</label>
                                            <input type="text" class="form-control" name="vendor_Affiliation"
                                                required id="vendor_Affiliation" value=""
                                                placeholder="vendor_Affiliation">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="registration_number">registration_number</label>

                                            <input id="text" type="text" class="form-control" required
                                                name="registration_number" tabindex="2">

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="about">about</label>
                                            <input type="text" class="form-control" name="about" required
                                                id="about" value="" placeholder="about">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="established_year">established_year</label>

                                            <input id="established_year" type="date" required class="form-control"
                                                name="established_year">

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="number_of_litters">number_of_litters</label>
                                            <input type="number_of_litters" class="form-control" required
                                                name="number_of_litters" id="number_of_litters" value=""
                                                placeholder="number_of_litters">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="country">country</label>

                                            <input id="country" type="country" class="form-control" required
                                                name="country" tabindex="2">

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="state">state</label>
                                            <input type="state" class="form-control" name="state" required
                                                id="state" value="" placeholder="state">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="city">city</label>

                                            <input id="city" type="city" class="form-control" required
                                                name="city" tabindex="2">

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="helth_check">helth_check</label>
                                            <input type="helth_check" class="form-control" required
                                                name="helth_check" id="helth_check" value=""
                                                placeholder="helth_check">
                                        </div>
                                    </div>
                                    <div class="col-6">


                                        <div class="form-group">
                                            <label for="helth_check">Vendor Type</label>

                                            <select class="" name="vendor_type" id="vendor_type">
                                                <option value="">-- Select Vendor Type--</option>
                                                <option value="not_for_selling">No Selling Just Create Shop</option>
                                                <option value="for_selling">For Selling</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>



                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="agree" class="custom-control-input"
                                            id="agree">
                                        <label class="custom-control-label" for="agree">I agree with the terms and
                                            conditions</label>
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
        </div> --}}
        <div class="container">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                        <h2 class="text-center"><strong>KENNEL REGISTRATION REQUEST</strong></h2>
                        <div class="row">
                            <div class="col-md-12 mx-0">
                                <form id="msform" method="post" action="{{ route('newRegister') }}"
                                    enctype="multipart/form-data">@csrf

                                    <ul id="progressbar">
                                        <li class="active" id="payment"><strong>OWNER</strong></li>
                                        <li id="personal"><strong>KENNEL</strong></li>
                                        {{-- <li id="payment"><strong>Payment</strong></li> --}}
                                        <li id="confirm"><strong>Finish</strong></li>
                                    </ul>
                                    @if (Session::has('records_submited_succesfully'))
                                        <fieldset>
                                            <div class="form-card">
                                                <h2 class="fs-title text-center">Success !</h2>
                                                <br><br>
                                                <div class="row justify-content-center">
                                                    <div class="col-3">
                                                        <img src="https://img.icons8.com/color/96/000000/ok--v2.png"
                                                            class="fit-image">
                                                    </div>
                                                </div>
                                                <br><br>
                                                <div class="row justify-content-center">
                                                    <div class="col-7 text-center">
                                                        <h5>You Have Successfully Signed Up</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    @endif
                                    <fieldset>
                                        <div class="erros m-4">

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

                                        </div>
                                        <div class="form-card">
                                            <h2 class="fs-title">Owner Information</h2>


                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="first_name"> FIRST NAME </label>
                                                        <input type="text" class="form-control"
                                                            value="{{ old('first_name') }}" required name="first_name"
                                                            id="first_name" value="" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-group col-6">
                                                    <label for="last_name">LAST NAME</label>
                                                    <input id="last_name" type="text" class="form-control" required
                                                        name="last_name">
                                                </div>

                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="email">EMAIL</label>
                                                        <input type="emain" class="form-control"
                                                            value="{{ old('email') }}" required name="email"
                                                            id="email" value="" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="phone"> PHONE NUMBER </label>
                                                        <input type="number" class="form-control"
                                                            value="{{ old('phone') }}" required name="phone"
                                                            id="phone" value="" placeholder="">
                                                    </div>
                                                </div>
                                               
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="password">PASSWORD </label>

                                                        <input type="password" class="form-control"
                                                            value="{{ old('password') }}" required name="password"
                                                            id="id_password" value="" placeholder="">
                                                        <i class="fa fa-eye" id="togglePassword"
                                                            style="position: absolute; top: 42px;right: 27px;"></i>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="password_confirmation"> CONFIRM PASSWORD </label>
                                                        <input type="password" class="form-control"
                                                            value="{{ old('password') }}" required
                                                            name="password_confirmation" id="id_passwords"
                                                            value="" placeholder="">
                                                    </div>
                                                </div>
                                                
                                            </div>

                                        </div>
                                        <input type="button" name="next" class="next action-button"
                                            value="Next Step" />
                                    </fieldset>
                                    {{-- <fieldset>
                                        
                                        <input type="button" name="previous" class="previous action-button-previous"
                                            value="Previous" />
                                        <input type="button" name="next" class="next action-button"
                                            value="Next Step" />
                                    </fieldset> --}}
                                    <fieldset>
                                        <div class="form-card">
                                            <h2 class="fs-title">Kennel Information</h2>

                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="kennel_name">KENNEL NAME</label>
                                                        <input type="text" class="form-control" required
                                                            name="kennel_name" id="kennel_name"
                                                            value="{{ old('kennel_name') }}"
                                                            placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="registration_number">KENNEL REGISTRATION
                                                            NUMBER</label>

                                                        <input id="text" type="text" class="form-control"
                                                            required name="registration_number" tabindex="2" required>

                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label>SELECT BREEDS </label>
                                                        <select class="form-control js-example-basic-multiple" name="breeds[]" required multiple="multiple">
                                                        <option>--Select Breeds--</option>
                                                        @foreach ($getCat as $item)

                                                            <option value=" {{ $item['id'] }}"> {{ $item['name'] }}</option>
                                                            
                                                        @endforeach

                                                    </select>
                                                    </div>
                                                </div>
                                               
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label> KENNEL AFFILIATIONS </label>
                                                        <select class="form-control form-control-lg"
                                                            name="kennel_affiliations">
                                                            <option>AKC</option>
                                                            <option>CKC</option>
                                                            <option>FCI</option>
                                                            <option>KC</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="city">CITY</label>
                                                        <input type="text" class="form-control" required
                                                            name="city" id="city"
                                                            value="{{ old('city') }}" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="state">STATE/PROVINCE</label>
                                                        <input type="text" class="form-control" required
                                                            name="state" id="state"
                                                            value="{{ old('state') }}" placeholder="">
                                                    </div>
                                                </div>

                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="country">COUNTRY</label>
                                                        <input type="text" class="form-control" required
                                                            name="country" id="country"
                                                            value="{{ old('country') }}" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="established_year">YEAR ESTABLISHED</label>
                                                        <input type="date" min="1900" max="2099"
                                                            step="1" value="2023" class="form-control"
                                                            name="established_year" id="established_year" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="about"> ABOUT YOUR KENNEL </label>
                                                        <textarea name="about" value="{{ old('about') }}" required id="about" cols="30" rows="10"></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-group">

                                                        <div class="section-title">AVERAGE NUMBER OF PLANNED LITTERS
                                                            PER YEAR</div>

                                                        <div class="custom-control custom-radio custom-control-inline mr-4">
                                                            <input type="radio" id="0"
                                                                value="{{ old('none') }}" name="number_of_litters"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label"
                                                                for="0">0</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline mr-4">
                                                            <input type="radio"
                                                                id="1"name="number_of_litters"
                                                                value="{{ old('1') }}"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label" for="1"> 1
                                                            </label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline mr-4">
                                                            <input type="radio"
                                                                id="2"name="number_of_litters"
                                                                value="{{ old('2') }}"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label"
                                                                for="2">2</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline mr-4">
                                                            <input type="radio"
                                                                id="3"name="number_of_litters"
                                                                value="{{ old('3') }}"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label"
                                                                for="3">3</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline mr-4">
                                                            <input type="radio"
                                                                id="4"name="number_of_litters"
                                                                value="{{ old('4') }}"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label" for="4">
                                                                4</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline mr-4">
                                                            <input type="radio"
                                                                id="5"name="number_of_litters"
                                                                value="{{ old('5') }}"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label" for="5">
                                                                5</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline mr-4">
                                                            <input type="radio"
                                                                id="6"name="number_of_litters"
                                                                value="{{ old('6') }}"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label" for="6">
                                                                6</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline mr-4">
                                                            <input type="radio"
                                                                id="7"name="number_of_litters"
                                                                value="{{ old('7') }}"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label" for="7">
                                                                7</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline mr-4">
                                                            <input type="radio"
                                                                id="8"name="number_of_litters"
                                                                value="{{ old('8') }}"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label" for="8">
                                                                8</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline mr-4">
                                                            <input type="radio"
                                                                id="9"name="number_of_litters"
                                                                value="{{ old('9') }}"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label" for="9">
                                                                9</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline mr-4">
                                                            <input type="radio"
                                                                id="more_then_10"name="number_of_litters"
                                                                value="{{ old('10 OR MORE') }}"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label" for="more_then_10">
                                                                10 OR MORE</label>
                                                        </div>


                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="phone"> HEALTH CHECKS </label>
                                                        <textarea name="health_check" required id="health_check" cols="30" rows="5">
                                                          {{ old('health_check') }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="section-title">HOW MANY CHAMPIONS HAVE YOU PRODUCED
                                                            IN THE LAST 5 YEARS</div>

                                                        <div class="custom-control custom-radio custom-control-inline mr-4">
                                                            <input type="radio"
                                                                id="none"value="{{ old('none') }}"value="{{ old('location') }}"
                                                                name="how_many_champions"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label"
                                                                for="none">NONE</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline mr-4">
                                                            <input type="radio"
                                                                id="1-2"value="{{ old('1-2') }}"
                                                                name="how_many_champions"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label" for="1-2"> 1-2
                                                            </label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline mr-4">
                                                            <input type="radio"
                                                                id="3-5"value="{{ old('3-5') }}"
                                                                name="how_many_champions"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label"
                                                                for="3-5">3-5</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline mr-4">
                                                            <input type="radio"
                                                                id="6-10"value="{{ old('6-10') }}"
                                                                name="how_many_champions"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label"
                                                                for="6-10">6-10</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline mr-4">
                                                            <input type="radio"
                                                                id="more_then"value="{{ old('more_then_10') }}"
                                                                name="how_many_champions"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label" for="more_then">
                                                                MORE THAN 10</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="website"> WEBSITE </label>
                                                        <input type="url" class="form-control"
                                                            value="{{ old('website') }}" required name="website"
                                                            id="website" value="" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="instagram_url"> INSTAGRAM URL </label>
                                                        <input type="url"
                                                            class="form-control"value="{{ old('instagram_url') }}"
                                                            name="instagram_url" required id="instagram_url" value=""
                                                            placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="facebook_url"> FACEBOOK URL </label>
                                                        <input type="url"
                                                            class="form-control"value="{{ old('facebook_url') }}"
                                                            name="facebook_url" required id="facebook_url" value=""
                                                            placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="twitter_url"> TWITTER URL </label>
                                                        <input type="url"
                                                            class="form-control"value="{{ old('twitter_url') }}"
                                                            name="twitter_url" required id="twitter_url" value=""
                                                            placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label>PROFILE PICTURE</label>
                                                        <input type="file" class="form-control" id="image"
                                                            name="image">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="recent_img">Four (4) PICTURES OF YOUR DOGS AND/OR PRODUCED PUPPIES</label>
                                                        <input type="file" class="form-control"
                                                            name="recent_img[]" id="recent_img"multiple="">
                                                    </div>
                                                </div>
                                                <div class="col-6">

                                                    <div class="form-group">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="agree"
                                                                value="{{ old('loagreecation') }}"
                                                                class="custom-control-input" id="agree">
                                                            <label class="custom-control-label" for="agree">I agree
                                                                with the terms and conditions</label>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                        <input type="button" name="previous" class="previous action-button-previous"
                                            value="Previous" />
                                        <input type="submit" class="next action-button" value="Submit"/>
                                        {{-- <button type="submit" class="btn btn-primary mr-2">Submit</button> --}}
                                    </fieldset>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>

        </div>
    </div>
    <!-- container-scroller -->
    <script src="{{ asset('admin/vendors/js/vendor.bundle.base.js') }}"></script>

    <!-- inject:js -->
    <script src="{{ asset('admin/js/off-canvas.js') }}"></script>
    <script src="{{ asset('admin/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('admin/js/template.js') }}"></script>
    <script src="{{ asset('admin/js/settings.js') }}"></script>
    <script src="{{ asset('admin/js/todolist.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            // In your Javascript (external .js resource or <script> tag)
            // $(document).ready(function() {
            //     $('.js-example-basic-single').select2();
            // });

            $('.js-example-basic-multiple').select2();


            const togglePassword = document.querySelector('#togglePassword');
            const password = document.querySelector('#id_password');

            togglePassword.addEventListener('click', function(e) {
                // toggle the type attribute
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
                // toggle the eye slash icon
                this.classList.toggle('fa-eye-slash');
            });







            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;

            $(".next").click(function() {

                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 600
                });
            });

            $(".previous").click(function() {

                current_fs = $(this).parent();
                previous_fs = $(this).parent().prev();

                //Remove class active
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                //show the previous fieldset
                previous_fs.show();

                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        previous_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 600
                });
            });

            $('.radio-group .radio').click(function() {
                $(this).parent().find('.radio').removeClass('selected');
                $(this).addClass('selected');
            });

            $(".submit").click(function() {
                return false;
            })

        });
    </script>
</body>

</html>
