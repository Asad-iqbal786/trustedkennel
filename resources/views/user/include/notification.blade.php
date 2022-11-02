cart_invoice<?php  

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
                        <p>user notification page</p>
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
    .widget__content ul {
        border: 1px solid #000000;
    }


</style>
@endpush




@push('scripts')

@endpush
