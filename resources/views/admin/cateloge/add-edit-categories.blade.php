@extends('layouts.admin_app')

@section('main-content')

<div class="row">
    

    <div class="col-md-8 grid-margin stretch-card">
        <div class="card">
  
          <div class="card-body">
            <h4 class="card-title">{{$title}}</h4>
            <p class="card-description">

                <a href="{{route('addEditCategories')}}" class="btn btn-info"> Add Breed</a>
    
              </p>
            <div class="table-responsive pt-3">
              
              <table id="example" class="display expandable-table dataTable no-footer">
                @if(Session::has('success_message'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{Session::get('success_message')}}
                    <button type="button" id="toastr-2"  class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
              @endif
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Breed name</th>
                    <th>Status</th>

                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
    
                  @foreach ($category as $item)
                    <tr>
                      <td>{{$item['id']}}</td>
                      <td><img src="{{asset('storage/admin/images/admin_photos/category/'.$item['image'])}}" alt="" style="width:50px;">
                      </td>
                      <td>{{$item['name']}}</td>

                      <td>
                        @if ($item['status'] ==1 )
                            <a class="updateSectionStatus" id="section-{{$item['id']}}" section_id="{{$item['id']}}" href="javascript:(0)">Active</a>
                          @else
                            <a class="updateSectionStatus" id="section-{{$item['id']}}" section_id="{{$item['id']}}" href="javascript:(0)">Inactive</a>
                        @endif
                      <td> <a href="{{route('addEditCategories',$item['id'])}}"><i class="mdi mdi-pencil-box"  style='font-size:25px;'></i></a> 
                        <a href="{{route('categoryDestroy',$item['id'])}}" onclick="return confirm('Are you sure to delete?')"><i class="mdi mdi-file-excel-box"   style='font-size:25px;'></i></a>
                      </td>
                    </tr>    
                  @endforeach                 
               
                </tbody>
              </table>
            </div>
          </div>
          
        </div>
    </div>




    <div class="col-md-4 grid-margin stretch-card">
      <div class="card">

        <div class="card-body">
          <h4 class="card-title">{{$title}}</h4>

            <form class="forms-sample" method="post"
                @if(empty($categoryData['id']))
                action="{{route('addEditCategories')}}"
                @else
                    action="{{route('addEditCategories',$categoryData['id'])}}"
                @endif 
                    method="post" enctype="multipart/form-data">
                @csrf
                @if(Session::has('error_message'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{Session::get('error_message')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                @endif 
              @if(Session::has('success_message'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{Session::get('success_message')}}
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
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name"
                    @if(!empty($categoryData['name'])) value="{{$categoryData['name']}}" @else value="{{old('name')}}" @endif   placeholder="name">
                </div>
                  <div class="form-group">
                      <label for="image">Breed Image</label>
                      <input type="file" class="form-control"name="image"value="">
                  </div>

                <button type="submit" class="btn btn-primary mr-2">Submit</button>

          </form>
        </div>
        
      </div>
    </div>





  </div>



@endsection





@push('scripts')
<script>
</script>
@endpush