<?php

use App\Models\Product;
?>
@extends('layouts.frontend_app')

@section('main-content')
    <header class="header-slider">


        @include('frontend.partials.home-slider')


        <div class="rd-navbar-wrap">

            @include('frontend.partials.header')


        </div>

        {{-- <a class="waypoints-link fa fa-angle-double-down novi-icon" href="#services" data-custom-scroll-to="services"></a> --}}
    </header>

    <!-- Services-->
    <section class="section section-md bg-default" id="services">
        <div class="container">
            <div class="row row-30 row-count">
                <div class="col-lg-4 col-sm-6 wow slideInLeft">
                    <article class="services">
                        <h3 class="service"><a href="#">Puppies </a></h3>
                        <figure class="services-figure"><a href="#"><img
                                    src="{{ asset('website/images/services-01-370x230.jpg') }}" alt=""
                                    width="370" height="230" /></a></figure>
                        <p class="services-text"> Check out the puppies and planned litters available from our certified
                            kennels.</a>
                    </article>
                </div>
                <div class="col-lg-4 col-sm-6 wow slideInUp">
                    <article class="services">
                        <h3 class="service"><a href="#">Kennels</a></h3>
                        <figure class="services-figure"><a href="#"><img
                                    src="{{ asset('website/images/services-01-370x230.jpg') }}" alt=""
                                    width="370" height="230" /></a></figure>
                        <p class="services-text"> With an estimate of over 80% of pet ads may be fraudulent, Trusted Kennels
                            helps you find reputable trust worthy kennels </a>
                    </article>
                </div>
                <div class="col-lg-4 col-sm-6 wow slideInRight">
                    <article class="services">
                        <h3 class="service"><a href="#">Services</a></h3>
                        <figure class="services-figure"><a href="#"><img
                                    src="{{ asset('website/images/services-01-370x230.jpg') }}" alt=""
                                    width="370" height="230" /></a></figure>
                        <p class="services-text"> From transportation and importation services to handlers, vets and
                            groomers, we only recommend top-rated propviders.</a>
                    </article>
                </div>
            </div>
        </div>
    </section>
    {{-- <div class="container-fluid">
      <div class="row row-30 row-count">
        <div class="col-lg-4  col-sm-6 wow slideInLeft">
          <article class="services">
            <figure class="services-figure">
              <a href="#">
                <img src="{{asset('website/images/services-01-370x230.jpg')}}" alt="" width="370" height="230"/>
              </a>
              <div class="services-textsss bgcolor">
                  <a href="" style="color: white; font-size: 29px;"> Find a Puppy</a>
              </div>
            </figure>
          
          </article>
        </div>
        <div class="col-lg-4  col-sm-6 wow slideInUp">
          <article class="services">
            <figure class="services-figure"><a href="#">
                <img src="{{asset('website/images/services-02-370x230.jpg')}}" alt="" width="370" height="230"/>
              </a>
              <div class="services-textsss bgcolor">
                <a href="" style="color: white; font-size: 29px;">  Find a Kennel </a>
              </div>
            </figure>
           
          </article>
        </div>
        <div class="col-lg-4 col-sm-6 wow slideInRight">
          <article class="services">
            <figure class="services-figure"><a href="#">
                <img src="{{asset('website/images/services-03-370x230.jpg')}}" alt="" width="370" height="230"/>
              </a>
              <div class="services-textsss bgcolor">
                <a href="" style="color: white; font-size: 29px;"> Services </a>
              </div>
            </figure>
          
          </article>
        </div>
      </div>
    </div> --}}


    <!-- Why Choose us-->
    <section class="section section-md bg-default">
        <div class="container">
            <hr class="pb-4">
            <h3 class="text-center">WHY WE STAND OUT IN THE CROWD</h3>
            <div class="pt-2 pb-2">



            </div>
            <div class="row row-30">
                <div class="col-lg-4 col-sm-6 wow flipInX">
                    <div class="unit align-items-center">
                        <div class="unit-left"><img src="{{ asset('website/images/home-01-54x57.png') }}" alt=""
                                width="54" height="57" />
                        </div>
                        <div class="unit-body">
                            <h5><a href="#">SCAM-FREE GUARANTEE</a></h5>
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
                        <div class="unit-left"><img src="{{ asset('website/images/home-06-54x57.png') }}" alt=""
                                width="54" height="57" />
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

    {{-- <section class="parallax-container section-xl context-dark" data-parallax-img="{{ asset('website/images/parallax3.jpg') }}" style="display: block;width: 100%;">
        <div class="parallax-content">
            <div class="container">
                <h1>Not Sure Which dog Breed is right for you ?</h1>
                <h2>Start with our breed questionnaire and we will send you the best dog breeds for you.</h2>
                <a class="button button-white-outline" href="#">BREED QUESTIONNAIRE</a>
            </div>
        </div>
    </section> --}}

    <section class="section section-md bg-default pb-0">
        <div class="container">
            <h3 class="text-center">Trending</h3>
        </div>
        <div class="row no-gutters">
            <div class="col-xl-3 col-sm-6 wow flipInY">
                <article class="post">
                    <figure class="post-figure"><img src="{{ asset('website/images/post-01-512x300.jpg') }}"
                            alt="" width="512" height="300" />
                    </figure>
                    <div class="post-body">
                        <p class="puppy_name">Puppy name: </p>
                        <h5 class="post-title"><a href="#">Kennel name:</a></h5>
                        <h6 class="post-title"><a href="#">Breed name:</a></h6>

                        <p class="post-text">Dogs use their mouth and teeth to grab and hold onto objects. How these dogs
                            are treated as puppies and as young adults greatly impacts whether or not the family dog will
                            use its teeth...</p>
                    </div>
                </article>
            </div>
            <div class="col-xl-3 col-sm-6 wow flipInY">
                <article class="post">
                    <figure class="post-figure"><img src="{{ asset('website/images/post-02-512x300.jpg') }}"
                            alt="" width="512" height="300" />
                    </figure>
                    <div class="post-body">
                        <p class="puppy_name">Puppy name: </p>
                        <h5 class="post-title"><a href="#">Kennel name:</a></h5>
                        <h6 class="post-title"><a href="#">Breed name:</a></h6>

                        <p class="post-text">Dogs use their mouth and teeth to grab and hold onto objects. How these dogs
                            are treated as puppies and as young adults greatly impacts whether or not the family dog will
                            use its teeth...</p>
                    </div>
                </article>
            </div>
            <div class="col-xl-3 col-sm-6 wow flipInY">
                <article class="post">
                    <figure class="post-figure"><img src="{{ asset('website/images/post-03-512x300.jpg') }}"
                            alt="" width="512" height="300" />
                    </figure>
                    <div class="post-body">
                        <p class="puppy_name">Puppy name: </p>
                        <h5 class="post-title"><a href="#">Kennel name:</a></h5>
                        <h6 class="post-title"><a href="#">Breed name:</a></h6>

                        <p class="post-text">Dogs use their mouth and teeth to grab and hold onto objects. How these dogs
                            are treated as puppies and as young adults greatly impacts whether or not the family dog will
                            use its teeth...</p>
                    </div>
                </article>
            </div>
            <div class="col-xl-3 col-sm-6 wow flipInY">
                <article class="post">
                    <figure class="post-figure"><img src="{{ asset('website/images/post-04-512x300.jpg') }}"
                            alt="" width="512" height="300" />
                    </figure>
                    <div class="post-body">
                        <p class="puppy_name">Puppy name: </p>
                        <h5 class="post-title"><a href="#">Kennel name:</a></h5>
                        <h6 class="post-title"><a href="#">Breed name:</a></h6>

                        <p class="post-text">Dogs use their mouth and teeth to grab and hold onto objects. How these dogs
                            are treated as puppies and as young adults greatly impacts whether or not the family dog will
                            use its teeth...</p>
                    </div>
                </article>
            </div>
            <div class="col-xl-3 col-sm-6 wow flipInY">
                <article class="post">
                    <figure class="post-figure"><img src="{{ asset('website/images/post-05-512x300.jpg') }}"
                            alt="" width="512" height="300" />
                    </figure>
                    <div class="post-body">
                        <p class="puppy_name">Puppy name: </p>
                        <h5 class="post-title"><a href="#">Kennel name:</a></h5>
                        <h6 class="post-title"><a href="#">Breed name:</a></h6>

                        <p class="post-text">Dogs use their mouth and teeth to grab and hold onto objects. How these dogs
                            are treated as puppies and as young adults greatly impacts whether or not the family dog will
                            use its teeth...</p>
                    </div>
                </article>
            </div>
            <div class="col-xl-3 col-sm-6 wow flipInY">
                <article class="post">
                    <figure class="post-figure"><img src="{{ asset('website/images/post-06-512x300.jpg') }}"
                            alt="" width="512" height="300" />
                    </figure>
                    <div class="post-body">
                        <p class="puppy_name">Puppy name: </p>
                        <h5 class="post-title"><a href="#">Kennel name:</a></h5>
                        <h6 class="post-title"><a href="#">Breed name:</a></h6>

                        <p class="post-text">Dogs use their mouth and teeth to grab and hold onto objects. How these dogs
                            are treated as puppies and as young adults greatly impacts whether or not the family dog will
                            use its teeth...</p>
                    </div>
                </article>
            </div>
            <div class="col-xl-3 col-sm-6 wow flipInY">
                <article class="post">
                    <figure class="post-figure"><img src="{{ asset('website/images/post-07-512x300.jpg') }}"
                            alt="" width="512" height="300" />
                    </figure>
                    <div class="post-body">
                        <p class="puppy_name">Puppy name: </p>
                        <h5 class="post-title"><a href="#">Kennel name:</a></h5>
                        <h6 class="post-title"><a href="#">Breed name:</a></h6>

                        <p class="post-text">Dogs use their mouth and teeth to grab and hold onto objects. How these dogs
                            are treated as puppies and as young adults greatly impacts whether or not the family dog will
                            use its teeth...</p>
                    </div>
                </article>
            </div>
            <div class="col-xl-3 col-sm-6 wow flipInY">
                <article class="post">
                    <figure class="post-figure"><img src="{{ asset('website/images/post-08-512x300.jpg') }}"
                            alt="" width="512" height="300" />
                    </figure>
                    <div class="post-body">
                        <p class="puppy_name">Puppy name: </p>
                        <h5 class="post-title"><a href="#">Kennel name:</a></h5>
                        <h6 class="post-title"><a href="#">Breed name:</a></h6>

                        <p class="post-text">Dogs use their mouth and teeth to grab and hold onto objects. How these dogs
                            are treated as puppies and as young adults greatly impacts whether or not the family dog will
                            use its teeth...</p>
                    </div>
                </article>
            </div>
        </div>
    </section>
@endsection

@push('styles')
    <style>
        .services-textsss {
            position: absolute;
            top: 150px;
            left: 32%;
            color: white;
        }

        .bgcolor {
            top: 0;
            background: black;
            height: 100%;
            left: 15px;
            width: 94%;
            opacity: 0.5;
        }


        .services-textsss.bgcolor a {
            text-align: center;
            top: 162px;
            z-index: 0;
        }

        .aria-img {
            position: relative;
        }

        .aria-text {
            position: absolute;
            width: 50%;
            top: 169px;
            left: 58px;
            color: white;
        }

        .aria-text h2 {
            color: white;
        }

        .aria-text p {
            font-size: 38px;
        }

        .button-white-outline,
        .button-white-outline .aria-btn {
            /* color: #ffffff;
                        width: 301px;
                        letter-spacing: 3px;
                        font-weight: 100;

                        background-color: transparent;
                        border-color: #ffffff;
                        font-weight: 100; */
        }

        .button-white-outline,
        .button-white-outline:focus {
            /* color: #ffffff;
                        width: 301px;
                        letter-spacing: 3px;
                        background-color: transparent;
                        border-color: #ffffff;
                        font-weight: 100; */
        }
    </style>
@endpush




@push('scripts')
@endpush
