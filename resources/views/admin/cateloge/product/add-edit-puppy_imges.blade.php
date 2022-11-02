@extends('layouts.admin_app')

@section('main-content')


    <div class="grid-margin stretch-card">
        <div class="col-6">
            <div class="card">
                <div class="card">
                    <div class="card-body">
                        {{-- <h4 class="card-title">{{$title}}</h4> --}}
                        <a> Kennel Name {{$proId['sire_name']}} </a>
                        </p>
                        <div class="table-responsive pt-3">
        
                            <table id="example" class="display expandable-table dataTable no-footer">
                                @if (Session::has('success_message'))
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        {{ Session::get('success_message') }}
                                        <button type="button" id="toastr-2" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
        
        
                                    @forelse ($getImgs as $index=> $product)
                                     <tr>
                                         <td>{{$index+1}}</td>
                                         <td><img src="{{ asset('storage/admin/images/vendors/puppy_image/' . $product['puppy_image']) }}"
                                            alt="" style="width:50px;"></td>
                                         <td>Status</td>
                                     </tr>
                                    @empty
                                    @endforelse
        
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add multiple image</h4>

                    <form class="forms-sample" method="post"
                        {{-- @if (empty($shopSettingdata['id']))  --}}
                        action="{{ route('addEditPuppyImage',$proId['id']) }}"
                        {{-- @else
                        action="{{ url('/vendor/add-edit-puppy-images', $shopSettingdata['id']) }}" @endif --}}
                        method="post" enctype="multipart/form-data">
                        @csrf
                        @if (Session::has('error_message'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                {{ Session::get('error_message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        @if (Session::has('success_message'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                {{ Session::get('success_message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <input type="hidden" class="form-control"name="puppy_id"value="{{  $proId['id'] }}"  multiple="" >
                        <div class="form-group">
                            <label for="puppy_image">Shop logo</label>
                            <input type="file" class="form-control"name="puppy_image[]"value=""  multiple="" >

                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Submit</button>

                    </form>
                </div>

            </div>
        </div>

    </div>

@endsection

@push('styles')
@endpush




@push('scripts')
@endpush
