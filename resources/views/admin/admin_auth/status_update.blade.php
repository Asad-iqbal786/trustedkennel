@extends('layouts.admin_app')

@section('main-content')


<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-header">
          <h4>HTML5 Form Basic</h4>
        </div>
        <div class="card-body">
            @if(Session::has('success_message'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{Session::get('success_message')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                @endif
            <form method="POST"
             action="{{route('adminStatusUpdate' ,$admin['id'])}}"
             
             > @csrf
                <input type="hidden" name="type" value="Vendor"  id="">
                <input type="hidden" value="{{$admin['id']}}" name="id">
                <div class="form-group">
                    <label>Select</label>
                    <select class="form-control" name="approved">
                        <option>--Select__</option>
                        <option value="Approvel">Approvel </option>
                        <option value="Not Approval">Not Approval </option>
                    </select>
                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary" >Status Update</button>
                </div>
            </form>
                <?php   
                
                        Session::forget('error_message');
                        Session::forget('success_message');
                    
                ?>
          
        </div>
        
    </div>
</div>


@endsection





@push('scripts')
<script>
  $(".updateAdminSttatus").click(function(){
    var status = $(this).text();
    var admin_id = $(this).attr("admin_id");
    // alert(admin_id);
    $.ajax({
         type:'post',
         url:'/admin/update-admin-status',
         data:{status:status,admin_id:admin_id},
         success:function(resp){
           
          // if(resp['status']== 0 ){
          //       $("#admin-"+admin_id).html("<i style='font-size:25px;'class='mdi mdi-bookmark-outline' status='Inactive'></i>");
          //  }else if(resp['status']== 1 ){
          //       $("#admin-"+admin_id).html("<i style='font-size:25px;'class='mdi mdi-bookmark-check' status='Active'>");
          //  }

          if(resp['status']== 0 ){
                $("#admin-"+admin_id).html("<a href='javascript:void(0)'>Inactive </a>");
           }else if(resp['status']== 1 ){
                $("#admin-"+admin_id).html("<a href='javascript:void(0)'>Active</a>");
           }


          },error:function(){
            alert("Error");
         }
       })

  });
</script>
@endpush