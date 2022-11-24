@extends('layouts.admin_app')

@section('main-content')
    @if($stripeAccount->status === 0)
    <div class="alert alert-warning d-flex justify-content-between">
        <span>
        Your account dont have bank details please click here to add
        </span>
        <a href="{{route('addBankAccount')}}" class="btn btn-warning btn-sm">Add</a>
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
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-6">
                <div id="chartContainer" style="height: 370px; width: 100%;"></div>
            </div>
            <div class="col-6">
                <div id="visits" style="height: 370px; width: 100%;"></div>
            </div>
        </div>


    </div>
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Welcome

                        @if (!empty(Auth::guard('admin')->user()->type == 'Vandor'))
                            {{ Auth::guard('admin')->user()->first_name }}
                        @else
                            {{ Auth::guard('admin')->user()->first_name }}
                        @endif
                    </h3>
                    <h6 class="font-weight-normal mb-0">You have <span class="text-primary"><a
                                href="{{ route('vendorApplication') }}"> {{ $count }} new applications</a></span>
                    </h6>
                </div>
                <div class="col-12 col-xl-4">
                    <div class="justify-content-end d-flex">

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-6 mb-4 stretch-card transparent">
            <div class="card card-tale">
                <div class="card-body">
                    <h2 class="text-center">Reservations </h2>
                    <div class="row pt-4 ">
                        <div class="col-6 text-center">
                            <p>Available Dogs</p>
                            <p>{{$countAvailablePuppy}}</p>
                        </div>
                        <div class="col-6 text-center">
                            <p>Planned Litter</p>
                            <p>{{$countPlanedPuppy}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4 stretch-card transparent">
            <div class="card card-tale">
                <div class="card-body">
                    <h2 class="text-center">Balance </h2>
                    <div class="row pt-4 ">
                        <div class="col-6 text-center">
                            <p>Available </p>
                            <p>{{$orderSum}}</p>
                        </div>
                        <div class="col-6 text-center">
                            <p>Pending </p>
                            <p>orderSum</p>
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
                                        <td>{{ $pro['sire_name'] }}</td>
                                        <td>{{ $pro['category']['name'] }}</td>
                                        <td>{{ $pro['produt_type_id'] }}</td>
                                        <td>
                                            <p class="badge badge-danger"> Reject </p>
                                        </td>


                                        <td class="font-weight-medium">

                                            @if (Auth::guard('admin')->user()->type == 'Vendor')
                                            @else
                                                @if ($pro['status'] == 1)
                                                    <a class="updateProductStatus" id="product-{{ $pro['id'] }}"
                                                        product_id="{{ $pro['id'] }}" href="javascript:(0)">Active</a>
                                                @else
                                                    <a class="updateProductStatus" id="product-{{ $pro['id'] }}"
                                                        product_id="{{ $pro['id'] }}" href="javascript:(0)">Inactive</a>
                                                @endif
                                            @endif
                                            <a href="" target="blank" data-toggle="modal" data-target="#exampleModal-{{ $pro['id'] }}">
                                                <i class="mdi mdi-eye" style="font-size: 25px;"></i>
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
                                    <h4 class="card-title">tProduc Name : {{ $product['sire_name'] }}</h4>
                                    <p class="card-description">
                                        {{-- Add class <code>.table-bordered</code> --}}
                                    </p>


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
                                                        category_id
                                                    </td>
                                                    <td>
                                                        {{ $product['category_id'] }}
                                                    </td>
                                                    <td>
                                                        sire_name
                                                    </td>
                                                    <td>
                                                        {{ $product['sire_name'] }}
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
                                                        {{ $product['sire_pedigree_link'] }}
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        Status
                                                    </td>
                                                    <td>
                                                        @if ($pro['status'] == 1)
                                                            <p class="badge badge-success"> Accept </p>
                                                        @else
                                                            <p class="badge badge-danger"> Reject </p>
                                                        @endif
                                                    </td>

                                                    <td>
                                                        sire_weight
                                                    </td>
                                                    <td>
                                                        {{ $product['sire_weight'] }}
                                                    </td>
                                                </tr>
                                                @if ($product['status'] == 0)
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
                                                @endif
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
                                                        sire_health_tests
                                                    </td>
                                                    <td>
                                                        {{ $product['sire_health_tests'] }}
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td>
                                                        dam_name_with_titles
                                                    </td>
                                                    <td>
                                                        {{ $product['dam_name_with_titles'] }}
                                                    </td>
                                                    <td>
                                                        dam_registration_number
                                                    </td>
                                                    <td>
                                                        {{ $product['dam_registration_number'] }}
                                                    </td>
                                                </tr>



                                                <tr>
                                                    <td>
                                                        dam_pedigree_link
                                                    </td>
                                                    <td>
                                                        {{ $product['dam_pedigree_link'] }}
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

@push('scripts')
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

    <script>
        window.onload = function() {
            var totalSales = new CanvasJS.Chart("chartContainer", {
                title: {
                    text: "Sale"
                },
                axisY: {
                    // title: "Number of Push-ups"
                },
                data: [{
                    type: "line",
                    dataPoints: <?php echo json_encode($totalSale, JSON_NUMERIC_CHECK); ?>
                }]
            });
            totalSales.render();
            //
            var visits = new CanvasJS.Chart("visits", {
                title: {
                    text: "Custoomer visits"
                },
                axisY: {
                    // title: "Revenue in USD",

                },
                data: [{
                    type: "line",
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
