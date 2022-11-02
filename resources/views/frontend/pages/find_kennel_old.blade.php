<?php  

use App\Models\Product;
use App\Models\Admin;

?>
@extends('layouts.frontend_app')

@section('main-content')

		<!-- Breadcrumbs -->
		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<ul class="bread-list">
								<li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
								<li class="active"><a href="blog-single.html">Shop Grid</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<section class="blog-single shop-blog grid section">
			<div class="container">
				<div class="row">

						@include('frontend.pages.sidebar_kennel')

					<div class="col-lg-8 col-12 ">
						<div class="row">
							<div class="col-12 ">
								<!-- Shop Top -->
								<div class="shop-top bg-info">
									<div class="shop-shorter bg-light ">

										<form>
											  <div class="row p-3">
												<div class="col-4">
												<label for="">Sort By :</label>
												</div>
												<div class="col-8">
													<select class="form-control" name="sort" id="sort">
														<option value="product_latest"

														@if (isset($_GET['sort']) && $_GET['sort']=="product_latest") selected=""@endif
														>Latest Pro</option>
														<option value="name_z"
														@if (isset($_GET['sort']) && $_GET['sort']=="name_z") selected=""@endif
														>Name Z</option>
														<option value="name_a" 
														@if (isset($_GET['sort']) && $_GET['sort']=="name_a") selected=""@endif
				
														>Name A</option>
														
													</select>
												</div>
											  </div>
										</form>

									</div>
									
								</div>
								<!--/ End Shop Top -->
							</div>
						</div>
						<div class="tab-content filter_products">

							@include('frontend.pages.ajax_kennel_listing')

	
						</div>
						
						
					</div>
				</div>
			</div>
		</section>

@endsection

@push('styles')
<style>
	div.scrollmenu {
	overflow: auto;
	white-space: nowrap;
	/* width: 292px; */
		height: 406px;
	overflow-y: auto;
	}

	div.scrollmenu a {
	display: inline-block;
	color: rgb(3, 3, 3);
	text-align: inherit;
	padding: 14px;
	width: 260px;
	text-decoration: none;
	}

	div.scrollmenu a:hover {
		background-color: #777;
		width: 260px;
		text-align: inherit;
	}
		.card__details p.age, .card__details p.breed {
		font-size: 13px;
		font-weight: 400;
	}
</style>
@endpush




@push('scripts')
<script>
	// In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
    $('.js-example-basic-single').select2();

		$("#sort").on('change',function(){
			var country_id = get_filter("country_id");
			var state_id = get_filter("state_id");
			var city_id = get_filter("city_id");
			var category_id = get_filter("category_id");
			var sort = $("#sort option:selected").val();
			$.ajax({
				url:"/find-a-kennel",
				method:"get",
				data:{
					category_id:category_id,
					country_id:country_id,
					state_id:state_id,
					city_id:city_id,
					sort:sort},
					success:function(resp){
					$('.filter_products').html(resp);
				}
			});
		});
		$(".category_id").on('click',function(){
			var country_id = get_filter("country_id");
			var state_id = get_filter("state_id");
			var city_id = get_filter("city_id");
			var category_id = get_filter("category_id");
			var sort = $("#sort option:selected").val();
			$.ajax({
				url:"/find-a-kennel",
				method:"get",
				data:{
					category_id:category_id,
					country_id:country_id,
					state_id:state_id,
					city_id:city_id,
					sort:sort},
				success:function(resp){
					$('.filter_products').html(resp);
				}
			});
		});
		// country
		$(".country_id").on('click',function(){
			var country_id = get_filter("country_id");
			var state_id = get_filter("state_id");
			var city_id = get_filter("city_id");
			var category_id = get_filter("category_id");
			var sort = $("#sort option:selected").val();
			$.ajax({
				url:"/find-a-kennel",
				method:"get",
				data:{
					category_id:category_id,
					country_id:country_id,
					state_id:state_id,
					city_id:city_id,
					sort:sort},
				success:function(resp){
					$('.filter_products').html(resp);
				}
			});
		});
		// state
		$(".state_id").on('click',function(){
			var country_id = get_filter("country_id");
			var state_id = get_filter("state_id");
			var city_id = get_filter("city_id");
			var category_id = get_filter("category_id");
			var sort = $("#sort option:selected").val();
			$.ajax({
				url:"/find-a-kennel",
				method:"get",
				data:{
					category_id:category_id,
					country_id:country_id,
					state_id:state_id,
					city_id:city_id,
					sort:sort},
				success:function(resp){
					$('.filter_products').html(resp);
				}
			});
		});
		//city
		$(".city_id").on('click',function(){
			var country_id = get_filter("country_id");
			var state_id = get_filter("state_id");
			var city_id = get_filter("city_id");
			var category_id = get_filter("category_id");
			var sort = $("#sort option:selected").val();
			$.ajax({
				url:"/find-a-kennel",
				method:"get",
				data:{
					category_id:category_id,
					country_id:country_id,
					state_id:state_id,
					city_id:city_id,
					sort:sort},
				success:function(resp){
					$('.filter_products').html(resp);
				}
			});
		});

		function get_filter(class_name){
			var filter = [];
			$('.'+class_name+':checked').each(function(){

				filter.push($(this).val());

			});
			return filter;
		}
});
</script>
@endpush
