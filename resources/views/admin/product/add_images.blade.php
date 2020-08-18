@extends('admin.master')
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Image Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Image Product</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!--- add form ------>
      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Image</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             <form class="form-horizontal style-form" enctype="multipart/form-data" action="{{url('/add_images/'.$product->id)}}" method="post">
                        @if(session('message'))
                        <p class="alert alert-success">{{session('message')}}</p>
                        @endif
                  @csrf                        

                
                <div class="card-body">
                         <input type="hidden" name="product_id" value="{{$product->id}}">

                  <div class="form-group">
                    <label>product_name</label>
                    <input type="text" name="product_name" class="form-control" readonly=""  placeholder="{{$product->product_name}}">
                  </div>
                  <div class="form-group">
                    <label>product_code</label>
                    <input type="text" name="product_code" class="form-control" readonly="" placeholder="{{$product->product_code}}">
                  </div>
                  
                  <div class="form-group">
                    <label>File input</label>
                    <input type="file" name="image"  class="form-control" multiple="multiple" >
                    
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            <!--- end form------>
            
          </section>


           <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Image</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                                  

                
                <div class="card-body">
                  <table class="table table-striped table-advance table-hover" id="dataTable">
                            
                            
                            <hr>
                              <thead>
                               
                                  
                                  <th>#</th>
                                  <th> Product Name</th>
                                  <th> Image Code</th>
                                  <th></i> Action</th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php $i=1; ?>
                                @foreach($product_images as $product_image)
                              <tr>
                                  
                                  <td>{{$i++}}</td>
                                  <td >{{$product_image->product_id}}</td>
                                  <td>
                                    @if(!empty($product_image->image))
                                    <img src="{{asset('/upload/product/productimages/'.$product_image->image)}}" style="width: 60px;">
                                    @endif
                                  </td>
                                  
                                  
                                  <td>
                                      <a rel="{{$product_image->id}}" rel1="delete_images" href="javascript:" class="btn btn-danger btn-xs deleteRecord"><i class="fa fa-trash-o "></i></a>&nbsp;&nbsp;
                                    
                                     &nbsp;&nbsp;
                                  </td>
                              </tr>
                                     @endforeach

                             
                              </tbody>
                          </table>





                         
              </form>
            </div>
            <!-- /.card -->
            <!--- end form------>
            
          </section>

          
        </div>


</div><!--content-wrapper end--->






@endsection






