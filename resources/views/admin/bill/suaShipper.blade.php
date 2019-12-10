@extends('admin.layout.index') 
@section('content')
   <!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Shipper 
                    <small>Edit</small>
                </h1>
                @if(@session('thongbao'))
                    <div class="alert alert-success">
                        {{@session('thongbao')}}
                    </div>
                @endif
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
               <form action="admin/bill/unpaid/editShipper/{{$bill->id}}" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label for="shipper">Shipper</label>
                        <select name="shipper" class="form-control" id="shipper">
                            @foreach($shipperList as $shipper)
                            @if($shipper->id == $bill->shipper_id)
                                <option selected value="{{$shipper->id}}">{{$shipper->name}}(id : {{$shipper->id}})</option>
                            @else
                                <option value="{{$shipper->id}}">{{$shipper->name}}(id : {{$shipper->id}})</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-default">Sửa</button>
                    <a type="button" class="btn btn-default" href="admin/bill/chuagiao">Quay lại</a>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

@endsection