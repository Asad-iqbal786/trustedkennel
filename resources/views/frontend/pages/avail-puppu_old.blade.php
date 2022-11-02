
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

{{-- <section class="section section-md bg-default mt-5">
    <div class="container">

      <div class="row row-30">
        <div class="col-md-5 wow slideInLeft"><img src="{{asset('website/images/about-01-470x242.jpg')}}" alt="" width="470" height="242"/>
        </div>
        <div class="col-md-7 wow slideInRight">
            <h3 class="text-left"> Puppy Name  </h3>
            <h3 class="text-left">KENNEL NAME</h3>
          <p>Male born on 9/25/2022</p>

          <h5>Lorem ipsum dolor sit amet</h5>
          <p>Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient ontes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit.</p>
          <a class="button button-default" href="#">Adopt</a>
          <a class="button button-default" href="#">Ask</a>
        </div>
      </div>
    </div>
</section> --}}


<div class="container pt-5">
    <div class="card">
        <div class="container-fliud">
            <div class="wrapper row">
                <div class="preview col-md-6">
                    
                    <div class="preview-pic tab-content">
                      <div class="tab-pane active" id="pic-1"><img src="http://placekitten.com/400/252" /></div>
                      <div class="tab-pane" id="pic-2"><img src="http://placekitten.com/400/252" /></div>
                      <div class="tab-pane" id="pic-3"><img src="http://placekitten.com/400/252" /></div>
                      <div class="tab-pane" id="pic-4"><img src="http://placekitten.com/400/252" /></div>
                      <div class="tab-pane" id="pic-5"><img src="http://placekitten.com/400/252" /></div>
                    </div>
                    <ul class="preview-thumbnail nav nav-tabs">
                      <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
                      <li><a data-target="#pic-2" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
                      <li><a data-target="#pic-3" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
                      <li><a data-target="#pic-4" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
                      <li><a data-target="#pic-5" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
                    </ul>
                    
                </div>
                <div class="details col-md-6">
                    <h3 class="product-title"> PUPPY NAME </h3>
                    <p class="product-title"> KENNEL NAME	 </p>

                    <div class="rating">
                        <div class="stars">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <span class="review-no">41 reviews</span>
                        <p class="review-no"> Male born on 9/25/2022</p>
                    </div>
                    <p class="product-description">Description, This is the product description, This is the product description, This is the product description, This is the product description, This is the product description, This is the product description, This is the product description.</p>
                    <h4 class="price">current price: <span>$180</span></h4>
                    <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
                   
                    <div class="action">
                        <button class="add-to-cart btn btn-default" type="button">add to cart</button>
                        <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">SIRE</a>
          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">DAM</a>
        
        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
           <div class="text-cont pt-5" >
            
            <p>NAME: </p>          
            <p>REGISTRATION NUMBER: </p>          
            <p>PEDIGREE: </p>          
            <p>HEIGHT: </p>          
            <p>  WEIGHT: </p>
            <p>  HEALTH TESTS: </p>       

           </div>
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
      </div>
</div>

  <section class="section section-md bg-default">
      <div class="container">
        <h3 class="text-center">WHY WE STAND OUT IN THE CROWD</h3>
        <div class="row row-30">
          <div class="col-lg-4 col-sm-6 wow flipInX">
            <div class="unit align-items-center">
              <div class="unit-left"><img src="{{asset('website/images/home-01-54x57.png')}}" alt="" width="54" height="57"/>
              </div>
              <div class="unit-body">
                <h5><a href="#">SCAM-FREE GUARANTEEs</a></h5>
              </div>
            </div>
            <p>Payment to kennels is withheld until you’ve received your puppy and have given us the thumbs-up.</p>
          </div>
          <div class="col-lg-4 col-sm-6 wow flipInX">
            <div class="unit align-items-center">
              <div class="unit-left"><img src="{{asset('website/images/home-02-54x57.png')}}" alt="" width="54" height="57"/>
              </div>
              <div class="unit-body">
                <h5><a href="#">INDEPENDENT HEALTH CHECK</a></h5>
              </div>
            </div>
            <p>Our independent certified vet examines all puppies to ensure they’re in top shape prior to boarding the plane.</p>
          </div>
          <div class="col-lg-4 col-sm-6 wow flipInX">
            <div class="unit align-items-center">
              <div class="unit-left"><img src="{{asset('website/images/home-03-54x57.png')}}" alt="" width="54" height="57"/>
              </div>
              <div class="unit-body">
                <h5><a href="#">KENNELS CERTIFICATION PROGRAM</a></h5>
              </div>
            </div>
            <p>Kennels go through a rigorous yearly evaluation process to be listed as a trusted kennel.</p>
          </div>
          <div class="col-lg-4 col-sm-6 wow flipInX">
            <div class="unit align-items-center">
              <div class="unit-left"><img src="{{asset('website/images/home-04-54x57.png')}}" alt="" width="54" height="57"/>
              </div>
              <div class="unit-body">
                <h5><a href="#">FULL OWNERSHIP</a></h5>
              </div>
            </div>
            <p>Our trusted kennels offer full ownership including breeding rights.</p>
          </div>
          <div class="col-lg-4 col-sm-6 wow flipInX">
            <div class="unit align-items-center">
              <div class="unit-left"><img src="{{asset('website/images/home-05-54x57.png')}}" alt="" width="54" height="57"/>
              </div>
              <div class="unit-body">
                <h5><a href="#">EXCEPTIONAL BREEDERS</a></h5>
              </div>
            </div>
            <p>We only work with top responsible breeders with history, tradition, and exceptional quality</p>
          </div>
          <div class="col-lg-4 col-sm-6 wow flipInX">
            <div class="unit align-items-center">
              <div class="unit-left"><img src="{{asset('frontend/images/icon/dog-service.png')}}" alt="" width="54" height="57"/>
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
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
<style>
    .preview {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }
  @media screen and (max-width: 996px) {
    .preview {
      margin-bottom: 20px; } }

.preview-pic {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.preview-thumbnail.nav-tabs {
  border: none;
  margin-top: 15px; }
  .preview-thumbnail.nav-tabs li {
    width: 18%;
    margin-right: 2.5%; }
    .preview-thumbnail.nav-tabs li img {
      max-width: 100%;
      display: block; }
    .preview-thumbnail.nav-tabs li a {
      padding: 0;
      margin: 0; }
    .preview-thumbnail.nav-tabs li:last-of-type {
      margin-right: 0; }

.tab-content {
  overflow: hidden; }
  .tab-content img {
    width: 100%;
    -webkit-animation-name: opacity;
            animation-name: opacity;
    -webkit-animation-duration: .3s;
            animation-duration: .3s; }

.card {
    margin-top: 75px;
    /* background: #eee; */
    padding: 3em;
    /* line-height: 1.5em; */
    border: none;
 }

@media screen and (min-width: 997px) {
  .wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex; } }

.details {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column; }

.colors {
  -webkit-box-flex: 1;
  -webkit-flex-grow: 1;
      -ms-flex-positive: 1;
          flex-grow: 1; }

.product-title, .price, .sizes, .colors {
  text-transform: UPPERCASE;
  font-weight: bold; }

.checked, .price span {
  color: #ff9f1a; }

.product-title, .rating, .product-description, .price, .vote, .sizes {
  margin-bottom: 15px; }

.product-title {
  margin-top: 0; }

.size {
  margin-right: 10px; }
  .size:first-of-type {
    margin-left: 40px; }

.color {
  display: inline-block;
  vertical-align: middle;
  margin-right: 10px;
  height: 2em;
  width: 2em;
  border-radius: 2px; }
  .color:first-of-type {
    margin-left: 20px; }

.add-to-cart, .like {
  background: #ff9f1a;
  padding: 1.2em 1.5em;
  border: none;
  text-transform: UPPERCASE;
  font-weight: bold;
  color: #fff;
  -webkit-transition: background .3s ease;
          transition: background .3s ease; }
  .add-to-cart:hover, .like:hover {
    background: #b36800;
    color: #fff; }

.not-available {
  text-align: center;
  line-height: 2em; }
  .not-available:before {
    font-family: fontawesome;
    content: "\f00d";
    color: #fff; }

.orange {
  background: #ff9f1a; }

.green {
  background: #85ad00; }

.blue {
  background: #0076ad; }

.tooltip-inner {
  padding: 1.3em; }

@-webkit-keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

@keyframes opacity {
  0% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3); }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
            transform: scale(1); } }

/*# sourceMappingURL=style.css.map */
</style>

@endpush




@push('scripts')
 <script>



 </script>
@endpush
