@extends('admin.master')
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Category</li>
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
                <h3 class="card-title">Category </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form method="post" action="{{url('/add_category')}}">
              	@csrf
                <div class="card-body">
                  <div class="form-group">
                    <label>Category Name</label>
                    <input type="text" name="name" class="form-control"  placeholder="Enter Category Name">
                  </div>
                   <div class="form-group">
                    <label>Parent Category</label>

                    <select name="parent_id" id="parent_id" class="form-control">
                     <option value="0">Parent Category</option>
                     @foreach($levels as $val)
                     <option value="{{$val->id}}">{{$val->name}}</option>
                     @endforeach

                    </select>
                  </div>
                  <div class="form-group">
                    <label>category_url</label>
                    <input type="text" name="category_url" class="form-control"  placeholder="category_url">
                  </div>
                  <div class="form-group">
                    <label>description</label>
                    <input type="text" name="description" class="form-control"  placeholder="description">
                  </div>
                 

                    
                  
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add Category</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            <!--- end form------>
            
          </section>
        </div>


</div><!--content-wrapper end--->




@endsection