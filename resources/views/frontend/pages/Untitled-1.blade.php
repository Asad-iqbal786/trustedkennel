<div class="card text-center single-product" >
    <div class="card-header">

        <p class="card-title">{{$pro['vendors']['shop_name']}}</p>
      
    </div>
    <div class="card-body">
        <a href="{{route('PuppyDetails',$pro['slug'])}}" target="_blank">
            <img class="default-img" src="{{asset('storage/admin/images/admin_photos/product/'.$pro['image'])}}" alt="#">
        </a>
      
      <p class="card-text"><a href="{{route('PuppyDetails',$pro['slug'])}}" target="_blank">Puppy Name :{{$pro['sire_name']}}</a></p>
      <a href="{{route('PuppyDetails',$pro['slug'])}}" class="badge badge-warning">Adopt</a>
      <p class="age">Date of birth :14-5- 2022</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>

    </div>
    {{-- <div class="card-footer text-muted">
        <div class="card__details">
            <p class="name" data-cy="puppy-card-name">
                {{$pro['vendors']['shop_name']}}
            </p>
                <p class="breed"><a href="{{route('PuppyDetails',$pro['slug'])}}" target="_blank">Puppy Name :{{$pro['sire_name']}}</a></p>
                <p class="age">Date of birth :14-5- 2022</p>
        </div>
    </div> --}}
</div>








<div class="single-product">
    <div class="product-img">
        <a href="{{route('PuppyDetails',$pro['slug'])}}" target="_blank">
            <img class="default-img" src="{{asset('storage/admin/images/admin_photos/product/'.$pro['image'])}}" alt="#">
            <img class="hover-img" src="{{asset('storage/admin/images/admin_photos/product/'.$pro['image'])}}" alt="#">
        </a>
        <div class="button-head">
            <div class="product-action">
                <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
            </div>
            <div class="product-action-2">
                <a title="Add to cart" href="{{route('PuppyDetails',$pro['slug'])}}">Adopt</a>
            </div>
        </div>
    </div>
    <div class="card__details">
        <p class="name" data-cy="puppy-card-name">
            Alex
        </p>
            <p class="breed"><a href="{{route('PuppyDetails',$pro['slug'])}}" target="_blank">Puppy Name :{{$pro['sire_name']}}</a></p>
            <p class="age">Date of birth :14-5- 2022</p>
    </div>

</div>






<div class="card accordion mt-3" id="accordionExample" style="">
    <div class="card">
        <div class="card-header" id="category">
        
            <a href="" class="" type="button" data-toggle="collapse" data-target="#collapseCategoires" aria-expanded="true" aria-controls="collapseCategoires">
            Breeds
            </a>
        
        </div>
    
        <div id="collapseCategoires" class="collapse show" aria-labelledby="category" data-parent="#accordionExample">
        <div class="card-body">
            <div class="single-widget search">
                <div class="form">
                    <input type="email" placeholder="Search Here...">
                    <a class="button" href="#"><i class="fa fa-search"></i></a>
                </div>
            </div>
            <div class="single-widget category scrollmenu">
                <h5 class=""></h5>
                <ul>
                    @forelse ($getCat as $item)
                    <li class="media pb-2 active">
                        <a href="">
                            <img src="{{asset('storage/admin/images/admin_photos/category/'.$item['image'])}}" style="width: 50px;" />

                            <input  class="mr-2 category_id" type="checkbox" name="category_id[]" id="{{$item['id']}}" value="{{$item['id']}}"> {{$item['name']}} </label>
                        </a>
                    </li>
                    @empty
                    @endforelse
                </ul>
            </div>
        </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="gender">
            <a href="" class="" type="button" data-toggle="collapse" data-target="#collapseGender" aria-expanded="true" aria-controls="collapseGender">
                Gender
            </a>
        
        </div>
        <div id="collapseGender" class="collapse" aria-labelledby="gender" data-parent="#accordionExample">
        <div class="card-body">
            <div class="single-widget gender">
                <h5 class="">Gender</h5>
                <ul>
                    <li><input type="checkbox" name="" id=""> <label for="">Male</label></li>
                    <li><input type="checkbox" name="" id=""> <label for="">Femail</label></li>
                </ul>
            </div>
        </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="collection">
            <a href="" class="" type="button" data-toggle="collapse" data-target="#collapseCollection" aria-expanded="true" aria-controls="collapseCollection">
                Collection
            </a>
        
        </div>
        <div id="collapseCollection" class="collapse" aria-labelledby="collection" data-parent="#accordionExample">
        <div class="card-body">
            <div class="single-widget gender">
                <h5 class="">Collections</h5>
                <ul>
                    <li><input type="checkbox" name="" id=""> <label for="">Top Active Dog Breeds</label></li>
                    <li><input type="checkbox" name="" id=""> <label for="">Best Apartment Dogs</label></li>
                    <li><input type="checkbox" name="" id=""> <label for="">Best Family Dogs</label></li>
                    <li><input type="checkbox" name="" id=""> <label for="">Teacup Puppies</label></li>
                    <li><input type="checkbox" name="" id=""> <label for="">Allergy Friendly Dogs</label></li>
                    <li><input type="checkbox" name="" id=""> <label for="">Doodle Puppies</label></li>
                </ul>
            </div>
        </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="Age">
            <a href="" class="" type="button" data-toggle="collapse" data-target="#collapseAge" aria-expanded="true" aria-controls="collapseAge">
                Age
            </a>
            <div class=""></div>
        </div>
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
    </div>
</div>
