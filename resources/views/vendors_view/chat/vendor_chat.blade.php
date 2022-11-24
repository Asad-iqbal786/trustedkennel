<?php

use App\Models\ChatMessage;
use App\Models\Admin;

?>

@extends('layouts.admin_app')

@section('main-content')
    <div class="row">
        <div class="col-sm-3 grid-margin stretch-card">
            @include('vendor.chat.chat_sidebar')
        </div>
        <div class="col-sm-9 col-9 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="chat-meta-user pb-3 border-bottom chat-active">
                        <div class="current-chat-user-name">
                            <span>
                                <img src="{{ asset('admin/assets/img/user.png') }}" alt="user" class="rounded-circle"
                                    alt="dynamic-image" class="rounded-circle" style="width: 50px;  height: 50px;">
                                <span class="name fw-bold ms-2">
                                    {{ $userID['name'] }}
                                    ({{ $userID['email'] }})
                                </span>
                            </span>
                        </div>
                    </div>
                    <ul>
                        @foreach ($getVendorMessage as $message)

                        @if ( $message['type'] == "User")
                              <li class="mt-4">
                                <div class="chat-content ps-3 d-inline-block">

                                    <div class="bg-gray-700 box mb-2 d-inline-block text-dark message  p-2  bg-light-info "
                                        style="font-size: 16px;  border-radius: 5px 20px 5px 20px;background-color: #18c977; color: rgb(255, 255, 255);" >
                                        {{ $message['messages'] }} 
                                    </div>
                                </div>
                                <b style="font-size: 8px;"> <br>  {{ $message['created_at'] }}
                                <div class="  chat-time d-inline-block text-end fs-2 font-weight-medium">
                                 
                                </div>
                            </li>
                        @else
                              <li class="mt-4 text-right">
                                <div class="chat-content ps-3 d-inline-block">

                                    <div class="bg-gray-700 box mb-2 d-inline-block text-dark message  p-2  bg-light-info "
                                        style="font-size: 16px;  border-radius: 5px 20px 5px 20px;background-color: #c94a18; color: rgb(255, 255, 255);" >
                                        {{ $message['messages'] }} 
                                     
                                    </div>
                                </div>
                                <br>
                                <b style="font-size: 8px;">{{ $message['created_at'] }}</b>
                                <div class="  chat-time d-inline-block text-end fs-2 font-weight-medium">
                                    </div>
                            </li>
                        @endif
                          
                        @endforeach
                    </ul>
                </div>
                <div class="card-body border-top border-bottom chat-send-message-footer chat-active">
                        <form action="{{route('vendorReply')}}" method="post"> @csrf
                            <input type="hidden" name="product_id" id="" value="{{$getCustomer['product_id']}}">
                            <input type="hidden" name="chat_id" id="" value="{{$getCustomer['id']}}">
                            <input type="hidden" name="vendor_id" id="" value="{{$getCustomer['vendor_id']}}">
                            <input type="hidden" name="user_id" id="" value="{{$getCustomer['user_id']}}">
                            <input type="hidden" name="type" id="" value="Vendor">
                            <div class="row">
                                <div class="col-12">
                                    <div class="input-field">
                                        <input id="textarea1" placeholder="Type and hit enter" name="messages"
                                            class="message-type-box form-control" type="text">
                                    </div>
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

        .profile-img {
            position: absolute;
            top: 4px;
            /* right: 44px; */
            left: 79px;
        }
    </style>
@endpush





@push('scripts')
    <script></script>
@endpush
