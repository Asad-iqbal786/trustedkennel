<?php  

use App\Models\Product;
?>
@extends('layouts.frontend_app')

@section('main-content')


    <header class="header-slider">
        <div class="swiper-container swiper-slider" >
            <div class="swiper-wrapper">
            <div class="swiper-slide context-dark" data-slide-bg="{{asset('website/images/slider-01-2048x1000.jpg')}}">
                <div class="swiper-slide-caption">
                <div class="container">
                    <div class="row justify-content-center justify-content-xl-start text-center text-xl-left">
                    <div class="col-lg-7 col-md-8 col-sm-10">
                
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="rd-navbar-wrap">
        
        @include('frontend.partials.header')

        </div>
        <a class="waypoints-link fa fa-angle-double-down novi-icon" href="#services" data-custom-scroll-to="services"></a>
    </header>

    <section class="section section-md bg-default" id="services">
        <div class="container">
        <div class="row row-30 row-count">
            <div class="col-lg-4 col-sm-6 wow slideInLeft">
            <article class="services">
                <h3 class="services-title"><a href="#">personal Training</a></h3>
                <figure class="services-figure"><a href="#"><img src="{{asset('website/images/services-01-370x230.jpg')}}" alt="" width="370" height="230"/></a></figure>
                <p class="services-text">While working one on one with your personal trainer you and your pet will learn the commands you desire to teach your dog. Sessions are typically 45 minutes to an hour, once weekly.</p><a class="button button-default" href="#">Read More</a>
            </article>
            </div>
            <div class="col-lg-4 col-sm-6 wow slideInUp">
            <article class="services">
                <h3 class="services-title"><a href="#">Group Training</a></h3>
                <figure class="services-figure"><a href="#"><img src="{{asset('website/images/services-02-370x230.jpg')}}" alt="" width="370" height="230"/></a></figure>
                <p class="services-text">We’re going to change the way you communicate with your dog.  To do this, we’ve designed every group class with you and your dog in mind to achieve the best results for you and your dog.</p><a class="button button-default" href="#">Read More</a>
            </article>
            </div>
            <div class="col-lg-4 col-sm-6 wow slideInRight">
            <article class="services">
                <h3 class="services-title"><a href="#">Board &amp; Train</a></h3>
                <figure class="services-figure"><a href="#"><img src="{{asset('website/images/services-03-370x230.jpg')}}" alt="" width="370" height="230"/></a></figure>
                <p class="services-text">Everything you want and need in one package. Private Lessons, Group Classes, Dog eLearning, and Customized Homework. We train your dog and teach you how to follow through.</p><a class="button button-default" href="#">Read More</a>
            </article>
            </div>
        </div>
        </div>
    </section>
    <div class="container">
        <!--RD Mailform-->

        <h5 class="text-center">SERVICES FORM</h5>
        <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
          <div class="row row-sm-bottom row-20">
            <div class="col-md-6">
              <div class="form-wrap">
                <input class="form-input" id="contact-2-first_name" type="text" name="first_name" data-constraints="">
                <label class="form-label" for="contact-2-first_name">First Name</label>
              </div>
            </div>
            <div class="col-md-6">
                <div class="form-wrap">
                  <input class="form-input" id="contact-2-last_name" type="text" name="last_name" data-constraints="">
                  <label class="form-label" for="contact-2-last_name">Last Name</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-wrap">
                  <input class="form-input" id="contact-2-country" type="text" name="country" data-constraints="" >
                  <label class="form-label" for="contact-2-country">City,State, Country </label>
                </div>
              </div>
            <div class="col-md-6">
              <div class="form-wrap">
                <input class="form-input" id="contact-2-email" type="email" name="email" data-constraints=" " >
                <label class="form-label" for="contact-2-email">E-mail</label>
              </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleFormControlSelect3">Service type</label>
                    <select class="form-control form-control-sm" id="exampleFormControlSelect3" name="service_type" >
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
            </div>
            <div class="col-md-6">
                <div class="form-wrap">
                  <label class="form-label" for="contact-2-email">Additional Details </label>
                  <textarea name="" id=""  class="form-input" cols="30" rows="10">

                  </textarea>
                </div>
              </div>
            <div class="col-12">
              <button class="button button-default" type="submit">Submit</button>
            </div>
          </div>
        </form>
    </div>





@endsection

@push('styles')

@endpush




@push('scripts')

@endpush
