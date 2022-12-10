<?php

use App\Models\ChatMessage;
use App\Models\Admin;

?>

@extends('layouts.admin_app')

@section('main-content')
    <div class="row">
        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 grid-margin stretch-card">
            
            @include('vendors_view.chat.chat_sidebar')

        </div>
        <div class="col-sm-9 col-md-9 col-lg-9 col-xl-9 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="chat-meta-user pb-3 border-bottom chat-active">
                        <div class="current-chat-user-name">
                            <span>
                                <img src="{{ asset('admin/assets/img/user.png') }}" alt="user" class="rounded-circle"
                                    alt="dynamic-image" class="rounded-circle" style="width: 50px;  height: 50px;">
                                <span class="name fw-bold ms-2">
                                    {{ $userID['name'] }}
                                </span>
                            </span>
                        </div>
                    </div>
                    <ul>
                        @foreach ($getVendorMessage as $message)
                            @if ($message['type'] == 'User')
                                <li class="mt-4">
                                    <div class="chat-content ps-3 d-inline-block">

                                        <div class="bg-gray-700 box mb-2 d-inline-block text-dark message  p-2  bg-light-info "
                                            style="font-size: 16px;  border-radius: 5px 20px 5px 20px;background-color: #777777; color: #f8f8f8;">
                                            {{ $message['messages'] }}
                                        </div>
                                        <br>
                                        @if (!empty($message['images']))
                                           
                                                <a href="{{ asset('admin/images/admin_photos/chat_images/' . $message['images']) }}" target="_blank">
                                                    {{-- <button class="btn"><i class="fa fa-download"></i> Download File</button> --}}
                                                    <img src="{{ asset('admin/images/admin_photos/chat_images/' . $message['images']) }}"
                                                    alt="" style="width:50px;">
                                                </a>
                                        @endif
                                        <br>
                                    </div>
                                    
                                    <b style="">
                                        <br> {{ date('Y-m-d H:i:s', strtotime($message['created_at'])) }}
                                        <div class="  chat-time d-inline-block text-end fs-2 font-weight-medium"> </div>


                                </li>
                            @else
                                <li class="mt-4 text-right">
                                    <div class="chat-content ps-3 d-inline-block">

                                        <div class="bg-gray-700 box mb-2 d-inline-block text-dark message  p-2  bg-light-info "
                                            style="font-size: 16px;  border-radius: 5px 20px 5px 20px;background-color: #D9FDD3; color: #000000;">
                                            {{ $message['messages'] }}
                                        </div>
                                    </div>
                                    <br>
                                    @if (!empty($message['images']))
                                    <a href="{{ asset('admin/images/admin_photos/chat_images/' . $message['images']) }}" target="_blank">
                                        <img src="{{ asset('admin/images/admin_photos/chat_images/' . $message['images']) }}"
                                        alt="" style="width:50px;">

                                    </a>
                                    @endif
                                    <br>
                                    <b style="">{{ date('Y-m-d H:i:s', strtotime($message['created_at'])) }}</b>
                                    <div class="  chat-time d-inline-block text-end fs-2 font-weight-medium">
                                    </div>

                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                <div class="card-body border-top border-bottom chat-send-message-footer chat-active">
                    <form action="{{ route('vendorReply') }}" method="post" enctype="multipart/form-data"> @csrf
                        <input type="hidden" name="product_id" value="{{ $getCustomer['product_id'] }}">
                        <input type="hidden" name="chat_id" value="{{ $getCustomer['id'] }}">
                        <input type="hidden" name="vendor_id" value="{{ $getCustomer['vendor_id'] }}">
                        <input type="hidden" name="user_id" value="{{ $getCustomer['user_id'] }}">
                        <input type="hidden" name="type" value="Vendor">
                        <div class="row">
                            <div class="col-12">
                                <div class="input-field">
                                    <textarea class="form-control" id="exampleTextarea1" name="messages" rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="images">UPLOAD PICTURE </label>
                                    <input type="file" class="form-control" name="images"
                                        id="images" placeholder="images">
                                </div>
                                {{-- <div class="input-field">
                                    <input id="textarea1" placeholder="Type and hit enter" name="images"
                                        class="message-type-box form-control" type="file" multiple="multiple">
                                </div> --}}
                                <div class="chat-button" style="text-align: end; padding-top: 17px;">
                                    <button type="submit" class="btn btn-info">Send</button>
                                </div>
                            </div>
                        </div>

                    </form>

                </div>
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
            background: #000000;
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
