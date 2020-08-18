$(document).on('click','.category_status',function(){
   var id=$(this).attr('data-id');
   alert(id);
   // $.get(Base_Url+'/admin/category_status/'+id,function(fb){  //ajex call
   //    alert('status successfully changed');
   //   // alert(fb)
   // })

});