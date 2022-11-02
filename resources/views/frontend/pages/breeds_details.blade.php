<?php  

use App\Models\Product;
?>
@extends('layouts.frontend_app')

@section('main-content')

	<!-- Breadcrumbs -->
    <div class="breadcrumbds">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <div class="d">
                            <div class="carouselx-itemx-slidexr  images_puppy">
                                <img src="{{asset('frontend/images/slider.jpg')}}" class="" alt="...">
                                <div class="carousel-caption-slider rights">
                                  <h3>Bring the gap Between families and kennels</h3>
                                </div>
                                <div class="carousel-caption-slider lefts ">
                                    <h3>Find A Puppy</h3>
                                    <h5 class="pt-3">Breed Name : {{$catName['name']}}</h5>
                                  </div>
                            </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <section class="product-area shop-sidebar shop section">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-12 col-md-8 col-12">
                    
                    <div class="row">
                        @forelse  ($getCatProducts as $pro)
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="card text-center single-product" style="border-radius:0px 0px 50px 50px;" >
                                <div class="card-headeer">
                                    <a class="item-img-wrapper-link" href="{{route('PuppyDetails',$pro['slug'])}}">
                                        <img class="img-fluid" src="{{asset('storage/admin/images/admin_photos/product_medium/'.$pro['image'])}}" alt="Product">
                                        {{-- Puppy Name :{{$pro['sire_name']}} --}}
                                    </a>
                                </div>
                                <div class="card-body">
                                    <a href="{{route('PuppyDetails',$pro['slug'])}}" target="_blank">
                                        {{-- <img class="default-img" src="{{asset('storage/admin/images/admin_photos/product_medium/'.$pro['image'])}}" style="border-radius: 5%;" alt="#"> --}}
                                    </a>
                                  <p class="card-text"><a href="{{route('PuppyDetails',$pro['slug'])}}" target="_blank">Puppy Name :{{$pro['sire_name']}}</a></p>
                                  <a href="{{route('PuppyDetails',$pro['slug'])}}" class="badge badge-warning">Adopt</a>
                                  <p class="card-text"><small class="text-muted">
                
                                    <a  href="{{route('catDetails',$pro['category']['id'])}}" target="_blank">Kennel Name : {{$pro['category']['name']}}</small></a>
                                    
                                    </p>
                                  <p class="card-text"><small class="text-muted">Age {{$pro['dam_registration_number']}}</small></p>
                                  <p class="card-text"><small class="text-muted">Price </small></p>
                
                            
                                </div>
                            </div>
                        </div>
                        @empty
                            
                        @endforelse
                    

                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="product-area shop-sidebar shop section">
        <div class="row">
            @forelse ($getCatProducts as $pro)

            <div class="col-lg-3 col-md-6 col-12 m-3">
                <div class="card text-center single-product" style="border-radius:0px 0px 50px 50px;">
                    <div class="card-headeer">
                        <a class="item-img-wrapper-link" href="http://127.0.0.1:8000/puppy-details/gurman-sheferdf">
                            <img class="img-fluid" src="{{asset('storage/admin/images/admin_photos/product_medium/'.$pro['image'])}}" alt="Product">
                            
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="http://127.0.0.1:8000/puppy-details/gurman-sheferdf" target="_blank">
                            
                        </a>
                      <p class="card-text"><a href="http://127.0.0.1:8000/puppy-details/gurman-sheferdf" target="_blank">Puppy Name :Gurman Sheferdf</a></p>
                      <a href="http://127.0.0.1:8000/puppy-details/gurman-sheferdf" class="badge badge-warning">Adopt</a>
                      <p class="card-text"><small class="text-muted">
    
                        <a href="http://127.0.0.1:8000/category-details/1" target="_blank">Kennel Name : Affenpinscher</a></small>
                        
                        </p>
                      <p class="card-text"><small class="text-muted">Age 2022-08-10</small></p>
                      <p class="card-text"><small class="text-muted">Price </small></p>
    
                
                    </div>
                </div>
            </div>
            @empty
                
            @endforelse
        </div>
    </section> --}}



    <section class="shop-newsletter section">
        <div class="container">
            <div class="inner-top">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-12">
                        <div class="inner">
                            <h4>Newsletter</h4>
                            <p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
                            <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                                <input name="EMAIL" placeholder="Your email address" required="" type="email">
                                <button class="btn">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('styles')
<style>

    .images_puppy img {
        height: 286px;
        width: 100%;
    }
    .carousel-caption-slider {
        position: absolute;
        top: 201px;
        padding-left: 124px;
        /* width: 808px; */
        color: white;
        /* bottom: 5px; */
        right: 47px;
    }
    .leftsr h3 {
        font-size: 24px;
    }
    .lefts {
    position: absolute;
    top: 104px;
    /* padding-left: 124px; */
    /* width: 808px; */
    /* color: white; */
    /* bottom: 5px; */
    left: -8px;
    }

    .leftsr h4 {
        font-size: 24px;
    }
    .carousel-caption-slider h3 {
        font-size: 30px;
    }
</style>

@endpush




@push('scripts')

@endpush
