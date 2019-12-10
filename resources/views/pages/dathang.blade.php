@extends('layout.index')

@section('content')

<div id="content">
	<div class="container ">
		<div class="row my-2">
			<div class="col-md-12 px-0">
				<nav aria-label=" breadcrumb">
				  <ol class="breadcrumb ">
				  	<li class="breadcrumb-item"><a href="#">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Đặt hàng</li>
				  </ol>
				</nav>
			</div>	
		</div>
	</div>
</div>	


<div class="container bg-white">
	@if(session("thongbao1"))
		<div class="alert-danger">
			{{session("thongbao1")}}
		</div>
	@elseif(session("thongbao2"))
		<div class="alert-success">
			{{session("thongbao2")}}
		</div>
	@else
	<form action="dathang" method="POST"  class="px-5 py-5" >
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		@if(Auth::user())
		<div class="form-group row">
			<label for="hoten" class="col-md-2"><strong>Họ và tên</strong></label>
			<input type="text" class="form-control col-md-10" id="hoten" name="name" disabled="" placeholder="Nhập họ và tên" value="{{Auth::user()->name}}">
		</div>
		
		<div class="form-group row">
			<label for="phone" class="col-md-2"><strong>Số điện thoại</strong></label>
			<input type="text" class="form-control col-md-10" id="phone" name="phone" disabled="" placeholder="Nhập số điện thoại" value="{{Auth::user()->phone}}">
		</div>


		<div class="form-group row">
			<label for="email" class="col-md-2"><strong>Email</strong></label>
			<input type="text" class="form-control col-md-10" id="email" name="email" disabled="" placeholder="name@example.com" value="{{Auth::user()->email}}">
		</div>

		<div class="form-group row">
			<label for="diachi" class="col-md-2"><strong>Địa chỉ</strong></label>
			<input type="text" class="form-control col-md-10" id="diachi" name="address" disabled="" placeholder="Nhập địa chỉ số nhà,đường,xã,quận,tỉnh/thành phố" value="{{Auth::user()->address}}">
		</div>
		@else
		<div class="form-group row">
			<label for="hoten" class="col-md-2"><strong>Họ và tên</strong></label>
			<input type="text" class="form-control col-md-10" id="hoten" name="name" required="" placeholder="Nhập họ và tên">
		</div>
		
		<div class="form-group row">
			<label for="phone" class="col-md-2"><strong>Số điện thoại</strong></label>
			<input type="text" class="form-control col-md-10" id="phone" name="phone" required="" placeholder="Nhập số điện thoại">
		</div>


		<div class="form-group row">
			<label for="email" class="col-md-2"><strong>Email</strong></label>
			<input type="text" class="form-control col-md-10" id="email" name="email" required="" placeholder="name@example.com">
		</div>

		<div class="form-group row">
			<label for="diachi" class="col-md-2"><strong>Địa chỉ</strong></label>
			<input type="text" class="form-control col-md-10" id="diachi" name="address" required="" placeholder="Nhập địa chỉ số nhà,đường,xã,quận,tỉnh/thành phố">
		</div>
		@endif
		@if(session("cart"))
		<div class="form-group row">
			<p class=" col-md-2"><strong>Sản phẩm:</strong> </p>
			<p class=" col-md-10">
			<?php 
				$items = session("cart")->items;
				$productList = array();
				foreach ($items as $item) {
					$productList[] = $item["product"]->product_name;
				}
				echo implode(' , ', $productList); 
			?> 
			</p>
		</div>
		
		<div class="form-group row">
			<p class=" col-md-2"><strong>Tổng tiền:</strong> </p>
			<p class=" col-md-10"> {{number_format(session("cart")->totalPrice(),0,",",".")}} vnđ</p>
		</div>
		<button type="submit" class="btn btn-success float-right">Đặt hàng</button>
		@else
		<div class="form-group row">
			<p class=" col-md-2"><strong>Sản phẩm:</strong> </p>
			<p class=" col-md-10"></p>
		</div>
		
		<div class="form-group row">
			<p class=" col-md-2"><strong>Tổng tiền:</strong> </p>
			<p class=" col-md-10"></p>
		</div>
		<button type="submit" disabled="" class="btn btn-success float-right">Đặt hàng</button>
		@endif
	
		
	</form>
	@endif
</div>

@endsection

@section('script')
	<script>
		$(document).ready(function(){
			$("#footer").addClass("fixed-bottom");
		});
		
	</script>

@endsection