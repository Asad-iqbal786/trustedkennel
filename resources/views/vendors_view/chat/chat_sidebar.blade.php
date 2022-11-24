<nav class="sidebar sidebar-offcanvas bg-bg-white" id="sidebar">
    <ul class="nav">

        @foreach ($getChat as $chat)
            <li class="nav-item profile-details">
                <img src="{{ asset('admin/assets/img/user.png') }}" alt="user" class="rounded-circle w-25"
                    style="width: 20px;">
                <div class="profile-img">
                    <a href="{{ route('chatDetails', $chat['users']['name']) }}">

                        <span class="aiz-side-nav-text ">{{ $chat['users']['name'] }} </span>

                    </a>
                    <i class="las la-home aiz-side-nav-icon"></i>
                    <p class="text-muted" style="font-size: 8px;">{{ $chat['created_at'] }}</p>
                </div>
            </li>
        @endforeach


    </ul>
</nav>
