 @extends('admin.layout.index')

 @section('content')
  <!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Product
                    <small>{{$product->product_name}}</small>
                </h1>
                   @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                @endif
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="admin/product/sua/{{$product->id}}" method="POST" enctype="multipart/form-data" ">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label for="gia">Giá</label>
                        <input type="number" class="form-control" id="gia" name="price" value="{{$product->price}}" required/>
                    </div>
                    <div class="form-group">
                        <label for="khuyenMai" >Khuyến mãi(%)</label>
                        <input type="number" class="form-control" id="khuyenMai"  name="discount" value="{{$product->discount}}" />
                    </div>
                    <div class="form-group">
                        <label for="hinhAnh">Thêm ảnh</label>
                        <input type="file" class="form-control" id="hinhAnh" name="images[]" multiple="multiple" >
                    </div>
                    
                    <div class="form-group">
                        <label for="soLuong">Số lượng</label>
                        <input type="number" class="form-control" id="soLuong" name="so_luong" value="{{$product->so_luong}}" required/>
                    </div>

                    <button type="submit" class="btn btn-default">Xác nhận</button>
                    <a type="button" class="btn btn-default" href="admin/product/danhsach">Quay lại</a>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

@endsection

