<div class="aiz-user-sidenav-wrap position-relative z-1 bg-info-700 shadow-sm">
    <div class="aiz-user-sidenav rounded overflow-auto c-scrollbar-light pb-5 pb-xl-0 bg-dark">

        <div class="sidemnenu mb-3">
            <ul class="aiz-side-nav-list pb-3 px-2 metismenu" data-toggle="aiz-side-menu">

                {{-- <li class="aiz-side-nav-item">
                    <a href="javascript:void(0)" class="chat-user message-item align-items-center  px-3 ps-2"
                        id="chat_user_1" data-user-id="1">
                        <span class="user-img position-relative d-inline-block">
                            <img src="{{ asset('admin/assets/img/user.png') }}" alt="user"
                                class="rounded-circle w-25">
                            <span class=" profile-status online rounded-circle  pull-right "></span>
                        </span>
                        <div class="mail-contnet w-75 d-inline-block v-middle ps-3">
                            <p class="message-title mb-0 mt-1 fs-3 fw-bold" data-username="Pavan kumar">
                                Pavan kumar
                            </p>
                         
                            <span class="fs-2 text-nowrap d-block subtext text-muted">9:30 AM</span>
                        </div>
                    </a>
                </li> --}}
                @foreach ($vendorChat as $ven)

                <?php  
                
                    // dd( $ven);
                
                ?>
                <li class="aiz-side-nav-item">
                    <a href="{{ route('chat',$ven['id']) }}" class="aiz-side-nav-link">
                        <img src="{{ asset('admin/assets/img/user.png') }}" alt="user"
                        class="rounded-circle w-25">
                        <i class="las la-home aiz-side-nav-icon"></i>
                        <span class="aiz-side-nav-text ml-5">{{$ven['vendors']['kennel_name']}} <br> <span>9:30 AM</span></span>
                    </a>
                </li>
                @endforeach
              
           
            </ul>
        </div>
    </div>

</div>


@push('styles')
    <style>
        .mail-contnet.ps-3.v-middle.w-75 {
            position: absolute;
            right: -32px;
            top: 0;
        }

        .aiz-side-nav-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .pl-2,
        .px-2 {
            padding-left: 0.5rem !important;
        }

        .pr-2,
        .px-2 {
            padding-right: 0.5rem !important;
        }

        .aiz-side-nav-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .aiz-user-sidenav .aiz-side-nav-list .aiz-side-nav-link {
            color: #000000;
            font-weight: 500;
            font-size: 0.8125rem;
            border-radius: 3px;
            padding: 10px 20px 10px 15px;
        }

        .aiz-side-nav-list .aiz-side-nav-link {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            -webkit-box-align: stretch;
            -ms-flex-align: stretch;
            align-items: stretch;
            padding: 10px 25px;
            font-size: 0.875rem;
            font-weight: 400;
            color: #a2a3b7;
        }

        .aiz-side-nav-list .aiz-side-nav-link:hover,
        .aiz-side-nav-list .aiz-side-nav-link.level-2-active,
        .aiz-side-nav-list .aiz-side-nav-link.level-3-active,
        .aiz-side-nav-list .aiz-side-nav-link.active {
            color: #fff;
            background-color: #181827;
        }

        .aiz-user-panel {
            -ms-flex-positive: 1;
            flex-grow: 1;
            padding-left: 30px;
        }
    </style>
@endpush
