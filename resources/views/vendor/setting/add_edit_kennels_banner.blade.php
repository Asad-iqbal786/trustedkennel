@extends('layouts.admin_app')

@section('main-content')


    <div class="grid-margin stretch-card">
        <div class="col-6">
            <div class="card">
                <div class="card">
                    <div class="card-body">
                        {{-- <h4 class="card-title">{{$title}}</h4> --}}
                        <a @if (Auth::guard('admin')->user()->type == 'superadmin') href="{{ route('addEditProduct') }}" 
        
                            @else href="{{ route('VendoraddEditProduct') }}" @endif
                            class="btn btn-info"> Add New Post</a>
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
        
        
                                    @forelse ($getBanner as $index=> $product)
                                     <tr>
                                         <td>{{$index+1}}</td>
                                         <td><img src="{{ asset('storage/admin/images/vendors/banners/' . $product['slider_image']) }}"
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
                    <h4 class="card-title">{{ $title }}</h4>

                    <form class="forms-sample" method="post"
                        {{-- @if (empty($shopSettingdata['id']))  --}}
                        action="{{ url('/vendor/add-edit-kennel-banners') }}"
                        {{-- @else
                        action="{{ url('/vendor/add-edit-kennel-banners', $shopSettingdata['id']) }}" @endif --}}
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
                        {{-- <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="shop_phone">shop_phone</label>
                              <input type="text" class="form-control" name="shop_phone" id="shop_phone"
                              @if (!empty($shopRecord['shop_phone'])) value="{{$shopRecord['shop_phone']}}" @else value="{{old('shop_phone')}}" @endif   placeholder="shop_phone">
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="shop_email">shop_email</label>
                              <input type="text" class="form-control" name="shop_email" id="shop_email"
                              @if (!empty($shopRecord['shop_email'])) value="{{$shopRecord['shop_email']}}" @else value="{{old('shop_email')}}" @endif   placeholder="shop_email">
                          </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="shop_address">shop_address</label>
                              <input type="text" class="form-control" name="shop_address" id="shop_address"
                              @if (!empty($shopRecord['shop_address'])) value="{{$shopRecord['shop_address']}}" @else value="{{old('shop_address')}}" @endif   placeholder="shop_address">
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="meta_description">meta_description</label>
                              <input type="text" class="form-control" name="meta_description" id="meta_description"
                              @if (!empty($shopRecord['meta_description'])) value="{{$shopRecord['meta_description']}}" @else value="{{old('meta_description')}}" @endif   placeholder="meta_description">
                          </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                          <div class="form-group">
                              <label for="facebook">facebook</label>
                              <input type="text" class="form-control" name="facebook" id="facebook"
                              @if (!empty($shopRecord['facebook'])) value="{{$shopRecord['facebook']}}" @else value="{{old('facebook')}}" @endif   placeholder="facebook">
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group">
                              <label for="instagram">instagram</label>
                              <input type="text" class="form-control" name="instagram" id="instagram"
                              @if (!empty($shopRecord['instagram'])) value="{{$shopRecord['instagram']}}" @else value="{{old('instagram')}}" @endif   placeholder="instagram">
                          </div>
                      </div>
                      <div class="col-md-4">
                          <div class="form-group">
                              <label for="twitter">twitter</label>
                              <input type="text" class="form-control" name="twitter" id="twitter"
                              @if (!empty($shopRecord['twitter'])) value="{{$shopRecord['twitter']}}" @else value="{{old('twitter')}}" @endif   placeholder="twitter">
                          </div>
                      </div>
                    </div> --}}
                        <div class="form-group">
                            <label for="shop_logo">Shop logo</label>
                            <input type="file" class="form-control"name="slider_image[]"value=""  multiple="" >

                            @if ($shopRecord > 0)
                                <input type="hidden" name="current_admin_image" id="current_admin_image"
                                    value="{{ asset('storage/admin/images/admin_photos/shop-setting/' . $shopRecord['slider_image']) }}">
                                <img src="{{ asset('storage/admin/images/admin_photos/shop-setting/' . $shopRecord['slider_image']) }}"
                                    alt="">
                                <a href="" target="blank">X</a>
                            @endif



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
