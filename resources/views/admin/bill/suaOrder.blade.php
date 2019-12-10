@extends('admin.layout.index') 
@section('content')
   <!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Order 
                    <small>{{$order->product->product_name}}</small>
                </h1>
                @if(@session('thongbao'))
                    <div class="alert alert-success">
                        {{@session('thongbao')}}
                    </div>
                @endif
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
               <form action="admin/bill/order/sua/{{$order->id}}" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label for="so_luong">Số lượng</label>
                        <input type="number" class="form-control" id="so_luong" name="so_luong" placeholder="Điền tên shipper" value="{{$order->so_luong}}"  required/>
                    </div>
                    <button type="submit" class="btn btn-default">Sửa</button>
                    <a type="button" class="btn btn-default" href="admin/bill/unpaid/editOrder/{{$order->bill_id}}">Quay lại</a>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

@endsection