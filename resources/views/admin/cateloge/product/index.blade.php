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
                <a @if (Auth::guard('admin')->user()->type == 'superadmin') href="{{ route('addEditProduct') }}" 

                    @else href="{{ route('VendoraddEditProduct') }}" @endif
                    class="btn btn-info"> Add New Post</a>
                </p>
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
                                <th>Status</th>
                                <th>Puppy Name</th>
                                <th>Kennel Name </th>
                                <th>Breed</th>
                                <th>Post type</th>
                                {{-- <th>Status</th> --}}
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>


                            @forelse ($getProduct as $product)
                                <?php
                                
                                $getShopName = Admin::with('vendors')
                                    ->where('id', $product['admin_id'])
                                    ->first()
                                    ->toArray();
                                
                                // dd($getShopName['vendors']['shop_name']);
                                
                                ?>

                                <tr>
                                    <td>{{ $product['id'] }}</td>


                                    {{-- {{asset('storage/admin/images/admin_photos/products/'.$product['main_image'])}} --}}


                                    <td><img src="{{ asset('storage/admin/images/admin_photos/product_small/' . $product['image']) }}"
                                            alt="" style="width:50px;"></td>
                                    <td>{{ $product['sire_name'] }}</td>
                                    <td>{{ $product['admins']['first_name'] }}</td>
                                    <td>{{ $product['category']['name'] }}</td>
                                    <td>{{ $product['admins']['type'] }}</td>
                                    {{-- <td>
                                        @if ($product['status'] == 1)
                                          <a class="updateProductStatus" id="product-{{$product['id']}}" product_id="{{$product['id']}}" href="javascript:(0)" ><p style="display:none;">Active</p></a>
                                          @else
                                          <a class="updateProductStatus" id="product-{{$product['id']}}" product_id="{{$product['id']}}" href="javascript:(0)"><p style="display:none;"> Inactive</p></a>
                                        @endif
                                    </td> --}}
                                    <td>
                                        @if ($product['status'] == 1)
                                            <a class="updateProductStatus" id="product-{{ $product['id'] }}"
                                                product_id="{{ $product['id'] }}" href="javascript:(0)"> <i
                                                    class="mdi mdi-bookmark" style='font-size:25px;'></i>
                                                <p style="display:none;">Active </p>
                                            </a>
                                        @else
                                            <a class="updateProductStatus" id="product-{{ $product['id'] }}"
                                                product_id="{{ $product['id'] }}" href="javascript:(0)"> <i
                                                    class="mdi mdi-bookmark-outline" style="font-size:25px;">
                                                    <p style="display:none;"> Inactive</p>
                                                </i></a>
                                        @endif
                                        <a href="" target="blank" data-toggle="modal"
                                            data-target="#exampleModal-{{ $product['id'] }}"><i class="mdi mdi-eye"
                                                style="font-size: 25px;"></i></a>
                                        <a href="{{ route('addEditProduct', $product['id']) }}"><i
                                                class="mdi mdi-pencil-box" style="font-size: 25px;"></i></a>
                                        <a href="{{ route('productDestroy', $product['id']) }}"
                                            onclick="return confirm('Are you sure to delete?')"><i
                                                class="mdi mdi-file-excel-box" style="font-size:20px;"></i></a>

                                        <a href="{{ route('addimage', $product['id']) }}" target="_blank"><i
                                                class="mdi mdi-folder-image" style="font-size:20px;"></i></a>


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

    @forelse ($getProduct as $product)
        <div class="modal fade" id="exampleModal-{{ $product['id'] }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">

                    <div class="modal-body">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Product Name : {{ $product['sire_name'] }}</h4>
                                <p class="card-description">
                                    {{-- Add class <code>.table-bordered</code> --}}
                                </p>


                                <div class="table-responsive pt-3">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>
                                                    admin_id
                                                </th>
                                                <th>
                                                    Name
                                                </th>
                                                <th>
                                                    admin_id
                                                </th>
                                                <th>
                                                    Name
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    category_id
                                                </td>
                                                <td>
                                                    {{ $product['category_id'] }}
                                                </td>
                                                <td>
                                                    sire_name
                                                </td>
                                                <td>
                                                    {{ $product['sire_name'] }}
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    sire_registration
                                                </td>
                                                <td>
                                                    {{ $product['sire_registration'] }}
                                                </td>
                                                <td>
                                                    sire_pedigree_link
                                                </td>
                                                <td>
                                                    {{ $product['sire_pedigree_link'] }}
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    type
                                                </td>
                                                <td>
                                                    {{ $product['type'] }}
                                                </td>
                                                <td>
                                                    Sire Weight / {{ $product['sire_weight'] }}
                                                </td>
                                                <td>
                                                    @if ($product['sire_weight'] == 'kg')
                                                        kg ({{ $product['sire_weight_measure'] }})
                                                    @else
                                                        Lbs ({{ $product['sire_weight_measure'] }})
                                                    @endif




                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    Sire Height / {{ $product['sire_height'] }}
                                                </td>
                                                <td>
                                                    @if ($product['sire_height'] == 'Inches')
                                                        Inches ({{ $product['sire_height_measure'] }})
                                                    @else
                                                        Cm ({{ $product['sire_height_measure'] }})
                                                    @endif
                                                </td>
                                                <td>
                                                    sire_health_tests
                                                </td>
                                                <td>
                                                    {{ $product['sire_health_tests'] }}
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>
                                                    dam_name_with_titles
                                                </td>
                                                <td>
                                                    {{ $product['dam_name_with_titles'] }}
                                                </td>
                                                <td>
                                                    dam_registration_number
                                                </td>
                                                <td>
                                                    {{ $product['dam_registration_number'] }}
                                                </td>
                                            </tr>



                                            <tr>
                                                <td>
                                                    Dam Pedigree Link
                                                </td>
                                                <td>
                                                    {{ $product['dam_pedigree_link'] }}
                                                </td>
                                                <td>
                                                    Dam Weight / {{ $product['dam_weight'] }}
                                                </td>
                                                <td>
                                                    @if ($product['dam_weight'] == 'Kg')
                                                        Kg ({{ $product['dam_weight_measure'] }})
                                                    @else
                                                        Lbs ({{ $product['dam_weight_measure'] }})
                                                    @endif
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>
                                                    Dam Height /{{ $product['dam_height'] }}
                                                </td>
                                                <td>
                                                    {{-- {{$product['dam_height']}} --}}
                                                    @if ($product['dam_height'] == 'Inches')
                                                        Inches ({{ $product['dam_height_measure'] }})
                                                    @else
                                                        Cm ({{ $product['dam_height_measure'] }})
                                                    @endif
                                                </td>
                                                <td>
                                                    dam_health_tests_conducted
                                                </td>
                                                <td>
                                                    {{ $product['dam_health_tests_conducted'] }}
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
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
    </script>
@endpush
