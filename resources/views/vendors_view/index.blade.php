@extends('layouts.admin_app')

@section('main-content')
    @if ($stripeAccount->status === 0)
        <div class="alert alert-warning d-flex justify-content-between">
            <span>
                Your account dont have bank details please click here to add
            </span>
            <a href="{{ route('addBankAccount') }}" class="btn btn-warning btn-sm">Add</a>
        </div>
    @endif
    <?php
    
    $month = [];
    $count = 0;
    while ($count <= 4) {
        $month[] = date('M', strtotime('-' . $count . 'month'));
        $count++;
    }
    
    $totalSale = [['y' => $userCount[4], 'label' => $month[4]], ['y' => $userCount[3], 'label' => $month[3]], ['y' => $userCount[2], 'label' => $month[2]], ['y' => $userCount[1], 'label' => $month[1]], ['y' => $userCount[0], 'label' => $month[0]]];
    
    //  echo "<pre>"; print_r($userCount); die;
    
    ?>
    <?php
    $monthVisits = [];
    $count = 0;
    while ($count <= 4) {
        $monthVisits[] = date('M', strtotime('-' . $count . 'monthVisits'));
        $count++;
    }
    $totalVisits = [['y' => $userCount[4], 'label' => $monthVisits[4]], ['y' => $userCount[3], 'label' => $monthVisits[3]], ['y' => $userCount[2], 'label' => $monthVisits[2]], ['y' => $userCount[1], 'label' => $monthVisits[1]], ['y' => $userCount[0], 'label' => $monthVisits[0]]];
    
    ?>


    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Welcome
                        {{ Auth::guard('vendor')->user()->first_name }}
                    </h3>
                    <h6 class="font-weight-normal mb-0">You have <span class="text-primary">
                        <a href="{{ route('vendorApplication') }}"> {{ $numberOfApplication }} New Applications</a></span>
                    </h6>

                </div>
                <div class="col-12 col-xl-4">
                    <div class="justify-content-end d-flex">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-5 pb-5">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-4  col-xl-4 grid-margin stretch-card">
                <div class="card tale-bg mb-xl-n5">
                    <div class="card-people mt-auto">
                        <img src="{{ asset('admin/images/dashboard/people.svg') }}" alt="people">
                        {{-- <div class="weather-info">
                            <div class="d-flex">
                                <div>
                                    <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>
                                </div>
                                <div class="ml-2">
                                    <h4 class="location font-weight-normal">Bangalore</h4>
                                    <h6 class="font-weight-normal">India</h6>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4  col-xl-4">
                <div class="card tale-bg pl-3 pt-3">
                    {{-- <div class="card-body">
                        <h4 class="card-title">Line chart</h4>
                        <canvas id="lineChart"></canvas>
                      </div> --}}
                    <div id="chartContainer" style="height: 370px; width: 100%;" class=""></div>

                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4  col-xl-4">
                <div class="card tale-bg pl-3 pt-3">
                    {{-- <div class="card-body">
                        <h4 class="card-title">Line chart</h4>
                        <canvas id="lineChart"></canvas>
                      </div> --}}
                    <div id="visits" style="height: 370px; width: 100%;"></div>

                </div>
            </div>
        </div>
        <div class="row justify-content-center pt-5">
            <div class="col-12 col-md-6 col-lg-6 grid-margin stretch-card">
                <div class="card tale-bg">
                    <div class="card-people">
                        <h2 class="text-center">Reservations </h2>
                        <div class="row pt-4  font-weight-bold pt-5 ">
                            <div class="col-6 text-center order_sum">
                                <h6> {{ $avail }}</h6>
                                <h2>Available Dogs</h2>
                            </div>
                            <div class="col-6 text-center order_sum">
                                <h2>{{ $plan }}</h2>
                                <h2>Planned Litter</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6 grid-margin stretch-card">
                <div class="card tale-bg">
                    <div class="card-people">
                        <h2 class="text-center">Balance </h2>
                        <div class="row pt-4 font-weight-bold pt-5 ">
                            <div class="col-6 text-center order_sum">
                                <h2> 1200 </h2>
                                <h2> Available</h2>
                                <div class="order_cruncy">
                                    $
                                </div>
                            </div>
                            <div class="col-6 text-center order_sum">
                                <h2> 2700</h2>
                                <h2>Total</h2>
                                <div class="order_cruncy">
                                    $
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title mb-0">Posts Pending Approval</p>
                    <div class="table-responsive">
                        <table id="example" class="display expandable-table dataTable no-footer" style="width: 100%;"
                            role="grid">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> IMG </th>
                                    <th>Puppy</th>
                                    <th>Breed</th>
                                    <th>Post Type</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($getProduct as $key =>  $pro)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>
                                            <img class="default-img"
                                                src="{{ asset('admin/images/admin_photos/product/product_images/small/' . $pro['product_images']) }}"
                                                alt="#" style="width: 50px">
                                        </td>
                                        <td>{{ $pro['sire_name'] }}</td>
                                        <td>{{ $pro['category']['name'] }}</td>
                                        <td>
                                            @if ($pro['produt_type_id'] == 1)
                                                Available Puppy
                                            @else
                                                Planned Litter
                                            @endif
                                        </td>
                                        <td>
                                            <p class="badge badge-danger"> Pending </p>
                                        </td>
                                        <td class="font-weight-medium">

                                            <a href="{{ route('detaileshow', $pro['id']) }}" class="pr-2">
                                                <img src="{{ asset('admin/icons/View.png') }}" alt=""
                                                    style="width:20px;">
                                            </a>
                                         
                                            <a href="{{ route('VendoraddEditProduct', $pro['id']) }}" class="pr-2">
                                                <img src="{{ asset('admin/icons/Edit.png') }}" alt=""
                                                    style="width:20px;">
                                            </a>
                                          
                                            <a href="{{ route('VendorproductDestroy', $pro['id']) }}" class="pr-2" onclick="return confirm('Are you sure to delete?')">
                                                <img src="{{ asset('admin/icons/Delete.png') }}" alt=""
                                                    style="width:20px;">
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        @forelse ($getProduct as $product)
            <div class="modal fade" id="exampleModal-{{ $product['id'] }}" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">

                        <div class="modal-body">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Puppy Name : {{ $product['sire_name'] }}</h4>
                                    <div class="table-responsive pt-3">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        admin_id
                                                    </th>
                                                    <th>
                                                        Name
                                                    </th>
                                                    <th>
                                                        admin_id
                                                    </th>
                                                    <th>
                                                        Name
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        Breeds
                                                    </td>
                                                    <td>
                                                        {{ $product['category']['name'] }}
                                                    </td>
                                                    <td>
                                                        Puppy Name
                                                    </td>
                                                    <td>
                                                        {{ $product['product_name'] }}
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        sire_registration
                                                    </td>
                                                    <td>
                                                        {{ $product['sire_registration'] }}
                                                    </td>
                                                    <td>
                                                        sire_pedigree_link
                                                    </td>
                                                    <td>
                                                        {{ $product['pedigree_link'] }}
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        Status
                                                    </td>
                                                    <td>
                                                        {{-- @if ($pro['status'] == 1)
                                                            <p class="badge badge-success"> Accept </p>
                                                        @else
                                                            <p class="badge badge-danger"> Reject </p>
                                                        @endif --}}
                                                    </td>

                                                    <td>
                                                        sire_weight
                                                    </td>
                                                    <td>
                                                        {{ $product['sire_weight'] }}
                                                    </td>
                                                </tr>
                                                {{-- @if ($product['status'] == 0)
                                                    <td>
                                                        Reson
                                                    </td>
                                                    <td>
                                                        {{ $product['reason'] }}
                                                    </td>
                                                    <td>
                                                        Reson
                                                    </td>
                                                    <td>
                                                        {{ $product['reason'] }}
                                                    </td>
                                                @endif --}}
                                                <tr>

                                                </tr>

                                                <tr>
                                                    <td>
                                                        sire_height
                                                    </td>
                                                    <td>
                                                        {{ $product['sire_height'] }}
                                                    </td>
                                                    <td>
                                                        sire_height
                                                    </td>
                                                    <td>
                                                        {{ $product['sire_height'] }}
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td>
                                                        dam_name
                                                    </td>
                                                    <td>
                                                        {{ $product['dam_name'] }}
                                                    </td>
                                                    <td>
                                                        dam_registration
                                                    </td>
                                                    <td>
                                                        {{ $product['dam_registration'] }}
                                                    </td>
                                                </tr>



                                                <tr>
                                                    <td>
                                                        dam_pedigree_link
                                                    </td>
                                                    <td>
                                                        {{ $product['dam_link'] }}
                                                    </td>
                                                    <td>
                                                        dam_weight
                                                    </td>
                                                    <td>
                                                        {{ $product['dam_weight'] }}
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td>
                                                        dam_height
                                                    </td>
                                                    <td>
                                                        {{ $product['dam_height'] }}
                                                    </td>
                                                    <td>
                                                        dam_health_tests_conducted
                                                    </td>
                                                    <td>
                                                        {{ $product['dam_health_tests_conducted'] }}
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        @empty
        @endforelse

    </div>
@endsection

@push('styles')
    <style>
        .order_sum h6 {
            font-size: 34px;
            font-weight: 600;

        }

        .order_sum p {
            font-weight: 900;
            font-size: 14px;
            padding-bottom: 11px;
        }

        .order_sum {
            position: relative;
        }

        .card-people .weather-info {
            position: absolute;
            top: -83px;
            right: 24px;
        }

        .order_cruncy {
            position: relative;
            right: 50px;
            bottom: 101px;
        }
    </style>
@endpush

@push('scripts')
    <script src="{{ asset('admin/js/canvasjs.min.js') }}"></script>
    {{-- <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> --}}

    <script>
        window.onload = function() {
            var totalSales = new CanvasJS.Chart("chartContainer", {
                backgroundColor: "#DAE7FF",

                title: {
                    fontWeight: "normal",
                    text: "Orders",
                },
                data: [{
                    type: "line",
                    radius: "90%",
                    dataPoints: <?php echo json_encode($totalSale, JSON_NUMERIC_CHECK); ?>
                }]
            });
            totalSales.render();
            //
            var visits = new CanvasJS.Chart("visits", {
                backgroundColor: "#DAE7FF",
                title: {
                    text: "Customer visits"
                },
                axisY: {
                    // title: "Revenue in USD",

                },
                data: [{
                    type: "line",
                    radius: "90%",
                    dataPoints: <?php echo json_encode($totalVisits, JSON_NUMERIC_CHECK); ?>
                }]
            });

            visits.render();
        }
        //


        /// product type
        $("#product_type_hide").hide();
        //order status
        $("#status").on("change", function() {
            if (this.value == "reject") {
                $("#product_type_hide").show();
            } else {
                $("#product_type_hide").hide();
            }
        });
    </script>
@endpush
