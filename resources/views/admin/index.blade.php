@extends('layouts.admin_app')

@section('main-content')

 
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card tale-bg">
                <div class="card-people mt-auto">
                    <img src="{{ asset('admin/images/dashboard/people.svg') }}" alt="people">
                    <div class="weather-info">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin transparent">
            <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-tale">
                        <div class="card-body">
                            <p class="mb-4">Total Sales this month</p>
                            <p> {{$monthlySales}} </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-dark-blue">
                        <div class="card-body">
                            <p class="mb-4">Total sales all times</p>
                            <p>{{$totalSales}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-light-danger">
                        <div class="card-body">
                            <p class="mb-4">Total reservation this month</p>
                            <p>{{$totalReser}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-light-danger">
                        <div class="card-body">
                            <p class="mb-4">Total reservation this year</p>
                            <p>{{$monthlyResv}}</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-light-danger">
                        <div class="card-body">
                            <p class="mb-4">Total availabe puppies posted this yeaer</p>
                            <p>{{$thisYearPuppy}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-light-danger">
                        <div class="card-body">
                            <p class="mb-4">Total availabe puppies now</p>
                            <p> {{$totalAvailabePuppy}} </p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-light-danger">
                        <div class="card-body">
                            <p class="mb-4">Total planned litters posted this yeaer</p>
                            <p>{{$totalLittleThisYear}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-light-danger">
                        <div class="card-body">
                            <p class="mb-4">Total planned litters posted this now</p>
                            <p> {{$totalplanLittles}} </p>
                        </div>
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
                            {{-- <p>{{$countAvailablePuppy}}</p> --}}
                        </div>
                        <div class="col-6 text-center">
                            <p>Planned Litter</p>
                            {{-- <p>{{$countPlanedPuppy}}</p> --}}
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
                            {{-- <p>{{$orderSum}}</p> --}}
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
                                            <p data-toggle="modal" class="badge badge-danger"
                                                data-target="#pandingStatus-{{ $pro['id'] }}">
                                                Reject </p>
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


                                            <a href="" target="blank" data-toggle="modal"
                                                data-target="#exampleModal-{{ $pro['id'] }}"><i class="mdi mdi-eye"
                                                    style="font-size: 25px;"></i></a>
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
            {{-- <div class="modal fade" id="exampleModal-{{ $product['id'] }}" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">

                        <div class="modal-body">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">tProduc Name : {{ $product['sire_name'] }}</h4>
                                    <p class="card-description"> </p>
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
            </div> --}}
            
            <div class="modal fade" id="pandingStatus-{{ $product['id'] }}" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="card">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('changeStatuss') }}" method="post">@csrf

                                <input type="hidden" name="product_id" value="{{ $product['id'] }}" id="">
                                <div class="form-group">
                                    <label for="status">Change Status</label>
                                    <select class="form-control" id="status" name="status">
                                        <option value="accept">Accept</option>
                                        <option value="reject">Reject</option>
                                    </select>
                                </div>

                                <div class="" id="product_type_hide">
                                    <div class="mb-3">
                                        <label for="inputfname" class="control-label col-form-label">Starting Bidding
                                            Price
                                            *</label>
                                        <textarea class="form-control" name="reason" id="reason" rows="4"></textarea>
                                    </div>
                                </div>


                                <button type="submit" class="btn btn-secondary">Update</button>
                            </form>
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

    {{-- <div class="row">
    <div class="col-md-4 stretch-card grid-margin">
      <div class="card">
        <div class="card-body">
          <p class="card-title mb-0">Projects</p>
          <div class="table-responsive">
            <table class="table table-borderless">
              <thead>
                <tr>
                  <th class="pl-0  pb-2 border-bottom">Places</th>
                  <th class="border-bottom pb-2">Orders</th>
                  <th class="border-bottom pb-2">Users</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="pl-0">Kentucky</td>
                  <td><p class="mb-0"><span class="font-weight-bold mr-2">65</span>(2.15%)</p></td>
                  <td class="text-muted">65</td>
                </tr>
                <tr>
                  <td class="pl-0">Ohio</td>
                  <td><p class="mb-0"><span class="font-weight-bold mr-2">54</span>(3.25%)</p></td>
                  <td class="text-muted">51</td>
                </tr>
                <tr>
                  <td class="pl-0">Nevada</td>
                  <td><p class="mb-0"><span class="font-weight-bold mr-2">22</span>(2.22%)</p></td>
                  <td class="text-muted">32</td>
                </tr>
                <tr>
                  <td class="pl-0">North Carolina</td>
                  <td><p class="mb-0"><span class="font-weight-bold mr-2">46</span>(3.27%)</p></td>
                  <td class="text-muted">15</td>
                </tr>
                <tr>
                  <td class="pl-0">Montana</td>
                  <td><p class="mb-0"><span class="font-weight-bold mr-2">17</span>(1.25%)</p></td>
                  <td class="text-muted">25</td>
                </tr>
                <tr>
                  <td class="pl-0">Nevada</td>
                  <td><p class="mb-0"><span class="font-weight-bold mr-2">52</span>(3.11%)</p></td>
                  <td class="text-muted">71</td>
                </tr>
                <tr>
                  <td class="pl-0 pb-0">Louisiana</td>
                  <td class="pb-0"><p class="mb-0"><span class="font-weight-bold mr-2">25</span>(1.32%)</p></td>
                  <td class="pb-0">14</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 stretch-card grid-margin">
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <p class="card-title">Charts</p>
              <div class="charts-data">
                <div class="mt-3">
                  <p class="mb-0">Data 1</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="progress progress-md flex-grow-1 mr-4">
                      <div class="progress-bar bg-inf0" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="mb-0">5k</p>
                  </div>
                </div>
                <div class="mt-3">
                  <p class="mb-0">Data 2</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="progress progress-md flex-grow-1 mr-4">
                      <div class="progress-bar bg-info" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="mb-0">1k</p>
                  </div>
                </div>
                <div class="mt-3">
                  <p class="mb-0">Data 3</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="progress progress-md flex-grow-1 mr-4">
                      <div class="progress-bar bg-info" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="mb-0">992</p>
                  </div>
                </div>
                <div class="mt-3">
                  <p class="mb-0">Data 4</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="progress progress-md flex-grow-1 mr-4">
                      <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="mb-0">687</p>
                  </div>
                </div>
              </div>  
            </div>
          </div>
        </div>
        <div class="col-md-12 stretch-card grid-margin grid-margin-md-0">
          <div class="card data-icon-card-primary">
            <div class="card-body">
              <p class="card-title text-white">Number of Meetings</p>                      
              <div class="row">
                <div class="col-8 text-white">
                  <h3>34040</h3>
                  <p class="text-white font-weight-500 mb-0">The total number of sessions within the date range.It is calculated as the sum . </p>
                </div>
                <div class="col-4 background-icon">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 stretch-card grid-margin">
      <div class="card">
        <div class="card-body">
          <p class="card-title">Notifications</p>
      
        </div>
      </div>
    </div>
  </div> --}}


@endsection

@push('scripts')

    <script>
        
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
