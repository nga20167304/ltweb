@extends('layout.index')

@section('css')
<style>
	#filter{
	border-right: 1px solid #e0e0e0 ;
}

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
						    <li class="breadcrumb-item active" aria-current="page">Điện thoại</li>
						  </ol>
						</nav>
					</div>	
				</div>
			</div>
		</div>	
		<div class="container bg-white pt-3">
			<div class="row">
				<!-- bộ lọc bên trái -->
				<div id="filter" class="col-md-3">
					<form action="boloc/phone" method="POST">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<h3>Bộ lọc</h3>
						<hr>
						<h5>Hãng sản xuất</h5>
						<div class="form-check pl-5">
						  <input class="form-check-input" type="checkbox" name="brands[]" id="inlineCheckbox1" value="apple" >
						  <label class="form-check-label" for="inlineCheckbox1">Apple</label>
						</div>
						<div class="form-check  pl-5">
						  <input class="form-check-input" type="checkbox" name="brands[]" id="inlineCheckbox2" value="samsung" >
						  <label class="form-check-label" for="inlineCheckbox2">Samsung</label>
						</div>
						<div class="form-check  pl-5">
						  <input class="form-check-input" type="checkbox" name="brands[]" id="inlineCheckbox3" value="oppo" >
						  <label class="form-check-label" for="inlineCheckbox3">Oppo</label>
						</div>
						<div class="form-check  pl-5">
						  <input class="form-check-input" type="checkbox" name="brands[]" id="inlineCheckbox4" value="sony" >
						  <label class="form-check-label" for="inlineCheckbox4">Sony</label>
						</div>
						<div class="form-check  pl-5">
						  <input class="form-check-input" type="checkbox" name="brands[]" id="inlineCheckbox5" value="nokia" >
						  <label class="form-check-label" for="inlineCheckbox5">Nokia</label>
						</div>
						<div class="form-check  pl-5">
						  <input class="form-check-input" type="checkbox" name="brands[]" id="inlineCheckbox6" value="htc" >
						  <label class="form-check-label" for="inlineCheckbox6">HTC</label>
						</div>
						<div class="form-check  pl-5">
						  <input class="form-check-input" type="checkbox" name="brands[]" id="inlineCheckbox7" value="xiaomi" >
						  <label class="form-check-label" for="inlineCheckbox7">Xiaomi</label>
						</div>
						<hr>
						
						<h5>Giá tiền</h5>
						<div class="form-check  pl-5">
						  <input class="form-check-input" type="radio" name="prices" id="inlineCheckbox1" value="1000000" >
						  <label class="form-check-label" >Dưới 1 triệu</label>
						</div>
						<div class="form-check  pl-5">
						  <input class="form-check-input" type="radio" name="prices" id="inlineCheckbox2" value="3000000" >
						  <label class="form-check-label" >Từ 1 - 3 triệu</label>
						</div>
						<div class="form-check  pl-5">
						  <input class="form-check-input" type="radio" name="prices" id="inlineCheckbox3" value="6000000" >
						  <label class="form-check-label" >Từ 3 - 6 triệu</label>
						</div>
						<div class="form-check  pl-5">
						  <input class="form-check-input" type="radio" name="prices" id="inlineCheckbox4" value="10000000" >
						  <label class="form-check-label" >Từ 6 - 10 triệu</label>
						</div>
						<div class="form-check  pl-5">
						  <input class="form-check-input" type="radio" name="prices" id="inlineCheckbox5" value="15000000" >
						  <label class="form-check-label" >Từ 10 - 15 triệu</label>
						</div>
						<div class="form-check  pl-5">
						  <input class="form-check-input" type="radio" name="prices" id="inlineCheckbox36" value="max">
						  <label class="form-check-label" >Trên 15 triệu</label>
						</div>
						<hr>

						<h5>Camera</h5>
						<div class="form-check  pl-5">
						  <input class="form-check-input" type="radio" name="camera"  value="5.0 MP" >
						  <label class="form-check-label" >5.0 MP</label>
						</div>
						<div class="form-check  pl-5">
						  <input class="form-check-input" type="radio" name="camera"  value="7.0 MP" >
						  <label class="form-check-label" >7.0 MP</label>
						</div>
						<div class="form-check  pl-5">
						  <input class="form-check-input" type="radio" name="camera"  value="8.0 MP" >
						  <label class="form-check-label" >8.0 MP</label>
						</div>
						<div class="form-check  pl-5">
						  <input class="form-check-input" type="radio" name="camera"  value="10.0 MP" >
						  <label class="form-check-label" >10.0 MP</label>
						</div>
						<div class="form-check  pl-5">
						  <input class="form-check-input" type="radio" name="camera"  value="12.0 MP" >
						  <label class="form-check-label" >12.0 MP</label>
						</div>
						<hr>

						<h5>Ram</h5>
						<div class="form-check  pl-5">
						  <input class="form-check-input" type="radio" name="ram"  value="1 GB" >
						  <label class="form-check-label" >1 GB</label>
						</div>
						<div class="form-check  pl-5">
						  <input class="form-check-input" type="radio" name="ram"  value="2 GB" >
						  <label class="form-check-label" >2 GB</label>
						</div>
						<div class="form-check  pl-5">
						  <input class="form-check-input" type="radio" name="ram"  value="3 GB" >
						  <label class="form-check-label" >3 GB</label>
						</div>
						<div class="form-check  pl-5">
						  <input class="form-check-input" type="radio" name="ram"  value="4 GB" >
						  <label class="form-check-label" >4 GB</label>
						</div>
						<div class="form-check  pl-5">
						  <input class="form-check-input" type="radio" name="ram"  value="5 GB" >
						  <label class="form-check-label" >5 GB</label>
						</div>
						<div class="form-check  pl-5">
						  <input class="form-check-input" type="radio" name="ram"  value="6 GB">
						  <label class="form-check-label" >6 GB</label>
						</div>
						<hr>
						<button type="submit" class="btn btn-primary"> Lọc</button>
					</form>

				</div> <!-- bộ lọc bên trái -->
				<!-- sản phẩm bên phải -->
				<div class="col-md-9 bg-white">
					<div class="row">
						<div class="col-md-8">
							<h3 class="float-left">Điện thoại</h3>	
							<p class="text-muted float-left mx-2 my-2 ">{{count(session('phoneList'))}} sản phẩm</p>
						</div>
						
					</div>
					<hr>
					@if(session('phoneList'))
					@foreach (session('phoneList') as $phone )
					<div class="row">
						<div class="col-md-4 text-center">
							<img src="resources/item/{{$phone->phone_id}}_0.jpg" class="w-100" >
						</div>
						<div class="col-md-8">
							<h4><a href="chitiet/{{$phone->product_id}}">{{$phone->product_name}}</a></h4>
							<h5 class="mb-5"><strong>{{number_format($phone->price,0,',','.')}} vnđ</strong></h5>
							<div class="row" id="thong-so">
								<div class="col-md-6">
									<p><strong>Màn hình:</strong>{{$phone->man_hinh}}</p>
									<p><strong>Pin</strong>{{$phone->pin}}</p>
									<p><strong>CPU:</strong>{{$phone->cpu}}</p>
								</div>
							</div>
							<div class="row mr-2" id="discount">
								<p class=" my-2 mx-2">Đặt hàng online nhận ngay phần thưởng hấp dẫn</p>
							</div>
						</div>
					</div>
					<hr>
					@endforeach

					@endif
					<!-- thanh chỉ số trang -->
					
				</div> <!-- sản phẩm bên phải -->	
			</div> 	
		</div>
@endsection
