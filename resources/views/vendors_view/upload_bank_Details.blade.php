@extends('layouts.admin_app')

@section('main-content')

     <div class="alert alert-danger" role="alert">
        Please complete your
        <a href="{{route('addBankAccount')}}" target="_blank" class="alert-link">Bank details.</a>
    </div>

@endsection

@push('scripts')

    <script>
     
    </script>
@endpush
