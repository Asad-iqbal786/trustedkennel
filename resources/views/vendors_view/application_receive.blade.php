<?php

use App\Models\Product;
use App\Models\Admin;

?>

@extends('layouts.admin_app')

@section('main-content')
    <div class="col-lg-12 grid-margin stretch-card">

        <div class="card">
            <div class="card-body">
                {{-- <h4 class="card-title">{{$title}}</h4> --}}
                <p>All Receive Applications</p>
                <div class="table-responsive pt-3">

                    <table id="example" class="display expandable-table dataTable no-footer">
                        @if (Session::has('success_message'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                {{ Session::get('success_message') }}
                                <button type="button" id="toastr-2" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Customer Name</th>
                                <th>Puppy Name</th>
                                <th>Email</th>
                                <th>Price</th>
                                <th>Shipping Charges</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>


                            @forelse ($Vendor_r_app  as $index=> $app)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $app['users']['name'] }}</td>
                                    <td>{{ $app['products']['sire_name'] }}</td>
                                    <td>{{ $app['users']['email'] }}</td>
                                    <td>  {{ $app['price'] }} </td>
                                    <td> {{ $app['shipping_charges'] }} </td>
                                    <td>{{ $app['status'] }}</td>
                                    <td>
                                        <a href="{{ route('cartInvoice', $app['id']) }}" target="_blank"><i
                                                class="mdi mdi-printer-alert" style="font-size: 25px;"></i></a>
                                        <a href="{{ route('cartInvoicePDF', $app['id']) }}" target="_blank"><i
                                                class="mdi mdi-file-pdf" style="font-size: 25px;"></i></a>
                                        <a href="" target="blank" data-toggle="modal"
                                            data-target="#exampleModal-{{ $app['id'] }}"><i class="mdi mdi-eye"
                                                style="font-size: 25px;"></i></a>
                                        <a href="" onclick="return confirm('Are you sure to delete?')"><i
                                                class="mdi mdi-file-excel-box" style="font-size:20px;"></i></a>

                                        <a href="{{ route('applicationDetails', $app['id']) }}" target="_blank"><i
                                                class="mdi mdi-account-card-details" style="font-size:20px;"></i></a>
                                    </td>
                                </tr>

                            @empty
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        @forelse ($Vendor_r_app as $index=> $application)
        <div class="modal fade" id="exampleModal-{{ $application['id'] }}" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">

                    <div class="modal-body">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Customer Name : {{ $application['users']['name'] }} </h4>
                                <form action="{{ route('OrderStore') }}" method="post">@csrf
                                    <input type="hidden" name="cart_id"value ="{{ $application['id'] }}" id="">
                                    <input type="hidden" name="price"
                                        value=" {{ $application['products']['puppy_price'] }}">
                                    <input type="hidden" name="puppy_id"
                                        value=" {{ $application['products']['id'] }}">
                                    <input type="hidden" name="vendor_id" value=" {{ $application['vendor_id'] }}">
                                    <input type="hidden" name="user_id" value=" {{ $application['user_id'] }}">
                                    <input type="hidden" name="admin_id"
                                        value=" {{ $application['products']['admin_id'] }}">



                                    <div class="form-group">
                                        <select class="custom-select" name="order_status" id="order_status">

                                            <option selected="">Order Status...</option>
                                            <option value="processing">Processing</option>
                                            <option value="accept">Accept</option>
                                            <option value="rejact">Reject</option>
                                            <option value="reservation_booked">Reservation Booked</option>


                                        </select>
                                    </div>
                                    <div class="form-group pt-3">

                                        <input class="custom-select" style=" display: none;" type="number"
                                            name="shipping_chargges" id="shipping_chargges"
                                            placeholder="shipping_chargges" value="">
                                        <input class="custom-select" style=" display: none;" type="number"
                                            name="reservation_charges" id="reservation_charges"
                                            placeholder="reservation_charges" value="">
                                        <input class="custom-select" style=" display: none;" type="text"
                                            name="courier_name" id="courier_name" placeholder="courier_name"
                                            value="">
                                        <input class="custom-select" style=" display: none;" type="text"
                                            name="tracking_number" id="tracking_number" placeholder="tracking_number"
                                            value="">

                                    </div>
                                    <button class="btn btn-primary" type="submit">Submit</button>

                                </form>

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





@push('scripts')
    <script>
        // admin status
        $(".updateProductStatus").click(function() {
            var status = $(this).text();
            var product_id = $(this).attr("product_id");
            // alert(status);
            $.ajax({
                type: 'post',
                url: '/admin/update-product-status',
                data: {
                    status: status,
                    product_id: product_id
                },
                success: function(resp) {

                    if (resp['status'] == 0) {
                        $("#product-" + product_id).html(
                            "<i style='font-size:25px;'class='mdi mdi-bookmark-outline'><p style='display:none;'> Inactive</p></i>"
                        );
                    } else if (resp['status'] == 1) {
                        $("#product-" + product_id).html(
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
