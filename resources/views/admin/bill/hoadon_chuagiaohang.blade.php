@extends('admin.layout.index')

@section('content')

   <!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Bill Chưa giao hàng
                    <small>List</small>
                </h1>
                @if(session('message_success'))
                    <div class="alert alert-success">
                        {{session('message_success')}}
                    </div>
                @endif
                @if(session('message_fail'))
                    <div class="alert alert-danger">
                        {{session('message_fail')}}
                    </div>
                @endif

            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên khách hàng</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th>Địa chỉ</th>
                        <th>Ngày</th>
                        <th>Sản phẩm</th>
                        <th>Tổng tiền</th>
                        <th>Người chuyển hàng</th>
                        @if(Auth::user()->access == 2)
                        <th>Shipper</th>
                        <th>XN giao hàng</th>
                        <th>Nhắc nhở</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach($bill as $bill)
                    <tr class="odd gradeX" align="center">
                        <td>{{$bill->id}}</td>
                        @if($bill->customer->user_id != null)
                        <td>{{$bill->customer->user->name}}</td>
                        <td>{{$bill->customer->user->phone}}</td>
                        <td>{{$bill->customer->user->email}}</td>
                        <td>{{$bill->customer->user->address}}</td>
                        @else
                        <td>{{$bill->customer->name}}</td>
                        <td>{{$bill->customer->phone}}</td>
                        <td>{{$bill->customer->email}}</td>
                        <td>{{$bill->customer->address}}</td>
                        @endif
                        <td>{{$bill->date}}</td>
                        <td>
                            <?php 
                                $productList = "";
                                $totalMoney = 0 ;
                                foreach ($bill->order as $order) {
                                    $productList .= $order->product->product_name.' - sl: '.$order->so_luong. '<br>';
                                    $totalMoney += $order->product->price * $order->so_luong;
                                }
                                echo $productList;
                             ?>
                        </td>
                        <td>{{number_format($totalMoney)}}</td>
                        @if(isset($bill->shipper->name))
                        <td>{{$bill->shipper->name}}(id: {{$bill->shipper->id}})</td>
                        @else
                        <td ></td>
                        @endif
                        @if(Auth::user()->access == 2)
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> 
                            <a href="admin/bill/unpaid/editShipper/{{$bill->id}}">Shipper</a>
                        </td>
                        <td><i class="fa fa-check-circle-o fa-fw  " aria-hidden="true"></i><a href="admin/bill/chuagiao/xngh/{{$bill->id}}" onclick="return confirm('Xác nhận hóa đơn đang được giao?')">Xác nhận</a></td>
                        <td><i class="fa fa-bell-o fa-fw" aria-hidden="true"></i><a href="admin/bill/nhaclayhang" onclick="return confirm('Gửi lời nhắc có đơn hàng cần chuyển đến shipper?')">Nhắc nhở</a></td>
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