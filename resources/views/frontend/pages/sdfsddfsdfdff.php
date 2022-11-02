
{{-- <div class="col-lg-3 col-md-3 col-sm-12">

	<div class="facet-filter-associates">
		<h3 class="title-name">getCat</h3>
			<div class="search_layered_nav">
				<input type="text" class="mf-input-search-nav">
			</div>
			<ul class="woocommerce-widget-layered-nav-list mf-widget-layered-nav-scroll" data-height="130" style="max-height:130px">
				<li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "></li>
			</ul>
			<div class="associate-wrapper">

				@forelse ($getCat as $item)
					<img src="{{asset('storage/admin/images/admin_photos/category/'.$item['image'])}}" style="width: 50px;" />
						<input type="checkbox" class="check-box category_id" name="category_id[]" id="{{$item['id']}}" value="{{$item['id']}}">
						<label class="label-text" for="{{$item['id']}}">{{$item['name']}}
						</label>
				@empty
				@endforelse
			
			</div>
	</div>


	<div class="facet-filter-associates">
		<h3 class="title-name">getCountry</h3>
			<div class="associate-wrapper">

				@forelse ($getGender as $item)
				
					<input type="checkbox" class="check-box gender_id" name="gender_id[]" id="{{$item['Gender']}}" value="{{$item['Gender']}}">
					<label class="label-text" for="{{$item['Gender']}}">{{$item['Gender']}}
					</label>
				@empty
				@endforelse
			
				
			</div>
	</div>



</div> --}}








<div class="col-lg-3 col-12   dotted-backgroune"  style="border-radius:10px 10px 50px 50px;     border: 1px solid rgba(0, 0, 0, .125);">
	<div class="sidebar-filter">
		<div class="row" >
			<div class="col-6  text-left">
				<p class="font-weight-bold">Filter </p>
			</div>
			<div class="col-6  text-right">
				<p class="font-weight-bold"> <a href="">Reset</a> </p>
			</div>
		</div>
	</div>
	<div class="accordion" id="accordionExample">
		<div class="">
		  <div class="" id="headingOne">
			<div class=" text-right">
				<div class="row" >
					<div class="col-6  text-left">
						<p class="font-weight-bold pt-3 text-left">Availabilty </p></div>
					<div class="col-6">
						<h5 class="font-weight-bold  text-right">
							<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							  {{-- <img src="{{asset('frontend/images/search.png')}}" alt="" style="width: 15px;"> --}}
							  <i class='fas fa-angle-down'></i>
							</button>
						</h5>
					</div>
				</div>
				
			</div>
			
		  </div>
	  
		  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
			<div class="card-bdy">
				<div class="single-widget gender">
					<ul>
						<li><input type="checkbox" name="" id=""> <label for="">Availabe Puppy</label></li>
						<li><input type="checkbox" name="" id=""> <label for="">Planed litters</label></li>
					</ul>
				</div>
			</div>
		  </div>
		</div>
		
	</div>
	
	<div class="facet-filter-associates">
		
		<div class="row" >
			<div class="col-6  text-left">
				{{-- <p class="font-weight-bold pt-3 text-left">Availabilty </p> --}}
				<h3 class="title-name text-left">Availability</h3>
			</div>
			<div class="col-6">
				<h3 class="font-weight-bold  text-right">
					<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
					  {{-- <img src="{{asset('frontend/images/search.png')}}" alt="" style="width: 15px;"> --}}
					  <i class='fas fa-angle-down'></i>
					</button>
				</h3>
			</div>
		</div>
		<div id="collapseTwo" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
			<div class="card-bdy">
				<div class="single-widget gender">
					<ul>
						<li><input type="checkbox" name="" id=""> <label for="">Availabe Puppy</label></li>
						<li><input type="checkbox" name="" id=""> <label for="">Planed litters</label></li>
					</ul>
				</div>
			</div>
		  </div>
		
		
	</div>
	{{-- Breeds  --}}
	<div class="facet-filter-associates">
		
		<div class="row" >
			<div class="col-6  text-left">
				{{-- <p class="font-weight-bold pt-3 text-left">Availabilty </p> --}}
				<h3 class="title-name text-left">Breed</h3>
			</div>
			<div class="col-6">
				<h3 class="font-weight-bold  text-right">
					<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseBreeds" aria-expanded="true" aria-controls="collapseBreeds">
					  {{-- <img src="{{asset('frontend/images/search.png')}}" alt="" style="width: 15px;"> --}}
					  <i class='fas fa-angle-down'></i>
					</button>
				</h3>
			</div>
		</div>
		<div id="collapseBreeds" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
			<div class="card-bdy">


				<div class="justify-content-center ">
					<div class="search-sidebar-box-grid-pagee">
						<input type="text" class="search-sidebar-input search-sidebar-boxss" placeholder="Available Breeds">
						<div class="search-sidebar-icon">
							<a href="" type="submit"> 
								<img src="{{asset('frontend/images/search.png')}}" alt="">
							</a>
						</div>
					</div>
				</div>
				<div class="single-widget gender" >
					<div class="single-widget category scrollmenu overflow-auto" id="chatbox">
						<h5 class=""></h5>
						<ul>
							@forelse ($getCat as $item)
							<li class="media pb-2 active">
								<a>

									<input  class="mr-2 category_id" type="checkbox" name="category_id[]" id="{{$item['id']}}" value="{{$item['id']}}" style="margin-left: 1px;"> {{$item['name']}} </label>
								</a>
							</li>
							@empty
							@endforelse
						</ul>
					</div>
				</div>
			</div>
		  </div>
		
		
	</div>

	{{-- Groups --}}

	<div class="facet-filter-associates">
		
		<div class="row" >
			<div class="col-6  text-left">
				{{-- <p class="font-weight-bold pt-3 text-left">Availabilty </p> --}}
				<h3 class="title-name text-left">Groups</h3>
			</div>
			<div class="col-6">
				<h3 class="font-weight-bold  text-right">
					<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseGroup" aria-expanded="true" aria-controls="collapseGroup">
					  {{-- <img src="{{asset('frontend/images/search.png')}}" alt="" style="width: 15px;"> --}}
					  <i class='fas fa-angle-down'></i>
					</button>
				</h3>
			</div>
		</div>
		<div id="collapseGroup" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
			<div class="card-bdy">
				<div class="single-widget gender">
					<ul>
						<li><input type="checkbox" name="" id=""> <label for="">Family dogs</label></li>
						<li><input type="checkbox" name="" id=""> <label for="">Cold weather</label></li>
						<li><input type="checkbox" name="" id=""> <label for="">Guard dogs</label></li>
						<li><input type="checkbox" name="" id=""> <label for="">Toy breeds</label></li>
						<li><input type="checkbox" name="" id=""> <label for="">Allergy friendly</label></li>
						<li><input type="checkbox" name="" id=""> <label for="">Apartment dogs</label></li>

					</ul>
				</div>
			</div>
		  </div>
		
		
	</div>
	{{-- Age --}}
	<div class="facet-filter-associates">
		
		<div class="row" >
			<div class="col-6  text-left">
				{{-- <p class="font-weight-bold pt-3 text-left">Availabilty </p> --}}
				<h3 class="title-name text-left">Age</h3>
			</div>
			<div class="col-6">
				<h3 class="font-weight-bold  text-right">
					<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseAge" aria-expanded="true" aria-controls="collapseAge">
					  {{-- <img src="{{asset('frontend/images/search.png')}}" alt="" style="width: 15px;"> --}}
					  <i class='fas fa-angle-down'></i>
					</button>
				</h3>
			</div>
		</div>
		<div id="collapseAge" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
			<div class="card-bdy">
				<div class="single-widget gender">
					<ul>
						<li><input type="checkbox" name="" id=""> <label for="">Up to 12 Weeks</label></li>
						<li><input type="checkbox" name="" id=""> <label for="">12 to 24 Weeks</label></li>
						<li><input type="checkbox" name="" id=""> <label for="">24 to 48 Weeks</label></li>
						<li><input type="checkbox" name="" id=""> <label for="">Older than 48 Weeks</label></li>

					</ul>
				</div>
			</div>
			{{-- <div id="chatbox" class="overflow-auto">
				<div class="mb-5">Lorem Ipsum</div>
				<div class="mb-5">Lorem Ipsum</div>
				<div class="mb-5">Lorem Ipsum</div>
				<div class="mb-5">Lorem Ipsum</div>
				<div class="mb-5">Lorem Ipsum</div>
				<div class="mb-5">Lorem Ipsum</div>
				<div class="mb-5">Lorem Ipsum</div>
				<div class="mb-5">Lorem Ipsum</div>
			  </div>
		  	</div> --}}
		
		
	</div>

	{{-- Gender --}}
	<div class="facet-filter-associates">
		
		<div class="row" >
			<div class="col-6  text-left">
				{{-- <p class="font-weight-bold pt-3 text-left">Availabilty </p> --}}
				<h3 class="title-name text-left">Gender</h3>
			</div>
			<div class="col-6">
				<h3 class="font-weight-bold  text-right">
					<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseGender" aria-expanded="true" aria-controls="collapseGender">
					  {{-- <img src="{{asset('frontend/images/search.png')}}" alt="" style="width: 15px;"> --}}
					  <i class='fas fa-angle-down'></i>
					</button>
				</h3>
			</div>
		</div>
		<div id="collapseGender" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
			<div class="card-bdy">
				<div class="single-widget gender">
					<ul>
						<li><input type="checkbox" name="" id=""> <label for="">Female</label></li>
						<li><input type="checkbox" name="" id=""> <label for="">Male</label></li>
					</ul>
				</div>
			</div>
		  </div>
		
		
	</div>

	{{-- <div class="row" style="border-bottom: 2px solid rgba(0, 0, 0, .125);">
		<div class="col-6"><p class="font-weight-bold p-3 text-left">Filters </p></div>
		<div class="col-6"><a href=""><p class="font-weight-bold p-3 text-right"> Reset</p> </a>  </div>
	</div> --}}
	{{-- <div class="collapes-as pb-2 pt-2">
		<h5 href="" class="" type="button" data-toggle="collapse" data-target="#collapseAge" aria-expanded="true" aria-controls="collapseAge">
			Availabilty
		</h5>
		<div id="collapseAge" class="collapse" aria-labelledby="Age" data-parent="#accordionExample">
			<div class="card-body">
			<div class="single-widget gender">
				<ul>
					<li><input type="checkbox" name="" id=""> <label for="">Availabe Puppy</label></li>
					<li><input type="checkbox" name="" id=""> <label for="">Planed litters</label></li>
				</ul>
			</div>
			</div>
		</div>

	</div> --}}
		{{-- <div class="collapes-as pb-5 pt-2">
			<a href=""  data-toggle="collapse" data-target="#collapseCategoires" class="font-weight-bold" >Breeds</a>
			<div id="collapseCategoires" class="collapse show" aria-labelledby="category" data-parent="#accordionExample">
				<div class="card-body">
					<div class="search-box">
						<input type="text" class="search-input" placeholder="Find puppy around the word from top trusted kennesl..">
				  
						<button class="search-button">
						  <i class="fas fa-search"></i>
						</button>
					 </div>



					<div class="single-widget search">
						<form action="">
							<input type="email" name="bread" placeholder="Find a breed..." style="    width: 100%;">
							<a class="button" href="#" style=" 
							position: absolute;
							right: 45px;
							top: 143px;
						"><i class="fa fa-search"></i></a>
						</form>
					</div>
					<div class="single-widget category scrollmenu">
						<h5 class=""></h5>
						<ul>
							@forelse ($getCat as $item)
							<li class="media pb-2 active">
								<a>

									<input  class="mr-2 category_id" type="checkbox" name="category_id[]" id="{{$item['id']}}" value="{{$item['id']}}" style="margin-left: 1px;"> {{$item['name']}} </label>
								</a>
							</li>
							@empty
							@endforelse
						</ul>
					</div>
				</div>
			</div>
		</div>
		
		<div class="collapes-as pb-2 pt-2">
			<a href="" class="font-weight-bold"  data-toggle="collapse" data-target="#collapseGender" aria-expanded="true" aria-controls="collapseGender">Gender</a>
			<div id="collapseGender" class="collapse" aria-labelledby="gender" data-parent="#accordionExample">
			<div class="card-body">
				<div class="single-widget Gender">
					<ul>
						@foreach ($getGender as $item)

						<li class="media pb-2 active">
							<a>
								<input  class="mr-2 gender_id" type="checkbox" name="gender_id[]" id="{{$item['id']}}" value="{{$item['Gender']}}" style="margin-left: -17px;"> {{$item['Gender']}} </label>
							</a>
						</li>
							
						@endforeach
					</ul>
				</div>
			</div>
			</div>
		</div>

		<div class="collapes-as pb-2 pt-2">
			<a href="" class="font-weight-bold" type="button" data-toggle="collapse" data-target="#collapseCollection" aria-expanded="true" aria-controls="collapseCollection">
				Group
			</a>
			<div id="collapseCollection" class="collapse" aria-labelledby="collection" data-parent="#accordionExample">
			<div class="card-body">
				<div class="single-widget gender">
					<h5 class="">Group</h5>
					<ul>
						<li><input type="checkbox" name="" id=""> <label for="">Family Dogs</label></li>
						<li><input type="checkbox" name="" id=""> <label for="">Colds weathers</label></li>
						<li><input type="checkbox" name="" id=""> <label for="">Guard Dogs</label></li>
						<li><input type="checkbox" name="" id=""> <label for="">Toy Breeds</label></li>
						<li><input type="checkbox" name="" id=""> <label for="">Allergy Friendly Dogs</label></li>
						<li><input type="checkbox" name="" id=""> <label for="">Appartments Dogs</label></li>
					</ul>
				</div>
			</div>
			</div>
		</div>
		<div class="collapes-as pb-2 pt-2">
			<a href="" class="" type="button" data-toggle="collapse" data-target="#collapseAge" aria-expanded="true" aria-controls="collapseAge">
				Age
			</a>
			<div id="collapseAge" class="collapse" aria-labelledby="Age" data-parent="#accordionExample">
				<div class="card-body">
				<div class="single-widget gender">
					<h5 class="">Age</h5>
					<ul>
						<li><input type="radio" name="" id=""> <label for="">Any Age</label></li>
						<li><input type="radio" name="" id=""> <label for="">Up To 8 Weeks</label></li>
						<li><input type="radio" name="" id=""> <label for="">Up To 12 Weeks</label></li>
						<li><input type="radio" name="" id=""> <label for="">Up To 16 Weeks</label></li>
						<li><input type="radio" name="" id=""> <label for="">Older Than 16 Weeks</label></li>
					</ul>
				</div>
				</div>
			</div>
		</div> --}}


</div>