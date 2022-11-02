@extends('layouts.admin_app')

@section('main-content')


<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <p class="card-description"> User Applications</p>
        <div class="table-responsive pt-3">
          <table id="example" class="display expandable-table" style="width:100%">
            <thead>
              <tr>
                <th>#</th>
                <th>Image</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Type</th>
                <th>Vendor Type</th>

                <th>Email</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>

               
              
            
            </tbody>
          </table>
        </div>
      </div>
    </div>


 
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        
        <div class="modal-body">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Shop Name : </h4>
              <p class="card-description">
              </p>
              

              {{-- <div class="table-responsive pt-3">
                <table class="table table-bordered">
                 
                  <tbody>

                    <tr>
                      <th>
                        First Name
                      </th>
                      <td>
                        {{$asad['first_name']}}
                      </td>
                      <th>
                        Last Name
                      </th>
                      <td>
                        {{$asad['last_name']}}
                      </td>
                    </tr>

                    <tr>
                      <th>
                        Email
                      </th>
                      <td>
                        {{$asad['email']}}
                      </td>
                      <th>
                        Type
                      </th>
                      <td>
                        {{$asad['type']}}
                      </td>
                    </tr>


                    <tr>
                      <th>
                        Shop Name
                      </th>
                      <td>
                        {{$admin['shop_name']}}
                      </td>
                      <th>
                        Shop Owner
                      </th>
                      <td>
                        {{$admin['shop_owner']}}
                      </td>
                    </tr>


                    <tr>
                      <th>
                        vendor_Affiliation
                      </th>
                      <td>
                        {{$admin['vendor_Affiliation']}}
                      </td>
                      <th>
                        registration_number
                      </th>
                      <td>
                        {{$admin['registration_number']}}
                      </td>
                    </tr>

                    <tr>
                      <th>
                        vendor_about
                      </th>
                      <td>
                        {{$admin['vendor_about']}}
                      </td>
                      <th>
                        established_year
                      </th>
                      <td>
                        {{$admin['established_year']}}
                      </td>
                    </tr>

                    <tr>
                      <th>
                        number_of_litters
                      </th>
                      <td>
                        {{$admin['number_of_litters']}}
                      </td>
                      <th>
                        country
                      </th>
                      <td>
                        {{$admin['country']}}
                      </td>
                    </tr>


                    <tr>
                      <th>
                        state
                      </th>
                      <td>
                        {{$admin['state']}}
                      </td>
                      <th>
                        city
                      </th>
                      <td>
                        {{$admin['city']}}
                      </td>
                    </tr>
                    <tr>
                      <th>
                        helth_check
                      </th>
                      <td>
                        {{$admin['helth_check']}}
                      </td>
                      <th>
                      
                      </th>
                      <td>
                      
                      </td>
                    </tr>
                  
                  
                  </tbody>
                </table>
              </div> --}}

          
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

</div>


@endsection

@push('styles')

@endpush

@push('scripts')

@endpush