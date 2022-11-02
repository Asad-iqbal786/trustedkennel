<?php  

use App\Models\Product;
?>
@extends('layouts.frontend_app')

@section('main-content')

<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="blog-single.html">Shop Details</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
  </div>
  
  <main class="ps-page--my-account">
    
    <section class="ps-section--account pt-5 pb-5">
        <div class="container">
            <div class="row">
             @include('user.include.user-menu')
                <div class="col-lg-8">
                    <div class="ps-section__right">
                        <form class="ps-form--account-setting" action="http://nouthemes.net/html/martfury/index.html" method="get">
                            <div class="ps-form__header">
                                <h3> User Information</h3>
                            </div>
                            <div class="ps-form__content">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" type="text" placeholder="Please enter your name...">
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input class="form-control" type="text" placeholder="Please enter phone number...">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" type="text" placeholder="Please enter your email...">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Birthday</label>
                                            <input class="form-control" type="text" placeholder="Please enter your birthday...">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select class="form-control">
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                                <option value="3">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group submit">
                                <button class="ps-btn">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
</main>



@endsection

@push('styles')
<style>
    .ps-widget--account-dashboard .ps-widget__header {
        display: flex;
        flex-flow: row nowrap;
        justify-content: space-between;
        align-items: flex-start;
        padding-bottom: 20px;
    }
    .ps-widget--account-dashboard .ps-widget__content ul li.active {
        background-color: #2f2dc1;
    }
    .ps-widget--account-dashboard .ps-widget__content ul li.active a {
        color: #fff;
    }
    .ps-widget--account-dashboard .ps-widget__content ul li a {
        display: block;
        padding: 15px 20px;
        line-height: 20px;
        font-size: 16px;
        font-weight: 500;
        color: #000;
        text-transform: capitalize;
    }


</style>
@endpush




@push('scripts')

@endpush
