
<?php  

use App\Models\Product;
use App\Models\Vendor;
use App\Models\Category;

?>
@extends('layouts.frontend_app')

@section('main-content')

<section class="slider pt-4"> 
  <div class="container">

    {{-- <div class="text-center carousel-box pb-5" >

        <img style="width: 100%; display: inline-block; height: 361px;}" src="https://demo.activeitzone.com/ecommerce/public/uploads/all/3WicugR4nfab8kBGWmMaiEzDeVt4tXia7iOZbxUv.png" data-src="https://demo.activeitzone.com/ecommerce/public/uploads/all/3WicugR4nfab8kBGWmMaiEzDeVt4tXia7iOZbxUv.png" alt="Flash Deal" class="img-fit w-100 ls-is-cached lazyloaded">
    </div> --}}

    <div class="row">
      
      <div class="col-md-3">
        {{-- <div class="card">
          <img src="{{asset('frontend/images/product/product@3x.jpg')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title that wraps to a new line</h5>
            <p class="card-text">This is a longer card with .</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div> --}}
        <div class="card pb-5">
          <img src="{{asset('frontend/images/logo.png')}}" class="card-img-top" alt="...">
          <div class="card-body">
            <div class="quick-social-media-wrapper u-s-m-b-22">
                <span>Share:</span>
                <span class="fab fa-facebook-f m-1"></span>
                <span class="fab fa-twitter m-1"></span>
                <span class="fab fa-google-plus-g m-1"></span>
                <span class="fab fa-pinterest m-1"></span>
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
            <ul class="list-unstyled d-flex ratings"><li><a href="#"><i class="fa fa-star"></i></a></li> <li><a href="#"><i class="fa fa-star"></i></a></li> <li><a href="#"><i class="fa fa-star"></i></a></li> <li><a href="#"><i class="fa fa-star"></i></a></li> <li><a href="#"><i class="fa fa-star"></i></a></li> <span class="reviewCount">(245)</span></ul>
            
            <div class="row detailedBox"><div class="col-md-4 col-6"><ul class="list-unstyled"><li class="pb-2"><i class="fas fa-car"></i> Delivery only</li> <li class="pb-2"><i class="fas fa-id-card"></i> Delivery</li> <li class="pb-2"><i class="fas fa-shopping-cart"></i> Order online (delivery)</li></ul></div> <div class="col-md-4 col-6"><ul class="list-unstyled"><li class="pb-2"><i class="fas fa-clock"></i> <span style="color: rgb(0, 183, 0); font-weight: bold;">Registration number(s) </span></li> <li class="pb-2">
              
              <div class="favBrand favoriteButton retailer-single-fvt-btn"><a href=""><i class="far fa-heart pe-4 shadow ms-3"></i></a> <span class="followers"> 309 followers</span></div>
            
            </li></ul></div></div>

            {{-- <div class="col-md-12 d-flex"><a href="tel:(111) 222-333" class="btn btn-outline-dark me-2 px-4 ctaButtons ctaButtonFirst"><i class="fas fa-phone-alt"></i> (111) 222-333
            </a> <a href="mailto:" target="_blank" class="btn btn-outline-dark px-4 ctaButtons ctaButtonSecond"><i class="fas fa-directions"></i> Chat Now
            </a> </div> --}}
          </div>
        </div>
        {{-- <div class="row">
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Store Spots</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div> --}}
      </div>

    </div>

    


    <div class="conta pt-4">

      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Product</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link " id="breed-tab" data-toggle="tab" href="#breed" role="tab" aria-controls="breed" aria-selected="true">Breed  </a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Kennel Detils</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Review</a>
        </li>
        
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <div class="page-deal ">
            <div class="container">
                
                <div class="page-bar clearfix">
                    <div class="toolbar-sorter">
                        <div class="select-box-wrapper">
                            <label class="sr-only" for="sort-by">Sort By</label>
                            <select class="select-box" id="sort-by">
                                <option selected="selected" value="">Sort By: Best Selling</option>
                                <option value="">Sort By: Latest</option>
                                <option value="">Sort By: Lowest Price</option>
                                <option value="">Sort By: Highest Price</option>
                                <option value="">Sort By: Best Rating</option>
                            </select>
                        </div>
                    </div>
                    
                </div>
                <div class="row product-container grid-style">
          

                  @forelse ($getProducts as $pro)
                  <div class="product-item col-lg-3 col-md-6 col-sm-6">
                    <div class="item">
                        <div class="image-container">
                            <a class="item-img-wrapper-link" href="single-product.html">
                                <img class="img-fluid" src="{{asset('storage/admin/images/admin_photos/product_medium/'.$pro['image'])}}" alt="Product">
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
                                        <a href="shop-v1-root-category.html">{{$pro['category']['name']}}</a>
                                    </li>
                                    <li class="has-separator">
                                        <a href="shop-v2-sub-category.html">Tops</a>
                                    </li>
                                    <li>
                                        <a href="shop-v3-sub-sub-category.html">Hoodies</a>
                                    </li>
                                </ul>
                                <h6 class="item-title">
                                    <a href="single-product.html">Casual Hoodie Full Cotton</a>
                                </h6>
                                <div class="item-description">
                                    <p>This hoodie is full cotton. It includes a muff sewn onto the lower front, and (usually) a drawstring to adjust the hood opening. Throughout the U.S., it is common for middle-school, high-school, and college students to wear this sweatshirts—with or without hoods—that display their respective school names or mascots across the chest, either as part of a uniform or personal preference.
                                    </p>
                                </div>
                                <div class="item-stars">
                                    <div class='star' title="4.5 out of 5 - based on 23 Reviews">
                                        <span style='width:67px'></span>
                                    </div>
                                    <span>(23)</span>
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
                </div>
                  @empty
                      
                  @endforelse
          
               
          
                </div>
                <div class="pagination-area">
                    <div class="pagination-number">
                        <ul>
                            <li style="display: none">
                                <a href="shop-v1-root-category.html" title="Previous">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                            </li>
                            <li class="active">
                                <a href="shop-v1-root-category.html">1</a>
                            </li>
                            <li>
                                <a href="shop-v1-root-category.html">2</a>
                            </li>
                            <li>
                                <a href="shop-v1-root-category.html">3</a>
                            </li>
                            <li>
                                <a href="shop-v1-root-category.html">...</a>
                            </li>
                            <li>
                                <a href="shop-v1-root-category.html">10</a>
                            </li>
                            <li>
                                <a href="shop-v1-root-category.html" title="Next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
          </div>
          
        </div>
        <div class="tab-pane fade show" id="breed" role="tabpanel" aria-labelledby="breed-tab">
          <div class="page-deal ">
            <div class="container">
                
                <div class="page-bar clearfix">
                    <div class="toolbar-sorter">
                        <div class="select-box-wrapper">
                            <label class="sr-only" for="sort-by">Sort By</label>
                            <select class="select-box" id="sort-by">
                                <option selected="selected" value="">Sort By: Best Selling</option>
                                <option value="">Sort By: Latest</option>
                                <option value="">Sort By: Lowest Price</option>
                                <option value="">Sort By: Highest Price</option>
                                <option value="">Sort By: Best Rating</option>
                            </select>
                        </div>
                    </div>
                    
                </div>
                <div class="row product-container grid-style">
          
                  @forelse ($getBreeds as $bred)
                  <?php  

                      $getCat = Category::where('id',$bred['category_id'])->where('status',1)->get()->toArray();
                  
                  ?>

                    @foreach ($getCat as $cat)
                    <div class="product-item col-lg-3 col-md-6 col-sm-6">
                      <div class="item">
                          <div class="image-container">
                              <a class="item-img-wrapper-link" href="single-product.html">
                                  <img class="img-fluid" src="{{asset('storage/admin/images/admin_photos/category/'.$cat['image'])}}" alt="Product">
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
                                      <a href="single-product.html">{{$cat['name']}}</a>
                                  </h6>
                                  <div class="item-description">
                                      <p>cat
                                      </p>
                                  </div>
                                  <div class="item-stars">
                                      <div class='star' title="4.5 out of 5 - based on 23 Reviews">
                                          <span style='width:67px'></span>
                                      </div>
                                      <span>(23)</span>
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
                    </div>
                    @endforeach

                    
                  @empty
                      
                  @endforelse
                   
          
                </div>
                <div class="pagination-area">
                    <div class="pagination-number">
                        <ul>
                            <li style="display: none">
                                <a href="shop-v1-root-category.html" title="Previous">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                            </li>
                            <li class="active">
                                <a href="shop-v1-root-category.html">1</a>
                            </li>
                            <li>
                                <a href="shop-v1-root-category.html">2</a>
                            </li>
                            <li>
                                <a href="shop-v1-root-category.html">3</a>
                            </li>
                            <li>
                                <a href="shop-v1-root-category.html">...</a>
                            </li>
                            <li>
                                <a href="shop-v1-root-category.html">10</a>
                            </li>
                            <li>
                                <a href="shop-v1-root-category.html" title="Next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
          </div>
          
        </div>
        <div class="tab-pane fade m-5" id="profile" role="tabpanel" aria-labelledby="profile-tab">

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
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
          <div class="tab-pane fade active show pt-5" id="review">
            <div class="review-whole-container ">
                <div class="row r-1 u-s-m-b-26 u-s-p-b-22">
                    <div class="col-lg-6 col-md-6">
                        <div class="total-score-wrapper">
                            <h6 class="review-h6">Average Rating</h6>
                            <div class="circle-wrapper">
                                <h1>4.5</h1>
                            </div>
                            <h6 class="review-h6">Based on 23 Reviews</h6>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="total-star-meter">
                            <div class="star-wrapper">
                                <span>5 Stars</span>
                                <div class="star">
                                    <span style="width:0"></span>
                                </div>
                                <span>(0)</span>
                            </div>
                            <div class="star-wrapper">
                                <span>4 Stars</span>
                                <div class="star">
                                    <span style="width:67px"></span>
                                </div>
                                <span>(23)</span>
                            </div>
                            <div class="star-wrapper">
                                <span>3 Stars</span>
                                <div class="star">
                                    <span style="width:0"></span>
                                </div>
                                <span>(0)</span>
                            </div>
                            <div class="star-wrapper">
                                <span>2 Stars</span>
                                <div class="star">
                                    <span style="width:0"></span>
                                </div>
                                <span>(0)</span>
                            </div>
                            <div class="star-wrapper">
                                <span>1 Star</span>
                                <div class="star">
                                    <span style="width:0"></span>
                                </div>
                                <span>(0)</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row r-2 u-s-m-b-26 u-s-p-b-22">
                    <div class="col-lg-12">
                        <div class="your-rating-wrapper">
                            <h6 class="review-h6">Your Review is matter.</h6>
                            <h6 class="review-h6">Have you used this product before?</h6>
                            <div class="star-wrapper u-s-m-b-8">
                                <div class="star">
                                    <span id="your-stars" style="width:0"></span>
                                </div>
                                <label for="your-rating-value"></label>
                                <input id="your-rating-value" type="text" class="text-field" placeholder="0.0">
                                <span id="star-comment"></span>
                            </div>
                            <form>
                                <label for="your-name">Name
                                    <span class="astk"> *</span>
                                </label>
                                <input id="your-name" type="text" class="text-field" placeholder="Your Name">
                                <label for="your-email">Email
                                    <span class="astk"> *</span>
                                </label>
                                <input id="your-email" type="text" class="text-field" placeholder="Your Email">
                                <label for="review-title">Review Title
                                    <span class="astk"> *</span>
                                </label>
                                <input id="review-title" type="text" class="text-field" placeholder="Review Title">
                                <label for="review-text-area">Review
                                    <span class="astk"> *</span>
                                </label>
                                <textarea class="text-area u-s-m-b-8" id="review-text-area" placeholder="Review"></textarea>
                                <button class="button button-outline-secondary">Submit Review</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Get-Reviews -->
                <div class="get-reviews u-s-p-b-22">
                    <!-- Review-Options -->
                    <div class="review-options u-s-m-b-16">
                        <div class="review-option-heading">
                            <h6>Reviews
                                <span> (15) </span>
                            </h6>
                        </div>
                        <div class="review-option-box">
                            <div class="select-box-wrapper">
                                <label class="sr-only" for="review-sort">Review Sorter</label>
                                <select class="select-box" id="review-sort">
                                    <option value="">Sort by: Best Rating</option>
                                    <option value="">Sort by: Worst Rating</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- Review-Options /- -->
                    <!-- All-Reviews -->
                    <div class="reviewers">
                        <div class="review-data">
                            <div class="reviewer-name-and-date">
                                <h6 class="reviewer-name">John</h6>
                                <h6 class="review-posted-date">10 May 2018</h6>
                            </div>
                            <div class="reviewer-stars-title-body">
                                <div class="reviewer-stars">
                                    <div class="star">
                                        <span style="width:67px"></span>
                                    </div>
                                    <span class="review-title">Good!</span>
                                </div>
                                <p class="review-body">
                                    Good Quality...!
                                </p>
                            </div>
                        </div>
                        <div class="review-data">
                            <div class="reviewer-name-and-date">
                                <h6 class="reviewer-name">Doe</h6>
                                <h6 class="review-posted-date">10 June 2018</h6>
                            </div>
                            <div class="reviewer-stars-title-body">
                                <div class="reviewer-stars">
                                    <div class="star">
                                        <span style="width:67px"></span>
                                    </div>
                                    <span class="review-title">Well done!</span>
                                </div>
                                <p class="review-body">
                                    Cotton is good.
                                </p>
                            </div>
                        </div>
                        <div class="review-data">
                            <div class="reviewer-name-and-date">
                                <h6 class="reviewer-name">Tim</h6>
                                <h6 class="review-posted-date">10 July 2018</h6>
                            </div>
                            <div class="reviewer-stars-title-body">
                                <div class="reviewer-stars">
                                    <div class="star">
                                        <span style="width:67px"></span>
                                    </div>
                                    <span class="review-title">Well done!</span>
                                </div>
                                <p class="review-body">
                                    Excellent condition
                                </p>
                            </div>
                        </div>
                        <div class="review-data">
                            <div class="reviewer-name-and-date">
                                <h6 class="reviewer-name">Johnny</h6>
                                <h6 class="review-posted-date">10 March 2018</h6>
                            </div>
                            <div class="reviewer-stars-title-body">
                                <div class="reviewer-stars">
                                    <div class="star">
                                        <span style="width:67px"></span>
                                    </div>
                                    <span class="review-title">Bright!</span>
                                </div>
                                <p class="review-body">
                                    Cotton
                                </p>
                            </div>
                        </div>
                        <div class="review-data">
                            <div class="reviewer-name-and-date">
                                <h6 class="reviewer-name">Alexia C. Marshall</h6>
                                <h6 class="review-posted-date">12 May 2018</h6>
                            </div>
                            <div class="reviewer-stars-title-body">
                                <div class="reviewer-stars">
                                    <div class="star">
                                        <span style="width:67px"></span>
                                    </div>
                                    <span class="review-title">Well done!</span>
                                </div>
                                <p class="review-body">
                                    Good polyester Cotton
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- All-Reviews /- -->
                    <!-- Pagination-Review -->
                    <div class="pagination-review-area">
                        <div class="pagination-review-number">
                            <ul>
                                <li style="display: none">
                                    <a href="single-product.html" title="Previous">
                                        <i class="fas fa-angle-left"></i>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="single-product.html">1</a>
                                </li>
                                <li>
                                    <a href="single-product.html">2</a>
                                </li>
                                <li>
                                    <a href="single-product.html">3</a>
                                </li>
                                <li>
                                    <a href="single-product.html">...</a>
                                </li>
                                <li>
                                    <a href="single-product.html">10</a>
                                </li>
                                <li>
                                    <a href="single-product.html" title="Next">
                                        <i class="fas fa-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Pagination-Review /- -->
                </div>
                <!-- Get-Reviews /- -->
            </div>
        </div>
        </div>
      </div>
     
    </div>



    
  </div>
</section>






@endsection

@push('styles')

@endpush




@push('scripts')

@endpush
