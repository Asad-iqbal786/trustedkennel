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
    <div class="container" style="padding-top: 95px;">
        <div class="page-checkout u-s-p-t-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-flex align-items-stretch">

                        <div class="d w-100">
                            <div class="shipp_heading">
                                <h4 class="section-h4">Billing Details</h4>
                            </div>
                            <form class="pt-5">
                                <div class="form-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label class="control-label col-form-label" for="inputCity">First Name</label>
                                            <input type="text" class="form-control" id="inputCity">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label class="control-label col-form-label" for="inputZip">Last Name</label>
                                            <input type="text" class="form-control" id="inputZip">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label class="control-label col-form-label" for="inputCity">City</label>
                                            <input type="text" class="form-control" id="inputCity">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label class="control-label col-form-label" for="inputState">State</label>
                                            <select id="inputState" class="form-control">
                                                <option selected>Choose...</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label class="control-label col-form-label" for="inputZip">Zip</label>
                                            <input type="text" class="form-control" id="inputZip">
                                        </div>
                                    </div>
                                    <div class="form">
                                        <div class="form-group">
                                            <label class="control-label col-form-label" for="inputCity">Address</label>
                                            <input type="address" class="form-control" id="inputCity">
                                        </div>

                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label class="control-label col-form-label" for="inputCity">Mobile</label>
                                            <input type="address" class="form-control" id="inputCity">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label col-form-label" for="inputCity">Email</label>
                                            <input type="text" class="form-control" id="inputCity">
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button
                                            type="submit"class="btn btn-info rounded-pill px-4  waves-effect waves-light">
                                            Save
                                        </button>
                                        <button
                                            type="submit"class="btn btn-dark rounded-pill px-4 waves-effect waves-light">
                                            Cancel
                                        </button>
                                    </div>
                                </div>
                                <div class="p-3 ">
                                    <div class="action-form">

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-stretch">

                        <div class="card w-100  p-4">
                            <div class="shipp_heading">
                                <h4 class="section-h4"> Your Order </h4>
                            </div>

                            <table class="u-s-m-b-13 mt-4">

                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-bottom">
                                        <td>
                                            <h6 class="order-h6">{{ $getOrder['products']['product_name'] }}</h6>
                                            <span class="order-span-quantity">{{ $getOrder['vendors']['kennel_name'] }}</span>
                                        </td>
                                        <td>
                                            <h6 class="order-h6"> $ {{ $getOrder['products']['price'] }}</h6>
                                        </td>
                                    </tr>

                                    <tr class="border-bottom ">
                                        <td>
                                            <h3 class="order-h3">Shipping</h3>
                                        </td>
                                        <td>
                                            <h3 class="order-h3">${{ $getOrder['products']['shipping_fee'] }}</h3>
                                        </td>
                                    </tr>
                                    @if ($getOrder['tex'] > 0)
                                        <tr class="border-bottom ">
                                            <td>
                                                <h3 class="order-h3">Tax</h3>
                                            </td>
                                            <td>
                                                <h3 class="order-h3">${{ $getOrder['tex'] }}</h3>
                                            </td>
                                        </tr>
                                    @endif

                                    <tr class="border-bottom ">
                                        <td>
                                            <h3 class="order-h3">Total</h3>
                                        </td>
                                        <td>
                                            <h3 class="order-h3">${{ $getOrder['grand_total'] }}</h3>
                                        </td>
                                    </tr>

                                </tbody>

                            </table>
                            <form action="{{route('OrderCreated')}}" method="post">@csrf
                                <input type="hidden" name="order_id" value="{{  $getOrder['id']   }}" id="">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="stripe" name="payment_method" value="stripe"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="stripe">Stripe</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="paypel" name="payment_method" value="paypel"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="paypel">Paypel</label>
                                </div>
                                <button type="submit" class="btn btn-secondary btn-lg btn-block"> Place Order</button>

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
        .page-checkout .section-h4:after {
            /* content: ' ';
                                        border-bottom: 2px solid #d90429;
                                        display: block;
                                        width: 30%;
                                        position: absolute;
                                        top: 52px; */

        }

        h3.order-h3 {
            padding-top: 10px;
            padding-bottom: 10px;
        }

        label {
            font-weight: 600;
            font-size: 14px;
            color: #292929;
        }
    </style>
@endpush




@push('scripts')
@endpush
