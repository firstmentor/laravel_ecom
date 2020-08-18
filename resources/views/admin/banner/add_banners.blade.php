@extends('admin.master')
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Banner</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Banner</li>
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
                <h3 class="card-title">Banner </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form class="form-horizontal style-form" enctype="multipart/form-data" action="{{url('add_banners')}}" method="post">
                        @if(session('message'))
                        <p class="alert alert-success">{{session('message')}}</p>
                        @endif
                         
              	@csrf
                <div class="card-body">
                  <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control"  placeholder="Enter Title">
                  </div>
                   
                  <div class="form-group">
                    <label>Url</label>
                    <input type="text" name="url" class="form-control"  placeholder="url">
                  </div>

                  <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control"  placeholder="image">
                  </div>
                  

                    
                  
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add Banner</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            <!--- end form------>
            
          </section>
        </div>


</div><!--content-wrapper end--->




@endsection