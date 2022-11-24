<?php

use App\Models\Product;
?>
@extends('layouts.frontend_app')

@section('main-content')
    <header class="header-slider">

        <div class="rd-navbar-wrap">

            @include('frontend.partials.header')


        </div>

    </header>
    <div class="container" style="margin-top: 150px">
        <div class="row">
            <div class="col-3">
                @include('user.include.sidebar')
            </div>
            <div class="col-9">
                <div class="auth-form-light text-left py-5 px-4 px-sm-5">

                    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" style="border-radius: 8px 0px 0px 10px;" id="user-details-tab"
                                data-toggle="pill" href="#user-details" role="tab" aria-controls="user-details"
                                aria-selected="true">Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="border-radius: 0px 10px 10px 0px;" id="user-password-tab"
                                data-toggle="pill" href="#user-password" role="tab" aria-controls="user-password"
                                aria-selected="false">Change Password</a>
                        </li>

                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="user-details" role="tabpanel"
                            aria-labelledby="pills-home-tab">

                            <form method="POST" action=""> @csrf
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="First_name">First name</label>
                                            <input id="First_name" type="text" class="form-control" name="email"
                                                tabindex="1">
                                            <div class="invalid-feedback">
                                                Please fill in your First_name
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="last_name">Last name</label>
                                            <input id="last_name" type="text" class="form-control" name="last_name"
                                                tabindex="1">
                                            <div class="invalid-feedback">
                                                Please fill in your last_name
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="Email">Last name</label>
                                            <input id="Email" type="email" class="form-control" name="email"
                                                tabindex="1">
                                            <div class="invalid-feedback">
                                                Please fill in your Email
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input id="phone" type="number" class="form-control" name="phone"
                                                tabindex="1">
                                            <div class="invalid-feedback">
                                                Please fill in your phone
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="addres">Address</label>
                                            <input id="addres" type="text" class="form-control" name="addres"
                                                tabindex="1">
                                            <div class="invalid-feedback">
                                                Please fill in your addres
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="form-control" name="email" tabindex="1">
                                    <div class="invalid-feedback">
                                        Please fill in your email
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" tabindex="4"> Save
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="user-password" role="tabpanel" aria-labelledby="pills-profile-tab">

                            <form method="POST" action="">@csrf
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
                                        <label for="password" class="control-label">Current Password</label>
                                    </div>
                                    <input id="password" type="password" class="form-control" name="password"
                                        tabindex="2">
                                </div>
                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="password" class="control-label">New Password</label>
                                    </div>
                                    <input id="password" type="password" class="form-control" name="password"
                                        tabindex="2">
                                </div>
                                
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" tabindex="4"> Update  </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('styles')
@endpush




@push('scripts')
@endpush
