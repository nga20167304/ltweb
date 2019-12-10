@extends('admin.layout.index')

@section('content')

   <!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Product
                    <small>List</small>
                </h1>
                 @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                @endif
             
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Giá</th>
                        <th>Khuyến mãi(%)</th>
                        <th>Số lượng</th>
                        <th>Số ảnh</th>
                        <th>Lượt xem</th>
                        <th>xóa</th>
                        <th>Sửa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($product as $pr)
                    <tr class="odd gradeX" align="center">
                        <td>{{$pr->id}}</td>
                        <td>{{$pr->product_name}}</td>
                        <td>{{$pr->price}}</td>
                        <td>{{$pr->discount}}</td>
                        <td>{{$pr->so_luong}}</td>
                        <td>{{$pr->number_image}}</td>
                        <td>{{$pr->view}}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/product/xoa/{{$pr->id}}" onclick="return confirm('Bạn có chắc chắn muốn xóa {{$pr->product_name}}?');">Xóa</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/product/sua/{{$pr->id}}">Sửa</a></td>
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