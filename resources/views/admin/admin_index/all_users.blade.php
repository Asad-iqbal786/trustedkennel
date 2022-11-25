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
                                <th>name</th>
                                <th>Email</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>


                            @foreach ($getAdmins as $index =>  $item)
                              
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $item['name'] }}</td>
                                    <td>{{ $item['email'] }}</td>
                                    <td>Status</td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </div>
@endsection
@push('styles')
    <style>
       
    </style>
@endpush





@push('scripts')
    <script>
        // admin status
      
    </script>
@endpush
