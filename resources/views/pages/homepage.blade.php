	@extends('layout.index')
@section('css')
<style>
	/* carsoursel */

/* feature1 */
#feature1{
	color: #2C3E50;
	text-align: center;
	padding:30px 0px;
	
}
#feature1 .oi{
	font-size: 50px;
	
}
/* feature2 */
#feature2{
	margin: 30px 0px;
} 
#laptop1{
	width: 200px;
	height: 200px;
	
}
#iphone1{
	width: 200px;
	height: 200px;
	
}
#tablet1{
	width: 200px;
	height: 200px;
	
}
#ltname{
	font-size: 18px;
}
#ipname{
	font-size: 18px;
}
#tbname{
	font-size: 18px;
}

</style>
@endsection
@section('content')
	<div id="content">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="resources/carousel/05.jpg" alt="First slide">
		       <div class="carousel-caption d-none d-md-block">
				    <h5>Laptop Modern</h5>
				    <p>Welcome</p>
				</div>
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="resources/carousel/04.jpg" alt="Second slide">
		       <div class="carousel-caption d-none d-md-block">
				    <h5>Mobile Phone Style </h5>
				    <p>Welcome</p>
				</div>
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="resources/carousel/03.jpg" alt="Third slide">
		      <div class="carousel-caption d-none d-md-block">	 
				    <h5>Convenient Tablet</h5>
				    <p>welcome</p>
				</div>
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div> <!-- .carousel -->
		<div id="feature1" class="bg-light">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<a href="boloc/phone" class="btn btn-light">
							<span class="oi" data-glyph="laptop"></span>
							<h3>Laptop</h3>
						</a>
						
					</div>
					<div class="col-md-4">
						<a  href="boloc/phone" class="btn btn-light">
							<span class="oi" data-glyph="phone"></span>
							<h3>Phone</h3>
						</a>
					</div>	
					<div class="col-md-4">
						<a  href="boloc/phone" class="btn btn-light">
							<span class="oi" data-glyph="tablet"></span>
							<h3>Tablet</h3>
						</a>	
					</div>
				</div>
			</div>
		</div> <!-- feature1 -->
		<div id="feature2">
			<div class="container">
				<!-- laptop -->
				<div class="row justify-content-between ">
					<h3 class="col-auto mr-auto text-uppercase text-dark"> laptop bán chạy</h3>
					<a href="" class="col-auto text-info">xem tất cả</a>
				</div>
				<hr>
				<div class="row">
					@foreach ($laptop as $lt)
					<div class="col-md-4" >
						<img src="resources/item/{{$lt -> id}}_0.jpg" id='laptop1' class="rounded mx-auto d-block"  />
						<h5 class="text-center  my-2"><a id='ltname' href="chitiet/{{$lt->id}}" class="text-dark">{{$lt -> product_name}} </a></h5>
						<p class="text-center font-weight-bold">
							@if($lt -> discount == 0)
								<span class='flash-del'> {{$format_number = number_format($lt-> price,0 , ",", ".")}} ₫ </span>
							@else
								<span class='flash-sale'> 
									<strike>{{$format_number = number_format($lt-> price,0 , ",", ".")}} ₫</strike>
									-> {{$format_number = number_format(round((($lt-> price)*(100-($lt-> discount))/100),-3), 0, "," , ".")}} ₫
								</span>
							@endif
						</p>
					</div>
					@endforeach
				</div>
				<!-- mobile phone -->
				<div class="row justify-content-between mt-2">
					<h3 class="col-auto mr-auto text-uppercase text-dark"> Điện thoại bán chạy</h3>
					<a href="" class="col-auto text-info">xem tất cả</a>
				</div>
				<hr>
				<div class="row">
					@foreach($iphone as $ip)
					<div class="col-md-4" >
						<img src="resources/item/{{$ip -> id}}_0.jpg" id= 'iphone1' class="rounded mx-auto d-block" />
						<h3 class="text-center text-dark my-2"><a id='ipname' href="chitiet/{{$ip->id}}" class="text-dark">{{$ip -> product_name}}</a></h3>
						<p class="text-center font-weight-bold">
							@if($ip -> discount == 0)
								<span class='flash-del'> {{$format_number = number_format($ip-> price,0 , ",", ".")}} ₫ </span>
							@else
								<span class='flash-sale'> 
									<strike>{{$format_number = number_format($ip-> price,0 , ",", ".")}} ₫</strike>
									-> {{$format_number = number_format(round((($ip-> price)*(100-($ip-> discount))/100),-3), 0, "," , ".")}} ₫
								</span>
							@endif
					</div>
				    @endforeach
				</div>
				<!-- tablet -->
				<div class="row justify-content-between mt-2">
					<h3 class="col-auto mr-auto text-uppercase text-dark"> Tablet bán chạy</h3>
					<a href="" class="col-auto text-info">xem tất cả</a>
				</div>
				<hr>
				<div class="row">
					@foreach($tablet as $tb)
					<div class="col-md-4" >
						<img src="resources/item/{{$tb -> id}}_0.jpg" class="rounded mx-auto d-block" id= 'tablet1' />
						<h3 class="text-center text-dark my-2"><a id='tbname' href="chitiet/{{$tb->id}}" class="text-dark">{{$tb -> product_name}}</a></h3>
						<p class="text-center font-weight-bold">
							@if($tb -> discount == 0)
								<span class='flash-del'> {{$format_number = number_format($tb-> price,0 , ",", ".")}} ₫ </span>
							@else
								<span class='flash-sale'> 
									<strike>{{$format_number = number_format($tb-> price,0 , ",", ".")}} ₫</strike>
									->{{$format_number = number_format(round((($tb-> price)*(100-($tb-> discount))/100),-3), 0, "," , ".")}} ₫
								</span>
							@endif
					</div>
					@endforeach
				</div>
			</div> <!-- container -->
		</div> <!-- feature2 -->
	</div>

@endsection