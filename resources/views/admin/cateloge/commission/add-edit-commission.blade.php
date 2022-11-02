@extends('layouts.admin_app')

@section('main-content')
    <div class="row">

        <div class="col-md-6 grid-margin stretch-card" data-select2-id="23">

            <div class="card" data-select2-id="22">
                <div class="card-body">
                    <form class="forms-sample" method="post" action="{{ route('addEditCommission') }}" method="post"
                        enctype="multipart/form-data"> @csrf

                        <div class="form-group" data-select2-id="21">
                            <h4 class="card-title">Admin Commission</h4>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="number" name="charges"
                                        @if (!empty($commData['charges'])) value="{{ $commData['charges'] }}" @else value="{{ old('charges') }}" @endif
                                        class="form-control" aria-label="Amount (to the nearest dollar)">
                                    <div class="input-group-append">
                                        <span class="input-group-text">%</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group" data-select2-id="21">
                            <h4 class="card-title">Note</h4>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="text"
                                        @if (!empty($commData['text'])) value="{{ $commData['text'] }}" @else value="{{ old('text') }}" @endif
                                        aria-label="Amount (to the nearest dollar)">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Update</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection





@push('scripts')
    <script></script>
@endpush
