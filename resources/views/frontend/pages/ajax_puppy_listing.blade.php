<?php

use App\Models\Product;
use App\Models\Admin;
use Carbon\Carbon;
?>


<div class="row pt-0 pb-0 pl-4 pt-4 ">
    @forelse ($gekennels as $pro)
        <div class="col-3 col-lg-3 col-sm-6 wow slideInUp">
            <article class="post-6">
                <figure>
                    <a href="{{ route('PuppyDetails', $pro['slug']) }}">
                        <img src="{{ asset('storage/admin/images/admin_photos/product_large/' . $pro['image']) }}"alt="" /></a>
                </figure>
                <div class="puppy_text">
                    <h5 class="mt-0"  style="    font-size: 12px; text-align: left;">
                        <a href="{{ route('PuppyDetails', $pro['slug']) }}">{{ $pro['sire_name'] }}</a>
                    </h5>
                    <p class="mb-0"  style="    font-size: 12px; text-align: left;">
                        <a href="{{ route('catDetails', $pro['category']['id']) }}">{{ $pro['category']['name'] }}</a>
                    </p>
                    <div class="pd-detail__inline" style="    font-size: 12px; text-align: left;">

                        <span class="pd-detail__stock">Age</span>

                        <span class="pd-detail__left text-success">

                            <?php   
                                $dbdate = $pro['date_of_birth']; 
                                $toDate = Carbon::parse($pro['date_of_birth']);
                               
                                // echo "Today is " . date("Y-m-d") . "<br>";

                                $fromDate = Carbon::parse( date("Y-m-d")  );

                                $days = $toDate->diffInDays($fromDate);

                                $weeks = $days/ 7;


                               
                            ?>
                            <br>
                             Weeks <?php  echo round( $weeks  )  ?> </span>
                    </div>
                    <ul class="bread-crumb" style="    font-size: 12px; text-align: left;">
                        <li class="has-separator">
                            <p> <b>Price</b></p>
                        </li>
                        <li class="has-separator pt-1">
                            <p class=""> <b>$1600</b></p>
                        </li>
                    </ul>
                </div>

            </article>
        </div>
       

    @empty
    @endforelse
</div>
