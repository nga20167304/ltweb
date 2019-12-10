<?php
use App\Phone;
use App\Product;
use App\Laptop;
use App\Tablet;
?>
@extends('layout.index')

@section('css')
<style>
a:hover{
	text-decoration: none;
}

#thong-so{
	font-size: 14px; 
}
#discount{
	border: 1px dashed rgb(191, 191, 191);

}
</style>
@endsection
@section('content')

<div id="content">
			<div class="container ">
				<div class="row my-2">
					<div class="col-md-12 px-0">
						<nav aria-label=" breadcrumb">
						  <ol class="breadcrumb ">
						  	<li class="breadcrumb-item"><a href="#">Home</a></li>
						    <li class="breadcrumb-item active" aria-current="page">Tìm kiếm</li>
						  </ol>
						</nav>
					</div>	
				</div>
			</div>
</div>	
<div class="container bg-white pt-3">
	<div class="row">
		<!-- bộ lọc bên trái -->
		<!-- sản phẩm bên phải -->
		<div class="col-md-12 bg-white">
			<div class="row">
				<div class="col-md-8">
					<h3 class="float-left">Kết quả tìm kiếm cho "{{$tukhoa}}"</h3>	
				</div>
				{{--<div class="col-md-4">
					<select name="sort" class="form-control ">
						<option selected >Giá cao đến thấp</option>
						<option  >Giá thấp đến cao</option>
						<option  >Bán chạy nhất</option>
						<option  >Xem nhiều nhất</option>
					</select>
				</div>--}}
			</div>
			<hr>
			<!-- sản phẩm -->
			<!-- laptop -->
			@foreach($laptop as $lt)
			<?php
				$prd = $lt->product;
			?>
			<div class="row">
				<div class="col-md-4 text-center">
					<?php 
						
						if (file_exists("resources/item/".$prd->id."_0.jpg")) {
							$imgtype = '.jpg';
						}
						
						else {
							$imgtype = '.png';
						}
						
					?>
					<img src="resources/item/{{$prd->id.'_0'.$imgtype}}" class="w-100">
				</div>
				<div class="col-md-8">
					<h4><a href="chitiet/{{$prd->id}}">{{$prd->product_name}}</a></h4>
					<h5 class="mb-5"><strong>{{$prd->price}}</strong></h5>
					<div class="row" id="thong-so">
						<div class="col-md-6">
							<p><strong>Màn hình:</strong>{{ $lt->man_hinh}} </p>
							<p><strong>Pin:</strong>  {{ $lt->pin}}</p>
							<p><strong>CPU:</strong> {{ $lt->cpu}}</p>
							<p><strong>RAM:</strong> {{ $lt->ram}}</p>
							<p><strong>Hệ điều hành:</strong> {{ $lt->he_dieu_hanh}}</p>

						</div>
						
					</div>
					@if($prd->discount > 0)
					<div class="row mr-2" id="discount">
						<p class=" my-2 mx-2">Đặt hàng online nhận ngay khuyến mãi {{$prd->discount}}%</p>
					</div>
					@endif
				</div>
			</div>
			
			<hr>
			@endforeach

			<!-- phone -->
			@foreach($phone as $lt)
			<?php
				$prd = $lt->product;
			?>
			<div class="row">
				<div class="col-md-4 text-center">
					<?php 
						
						if (file_exists("resources/item/".$prd->id."_0.jpg")) {
							$imgtype = '.jpg';
						}
						
						else {
							$imgtype = '.png';
						}
						
					?>
					<img src="resources/item/{{$prd->id.'_0'.$imgtype}}" class="w-100">
				</div>
				<div class="col-md-8">
					<h4><a href="#">{{$prd->product_name}}</a></h4>
					<h5 class="mb-5"><strong>{{$prd->price}}</strong></h5>
					<div class="row" id="thong-so">
						<div class="col-md-6">
							<p><strong>Màn hình:</strong>{{ $lt->man_hinh}} </p>
							<p><strong>Pin:</strong>  {{ $lt->pin}}</p>
							<p><strong>CPU:</strong> {{ $lt->cpu}}</p>
							<p><strong>RAM:</strong> {{ $lt->ram}}</p>
							<p><strong>Hệ điều hành:</strong> {{ $lt->he_dieu_hanh}}</p>

						</div>
						
					</div>
					@if($prd->discount > 0)
					<div class="row mr-2" id="discount">
						<p class=" my-2 mx-2">Đặt hàng online nhận ngay khuyến mãi {{$prd->discount}}%</p>
					</div>
					@endif
				</div>
			</div>
			
			<hr>
			@endforeach

			<!-- tablet -->
			@foreach($tablet as $lt)
			<?php
				$prd = $lt->product;
			?>
			<div class="row">
				<div class="col-md-4 text-center">
					<?php 
						
						if (file_exists("resources/item/".$prd->id."_0.jpg")) {
							$imgtype = '.jpg';
						}
						
						else {
							$imgtype = '.png';
						}
						
					?>
					<img src="resources/item/{{$prd->id.'_0'.$imgtype}}" class="w-100">
				</div>
				<div class="col-md-8">
					<h4><a href="#">{{$prd->product_name}}</a></h4>
					<h5 class="mb-5"><strong>{{$prd->price}}</strong></h5>
					<div class="row" id="thong-so">
						<div class="col-md-6">
							<p><strong>Màn hình:</strong>{{ $lt->man_hinh}} </p>
							<p><strong>Pin:</strong>  {{ $lt->pin}}</p>
							<p><strong>CPU:</strong> {{ $lt->cpu}}</p>
							<p><strong>RAM:</strong> {{ $lt->ram}}</p>
							<p><strong>Hệ điều hành:</strong> {{ $lt->he_dieu_hanh}}</p>

						</div>
						
					</div>
					@if($prd->discount > 0)
					<div class="row mr-2" id="discount">
						<p class=" my-2 mx-2">Đặt hàng online nhận ngay khuyến mãi {{$prd->discount}}%</p>
					</div>
					@endif
				</div>
			</div>
			
			<hr>
			@endforeach
			
		</div> <!-- sản phẩm bên phải -->	
	</div> 	
</div>

@endsection
