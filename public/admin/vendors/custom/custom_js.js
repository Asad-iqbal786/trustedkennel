$(document).ready(function() {
    $('#example').DataTable();

    $(".updateProductStatus").click(function(){
        var status = $(this).text();
        var product_id = $(this).attr("product_id");
        // alert(product_id);
        $.ajax({
             type:'post',
             url:'/admin/update-product-status',
             data:{status:status,product_id:product_id},
             success:function(resp){
               
              // if(resp['status']== 0 ){
              //       $("#admin-"+admin_id).html("<i style='font-size:25px;'class='mdi mdi-bookmark-outline' status='Inactive'></i>");
              //  }else if(resp['status']== 1 ){
              //       $("#admin-"+admin_id).html("<i style='font-size:25px;'class='mdi mdi-bookmark-check' status='Active'>");
              //  }
    
              if(resp['status']== 0 ){
                    $("#product-"+product_id).html("<a href='javascript:void(0)'>Inactive </a>");
               }else if(resp['status']== 1 ){
                    $("#product-"+product_id).html("<a href='javascript:void(0)'>Active</a>");
               }
    
    
              },error:function(){
                alert("Error");
             }
           })
    
    });





} );
