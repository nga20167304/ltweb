 @extends('admin.layout.index')

 @section('content')
  <!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Product
                    <small>Add</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                @endif
                <form action="admin/product/them" method="POST" enctype="multipart/form-data" >
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label for="loaiSanPham">Loại sản phẩm</label>
                        <select class="form-control" name="loaiSanPham" id="loaiSanPham">
                          <option value="1">Laptop</option>
                          <option value="2">Phone</option>
                          <option value="3">Tablet</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tenSanPham">Tên sản phẩm</label>
                        <input class="form-control" id="tenSanPham" name="product_name" placeholder="Điền tên sản phẩm" required/>
                    </div>
                    <div class="form-group">
                        <label  for="brand">Thương hiệu</label>
                        <input class="form-control" id="brand" name="brand" placeholder="Apple/Samsung/..." required/>
                    </div>
                    <div class="form-group">
                        <label for="gia">Giá</label>
                        <input type="number" class="form-control" id="gia" name="price" placeholder="VD: 20000000" required/>
                    </div>
                    <div class="form-group">
                        <label for="khuyenMai" >Khuyến mãi(%)</label>
                        <input type="number" class="form-control" id="khuyenMai"  name="discount" placeholder = "% khuyến mãi" />
                    </div>
                    <div class="form-group">
                        <label for="hinhAnh">Thêm ảnh</label>
                        <input type="file" class="form-control" id="hinhAnh" name="images[]" multiple="multiple" >
                    </div>
                    
                    <div class="form-group">
                        <label for="soLuong">Số lượng</label>
                        <input type="number" class="form-control" id="soLuong" name="so_luong" placeholder="Số lượng sản phẩm" required/>
                    </div>


                    <div class="form-group">
                        <label>Cấu hình sản phẩm: </label>
                        <label class="radio-inline">
                            <input name="rdoStatus" value="1" id="radio_khong" checked type="radio">Không
                        </label>
                        <label class="radio-inline">
                            <input name="rdoStatus" value="2" id="radio_co" type="radio">Có
                        </label>
                    </div>
                    <div id="cauhinh">
                    </div>
                    <button type="submit" class="btn btn-default">Thêm sản phẩm</button>
                    <button type="reset" class="btn btn-default">Làm mới</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

@endsection

@section('script')
<script>
    
    $(document).ready(function(){
        
        $('[name="rdoStatus"]').change(function(){
            var val = $("input:radio:checked").val();
            if(val == 2){
                 var loaiSP = $("#loaiSanPham").val();
                $.get("admin/ajax/product/"+loaiSP ,function(data){
                 $("#cauhinh").html(data);
                });
            }else{
                $("#cauhinh").html("");
            }  
        });
        $("#loaiSanPham").change(function() {
            var val = $("input:radio:checked").val();
            if(val == 2){
                var loaiSP = $("#loaiSanPham").val();
                $.get("admin/ajax/product/"+loaiSP ,function(data){
                 $("#cauhinh").html(data);
                });
            }else{
                $("#cauhinh").html("");
            }
        });
    });

</script>

@endsection