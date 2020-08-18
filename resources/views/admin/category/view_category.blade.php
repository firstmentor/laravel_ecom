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
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Category Name</th>
                  <th>Parent Id</th>
                  <th>Url</th>
                  <th>description</th>
                  <th>Status</th>
                  <th>Action</th>
                    
                </tr>
                </thead>
                <tbody>
                 @foreach($categories as $key =>$category)
                 <tr>
                <td><?php echo $key+1 ?></td>
                 <td>{{$category->name}}</td>
                 <td>{{$category->parent_id}}</td>
                 <td>{{$category->category_url}}</td>
                 <td>{{$category->description}}</td>
                                      
                                       
                 <td>
                  <input type="checkbox" class="category_status" data-id="<?php echo $category['id'] ?>" <?php if($category['status']==1) {echo "checked";} ?> name="status"></td>
                    </td>
                 <td>
                   <a href="{{url('edit_category/'.$category->id)}}" class="btn btn-add btn-sm">Edit</button>
                   <a href="{{url('delete_category/'.$category->id)}}" type="button" class="btn btn-danger btn-sm">Delete </button>
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

