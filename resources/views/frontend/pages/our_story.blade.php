<?php

use App\Models\Product;
?>
@extends('layouts.frontend_app')

@section('main-content')
    <header class="header-slider">

        <div class="rd-navbar-wrap">

            @include('frontend.partials.header')

        </div>
        <a class="waypoints-link fa fa-angle-double-down novi-icon" href="#services" data-custom-scroll-to="services"></a>
    </header>








    <section class="section section-md bg-default" style="padding-top: 104px;">
        <div class="container">
            <h3 class="text-center">Who we Are</h3>
            <div class="row row-30">
                <div class="col-md-5 wow slideInLeft"><img src="{{ asset('website/images/about-01-470x242.jpg') }}"
                        alt="" width="470" height="242" />
                </div>
                <div class="col-md-7 wow slideInRight">
                    <h5>Lorem ipsum dolor sit amet</h5>
                    <p>Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque
                        penatibus et magnis dis parturient ontes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada
                        odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis
                        ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit
                        amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut
                        tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit.</p><a
                        class="button button-default" href="#">Read More</a>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <hr>
    <br>
    <br>
    <section class="section section-md bg-default">
        <div class="container">
            <h3 class="text-center" style="    font-family: Amatic Sc;
      font-size: 40px;
      padding-bottom: 34px;">
                Our Principles</h3>
            <div class="row row-30">
                <div class="col-lg-3 col-sm-6 wow slideInUp">
                    <article class="post-6">
                        <figure><a href="#"><img src="{{ asset('website/images/about-02-270x230.jpg') }}"
                                    alt="" width="270" height="230" /></a></figure>
                        <h5><a href="#">Fusce Suscipit</a></h5>
                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam.</p><a class="button button-default"
                            href="#">Read More</a>
                    </article>
                </div>
                <div class="col-lg-3 col-sm-6 wow slideInUp">
                    <article class="post-6">
                        <figure><a href="#"><img src="{{ asset('website/images/about-03-270x230.jpg') }}"
                                    alt="" width="270" height="230" /></a></figure>
                        <h5><a href="#">Maecenas Tris</a></h5>
                        <p>Ei sumo eruditi sadipscing nec, scripta epicurei ut eam. Duo ut fastidii platonem, eu soleat
                            salutandi neglegentur est. Erant harum malorum eum ne, his.</p><a class="button button-default"
                            href="#">Read More</a>
                    </article>
                </div>
                <div class="col-lg-3 col-sm-6 wow slideInUp">
                    <article class="post-6">
                        <figure><a href="#"><img src="{{ asset('website/images/about-04-270x230.jpg') }}"
                                    alt="" width="270" height="230" /></a></figure>
                        <h5><a href="#">Aenean Non</a></h5>
                        <p>Vel nihil percipitur ei. Fugit option oportere est in, te dignissim philosophia mea, duo diceret
                            eruditi ea. In eum porro bonorum, ut stet partiendo.</p><a class="button button-default"
                            href="#">Read More</a>
                    </article>
                </div>
                <div class="col-lg-3 col-sm-6 wow slideInUp">
                    <article class="post-6">
                        <figure><a href="#"><img src="{{ asset('website/images/about-05-270x230.jpg') }}"
                                    alt="" width="270" height="230" /></a></figure>
                        <h5><a href="#">Morbi Nunc</a></h5>
                        <p>Te partem omnesque eligendi has, nam ex persius lobortis. His ex amet facilis, ne vix diceret
                            dolorum. Veniam nonumes sit an. Sit et possit hendrerit.</p><a class="button button-default"
                            href="#">Read More</a>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <br><br>

    <br>
    <br>
    <br>
    <br>
    <hr>
    <br>
    <br>
    <section class="parallax-container section-xl context-dark"
        data-parallax-img="{{ asset('website/images/parallax2.jpg') }}">
        <div class="parallax-content">
            <div class="container">
                <h1>WORK WITH YOUR LOCAL ORGANIZATION</h1>
                <h2>TO HELP SAVE ANIMALS TODAY</h2><a class="button button-white-outline" href="#">DONATE</a>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <p class="text-center pt-3"
                style="    font-family: Amatic Sc;
      font-size: 40px;
      padding-bottom: 34px;">Adopt</p>

            <div class="row">
                <div class="align-self-center col-sm-4 text-center">

                    <a href="https://www.petfinder.com/" target="_blank">
                        <img src="{{ asset('frontend/images/petfinder.png') }}" alt="" class="w-50"></a>
                </div>
                <div class="align-self-center col-sm-4 text-center">

                    <a href="https://petsmartcharities.org/adopt-a-pet" target="_blank">
                        <img src="{{ asset('frontend/images/petsmart.png') }}" alt="" class="w-50"></a>
                </div>
                <div class="align-self-center col-sm-4 text-center">
                    <a href="https://theshelterpetproject.org/" target="_blank">
                        <img src="{{ asset('frontend/images/shelter.png') }}" alt="" class="w-50"> </a>
                </div>

            </div>
        </div>
    </section>

    <!-- Upcoming Events-->
    <section class="section section-md bg-default">
        <div class="container">
            <h3 class="text-center"
                style="    font-family: Amatic Sc;
          font-size: 40px;
          padding-bottom: 34px;"> NEWS &
                ARTICLES </h3>
            <div class="row row-30">
                <div class="col-lg-4 col-sm-6 wow slideInUp">
                    <article class="post-7">
                        <figure><a href="#"><img src="{{ asset('website/images/events-08-371x230.jpg') }}"
                                    alt="" width="371" height="230" /></a></figure>
                        <h5 class="group-sm">
                            <time class="text-gray-500" datetime="2019">25 APRIL, 2019</time><a href="#">Fusce
                                Suscipit</a>
                        </h5>
                        <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam.</p><a class="button button-default"
                            href="#">Read More</a>
                    </article>
                </div>
                <div class="col-lg-4 col-sm-6 wow slideInUp">
                    <article class="post-7">
                        <figure><a href="#"><img src="{{ asset('website/images/events-09-371x230.jpg') }}"
                                    alt="" width="371" height="230" /></a></figure>
                        <h5 class="group-sm">
                            <time class="text-gray-500" datetime="2019">25 APRIL, 2019</time><a href="#">Maecenas
                                Tris</a>
                        </h5>
                        <p>Ei sumo eruditi sadipscing nec, scripta epicurei ut eam. Duo ut fastidii platonem, eu soleat
                            salutandi neglegentur est. Erant harum malorum eum ne, his.</p><a class="button button-default"
                            href="#">Read More</a>
                    </article>
                </div>
                <div class="col-lg-4 col-sm-6 wow slideInUp">
                    <article class="post-7">
                        <figure><a href="#"><img src="{{ asset('website/images/events-10-371x230.jpg') }}"
                                    alt="" width="371" height="230" /></a></figure>
                        <h5 class="group-sm">
                            <time class="text-gray-500" datetime="2019">25 APRIL, 2019</time><a href="#">Aenean
                                Non</a>
                        </h5>
                        <p>Vel nihil percipitur ei. Fugit option oportere est in, te dignissim philosophia mea, duo diceret
                            eruditi ea. In eum porro bonorum, ut stet partiendo.</p><a class="button button-default"
                            href="#">Read More</a>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us-->
    <section class="section section-md bg-default">
        <div class="container">
            <h3 class="text-center">Contact Us</h3>
            <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact"
                method="post" action="bat/rd-mailform.php">
                <div class="row row-sm-bottom row-20">
                    <div class="col-md-6">
                        <div class="form-wrap">
                            <input class="form-input" id="contact-2-name" type="text" name="name"
                                data-constraints="">
                            <label class="form-label" for="contact-2-name">Your Name</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-wrap">
                            <input class="form-input" id="contact-2-email" type="email" name="email"
                                data-constraints="">
                            <label class="form-label" for="contact-2-email">E-mail</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-wrap">
                            <label class="form-label" for="contact-2-message">Your Message</label>
                            <textarea class="form-input" id="contact-2-message" name="message" data-constraints=""></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="button button-default" type="submit">Send Message</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection

@push('styles')
    <style>
        p.pt-3.text-center {
            font-size: 41px;
            color: black;
        }
    </style>
@endpush




@push('scripts')
@endpush
