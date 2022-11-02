@extends('layouts.admin_app')

@section('main-content')

<div class="row">
  
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Horizontal Form</h4>
          <p class="card-description">
            Horizontal form layout
          </p>
          <form class="forms-sample" method="post" action="{{route('updatePassword')}}" name="updatePasswordForm" id="updatePasswordForm">@csrf
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
              <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Email</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="exampleInputUsername2" name="name"  value="{{$adminDetaiils->name}}" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="exampleInputEmail2" class="col-sm-3 col-form-label" >Email</label>
              <div class="col-sm-9">
                <input type="email" class="form-control" id="" name="email" value="{{$adminDetaiils->email}}" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label for="exampleInputPassword2" class="col-sm-3 col-form-label">sdfsdfdf</label>
              <div class="col-sm-9">
                <input type="password" class="form-control" id="current_pwd" placeholder="current_pwd" name="current_pwd">
                <span id="chkCurrentPwd"></span>
              </div>
            </div>
            <div class="form-group row">
              <label for="new_pwd" class="col-sm-3 col-form-label">new_pwd</label>
              <div class="col-sm-9">
                <input type="password" class="form-control" id="new_pwd" name="new_pwd" placeholder="new_pwd">
              </div>
            </div>
            <div class="form-group row">
              <label for="confirm_pwd" class="col-sm-3 col-form-label">confirm_pwd</label>
              <div class="col-sm-9">
                <input type="password" class="form-control" id="confirm_pwd" name="confirm_pwd" placeholder="confirm_pwd">
              </div>
            </div>

            <button type="submit" class="btn btn-primary mr-2">Update</button>
          </form>
        </div>
      </div>
    </div>
  </div>



@endsection





@push('scripts')
<script>
  $(document).ready(function(){
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