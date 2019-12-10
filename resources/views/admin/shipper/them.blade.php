 @extends('admin.layout.index')

 @section('content')
  <!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Shipper
                    <small>Add</small>
                </h1>
                @if(@session('thongbao'))
                    <div class="alert alert-success">
                        {{@session('thongbao')}}
                    </div>
                @endif
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="admin/shipper/them" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label for="name">Họ và tên</label>
                        <input class="form-control" id="name" name="name" placeholder="Điền tên shipper" required/>
                    </div>
                    <div class="form-group">
                        <label for="address">Địa chỉ</label>
                        <input class="form-control" id="address" name="address" placeholder="Điền địa chỉ" required/>
                    </div>
                    <div class="form-group">
                        <label for="phone">Số điện thoại</label>
                        <input class="form-control" id="phone" name="phone" placeholder="Điền số điện thoại" required/>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Điền email" required/>
                    </div>
                    <button type="submit" class="btn btn-default">Thêm</button>
                    <button type="reset" class="btn btn-default">Làm mới</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

@endsection