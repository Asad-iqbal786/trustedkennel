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
                <div class="row">
                    <div class="col-3">
                        @include('user.include.chat_list')
                    </div>
                    <div class="col-9">
                        <div class="card">
                            <div class="card-body">
                                <div class="chat-meta-user pb-3 border-bottom chat-active">
                                    <div class="current-chat-user-name">
                                        <span>
                                            <img src="{{ asset('admin/assets/img/user.png') }}" alt="user"
                                                class="rounded-circle" alt="dynamic-image" class="rounded-circle"
                                                style="width: 50px;  height: 50px;">
                                            <span class="name fw-bold ms-2">
                                                {{ $vendChat['users']['name'] }}
                                                ({{ $vendChat['users']['email'] }})
                                            </span>12
                                        </span>
                                    </div>
                                </div>
                                <ul>

                                    @foreach ($getChat as $message)
                                    <?php   
                                    
                                        // dd($message['type']);
                                    
                                    ?>
                                        @if ($message['type'] == 'Vendor')
                                            <li class="mt-4">
                                                <div class="chat-content ps-3 d-inline-block">

                                                    <div class="bg-gray-700 box mb-2 d-inline-block text-dark message  p-2  bg-light-info "
                                                        style="font-size: 16px;  border-radius: 5px 20px 5px 20px;background-color: #005092; color: rgb(255, 255, 255);">
                                                        {{ $message['messages'] }}
                                                    </div>
                                                </div>
                                                <b style="font-size: 8px;"> <br> {{ $message['created_at'] }}
                                                    <div
                                                        class="  chat-time d-inline-block text-end fs-2 font-weight-medium">

                                                    </div>
                                            </li>
                                        @else
                                            <li class="mt-4 text-right">
                                                <div class="chat-content ps-3 d-inline-block">

                                                    <div class="bg-gray-700 box mb-2 d-inline-block text-dark message  p-2  bg-light-info "
                                                        style="font-size: 16px;  border-radius: 5px 20px 5px 20px;background-color: #c94a18; color: rgb(255, 255, 255);">
                                                        {{ $message['messages'] }}

                                                    </div>
                                                </div>
                                                <br>
                                                <b style="font-size: 8px;">{{ $message['created_at'] }}</b>
                                                <div class="  chat-time d-inline-block text-end fs-2 font-weight-medium">
                                                </div>
                                            </li>
                                        @endif

                                        {{-- <li class="mt-4">
                                            <div class="chat-content ps-3 d-inline-block">

                                                <div class="bg-gray-700 box mb-2 d-inline-block text-dark message font-weight-medium fs-3 p-2  bg-light-info "
                                                    style="border-radius: 5px 20px 5px 20px;background-color: #18c977; color: black;">
                                                   {{$message['messages']}}
                                                </div>
                                            </div>
                                            <div class="  chat-time d-inline-block text-end fs-2 font-weight-medium"> 10:56
                                                am </div>
                                        </li> --}}
                                    @endforeach

                                </ul>
                            </div>
                            <div class="card-body border-top border-bottom chat-send-message-footer chat-active">
                                
                                <form action="{{ route('customerReply') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="product_id" id=""
                                        value="{{ $vendChat['product_id'] }}">
                                        <input type="hidden" name="type" id=""
                                        value="User">
                                    <input type="hidden" name="chat_id" id="" value="{{ $vendChat['id'] }}">
                                    <input type="hidden" name="vendor_id" id=""
                                        value="{{ $vendChat['vendor_id'] }}">
                                    <input type="hidden" name="user_id" id="" value="{{ $vendChat['user_id'] }}">
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
            </div>
        </div>
    </div>
@endsection

@push('styles')
@endpush




@push('scripts')
    <script></script>
@endpush
