<?php

use App\Models\Product;
use App\Models\Admin;

?>
@extends('layouts.frontend_app')

@section('main-content')
    <header class="header-slider">

        <div class="swiper-container swiper-slider">
            <div class="swiper-wrapper parallax">
                <div class="swiper-slide context-dark" style="height: 550px;"
                    data-slide-bg="{{ asset('website/images/slider-01-2048x1000.jpg') }}">

                </div>
            </div>
        </div>
        <div class="rd-navbar-wrap">

            @include('frontend.partials.header')

        </div>
    </header>


    <section>
        <div class="container">
            <div class="text-center pt-2 pb-2" style="font-family: PT Sans Narrow;">
                <h4>AVAILABLE PUPPIES & PLANNED LITTERS</h4>
            </div>
        </div>
    </section>
    <section class="blog-single shop-blog grid section">
        <div class="container pb-5">
            <div class="row ">
                @include('frontend.pages.sidebar_puppy')
                <div class="col-9">
                    <div class="row">

                        <div class="col-12 ">
                            <div class="shop-top pt-0 pb-0">
                                <div class="shop-shorter ">
                                    <div class="row p-3">
                                        <div class="col-8">

                                            <div class="justify-content-center ">
                                                <div class="search-box-grid-page">
                                                    <input type="text" class="search-input search-boxss"
                                                        placeholder="Find puppy from top trusted kennesl around the word. ">
                                                    <div class="search-icon">
                                                        <a href="" type="submit">
                                                            <img src="{{ asset('frontend/images/search.png') }}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <form>
                                                <div class="form-group row">
                                                    <label for="" class="pt-2">Sort By :</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control" name="sort" id="sort">
                                                            <option value="product_latest"
                                                                @if (isset($_GET['sort']) && $_GET['sort'] == 'product_latest') selected="" @endif>Latest
                                                                Pro</option>
                                                            <option value="name_z"
                                                                @if (isset($_GET['sort']) && $_GET['sort'] == 'name_z') selected="" @endif>Name Z
                                                            </option>
                                                            <option value="name_a"
                                                                @if (isset($_GET['sort']) && $_GET['sort'] == 'name_a') selected="" @endif>Name A
                                                            </option>
                                                            <option value="name_a"
                                                                @if (isset($_GET['sort']) && $_GET['sort'] == 'name_a') selected="" @endif>Age
                                                            </option>
                                                            <option value="name_a"
                                                                @if (isset($_GET['sort']) && $_GET['sort'] == 'name_a') selected="" @endif>Price
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-content filter_products">

                        @include('frontend.pages.ajax_puppy_listing')


                        <div class="paginate">
                            <div class="row ">
                                <div class="col-12 pt-5 text-center">
                                    <div class="fa-hover ">
                                        <div class="fa-hover ">
                                            <a href=""> <i class="fa fa-chevron-left" aria-hidden="true"></i> </a>
                                            <span style="font-size: 35px; color:#bfbebe;">Page 1 of 5</span>
                                            <a href=""> <i class="fa fa-chevron-right" aria-hidden="true"></i> </a>
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
    <section class="parallax-container section-xl context-dark"
        data-parallax-img="{{ asset('website/images/parallax3.jpg') }}" style="display: block;width: 100%;">
        <div class="parallax-content">
            <div class="container">
                <h1>NOT SURE WHICH DOG BREED IS RIGHT FOR YOU ?</h1>
                <h2>Start with our breed questionnaire and we'll recommend the best dog breeds for you and your lifestyle.
                </h2>
                <a class="button button-white-outline" href="#">BREED QUESTIONNAIRE</a>
            </div>
        </div>
    </section>
    <section class="section section-md bg-default">
        <div class="container">
            <h3 class="text-center">Did you know ? </h3>
            <div class="row row-30">
                <div class="col-lg-4 col-sm-6 wow flipInX">
                    <div class="unit align-items-center">
                        <div class="unit-left"><img src="{{ asset('website/images/home-01-54x57.png') }}" alt="" width="54" height="57" />
                        </div>
                        <div class="unit-body">
                            <h5><a href="#">SCAM-FREE GUARANTEE</a></h5>
                        </div>
                    </div>
                    <p>Payment to kennels is withheld until you’ve received your puppy and have given us the thumbs-up.</p>
                </div>
                <div class="col-lg-4 col-sm-6 wow flipInX">
                    <div class="unit align-items-center">
                        <div class="unit-left"><img src="{{ asset('website/images/home-02-54x57.png') }}" alt=""  width="54" height="57" />
                        </div>
                        <div class="unit-body">
                            <h5><a href="#">INDEPENDENT HEALTH CHECK</a></h5>
                        </div>
                    </div>
                    <p>Our independent certified vet examines all puppies to ensure they’re in top shape prior to boarding
                        the plane.</p>
                </div>
                <div class="col-lg-4 col-sm-6 wow flipInX">
                    <div class="unit align-items-center">
                        <div class="unit-left"><img src="{{ asset('website/images/home-03-54x57.png') }}" alt=""
                                width="54" height="57" />
                        </div>
                        <div class="unit-body">
                            <h5><a href="#">KENNELS CERTIFICATION PROGRAM</a></h5>
                        </div>
                    </div>
                    <p>Kennels go through a rigorous yearly evaluation process to be listed as a trusted kennel.</p>
                </div>

            </div>
        </div>
    </section>
@endsection

@push('styles')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style>
       
    </style>
@endpush




@push('scripts')
    <script>
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            // $('.js-example-basic-single').select2();

            $("#sort").on('change', function() {
                var category_id = get_filter("category_id");
                var gender_id = get_filter("gender_id");
                var sort = $("#sort option:selected").val();
                $.ajax({
                    url: "/find-a-puppy",
                    method: "get",
                    data: {
                        gender_id: gender_id,
                        category_id: category_id,
                        sort: sort
                    },
                    success: function(resp) {
                        $('.filter_products').html(resp);
                    }
                });
            });
            $(".category_id").on('click', function() {
                var category_id = get_filter("category_id");
                var gender_id = get_filter("gender_id");
                var sort = $("#sort option:selected").val();
                $.ajax({
                    url: "/find-a-puppy",
                    method: "get",
                    data: {
                        gender_id: gender_id,
                        category_id: category_id,
                        sort: sort
                    },
                    success: function(resp) {
                        $('.filter_products').html(resp);
                    }
                });
            });
            //gender
            $(".gender_id").on('click', function() {
                var category_id = get_filter("category_id");
                var gender_id = get_filter("gender_id");
                var sort = $("#sort option:selected").val();
                $.ajax({
                    url: "/find-a-puppy",
                    method: "get",
                    data: {
                        gender_id: gender_id,
                        category_id: category_id,
                        sort: sort
                    },
                    success: function(resp) {
                        $('.filter_products').html(resp);
                    }
                });
            });

            function get_filter(class_name) {
                var filter = [];
                $('.' + class_name + ':checked').each(function() {

                    filter.push($(this).val());

                });
                return filter;
            }
        });
    </script>
@endpush
