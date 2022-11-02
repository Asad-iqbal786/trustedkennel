<?php

use App\Models\Vendor;
use App\Models\Admin;

?>
@extends('layouts.admin_app')

@section('main-content')
<div class="container">
    <h2>Basic Table</h2>
    <p>Pleasa confirm your emails :</p>
    <div class="">
        <h3>Your account is Approved now Pleas login Now</h3>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>admin_id</th>
                <th>vendor_id</th>
                <th>pupName</th>
                <th>shcharges</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $name }}</td>
                <td>Doe</td>
                <td>{{ $admin_id }}</td>
                <td>{{ $vendor_id }}</td>
                <td>{{ $pupName }}</td>
                <td>{{ $shcharges }}</td>
                <td>{{ $email }}</td>
            </tr>

        </tbody>
    </table>

    <div class="">
      <a href="https://google.com/" target="_blank">Payment link</a>
    </div>

@endsection
@push('styles')
   
@endpush





@push('scripts')
 
    </script>
@endpush
