@extends('admin.layout.index')

@section('content')

   <!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Order list<small> of bill {{$bill->id}}</small>
                  @if($bill->status == -1)
                  <a href="admin/bill/chuaxacnhan" type="button" class="btn btn-primary pull-right">Quay lại</a>
                  @else
                  <a href="admin/bill/unpaid" type="button" class="btn btn-primary pull-right">Quay lại</a>
                  @endif
                </h1>
               
                   @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                @endif


            </div>
            <div class="row">
              <div class="col-lg-12">
                 
              </div>
             
            </div>
             
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Tành tiền</th>
                        <th>Xóa</th>
                        <th>Sửa</th>
                    </tr>
                </thead>
                <tbody>
                      @foreach($bill->order as $order)
                      <tr class="odd gradeX" align="center">
                          <td>{{$order->product_id}}</td>
                          <td>{{$order->product->product_name}}</td>
                          <td>{{$order->so_luong}}</td>
                          <td>
                            <?php 
                                $total = $order->product->price * $order->so_luong;
                                echo number_format($total). " đ"; 
                             ?>
                          </td>
                          <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/bill/order/xoa/{{$order->id}}" onclick="return confirm('Bạn chắc chắn muốn xóa order {{$order->id}} ?')"> Xóa</a></td>
                          <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/bill/order/sua/{{$order->id}}">Sửa</a></td>
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