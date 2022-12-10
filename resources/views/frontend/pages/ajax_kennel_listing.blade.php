<?php

use App\Models\Product;
use App\Models\Vendor;

?>

<div class="row">
    @forelse ($gekennels as $item)

        <?php
        $adm = Vendor::where('id', $item['vendor_id'])
            ->get()->toArray();
        ?>
        @foreach ($adm as $asas)
            <div class="col-lg-3 col-sm-6 wow slideInUp">
                <div class="thumbnail thumbnail-mod-2">
                    <figure>
                        <a href=""ata-lightgallery="item">
                            <img src="{{ asset('website/images/gallery-10-original.jpg') }}"alt=""width="270"
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
                        <a href="" target="_blank">   <span class="pd-detail__stock"> kennel name</span></a>
                     

                        <span class="pd-detail__left text-success">city</span>
                    </div>

                    <div class="pd-detail__inline">
                        <span class="pd-detail__stock"> State </span>

                        <span class="pd-detail__left text-success"> state</span>
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

            </div>
        @endforeach

    @empty

    @endforelse
</div>
