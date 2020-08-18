@extends('admin.master')
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Product</li>
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
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  action="{{url('/add_product')}}" method="post" enctype="multipart/form-data">
                            @csrf

                
                <div class="card-body">
                  <div class="form-group">
                    <label>Category</label>
                     <select name="cat_id" id="cat_id" class="form-control">
                     <option value="0"> Category</option>
                     @foreach($categories as $cat)
                     <option value="{{$cat->id}}">{{$cat->name}}</option>
                     @endforeach

                    </select>
                  </div>
                  <div class="form-group">
                    <label>product_name</label>
                    <input type="text" name="product_name" class="form-control"  placeholder="">
                  </div>
                  <div class="form-group">
                    <label>product_code</label>
                    <input type="text" name="product_code" class="form-control"  placeholder="product_code">
                  </div>
                  <div class="form-group">
                    <label>description</label>
                    <input type="text" name="description" class="form-control"  placeholder="description">
                  </div>
                  
                  <div class="form-group">
                    <label>price</label>
                    <input type="text" class="form-control"  placeholder="Password" name="price">
                  </div>
                  <div class="form-group">
                    <label>quantity</label>
                    <input type="text" class="form-control"  placeholder="Password" name="quantity">
                  </div>
                  <div class="form-group">
                    <label>featured_product</label>
                     <select  name="featured_product" id="f_product" class="form-control" >
                          <option value="0">Select </option>
                          
                           <option value="1">Yes</option>
                           <option value="0">No</option>
                         
                        </select>
                  </div>
                  <div class="form-group">
                    <label>Select for Popular Product</label>
                     <select  name="popular_product" id="f_product" class="form-control" >
                          <option value="0">Select </option>
                          
                           <option value="1">Yes</option>
                           <option value="0">No</option>
                         
                        </select>
                  </div>
                  <div class="form-group">
                    <label>Select for Latest Product</label>
                     <select  name="latest_product" id="f_product" class="form-control" >
                          <option value="0">Select </option>
                          
                           <option value="1">Yes</option>
                           <option value="0">No</option>
                         
                        </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                  
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
        </div>


</div><!--content-wrapper end--->




@endsection