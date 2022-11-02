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
</style>

<body>
    <div class="container-scroller bg-gradient-info ts-register">
        {{-- <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0"> --}}

        {{-- <div class="row w-100 mx-0">
          <div class="col-lg-6 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo text-center">
                <a href="{{route('frontendHome')}}">
                  <img src="{{asset('admin/images/logo_finale.png')}}" alt="logo">
                </a>
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Register your account in to continue.</h6>
                @if (Session::has('error_message'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{Session::get('error_message')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                @endif
                @if (Session::has('success_message'))
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
              <form  method="POST" action="{{route('newRegister')}}"> @csrf
                <div class="row">
                  <div class="form-group col-6">
                    <label for="first_name">First Name</label>
                    <input id="first_name" type="text" class="form-control" name="first_name" required autofocus>
                  </div>
                  <div class="form-group col-6">
                    <label for="last_name">Last Name</label>
                    <input id="last_name" type="text" class="form-control" required name="last_name">
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

                 <div class="row">
                  <div class="col-6">
                      <div class="form-group">
                          <label for="shop_name">shop_name</label>
                          <input type="text" class="form-control" name="shop_name"  id="return new class extends Migration
                            " value=""  placeholder="shop_name">
                      </div>
                  </div>
                  <div class="col-6">
                      <div class="form-group">
                          <label for="password">shop_owner</label>

                          <input id="text" type="shop_owner" class="form-control" required name="shop_owner" tabindex="2" >
                    
                      </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                      <div class="form-group">
                          <label for="vendor_Affiliation">vendor_Affiliation</label>
                          <input type="text" class="form-control" name="vendor_Affiliation" required id="vendor_Affiliation" value=""  placeholder="vendor_Affiliation">
                      </div>
                  </div>
                  <div class="col-6">
                      <div class="form-group">
                          <label for="registration_number">registration_number</label>

                          <input id="text" type="text" class="form-control" required name="registration_number" tabindex="2" >
                    
                      </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                      <div class="form-group">
                          <label for="vendor_about">vendor_about</label>
                          <input type="text" class="form-control" name="vendor_about" required id="vendor_about" value=""  placeholder="vendor_about">
                      </div>
                  </div>
                  <div class="col-6">
                      <div class="form-group">
                          <label for="established_year">established_year</label>

                          <input id="established_year" type="date"  required class="form-control" name="established_year">
                    
                      </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                      <div class="form-group">
                          <label for="number_of_litters">number_of_litters</label>
                          <input type="number_of_litters" class="form-control" required name="number_of_litters" id="number_of_litters" value=""  placeholder="number_of_litters">
                      </div>
                  </div>
                  <div class="col-6">
                      <div class="form-group">
                          <label for="country">country</label>

                          <input id="country" type="country" class="form-control" required name="country" tabindex="2" >
                    
                      </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                      <div class="form-group">
                          <label for="state">state</label>
                          <input type="state" class="form-control" name="state" required id="state" value=""  placeholder="state">
                      </div>
                  </div>
                  <div class="col-6">
                      <div class="form-group">
                          <label for="city">city</label>

                          <input id="city" type="city" class="form-control" required name="city" tabindex="2" >
                    
                      </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                      <div class="form-group">
                          <label for="helth_check">helth_check</label>
                          <input type="helth_check" class="form-control" required name="helth_check" id="helth_check" value=""  placeholder="helth_check">
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
        </div> --}}




        {{-- </div>
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
                                        <li class="active" id="account"><strong>Account</strong></li>
                                        <li id="personal"><strong>Personal</strong></li>
                                        <li id="payment"><strong>Payment</strong></li>
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
                                            <h2 class="fs-title">Account Information</h2>

                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="kennel_name">KENNEL NAME</label>
                                                        <input type="text" class="form-control" required
                                                            name="kennel_name" id="kennel_name"
                                                            value="{{ old('kennel_name') }}" placeholder="kennel_name">
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
                                                        <label for="location">LOCATION</label>
                                                        <input type="text" class="form-control" required
                                                            name="location" id="location"
                                                            value="{{ old('location') }}" placeholder="location">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="registration_number">KKENNEL REGISTRATION
                                                            NUMBER</label>
                                                        <input type="number" class="form-control" required
                                                            name="registration_number" id="registration_number"
                                                            value="{{ old('registration_number') }}"
                                                            placeholder="registration_number">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="established_year">YEAR ESTABLISHED</label>
                                                        <input type="date" class="form-control" required
                                                            name="established_year"
                                                            value="{{ old('established_year') }}"
                                                            id="established_year" value=""
                                                            placeholder="established_year">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label> BREED(S) </label>

                                                            {{-- <select class=" form-control form-control-lg js-example-basic-multiple" name="breeds[]"  value="{{ old('location') }}" name="" multiple="multiple"> --}}
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
                                                </div>
                                            </div>
                                        </div>
                                        <input type="button" name="next" class="next action-button"
                                            value="Next Step" />
                                    </fieldset>
                                    <fieldset>
                                        <div class="form-card">
                                            <h2 class="fs-title">Personal Information</h2>


                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="owner_First_neame">OWNER FIRST NAME</label>
                                                        <input type="text" class="form-control"
                                                            value="{{ old('owner_First_neame') }}" required
                                                            name="owner_First_neame" id="owner_First_neame"
                                                            value="" placeholder="owner_First_neame">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="owner_last_name">OWNER LAST NAME</label>
                                                        <input type="text" class="form-control"
                                                            value="{{ old('owner_last_name') }}" required
                                                            name="owner_last_name" id="owner_last_name"
                                                            value="" placeholder="owner_last_name">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="email">EMAIL</label>
                                                        <input type="emain" class="form-control"
                                                            value="{{ old('email') }}" required name="email"
                                                            id="email" value="" placeholder="email">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="phone"> PHONE </label>
                                                        <input type="number" class="form-control"
                                                            value="{{ old('phone') }}" required name="phone"
                                                            id="phone" value="" placeholder="phone">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="password">PASSWORD </label>
                                                        <input type="password" class="form-control"
                                                            value="{{ old('password') }}" required name="password"
                                                            id="password" value="" placeholder="password">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="password_confirmation"> CONFIRM PASSWORD </label>
                                                        <input type="password" class="form-control"
                                                            value="{{ old('password') }}" required name="password"
                                                            id="password_confirmation" value=""
                                                            placeholder="password">

                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        <input type="button" name="previous" class="previous action-button-previous"
                                            value="Previous" />
                                        <input type="button" name="next" class="next action-button"
                                            value="Next Step" />
                                    </fieldset>
                                    <fieldset>
                                        <div class="form-card">
                                            <h2 class="fs-title">Payment Information</h2>

                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="vendor_about"> ABOUT YOUR KENNEL </label>
                                                        <textarea name="vendor_about" value="{{ old('vendor_about') }}" id="vendor_about" cols="30" rows="10"></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-group">

                                                        <div class="section-title">AVERAGE NUMBER OF PLANNED LITTERS
                                                            PER YEAR</div>

                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="0"
                                                                value="{{ old('none') }}" name="number_of_litters"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label"
                                                                for="0">0</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio"
                                                                id="1"name="number_of_litters"
                                                                value="{{ old('1') }}"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label" for="1"> 1
                                                            </label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio"
                                                                id="2"name="number_of_litters"
                                                                value="{{ old('2') }}"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label"
                                                                for="2">2</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio"
                                                                id="3"name="number_of_litters"
                                                                value="{{ old('3') }}"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label"
                                                                for="3">3</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio"
                                                                id="4"name="number_of_litters"
                                                                value="{{ old('4') }}"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label" for="4">
                                                                4</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio"
                                                                id="5"name="number_of_litters"
                                                                value="{{ old('5') }}"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label" for="5">
                                                                5</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio"
                                                                id="6"name="number_of_litters"
                                                                value="{{ old('6') }}"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label" for="6">
                                                                6</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio"
                                                                id="7"name="number_of_litters"
                                                                value="{{ old('7') }}"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label" for="7">
                                                                7</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio"
                                                                id="8"name="number_of_litters"
                                                                value="{{ old('8') }}"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label" for="8">
                                                                8</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio"
                                                                id="9"name="number_of_litters"
                                                                value="{{ old('9') }}"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label" for="9">
                                                                9</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio"
                                                                id="more_then_10"name="number_of_litters"
                                                                value="{{ old('more_then_10') }}"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label" for="more_then_10">
                                                                10</label>
                                                        </div>


                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="phone"> HEALTH CHECKS </label>
                                                        <textarea name="health_check" id="health_check" cols="30" rows="5">
                                                          {{ old('health_check') }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="section-title">HOW MANY CHAMPIONS HAVE YOU PRODUCED
                                                            IN THE LAST 5 YEARS</div>

                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio"
                                                                id="none"value="{{ old('none') }}"value="{{ old('location') }}"
                                                                name="how_many_champions"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label"
                                                                for="none">NONE</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio"
                                                                id="1-2"value="{{ old('1-2') }}"
                                                                name="how_many_champions"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label" for="1-2"> 1-2
                                                            </label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio"
                                                                id="3-5"value="{{ old('3-5') }}"
                                                                name="how_many_champions"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label"
                                                                for="3-5">3-5</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio"
                                                                id="6-10"value="{{ old('6-10') }}"
                                                                name="how_many_champions"
                                                                class="custom-control-input">
                                                            <label class="custom-control-label"
                                                                for="6-10">6-10</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
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
                                                        <input type="text" class="form-control"
                                                            value="{{ old('website') }}"required name="website"
                                                            id="website" value="" placeholder="website">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="instagram_url"> INSTAGRAM URL </label>
                                                        <input type="text"
                                                            class="form-control"value="{{ old('instagram_url') }}"required
                                                            name="instagram_url" id="instagram_url" value=""
                                                            placeholder="instagram_url">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="facebook_url"> FACEBOOK URL </label>
                                                        <input type="text"
                                                            class="form-control"value="{{ old('facebook_url') }}"
                                                            required name="facebook_url" id="facebook_url"
                                                            value="" placeholder="facebook_url">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="twitter_url"> TWITTER URL </label>
                                                        <input type="text"
                                                            class="form-control"value="{{ old('twitter_url') }}"
                                                            name="twitter_url" id="twitter_url" value=""
                                                            placeholder="twitter_url">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    {{-- <div class="form-group">
                                                        <label for="admin_image"> KENNEL PROFILE PICTURE </label>
                                                        <input type="file"
                                                            class="form-control" name="admin_image" id="admin_image" value="" placeholder="admin_image">
                                                    </div> --}}
                                                    <div class="form-group">
                                                        <label>Image</label>
                                                        <input type="file" class="form-control" id="admin_image"
                                                            name="admin_image">


                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="recent_img"> A RECENT PICTURE OF YOUR KENNEL
                                                        </label>
                                                        <input type="file"
                                                            class="form-control"value="{{ old('recent_img') }}"
                                                            name="recent_img" id="recent_img" value=""
                                                            placeholder="recent_img">
                                                    </div>
                                                </div>
                                                {{-- <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="multiple_img"> Four (4) PICTURES OF YOUR DOGS
                                                            AND/OR PRODUCED PUPPIES </label>
                                                        <input type="file" class="form-control" name="multiple_img[]"
                                                            id="multiple_img" multiple >
                                                    </div>
                                                </div> --}}
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
                                        {{-- <input type="submit" name="make_payment" class="next action-button" value="Submit"/> --}}
                                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    </fieldset>
                                    {{-- <fieldset>
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
                                    </fieldset> --}}
                                    {{-- <div class="col-6">
                    
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Sire Weight</label>
                                            <div class="col-sm-3">
                                              <div class="form-check">
                                                <label class="form-check-label">
                                                  <input type="radio" class="form-check-input" name="sire_weight" id="Kg" value="Kg" checked="">
                                                  Kg
                                                <i class="input-helper"></i></label>
                                              </div>
                                            </div>
                                            <div class="col-sm-3">
                                              <div class="form-check">
                                                <label class="form-check-label">
                                                  <input type="radio" class="form-check-input" name="sire_weight" id="Lbs" value="Lbs">
                                                  Lbs
                                                <i class="input-helper"></i></label>
                                              </div>
                                            </div>
                                        </div>
                                    </div> --}}
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

            $(document).ready(function() {
                $('.js-example-basic-multiple').select2();
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
