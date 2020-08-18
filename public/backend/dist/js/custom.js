 

 //category_status

 $(document).on('click','.category_status',function(){
   var id=$(this).attr('data-id');
   //alert(id);
   $.get(Base_Url+'/category_status/'+id,function(a){  //ajex call
      alert('status successfully changed');
      //alert(a)
  })

});

