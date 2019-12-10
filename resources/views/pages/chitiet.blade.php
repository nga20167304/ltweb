@extends('layout.index')
@section('css')
<style>
	.carousel-inner > .carousel-item > img {
    margin: 0 auto;
}
.star-rating {
  line-height:32px;
  font-size:1.25em;
}

 .fa-star{color: yellow;}
</style>

@endsection

@section('content')

<div id="content">
	@if($product->laptop_id != null)
	<div class="container">
		<div class="row my-2">
			<div class="col-md-12 px-0">
				<nav aria-label=" breadcrumb">
				  <ol class="breadcrumb">
				  	<li class="breadcrumb-item"><a href="#">Home</a></li>
				    <li class="breadcrumb-item"><a href="#">Laptop</a></li>
				    <li class="breadcrumb-item"><a href="#">{{$product->laptop->brand}}</a></li>
				    <li class="breadcrumb-item active" aria-current="page">{{$product->product_name}}</li>
				  </ol>
				</nav>
			</div>	
		</div>
	</div>
	<div >
		<div class="container bg-white ">
			<div class="row">
			<div class="col-md-12 ">
				<h3 class="my-2">{{$product->product_name}}</h2>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-6 " >
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators ">
				  	@for($i=0; $i<$product->number_image; $i++)
				  	@if($i == 0)
				    <li data-target="#carouselExampleIndicators" class="bg-secondary" data-slide-to="{{$i}}" class="active"></li>
				    @else
				    <li data-target="#carouselExampleIndicators" class="bg-secondary" data-slide-to="{{$i}}"></li>
				    @endif
				    @endfor
				  </ol>
				  <div class="carousel-inner">
				    @for($i=0; $i<$product->number_image; $i++)
				    @if($i == 0)
				    <div class="carousel-item active text-center">
				      <img class="d-block w-75 " src="resources/item/<?php echo $product->id.'_'.$i.".jpg" ?>"  alt="First slide">
				    </div>
				    @else
				    <div class="carousel-item">
				      <img class="d-block w-75" src="resources/item/<?php echo $product->id.'_'.$i.".jpg" ?>" >
				    </div>
				    @endif
				    @endfor
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon bg-secondary " aria-hidden="true"></span>
				    <span class="sr-only ">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				    <span class="carousel-control-next-icon bg-secondary" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>

			</div>
			<div class="col-md-6">
				@if($product->discount != 0)
				<h3 class="font-weight-bold "><s>{{number_format($product->price,0,',','.')}} đ</s></h3>
				<h4 class="text-success">Khuyến mãi: {{$product->discount}}% => {{number_format((int)($product->price * (100 - $product->discount) / 100000) * 1000,0,',','.')}} đ</h4>
				@else
				<h3 class="font-weight-bold ">{{number_format($product->price,0,',','.')}} đ</h3>
				@endif
				@if(session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                @endif
				<a href="addtocart/{{$product->id}}/muangay" class="btn btn-danger my-5">Mua ngay</a>
				<a href="addtocart/{{$product->id}}/0" class="btn btn-success my-5">Cho vào giỏ hàng</a>
				<div id="cau-hinh" >
					<p class="font-weight-bold text-center">Cấu hình sản phẩm:</p>
					<div class="row">
						<div class="col-md-6 ">
							<ul>
								<li>Màn hình: {{$product->laptop->man_hinh}}</li>
								<li>CPU: {{$product->laptop->cpu}}</li>
								<li>Ram: {{$product->laptop->ram}} </li>
							</ul>
						</div>
						<div class="col-md-6 ">
							<ul>
								<li>VGA: {{$product->laptop->card_man_hinh}}</li>
								<li>HĐH: {{$product->laptop->he_dieu_hanh}}</li>
								<li>Nặng: {{$product->laptop->khoi_luong}}</li>
							</ul>
						</div>
					</div>
					<p class="text-primary text-center"><a href="chitiet/{{$product->id}}#specification">Xem chi tiết</a></p>
				</div>
			</div>
		</div>
	</div> <!-- feature1 -->
	<div  class="my-2" >
		<div class="container bg-white">
			<ul class="nav nav-fill">
			  <li class="nav-item">
			    <a class="nav-link active" href="chitiet/{{$product->id}}#specification">Thông số kỹ thuật</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="chitiet/{{$product->id}}#review">Đánh giá & nhận xét</a>
			  </li>
			</ul>
			<hr>
			<!-- thông số kỹ thuật -->
			<div class="row mb-2" id="specification" >
				<div class="col-md-12">
					<h5>Thông số kỹ thuật {{$product->product_name}}</h5>
				</div>	
			</div>
			<div class="row">
				<div class="col-md-12">
					<table class="table">
					  
					  <tbody>
					    <tr>
					      <th scope="row">CPU :</th>
					      <td>{{$product->laptop->cpu}}</td>
					    </tr>
					    <tr>
					      <th scope="row">Ổ cứng :</th>
					      <td>{{$product->laptop->o_cung}}</td>
					    </tr>
					    <tr>
					      <th scope="row">RAM :</th>
					      <td>{{$product->laptop->ram}}</td>
					    </tr>
					    <tr>
					      <th scope="row">Màn hình :</th>
					      <td>{{$product->laptop->man_hinh}}</td>
					    </tr>
					    <tr>
					      <th scope="row">Card màn hình :</th>
					      <td>{{$product->laptop->card_man_hinh}}</td>
					    </tr>
					    <tr>
					      <th scope="row">Cổng kết nối :</th>
					      <td>{{$product->laptop->cong_ket_noi}}</td>
					    </tr>
					    <tr>
					      <th scope="row">Âm thanh :</th>
					      <td>{{$product->laptop->am_thanh}}</td>
					    </tr>
					    <tr>
					      <th scope="row">Webcam :</th>
					      <td>{{$product->laptop->webcam}}</td>
					    </tr>
						<tr>
					      <th scope="row">Pin :</th>
					      <td>{{$product->laptop->pin}}</td>
					    </tr>
					    <tr>
					      <th scope="row">Kích thước :</th>
					      <td>{{$product->laptop->kich_thuoc}}</td>
					    </tr>
					    <tr>
					      <th scope="row">Khối lượng :</th>
					      <td>{{$product->laptop->khoi_luong}}</td>
					    </tr>
					    <tr>
					      <th scope="row">Hệ điều hành :</th>
					      <td>{{$product->laptop->he_dieu_hanh}}</td>
					    </tr>
					    <tr>
					      <th scope="row">Bảo hành :</th>
					      <td>{{$product->laptop->bao_hanh}}</td>
					    </tr>
					  </tbody>
					</table>
				</div>
			</div>
		</div>
	@elseif($product->phone_id != null)
	<div class="container">
		<div class="row my-2">
			<div class="col-md-12 px-0">
				<nav aria-label=" breadcrumb">
				  <ol class="breadcrumb">
				  	<li class="breadcrumb-item"><a href="#">Home</a></li>
				    <li class="breadcrumb-item"><a href="#">Phone</a></li>
				    <li class="breadcrumb-item"><a href="#">{{$product->phone->brand}}</a></li>
				    <li class="breadcrumb-item active" aria-current="page">{{$product->product_name}}</li>
				  </ol>
				</nav>
			</div>	
		</div>		
	</div>
	<div >
		<div class="container bg-white ">
			<div class="row">
			<div class="col-md-12">
				<h3 class="my-2">{{$product->product_name}}</h2>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-6 " >
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators ">
				  	@for($i=0; $i<$product->number_image; $i++)
				  	@if($i == 0)
				    <li data-target="#carouselExampleIndicators" class="bg-secondary" data-slide-to="{{$i}}" class="active"></li>
				    @else
				    <li data-target="#carouselExampleIndicators" class="bg-secondary" data-slide-to="{{$i}}"></li>
				    @endif
				    @endfor
				  </ol>
				  <div class="carousel-inner">
				    @for($i=0; $i<$product->number_image; $i++)
				    @if($i == 0)
				    <div class="carousel-item active text-center">
				      <img class="d-block w-75 " src="resources/item/<?php echo $product->id.'_'.$i.".jpg" ?>"  alt="First slide">
				    </div>
				    @else
				    <div class="carousel-item">
				      <img class="d-block w-75" src="resources/item/<?php echo $product->id.'_'.$i.".jpg" ?>" >
				    </div>
				    @endif
				    @endfor
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon bg-secondary " aria-hidden="true"></span>
				    <span class="sr-only ">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				    <span class="carousel-control-next-icon bg-secondary" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>

			</div>
			<div class="col-md-6">
				@if($product->discount != 0)
				<h3 class="font-weight-bold "><s>{{number_format($product->price,0,',','.')}} đ</s></h3>
				<h4 class="text-success">Khuyến mãi: {{$product->discount}}% => {{number_format((int)($product->price * (100 - $product->discount) / 100000) * 1000,0,',','.')}} đ</h4>
				@else
				<h3 class="font-weight-bold ">{{number_format($product->price,0,',','.')}} đ</h3>
				@endif
				@if(session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                @endif
				<a href="addtocart/{{$product->id}}/muangay" class="btn btn-danger my-5">Mua ngay</a>
				<a href="addtocart/{{$product->id}}/0" class="btn btn-success my-5">Cho vào giỏ hàng</a>
				<div id="cau-hinh" >
					<p class="font-weight-bold text-center">Cấu hình sản phẩm:</p>
					<div class="row">
								<div class="col-md-6 ">
									<ul>
										<li>Màn hình: {{$product->phone->man_hinh}}</li>
										<li>Camera: {{$product->phone->camera}}</li>
										<li>Pin: {{$product->phone->pin}} </li>
									</ul>
								</div>
								<div class="col-md-6 ">
									<ul>
										<li>Ram: {{$product->phone->ram}}</li>
										<li>CPU: {{$product->phone->cpu}}</li>
										<li>HĐH: {{$product->phone->he_hieu_hanh}}</li>
									</ul>
								</div>
							</div>
					<p class="text-primary text-center"><a href="chitiet/{{$product->id}}#specification">Xem chi tiết</a></p>
				</div>
			</div>
		</div>
	</div> <!-- feature1 -->
	<div  class="my-2" >
		<div class="container bg-white">
			<ul class="nav nav-fill">
			  <li class="nav-item">
			    <a class="nav-link active" href="chitiet/{{$product->id}}#specification">Thông số kỹ thuật</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="chitiet/{{$product->id}}#review">Đánh giá & nhận xét</a>
			  </li>
			</ul>
			<hr>
			<!-- thông số kỹ thuật -->
			<div class="row mb-2" id="specification" >
				<div class="col-md-12">
					<h5>Thông số kỹ thuật {{$product->product_name}}</h5>
				</div>	
			</div>
			<div class="row">
				<div class="col-md-12">
					<table class="table">
					  
					  <tbody>
					    <tr>
					      <th scope="row">CPU :</th>
					      <td> {{$product->phone->cpu}}</td>
					    </tr>
						<tr>
					      <th scope="row">Màn hình :</th>
					      <td> {{$product->phone->man_hinh}}</td>
					    </tr>
					    <tr>
					      <th scope="row">Camera :</th>
					      <td> {{$product->phone->camera}}</td>
					    </tr>
					    <tr>
					      <th scope="row">RAM :</th>
					      <td> {{$product->phone->ram}}</td>
					    </tr>
					    <tr>
					      <th scope="row">Bộ nhớ trong :</th>
					      <td> {{$product->phone->bo_nho_trong}}</td>
					    </tr>
					    <tr>
					      <th scope="row">Hệ điều hành :</th>
					      <td> {{$product->phone->he_dieu_hanh}}</td>
					    </tr>
					    <tr>
					      <th scope="row">GPU :</th>
					      <td> {{$product->phone->gpu}}</td>
					    </tr>
					    <tr>
					      <th scope="row">Pin :</th>
					      <td> {{$product->phone->pin}}</td>
					    </tr>

					    <tr>
					      <th scope="row">Kích thước :</th>
					      <td>{{$product->phone->kich_thuoc}}</td>
					     </tr>
					     <tr>
					      <th scope="row">Bảo hành :</th>
					      <td>{{$product->phone->bao_hanh}}</td>
					     </tr>
					  </tbody>
					</table>
				</div>
			</div>
		</div>
	@else
	<div class="container">
		<div class="row my-2">
			<div class="col-md-12 px-0">
				<nav aria-label=" breadcrumb">
				  <ol class="breadcrumb">
				  	<li class="breadcrumb-item"><a href="#">Home</a></li>
				    <li class="breadcrumb-item"><a href="#">Tablet</a></li>
				    <li class="breadcrumb-item"><a href="#">{{$product->tablet->brand}}</a></li>
				    <li class="breadcrumb-item active" aria-current="page">{{$product->product_name}}</li>
				  </ol>
				</nav>
			</div>	
		</div>	
	</div>
	<div >
		<div class="container bg-white ">
			<div class="row">
			<div class="col-md-12 ">
				<h3 class="my-2">{{$product->product_name}}</h2>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-6 " >
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators ">
				  	@for($i=0; $i<$product->number_image; $i++)
				  	@if($i == 0)
				    <li data-target="#carouselExampleIndicators" class="bg-secondary" data-slide-to="{{$i}}" class="active"></li>
				    @else
				    <li data-target="#carouselExampleIndicators" class="bg-secondary" data-slide-to="{{$i}}"></li>
				    @endif
				    @endfor
				  </ol>
				  <div class="carousel-inner">
				    @for($i=0; $i<$product->number_image; $i++)
				    @if($i == 0)
				    <div class="carousel-item active text-center">
				      <img class="d-block w-75 " src="resources/item/<?php echo $product->id.'_'.$i.".jpg" ?>"  alt="First slide">
				    </div>
				    @else
				    <div class="carousel-item">
				      <img class="d-block w-75" src="resources/item/<?php echo $product->id.'_'.$i.".jpg" ?>" >
				    </div>
				    @endif
				    @endfor
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon bg-secondary " aria-hidden="true"></span>
				    <span class="sr-only ">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				    <span class="carousel-control-next-icon bg-secondary" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>	

			</div>
			<div class="col-md-6">
				@if($product->discount != 0)
				<h3 class="font-weight-bold "><s>{{number_format($product->price,0,',','.')}} đ</s></h3>
				<h4 class="text-success">Khuyến mãi: {{$product->discount}}% => {{number_format((int)($product->price * (100 - $product->discount) / 100000) * 1000,0,',','.')}} đ</h4>
				@else
				<h3 class="font-weight-bold ">{{number_format($product->price,0,',','.')}} đ</h3>
				@endif
				@if(session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                @endif
				<a href="addtocart/{{$product->id}}/muangay" class="btn btn-danger my-5">Mua ngay</a>
				<a href="addtocart/{{$product->id}}/0" class="btn btn-success my-5">Cho vào giỏ hàng</a>
				<div id="cau-hinh" >
					<p class="font-weight-bold text-center">Cấu hình sản phẩm:</p>
					<div class="row">
								<div class="col-md-6 ">
									<ul>
										<li>Màn hình: {{$product->tablet->man_hinh}}</li>
										<li>Camera: {{$product->tablet->camera}}</li>
										<li>Pin: {{$product->tablet->pin}} </li>
									</ul>
								</div>
								<div class="col-md-6 ">
									<ul>
										<li>Ram: {{$product->tablet->ram}}</li>
										<li>CPU: {{$product->tablet->cpu}}</li>
										<li>HĐH: {{$product->tablet->he_hieu_hanh}}</li>
									</ul>
								</div>
							</div>
					<p class="text-primary text-center"><a href="chitiet/{{$product->id}}#specification">Xem chi tiết</a></p>
				</div>
			</div>
		</div>
	</div> <!-- feature1 -->
	<div  class="my-2" >
		<div class="container bg-white">
			<ul class="nav nav-fill">
			  <li class="nav-item">
			    <a class="nav-link active" href="chitiet/{{$product->id}}#specification">Thông số kỹ thuật</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="chitiet/{{$product->id}}#review">Đánh giá & nhận xét</a>
			  </li>
			</ul>
			<hr>
			<!-- thông số kỹ thuật -->
			<div class="row mb-2" id="specification" >
				<div class="col-md-12">
					<h5>Thông số kỹ thuật {{$product->product_name}}</h5>
				</div>	
			</div>
			<div class="row">
				<div class="col-md-12">
					<table class="table">
					  
					  <tbody>
					    <tr>
					      <th scope="row">CPU :</th>
					      <td> {{$product->tablet->cpu}}</td>
					    </tr>
						<tr>
					      <th scope="row">Màn hình :</th>
					      <td> {{$product->tablet->man_hinh}}</td>
					    </tr>
					    <tr>
					      <th scope="row">Camera :</th>
					      <td> {{$product->tablet->camera}}</td>
					    </tr>
					    <tr>
					      <th scope="row">RAM :</th>
					      <td> {{$product->tablet->ram}}</td>
					    </tr>
					    <tr>
					      <th scope="row">Bộ nhớ trong :</th>
					      <td> {{$product->tablet->bo_nho_trong}}</td>
					    </tr>
					    <tr>
					      <th scope="row">Hệ điều hành :</th>
					      <td> {{$product->tablet->he_dieu_hanh}}</td>
					    </tr>
					    <tr>
					      <th scope="row">GPU :</th>
					      <td> {{$product->tablet->gpu}}</td>
					    </tr>
					    <tr>
					      <th scope="row">Pin :</th>
					      <td> {{$product->tablet->pin}}</td>
					    </tr>

					    <tr>
					      <th scope="row">Kích thước :</th>
					      <td>{{$product->tablet->kich_thuoc}}</td>
					     </tr>
					     <tr>
					      <th scope="row">Bảo hành :</th>
					      <td>{{$product->tablet->bao_hanh}}</td>
					     </tr>
					  </tbody>
					</table>
				</div>
			</div>
		</div>
	@endif
		<!-- đánh giá nhân xét -->
		<div class="container bg-white mt-2" id="review">
			<div class="row">
				<div class="col-md-12 ">
					<h5 class="my-3">Đánh giá & nhận xét</h5>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-md-12">
					<form action="danhgia/{{$product->id}}" method="POST">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<div class="form-group row">
					  		<label for="rating" class="col-sm-2 col-form-label"><b>Rating : </b></label>
					  		<div class="col-sm-10">
						     	<div class="star-rating">
						        	<span class="fa fa-star-o" data-rating="1"></span>
						        	<span class="fa fa-star-o" data-rating="2"></span>
						        	<span class="fa fa-star-o" data-rating="3"></span>
						        	<span class="fa fa-star-o" data-rating="4"></span>
						        	<span class="fa fa-star-o" data-rating="5"></span>
						        	<input type="hidden" name="star_rating" class="rating-value" value="5">
						      	</div>
  						  	</div>
					  	</div>
					 	<div class="form-group row">
					    	<label for="colFormLabel" class="col-sm-2 col-form-label"><b>Email : </b></label>
					    	<div class="col-sm-10">
					      		<input type="email" name="email" class="form-control" id="colFormLabel" placeholder="example@gmail.com">
					    	</div>
					  	</div>
					  	<div class="form-group row ">
					    	<label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg"><b>Bình luận : </b></label>
					    	<div class="col-sm-10">
					      		<input type="text" name="comment" class="form-control form-control-lg" id="colFormLabelLg" placeholder="Viết lời bình">
					    	</div>
					  	</div>
					  	
					  	<button type="submit" class="btn btn-primary float-right">Gửi đánh giá</button>
					</form>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-md-12">
					<h4><strong>Đánh giá của khách hàng</strong></h4>
					<h5><strong>({{$product->starAverage()}} star)</strong></h5>
				</div>		
			</div>
			<hr>
			@foreach($rating as $rating)
			<div class="row">
				<div class="col-md-12">
					<p>Bởi: <strong>{{$rating->email}}</strong> <span>{{$rating->datetime}}</span></p>

					<div>
						@for($i = 0 ; $i < 5 ; $i++ )
						@if($i < $rating->rating)
			        	<span class="fa fa-star" ></span>
			        	@else
			        	<span class="fa fa-star-o"></span>
			        	@endif
			        	@endfor
			      	</div>

					<p>{{$rating->comment}}</p>
				</div>		
			</div>
			<hr>
			@endforeach	
		</div>
	</div> <!-- feature2 -->		
</div> <!-- content -->
@endsection

@section('script')
<script>
	var $star_rating = $('.star-rating .fa');

	var SetRatingStar = function() {
	  return $star_rating.each(function() {
	    if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
	      return $(this).removeClass('fa-star-o').addClass('fa-star');
	    } else {
	      return $(this).removeClass('fa-star').addClass('fa-star-o');
	    }
	  });
	};

	$star_rating.on('click', function() {
	  $star_rating.siblings('input.rating-value').val($(this).data('rating'));
	  return SetRatingStar();
	});

	SetRatingStar();
	$(document).ready(function() {
	});
</script>

@endsection