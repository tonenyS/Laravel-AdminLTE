$(document).ready(function(){
   $('.deleteForm').click(function(evt){
       var projecct=$(this).data("projecct");
       var form=$(this).closest("form");
       evt.preventDefault();
       swal({
           title: `Do you want to delete !?`,
           text:"Are you sure you want to delete it permanently ?",
           icon:"warning",
           buttons:true,
           dangerMode:true
       }).then((willDelete)=>{
           if(willDelete){
            form.submit();
           }
       });
   });
});
