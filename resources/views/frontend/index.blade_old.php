<?php  

use App\Models\Product;
?>
@extends('layouts.frontend_app')

@section('main-content')



<div class="default-height ph-item">
	<div class="slider-main owl-carousel">
		<div class="bg-image one">
			<div class="slide-content slide-animation">
				<h1>Bringing The gap Between family and Kennals</h1>
				<h2>lifestyle / clothing / hype</h2>
			</div>
		</div>
		<div class="bg-image two">
			<div class="slide-content-2 slide-animation">
				<h2 class="slide-2-h2-a">Hiking</h2>
				<h2 class="slide-2-h2-b">Collection</h2>
				<h1>2018</h1>
			</div>
		</div>
		<div class="bg-image three">
			<div class="slide-content slide-animation">
				<h1>Tech
					<span style="color:#333">Deals</span>
				</h1>
				<h2 style="color:#333"># shopping</h2>
			</div>
		</div>
	</div>
</div>

<div class="banner-layer">
	<div class="">
		
		<div class="row">
			<div class="col-md-4">
				<div class="image-cate">
					<a href="shop-v1-root-category.html" class="mx-auto banner-hover effect-dark-opacity">
						<img class="img-fluid" src="{{asset('frontend_2/images/img-1.jpg')}}" alt="Winter Season Banner">
					</a>
					<div class="banner-text">
						<a href="">
							<h5>Find a Puppy</h5>
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="image-cate">
					<a href="shop-v1-root-category.html" class="mx-auto banner-hover effect-dark-opacity">
						<img class="img-fluid" src="{{asset('frontend_2/images/img-2.jpg')}}" alt="Winter Season Banner">
					</a>
					<div class="banner-text">
						<a href="">
							<h5>Find a Kennel</h5>
						</a>
						
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="image-cate">
					<a href="shop-v1-root-category.html" class="mx-auto banner-hover effect-dark-opacity">
						<img class="img-fluid" src="{{asset('frontend_2/images/img-3.jpg')}}" alt="Winter Season Banner">
					</a>
					<div class="banner-text">
						<a href="">
							<h5>Services</h5>
						</a>
						
					</div>
				</div>

				{{-- <figure>
					<div class="ps-block--ourteam"><img class="img-fluid" src="{{asset('frontend_2/images/img-3.jpg')}}" alt="">
						<div class="ps-block__content">
							<h4>Robert Downey Jr</h4>
							<p>CEO Fouder</p>
							<ul>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
				</figure> --}}
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="input-group rounded">
				<input type="search" class="form-control rounded" placeholder="Find puppies form top tructed Kennels arround the world" aria-label="Search" aria-describedby="search-addon" />
				<span class="input-group-text border-0" id="search-addon">
				  <i class="fas fa-search"></i>
				</span>
			</div>

			{{-- <div class="container h-100">
				<div class="d-flex justify-content-center h-100">
				  <div class="searchbar">
					<input class="search_input" type="text" name="" placeholder="Search...">
					<a href="#" class="search_icon"><i class="fas fa-search"></i></a>
				  </div>
				</div>
			</div> --}}



		</div>
		<div class="col-md-3"></div>

	</div>
</div>

<section class="app-priority">
	<div class="container">
		<div class="sec-maker-header text-center">

			<h3 class="sec-maker-h3">Why Choose us</h3>
			
		</div>
		<div class="priority-wrapper u-s-p-b-80">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-3">
					<div class="single-item-wrapper">
						<div class="single-item-icon">
							
						</div>
						<a class="navbar-brand" href="#">
							<i class="ion ion-md-star"></i>							SCAM-FREE GUARANTEE
						  </a>
						<p>Trusted Kennels holds payment to kennel until you’ve received your puppy and have given us the thumbs-up.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3">
					<div class="single-item-wrapper">
						<div class="single-item-icon">
							<i class="ion ion-md-cash"></i>
						</div>
						<h2>
							Customizable programs
						</h2>
						<p>We can easily customize our programs for you,since every family and dog is different. From the program type to the place of training, there are a variety of options that can be changed.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3">
					<div class="single-item-wrapper">
						<div class="single-item-icon">
							<i class="ion ion-ios-card"></i>
						</div>
						<h2>
							Efficient Training
						</h2>
						<p>Our training actually works, and quickly.  We teach you and your dog together, so you know exactly what you need to maintain the training of your dog for many years to come.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3">
					<div class="single-item-wrapper">
						<div class="single-item-icon">
							<i class="ion ion-md-contacts"></i>
						</div>
						<h2>
							Years of expertise
						</h2>
						<p>Our years of experience means that we can help you find the best way to teach your dog to listen reliably to your whole family, and stop unwanted behaviors that you would like to avoid.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="priority-wrapper u-s-p-b-80">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-3">
					<div class="single-item-wrapper">
						<div class="single-item-icon">
							<i class="ion ion-md-star"></i>
						</div>
						<h2>
							Lots of positive reviews
						</h2>
						<p>The vast majority of our clients are highly satisfied with our dog training programs and boarding packages. Feel free to read our customers’ reviews and testimonials on our website.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3">
					<div class="single-item-wrapper">
						<div class="single-item-icon">
							<i class="ion ion-md-cash"></i>
						</div>
						<h2>
							personalized approach
						</h2>
						<p>Our Protection covers your purchase from click to delivery</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3">
					<div class="single-item-wrapper">
						<div class="single-item-icon">
							<i class="ion ion-ios-card"></i>
						</div>
						<h2>
							Safe Payment
						</h2>
						<p>We understand that no dog is the same and that’s why we use a personalized approach in all our training and boarding programs. It allows us to achieve better results in dog training.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3">
					<div class="single-item-wrapper">
						<div class="single-item-icon">
							<i class="ion ion-md-contacts"></i>
						</div>
						<h2>
							24/7 Help Center
						</h2>
						<p>Round-the-clock assistance for a smooth shopping experience</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>





{{-- <section class="section-maker">
	<div class="container">
		<div class="sec-maker-header text-center">
			<h3 class="sec-maker-h3">Trending Item </h3>

			<ul class="nav tab-nav-style-1-a justify-content-center">

				@foreach ($getProType as $types)
				<li class="nav-item">
					<a class="nav-link " data-toggle="tab" href="#men-latest-products-{{$types['id']}}">{{$types['name']}}</a>
				</li>
				@endforeach
			
			</ul>
		</div>
		<div class="wrapper-content">
			<div class="outer-area-tab">
				<div class="tab-content">
					@foreach ($getProType as $types)
					<?php  
						 $getId = Product::with('product_types')->where('produt_type_id',$types['id'])->get()->toArray();
					 ?>
					<div class="tab-pane active show fade" id="men-latest-products-{{$types['id']}}">
						<div class="slider-fouc">
							<div class="products-slider owl-carousel" data-item="4">
								@forelse ($getId as $item)
								<div class="item">
									<div class="image-container">
										<a class="item-img-wrapper-link" href="single-product.html">
											<img class="img-fluid" src="{{asset('storage/admin/images/admin_photos/product_medium/'.$item['image'])}}" alt="Product">
										</a>
										<div class="item-action-behaviors">
											<a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
											</a>
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
													<a href="shop-v3-sub-sub-category.html">{{$item['product_types']['name']}}</a>
												</li>
											</ul>
											<h6 class="item-title">
												<a href="single-product.html">{{$item['sire_name']}}</a>
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
									
								@endforelse
								

							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section> --}}


{{-- <div class="banner-image-view-more">
	<div class="row">
		<div class="col-md-6">
			<div class="container">
				<div class="image-banner u-s-m-y-40">
					<a href="shop-v1-root-category.html" class="mx-auto banner-hover effect-dark-opacity">
						<img class="img-fluid" src="{{asset('frontend/images/banner-1.jpg')}}" alt="Banner Image">
					</a>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="container">
				<div class="image-banner u-s-m-y-40">
					<a href="shop-v1-root-category.html" class="mx-auto banner-hover effect-dark-opacity">
						<img class="img-fluid" src="{{asset('frontend/images/banner-2.jpg')}}" alt="Banner Image">
					</a>
				</div>
			</div>
		</div>
	</div>
</div> --}}




<section class="section-maker">
	<div class="container">
		<div class="sec-maker-header text-center">
			<span class="sec-maker-span-text">Men's Clothing</span>
			<h3 class="sec-maker-h3 u-s-m-b-22">Featured Kannel</h3>
		</div>
		<div class="slider-fouc">
			<div class="products-slider owl-carousel" data-item="4">
				<div class="item">
					<div class="image-container">
						<a class="item-img-wrapper-link" href="single-product.html">
							<img class="img-fluid" src="{{asset('frontend/images/product/product@3x.jpg')}}" alt="Product">
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
									<a href="shop-v2-sub-category.html">Outwear</a>
								</li>
								<li>
									<a href="shop-v3-sub-sub-category.html">Jackets</a>
								</li>
							</ul>
							<h6 class="item-title">
								<a href="single-product.html">Maire Battlefield Jeep Men's Jacket</a>
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
					<div class="tag hot">
						<span>HOT</span>
					</div>
				</div>
				<div class="item">
					<div class="image-container">
						<a class="item-img-wrapper-link" href="single-product.html">
							<img class="img-fluid" src="{{asset('frontend/images/product/product@3x.jpg')}}" alt="Product">
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
									<a href="shop-v2-sub-category.html">Outwear</a>
								</li>
								<li>
									<a href="shop-v3-sub-sub-category.html">Jackets</a>
								</li>
							</ul>
							<h6 class="item-title">
								<a href="single-product.html">Fern Green Men's Jacket</a>
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
					<div class="tag hot">
						<span>HOT</span>
					</div>
				</div>
				<div class="item">
					<div class="image-container">
						<a class="item-img-wrapper-link" href="single-product.html">
							<img class="img-fluid" src="{{asset('frontend/images/product/product@3x.jpg')}}" alt="Product">
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
									<a href="shop-v2-sub-category.html">Sunglasses</a>
								</li>
								<li>
									<a href="shop-v3-sub-sub-category.html">Round</a>
								</li>
							</ul>
							<h6 class="item-title">
								<a href="single-product.html">Brown Dark Tan Round Double Bridge Sunglasses</a>
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
					<div class="tag hot">
						<span>HOT</span>
					</div>
				</div>
				<div class="item">
					<div class="image-container">
						<a class="item-img-wrapper-link" href="single-product.html">
							<img class="img-fluid" src="{{asset('frontend/images/product/product@3x.jpg')}}" alt="Product">
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
									<a href="shop-v2-sub-category.html">Sunglasses</a>
								</li>
								<li>
									<a href="shop-v3-sub-sub-category.html">Round</a>
								</li>
							</ul>
							<h6 class="item-title">
								<a href="single-product.html">Black Round Double Bridge Sunglasses</a>
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
					<div class="tag hot">
						<span>HOT</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="banner-image-view-more">
	<div class="container">
		<div class="image-banner u-s-m-y-40">
			<a href="shop-v1-root-category.html" class="mx-auto banner-hover effect-dark-opacity">
				<img class="img-fluid" src="{{asset('frontend/images/banners/ban-men.jpg')}}" alt="Banner Image">
			</a>
		</div>
		<div class="redirect-link-wrapper text-center u-s-p-t-25 u-s-p-b-80">
			<a class="redirect-link" href="store-directory.html">
				<span>View more on this category</span>
			</a>
		</div>
	</div>
</div>


<section class="section-maker">
	<div class="sec-maker-header text-center">
		<h3 class="sec-maker-h3">Featured puppies</h3>
		
	</div>
	<div class="container">
		<div class="wrapper-content">
			<div class="outer-area-tab">
				<div class="tab-content">
					<div class="tab-pane active show fade" id="women-latest-products">
						<div class="slider-fouc">
							<div class="products-slider owl-carousel" data-item="4">

								<div class="item">
									<div class="image-container">
										<a class="item-img-wrapper-link" href="single-product.html">
											<img class="img-fluid" src="{{asset('frontend/images/product/product@3x.jpg')}}" alt="Product">
										</a>
										<div class="item-action-behaviors">
											<a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
											</a>
											<a class="item-mail" href="javascript:void(0)">Mail</a>
											<a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
											<a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
										</div>
									</div>
									<div class="item-content">
										<div class="what-product-is">
											<ul class="bread-crumb">
												<li class="has-separator">
													<a href="shop-v1-root-category.html">Women's</a>
												</li>
												<li class="has-separator">
													<a href="shop-v2-sub-category.html">Tops</a>
												</li>
												<li>
													<a href="shop-v3-sub-sub-category.html">Dresses</a>
												</li>
											</ul>
											<h6 class="item-title">
												<a href="single-product.html">White Solitude Dress with mid heel & Bag
												</a>
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
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="redirect-link-wrapper text-center u-s-p-t-25 u-s-p-b-80">
			<a class="redirect-link" href="store-directory.html">
				<span>View more on this category</span>
			</a>
		</div>
	</div>
</section>
<section class="section-maker">
	<div class="container">
		<div class="sec-maker-header text-center">
			<h3 class="sec-maker-h3">Toys Hobbies & Robots</h3>
			<ul class="nav tab-nav-style-1-a justify-content-center">
				<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#toys-latest-products">Latest Products</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#toys-best-selling-products">Best Selling</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#toys-top-rating-products">Top Rating</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#toys-featured-products">Featured Products</a>
				</li>
			</ul>
		</div>
		<div class="wrapper-content">
			<div class="outer-area-tab">
				<div class="tab-content">
					<div class="tab-pane active show fade" id="toys-latest-products">
						<div class="slider-fouc">
							<div class="products-slider owl-carousel" data-item="4">
								<div class="item">
									<div class="image-container">
										<a class="item-img-wrapper-link" href="single-product.html">
											<img class="img-fluid" src="{{asset('frontend/images/product/product@3x.jpg')}}" alt="Product">
										</a>
										<div class="item-action-behaviors">
											<a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
											</a>
											<a class="item-mail" href="javascript:void(0)">Mail</a>
											<a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
											<a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
										</div>
									</div>
									<div class="item-content">
										<div class="what-product-is">
											<ul class="bread-crumb">
												<li class="has-separator">
													<a href="shop-v1-root-category.html">Toys Drones</a>
												</li>
												<li class="has-separator">
													<a href="shop-v2-sub-category.html">RC Toys & Hobbies</a>
												</li>
												<li>
													<a href="shop-v3-sub-sub-category.html">RC Helicopte</a>
												</li>
											</ul>
											<h6 class="item-title">
												<a href="single-product.html">RC Helicopter 6-Cell</a>
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
								<div class="item">
									<div class="image-container">
										<a class="item-img-wrapper-link" href="single-product.html">
											<img class="img-fluid" src="{{asset('frontend/images/product/product@3x.jpg')}}" alt="Product">
										</a>
										<div class="item-action-behaviors">
											<a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
											</a>
											<a class="item-mail" href="javascript:void(0)">Mail</a>
											<a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
											<a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
										</div>
									</div>
									<div class="item-content">
										<div class="what-product-is">
											<ul class="bread-crumb">
												<li class="has-separator">
													<a href="shop-v1-root-category.html">Toys Drones</a>
												</li>
												<li class="has-separator">
													<a href="shop-v2-sub-category.html">RC Toys & Hobbies</a>
												</li>
												<li>
													<a href="shop-v3-sub-sub-category.html">RC Drone</a>
												</li>
											</ul>
											<h6 class="item-title">
												<a href="single-product.html">DJI Phantom with 1080p Camera</a>
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
								</div>
								<div class="item">
									<div class="image-container">
										<a class="item-img-wrapper-link" href="single-product.html">
											<img class="img-fluid" src="{{asset('frontend/images/product/product@3x.jpg')}}" alt="Product">
										</a>
										<div class="item-action-behaviors">
											<a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
											</a>
											<a class="item-mail" href="javascript:void(0)">Mail</a>
											<a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
											<a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
										</div>
									</div>
									<div class="item-content">
										<div class="what-product-is">
											<ul class="bread-crumb">
												<li class="has-separator">
													<a href="shop-v1-root-category.html">Toys Drones</a>
												</li>
												<li class="has-separator">
													<a href="shop-v2-sub-category.html">RC Toys & Hobbies</a>
												</li>
												<li>
													<a href="shop-v3-sub-sub-category.html">RC Drone</a>
												</li>
											</ul>
											<h6 class="item-title">
												<a href="single-product.html">DJI Inspire with 1080p Camera</a>
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
								</div>
								<div class="item">
									<div class="image-container">
										<a class="item-img-wrapper-link" href="single-product.html">
											<img class="img-fluid" src="{{asset('frontend/images/product/product@3x.jpg')}}" alt="Product">
										</a>
										<div class="item-action-behaviors">
											<a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
											</a>
											<a class="item-mail" href="javascript:void(0)">Mail</a>
											<a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
											<a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
										</div>
									</div>
									<div class="item-content">
										<div class="what-product-is">
											<ul class="bread-crumb">
												<li class="has-separator">
													<a href="shop-v1-root-category.html">Toys Drones</a>
												</li>
												<li class="has-separator">
													<a href="shop-v2-sub-category.html">RC Toys & Hobbies</a>
												</li>
												<li>
													<a href="shop-v3-sub-sub-category.html">RC Drone</a>
												</li>
											</ul>
											<h6 class="item-title">
												<a href="single-product.html">DJI Phantom with Battery Lights</a>
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
								<div class="item">
									<div class="image-container">
										<a class="item-img-wrapper-link" href="single-product.html">
											<img class="img-fluid" src="{{asset('frontend/images/product/product@3x.jpg')}}" alt="Product">
										</a>
										<div class="item-action-behaviors">
											<a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
											</a>
											<a class="item-mail" href="javascript:void(0)">Mail</a>
											<a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
											<a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
										</div>
									</div>
									<div class="item-content">
										<div class="what-product-is">
											<ul class="bread-crumb">
												<li class="has-separator">
													<a href="shop-v1-root-category.html">Toys Drones</a>
												</li>
												<li class="has-separator">
													<a href="shop-v2-sub-category.html">RC Toys & Hobbies</a>
												</li>
												<li>
													<a href="shop-v3-sub-sub-category.html">RC Drone</a>
												</li>
											</ul>
											<h6 class="item-title">
												<a href="single-product.html">DJI Mavic Air
												</a>
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
									<div class="tag sale">
										<span>SALE</span>
									</div>
								</div>
								<div class="item">
									<div class="image-container">
										<a class="item-img-wrapper-link" href="single-product.html">
											<img class="img-fluid" src="{{asset('frontend/images/product/product@3x.jpg')}}" alt="Product">
										</a>
										<div class="item-action-behaviors">
											<a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
											</a>
											<a class="item-mail" href="javascript:void(0)">Mail</a>
											<a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
											<a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
										</div>
									</div>
									<div class="item-content">
										<div class="what-product-is">
											<ul class="bread-crumb">
												<li class="has-separator">
													<a href="shop-v1-root-category.html">Toys Drones</a>
												</li>
												<li class="has-separator">
													<a href="shop-v2-sub-category.html">RC Toys & Hobbies</a>
												</li>
												<li>
													<a href="shop-v3-sub-sub-category.html">RC Drone</a>
												</li>
											</ul>
											<h6 class="item-title">
												<a href="single-product.html">U45 Raven RC Quadcopter
												</a>
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
								</div>
								<div class="item">
									<div class="image-container">
										<a class="item-img-wrapper-link" href="single-product.html">
											<img class="img-fluid" src="{{asset('frontend/images/product/product@3x.jpg')}}" alt="Product">
										</a>
										<div class="item-action-behaviors">
											<a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
											</a>
											<a class="item-mail" href="javascript:void(0)">Mail</a>
											<a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
											<a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
										</div>
									</div>
									<div class="item-content">
										<div class="what-product-is">
											<ul class="bread-crumb">
												<li class="has-separator">
													<a href="shop-v1-root-category.html">Toys Drones</a>
												</li>
												<li class="has-separator">
													<a href="shop-v2-sub-category.html">RC Toys & Hobbies</a>
												</li>
												<li>
													<a href="shop-v3-sub-sub-category.html">RC Drone</a>
												</li>
											</ul>
											<h6 class="item-title">
												<a href="single-product.html">DJI Inspire 1 with 1080p Camera
												</a>
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
								</div>
								<div class="item">
									<div class="image-container">
										<a class="item-img-wrapper-link" href="single-product.html">
											<img class="img-fluid" src="{{asset('frontend/images/product/product@3x.jpg')}}" alt="Product">
										</a>
										<div class="item-action-behaviors">
											<a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
											</a>
											<a class="item-mail" href="javascript:void(0)">Mail</a>
											<a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
											<a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
										</div>
									</div>
									<div class="item-content">
										<div class="what-product-is">
											<ul class="bread-crumb">
												<li class="has-separator">
													<a href="shop-v1-root-category.html">Toys Drones</a>
												</li>
												<li class="has-separator">
													<a href="shop-v2-sub-category.html">RC Toys & Hobbies</a>
												</li>
												<li>
													<a href="shop-v3-sub-sub-category.html">RC Drone</a>
												</li>
											</ul>
											<h6 class="item-title">
												<a href="single-product.html">DJI Inspire 1 with 360° Camera
												</a>
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
									<div class="tag discount">
										<span>-15%</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="toys-best-selling-products">
						<!-- Product Not Found -->
						<div class="product-not-found">
							<div class="not-found">
								<h2>SORRY!</h2>
								<h6>There is not any product in specific catalogue.</h6>
							</div>
						</div>
						<!-- Product Not Found /- -->
					</div>
					<div class="tab-pane fade" id="toys-top-rating-products">
						<div class="slider-fouc">
							<div class="products-slider owl-carousel" data-item="4">
								<div class="item">
									<div class="image-container">
										<a class="item-img-wrapper-link" href="single-product.html">
											<img class="img-fluid" src="{{asset('frontend/images/product/product@3x.jpg')}}" alt="Product">
										</a>
										<div class="item-action-behaviors">
											<a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
											</a>
											<a class="item-mail" href="javascript:void(0)">Mail</a>
											<a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
											<a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
										</div>
									</div>
									<div class="item-content">
										<div class="what-product-is">
											<ul class="bread-crumb">
												<li class="has-separator">
													<a href="shop-v1-root-category.html">Toys Drones</a>
												</li>
												<li class="has-separator">
													<a href="shop-v2-sub-category.html">RC Toys & Hobbies</a>
												</li>
												<li>
													<a href="shop-v3-sub-sub-category.html">RC Drone</a>
												</li>
											</ul>
											<h6 class="item-title">
												<a href="single-product.html">DJI Mavic Air
												</a>
											</h6>
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
									<div class="tag sale">
										<span>SALE</span>
									</div>
								</div>
								<div class="item">
									<div class="image-container">
										<a class="item-img-wrapper-link" href="single-product.html">
											<img class="img-fluid" src="{{asset('frontend/images/product/product@3x.jpg')}}" alt="Product">
										</a>
										<div class="item-action-behaviors">
											<a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
											</a>
											<a class="item-mail" href="javascript:void(0)">Mail</a>
											<a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
											<a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
										</div>
									</div>
									<div class="item-content">
										<div class="what-product-is">
											<ul class="bread-crumb">
												<li class="has-separator">
													<a href="shop-v1-root-category.html">Toys Drones</a>
												</li>
												<li class="has-separator">
													<a href="shop-v2-sub-category.html">RC Toys & Hobbies</a>
												</li>
												<li>
													<a href="shop-v3-sub-sub-category.html">RC Drone</a>
												</li>
											</ul>
											<h6 class="item-title">
												<a href="single-product.html">U45 Raven RC Quadcopter
												</a>
											</h6>
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
								</div>
								<div class="item">
									<div class="image-container">
										<a class="item-img-wrapper-link" href="single-product.html">
											<img class="img-fluid" src="{{asset('frontend/images/product/product@3x.jpg')}}" alt="Product">
										</a>
										<div class="item-action-behaviors">
											<a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look
											</a>
											<a class="item-mail" href="javascript:void(0)">Mail</a>
											<a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
											<a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
										</div>
									</div>
									<div class="item-content">
										<div class="what-product-is">
											<ul class="bread-crumb">
												<li class="has-separator">
													<a href="shop-v1-root-category.html">Toys Drones</a>
												</li>
												<li class="has-separator">
													<a href="shop-v2-sub-category.html">RC Toys & Hobbies</a>
												</li>
												<li>
													<a href="shop-v3-sub-sub-category.html">RC Drone</a>
												</li>
											</ul>
											<h6 class="item-title">
												<a href="single-product.html">DJI Inspire 1 with 1080p Camera</a>
											</h6>
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
								</div>
								
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="toys-featured-products">
						<!-- Product Not Found -->
						<div class="product-not-found">
							<div class="not-found">
								<h2>SORRY!</h2>
								<h6>There is not any product in specific catalogue.</h6>
							</div>
						</div>
						<!-- Product Not Found /- -->
					</div>
				</div>
			</div>
		</div>
		<div class="redirect-link-wrapper text-center u-s-p-t-25 u-s-p-b-80">
			<a class="redirect-link" href="store-directory.html">
				<span>View more on this category</span>
			</a>
		</div>
	</div>
</section>





	{{-- <section class="hero-slider" >
	
	 
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
					  <h3>BETTER RELATIONSHIPS</h3>
				  		<h6>BETWEEN PEOPLE AND DOGS</h6>
					  <p>Our dog training center pursues the goal of better understanding the human’s best companions. We provide group and private lessons for all breeds, from puppies to grown-ups. All our training programs are designed to help your dog socialize and teach you how to train your dog.</p>

					  	<div class="content pt-4">
							<button href="#" class="btn btn-fw">Discover Now</button>
						</div>
					
					</div>
					
				  </div>
				 
				</div>
				<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
				  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				  <span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
				  <span class="carousel-control-next-icon" aria-hidden="true"></span>
				  <span class="sr-only">Next</span>
				</a>
			</div>
		</div>
        
	</section> --}}
	

	{{-- <section class="small-banner section">
		<div class="container-fluid">
			<div class="row">
				<!-- Single Banner  -->
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-banner">
                        
						<img src="{{asset('frontend/images/img-1.jpg')}}" alt="#">
						<div class="content">
							<p>Man's Collectons</p>
							<h3>Summer travel <br> collection</h3>
							<a href="#" class="nav-link  btn-fw">Find Kannel</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-banner">
						<img src="{{asset('frontend/images/img-2.jpg')}}" alt="#">
						<div class="content">
							<p>Bag Collectons</p>
							<h3>Awesome Bag <br> 2020</h3>
							<a href="#" class="nav-link  btn-fw">Find Puppy</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-4 col-12">
					<div class="single-banner tab-height">
						<img src="{{asset('frontend/images/img-3.jpg')}}" alt="#">
						<div class="content">
							<p>Flash Sale</p>
							<h3>Mid Season <br> Up to <span>40%</span> Off</h3>
							<a href="#" class="nav-link  btn-fw">Our Servic</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
			</div>
		</div>
	</section> --}}

	{{-- <section class="section section-md bg-default">
        <div class="container">
          <h3 class="text-center">Why Choose us</h3>
          <div class="row row-30">
            <div class="col-lg-4 col-sm-6 wow flipInX" style="visibility: visible; animation-name: flipInX;">
              <div class="unit align-items-center">
                <div class="unit-left"><img src="images/home-01-54x57.png" alt="" width="54" height="57">
                </div>
                <div class="unit-body">
                  <h5><a href="#">Certified coaches</a></h5>
                </div>
              </div>
              <p>Our trainers are highly certified and professional. They continue their education so they always know the best, gentlest, and fastest ways to help your dog gain amazing results.</p>
            </div>
            <div class="col-lg-4 col-sm-6 wow flipInX" style="visibility: visible; animation-name: flipInX;">
              <div class="unit align-items-center">
                <div class="unit-left"><img src="images/home-02-54x57.png" alt="" width="54" height="57">
                </div>
                <div class="unit-body">
                  <h5><a href="#">Customizable programs</a></h5>
                </div>
              </div>
              <p></p>
            </div>
            <div class="col-lg-4 col-sm-6 wow flipInX" style="visibility: visible; animation-name: flipInX;">
              <div class="unit align-items-center">
                <div class="unit-left"><img src="images/home-03-54x57.png" alt="" width="54" height="57">
                </div>
                <div class="unit-body">
                  <h5><a href="#"></a></h5>
                </div>
              </div>
              <p></p>
            </div>
            <div class="col-lg-4 col-sm-6 wow flipInX" style="visibility: visible; animation-name: flipInX;">
              <div class="unit align-items-center">
                <div class="unit-left"><img src="images/home-04-54x57.png" alt="" width="54" height="57">
                </div>
                <div class="unit-body">
                  <h5><a href="#"></a></h5>
                </div>
              </div>
              <p></p>
            </div>
            <div class="col-lg-4 col-sm-6 wow flipInX" style="visibility: visible; animation-name: flipInX;">
              <div class="unit align-items-center">
                <div class="unit-left"><img src="images/home-05-54x57.png" alt="" width="54" height="57">
                </div>
                <div class="unit-body">
                  <h5><a href="#"></a></h5>
                </div>
              </div>
              <p></p>
            </div>
            <div class="col-lg-4 col-sm-6 wow flipInX" style="visibility: visible; animation-name: flipInX;">
              <div class="unit align-items-center">
                <div class="unit-left"><img src="images/home-06-54x57.png" alt="" width="54" height="57">
                </div>
                <div class="unit-body">
                  <h5><a href="#"></a></h5>
                </div>
              </div>
              <p></p>
            </div>
          </div>
        </div>
      </section>

    <div class="product-area section">
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
																<img class="default-img" src="{{asset('storage/admin/images/admin_photos/product/'.$item['image'])}}" alt="#">
																<img class="hover-img" src="{{asset('storage/admin/images/admin_photos/product/'.$item['image'])}}" alt="#">
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
    </div>
	<section class="midium-banner">
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
									<img class="default-img" src="{{asset('storage/admin/images/admin_photos/product/'.$pro['image'])}}" alt="#">
									<img class="hover-img" src="{{asset('storage/admin/images/admin_photos/product/'.$pro['image'])}}" alt="#">
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
    </div>
	<section class="cown-down">
		<div class="section-inner ">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 col-12 padding-right">
						<div class="image">
							<img src="{{asset('frontend/images/banner-1.jpg')}}" alt="#">
						</div>	
					</div>	
					<div class="col-lg-6 col-12 padding-left">
						<div class="content">
							<div class="heading-block">
								<p class="small-title"></p>
								<h3 class="title">Rescue a dog</h3>
								<p class="text">Adopting a dog can be a very rewarding experience. You will be saving a life and if you’re lucky, they might just save yours.  </p>
								
								<div class="coming-time">
									<div class="clearfix" data-countdown="2021/02/30"></div>
								</div>
							</div>
						</div>	
					</div>	
				</div>
			</div>
		</div>
	</section>
	<section class="cown-down">
		<div class="section-inner ">
			<div class="container-fluid">
				<div class="row">
					
					<div class="col-lg-6 col-12 padding-left">
						<div class="content">
							<div class="heading-block">
								<p class="small-title"></p>
								<h3 class="title">Donate</h3>
								<p class="text">Donate to non-profit groups that help dogs get the care and forever homes they need. </p>
								
								<div class="coming-time">
									<div class="clearfix" data-countdown="2021/02/30"></div>
								</div>
							</div>
						</div>	
					</div>
					<div class="col-lg-6 col-12 padding-right">
						<div class="image">
							<img src="{{asset('frontend/images/banner-2.jpg')}}" alt="#">
						</div>	
					</div>	
				</div>
			</div>
		</div>
	</section> --}}


	{{-- <div class="product-area most-popular section">
        <div class="container">
            <div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>Futured Kennel</h2>
					</div>
				</div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">

						
						<!-- Start Single Product -->
						@forelse ($getFeaturedAdmin as $admin)
						<div class="single-product">
							<div class="product-img">
								<a href="{{route('storeDetails',$admin['vendors']['slug'])}}">
									<img class="default-img" src="{{asset('admin/images/admin_photos/admins/'.$admin['admin_image'])}}" alt="#">
									<img class="hover-img" src="{{asset('admin/images/admin_photos/admins/'.$admin['admin_image'])}}" alt="#">
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
								<h3><a href="{{route('storeDetails',$admin['vendors']['slug'])}}">{{$admin['vendors']['shop_name']}}</a></h3>
								<div class="product-price">
									<span class="old">$60.00</span>
									<span>$50.00</span>
								</div>
							</div>
						</div>
						@empty

						<p>Featured Kennel not found....</p>
							
						@endforelse
					
						<!-- End Single Product -->

                    </div>
                </div>
            </div>
        </div>
    </div> --}}



	{{-- <section class="shop-blog section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>From Our Blog</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-12">
					<!-- Start Single Blog  -->
					<div class="shop-single-blog">
						<img src="{{asset('frontend/images/banner-2.jpg')}}" alt="#">
						<div class="content">
							<p class="date">22 July , 2020. Monday</p>
							<a href="#" class="title">Sed adipiscing ornare.</a>
							<a href="#" class="more-btn">Continue Reading</a>
						</div>
					</div>
					<!-- End Single Blog  -->
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<!-- Start Single Blog  -->
					<div class="shop-single-blog">
						<img src="{{asset('frontend/images/banner-2.jpg')}}" alt="#">
						<div class="content">
							<p class="date">22 July, 2020. Monday</p>
							<a href="#" class="title">Man’s Fashion Winter Sale</a>
							<a href="#" class="more-btn">Continue Reading</a>
						</div>
					</div>
					<!-- End Single Blog  -->
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<!-- Start Single Blog  -->
					<div class="shop-single-blog">
						<img src="{{asset('frontend/images/banner-2.jpg')}}" alt="#">
						<div class="content">
							<p class="date">22 July, 2020. Monday</p>
							<a href="#" class="title">Women Fashion Festive</a>
							<a href="#" class="more-btn">Continue Reading</a>
						</div>
					</div>
					<!-- End Single Blog  -->
				</div>
			</div>
		</div>
	</section>
	
	<section class="shop-services section home">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-rocket"></i>
						<h4>Free shiping</h4>
						<p>Orders over $100</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-reload"></i>
						<h4>Free Return</h4>
						<p>Within 30 days returns</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-lock"></i>
						<h4>Sucure Payment</h4>
						<p>100% secure payment</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-tag"></i>
						<h4>Best Peice</h4>
						<p>Guaranteed price</p>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</div>
	</section> --}}

@endsection

@push('styles')
<style>
	.banner-text {
		position: absolute;
		top: 138px;
		left: 15px;
		color: #fff;
		font-weight: bold;
		width: 92%;
		background: #ffffff5e;
		padding: 4px;
		text-align: center;
	}

    .searchbar{
    margin-bottom: auto;
    margin-top: auto;
    height: 60px;
    background-color: #353b48;
    border-radius: 30px;
    padding: 10px;
    }

    .search_input{
    color: white;
    border: 0;
    outline: 0;
    background: none;
    width: 0;
    caret-color:transparent;
    line-height: 40px;
    transition: width 0.4s linear;
    }
	.searchbar:hover > .search_input{
    padding: 0 10px;
    width: 450px;
    caret-color:red;
    transition: width 0.4s linear;
    }

    .searchbar:hover > .search_icon{
    background: white;
    color: #e74c3c;
    }

    .search_icon{
    height: 40px;
    width: 40px;
    float: right;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    color:white;
    text-decoration:none;
    }


</style>
@endpush




@push('scripts')

@endpush
