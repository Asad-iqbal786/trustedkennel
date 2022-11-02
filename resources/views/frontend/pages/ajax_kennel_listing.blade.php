<?php

use App\Models\Product;
use App\Models\Admin;

?>

<div class="row">
    @forelse ($gekennels as $item)

        <?php
        $adm = Admin::with('vendors')
            ->where('id', $item['admin_id'])
            ->get()
            ->toArray();
        ?>
        @foreach ($adm as $asas)
            <div class="col-lg-3 col-sm-6 wow slideInUp">
                <div class="thumbnail thumbnail-mod-2">
                    <figure>
                        <a href="{{ route('storeDetails', $asas['vendors']['slug']) }}"ata-lightgallery="item">
                            <img src="{{ asset('admin/images/admin_photos/admins/' . $asas['admin_image']) }}"alt=""width="270"
                                height="230" />
                        </a>
                    </figure>
                    <div class="item-stars">
                        <div class="star" title="4.5 out of 5 - based on 23 Reviews">
                            <span style="width:67px"></span>
                        </div>
                        <span>(23)</span>
                    </div>
                    <div class="pd-detail__inline">
                        <a href="{{ route('storeDetails', $asas['vendors']['slug']) }}" target="_blank">   <span class="pd-detail__stock"> {{ $asas['vendors']['kennel_name'] }}</span></a>
                     

                        <span class="pd-detail__left text-success">{{ $asas['vendors']['city'] }}</span>
                    </div>

                    <div class="pd-detail__inline">
                        <span class="pd-detail__stock"> State </span>

                        <span class="pd-detail__left text-success"> {{ $asas['vendors']['state'] }} </span>
                    </div>

                    <ul class="bread-crumb">
                        <li class="has-separator">
                            <img src="{{ asset('frontend/images/good-feet.png') }}" alt="" style="width: 40px;">
                        </li>
                        <li class="has-separator pl-5">
                            <img src="{{ asset('frontend/images/calender.png') }}" alt="" style="width: 40px;">
                        </li>
                    </ul>
                </div>


                {{-- <article class="post-6">
                    
                    <h5 class="" style=" margin-top: 0px;    font-size: 12px;">
                        <a href="{{ route('storeDetails', $asas['vendors']['slug']) }}">Kennel Name
                            :{{ $asas['vendors']['shop_name'] }}</a>
                    </h5>
                    <div class="puppy_text">



                        <div class="item-stars">
                            <div class="star" title="4.5 out of 5 - based on 23 Reviews">
                                <span style="width:67px"></span>
                            </div>
                            <span>(23)</span>
                        </div>

                        <div class="pd-detail__inline">
                            <span class="pd-detail__stock">City name :</span>

                            <span class="pd-detail__left text-success">{{ $asas['vendors']['city'] }}</span>
                        </div>
                        <div class="pd-detail__inline">
                            <span class="pd-detail__stock"> State </span>

                            <span class="pd-detail__left text-success"> {{ $asas['vendors']['state'] }} </span>
                        </div>

                        <ul class="bread-crumb">
                            <li class="has-separator">
                                <img src="{{ asset('frontend/images/good-feet.png') }}" alt=""
                                    style="width: 40px;">
                            </li>
                            <li class="has-separator pl-5">
                                <img src="{{ asset('frontend/images/calender.png') }}" alt=""
                                    style="width: 40px;">
                            </li>
                        </ul>
                    </div>



                </article> --}}
            </div>
        @endforeach

    @empty

    @endforelse
</div>
