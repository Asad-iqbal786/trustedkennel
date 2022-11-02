@extends('layouts.admin_app')

@section('main-content')


<div class="row">
    
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">

      <div class="card-body">
        
        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">

              @if (Auth::guard('admin')->user()->type=="Vendor")
                  Teacher Details
              @else
                  Admin Details
              @endif
              
              
            </a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
              
              @if (Auth::guard('admin')->user()->type=="Vendor")
                  Teacher Password
              @else
                  Admin Password
              @endif
              
              </a>
          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent" style="border: none;">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <h4 class="card-title">  
                @if (Auth::guard('admin')->user()->type=="Vendor")
                    Teacher Details
                @else
                    Admin Details
                @endif
            </h4>
            <form class="forms-sample" method="post" action="{{route('updateAdminDetails')}}" id="updateAdminDetails"  enctype="multipart/form-data">
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
              <label for="name">Email address</label>
              <input type="text" class="form-control" name="email" id="email"value="{{$adminDetaiils->email}}" readonly="" placeholder="name">
          </div>
          <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control" name="first_name" id="first_name"  value="{{$adminDetaiils->first_name}}"  placeholder="first_name">
          </div>
          <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" name="last_name" id="last_name"  value="{{$adminDetaiils->last_name}}"  placeholder="last_name">
          </div>
            @if (Auth::guard('admin')->user()->type=="Vendor")
              <div class="form-group">
                <label for="type">Teacher Type</label>
                <input type="text" class="form-control" name="type" id="type"  value="{{$adminDetaiils->type}}" readonly>
              </div>
              <div class="form-group">
                  <label for="adress_one">Adress One</label>
                  <input type="text" class="form-control" name="adress_one" id="adress_one"value="{{$adminDetaiils->adress_one}}"  placeholder="name">
              </div>
              <div class="form-group">
                  <label for="adress_two">Address Two</label>
                  <input type="text" class="form-control" name="adress_two" id="adress_two"value="{{$adminDetaiils->adress_two}}"  placeholder="adress_two">
              </div>
              <div class="form-group">
                  <label for="zipcode">Zip Code</label>
                  <input type="text" class="form-control" name="zipcode" id="zipcode"value="{{$adminDetaiils->zipcode}}"  placeholder="adress_two">
              </div>
             
              <div class="form-group">
                  <label for="o_language">Other Languages Spoken</label>
                  <select class="js-example-basic-multiple" name="o_language[]" multiple="multiple" style="width: 100%;">
                    @foreach ($o_language as $o_lang)

                            <option value="{{$o_lang['o_language']}}"
                                {{in_array($o_lang['o_language'],explode(',',$adminDetaiils['o_language'])) ? 'selected' : ''}}

                                >{{$o_lang['o_language']}}</option>
                        
                    @endforeach

                  </select>
              </div>
              <div class="form-group">
                  <label for="city">city</label>
                  <input type="text" class="form-control" name="country" id="city" value="{{$adminDetaiils->city}}"  placeholder="city">
              </div>

            <div class="form-group">
                <label for="country_name" style="height: 40px;">Country</label>
                <select class="js-example-basic-multiple" name="country_name"  style="width: 100%;" >
                  @foreach ($getCounties as $country)

                    <option value="{{$country['country_name']}}">{{$country['country_name']}}</option>

                  @endforeach

                </select>
            </div>


             
            @else
              <div class="form-group">
                <label for="type">Amin Type</label>
                <select class="form-control"  name="type" id="exampleSelectGender">
                    <option value="admin"
                    @if(!empty($adminDetaiils->type) && $adminDetaiils->type == "admin") selected @endif
                    >Admin</option>
                    <option value="superadmin"
                    @if(!empty($adminDetaiils->type) && $adminDetaiils->type == "superadmin") selected @endif
                    >Superadmin</option>
                </select>
              </div>
            @endif

          <div class="form-group">
            <label for="mobile">Mobile</label>
            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="mobile"  value="{{$adminDetaiils->mobile}}">
          </div>
         
          <div class="form-group">
              <label>Image</label>
              <input type="file" class="form-control" id="image" name="image">
              @if(!empty(Auth::guard('admin')->user()->image))
                <a href="{{url('admin/images/admin_photos/admins/'.Auth::guard('admin')->user()->image)}}" target="blank">View Image</a>
                <input type="hidden" name="current_admin_image" id="current_admin_image" value="{{Auth::guard('admin')->user()->image}}">
              @endif
          </div>
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
      </form>

          </div>
          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <h4>

              @if (Auth::guard('admin')->user()->type=="Vendor")
                Teacher Password
              @else
                  Admin Password
              @endif

            </h4>

            <form class="forms-sample" method="post" action="{{route('updatePassword')}}" name="updatePasswordForm"       id="updatePasswordForm">@csrf
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
              <div class="form-group row">
                <label for="exampleInputEmail2" class="col-sm-3 col-form-label" >Email</label>
                <div class="col-sm-9">
                  <input type="email" class="form-control" id="" name="email" value="{{$adminDetaiils->email}}" readonly>
                </div>
              </div>
              <div class="form-group row">
                <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Current Password </label>
                <div class="col-sm-9">
                  <input type="password" class="form-control" id="current_pwd" placeholder="current_pwd" name="Current Password...">
                  <span id="chkCurrentPwd"></span>
                </div>
              </div>
              <div class="form-group row">
                <label for="new_pwd" class="col-sm-3 col-form-label">New Password</label>
                <div class="col-sm-9">
                  <input type="password" class="form-control" id="new_pwd" name="New Password" placeholder="New Password...">
                </div>
              </div>
              <div class="form-group row">
                <label for="confirm_pwd" class="col-sm-3 col-form-label">Confirm Password</label>
                <div class="col-sm-9">
                  <input type="password" class="form-control" id="confirm_pwd" name="Confirm Password" placeholder="Confirm Password...">
                </div>
              </div>
  
              <button type="submit" class="btn btn-primary mr-2">Update</button>
            </form>


          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>






@endsection




@push('styles')
<style>
.select2-container .select2-selection--single {

}


.select2-container .select2-selection--single {
  box-sizing: border-box;
    cursor: pointer;
    display: block;
    height: 48px !important;
    user-select: none;
    -webkit-user-select: none;
}
</style>


<link rel="stylesheet" href="{{asset('css/select2.min.css')}}">
@endpush

@push('scripts')
<script src="{{asset('js/select2.min.js')}}"></script>
<script>

  $(document).ready(function(){

    $('.js-example-basic-multiple').select2();


    $("#current_pwd").keyup(function(){
        var current_pwd = $("#current_pwd").val();
        // alert(current_pwd);
        $.ajax({
          type:'POST',
          url:'/admin/check-current-pwd',
          data:{
            // _token:{{csrf_token()}} 
            current_pwd:current_pwd
          },
          success:function(resp){
            // alert(resp);
            if(resp=="false"){
                $("#chkCurrentPwd").html("<font color=red>Current Password is incorrect</font>");
              }else if(resp=="true"){
                $("#chkCurrentPwd").html("<font color=green>Current Password is Correct</font>");
            }
            },error:function(){
              alert("Error");
          }
        });
        
    });
  });
</script>
@endpush






