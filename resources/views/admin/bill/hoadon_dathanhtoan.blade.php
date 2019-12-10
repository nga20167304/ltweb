@extends('admin.layout.index')

@section('content')

   <!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Bill Paid
                    <small>List</small>
                </h1>
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
                        <td >{{$bill->shipper->name}}(id: {{$bill->shipper->id}})</td>
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