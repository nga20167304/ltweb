@extends('admin.layout.index') 
@section('content')
   <!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Shipper
                    <small>{{$shipper->name}}</small>
                </h1>
                @if(@session('thongbao'))
                    <div class="alert alert-success">
                        {{@session('thongbao')}}
                    </div>
                @endif
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
               <form action="admin/shipper/sua/{{$shipper->id}}" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label for="name">Họ và tên</label>
                        <input class="form-control" id="name" name="name" placeholder="Điền tên shipper" value="{{$shipper->name}}"  required/>
                    </div>
                    <div class="form-group">
                        <label for="address">Địa chỉ</label>
                        <input class="form-control" id="address" name="address" placeholder="Điền địa chỉ" value="{{$shipper->address}}" required/>
                    </div>
                    <div class="form-group">
                        <label for="phone">Số điện thoại</label>
                        <input class="form-control" id="phone" name="phone" placeholder="Điền số điện thoại" value="{{$shipper->phone}}" required/>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Điền email" value="{{$shipper->email}}" required/>
                    </div>
                    <button type="submit" class="btn btn-default">Sửa</button>
                    <a type="button" class="btn btn-default" href="admin/shipper/danhsach">Quay lại</a>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

@endsection