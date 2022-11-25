<?php

use App\Models\Vendor;
use App\Models\Admin;
use App\Models\OrderLog;
use App\Models\VendorPayment;

?>
@extends('layouts.admin_app')


@section('main-content')
    <div class="aiz-main-content">
        <div class="px-15px px-lg-25px">
            <div class="aiz-titlebar mt-2 mb-4">
                <div class="row align-items-center">
                    <div class="col-md-6">
                    </div>
                </div>
            </div>
            @if (Auth::guard('admin')->user()->type == 'Vendor')
                <div class="row gutters-10">
                    <div class="col-md-4 mb-3 ml-auto">
                        <div class="p-3 rounded mb-3 c-pointer text-center bg-white shadow-sm hov-shadow-lg has-transition"
                            onclick="show_request_modal()">
                            <span
                                class="size-60px rounded-circle mx-auto bg-secondary d-flex align-items-center justify-content-center mb-3">
                                <i class="las la-plus la-3x text-white"></i>
                            </span>
                            <div class="px-3 pt-3 pb-3">
                                <div class="h4 fw-700 text-center">$139.500</div>
                                <div class="opacity-50 text-center">Available Balance</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 ml-auto">
                        <div class="p-3 rounded mb-3 c-pointer text-center bg-white shadow-sm hov-shadow-lg has-transition"
                            onclick="show_request_modal()">
                            <span
                                class="size-60px rounded-circle mx-auto bg-secondary d-flex align-items-center justify-content-center mb-3">
                                <i class="las la-plus la-3x text-white"></i>
                            </span>
                            <div class="px-3 pt-3 pb-3">
                                <div class="h4 fw-700 text-center">$139.500</div>
                                <div class="opacity-50 text-center">Pending Balance</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mr-auto">
                        <div class="p-3 rounded mb-3 c-pointer text-center bg-white shadow-sm hov-shadow-lg has-transition"
                            onclick="show_request_modal()">
                            <span
                                class="size-60px rounded-circle mx-auto bg-secondary d-flex align-items-center justify-content-center mb-3">
                                <i class="las la-plus la-3x text-white"></i>
                            </span>
                            <div class="px-3 pt-3 pb-3">
                                <div class="h4 fw-700 text-center">
                                    <a href=""><i class="mdi mdi-plus-circle" style="font-size: 25px;"></i></a>
                                </div>
                                <div class="opacity-50 text-center" data-toggle="modal" data-target="#exampleModal">Send
                                    Withdraw Request</div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Withdraw request history</h4>
                    <p class="card-description">
                    </p>
                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Kennel Name </th>
                                    <th>MTCN</th>
                                    <th>Payment Type</th>
                                    {{-- <th> Message  </th> --}}
                                    <th>Amount</th>
                                    <th>Receipt</th>
                                    {{-- <th>status</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($western as $index => $req)
                                <?php 
                                // dd($req);
                                ?>
                                    <tr>

                                        <td> {{ $index + 1 }} </td>
                                        <td> {{ $req['vendors'] ['kennel_name'] }} </td>
                                        <td> {{ $req['mtcn'] }} </td>
                                        <td> {{ $req['payment_type'] }} </td>
                                        {{-- <td> {{ $req['message'] }} </td> --}}
                                        <td> {{ $req['amount'] }} </td>
                                        <td> 

                                            <img src="{{asset('storage/admin/images/admin_photos/receipt/'.$req['receipt'])}}" alt="" style="width:50px;">
                                            
                                        </td>
                                        {{-- <td> {{ $req['status'] }} </td> --}}
                                        

                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

  
  
@endsection


@push('styles')
@endpush





@push('scripts')
    <script>
   
    </script>
@endpush
