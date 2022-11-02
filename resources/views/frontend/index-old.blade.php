 <?php  

use App\Models\Product;
?>
@extends('layouts.frontend_app')

@section('main-content')

	<section class="hero-slider" >
	
	 
		<div class="single-slider">
			<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
				  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
				  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
				  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">

					
				  <div class="carousel-item-slider active">
					<img src="{{asset('frontend/images/slider.jpg')}}" class="" alt="...">
					<div class="carousel-caption-slider ">
					  <p style="padding-top: 151px;">Bring the gap Between families and kennels</p>

					  	{{-- <div class="content pt-4">
							<button href="#" class="btn btn-fw">Discover Now</button>
						</div> --}}
					
					</div>
					
				  </div>
				 
				</div>
				{{-- <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
				  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				  <span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
				  <span class="carousel-control-next-icon" aria-hidden="true"></span>
				  <span class="sr-only">Next</span>
				</a> --}}
			</div>
		</div>
        
	</section>
	

	<section class="small-banner section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-banner">  
						<img src="{{asset('frontend/images/img-1.jpg')}}" alt="#">
						<div class="content">
							{{-- <p>Man's Collectons</p>
							<h3>Summer travel <br> collection</h3> --}}
							<a href="{{route('findKennel')}}" class="nav-link  ">Find Kannel</a>
							{{-- <p> Find Kannel</p> --}}
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-banner">
						<img src="{{asset('frontend/images/img-2.jpg')}}" alt="#">
						<div class="content">
							{{-- <p>Bag Collectons</p>
							<h3>Awesome Bag <br> 2020</h3> --}}
							<a href="{{route('findPuppy')}}" class="nav-link ">Find Puppy</a>
							{{-- <p>Find Puppy</p> --}}
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-12">
					<div class="single-banner tab-height">
						<img src="{{asset('frontend/images/img-3.jpg')}}" alt="#">
						<div class="content">
							{{-- <p>Flash Sale</p>
							<h3>Mid Season <br> Up to <span>40%</span> Off</h3> --}}
							<a href="{{route('Ourservices')}}" class="nav-link">Our Servic</a>
							{{-- <p>Our Servic</p> --}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="container">
		<div class="row justify-content-center  pt-5">
			<div class="search-box">
				<input type="text" class="search-input search-boxss" placeholder="Find puppy around the word from top trusted kennesl..">
		  
				<button class="search-button">
				  <i class="fas fa-search"></i>
				</button>
			 </div>
		</div>
	 </div>
	 
	<section class="shop-newsletter section" style="padding: 53px 0;">
		<div class="container">
			<div class="inner-top">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 col-12">

						



						{{-- <div class="inner">
							
							<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
								<input name="EMAIL" placeholder="Find puppy form top trusted kennels arround the wordls" required="" type="email">
								<button class="btn bg-primary">Search</button>
							</form>
						</div> --}}
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="container">

		
			<div class="row pb-5">
				<hr style="float: left;width: 30%;
			    background-color: #d9d9d9!important;
				border: 0;
				height: 2px;">

				<p style="float: left;
				/* font-weight: bold; */
				font-weight: 600;
				width: 38%;
				font-family:'Amatic SC';
				text-align: center;
				font-size: 37px;">Why We stand out the Crowd Crowd</p>
				
				<hr style="float: left;width: 30%;
			    background-color:#d9d9d9!important;
				border: 0;
				height: 2px;">
			</div>
          
		   <div class="row pb-5 pt-5">
            <div class="col-lg-4 col-sm-6 ">
				<div class="test-grd pb-5">
					<div class="unit align-items-center">
						<div class="unit-left"><img src="{{asset('frontend/images/Tick1.png')}}" alt="" width="54" height="57">
							
						</div>
						<div class="unit-body">
						<h5><a href="#">SCAM-FREE GUARANTEE</a></h5>
						</div>
					</div>
					<p>Trusted Kennels holds payment to kennel until you’ve received your puppy and have given us the thumbs-up. .</p>
				</div>
            </div>

			<div class="col-lg-4 col-sm-6 ">
				<div class=" test-grd pb-5">
					<div class="unit align-items-center">
					  <div class="unit-left"><img src="{{asset('frontend/images/Tick1.png')}}" alt="" width="54" height="57">
					  </div>
					  <div class="unit-body">
						<h5><a href="#">INDEPENDENT HEALTH CHECK</a></h5>
					  </div>
					</div>
					<p>Our independent vet examines all puppies prior to boarding the plane.</p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 ">
				<div class=" test-grd pb-5">
					<div class="unit align-items-center">
					  <div class="unit-left"><img src="{{asset('frontend/images/Tick1.png')}}" alt="" width="54" height="57">
					  </div>
					  <div class="unit-body">
						<h5><a href="#">KENNELS CERTIFICATION PROGRAM</a></h5>
					  </div>
					</div>
					<p>Kennels go through a rigorous yearly evaluation process to be listed as a trusted kennel.</p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6  ">
				<div class="test-grd pb-5 ">
					<div class="unit align-items-center">
					  <div class="unit-left"><img src="{{asset('frontend/images/Tick1.png')}}" alt="" width="54" height="57">
					  </div>
					  <div class="unit-body">
						<h5><a href="#">FULL OWNERSHIP</a></h5>
					  </div>
					</div>
					<p>Most of our trusted kennels offer full ownership including breeding rights.</p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="  test-grd pb-5">
					<div class="unit align-items-center">
					  <div class="unit-left"><img src="{{asset('frontend/images/Tick1.png')}}" alt="" width="54" height="57">
					  </div>
					  <div class="unit-body">
						<h5><a href="#">EXCEPTIONAL BREEDERS</a></h5>
					  </div>
					</div>
					<p>We only work with responsible and reputable breeders with history and exceptional quality. </p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 ">
				<div class="test-grd pb-5">
					<div class="unit align-items-center">
					  <div class="unit-left"><img src="{{asset('frontend/images/Tick1.png')}}" alt="" width="54" height="57">
					  </div>
					  <div class="unit-body">
						<h5><a href="#">FULL SERVICE</a></h5>
					  </div>
					</div>
					<p>Our families deserve a worry-free A to Z adoption process which includes importation and transportation.</p>
				</div>
			</div>

           
         
        
          
          
          </div>
    </section>



	<div class="container">
		<div class="card mb-3 breeds_choice" style="" >
			<div class="row no-gutters">
			  
			  <div class="col-md-8">
				<div class="card-body m-5">
				  <p class="card-title breads_cho">Not sure which dog breed is right for you? We can help you choose!</p>
				  <p class="card-text breads_cho">Start with our      <button class="btn breeds_choice_btn"> Breed Questionnaire </button> and our experts will send you the best dog breeds for you.</p>
				  
				</div>
			  </div>

			  <div class="col-md-4">
				<img src="{{asset('frontend/images/banner-1.jpg')}}" class="card-img" alt="...">
			  </div>

			</div>
		  </div>
	</div>
	<div class="container product-area section">
		<div class=" row hr-stlling pb-5 pt-5">
			<hr style="float: left;width: 38%;
			    background-color: #d9d9d9!important;
				border: 0;
				height: 2px;">

			<p style="float: left;
			/* font-weight: bold; */
			font-weight: 600;
			width: 24%;
			font-family:'Amatic SC';
			text-align: center;
			font-size: 37px;">Trending</p>
			
			<hr style="float: left;width: 38%;
			background-color: #d9d9d9!important;
			border: 0;
			height: 2px;">
		</div>


		<div class="row">
			@forelse  ($getProduct as $pro)
			<div class="col-lg-3 col-md-6 col-12 images-grides" style="padding-right: 0px;padding-left: 0px;">
				<div class="warpper_over">
					<div class="img-box_over">
						<div class="info_over">
							<img src="{{asset('storage/admin/images/admin_photos/product_medium/'.$pro['image'])}}" alt="">
							<h1>{{$pro['category']['name']}} </h1>
							<p> {{$pro['vendors']['shop_name']}} </p>
	
						</div>
						<div class="desc_over">
							<h1> Price : {{$pro['puppy_price']}} <br> Description : {{$pro['description']}}  </h1>
							<p></p>
						</div>
					</div>
				</div>
			</div>
				
			@empty
				
			@endforelse
		

			{{-- @forelse ($getProduct as $pro)
				<div class="col-lg-3 col-md-6 col-12 images-grides" style="padding-right: 0px;padding-left: 0px;">
					<img src="{{asset('storage/admin/images/admin_photos/product_medium/'.$pro['image'])}}" class="rounded float-left image" alt="...">
					<div class="text-new">
						<div class="aasad">
							<a href="{{route('PuppyDetails',$pro['slug'])}}">
								<p class="test" data-hover="{{$pro['puppy_price']}} : {{$pro['description']}}">{{$pro['category']['name']}} <br>
									{{$pro['vendors']['shop_name']}}</p>
							</a>
						</div>
					</div>
				</div>
				@empty
					<p> Product not found</p>
			@endforelse --}}
		

		
		</div>
	</div>





    {{-- <div class="product-area section">
            <div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>Trending Item</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="product-info">
							<div class="nav-main">

								<ul class="nav nav-tabs" id="myTab" role="tablist">

                                    @foreach ($getProType as $types)
                                        <li class="nav-item"><a class="nav-link btn-fw" data-toggle="tab" href="#available-{{$types['id']}}" role="tab">{{$types['name']}}</a></li>
                                    @endforeach
                                   
								</ul>

							</div>
							<div class="tab-content" id="myTabContent">

                               @foreach ($getProType as $types)
                               <?php  
                                    $getId = Product::with('product_types')->where('produt_type_id',$types['id'])->get()->toArray();
                                
                                ?>
                                <?php
                                    // dd($getProducts);
                                ?>
                               
                               <div class="tab-pane fade show active" id="available-{{$types['id']}}" role="tabpanel">
									<div class="tab-single">
										<div class="row">

											@foreach ($getId as $item)
											
												<div class="col-xl-3 col-lg-4 col-md-4 col-12">
													<div class="single-product">
														<div class="product-img">
															<a href="product-details.html">
																<img class="default-img" src="{{asset('storage/admin/images/admin_photos/product_medium/'.$item['image'])}}" alt="#">
																<img class="hover-img" src="{{asset('storage/admin/images/admin_photos/product_medium/'.$item['image'])}}" alt="#">
															</a>
															<div class="button-head">
																<div class="product-action">
																	<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																	<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																	<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
																</div>
																<div class="product-action-2">
																	<a title="Add to cart" href="#">Add to cart</a>
																</div>
															</div>
														</div>
														<div class="product-content">
															<h3><a href="product-details.html">{{$item['sire_name']}}</a></h3>
															<div class="product-price">
																<span>{{$item['product_types']['name']}}</span>
															</div>
														</div>
													</div>
												</div>

											@endforeach
											
										</div>
									</div>
                            	</div>
                               @endforeach

							

							</div>
						</div>
					</div>
				</div>
            </div>
    </div> --}}
	
	{{-- <section class="midium-banner">
		<div class="container">
			<div class="row">
				<!-- Single Banner  -->
				<div class="col-lg-6 col-md-6 col-12">
					<div class="single-banner">
						<img src="{{asset('frontend/images/banner-1.jpg')}}" alt="#">
						<div class="content">
							<p>Man's Collectons</p>
							<h3>Man's items <br>Up to<span> 50%</span></h3>
							<a href="#">Find A Kennal</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-6 col-md-6 col-12">
					<div class="single-banner">
						<img src="{{asset('frontend/images/banner-2.jpg')}}" alt="#">
						<div class="content">
							<p>shoes women</p>
							<h3>mid season <br> up to <span>70%</span></h3>
							<a href="#" >Find a Puppy</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
			</div>
		</div>
	</section> --}}
	
	{{-- <div class="product-area most-popular section">
        <div class="container">
            <div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>Hot Kannel</h2>
					</div>
				</div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
						@forelse ($getProduct as $pro)
						<div class="single-product">
							<div class="product-img">
								<a href="product-details.html">
									<img class="default-img" src="{{asset('storage/admin/images/admin_photos/product_medium/'.$pro['image'])}}" alt="#">
									<img class="hover-img" src="{{asset('storage/admin/images/admin_photos/product_medium/'.$pro['image'])}}" alt="#">
									<span class="out-of-stock">Hot</span>
								</a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
										<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
										<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
									</div>
									<div class="product-action-2">
										<a title="Add to cart" href="#">Add to cart</a>
									</div>
								</div>
							</div>
							<div class="product-content">
								<h3><a href="product-details.html">{{$pro['sire_name']}}</a></h3>
								<div class="product-price">
								</div>
							</div>
						</div>
						@empty
							<p>Product Not Found</p>
						@endforelse
						
						
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

	<div class="cown-down">
		<div class="section-inner ">
			<div class="container-fluid">
				<div class="row">

					<div class="grd-hedg pr-0  col-lg-6 col-12 padding-left">
						<div class="content">
							<div class="heading-block">
								<p class="small-title"></p>
								<h3 class="title">Rescue a dog</h3>
								<p class="text">Adopting a dog can be a very rewarding experience. You will be saving a life and if you’re lucky, they might just save yours.  </p>
								
								<div class="coming-time">
									<div class="clearfix" data-countdown="2021/02/30">
									<button class="btn mt-4 breeds_choice_btn"> I’M A RESCUER!</button>
									</div>
								</div>
							</div>
						</div>	
					</div>	


					<div class="grd-hedg pl-0  col-lg-6 col-12 padding-right">
						<div class="image">
							<img src="{{asset('frontend/images/banner-1.jpg')}}" alt="#">
						</div>	
					</div>	
					
				</div>
			</div>
		</div>
	</div>
	<div class="cown-down">
		<div class="section-inner ">
			<div class="container-fluid">
				<div class="row">
					<div class="grd-hedg pr-0  col-lg-6 col-12 padding-right">
						<div class="image">
							<img src="{{asset('frontend/images/banner-1.jpg')}}" alt="#">
						</div>	
					</div>	
					<div class="grd-hedg pl-0  col-lg-6 col-12 padding-left">
						<div class="content">
							<div class="heading-block">
								<p class="small-title"></p>
								<h3 class="title">Donate</h3>
								<p class="text">Donate to non-profit groups that help dogs get the care and forever homes they need.</p>
								
								<div class="coming-time">
									<div class="clearfix" data-countdown="2021/02/30">
									<button class="btn mt-4 breeds_choice_btn"> DONATE </button>
									</div>
								</div>
							</div>
						</div>	
					</div>	
				</div>
			</div>
		</div>
	</div>
      
	<section class="shop-newsletter section pb-5 pt-5">
		<div class="container">
			<div class="inner-top">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 col-12">
						<!-- Start Newsletter Inner -->
						<div class="inner">
							<h4>Join the family</h4>
							<p>Use the form below to subscribe to our newsletter</p>
							<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
								<input name="EMAIL" placeholder="Your email address" required="" type="email">
								<button class="btn">Subscribe</button>
							</form>
						</div>
						<!-- End Newsletter Inner -->
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection

@push('styles')
	<style>
		.test:hover {
			font-size: 0;
		}

		.test:hover:before {
			font-size: 14px;
			content: attr(data-hover);
		}

		p.breads_cho {
			font-size: 22px;
		}
		p.breads_cho {
			font-size: 21px;
			font-weight: 300;
		}
		/* search */
		.search-box{
			width: 40%;
			height: 40px;
			position: relative;
			display: flex;

		}
		.search-input{
			width: 100%;
			padding: 10px;
			border: 1px solid #d9d9d9;
			border-radius:10px 0 0 10px ;
			border-right: none;
			outline: none;
			font-size: 20px;
			color: tomato;
			background: none;
			font-size: 16px;
		}
		.search-button {
			SIZE: A3;
			text-align: center;
			height: 40px;
			width: 68px;
			outline: none;
			cursor: pointer;
			border: 1px solid #d9d9d9;
			border-radius: 0 10px 10px 0;
			border-left: none;
			background: none;
			font-size: 20px;
			/* border-left: 4px solid #d9d9d9; */
		}
		input[type="text"],
			textarea {
				color: #d9d9d9;
				border: 1px solid #d9d9d9;
				border-radius: 3px;
				padding: 3px;
				border-radius: 10px 0px 0px 10px;
			}
	</style>
@endpush




@push('scripts')

@endpush 