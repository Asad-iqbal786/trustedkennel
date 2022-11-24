@extends('layouts.frontend_app')

@section('main-content')
    <header class="header-slider">

        <div class="rd-navbar-wrap">

            @include('frontend.partials.header')


        </div>

    </header>
    <div class="container" style="margin-top: 150px">
        <div class="row">
            <div class="col-3">
                @include('user.include.sidebar')
            </div>
            <div class="col-9">
                <div class="row">
                    <div class="col-3">
                        @include('user.include.chat_list')
                    </div>
                    <div class="col-9">

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
      
    </script>
@endpush
