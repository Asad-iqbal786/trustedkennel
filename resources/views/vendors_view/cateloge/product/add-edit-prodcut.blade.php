@extends('layouts.admin_app')

@section('main-content')

    <div class="row">

        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">

                <div class="card-body">
                    <h4 class="card-title">{{ $title }}</h4>

                    <form class="forms-sample" method="post"
                    
                        @if (!empty($proData['id']))
                        
                        action="{{ route('VendoraddEditProduct', $proData['id']) }}"
                        
                        
                        @else
                        
                        action="{{ route('VendoraddEditProduct') }}"
                        
                        @endif


                        method="post" enctype="multipart/form-data">
                        @csrf



                        @if (Session::has('error_message'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                {{ Session::get('error_message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        @if (Session::has('success_message'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                {{ Session::get('success_message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="row">

                            <div class="col-4">
                                <div class="form-group">
                                    <label for="product_name"> NAME</label>
                                    <input type="text" class="form-control" name="product_name"
                                        id="product_name"
                                        @if (!empty($proData['product_name'])) value="{{ $proData['product_name'] }}" @else value="{{ old('product_name') }}" @endif
                                        placeholder="product_name" value="{{ old('product_name') }}">
                                </div>
                            </div>
                            <div class="col-4" style="height: 45px;">
                                <div class="form-group">
                                    <label for="produt_type_id">PRODUCT TYPE</label>
                                    <select class="form-control js-example-basic-single w-100" id="produt_type_id"
                                        name="produt_type_id">
                                        <option value="0">--Select Product Type--</option>
                                        @foreach ($getProductType as $proType)
                                            <option value="{{ $proType['id'] }}"
                                                @if (!empty($proData['produt_type_id']) && $proData['produt_type_id'] == $proType['id']) selected @endif>
                                                {{ $proType['name'] }}
                                            </option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="category_id">BREEDS</label>
                                    <select class="form-control js-example-basic-single w-100" id="category_id"
                                        name="category_id">
                                        <option value="0">--Select Category--</option>
                                        @foreach ($getCategory as $category)
                                            <option value="{{ $category['id'] }}"
                                                @if (!empty($proData['category_id']) && $proData['category_id'] == $category['id']) selected @endif>{{ $category['name'] }}
                                            </option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="date_of_birth">DATE OF BIRTH</label>
                                    <input type="date" class="form-control" name="date_of_birth" id="date_of_birth"
                                        @if (!empty($proData['date_of_birth'])) value="{{ $proData['date_of_birth'] }}" @else value="{{ old('dam_registration_number') }}" @endif
                                        value="{{ old('date_of_birth') }}" placeholder="date_of_birth">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>GENDER</label>
                                    <select id="gender" class="form-control" name="gender" style="width: 100%;">
                                        <option value="Male"@if (!empty($proData['gender']) && $proData['gender'] == 'Male') selected @endif>Male
                                        </option>
                                        <option value="Female"@if (!empty($proData['gender']) && $proData['gender'] == 'Female') selected @endif>Female
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>PRICE</label>
                                    <input type="text" class="form-control"  name="price"
                                        id="price"
                                        @if (!empty($proData['price'])) value="{{ $proData['price'] }}" @else value="{{ old('price') }}" @endif
                                        value="{{ old('price') }}" placeholder="price">
                                </div>
                            </div>
                            <div class="col-6 "  id="reservation" >
                                <div class="form-group">
                                    <label> Reservation Charges % </label>
                                    <input type="text" class="form-control"name="reservation"
                                       
                                        @if (!empty($proData['reservation'])) value="{{ $proData['reservation'] }}" @else value="{{ old('reservation') }}" @endif
                                        value="{{ old('reservation') }}" placeholder="Reservation Charges....">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>SHIPPING FEE</label>
                                    <input type="text" class="form-control"name="shipping_fee"
                                        id="shipping_fee"
                                        @if (!empty($proData['shipping_fee'])) value="{{ $proData['shipping_fee'] }}" @else value="{{ old('shipping_fee') }}" @endif
                                        value="{{ old('shipping_fee') }}" placeholder="shipping_fee">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="description">DESCRIPTION</label>
                                    <textarea class="form-control" id="exampleTextarea1" name="description" rows="4"></textarea>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="product_images">UPLOAD PICTURE (UP TO 5 INCLUDE)</label>
                                    <input type="file" class="form-control"  name="product_images"
                                        id="product_images" placeholder="product_images">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="sire_name"> SIRE NAME</label>
                                    <input type="text" class="form-control" name="sire_name"   id="sire_name"
                                        @if (!empty($proData['sire_name'])) value="{{ $proData['sire_name'] }}" @else value="{{ old('sire_name') }}" @endif
                                        placeholder="sire_name" value="{{ old('sire_name') }}">
                                </div>
                            </div>
                            <div class="col-4" style="height: 45px;">
                                <div class="form-group">
                                    <label for="produt_type_id">SIRE TITLE</label>
                                    <input type="text" class="form-control" name="sire_title"  id="sire_title"
                                        @if (!empty($proData['sire_title'])) value="{{ $proData['sire_title'] }}" @else value="{{ old('sire_title') }}" @endif
                                        placeholder="sire_title" value="{{ old('sire_title') }}">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="sire_registration">SIRE REGISTRATION</label>
                                    <input type="text" class="form-control" name="sire_registration"
                                        id="sire_registration"
                                        @if (!empty($proData['sire_registration'])) value="{{ $proData['sire_registration'] }}" @else value="{{ old('sire_registration') }}" @endif
                                        placeholder="sire_registration" value="{{ old('sire_registration') }}">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="pedigree_link"> PEDIGREE LINK</label>
                                    <input type="text" class="form-control" name="pedigree_link" id="pedigree_link"
                                        @if (!empty($proData['pedigree_link'])) value="{{ $proData['pedigree_link'] }}" @else value="{{ old('pedigree_link') }}" @endif
                                        value="{{ old('pedigree_link') }}" placeholder="pedigree_link">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>SIRE HEIGHT</label>
                                    <input type="text" class="form-control" name="sire_height" id="sire_height"
                                        @if (!empty($proData['sire_height'])) value="{{ $proData['sire_height'] }}" @else value="{{ old('sire_height') }}" @endif
                                        value="{{ old('sire_height') }}" placeholder="sire_height">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>WEIGHT</label>
                                    <input type="text" class="form-control"  name="sire_weight"
                                        id="sire_weight"
                                        @if (!empty($proData['sire_weight'])) value="{{ $proData['sire_weight'] }}" @else value="{{ old('sire_weight') }}" @endif
                                        value="{{ old('sire_weight') }}" placeholder="sire_weight">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label>HEALTH TEST</label>
                                    <input type="text" class="form-control"  name="sire_health_tests_conducted" id="sire_health_tests_conducted"
                                        @if (!empty($proData['sire_health_tests_conducted'])) value="{{ $proData['sire_health_tests_conducted'] }}" @else value="{{ old('sire_health_tests_conducted') }}" @endif
                                        value="{{ old('sire_health_tests_conducted') }}"
                                        placeholder="sire_health_tests_conducted">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="sire_image">UPLOAD PICTURE (UP TO 5 INCLUDE)</label>
                                    <input type="file" class="form-control" name="sire_image"
                                        id="sire_image" placeholder="sire_image">
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-4">
                                <div class="form-group">
                                    <label for="dam_name"> DAME NAME</label>
                                    <input type="text" class="form-control" name="dam_name" id="dam_name"
                                        @if (!empty($proData['dam_name'])) value="{{ $proData['dam_name'] }}" @else value="{{ old('dam_name') }}" @endif
                                        placeholder="dam_name" value="{{ old('dam_name') }}">
                                </div>
                            </div>
                            <div class="col-4" style="height: 45px;">
                                <div class="form-group">
                                    <label for="dam_title">DAME TITLE</label>
                                    <input type="text" class="form-control" name="dam_title" id="dam_title"
                                        @if (!empty($proData['dam_title'])) value="{{ $proData['dam_title'] }}" @else value="{{ old('dam_title') }}" @endif
                                        placeholder="dam_title" value="{{ old('dam_title') }}">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="dam_registration">DAME REGISTRATION</label>
                                    <input type="text" class="form-control" name="dam_registration"  id="dam_registration"
                                        @if (!empty($proData['dam_registration'])) value="{{ $proData['dam_registration'] }}" @else value="{{ old('dam_registration') }}" @endif
                                        placeholder="dam_registration" value="{{ old('dam_registration') }}">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="dam_link"> DAM LINK</label>
                                    <input type="text" class="form-control" name="dam_link" id="dam_link"
                                        @if (!empty($proData['dam_link'])) value="{{ $proData['dam_link'] }}" @else value="{{ old('dam_link') }}" @endif
                                        value="{{ old('dam_link') }}" placeholder="dam_link">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>DAM HEIGHT</label>
                                    <input type="text" class="form-control" name="dam_height" id="dam_height"
                                        @if (!empty($proData['dam_height'])) value="{{ $proData['dam_height'] }}" @else value="{{ old('dam_height') }}" @endif
                                        value="{{ old('dam_height') }}" placeholder="dam_height">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>DAM WEIGHT</label>
                                    <input type="text" class="form-control" name="dam_weight"
                                        id="dam_weight"
                                        @if (!empty($proData['dam_weight'])) value="{{ $proData['dam_weight'] }}" @else value="{{ old('dam_weight') }}" @endif
                                        value="{{ old('dam_weight') }}" placeholder="dam_weight">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label>DAM HELTH TEST</label>
                                    <input type="text" class="form-control" 
                                        name="dam_health_tests_conducted" id="dam_health_tests_conducted"
                                        @if (!empty($proData['dam_health_tests_conducted'])) value="{{ $proData['dam_health_tests_conducted'] }}" @else value="{{ old('dam_health_tests_conducted') }}" @endif
                                        value="{{ old('dam_health_tests_conducted') }}"
                                        placeholder="dam_health_tests_conducted">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label for="dam_image">UPLOAD PICTURE (UP TO 5 INCLUDE)</label>
                                    <input type="file" class="form-control"  name="dam_image"
                                        id="dam_image" placeholder="dam_image">
                                </div>
                            </div>
                        </div>
                        @if (!empty($proData['dam_health_tests_conducted']))
                        
                        <a href="{{route('vendorDashboard')}}" class="btn btn-light">Cancel</a>
                        
                        @else 
                        
                        @endif
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    
                    </form>
                </div>

            </div>
        </div>

    </div>



@endsection





@push('scripts')
    <script>
        // / product type
        $("#reservation").hide();
        //order status
        $("#produt_type_id").on("change", function() {
            if (this.value == 2) {
                $("#reservation").show();
            } else {
                $("#reservation").hide();
            }
        });
    </script>
@endpush
