@extends('admin.master')
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">View Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">View Category</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!--table start--->

     <div class="card">
      
            
            <!-- /.card-header -->
            <div class="card-body">

              @if(session('success_message'))
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>{{session('success_message')}}</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>

          </div>
           @endif   

 <form action="{{url('/delete_multiple_products')}}" method="post">
              @csrf
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  

                <tr>
                  <tr>
                      <th>Select</th>
                      <th>category</th>
                      <th> Product Name</th>
                      <th> Product Code</th>
                      <th>Image</th>
                      <th>Action</th>
                  </tr>
                    
                </tr>
                </thead>
                <tbody>
                 @foreach($products as $product)
                 <tr>
                 <td>
                  <input type="checkbox" name="delete_id[]" value="{{$product->id}}">
                 </td>   
                 <td>{{$product->cat_id}} </td>    
                 <td >{{$product->product_name}}</td>
                 <td>{{$product->product_code}}</td>
                 <td>
                      @if(!empty($product->image))
                      <img src="{{asset('/upload/product/'.$product->image)}}" style="width: 60px;">
                          @endif
                 </td>
                 <td>
                   <a rel="{{$product->id}}" rel1="delete_products" href="{{url('/delete_products/'.$product->id)}}" class="btn btn-danger btn-xs deleteRecord"><i class="fa fa-trash-o "></i></a>


                   <a  data-toggle="modal" href="#myModal{{$product->id}}" class="btn btn-warning btn-xs "><i class="fas fa-eye"></i></a>


                   &nbsp;&nbsp;<a href="{{url('/edit_products/'.$product->id)}}"><i class="fas fa-edit"></i></a>&nbsp;&nbsp;&nbsp;<a   href="{{url('/add_images/'.$product->id)}}" class="btn btn-warning btn-xs "><i class="li_plus">Add images</i></a>
                 </td> 
                                  
                                  
                      
                  
             </tr>

             <div class="modal fade" id="myModal{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="color: #428bca;" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">{{$product->product_name}} Details</h4>
                  </div>
                  <div class="modal-body">
                    <p>Product Code:{{$product->product_code}}</p>
                    <p>Size:{{$product->size}}</p>
                    <p>Description:{{$product->description}}</p>
                    <p>Price:{{$product->price}}</p>
                    
                    <p>Quantity:{{$product->quantity}}</p>
                    <p>Featured Product:{{$product->featured_product}}</p>
                    <p>Popular Product:{{$product->popular_product}}</p>
                    <p>Latest Product:{{$product->latest_product}}</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    
                </div>
              </div>
            </div>  
          </div>
          
          @endforeach
           

                             
          </tbody>
          </table>

          <button type="submit" class="btn btn-danger">Delete Selected</button>
          </form>

             
             
                
               
            </div>
            <!-- /.card-body -->
          </div>





       <!---table end--->     

</div>


<script >
  $(".deleteRecord").click(function(){
    var id = $(this).attr('rel');
    var deleteFunction= $(this).attr('rel1');
    swal({
      title:'Are you sure?',
      text:"You wont able to revert this!",
      type:'warning',
      showCancelButton:true,
      confirmButtonColor:'#F00',
      confirmButtonText:'Yes, Delete it!',
      cancelButtonColor:'#d33',
      cancelButtonText:'No, Cancel!',
      
      buttonsSstyling:false,
      reverseButton:true
    },
    function(){
      window.location.href="/"+deleteFunction+"/"+id;
    });
  });
</script>

@endsection