@extends('admin.master')
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">View Students</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">View Students</li>
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
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Url</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                 @foreach($banners as $banner)
                 <tr>
                 <td>{{$banner->id}}</td>
                 <td>{{$banner->title}}</td> 
                 <td>{{$banner->url}}</td>
                 <td>
                      @if(!empty($banner->image))
                      <img src="{{asset('/upload/banner/'.$banner->image)}}" style="width: 60px;">
                          @endif
                 </td>
                 <td>
                  <button class="btn btn-info">View</button>
                  <button class="btn btn-info">Edit</button>
                  <button class="btn btn-info">Delete</button>
                </td>
                </tr>
                @endforeach
                
                </tbody>
                
              </table>
            </div>
            <!-- /.card-body -->
          </div>





       <!---table end--->     

</div>




@endsection