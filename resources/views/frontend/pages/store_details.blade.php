<?php  
    use App\Models\Product;
    use App\Models\Vendor;
    use App\Models\Category;
    
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
<div class="container mt-5">
    <div class="row ">
        <div class="col-md-3">
            <div class="card pb-5">
                <img src="{{asset('frontend/images/logo.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="quick-social-media-wrapper u-s-m-b-22">
                        <span>Share:</span>
                        <ul class="list-unstyled d-flex ratings">
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <span class="reviewCount">(245)</span>
                        </ul>
                    </div>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card border-0">
                <div class="card-body">
                    <h5 class="card-title">{{$vendorDetails['shop_name']}} </h5>
                    <p class="card-text">{{$vendorDetails['country']}}, {{$vendorDetails['state']}} , {{$vendorDetails['city']}}</p>
                    <ul class="list-unstyled d-flex ratings">
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                        <span class="reviewCount">(245)</span>
                    </ul>
                    <div class="row detailedBox">
                        <div class="col-md-4 col-6">
                            <ul class="list-unstyled">
                                <li class="pb-2"><i class="fas fa-car"></i> Delivery only</li>
                                <li class="pb-2"><i class="fas fa-id-card"></i> Delivery</li>
                                <li class="pb-2"><i class="fas fa-shopping-cart"></i> Order online (delivery)</li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-6">
                            <ul class="list-unstyled">
                                <li class="pb-2"><i class="fas fa-clock"></i> <span style="color: rgb(0, 183, 0); font-weight: bold;">Registration number(s) </span></li>
                                <li class="pb-2">
                                    <div class="favBrand favoriteButton retailer-single-fvt-btn"><a href=""><i class="far fa-heart pe-4 shadow ms-3"></i></a> <span class="followers"> 309 followers</span></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="container mb-5">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Kennel Details</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="puppies-tab" data-toggle="tab" href="#puppies" role="tab" aria-controls="puppies" aria-selected="false">kennels Puppies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="breeds-tab" data-toggle="tab" href="#breeds" role="tab" aria-controls="breeds" aria-selected="false">Kennel Breeds Puppis</a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Reviews</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row m-5">

                        <section>
                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th scope="row">Name</th>
                                  <td>{{$vendorDetails['shop_name']}}</td>
                                  <th scope="row">Name</th>
                                  <td>{{$vendorDetails['shop_name']}}</td>
                                </tr>
                              </thead>
                              <tbody>
                
                                <tr>
                                  <th scope="row">shop_owner</th>
                                  <td>{{$vendorDetails['shop_owner']}}</td>
                                  <th scope="row">vendor_Affiliation</th>
                                  <td>{{$vendorDetails['vendor_Affiliation']}}</td>
                                </tr>
                                <tr>
                                  <th scope="row">registration_number</th>
                                  <td>{{$vendorDetails['registration_number']}}</td>
                                  <th scope="row">Name</th>
                                  <td>{{$vendorDetails['shop_name']}}</td>
                                </tr>
                                <tr>
                                  <th scope="row">established_year</th>
                                  <td>{{$vendorDetails['established_year']}}</td>
                                  <th scope="row">number_of_litters</th>
                                  <td>{{$vendorDetails['number_of_litters']}}</td>
                                </tr>
                                <tr>
                                  <th scope="row">country</th>
                                  <td>{{$vendorDetails['country']}}</td>
                                  <th scope="row">state</th>
                                  <td>{{$vendorDetails['state']}}</td>
                                </tr>
                                <tr>
                                  <th scope="row">city</th>
                                  <td>{{$vendorDetails['city']}}</td>
                                  <th scope="row">helth_check</th>
                                  <td>{{$vendorDetails['helth_check']}}</td>
                                </tr>
                                
                              </tbody>
                            </table>
                          </section>


                    </div>
                </div>
                <div class="tab-pane fade" id="puppies" role="tabpanel" aria-labelledby="puppies-tab">
                    <div class="row">
                       
                        @forelse ($getProducts as $pro)
                            <div class="col-4">
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
                            <p>Puppies not found.......</p>
                        @endforelse
                    </div>   
                </div>
                <div class="tab-pane fade" id="breeds" role="tabpanel" aria-labelledby="breeds-tab">
                    <div class="row">
                       @forelse ($getBreeds as $asas)
                       <div class="col-4">
                        <div class="card text-center single-product" >
                            <div class="card-header">
                                <a href="{{route('storeDetails',$asas['vendors']['slug'])}}">
                                <div class="d-flex  round-image"> 
                                    <img src="{{asset('storage/admin/images/admin_photos/category/'.$asas['category']['image'])}}" alt="user" style="border-radius: 20%; 
                                    width: 50px;
                                    height: 50px;">
                                    <div>
                                    <div class="ml-3">
                                        <p class="text-info mb-1">{{$asas['vendors']['shop_name']}}</p>
                                    </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="card-body">
                                <a href="{{route('storeDetails',$asas['vendors']['slug'])}}" target="_blank">
                                    <img class="default-img" src="{{asset('storage/admin/images/admin_photos/category/'.$asas['category']['image'])}}" style="border-radius: 5%;" alt="#">
                                </a>
                                <div class="product-price">
                                    <span></span>/<span>{{$asas['vendors']['state']}}</span>/<span>{{$asas['vendors']['city']}}</span>
                                </div>
                    
                        
                            </div>
                        </div>
                       </div>
                       @empty
                           <p>No breeds founds</p>
                       @endforelse
                    </div>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Store Spots</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>

            </div>
          </div>
         
    </div>
</div>
@endsection
@push('styles')
@endpush
@push('scripts')
@endpush