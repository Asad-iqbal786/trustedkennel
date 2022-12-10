<?php

use App\Models\Product;
use App\Models\Admin;

?>

@extends('layouts.admin_app')

@section('main-content')
    <div class="row">
        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xl-3 grid-margin stretch-card ">
            @include('vendors_view.chat.chat_sidebar')
        </div>
        <div class="col-sm-9 col-md-9 col-lg-9 col-xl-9 col-xl-9  grid-margin stretch-card">
            <div class="card">

            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        li.nav-item.profile-details {
            position: relative;
        }

        .profile-time {
            position: relative;
            bottom: 47px;
            left: 78px;
            color: #000000;
        }

        span.aiz-side-nav-text {
            color: #000000;
        }

        .font-weight-medium.message-count {
            position: absolute;
            bottom: 36px;
            left: 100px;
        }

        .sidebar .nav:not(.sub-menu)>.nav-item.active {
            /* border-bottom: 1px solid red; */
            padding-bottom: 3px;
            margin-bottom: 8px;
        }

        li.nav-item.profile-details {
            margin-bottom: 13px;
        }

        .profile-img {
            position: absolute;
            top: 2px;
            /* right: 44px; */
            left: 64px;
            font-weight: bold;
            color: white;
        }
    </style>
@endpush





@push('scripts')
    <script></script>
@endpush
