<?php  

use App\Models\Product;
use App\Models\Admin;

?>
@extends('layouts.frontend_app')

@section('main-content')

<div class="page-style-a">
    <div class="container">
        <div class="page-intro">
            <h2>Shop</h2>
            <ul class="bread-crumb">
                <li class="has-separator">
                    <i class="ion ion-md-home"></i>
                    <a href="home.html">Home</a>
                </li>
                <li class="is-marked">
                    <a href="shop-v2-sub-category.html">Shop</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="page-shop u-s-p-t-80">
    <div class="container">
        <div class="shop-intro">
            <ul class="bread-crumb">
                <li class="has-separator">
                    <a href="home.html">Home</a>
                </li>
                <li class="has-separator">
                    <a href="shop-v1-root-category.html">Men's Clothing</a>
                </li>
                <li class="is-marked">
                    <a href="shop-v3-sub-sub-category.html">Tops</a>
                </li>
            </ul>
        </div>
        <div class="row">

				@include('frontend.pages.sidebar_puppy')
        
            <div class="col-lg-9 col-md-9 col-sm-12">
                <div class="page-bar clearfix">
                    <div class="shop-settings">
                        <a id="list-anchor" class="active">
                            <i class="fas fa-th-list"></i>
                        </a>
                        <a id="grid-anchor">
                            <i class="fas fa-th"></i>
                        </a>
                    </div>
                    <!-- Toolbar Sorter 1  -->
                    <div class="toolbar-sorter">
                        <div class="select-box-wrapper">
                            <label class="sr-only" for="sort-by">Sort By</label>

                            <select class="form-control select-box" name="sort" id="sort">
                                <option value="product_latest"

                                @if (isset($_GET['sort']) && $_GET['sort']=="product_latest") selected=""@endif
                                >Latest Pro</option>
                                <option value="name_z"
                                @if (isset($_GET['sort']) && $_GET['sort']=="name_z") selected=""@endif
                                >Name Z</option>
                                <option value="name_a" 
                                @if (isset($_GET['sort']) && $_GET['sort']=="name_a") selected=""@endif

                                >Name A</option>
                                
                            </select>



                        </div>
                    </div>
                    
                </div>

                <div class="row product-container list-style">


                    <div class="tab-content filter_products">

                        {{-- @include('frontend.pages.ajax_puppy_listing') --}}


                    </div>
                    

                   
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('styles')

@endpush




@push('scripts')
<script>
    $(document).ready(function() {

            $("#sort").on('change',function(){
                var category_id = get_filter("category_id");
                var gender_id = get_filter("gender_id");
                var sort = $("#sort option:selected").val();
                $.ajax({
                    url:"/find-a-puppy",
                    method:"get",
                    data:{
                        gender_id:gender_id,
                        category_id:category_id,
                        sort:sort},
                        success:function(resp){
                        $('.filter_products').html(resp);
                    }
                });
            });
            $(".category_id").on('click',function(){
                var category_id = get_filter("category_id");
                var gender_id = get_filter("gender_id");
                var sort = $("#sort option:selected").val();
                $.ajax({
                    url:"/find-a-puppy",
                    method:"get",
                    data:{
                        gender_id:gender_id,
                        category_id:category_id,
                        sort:sort},
                    success:function(resp){
                        $('.filter_products').html(resp);
                    }
                });
            });
            //gender
            $(".gender_id").on('click',function(){
                var category_id = get_filter("category_id");
                var gender_id = get_filter("gender_id");
                var sort = $("#sort option:selected").val();
                $.ajax({
                    url:"/find-a-puppy",
                    method:"get",
                    data:{
                        gender_id:gender_id,
                        category_id:category_id,
                        sort:sort},
                    success:function(resp){
                        $('.filter_products').html(resp);
                    }
                });
            });

            function get_filter(class_name){
                var filter = [];
                $('.'+class_name+':checked').each(function(){

                    filter.push($(this).val());

                });
                return filter;
            }
    });
</script>
@endpush