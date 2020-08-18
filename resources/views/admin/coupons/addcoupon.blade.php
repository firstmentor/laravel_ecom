@extends('admin.master')
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Coupon</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Coupon</li>
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
                <h3 class="card-title">Coupon
                 </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form class="form-horizontal style-form" enctype="multipart/form-data" action="{{url('/add_coupon')}}" method="post">
                        @if(session('message'))
                        <p class="alert alert-success">{{session('message')}}</p>
                        @endif
                         
              	@csrf
                <div class="card-body">

                  <div class="form-group">
                    <label>Coupon Code</label>
                    <input type="text" class="form-control" placeholder="" name="coupon_code" id="product_name" required>
                  </div>

                  <div class="form-group">
                    <label>Amount</label>
                    <input type="text" class="form-control" placeholder="" name="amount" id="product_code" required>
                  </div>

                  <div class="form-group">
                    <label>Amount Type</label>
                    <select name="amount_type" id="" class="form-control">
                      <option value="Percentage">Percentage</option>
                      <option value="Fixed">Fixed</option>
                    </select>
                  </div>
                   
                  
                   <!-- https://jqueryui.com/datepicker/ -->

                  

                  <div class="form-group">
                    <label>Expiry Date</label>
                    <input type="date" class="form-control" placeholder="" name="expiry_date" id="datepicker" required>
                  </div>
                  

                    
                  
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add Coupon</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            <!--- end form------>
            
          </section>
        </div>


</div><!--content-wrapper end--->




@endsection