@extends('layouts.admin_app')

@section('main-content')

    <div class="row">

        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">

                <div class="card-body">
                    <h4 class="card-title">{{ $title }}</h4>

                    @if (Auth::guard('admin')->user()->type == 'superadmin')
                        <form class="forms-sample" method="post"
                            @if (empty($proData['id'])) action="{{ route('addEditProduct') }}"
                @else
                    action="{{ route('addEditProduct', $proData['id']) }}" @endif
                            method="post" enctype="multipart/form-data">
                            @csrf
                        @else
                            <form class="forms-sample" method="post"
                                @if (empty($proData['id'])) action="{{ route('VendoraddEditProduct') }}"
                @else
                    action="{{ route('VendoraddEditProduct', $proData['id']) }}" @endif
                                method="post" enctype="multipart/form-data">
                                @csrf
                    @endif



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
                                <label for="sire_name">Sire Name</label>
                                <input type="text" class="form-control" name="sire_name" required="" id="sire_name"
                                    @if (!empty($proData['sire_name'])) value="{{ $proData['sire_name'] }}" @else value="{{ old('sire_name') }}" @endif
                                    placeholder="sire_name" value="{{ old('sire_name') }}">
                            </div>
                        </div>
                        <div class="col-4" style="height: 45px;">
                            <div class="form-group">
                                <label for="produt_type_id">Product Type</label>
                                <select class="form-control js-example-basic-single w-100" id="produt_type_id"
                                    name="produt_type_id">
                                    <option value="0">--Select Product Type--</option>
                                    @foreach ($getProductType as $proType)
                                        <option value="{{ $proType['name'] }}"
                                            @if (!empty($proData['produt_type_id']) && $proData['produt_type_id'] == $proType['id']) selected @endif>
                                            {{ $proType['name'] }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="category_id">Category</label>
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
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label>Price</label>
                                <input type="text" class="form-control" required="" name="puppy_price"
                                    id="puppy_price"
                                    @if (!empty($proData['puppy_price'])) value="{{ $proData['puppy_price'] }}" @else value="{{ old('puppy_price') }}" @endif
                                    value="{{ old('puppy_price') }}" placeholder="puppy_price">
                            </div>
                        </div>
                        <div class="col-4 " id="reservation">
                            <div class="form-group">
                                <label> Reservation Charges % </label>
                                <input type="text" class="form-control" required="" name="reservation"
                                    id="reservation"
                                    @if (!empty($proData['reservation'])) value="{{ $proData['reservation'] }}" @else value="{{ old('reservation') }}" @endif
                                    value="{{ old('reservation') }}" placeholder="Reservation Charges....">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="dam_health_tests_conducted">Dam Health Tests Conducted</label>
                                <input type="text" class="form-control" required=""name="dam_health_tests_conducted"
                                    id="dam_health_tests_conducted"
                                    @if (!empty($proData['dam_health_tests_conducted'])) value="{{ $proData['dam_health_tests_conducted'] }}" @else value="{{ old('dam_health_tests_conducted') }}" @endif
                                    value="{{ old('dam_health_tests_conducted') }}"
                                    placeholder="dam_health_tests_conducted">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="sire_registration">Sire Registration</label>
                                <input type="number" class="form-control" required="" name="sire_registration"
                                    id="sire_registration"
                                    @if (!empty($proData['sire_registration'])) value="{{ $proData['sire_registration'] }}" @else value="{{ old('sire_registration') }}" @endif
                                    value="{{ old('sire_registration') }}" placeholder="sire_registration">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="sire_pedigree_link">Sire Pedigree Link</label>
                                <input type="text" class="form-control" required="" name="sire_pedigree_link"
                                    id="sire_pedigree_link"
                                    @if (!empty($proData['sire_pedigree_link'])) value="{{ $proData['sire_pedigree_link'] }}" @else value="{{ old('sire_pedigree_link') }}" @endif
                                    value="{{ old('sire_pedigree_link') }}" placeholder="Pleae Enter your url">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Sire Weight</label>
                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="sire_weight"
                                                id="Kg" value="Kg" checked="">
                                            Kg
                                            <i class="input-helper"></i></label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="sire_weight"
                                                id="Lbs" value="Lbs">
                                            Lbs
                                            <i class="input-helper"></i></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="sire_weight_measure"> Sire Weight Measurements</label>
                                <input type="number" class="form-control" required="" name="sire_weight_measure"
                                    id="sire_weight_measure"
                                    @if (!empty($proData['sire_weight_measure'])) value="{{ $proData['sire_weight_measure'] }}" @else value="{{ old('sire_weight_measure') }}" @endif
                                    value="{{ old('sire_weight_measure') }}" placeholder="sire_weight_measure">
                            </div>
                        </div>

                        <div class="col-6">

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Sire Height</label>
                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="sire_height"
                                                id="Cm" value="Cm" checked="">
                                            Cm
                                            <i class="input-helper"></i></label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="sire_height"
                                                id="Inches" value="Inches">
                                            Inches
                                            <i class="input-helper"></i></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="sire_height_measure"> Sire Height Measurements</label>
                                <input type="number" class="form-control" required="" name="sire_height_measure"
                                    id="sire_height_measure"
                                    @if (!empty($proData['sire_height_measure'])) value="{{ $proData['sire_height_measure'] }}" @else value="{{ old('sire_height_measure') }}" @endif
                                    value="{{ old('sire_height_measure') }}" placeholder="sire_height_measure">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="sire_health_tests">Sire Health Tests</label>
                                <input type="text" class="form-control" required="" name="sire_health_tests"
                                    id="sire_health_tests"
                                    @if (!empty($proData['sire_health_tests'])) value="{{ $proData['sire_health_tests'] }}" @else value="{{ old('sire_health_tests') }}" @endif
                                    value="{{ old('sire_health_tests') }}" placeholder="sire_health_tests">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>Gender</label>
                                <select id="gender" class="form-control" name="gender" style="width: 100%;">
                                    <option value="Male"@if (!empty($proData['gender']) && $proData['gender'] == 'Male') selected @endif>Male
                                    </option>
                                    <option value="Female"@if (!empty($proData['gender']) && $proData['gender'] == 'Female') selected @endif>Female
                                    </option>
                                </select>
                            </div>
                        </div>


                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="date_of_birth">Date of Birth</label>
                                <input type="date" class="form-control" name="date_of_birth" id="date_of_birth"
                                    @if (!empty($proData['date_of_birth'])) value="{{ $proData['date_of_birth'] }}" @else value="{{ old('dam_registration_number') }}" @endif
                                    value="{{ old('date_of_birth') }}" placeholder="date_of_birth">
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="dam_name_with_titles">Dam Name With Titles</label>
                                <input type="text" class="form-control" required="" name="dam_name_with_titles"
                                    id="dam_name_with_titles"
                                    @if (!empty($proData['dam_name_with_titles'])) value="{{ $proData['dam_name_with_titles'] }}" @else value="{{ old('dam_name_with_titles') }}" @endif
                                    value="{{ old('dam_name_with_titles') }}" placeholder="dam_name_with_titles">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="dam_registration_number">Dam Registration Number</label>
                                <input type="number" class="form-control" name="dam_registration_number"
                                    id="dam_registration_number"
                                    @if (!empty($proData['dam_registration_number'])) value="{{ $proData['dam_registration_number'] }}" @else value="{{ old('dam_registration_number') }}" @endif
                                    value="{{ old('dam_registration_number') }}" placeholder="dam_registration_number">
                            </div>

                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="dam_pedigree_link">Dam Pedigree Link</label>
                                <input type="text" class="form-control" required="" name="dam_pedigree_link"
                                    id="dam_pedigree_link"
                                    @if (!empty($proData['dam_pedigree_link'])) value="{{ $proData['dam_pedigree_link'] }}" @else value="{{ old('dam_pedigree_link') }}" @endif
                                    value="{{ old('dam_pedigree_link') }}" placeholder="Plear enter your URl...">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Dam Weight</label>
                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="dam_weight"
                                                id="Kg" value="Kg" checked="">
                                            Kg
                                            <i class="input-helper"></i></label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="dam_weight"
                                                id="Lbs" value="Lbs">
                                            Lbs
                                            <i class="input-helper"></i></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="dam_weight_measure"> Dam Weight Measurements</label>
                                <input type="number" class="form-control" required="" name="dam_weight_measure"
                                    id="dam_weight_measure"
                                    @if (!empty($proData['dam_weight_measure'])) value="{{ $proData['dam_weight_measure'] }}" @else value="{{ old('dam_weight_measure') }}" @endif
                                    value="{{ old('dam_weight_measure') }}" placeholder="dam_weight_measure">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Dam Height</label>
                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="dam_height"
                                                id="Inches" value="Inches" checked="">
                                            Inches
                                            <i class="input-helper"></i></label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="dam_height"
                                                id="Cm" value="Cm">
                                            Cm
                                            <i class="input-helper"></i></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="dam_height_measure"> Dam Weight Measurements</label>
                                <input type="number" class="form-control" required="" name="dam_height_measure"
                                    id="dam_height_measure"
                                    @if (!empty($proData['dam_height_measure'])) value="{{ $proData['dam_height_measure'] }}" @else value="{{ old('dam_height_measure') }}" @endif
                                    value="{{ old('dam_height_measure') }}" placeholder="dam_height_measure">
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="image">Dog Image</label>
                                <input type="file" class="form-control" name="image"value="">
                                {{-- {{asset('storage/admin/images/admin_photos/product_medium/'.$pro['image'])}} --}}
                                @if (!empty($proData['image']))
                                    {{-- <a href="{{ url('storage/admin/images/admin_photos/product_small/' . $proData['image']['hfh']) }}"
                                        target="blank">View old Image</a>
                                    <input type="hidden" name="image" id="image"
                                        value="{{ url('storage/admin/images/admin_photos/product_small/' . $proData['image']) }}"> --}}
                                @endif
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="exampleTextarea1" name="description" rows="4"></textarea>
                            </div>
                        </div>

                    </div>



                    <button type="submit" class="btn btn-primary mr-2">Submit</button>

                    </form>
                </div>

            </div>
        </div>





    </div>



@endsection





@push('scripts')
    <script>
        /// product type
        $("#reservation").hide();
        //order status
        $("#produt_type_id").on("change", function() {
            if (this.value == "Planned Litter") {
                $("#reservation").show();
            } else {
                $("#reservation").hide();
            }
        });
    </script>
@endpush
