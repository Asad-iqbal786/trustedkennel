<nav class="sidebars sidebar-offcanvas bg-bg-white bg-inverse-light p-2" id="sidebasr">
    <ul class="nav">

        @foreach ($getChat as $chat)
            <li class="nav-item profile-details"
                @if (!empty($userID['id'])) @if ($chat['users']['id'] == $userID['id'])
                    style="
                    background:#68616E !important;
                    color:rgb(255, 255, 255) !important;
                    border-radius: 15px;
                    padding: 8px;
                    "
            @else
                @endif
            @endif



                >
                <a href="{{ route('chatDetails', $chat['users']['name']) }}">

                    <img src="{{ asset('admin/assets/img/user.png') }}" alt="user" class="rounded-circle w-25"
                        style="width: 20px;">
                    <div class="profile-img tiless">
                        <span class="aiz-side-nav-text " style="color: #000000;">{{ $chat['users']['name'] }} </span>
                        <div class="profile-date">
                            <p class="text" style="font-size: 12px; color:#000000 ;">
                                {{ date('Y-m-d H:i:s', strtotime($chat['created_at'])) }}</p>
                        </div>
                        <div class="profile-time">
                            <p class="" style="font-size: 12px;">
                                {{-- {{ date('h:i A', strtotime($chat['created_at'])) }}</p> --}}
                        </div>
                        <div class="font-weight-medium message-count">
                            {{-- <div class="badge badge-info">12</div> --}}
                        </div>
                    </div>
                </a>

            </li>
        @endforeach


    </ul>
</nav>
