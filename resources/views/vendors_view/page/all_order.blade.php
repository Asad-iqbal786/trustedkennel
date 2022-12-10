<?php

use App\Models\Vendor;
use App\Models\Admin;
use App\Models\OrderLog;

?>
@extends('layouts.admin_app')

@section('main-content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-description"></p>
                <div class="table-responsive pt-3">
                    <table id="example" class="display expandable-table" style="width:100%">
                        @if (Session::has('success_message'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                {{ Session::get('success_message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Invoice number</th>
                                <th> Dog name </th>
                                <th>Dog name</th>
                                <th>Total Price</th>
                                <th>status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($getOrder as $index => $order)
                                <tr>

                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $order['invoice_number'] }}</td>
                                    <td>{{ $order['vendors']['kennel_name'] }}</td>
                                    <td>{{ $order['users']['name'] }}</td>
                                    <td>{{ $order['grand_total'] }}</td>
                                    <td>
                                        @if ($order['status'] == 1)
                                            <label class="badge badge-success">Processing</label>
                                        @elseif($order['status'] == 5)
                                            <label class="badge badge-info"> To be reserved</label>
                                        @elseif($order['status'] == 6)
                                            <label class="badge badge-dark">Reserved</label>
                                        @elseif($order['status'] == 3)
                                            <label class="badge badge-primary">Accepted</label>
                                        @elseif($order['status'] == 4)
                                            <label class="badge badge-danger">Rejected</label>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('cartInvoicePDFAdmin', $order['id']) }}">
                                            <img src="{{ asset('admin/icons/PDF Document.png') }}" alt=""
                                                style="width:20px;">
                                        </a>
                                        <a href="" data-toggle="modal"
                                            data-target="#exampleModal-{{ $order['id'] }}">
                                            <img src="{{ asset('admin/icons/View.png') }}" alt=""
                                                style="width:20px;">
                                        </a>
                                        
                                    </td>

                                </tr>

                            @empty
                            @endforelse




                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @forelse ($getOrder as $order)
            <?php
            
            $getlog = OrderLog::where('order_id', $order['id'])
                ->get()
                ->toArray();
            
            ?>
            <div class="modal fade" id="exampleModal-{{ $order['id'] }}" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">

                        <div class="modal-body">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title"> Order Details</h4>
                                    <div class="row">
                                        <div class="col-lg-6 grid-margin stretch-card">
                                            <div class="card">
                                                <div class="card-body">

                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>History</th>
                                                                    <th>Dog name</th>
                                                                    <th>Customer name</th>
                                                                    <th>Status</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @forelse ($getlog as $index => $log)
                                                                    <tr>

                                                                        <td>{{ $index + 1 }}</td>
                                                                        <td>{{ date('j F,Y,g:i a', strtotime($log['created_at'])) }}
                                                                        </td>
                                                                        <td>

                                                                            @if ($log['status'] == 'accept ')
                                                                                <label
                                                                                    class="badge badge-info">{{ $log['status'] }}</label>
                                                                            @elseif($log['status'] == 'reservation_booked ')
                                                                                <label
                                                                                    class="badge badge-danger">{{ $log['status'] }}</label>
                                                                            @elseif($log['status'] == 'rejact ')
                                                                                <label
                                                                                    class="badge badge-danger">{{ $log['status'] }}</label>
                                                                            @elseif($log['status'] == 'processing ')
                                                                                <label
                                                                                    class="badge badge-info">{{ $log['status'] }}</label>
                                                                            @else
                                                                                <label
                                                                                    class="badge badge-info">{{ $log['status'] }}</label>
                                                                            @endif



                                                                        </td>
                                                                    </tr>
                                                                @empty
                                                                @endforelse


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 stretch-card grid-margin grid-margin-md-0">
                                            <div class="card">
                                                <div class="card-title">

                                                </div>
                                                <div class="card-body">
                                                    <h4> Order Status Change </h4>

                                                    <form action="{{ route('OrderLog') }}" method="post">@csrf

                                                        <input type="hidden" name="order_id" value=" {{ $order['id'] }}">
                                                        <input type="hidden" name="user_id"  value=" {{ $order['users']['id'] }}">

                                                        <select class="custom-select" name="order_status" id="order_status"
                                                            style="width:120px;">

                                                            <option selected="">Order Status...</option>
                                                            <option value="processing">Processing</option>
                                                            <option value="accept">Accept</option>
                                                            <option value="rejact">Reject</option>
                                                            {{-- <option value="reservation_booked">Reservation Booked</option> --}}


                                                        </select>
                                                        <input style="width: 120px; display: none;" type="number"
                                                            name="shipping_chargges" id="shipping_chargges"
                                                            placeholder="shipping_chargges" value="">
                                                        <input style="width: 120px; display: none;" type="number"
                                                            name="reservation_charges" id="reservation_charges"
                                                            placeholder="reservation_charges" value="">
                                                        <input style="width: 120px; display: none;" type="text"
                                                            name="courier_name" id="courier_name" placeholder="courier_name"
                                                            value="">
                                                        <input style="width: 120px; display: none;" type="text"
                                                            name="tracking_number" id="tracking_number"
                                                            placeholder="tracking_number" value="">



                                                        <button class="btn btn-primary" type="submit">Button</button>

                                                    </form>

                                                </div>

                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        @empty
        @endforelse

    </div>
@endsection
@push('styles')
    <style>
        .support-ticket .user-img {
            border-radius: 6px;
            -webkit-box-shadow: 4px 3px 6px 0 rgb(0 0 0 / 20%);
            box-shadow: 4px 3px 6px 0rgba(0, 0, 0, 0.2);
            width: 35px;
            height: 35px;
        }
    </style>
@endpush





@push('scripts')
    <script>
        // admin status
        $(".updateAdminStatus").click(function() {
            var status = $(this).text();
            var admin_id = $(this).attr("admin_id");
            // alert(status);
            $.ajax({
                type: 'post',
                url: '/admin/update-admin-status',
                data: {
                    status: status,
                    admin_id: admin_id
                },
                success: function(resp) {

                    if (resp['status'] == 0) {
                        $("#admin-" + admin_id).html(
                            "<i style='font-size:25px;'class='mdi mdi-bookmark-outline'><p style='display:none;'> Inactive</p></i>"
                        );
                    } else if (resp['status'] == 1) {
                        $("#admin-" + admin_id).html(
                            "<i style='font-size:25px;'class='mdi mdi-bookmark-check'> <p style='display:none;'> Active</p> </i>"
                        );
                    }

                },
                error: function() {
                    alert("Error");
                }
            })

        });


        // show courier name and Teracking Number
        $("#courier_name").hide();
        $("#tracking_number").hide();
        $("#shipping_chargges").hide();
        $("#reservation_charges").hide();
        //order status
        $("#order_status").on("change", function() {
            if (this.value == "Shipped") {
                $("#courier_name").show();
                $("#tracking_number").show();
            } else {
                $("#courier_name").hide();
                $("#tracking_number").hide();
            }
        });
        //add shipping carges
        $("#order_status").on("change", function() {
            if (this.value == "accept") {
                $("#shipping_chargges").show();
            } else {
                $("#shipping_chargges").hide();
            }
        });
        //add reservation carges
        $("#order_status").on("change", function() {
            if (this.value == "reservation_booked") {
                $("#reservation_charges").show();
            } else {
                $("#reservation_charges").hide();
            }
        });
    </script>
@endpush
