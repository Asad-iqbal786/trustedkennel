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

                    <table id="example" class="display expandable-table dataTable no-footer" style="width: 100%">
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
                                <th>Customer </th>
                                <th>Dog Name</th>
                                <th>Post Type</th>
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
                                    <td>{{ $app['products']['product_name'] }}</td>
                                    <td>
                                        @if ($app['products']['produt_type_id'] == 1)
                                            Available Puppy
                                        @else
                                            Planned Litter
                                        @endif
                                    </td>
                                    <td> {{ $app['products']['price'] }} </td>
                                    <td> {{ $app['products']['shipping_fee'] }} </td>
                                    <td>
                                        @if ($app['status'] == 1)
                                            <label class="badge badge-success">Processing</label>
                                        @elseif($app['status'] == 5)
                                            <label class="badge badge-info"> To be reserved</label>
                                        @elseif($app['status'] == 6)
                                            <label class="badge badge-dark">Reserved</label>
                                        @elseif($app['status'] == 3)
                                            <label class="badge badge-primary">Accepted</label>
                                        @elseif($app['status'] == 4)
                                            <label class="badge badge-danger">Rejected</label>
                                        @endif
                                    </td>
                                    <td class="buttons-styles">
                                        <a href="{{ route('cartInvoicePDF', $app['id']) }}">
                                            <img src="{{ asset('admin/icons/PDF Document.png') }}" alt=""
                                                style="width:20px;">
                                        </a>
                                        <a href="{{ route('applications', $app['users']['id']) }}">
                                            <img src="{{ asset('admin/icons/user -application.png') }}" alt=""
                                                style="width:20px;">
                                        </a>
                                        <a href="" data-toggle="modal"
                                            data-target="#exampleModal-{{ $app['id'] }}">
                                            <img src="{{ asset('admin/icons/View.png') }}" alt=""
                                                style="width:20px;">
                                        </a>

                                        <form action="{{ route('rejectApplication') }}" class="forms-styles"
                                            method="post">@csrf
                                            <input type="hidden" name="cart_id"value="{{ $app['id'] }}" id="">
                                            <input type="hidden" name="price" value=" {{ $app['products']['price'] }}">
                                            <input type="hidden" name="product_id" value=" {{ $app['products']['id'] }}">
                                            <input type="hidden" name="user_id" value=" {{ $app['user_id'] }}">
                                            <input type="image" name="submit"
                                                src="{{ asset('admin/icons/Delete.png') }}" style="width:20px;"
                                                alt="Submit" />
                                        </form>

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
                                    {{-- <h4 class="card-title">Customer Name : {{ $application['users']['name'] }} </h4> --}}
                                    <form action="{{ route('OrderStore') }}" method="post">@csrf
                                        <input type="hidden" name="cart_id"value="{{ $application['id'] }}"
                                            id="">
                                        <input type="hidden" name="price"
                                            value=" {{ $application['products']['price'] }}">
                                        <input type="hidden" name="product_id"
                                            value=" {{ $application['products']['id'] }}">
                                        {{-- <input type="hidden" name="vendor_id" value=" {{ $application['vendor_id'] }}"> --}}
                                        <input type="hidden" name="user_id" value=" {{ $application['user_id'] }}">
                                        {{-- <input type="hidden" name="admin_id" value=" {{ $application['products']['admin_id'] }}"> --}}

                                        <div class="form-group">
                                            <label for="exampleInputUsername1">DOG</label>
                                            <input type="text" class="form-control"
                                                value="{{ $application['products']['product_name'] }}"
                                                id="exampleInputUsername1" placeholder="Username">
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleInputUsername1">CUSTOMER</label>
                                            <input type="text" class="form-control"
                                                value="{{ $application['users']['name'] }}" id="exampleInputUsername1"
                                                placeholder="Username">
                                        </div>



                                        <div class="form-group">
                                            <label for="">STATUS</label>
                                            <select class="custom-select" name="order_status" id="order_status">
                                                <option selected="">Order Status...</option>
                                                {{-- <option value="Submitted">Submitted</option> --}}
                                                {{-- <option value="Accepted">Accepted</option> --}}
                                                @if ($application['products']['produt_type_id'] == 'Planned Litter')
                                                    <option value="5"> To be reserved </option>
                                                    <option value="6"> Reserved </option>
                                                    <option value="4"> Rejected </option>
                                                @else
                                                    <option value="1"> Processing </option>
                                                    <option value="3"> Accepted </option>
                                                    <option value="4"> Rejected </option>
                                                @endif

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">CHARGE</label>
                                            <input type="text" class="form-control"
                                                value="{{ $application['users']['name'] }}" id="exampleInputUsername1"
                                                placeholder="Reserved Status" readonly>
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
                                        <div class="row">
                                            <div class="col">
                                                <button class="btn btn-light">Cancel</button>
                                            </div>
                                            <div class="col text-right">
                                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
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
        td.buttons-styles {
            position: absolute;
        }

        form.forms-styles {
            position: relative;
            right: 25px;
            bottom: 22px;
        }
    </style>
@endpush




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
            if (this.value == "Processing") {
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
