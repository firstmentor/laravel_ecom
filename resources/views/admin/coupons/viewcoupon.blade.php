@extends('admin.master')
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">View Coupon</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">View Coupon</li>
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
                  <th>Coupon Code</th>
                  <th>Amount</th>
                  <th>Amount Type</th>
                  <th>Expiry Date</th>
                  <th>Created Date</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                 
                                     @foreach($coupons as $coupon)

                                        <tr>
                                       <td>{{$coupon->id}}</td>
                                      <td>{{$coupon->coupon_code}}</td>
                                       <td>
                                          {{$coupon->amount}}
                                          @if($coupon->amount_type=="Percentage") % @else PKR @endif
                                       </td>

                                      <td>{{$coupon->amount_type}}</td>
                                       <td>{{$coupon->expiry_date}}</td>
                                       <td>{{$coupon->created_at}}</td>  
                                       <td>    
                                          

                                          <input type="checkbox" class="CouponStatus btn btn-success" rel="{{$coupon->id}}"
                                          data-toggle="toggle" data-on="Enabled" data-off="Disabled" data-onstyle="success" data-offstyle="danger"
                                          @if($coupon['status']== "1") checked @endif>
                                          <div id="myElem" style="display: none;" class="alert alert-success">Status enabled</div>
                                       </td>
                                      
                                       <td>
                                         
                                          <a href="{{url('admin/edit_coupon/' .$coupon->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                          <a href="{{url('admin/delete_coupon/' .$coupon->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>

                                         
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