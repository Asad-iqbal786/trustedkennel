<?php

use App\Models\Vendor;
use App\Models\Admin;

?>
@extends('layouts.admin_app')

@section('main-content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-description">


                </p>
                <div class="table-responsive pt-3">
                    <table id="example" class="display expandable-table" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Kennel Name</th>
                                {{-- <th>Last Name</th> --}}
                                <th>Type</th>
                                <th>Kennel Type</th>
                                <th>Email</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>


                            @foreach ($getAdmins as $item)
                                <?php
                                //  $admin= Vendor::where('admin_id',$item['id'])->first()->toArray();
                                // dd($admin);
                                ?>
                                <tr>
                                    <td>{{ $item['id'] }}</td>
                                    <td> <img src="{{ asset('admin/images/admin_photos/admins/' . $item['admin_image']) }}"
                                            style="width:25;" alt="profile" /> </td>
                                    <td>{{ $item['vendors']['kennel_name'] }}</td>
                                    {{-- <td>{{$item['last_name']}}</td> --}}
                                    <td>
                                        <a href="" data-toggle="modal"
                                            data-target="#change-status-{{ $item['id'] }}"></a>
                                    </td>
                                    <td>

                                        @if ($item['type'] == 'superadmin')
                                        @else
                                            <a href="" data-toggle="modal"
                                                data-target="#change-status-{{ $item['id'] }}">


                                                @if ($item['vendor_type'] == 'Futured')
                                                    <div class="badge badge-info">{{ $item['vendor_type'] }}</div>
                                                @elseif($item['vendor_type'] == 'not_for_selling')
                                                    <div class="badge badge-danger">{{ $item['vendor_type'] }}</div>
                                                @else
                                                    <div class="badge badge-success">{{ $item['vendor_type'] }}</div>
                                                @endif
                                            </a>
                                        @endif

                                    </td>

                                    <td>{{ $item['email'] }}</td>

                                    <td>
                                        @if ($item['type'] == 'superadmin')
                                        @else
                                            @if ($item['status'] == 1)
                                                <a class="updateAdminStatus" id="admin-{{ $item['id'] }}"
                                                    admin_id="{{ $item['id'] }}" href="javascript:(0)"> <i
                                                        class="mdi mdi-bookmark" style='font-size:25px;'></i>
                                                    <p style="display:none;">Active</p>
                                                </a>
                                            @else
                                                <a class="updateAdminStatus" id="admin-{{ $item['id'] }}"
                                                    admin_id="{{ $item['id'] }}" href="javascript:(0)"> <i
                                                        class="mdi mdi-bookmark-outline" style="font-size:25px;">
                                                        <p style="display:none;"> Inactive</p>
                                                    </i></a>
                                            @endif
                                            <a href="" target="blank" data-toggle="modal"
                                                data-target="#exampleModal-{{ $item['id'] }}"><i class="mdi mdi-eye"
                                                    style="font-size: 25px;"></i></a>
                                            <a href="" target="blank" data-toggle="modal"
                                                data-target="#exampleModal-{{ $item['id'] }}"><i class="mdi mdi-pencil"
                                                    style="font-size: 25px;"></i></a>
                                        @endif

                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Modal -->
        @foreach ($getAdmins as $asad)
            <div class="modal fade" id="change-status-{{ $asad['id'] }}" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Change Status</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('vendorTypeUpdate', $asad['id']) }}" method="post">
                            @csrf
                            <input type="hidden" value="{{ $asad['vendor_id'] }}" name="vendor_id" id="">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="helth_check">Vendor Type</label>

                                    <select class="" name="vendor_type" id="vendor_type">
                                        <option value="">-- Select Vendor Type--</option>
                                        <option value="not_for_selling">No Selling Just Create Shop</option>
                                        <option value="for_selling">For Selling</option>
                                        <option value="Futured">Futured</option>

                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>



                    </div>
                </div>
            </div>
        @endforeach

        @foreach ($getAdmins as $asad)
            <div class="modal fade" id="exampleModal-{{ $asad['id'] }}" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">

                        <div class="modal-body">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Shop Name : {{ $asad['vendors']['kennel_name'] }} </h4>
                                    <p class="card-description">
                                        {{-- Add class <code>.table-bordered</code> --}}
                                    </p>


                                    <div class="table-responsive pt-3">
                                        <table class="table table-bordered">
                                            {{-- <thead>
                    <tr>
                      <th>
                        First Name
                      </th>
                      <th>
                        Last Name
                      </th>
                      <th>
                        Email
                      </th>
                      <th>
                        Type
                      </th>
                    </tr>
                  </thead> --}}
                                            <tbody>

                                                <tr>
                                                    <th>
                                                        First Name
                                                    </th>
                                                    <td>
                                                        {{ $asad['first_name'] }}
                                                    </td>
                                                    <th>
                                                        Last Name
                                                    </th>
                                                    <td>
                                                        {{ $asad['last_name'] }}
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th>
                                                        Email
                                                    </th>
                                                    <td>
                                                        {{ $asad['email'] }}
                                                    </td>
                                                    <th>
                                                        Type
                                                    </th>
                                                    <td>
                                                        {{ $asad['type'] }}
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <th>
                                                        Shop Name
                                                    </th>
                                                    <td>
                                                        {{ $asad['vendors']['kennel_name'] }}
                                                    </td>
                                                    <th>
                                                        Shop Owner
                                                    </th>
                                                    <td>
                                                        {{ $asad['vendors']['owner_First_neame'] }}
                                                        {{ $asad['vendors']['owner_last_name'] }}
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <th>
                                                        vendor_Affiliation
                                                    </th>
                                                    <td>
                                                        {{ $asad['vendors']['kennel_affiliations'] }}
                                                    </td>
                                                    <th>
                                                        registration_number
                                                    </th>
                                                    <td>
                                                        {{ $asad['vendors']['registration_number'] }}
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th>
                                                        vendor_about
                                                    </th>
                                                    <td>
                                                        {{ $asad['vendors']['vendor_about'] }}
                                                    </td>
                                                    <th>
                                                        established_year
                                                    </th>
                                                    <td>
                                                        {{ $asad['vendors']['established_year'] }}
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th>
                                                        number_of_litters
                                                    </th>
                                                    <td>
                                                        {{ $asad['vendors']['number_of_litters'] }}
                                                    </td>
                                                    <th>
                                                        country
                                                    </th>
                                                    <td>
                                                        {{ $asad['vendors']['country'] }}
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <th>
                                                        state
                                                    </th>
                                                    <td>
                                                        {{ $asad['vendors']['city'] }}
                                                    </td>
                                                    <th>
                                                        city
                                                    </th>
                                                    <td>
                                                        {{ $asad['vendors']['city'] }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        helth_check
                                                    </th>
                                                    <td>
                                                        {{ $asad['vendors']['health_check'] }}
                                                    </td>
                                                    <th>

                                                    </th>
                                                    <td>

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
        @endforeach
    </div>
@endsection
@push('styles')
    <style>
        .support-ticket .user-img {
            border-radius: 6px;
            -webkit-box-shadow: 4px 3px 6px 0 rgb(0 0 0 / 20%);
            box-shadow: 4px 3px 6px 0rgba(0, 0, 0, 0.2);
            width: 35px;
            height: 35px;
        }
    </style>
@endpush





@push('scripts')
    <script>
        // admin status
        $(".updateAdminStatus").click(function() {
            var status = $(this).text();
            var admin_id = $(this).attr("admin_id");
            // alert(status);
            $.ajax({
                type: 'post',
                url: '/admin/update-admin-status',
                data: {
                    status: status,
                    admin_id: admin_id
                },
                success: function(resp) {

                    if (resp['status'] == 0) {
                        $("#admin-" + admin_id).html(
                            "<i style='font-size:25px;'class='mdi mdi-bookmark-outline'><p style='display:none;'> Inactive</p></i>"
                        );
                    } else if (resp['status'] == 1) {
                        $("#admin-" + admin_id).html(
                            "<i style='font-size:25px;'class='mdi mdi-bookmark-check'> <p style='display:none;'> Active</p> </i>"
                        );
                    }

                },
                error: function() {
                    alert("Error");
                }
            })

        });
    </script>
@endpush
