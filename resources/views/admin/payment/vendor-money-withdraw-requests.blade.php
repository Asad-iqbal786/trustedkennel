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
                                    <th> Date </th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    @if (Auth::guard('admin')->user()->type != 'Vendor')
                                        <th> Vendor Email </th>
                                        <th>Action</th>
                                    @endif

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($withdReq as $index => $req)
                                    <tr>

                                        <td> {{ $index + 1 }} </td>
                                        <td>{{ $req['amount'] }}</td>
                                        @if (Auth::guard('admin')->user()->type != 'Vendor')
                                        @endif


                                        <td>{{ $req['message'] }}</td>
                                        <td><span class="badge badge-inline badge-info">{{ $req['status'] }}</span></td>

                                        @if (Auth::guard('admin')->user()->type != 'Vendor')
                                            <td> {{ $req['admins']['email'] }} </td>
                                            <td>
                                                <a href="" target="blank" data-toggle="modal"
                                                    data-target="#withdrawRequest-{{ $req['id'] }}"><i
                                                        class="mdi mdi-eye" style="font-size: 25px;"></i></a>
                                                <a href=""><i class="mdi mdi-cash-multiple"
                                                        style="font-size: 25px;"></i></a>
                                                <a href=""><i class="mdi mdi-file-excel-box"
                                                        style="font-size:20px;"></i></a>
                                            </td>
                                        @endif

                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Send A Withdraw Request </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('withdrawRequestStore') }}" method="post">@csrf
                    <div class="modal-body gry-bg px-3 pt-3">
                        <div class="row">
                            <div class="col-md-3">
                                <label>Amount <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-md-9">
                                <input type="number" lang="en" class="form-control mb-3" name="amount" min=""
                                    max="4000" placeholder="Amount" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label>Message</label>
                            </div>
                            <div class="col-md-9">
                                <textarea name="message" rows="8" class="form-control mb-3"></textarea>
                            </div>
                        </div>
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-sm btn-primary">Send</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    @foreach ($withdReq as $index => $req)
      
        <div class="modal fade" id="withdrawRequest-{{ $req['id'] }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"> Send A Withdraw Request {{ $req['id'] }} </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php
                            $vendorPya = VendorPayment::where('admin_id', $req['admin_id'])->first();
                    ?>
                            <?php
                                    
                            // dd($req);
                            ?>
                    <div class="modal-body">
                        <table class="table table-striped table-bordered">
                            <tbody>
                                <tr>
                                    <td>Due to seller</td>
                                    <td>${{$req['amount']}}</td>
                                </tr>
                                <tr>
                                </tr>
                                <tr>
                                    <td>Bank Name</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Bank Account Name</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Bank Account Number</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Bank Routing Number</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>

                        <input type="hidden" name="shop_id" value="2">
                        <input type="hidden" name="payment_withdraw" value="withdraw_request">
                        <input type="hidden" name="withdraw_request_id" value="5">
                        <div class="form-group row pt-4">
                            <label class="col-sm-3 col-from-label" for="amount">Requested Amount</label>
                            <div class="col-sm-9">
                                <input type="number" lang="en" min="0" step="0.01" name="amount"
                                    id="amount" value="10" class="form-control" required="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-from-label" for="payment_option">Payment method</label>
                            <div class="col-sm-9">
                                <select name="payment_option" id="payment_option"
                                    class="form-control demo-select2-placeholder" required="">
                                    <option value="">Select Payment Method</option>
                                    <option value="cash">Cash</option>
                                    <option value="bank_payment">Bank Payment</option>
                                </select>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    @endforeach
@endsection


@push('styles')
@endpush





@push('scripts')
@endpush
