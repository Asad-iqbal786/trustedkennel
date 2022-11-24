<?php

?>
@extends('layouts.frontend_app')

@section('main-content')
    <header class="header-slider">

        <div class="rd-navbar-wrap">

            @include('frontend.partials.header')

        </div>
        <a class="waypoints-link fa fa-angle-double-down novi-icon" href="#services" data-custom-scroll-to="services"></a>
    </header>




    <div class="card-wrapper">
        <div class="card">
            @if ($imgCount == 0)
                <div class="product-imgs">
                    <div class="img-display">
                        <div class="img-showcase">

                            <img src="{{ asset('storage/admin/images/admin_photos/product_large/' . $puppyDetails['image']) }}">

                        </div>
                    </div>
                </div>
            @else
                <div class="product-imgs">
                    <div class="img-display">
                        <div class="img-showcase">
                            @foreach ($getimg as $item)
                                <img src="{{ asset('storage/admin/images/vendors/puppy_image/' . $item['puppy_image']) }}">
                            @endforeach
                        </div>
                    </div>
                    <div class="row justify-content-center ">
                        <div class="align-items-center img-select text-center w-75">
                            @foreach ($getimg as $item)
                                <div class="img-item">
                                    <a href="#" data-id="{{ $item['id'] }}">
                                        <img src=" {{ asset('storage/admin/images/vendors/puppy_image/' . $item['puppy_image']) }}" alt="shoe image">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
           
            <div class="product-content">
                <h2 class="product-titles">{{ $puppyDetails['sire_name'] }}</h2>
                <p></p>
                <a href="#" class="prodxxuct-link">{{ $puppyDetails['vendors']['kennel_name'] }}</a>
                <div class="product-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span>4.7(21)</span>
                </div>

                <div class="product-price">
                    <p class="last-price"> {{ $puppyDetails['gender'] }} {{ $puppyDetails['date_of_birth'] }} </p>
                    <p class="new-price"> $ {{ $puppyDetails['puppy_price'] }} </p>
                </div>

                <div class="d mb-3">



                    <p>{{ $puppyDetails['description'] }} </p>
                    <div class="pro-details mt-4 mb-4">
                        @if (Session::has('error_message'))
                            <div class="alert alert-warning error_message alert-dismissible fade show bg-gray-700"
                                role="alert">
                                {{ Session::get('error_message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        @if (Session::has('success_message'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                {{ Session::get('success_message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <form action="{{ route('applyForPuppies') }}" method="post">@csrf

                            <input type="hidden" name="puppy_id" id="" value="{{ $puppyDetails['id'] }}">
                            <input type="hidden" name="vendor_id" id="" value="{{ $puppyDetails['vendor_id'] }}">
                            <input type="hidden" name="price" id="" value="{{ $puppyDetails['puppy_price'] }}">
                            <div class="text-center">
                                <button type="submit" class="btn btn-info-black-outline mr-4 w-25">ADOPT</button>
                                <button class="btn btn-info-black-outline w-25">ASK</button>
                            </div>
                        </form>


                    </div>
                </div>


            </div>
        </div>
    </div>
    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                    aria-controls="home" aria-selected="true">SIRE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                    aria-controls="profile" aria-selected="false">DAM</a>
            </li>

        </ul>
        <div class="tab-content pt-5" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">


                <div class="row jumbotron ">
                    <div class="col-6 col-md-6">
                        <div class="product-detail">
                            <ul>
                                <li> {{ $puppyDetails['sire_name'] }} </li>
                                <li> {{ $puppyDetails['sire_registration'] }}</li>
                                <li>{{ $puppyDetails['description'] }}</li>
                                <li>{{ $puppyDetails['sire_height'] }} </li>
                                <li>{{ $puppyDetails['sire_weight_measure'] }} </li>
                                <li> {{ $puppyDetails['dam_health_tests_conducted'] }} </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6 col-md-6">
                        <div class="img-item">
                            <a href="#" data-id="3">
                                <img class="ml-md-auto"
                                    src="{{ asset('storage/admin/images/admin_photos/product_large/' . $puppyDetails['image']) }}"
                                    alt="shoe image" width="75%"
                                    style="    width: 344px; border-radius: 12px 12px 12px 12px;">
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
        </div>
    </div>

    <section class="section section-md bg-default">
        <div class="container">
            <h3 class="text-center">WHY WE STAND OUT IN THE CROWD</h3>
            <div class="row row-30">
                <div class="col-lg-4 col-sm-6 wow flipInX">
                    <div class="unit align-items-center">
                        <div class="unit-left"><img src="{{ asset('website/images/home-01-54x57.png') }}" alt=""
                                width="54" height="57" />
                        </div>
                        <div class="unit-body">
                            <h5><a href="#">SCAM-FREE GUARANTEEs</a></h5>
                        </div>
                    </div>
                    <p>Payment to kennels is withheld until you’ve received your puppy and have given us the thumbs-up.</p>
                </div>
                <div class="col-lg-4 col-sm-6 wow flipInX">
                    <div class="unit align-items-center">
                        <div class="unit-left"><img src="{{ asset('website/images/home-02-54x57.png') }}" alt=""
                                width="54" height="57" />
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
                <div class="col-lg-4 col-sm-6 wow flipInX">
                    <div class="unit align-items-center">
                        <div class="unit-left"><img src="{{ asset('website/images/home-04-54x57.png') }}" alt=""
                                width="54" height="57" />
                        </div>
                        <div class="unit-body">
                            <h5><a href="#">FULL OWNERSHIP</a></h5>
                        </div>
                    </div>
                    <p>Our trusted kennels offer full ownership including breeding rights.</p>
                </div>
                <div class="col-lg-4 col-sm-6 wow flipInX">
                    <div class="unit align-items-center">
                        <div class="unit-left"><img src="{{ asset('website/images/home-05-54x57.png') }}" alt=""
                                width="54" height="57" />
                        </div>
                        <div class="unit-body">
                            <h5><a href="#">EXCEPTIONAL BREEDERS</a></h5>
                        </div>
                    </div>
                    <p>We only work with top responsible breeders with history, tradition, and exceptional quality</p>
                </div>
                <div class="col-lg-4 col-sm-6 wow flipInX">
                    <div class="unit align-items-center">
                        <div class="unit-left"><img src="{{ asset('frontend/images/icon/dog-service.png') }}"
                                alt="" width="54" height="57" />
                        </div>
                        <div class="unit-body">
                            <h5><a href="#">FULL SERVICE</a></h5>
                        </div>
                    </div>
                    <p>Our experts handle all aspects of the adoption process ensuring a smooth worry-free experience.</p>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
    <style>
        .card {
            border: none;
        }


        .pro-details button {
            background: none;
            border: 1px solid #c9bdbd;

        }

        .alert.alert-warning.alert-dismissible.fade.show {
            background-color: yellowgreen;
            color: white;
        }


        .alert.alert-warning.error_message.alert-dismissible.fade.show.bg-gray-700 {
            background-color: rgb(163, 60, 0);
            color: white;
        }

        .btn {
            font-weight: 500;
        }

        .card-wrapper {
            max-width: 1100px;
            margin: 0 auto;
        }

        img {
            width: 100%;
            display: block;
        }

        .img-display {
            overflow: hidden;
        }

        .img-showcase {
            display: flex;
            width: 100%;
            transition: all 0.5s ease;
        }

        .img-showcase img {
            min-width: 100%;
        }

        .img-select {
            display: flex;
            width: 440px;
        }

        .img-item {
            margin: 0.3rem;
        }

        .img-item:nth-child(1),
        .img-item:nth-child(2),
        .img-item:nth-child(3) {
            margin-right: 0;
        }

        .img-item:hover {
            opacity: 0.8;
        }

        .product-content {
            padding: 2rem 1rem;
        }

        .product-title {
            font-size: 24px;
            text-transform: capitalize;
            font-weight: 700;
            position: relative;
            color: #12263a;
            margin: 1rem 0;
        }

        .product-title::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            height: 4px;
            width: 80px;
            background: #12263a;
        }

        .product-link {
            text-decoration: none;
            text-transform: uppercase;
            font-weight: 400;
            font-size: 0.9rem;
            display: inline-block;
            margin-bottom: 0.5rem;
            background: #256eff;
            color: #fff;
            padding: 0 0.3rem;
            transition: all 0.5s ease;
        }

        .product-link:hover {
            opacity: 0.9;
        }

        .product-rating {
            color: #ffc107;
        }

        .product-rating span {
            font-weight: 600;
            color: #252525;
        }

        .product-price {
            margin: 1rem 0;
            font-size: 1rem;
            font-weight: 700;
        }

        .product-price span {
            font-weight: 400;
        }

        .last-price span {
            color: #f64749;
            text-decoration: line-through;
        }

        .new-price span {
            color: #256eff;
        }

        .product-detail h2 {
            text-transform: capitalize;
            color: #12263a;
            padding-bottom: 0.6rem;
        }

        .product-detail p {
            font-size: 0.9rem;
            padding: 0.3rem;
            opacity: 0.8;
        }

        .product-detail ul {
            margin: 1rem 0;
            font-size: 0.9rem;
        }

        .product-detail ul li {
            margin: 0;
            list-style: none;
            background: url(https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/checked.png) left center no-repeat;
            background-size: 18px;
            padding-left: 1.7rem;
            margin: 0.4rem 0;
            font-weight: 600;
            opacity: 0.9;
        }

        .product-detail ul li span {
            font-weight: 400;
        }

        .purchase-info {
            margin: 1.5rem 0;
        }

        .purchase-info input,
        .purchase-info .btn {
            border: 1.5px solid #ddd;
            border-radius: 25px;
            text-align: center;
            padding: 0.45rem 0.8rem;
            outline: 0;
            margin-right: 0.2rem;
            margin-bottom: 1rem;
        }

        .purchase-info input {
            width: 60px;
        }

        .purchase-info .btn {
            cursor: pointer;
            color: #fff;
        }

        .purchase-info .btn:first-of-type {
            background: #256eff;
        }

        .purchase-info .btn:last-of-type {
            background: #f64749;
        }

        .purchase-info .btn:hover {
            opacity: 0.9;
        }

        .social-links {
            display: flex;
            align-items: center;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 32px;
            height: 32px;
            color: #000;
            border: 1px solid #000;
            margin: 0 0.2rem;
            border-radius: 50%;
            text-decoration: none;
            font-size: 0.8rem;
            transition: all 0.5s ease;
        }

        .social-links a:hover {
            background: #000;
            border-color: transparent;
            color: #fff;
        }

        @media screen and (min-width: 992px) {
            .card {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                grid-gap: 1.5rem;
            }

            .card-wrapper {
                height: 100vh;
                margin-top: 100px;
                margin-bottom: 78px;
                display: flex;
                justify-content: center;
                align-items: center;
            }



            .product-imgs {
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            .product-content {
                padding-top: 0;
            }
        }
    </style>
@endpush




@push('scripts')
    <script>
        const imgs = document.querySelectorAll('.img-select a');
        const imgBtns = [...imgs];
        let imgId = 1;

        imgBtns.forEach((imgItem) => {
            imgItem.addEventListener('click', (event) => {
                event.preventDefault();
                imgId = imgItem.dataset.id;
                slideImage();
            });
        });

        function slideImage() {
            const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

            document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
        }

        window.addEventListener('resize', slideImage);
    </script>
@endpush
