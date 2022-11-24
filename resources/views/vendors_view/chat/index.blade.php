<?php

use App\Models\Product;
use App\Models\Admin;

?>

@extends('layouts.admin_app')

@section('main-content')
    <div class="row">
        <div class="col-sm-3 grid-margin stretch-card">
            @include('vendor.chat.chat_sidebar')
        </div>
        <div class="col-sm-9 col-9 grid-margin stretch-card">
            {{-- <div class="card">
                <div class="card-body">
                    <div class="chat-meta-user pb-3 border-bottom chat-active">
                        <div class="current-chat-user-name">
                            <span>
                                <img src="{{ asset('admin/assets/img/user.png') }}" alt="user" class="rounded-circle"
                                    alt="dynamic-image" class="rounded-circle" style="width: 50px;  height: 50px;">
                                <span class="name fw-bold ms-2">
                                    {{ $userID['name'] }}
                                </span>12
                            </span>
                        </div>
                    </div>
                    <ul>
                        @foreach ($getMessage as $messgge)
                            <li class="mt-4">
                                <div class="chat-content ps-3 d-inline-block">

                                    <div class="bg-gray-700 box mb-2 d-inline-block text-dark message font-weight-medium fs-3 p-2  bg-light-info "
                                        style="border-radius: 5px 20px 5px 20px;background-color: #18c977; color: black;">
                                        {{ $messgge['messages'] }}
                                    </div>
                                </div>
                                <div class="  chat-time d-inline-block text-end fs-2 font-weight-medium">
                                    {{ $messgge['created_at'] }}</div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="card-body border-top border-bottom chat-send-message-footer chat-active">
                        <form action="{{route('vendorReply')}}" method="post"> @csrf
                            <input type="hidden" name="product_id" id="" value="{{$userID['product_id']}}">
                            <input type="hidden" name="vendor_id" id="" value="{{$userID['vendor_id']}}">
                            <input type="hidden" name="user_id" id="" value="{{$userID['user_id']}}">
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
            </div> --}}
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
