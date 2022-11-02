<?php

use App\Models\Product;
?>
@extends('layouts.frontend_app')

@section('main-content')
    <header class="header-slider">

        <div class="rd-navbar-wrap">

            @include('frontend.partials.header')

        </div>
        <a class="waypoints-link fa fa-angle-double-down novi-icon" href="#services" data-custom-scroll-to="services"></a>
    </header>

    <div class="page-style-a" style="padding-top: 95px;">
        <div class="container bg-gray-700">
            <div class="page-intro pb-5 pt-5 text-center">
                <h2>Checkout</h2>
                <ul class="bread-crumb">
                    {{-- <li class="has-separator">
                        <i class="ion ion-md-home"></i>
                        <a href="home.html">Home</a>
                    </li>
                    <li class="is-marked">
                        <a href="checkout.html">Checkout</a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </div>
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 align="center">Thanks page <?php
                        
                        // dd($orderDetails); 
                        
                        ?></h3>
                    <hr class="soft">
                    <div align="center">
                        <h3>Your Order Has been placed successfully</h3>
                        <p>Your Order Number is : 99999. and total Payable is Pak :999$ . </p>
                        <p>Please make payment by clicking on below Payment Button</p>
                        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden"name="cmd" value="_xclick">
                            <input type="hidden" name="business" value="sb-oukrj8588706@business.example.com">
                            <input type="hidden" name="currency_code" value="USD">
                            <input type="hidden" name="amount"value="{{$orderDetails['grand_total']}}">
                            <input type="hidden" name="first_name" value="{{$orderDetails['admins']['first_name']}}">
                            <input type="hidden" name="last_name" value="{{$orderDetails['admins']['last_name']}}">
                          
                            <input type="image" name="submit"
                                src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"alt="PayPal - The safer, easier way to pay online">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>

    </style>
@endpush




@push('scripts')
@endpush
