 @extends('admin.layout.index')

 @section('content')
  <!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User
                    <small>Add</small>
                </h1>
                @if(@session('thongbao'))
                   <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                @endif
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="admin/user/them" method="POST" enctype="multipart/form-data" >
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label for="name">Họ và tên</label>
                        <input class="form-control" name="name" id="name" placeholder="Nhập họ tên user" required />
                    </div>
                    <div class="form-group">
                        <label for="birthday">Ngày sinh</label>
                        <input class="form-control" id="birthday" name="birthday" type="date" />
                    </div>
                    <div class="form-group">
                        <label id="sex">Giới tính</label>
                        <select class="form-control" name="sex" id="sex">
                            <option value="Nam">Nam</option>
                            <option value="Nữ">Nữ</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="example@email.com" required/>
                    </div>
                    <div class="form-group">
                        <label for="phone">Số điện thoại</label>
                        <input class="form-control" name="phone" id="phone" placeholder="Nhập số điện thoại user" required/>
                    </div>
                    <div class="form-group">
                        <label for="address">Địa chỉ</label>
                        <input class="form-control" name="address" id="address" placeholder="Nhập địa chỉ user" required/>
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input class="form-control" name="username" id="username" placeholder="Nhập username" required/>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control" name="password" id="password" placeholder="password" required/>
                    </div>
                    <div class="form-group">
                        <label >Quyền</label>
                        <label class="radio-inline">
                            <input name="access" value="0" checked="" type="radio">User
                        </label>
                        <label class="radio-inline">
                            <input name="access" value="1" type="radio">Admin
                        </label>
                        <label class="radio-inline">
                            <input name="access" value="2" type="radio">Stockkeeper
                        </label>
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