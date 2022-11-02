<?php

use App\Models\Product;
use App\Models\Admin;

?>

@extends('layouts.admin_app')

@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Customer Name : {{ $appDetails['users']['name'] }} </h4>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title">Application Details</p>
                            <div class="charts-data">
                                <div class="mt-3">
                                    <table class="table table-bordered">

                                        <thead>
                                            <tr>
                                                <td><strong>User Name </strong></td>
                                                <td> {{$appDetails['users']['name']}} </td>
                                            </tr>
                                            <tr>
                                                <td><strong>home_style </strong></td>
                                                <td>  {{$appDetails['users']['users_app']['home_style']}}  </td>
                                            </tr>
                                            <tr>
                                                <td><strong>fence </strong></td>
                                                <td> {{$appDetails['users']['users_app']['fence']}} </td>
                                            </tr>
                                            <tr>
                                                <td> <strong>house_members</strong></td>
                                                <td>{{$appDetails['users']['users_app']['house_members']}}</td>
                                            </tr>
                                            <tr>
                                                <td> <strong>special_member</strong></td>
                                                <td>{{$appDetails['users']['users_app']['special_member']}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>other_dog </strong></td>
                                                <td>{{$appDetails['users']['users_app']['other_dog']}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>other_cat </strong></td>
                                                <td>{{$appDetails['users']['users_app']['other_cat']}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>previous_expierience </strong></td>
                                                <td>{{$appDetails['users']['users_app']['previous_expierience']}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>total_dog</strong></td>
                                                <td>{{$appDetails['users']['users_app']['total_dog']}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>rised_puppy </strong></td>
                                                <td>{{$appDetails['users']['users_app']['rised_puppy']}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>surrendered_dog</strong></td>
                                                <td>{{$appDetails['users']['users_app']['surrendered_dog']}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>plan_for_other_puppy</strong></td>
                                                <td>{{$appDetails['users']['users_app']['plan_for_other_puppy']}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>how_to_integrate</strong></td>
                                                <td>{{$appDetails['users']['users_app']['how_to_integrate']}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>descrbe_living_secuation</strong></td>
                                                <td>{{$appDetails['users']['users_app']['descrbe_living_secuation']}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>puppu_spent_night</strong></td>
                                                <td>{{$appDetails['users']['users_app']['puppu_spent_night']}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>traning_type</strong></td>
                                                <td>{{$appDetails['users']['users_app']['traning_type']}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>socialization</strong></td>
                                                <td>{{$appDetails['users']['users_app']['socialization']}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>planning_another_puppy</strong></td>
                                                <td>{{$appDetails['users']['users_app']['planning_another_puppy']}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>puppies_often_have</strong></td>
                                                <td>{{$appDetails['users']['users_app']['puppies_often_have']}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>please_tell_use_more</strong></td>
                                                <td>{{$appDetails['users']['users_app']['please_tell_use_more']}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>coat_color</strong></td>
                                                <td>{{$appDetails['users']['users_app']['coat_color']}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>prefer</strong></td>
                                                <td>{{$appDetails['users']['users_app']['prefer']}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>when_you_ideal</strong></td>
                                                <td>{{$appDetails['users']['users_app']['when_you_ideal']}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>energy_level</strong></td>
                                                <td>{{$appDetails['users']['users_app']['energy_level']}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>puppy_intended</strong></td>
                                                <td>{{$appDetails['users']['users_app']['puppy_intended']}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>if_you_checked</strong></td>
                                                <td>{{$appDetails['users']['users_app']['if_you_checked']}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>email</strong></td>
                                                <td>{{$appDetails['users']['users_app']['email']}}</td>
                                            </tr>
                                            

                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection





@push('scripts')
    <script>
        // admin status
        $(".updateProductStatus").click(function() {
            var status = $(this).text();
            var product_id = $(this).attr("product_id");
            // alert(status);
            $.ajax({
                type: 'post',
                url: '/admin/update-product-status',
                data: {
                    status: status,
                    product_id: product_id
                },
                success: function(resp) {

                    if (resp['status'] == 0) {
                        $("#product-" + product_id).html(
                            "<i style='font-size:25px;'class='mdi mdi-bookmark-outline'><p style='display:none;'> Inactive</p></i>"
                        );
                    } else if (resp['status'] == 1) {
                        $("#product-" + product_id).html(
                            "<i style='font-size:25px;'class='mdi mdi-bookmark-check'> <p style='display:none;'> Active</p> </i>"
                        );
                    }

                },
                error: function() {
                    alert("Error");
                }
            })

        });

        // show courier name and Teracking Number
        $("#courier_name").hide();
        $("#tracking_number").hide();
        $("#shipping_chargges").hide();
        $("#reservation_charges").hide();
        //order status
        $("#order_status").on("change", function() {
            if (this.value == "Shipped") {
                $("#courier_name").show();
                $("#tracking_number").show();
            } else {
                $("#courier_name").hide();
                $("#tracking_number").hide();
            }
        });
        //add shipping carges
        $("#order_status").on("change", function() {
            if (this.value == "accept") {
                $("#shipping_chargges").show();
            } else {
                $("#shipping_chargges").hide();
            }
        });
        //add reservation carges
        $("#order_status").on("change", function() {
            if (this.value == "reservation_booked") {
                $("#reservation_charges").show();
            } else {
                $("#reservation_charges").hide();
            }
        });
    </script>
@endpush
