

<?php  

use App\Models\Product;
?>
@extends('layouts.frontend_app')

@section('main-content')

<div class="page-style-a">
    <div class="container">
        <div class="page-intro">
            <h2>Detail</h2>
            <ul class="bread-crumb">
                <li class="has-separator">
                    <i class="ion ion-md-home"></i>
                    <a href="home.html">Home</a>
                </li>
                <li class="is-marked">
                    <a href="single-product.html">Detail</a>
                </li>
            </ul>
        </div>
    </div>
</div>




<div class="page-detail u-s-p-t-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="zoom-area">
                    <img id="zoom-pro" class="img-fluid" src="{{asset('storage/admin/images/admin_photos/product_large/'.$puppyDetails['image'])}}" data-zoom-image="{{asset('storage/admin/images/admin_photos/product_large/'.$puppyDetails['image'])}}" alt="Zoom Image">
                    <div id="gallery" class="u-s-m-t-10">
                        <a class="active" data-image="images/product/product@4x.jpg" data-zoom-image="images/product/product@4x.jpg">
                            <img src="{{asset('storage/admin/images/admin_photos/product_small/'.$puppyDetails['image'])}}" alt="Product">
                        </a>
                        <a data-image="images/product/product@4x.jpg" data-zoom-image="images/product/product@4x.jpg">
                            <img src="{{asset('storage/admin/images/admin_photos/product_small/'.$puppyDetails['image'])}}" alt="Product">
                        </a>
                        <a data-image="images/product/product@4x.jpg" data-zoom-image="images/product/product@4x.jpg">
                            <img src="{{asset('storage/admin/images/admin_photos/product_small/'.$puppyDetails['image'])}}" alt="Product">
                        </a>
                        <a data-image="images/product/product@4x.jpg" data-zoom-image="images/product/product@4x.jpg">
                            <img src="{{asset('storage/admin/images/admin_photos/product_small/'.$puppyDetails['image'])}}" alt="Product">
                        </a>
                        <a data-image="images/product/product@4x.jpg" data-zoom-image="images/product/product@4x.jpg">
                            <img src="{{asset('storage/admin/images/admin_photos/product_small/'.$puppyDetails['image'])}}" alt="Product">
                        </a>
                        <a data-image="images/product/product@4x.jpg" data-zoom-image="images/product/product@4x.jpg">
                            <img src="{{asset('storage/admin/images/admin_photos/product_small/'.$puppyDetails['image'])}}" alt="Product">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="all-information-wrapper">
                    <div class="section-1-title-breadcrumb-rating">
                        <div class="product-title">
                            <h1>
                                <a href="single-product.html">   {{$puppyDetails['sire_name']}} </a>
                            </h1>
                        </div>
                        <ul class="bread-crumb">
                           
                           
                            <li class="has-separator">
                                <a href="">Breed</a>
                            </li>
                            <li class="has-separator">
                                <a href="">{{$puppyDetails['category']['name']}}</a>
                            </li>
                        </ul>
                        <hr>
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <small class="mr-2 opacity-50">Sold by: </small><br>
                                <a href="" class="text-reset">{{$puppyDetails['vendors']['shop_name']}}</a>
                                <div class="product-rating">
                                    <div class='star' title="4.5 out of 5 - based on 23 Reviews">
                                        <span style='width:67px'></span>
                                    </div>
                                    <span>(23)</span>
                                </div>
                            </div>
                                {{-- <div class="col-auto">
                                    <button class="btn btn-sm btn-soft-primary" data-toggle="modal" data-target="#exampleModal" onclick="show_chat_modal()">Message Seller</button>
                                </div> --}}
                            
                                <div class="col-auto">
                                    <a href="{{route('storeDetails',$puppyDetails['vendors']['slug'])}}">
                                        <img src="https://demo.activeitzone.com/ecommerce/public/uploads/all/8epyndbgfapwj0RYIU5mMDUk88yFYWjffqLOQMFD.jpg" alt="BMW" height="30">
                                    </a>
                                </div>
                                
                        </div>
                        <hr>
                       
                    </div>
                    <div class="section-4-sku-information u-s-p-y-14">
                        <div class="availability">
                            <span>Sire registration number:</span>
                            <span>{{$puppyDetails['sire_name']}}</span>
                        </div>
                        <div class="availability">
                            <span>Sire pedigree link</span>
                            <span>{{$puppyDetails['sire_name']}}</span>
                        </div>
                        <div class="availability">
                            <span>Sire Weight</span>
                            <span>{{$puppyDetails['sire_weight']}}</span>
                        </div>
                        <div class="availability">
                            <span>Sire height </span>
                            <span>{{$puppyDetails['sire_height']}}</span>
                        </div>
                        <div class="availability">
                            <span>sire_health_tests</span>
                            <span>{{$puppyDetails['sire_health_tests']}}</span>
                        </div>
                        <div class="availability">
                            <span>dam_name_with_titles</span>
                            <span>{{$puppyDetails['dam_name_with_titles']}}</span>
                        </div>
                        <div class="availability">
                            <span>Mom's Weight</span>
                            <span>{{$puppyDetails['sire_name']}}</span>
                        </div>
                        <div class="availability">
                            <span> Dam health tests</span>
                            <span>{{$puppyDetails['dam_health_tests_conducted']}}</span>
                        </div>
                        <div class="availability">
                            <span>Dam Weight</span>
                            <span>{{$puppyDetails['dam_weight']}}</span>
                        </div>
                        <div class="availability">
                            <span>Dam Weight</span>
                            <span>{{$puppyDetails['dam_health_tests_conducted']}}</span>
                        </div>
                        <div class="availability">
                            <span>Kennel name</span>
                            <a href="{{route('storeDetails',$puppyDetails['vendors']['slug'])}}">
                                <span> {{$puppyDetails['vendors']['shop_name']}}</span>
                            </a>
                        </div>
                       
                    </div>
                    <div class="mt-3">
                        <div class="row no-gutters mt-3">
                            <div class="col-2">

                                <button type="button"



                                @if (Auth::check())
                                

                                @else
                                data-toggle="modal" data-target="#exampleModal"
                                    
                                @endif
                                
                                
                                class="btn btn-soft-primary mr-2 add-to-cart fw-600" onclick="addToCart()">
                                    <i class="las la-shopping-bag"></i>
                                    <span class="d-none d-md-inline-block"> Adope</span>
                                </button>
                                
                            </div>
                            <div class="col-10">
                                <div class="opacity-50 pt-2">Share:
                                    <span class="fab fa-facebook-f mr-1"></span>
                                    <span class="fab fa-twitter mr-1"></span>
                                    <span class="fab fa-google-plus-g mr-1"></span>
                                    <span class="fab fa-pinterest mr-1"></span>
                                    <a href="" class="ml-2" target="_blank">View Policy</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                   
                  
                    {{-- <div class="section-3-price-original-discount u-s-p-y-14">
                        <div class="price">
                            <h4>$55.00</h4>
                        </div>
                        <div class="original-price">
                            <span>Original Price:</span>
                            <span>$60.00</span>
                        </div>
                        <div class="discount-price">
                            <span>Discount:</span>
                            <span>8%</span>
                        </div>
                        <div class="total-save">
                            <span>Save:</span>
                            <span>$5</span>
                        </div>
                    </div>
                    <div class="section-4-sku-information u-s-p-y-14">
                        <h6 class="information-heading u-s-m-b-8">Sku Information:</h6>
                        <div class="availability">
                            <span>Availability:</span>
                            <span>In Stock</span>
                        </div>
                        <div class="left">
                            <span>Only:</span>
                            <span>50 left</span>
                        </div>
                    </div> --}}
                    
                  
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="detail-tabs-wrapper u-s-p-t-80">
                    <div class="detail-nav-wrapper u-s-m-b-30">
                        <ul class="nav single-product-nav justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#description">Description</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="description">
                            <div class="description-whole-container">
                                <p class="desc-p u-s-m-b-26">
                                    {{$puppyDetails['description']}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="detail-different-product-section u-s-p-t-80">
            <section class="section-maker">
                <div class="container">
                    <div class="sec-maker-header text-center">
                        <h3 class="sec-maker-h3">Related this Category</h3>
                    </div>
                    <div class="slider-fouc">
                        <div class="products-slider owl-carousel" data-item="4">
                            @forelse ($Relatedpro as $relaPro)
                            <div class="item">
                                <div class="image-container">
                                    <a class="item-img-wrapper-link" href="single-product.html">
                                        <img class="img-fluid" src="{{asset('storage/admin/images/admin_photos/product_medium/'.$relaPro['image'])}}" alt="Product">
                                    </a>
                                    <div class="item-action-behaviors">
                                        <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look</a>
                                        <a class="item-mail" href="javascript:void(0)">Mail</a>
                                        <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                                        <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <div class="what-product-is">
                                        <ul class="bread-crumb">
                                            <li class="has-separator">
                                                <a href="shop-v1-root-category.html">Men's</a>
                                            </li>
                                            <li class="has-separator">
                                                <a href="shop-v2-sub-category.html">Tops</a>
                                            </li>
                                            <li>
                                                <a href="shop-v3-sub-sub-category.html">Hoodies</a>
                                            </li>
                                        </ul>
                                        <h6 class="item-title">
                                            <a href="single-product.html">{{$relaPro['sire_name']}}</a>
                                        </h6>
                                        <div class="item-stars">
                                            <div class='star' title="0 out of 5 - based on 0 Reviews">
                                                <span style='width:0'></span>
                                            </div>
                                            <span>(0)</span>
                                        </div>
                                    </div>
                                    <div class="price-template">
                                        <div class="item-new-price">
                                            $55.00
                                        </div>
                                        <div class="item-old-price">
                                            $60.00
                                        </div>
                                    </div>
                                </div>
                                <div class="tag new">
                                    <span>NEW</span>
                                </div>
                            </div>
                            @empty
                            <p>Product Not found</p>
                        @endforelse
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>
<section class="bg-white border-top border-bottom mt-auto">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-3 col-md-6">
                <a class="text-reset border-left text-center p-4 d-block" href="">
                    <i class="la la-file-text la-3x text-primary mb-2"></i>
                    <h4 class="h6">Terms &amp; conditions</h4>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a class="text-reset border-left text-center p-4 d-block" href="">
                    <i class="la la-mail-reply la-3x text-primary mb-2"></i>
                    <h4 class="h6">Return Policy</h4>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a class="text-reset border-left text-center p-4 d-block" href="">
                    <i class="la la-support la-3x text-primary mb-2"></i>
                    <h4 class="h6">Support Policy</h4>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a class="text-reset border-left border-right text-center p-4 d-block" href="">
                    <i class="las la-exclamation-circle la-3x text-primary mb-2"></i>
                    <h4 class="h6">Privacy Policy</h4>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Button trigger modal -->

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm p-5" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Messege Seller</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         

            @if (Auth::check())
            <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Message</label>
                  <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                </div>
              
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            @else
                <form>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            @endif
            
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>

@endsection

@push('styles')

@endpush




@push('scripts')

@endpush
