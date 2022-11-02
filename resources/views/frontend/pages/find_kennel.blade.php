<?php

use App\Models\Product;
use App\Models\Admin;

?>
@extends('layouts.frontend_app')

@section('main-content')
    <header class="header-slider">

        <div class="swiper-container swiper-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide context-dark" style="height: 550px;"
                    data-slide-bg="{{ asset('website/images/slider-01-2048x1000.jpg') }}">

                </div>
            </div>
        </div>
        <div class="rd-navbar-wrap">

            @include('frontend.partials.header')

        </div>
    </header>

    <section class="blog-single shop-blog grid section ">
        <div class="container">
            <div class="row">

                @include('frontend.pages.sidebar_kennel')

                <div class="col-lg-9 col-12 ">
                    <div class="row">
                        <div class="col-12 ">

                            <div class="shop-top pt-0 pb-0">
                                <div class="shop-shorter ">
                                    <div class="row p-3">
                                        <div class="col-8">

                                            <div class="justify-content-center ">
                                                <div class="search-box-grid-page">
                                                    <input type="text" class="search-input search-boxss"
                                                        placeholder="Find puppy around the word from top trusted kennesl..">
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
                                                    <label for=""  class="pt-2">Sort By :</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control" name="sort" id="sort">
                                                            <option value="product_latest"
                                                                @if (isset($_GET['sort']) && $_GET['sort'] == 'product_latest') selected="" @endif> Featured </option>
                                                            <option value="name_z"
                                                                @if (isset($_GET['sort']) && $_GET['sort'] == 'name_z') selected="" @endif>Name A-Z
                                                            </option>
                                                            <option value="name_a"
                                                                @if (isset($_GET['sort']) && $_GET['sort'] == 'name_a') selected="" @endif>Name Z-A
                                                            </option>
                                                            <option value="name_a"
                                                                @if (isset($_GET['sort']) && $_GET['sort'] == 'name_a') selected="" @endif>Rating
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

                        @include('frontend.pages.ajax_kennel_listing')
                        <div class="paginate">
                            <div class="row ">
                                <div class="col-12 pt-5 text-center">
                                    <div class="fa-hover ">
                                        <a href="">
                                            {{-- <img src="{{ asset('website/images/home-02-54x57.png') }}" alt="" width="54" height="57" /> --}}
                                            <i class="fa fa-arrow-circle-left pr-3" aria-hidden="true"></i>

                                        </a>
                                        <span style="font-size: 35px; color:#bfbebe;">Page 1 of 5</span>
                                        <a href="">
                                            <i class="fa fa-arrow-circle-right pl-3" aria-hidden="true"></i>

                                        </a>
                                    </div>



                                </div>
                            </div>
                        </div>

                        <!-- Last Added Photos-->
                        <section class="section section-md bg-default">
                            <div class="container">
                                <h3 class="text-center"> Recently Added Kennels </h3>
                                <div class="row row-30 row-lg-50">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="thumbnail thumbnail-mod-2">
                                            <figure><a href="{{ asset('website/images/gallery-10-original.jpg') }}"
                                                    data-lightgallery="item"><img
                                                        src="{{ asset('website/images/gallery-10-270x230.jpg') }}"
                                                        alt="" width="270" height="230" /></a></figure>
                                            <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod.</p>
                                            <a class="button button-default" href="#">Read more</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="thumbnail thumbnail-mod-2">
                                            <figure><a href="{{ asset('website/images/gallery-11-original.jpg') }}"
                                                    data-lightgallery="item"><img
                                                        src="{{ asset('website/images/gallery-11-270x230.jpg') }}"
                                                        alt="" width="270" height="230" /></a></figure>
                                            <p>Ei sumo eruditi sadipscing nec, scripta epicurei ut eam. Duo ut fastidii
                                                platonem.</p><a class="button button-default" href="#">Read more</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="thumbnail thumbnail-mod-2">
                                            <figure><a href="{{ asset('website/images/gallery-12-original.jpg') }}"
                                                    data-lightgallery="item"><img
                                                        src="{{ asset('website/images/gallery-12-270x230.jpg') }}"
                                                        alt="" width="270" height="230" /></a></figure>
                                            <p>Vel nihil percipitur ei. Fugit option oportere est in, te dignissim
                                                philosophia mea, duo.</p><a class="button button-default"
                                                href="#">Read more</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="thumbnail thumbnail-mod-2">
                                            <figure><a href="{{ asset('website/images/gallery-13-original.jpg') }}"
                                                    data-lightgallery="item"><img
                                                        src="{{ asset('website/images/gallery-13-270x230.jpg') }}"
                                                        alt="" width="270" height="230" /></a></figure>
                                            <p>Te partem omnesque eligendi has, nam ex persius lobortis. His ex amet
                                                facilis, ne.</p><a class="button button-default" href="#">Read
                                                more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>


                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <style>
        .star span {
            background: url(../frontend/images/rating-star/rating-star.png) 0 0 repeat-x;
            height: 16px;
            left: 0;
            position: absolute;
            top: 0;
        }

        .star {
            background: url(../frontend/images/rating-star/rating-star.png) 0 -16px repeat-x;
            display: inline-block;
            height: 16px;
            position: relative;
            top: 4px;
            width: 75px;
            margin-right: 6px;
        }

        .puppy_text {
            left: 22px;
        }
    </style>
@endpush




@push('scripts')
    <script>
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.js-example-basic-single').select2();

            $("#sort").on('change', function() {
                var category_id = get_filter("category_id");
                var sort = $("#sort option:selected").val();
                $.ajax({
                    url: "/find-a-kennel",
                    method: "get",
                    data: {
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
                var sort = $("#sort option:selected").val();
                $.ajax({
                    url: "/find-a-kennel",
                    method: "get",
                    data: {
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
