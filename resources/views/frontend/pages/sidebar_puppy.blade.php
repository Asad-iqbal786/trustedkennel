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








<div class="col-lg-3 col-12   dotted-backgroune">

    <div class="sidebar-filter">
        <div class="row" style="border-bottom: 1px solid rgba(0, 0, 0, .125);">
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
                    <div class="row serc">
                        <div class="col-6  text-left">
                            <p class="font-weight-bold pt-3 text-left">Availability </p>
                        </div>
                        <div class="col-6">
                            <h5 class="font-weight-bold  text-right">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
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
                            <li><input type="checkbox" name="" id=""> <label for="">Available puppy</label></li>
                            <li><input type="checkbox" name="" id=""> <label for="">Planned litter</label></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="facet-filter-associates">

        <div class="row serc">
            <div class="col-6  text-left">
                <h3 class="title-name text-left">Breed</h3>
            </div>
            <div class="col-6">
                <h3 class="font-weight-bold  text-right">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseBreeds"
                        aria-expanded="true" aria-controls="collapseBreeds">
                        <i class='fas fa-angle-down'></i>
                    </button>
                </h3>
            </div>
        </div>
        <div id="collapseBreeds" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-bdy">


                <div class="justify-content-center ">
                    <div class="search-sidebar-box-grid-pagee">
                        <input type="text" class="search-sidebar-input search-sidebar-boxss"
                            placeholder="Find a breed">
                        <div class="search-sidebar-icon"><a href="" type="submit"><img
                                    src="{{ asset('frontend/images/search.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="single-widget gender">
                    <div class="single-widget category scrollmenu overflow-auto" id="chatbox">
                        <h5 class=""></h5>
                        <ul>
                            @forelse ($getCat as $item)
                                <li class="media pb-2 active">
                                    <a>

                                        <input class="mr-2 category_id" type="checkbox" name="category_id[]"
                                            id="{{ $item['id'] }}" value="{{ $item['id'] }}"
                                            style="margin-left: 1px;"> {{ $item['name'] }} </label>
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

    <div class="facet-filter-associates">

        <div class="row serc">
            <div class="col-6  text-left">
                {{-- <p class="font-weight-bold pt-3 text-left">Availabilty </p> --}}
                <h3 class="title-name text-left">Groups</h3>
            </div>
            <div class="col-6">
                <h3 class="font-weight-bold  text-right">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseGroup"
                        aria-expanded="true" aria-controls="collapseGroup">
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
                        <li>
                            <input type="checkbox" name="" id="">
                            <label for=""> Family dogs</label>
                        </li>
                        <li>
                            <input type="checkbox" name="" id="">
                            <label for="">Cold weather</label>
                        </li>
                        <li>
                            <input type="checkbox" name="" id="">
                            <label for="">Guard dogs</label>
                        </li>
                        <li>
                            <input type="checkbox" name="" id="">
                            <label for="">Toy breeds</label>
                        </li>
                        <li>
                            <input type="checkbox" name="" id="">
                            <label for="">Allergy friendly</label>
                        </li>
                        <li>
                            <input type="checkbox" name="" id="">
                            <label for="">Apartment
                                dogs</label>
                        </li>

                    </ul>
                </div>
            </div>
        </div>


    </div>


    <div class="facet-filter-associates">

        <div class="row serc">
            <div class="col-6  text-left">
                <h3 class="title-name text-left">Age</h3>
            </div>
            <div class="col-6">
                <h3 class="font-weight-bold  text-right">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseAge"
                        aria-expanded="true" aria-controls="collapseAge">
                        <i class='fas fa-angle-down'></i>
                    </button>
                </h3>
            </div>
        </div>
        <div id="collapseAge" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-bdy">
                <div class="single-widget gender">
                    <ul>
                        <li>
                            <input type="checkbox" name="" id="">
                            <label for="">Up to 12 Weeks</label>
                        </li>
                        <li>
                            <input type="checkbox" name="" id="">
                            <label for="">12 to 24 Weeks</label>
                        </li>
                        <li>
                            <input type="checkbox" name="" id="">
                            <label for="">24 to 48 Weeks</label>
                        </li>
                        <li>
                            <input type="checkbox" name="" id="">
                            <label for="">Older than 48 Weeks</label>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="facet-filter-associates">
		
		<div class="row" >
			<div class="col-6  text-left">
				<h3 class="title-name text-left">Availability</h3>
			</div>
			<div class="col-6">
				<h3 class="font-weight-bold  text-right">
					<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
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
		
		
	</div> --}}
    {{-- Breeds  --}}
    {{-- <div class="facet-filter-associates">
		
		<div class="row" >
			<div class="col-6  text-left">
				<h3 class="title-name text-left">Breed</h3>
			</div>
			<div class="col-6">
				<h3 class="font-weight-bold  text-right">
					<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseBreeds" aria-expanded="true" aria-controls="collapseBreeds">
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
		
		
	</div> --}}

    {{-- Groups --}}

    {{-- <div class="facet-filter-associates">
		
		<div class="row" >
			<div class="col-6  text-left">
				<h3 class="title-name text-left">Groups</h3>
			</div>
			<div class="col-6">
				<h3 class="font-weight-bold  text-right">
					<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseGroup" aria-expanded="true" aria-controls="collapseGroup">
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
		
		
	</div> --}}
    {{-- Age --}}
    {{-- <div class="facet-filter-associates">
		
		<div class="row" >
			<div class="col-6  text-left">
				<h3 class="title-name text-left">Age</h3>
			</div>
			<div class="col-6">
				<h3 class="font-weight-bold  text-right">
					<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseAge" aria-expanded="true" aria-controls="collapseAge">
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
		
		</div>
		
		
	</div> --}}

    {{-- Gender --}}
    {{-- <div class="facet-filter-associates">
		
		<div class="row" >
			<div class="col-6  text-left">
				<h3 class="title-name text-left">Gender</h3>
			</div>
			<div class="col-6">
				<h3 class="font-weight-bold  text-right">
					<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseGender" aria-expanded="true" aria-controls="collapseGender">
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
		
		
	</div> --}}



</div>
