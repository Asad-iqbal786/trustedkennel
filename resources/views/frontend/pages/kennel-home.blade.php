<?php
use App\Models\Product;
use App\Models\Vendor;
use App\Models\Category;

?>
@extends('layouts.frontend_app')

<header class="header-slider">

    <div class="rd-navbar-wrap">

        @include('frontend.partials.header')

    </div>
</header>


<div class="container-sm">
    <div class="row" style=" padding-top: 100px;">
        <div class="col-md-8 mx-auto">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('website/images/banner-2.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('website/images/banner-2.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('website/images/banner-2.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('website/images/banner-2.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                    <span><i class="fa fa-angle-left"></i></span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                    <span><i class="fa fa-angle-right"></i></span>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="container">

    <div class="main-con">
        <div class="row">

            <div class="col-md-8">
                <div class="kanel-name text-center">
                    <h2>KENNEL NAME</h2>
                    <div class="social-links pl-2 pt-3">
                        <a href="{{$vendorDetails['facebook_url']}}">
                            <img src="{{ asset('website/images/fb.png') }}" alt="" style="width:23px">
                        </a>
                        <a href="#">
                            <img src="{{ asset('website/images/inst.png') }}" alt="" style="width:23px">
                        </a>
                        <a href="#">
                            <img src="{{ asset('website/images/word.png') }}" alt="" style="width:23px">
                        </a>
                        <a href="#">
                            <img src="{{ asset('website/images/tw.png') }}" alt="" style="width:23px">
                        </a>

                    </div>
                    <div class="template-demo pt-3">

                        @forelse ($getBreeds as $breed)
                        {{-- <button type="button" class="btn btn-primary">Primary</button> --}}
                        <div class="badge badge-success">{{$breed['category']['name']}}</div>
                        @empty
                            
                        @endforelse
                       


                      </div>
                    <div class="brees text-center pt-3 pb-3">
                       
                    </div>
                </div>
                <div class="dec">
                    <p> 

                        {{ $vendorDetails['vendor_about'] }}
                    </p>

                    <div class="availabe_puppies">
                        @forelse ( $getPlannedLitters as $item )
                            <h4 class="text-center pt-3">AVAILABLE PUPPIES</h4>
                        @empty
                        @endforelse
                        
                        <div class="row pt-0 pb-0 ">

                            @forelse ($getAbailablePuppy as $item)
                                <div class="col-3 pb-4 col-lg-3 col-sm-6 wow slideInUp">
                                    <article class="post-6">
                                        <figure>
                                            <a href="">
                                                <img src="{{ asset('website/images/services-01-370x230.jpg') }}"
                                                    style=""
                                                    alt="" /></a>
                                        </figure>
                                        <div class="kennel_home_text">
                                            <h5 class="mt-">Puppy Name </a>
                                            </h5>
                                            <p class="mb-0" style="    font-size: 12px;">
                                                <a href="">Breed Name </a>
                                            </p>
                                            <ul class="bread-crumb" style="    font-size: 12px;">
                                                <li class="has-separator">
                                                    <p> <b>Price</b></p>
                                                </li>
                                                <li class="has-separator pt-1">
                                                    <p class="text-danger"> <b>$1600</b></p>
                                                </li>
                                            </ul>

                                            <div class="pd-detail__inline">

                                                <span class="pd-detail__stock">Age</span>

                                                <span class="pd-detail__left text-success">11 Weeks</span>
                                            </div>
                                        </div>

                                    </article>
                                </div>
                            @empty
                            @endforelse


                        </div>

                    </div>

                    <div class="planed_litte">
                        @forelse ( $getPlannedLitters as $item )
                            <h4 class="text-center pt-3">PLANNED LITTERS</h4>
                        @empty
                        @endforelse
                      
                        <div class="row">

                            @forelse ($getPlannedLitters as $item)
                                <div class="col-3 pb-4 col-lg-3 col-sm-6 wow slideInUp">
                                    <article class="post-6">
                                        <figure>
                                            <a href="">
                                                <img src="{{ asset('website/images/services-01-370x230.jpg') }}"
                                                    style="
                                        border-radius: 10px; width: 206px;height: 130px;"
                                                    alt="" /></a>
                                        </figure>
                                        <div class="kennel_home_text">
                                            <h5 class="mt-">Puppy Name </a>
                                            </h5>
                                            <p class="mb-0" style="    font-size: 12px;">
                                                <a href="">Breed Name </a>
                                            </p>
                                            <ul class="bread-crumb" style="    font-size: 12px;">
                                                <li class="has-separator">
                                                    <p> <b>Price</b></p>
                                                </li>
                                                <li class="has-separator pt-1">
                                                    <p class="text-danger"> <b>$1600</b></p>
                                                </li>
                                            </ul>

                                            <div class="pd-detail__inline">

                                                <span class="pd-detail__stock">Age</span>

                                                <span class="pd-detail__left text-success">11 Weeks</span>
                                            </div>
                                        </div>

                                    </article>
                                </div>
                            @empty
                            @endforelse

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card side-bar">
                    <div class="ps-block__thumbnail text-center">
                        <img src="{{ asset('website/images/services-01-370x230.jpg') }}"class="rounded-c\ircle text-center"
                            alt="" style=" width: 320px; height: 200px;">
                    </div>
                    <div class="pl-4   sidebar-text">
                        <h3 class="pt-2 pb-4">Kennel Name {{ $vendorDetails['kennel_name'] }}</h3>
                        <div class="product-rating ">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>4.7(21)</span>
                        </div>

                        <div class="text-deta">

                            <p class="last-price">YEAR ESTABLISHED :<span>{{ $vendorDetails['kennel_name'] }}</span>
                            </p>
                            <p class="last-price"> REGISTRATION NUMBER
                                :<span>{{ $vendorDetails['registration_number'] }}</span> </p>
                            <p class="last-price"> OWNER :<span class="text-danger"
                                    style="color:red;">{{ $vendorDetails['owner_First_neame'] }}
                                    {{ $vendorDetails['owner_last_name'] }}</span> </p>
                            <p class="last-price"> LOCATION : <span> {{ $vendorDetails['location'] }}</span> </p>
                            <p class="last-price"> AVERAGE NUMBER OF LITTERS PER YEAR :
                                <span>{{ $vendorDetails['number_of_litters'] }}</span> </p>
                        </div>
                        <div class="ps-block__footer">
                            <p>Call us directly</p>
                            <p><strong>{{ $vendorDetails['phone'] }}</strong></p>
                            <p>or Or if you have any question</p>
                            <a class="ps-btn ps-btn--fullwidth" href="#"></a>
                            <button type="button"  data-toggle="modal"
                            data-target="#exampleModal" class="btn btn-secondary btn-lg btn-block mt-5"> Contact </button>

                  
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            ...
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
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

    <section class="section section-md bg-default pb-0">
        <div class="container">
            <h3 class="text-center">REVIEWS</h3>
        </div>
        <div class="row no-gutters">

            <div class="col-xl-3 col-sm-6 wow flipInY">
                <article class="post">
                    <figure class="post-figure"><img src="{{ asset('website/images/post-01-512x300.jpg') }}"
                            alt="" width="512" height="300" />
                    </figure>
                    <div class="post-body">
                        <p class="puppy_name">Customer Name </p>
                        <div class="product-rating ">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>

                        <p class="post-text">Dogs use their mouth and teeth to grab and hold onto objects. How these
                            dogs are treated as puppies and as young adults greatly impacts whether or not the family
                            dog will use its teeth...</p>
                    </div>
                </article>
            </div>
            <div class="col-xl-3 col-sm-6 wow flipInY">
                <article class="post">
                    <figure class="post-figure"><img src="{{ asset('website/images/post-01-512x300.jpg') }}"
                            alt="" width="512" height="300" />
                    </figure>
                    <div class="post-body">
                        <p class="puppy_name">Customer Name </p>
                        <div class="product-rating ">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>

                        <p class="post-text">Dogs use their mouth and teeth to grab and hold onto objects. How these
                            dogs are treated as puppies and as young adults greatly impacts whether or not the family
                            dog will use its teeth...</p>
                    </div>
                </article>
            </div>
            <div class="col-xl-3 col-sm-6 wow flipInY">
                <article class="post">
                    <figure class="post-figure"><img src="{{ asset('website/images/post-01-512x300.jpg') }}"
                            alt="" width="512" height="300" />
                    </figure>
                    <div class="post-body">
                        <p class="puppy_name">Customer Name </p>
                        <div class="product-rating ">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>

                        <p class="post-text">Dogs use their mouth and teeth to grab and hold onto objects. How these
                            dogs are treated as puppies and as young adults greatly impacts whether or not the family
                            dog will use its teeth...</p>
                    </div>
                </article>
            </div>
            <div class="col-xl-3 col-sm-6 wow flipInY">
                <article class="post">
                    <figure class="post-figure"><img src="{{ asset('website/images/post-01-512x300.jpg') }}"
                            alt="" width="512" height="300" />
                    </figure>
                    <div class="post-body">
                        <p class="puppy_name">Customer Name </p>
                        <div class="product-rating ">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>

                        <p class="post-text">Dogs use their mouth and teeth to grab and hold onto objects. How these
                            dogs are treated as puppies and as young adults greatly impacts whether or not the family
                            dog will use its teeth...</p>
                    </div>
                </article>
            </div>

        </div>
    </section>
</div>


@section('main-content')
@endsection
@push('styles')
    <style>
        article.post-6 {
            height: 252px;
        }

        .kennel_home_text {
            /* position: absolute; */
            bottom: 33px;
        }

        .product-rating {
            color: #ffc107;
        }

        .product-rating span {
            font-weight: 600;
            color: #252525;
        }

        .side-bar {
            padding: 12px;
            border-radius: 10px;
            background: #f9f9f9;

        }
        .modal-dialog {
            top: 75px;
        }

        .rounded-circle {
            /* border-radius: 65% !important;
            width: 200px;
            height: 200px; */
        }

        .carousel {
            margin: 25px 0 50px;
            background: #fff;
            position: relative;
            padding: 8px;
            box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
        }

        .carousel:before,
        .carousel:after {
            z-index: -1;
            position: absolute;
            content: "";
            bottom: 15px;
            left: 10px;
            width: 50%;
            top: 80%;
            max-width: 400px;
            background: rgba(0, 0, 0, 0.7);
            box-shadow: 0 15px 10px rgba(0, 0, 0, 0.7);
            transform: rotate(-3deg);
        }

        .carousel:after {
            transform: rotate(3deg);
            right: 10px;
            left: auto;
        }

        .carousel .carousel-item {
            text-align: center;
            min-height: 200px;
        }

        .carousel .carousel-item img {
            max-width: 100%;
            margin: 0 auto;
            /* Align slide image horizontally center in Bootstrap v3 */
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 27px;
            height: 54px;
            overflow: hidden;
            opacity: 1;
            margin: auto 0;
            background: none;
            text-shadow: none;
        }

        .carousel-control-prev span,
        .carousel-control-next span {
            width: 54px;
            height: 54px;
            display: inline-block;
            background: #4a4a4a;
            border-radius: 50%;
            box-shadow: 0 0 1px rgba(0, 0, 0, 0.3);
        }

        .carousel-control-prev span {
            margin-right: -27px;
        }

        .carousel-control-next span {
            margin-left: -27px;
        }

        .carousel-control-prev:hover span,
        .carousel-control-next:hover span {
            background: #3b3b3b;
        }

        .carousel-control-prev i,
        .carousel-control-next i {
            font-size: 24px;
            margin-top: 13px;
        }

        .carousel-control-prev {
            margin-left: -28px;
        }

        .carousel-control-next {
            margin-right: -28px;
        }

        .carousel-control-prev i {
            margin-left: -24px;
        }

        .carousel-control-next i {
            margin-right: -24px;
        }

        .carousel-indicators {
            bottom: -42px;
        }

        .carousel-indicators li,
        .carousel-indicators li.active {
            width: 11px;
            height: 11px;
            border-radius: 50%;
            margin: 1px 4px;
        }

        .carousel-indicators li {
            border: 1px solid #475c6f;
        }

        .carousel-indicators li.active {
            background: #000000;
            border-color: #000000;
        }
    </style>
@endpush
@push('scripts')
@endpush
