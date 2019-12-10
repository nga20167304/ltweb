@extends('admin.layout.index')

@section('content')

   <!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Shipper
                    <small>List</small>
                </h1>
                @if(@session('thongbao'))
                    <div class="alert alert-success">
                        {{@session('thongbao')}}
                    </div>
                
                @endif
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th>Đơn yêu cầu</th>
                        <th>Đơn đang chuyển</th>
                        @if(Auth::user()->access == 1)
                        <th>Delete</th>
                        <th>Edit</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach($shipper as $sp)
                    <tr class="odd gradeX" align="center">
                        <td>{{$sp->id}}</td>
                        <td>{{$sp->name}}</td>
                        <td>{{$sp->address}}</td>
                        <td>{{$sp->phone}}</td>
                        <td>{{$sp->email}}</td>

                        <?php 
                            $flagDangChuyen = false;
                            $flagYeuCau = false;
                            foreach ($sp->bill as $bill) {
                                if($bill->status == 1){
                                    $flagDangChuyen= true;
                                }else if($bill->status == 0){
                                    $flagYeuCau = true;
                                }
                            }
                        ?>
                        @if($flagYeuCau == true)
                        <td><a  type="button" class="btn btn-success" href="admin/shipper/chonhan/{{$sp->id}}">Đơn yêu cầu</a></td>
                        @else
                        <td><a  type="button" class="btn btn-success disabled" href="admin/shipper/chonhan/{{$sp->id}}">Đơn yêu cầu</a></td>
                        @endif
                        @if($flagDangChuyen == true)
                        <td><a type="button"  class="btn btn-danger" href="admin/shipper/dangchuyen/{{$sp->id}}">Đang chuyển</a></td>
                        @else
                         <td><a type="button"  class="btn btn-danger disabled" href="admin/shipper/dangchuyen/{{$sp->id}}">Đang chuyển</a></td>
                        @endif
                        @if(Auth::user()->access == 1)
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/shipper/xoa/{{$sp->id}}" onclick="return confirm('Bạn có chắc chắn muốn xóa {{$sp->name}}?');"> Xóa</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/shipper/sua/{{$sp->id}}">Sửa</a></td>
                        @endif
                    </tr>

                    @endforeach
                </tbody>
            </table>
            
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

@endsection

@section('script')


@endsection