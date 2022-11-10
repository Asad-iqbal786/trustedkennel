<?php

use App\Models\Vendor;
use App\Models\Admin;
use App\Models\OrderLog;

?>
@extends('layouts.admin_app')


@section('main-content')
    <div class="aiz-main-content">
        <div class="px-15px px-lg-25px">
            <div class="aiz-titlebar mt-2 mb-4">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1 class="h3">Manage Profile</h1>
                    </div>
                </div>
            </div>
            <form
                @if (empty($paymentType['id'])) action="{{ url('vendor/add-edit-vendor-payments') }}"
            @else
                action="{{ url('vendor/add-edit-vendor-payments', $paymentType['id']) }}" @endif
                method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">Payment Setting</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <label class="col-md-3 col-form-label" for="bank_name">Bank Name</label>
                            <div class="col-md-9">
                                <input type="text" name="bank_name"
                                    @if (!empty($paymentType['bank_name'])) value="{{ $paymentType['bank_name'] }}" @else value="{{ old('bank_name') }}" @endif
                                    id="bank_name" class="form-control mb-3" placeholder="Bank Name">
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-3 col-form-label" for="bank_acc_name">Bank Account Name</label>
                            <div class="col-md-9">
                                <input type="text" name="bank_acc_name"
                                    @if (!empty($paymentType['bank_acc_name'])) value="{{ $paymentType['bank_acc_name'] }}" @else value="{{ old('bank_acc_name') }}" @endif
                                    id="bank_acc_name" class="form-control mb-3" placeholder="Bank Account Name">
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-3 col-form-label" for="bank_acc_no">Bank Account Number</label>
                            <div class="col-md-9">
                                <input type="text" name="bank_acc_no"
                                    @if (!empty($paymentType['bank_acc_no'])) value="{{ $paymentType['bank_acc_no'] }}" @else value="{{ old('bank_acc_no') }}" @endif
                                    id="bank_acc_no" class="form-control mb-3" placeholder="Bank Account Number">
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-md-3 col-form-label" for="bank_routing_no">Bank Routing Number</label>
                            <div class="col-md-9">
                                <input type="number" name="bank_routing_no"
                                    @if (!empty($paymentType['bank_routing_no'])) value="{{ $paymentType['bank_routing_no'] }}" @else value="{{ old('bank_routing_no') }}" @endif
                                    id="bank_routing_no" lang="en" class="form-control mb-3"
                                    placeholder="Bank Routing Number">
                            </div>
                        </div>
                        <div class="form-group mb-0 text-right">
                            <button type="submit" class="btn btn-primary">Update Vendor Bank Details</button>
                        </div>
                    </div>

                </div>

            </form>
        </div>

    </div>
@endsection


@push('styles')
@endpush





@push('scripts')
@endpush
