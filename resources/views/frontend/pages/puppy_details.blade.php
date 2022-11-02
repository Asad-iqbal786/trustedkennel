<?php
use App\Models\Product;

?>
@extends('layouts.frontend_app')

@section('main-content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="blog-single.html">Shop Details</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="shop single section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="col-lg-6 col-12">
                                <div class="product-gallery">
                                    <div class="flexslider-thumbnails">
                                        <ul class="slides">
                                            <li data-thumb="{{ asset('storage/admin/images/admin_photos/product_large/' . $puppyDetails['image']) }}"
                                                rel="adjustX:10, adjustY:">
                                                <img src="{{ asset('storage/admin/images/admin_photos/product_large/' . $puppyDetails['image']) }}"
                                                    alt="#">
                                            </li>
                                            <li
                                                data-thumb="{{ asset('storage/admin/images/admin_photos/product_large/' . $puppyDetails['image']) }}">
                                                <img src="{{ asset('storage/admin/images/admin_photos/product_large/' . $puppyDetails['image']) }}"
                                                    alt="#">
                                            </li>
                                            <li
                                                data-thumb="{{ asset('storage/admin/images/admin_photos/product_large/' . $puppyDetails['image']) }}">
                                                <img src="{{ asset('storage/admin/images/admin_photos/product_large/' . $puppyDetails['image']) }}"
                                                    alt="#">
                                            </li>
                                            <li
                                                data-thumb="{{ asset('storage/admin/images/admin_photos/product_large/' . $puppyDetails['image']) }}">
                                                <img src="{{ asset('storage/admin/images/admin_photos/product_large/' . $puppyDetails['image']) }}"
                                                    alt="#">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="product-des">
                                <!-- Description -->

                                <div class="short">

                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <h4> {{ $puppyDetails['sire_name'] }}</h4>
                                            <small class="mr-2 opacity-50">Sold by:
                                                {{ $puppyDetails['vendors']['shop_name'] }} </small><br>
                                            <br>
                                            <ul class="rating">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-o"></i></li>
                                                <li class="dark"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                            <a href="#" class="total-review">(102) Review</a>
                                        </div>

                                        <div class="col-auto">
                                            <a href="{{ route('storeDetails', $puppyDetails['vendors']['slug']) }}">
                                                <img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/8epyndbgfapwj0RYIU5mMDUk88yFYWjffqLOQMFD.jpg"
                                                    alt="BMW" height="30">
                                            </a>
                                        </div>

                                    </div>
                                    <hr>
                                    <p class="price">Total Price : <span class="discount">$70.00</span> </p>
                                    <p class="price">Resrvation Charges :<span class="discount">$10.00</span></p>

                                    <p class="description">
                                    </p>
                                    <div class="row pt-3">
                                        <div class="col-6">
                                            <p>Sire registration number <span class="font-weight-bold ml-2">
                                                    {{ $puppyDetails['sire_name'] }}</span> </p>
                                            <p>Sire pedigree link<span class="font-weight-bold ml-2">
                                                    {{ $puppyDetails['sire_name'] }}</span></p>
                                            <p>Sire Weight <span class="font-weight-bold ml-2">
                                                    {{ $puppyDetails['sire_weight'] }}</span> </p>
                                            <p>Sire height <span class="font-weight-bold ml-2">
                                                    {{ $puppyDetails['sire_height'] }} </span> </p>
                                            <p>sire_health_tests <span class="font-weight-bold ml-2">
                                                    {{ $puppyDetails['sire_health_tests'] }} </span> </p>
                                            <p>dam_name_with_titles <span class="font-weight-bold ml-2">
                                                    {{ $puppyDetails['dam_name_with_titles'] }} </span> </p>

                                        </div>
                                        <div class="col-6">
                                            <p> Mom's Weight<span class="font-weight-bold ml-2">
                                                    {{ $puppyDetails['sire_name'] }} </span> </p>
                                            <p> Dad's Weight <span class="font-weight-bold ml-2"> D
                                                    {{ $puppyDetails['dam_weight'] }}</span> </p>
                                            <p> Dam Weight <span class="font-weight-bold ml-2">
                                                    {{ $puppyDetails['sire_name'] }} </span> </p>
                                            <p> Dam height <span class="font-weight-bold ml-2">
                                                    {{ $puppyDetails['dam_height'] }} </span> </p>
                                            <p> Dam health tests<span class="font-weight-bold ml-2">
                                                    {{ $puppyDetails['dam_health_tests_conducted'] }} </span> </p>
                                            <a href="{{ route('storeDetails', $puppyDetails['vendors']['slug']) }}">
                                                <p> Kennel name <span
                                                        class="font-weight-bold ml-2">{{ $puppyDetails['vendors']['shop_name'] }}
                                                    </span> </p>
                                            </a>
                                        </div>

                                    </div>
                                    <p class="description">
                                    </p>
                                </div>

                                <div class="product-buy">

                                    <div class="add-to-cart">
                                        <a @if ($user_id == 1) href="{{ route('userProfile') }}"
                                        @else
                                        href=""  data-toggle="modal" data-target="#exampleModal" @endif
                                            class="btn bg-primary">Adopt now</a>
                                    </div>
                                    <p class="cat">Category :<a
                                            href="#">{{ $puppyDetails['category']['name'] }}</a></p>
                                    <p class="availability">Availability : {{ $puppyDetails['status'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="product-info">
                                <div class="nav-main">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item"><a class="nav-link active" data-toggle="tab"
                                                href="#description" role="tab">Description</a></li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="description" role="tabpanel">
                                        <div class="tab-single">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="single-des">
                                                        <p> {{ $puppyDetails['description'] }}</p>
                                                    </div>
                                                    <div class="single-des">
                                                        <p> {{ $puppyDetails['description'] }}</p>
                                                    </div>
                                                    <div class="single-des">
                                                        <h4>Product Features:</h4>
                                                        <ul>
                                                            <li>long established fact.</li>
                                                            <li>has a more-or-less normal distribution. </li>
                                                            <li>lmany variations of passages of. </li>
                                                            <li>generators on the Interne.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="product-area most-popular related-product section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Related Products</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
                        @forelse ($Relatedpro as $relaPro)
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img class="default-img"
                                            src="{{ asset('storage/admin/images/admin_photos/product/' . $relaPro['image']) }}"
                                            alt="#">
                                        <img class="hover-img"
                                            src="{{ asset('storage/admin/images/admin_photos/product/' . $relaPro['image']) }}"
                                            alt="#">
                                        <span class="out-of-stock">Hot</span>
                                    </a>
                                    <div class="button-head">
                                        <div class="product-action">
                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View"
                                                href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to
                                                    Wishlist</span></a>
                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add
                                                    to Compare</span></a>
                                        </div>
                                        <div class="product-action-2">
                                            <a title="Add to cart" href="#">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="product-details.html">{{ $relaPro['sire_name'] }}</a></h3>
                                    <div class="product-price">
                                        <span class="old">$60.00</span>
                                        <span>$50.00</span>
                                    </div>
                                </div>
                            </div>
                        @empty
                        @endforelse


                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content p-5" style="height: 304px;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form >
                    <div class="form-group">
                      <label for="email">Email address</label>
                      <input type="email" class="form-control" id="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>
                  
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
    </div> --}}
@endsection

@push('styles')
@endpush




@push('scripts')
@endpush
