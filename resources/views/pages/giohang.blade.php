@extends('layout.index')

@section('css')
<style>
	#giohang{
		min-height : 700px;
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
				    <li class="breadcrumb-item active" aria-current="page">Giỏ hàng</li>
				  </ol>
				</nav>
			</div>	
		</div>
	</div>
</div>

<div id="giohang" class="container bg-white"> 
	<h2 class="text-center py-3">Thông tin giỏ hàng</h2>
	<table id="cart" class="table table-hover table-condensed"> 
	  	<thead> 
	   	<tr>
   		    <th style="width:50%">Tên sản phẩm</th> 
		    <th style="width:10%">Giá</th> 
		    <th style="width:10%">Số lượng</th> 
		    <th style="width:20%" class="text-center">Thành tiền</th> 
		    <th style="width:10%"> </th> 
	   	</tr> 
	  	</thead> 
	 	<tbody>
	 			<?php 
	 			if(session("cart")){
	 				$cart = session('cart');
	 				foreach($cart->items as $item){
	 		 ?> 		 
	 		<tr> 
	  			<td data-th="Product"> 
	   				<div class="row"> 
	     				<div class="col-md-3 hidden-xs">
	     					<img src="resources/item/{{$item['product']->id}}_1.jpg" alt="Sản phẩm 1" class="img-responsive" width="100">
	     				</div> 
	     				<div class="col-md-9"> 
	     					<h5 class="nomargin">{{$item["product"]->product_name}}</h5> 
	      					<p>#{{$item["product"]->id}}</p> 
	    				</div> 
	    			</div> 
	   			</td> 
	   			<td data-th="Price">{{number_format($item["product"]->price,0,',','.')}} đ</td> 
	   			<td data-th="Quantity" >
	   				<div class="row">
	   					<a href="giamsoluong/{{$item['product']->id}}"  class="col-md-4 my-auto px-0 text-center text-dark" href="#"><i class="fa fa-minus " aria-hidden="true"></i></a>
						<input class="col-md-4 form-control text-center" type="text" readonly="readonly" value="{{$item['quantity']}}" placeholder="0" />
						<a href="tangsoluong/{{$item['product']->id}}" class="col-md-4 my-auto px-0 text-center text-dark" href="#"><i class="fa fa-plus" aria-hidden="true"></i></a>	
	   				</div>
	   					
	   				
	   				
	   			<td data-th="Subtotal" class="text-center">
	   				<?php
	   					$price = $item["product"]->price *(100-$item["product"]->discount) /100 *$item["quantity"];
	   					echo number_format($price,0,',','.'); 
	   				?>
	   			</td> 
	   			<td class="actions" data-th="">
	    			<a href="xoasanpham/{{$item['product']->id}}" class="close" aria-label="close"> 
	    				<span aria-hidden="true">&times;</span>
	    			</a>
	   			</td> 
	 		</tr> 
	 		<?php } ?>
	 	</tbody>
	 	<tfoot> 
			<tr> 
			    <td></td> 
			    <td colspan="2" class="hidden-xs"> </td> 
			    <td class="hidden-xs text-center"><strong>Tổng tiền : {{number_format($cart->totalPrice(),0,',','.')}}</strong></td> 
			    <td><a href="dathang" class="btn btn-success">Đặt hàng</a></td> 
			</tr>
			<?php } ?> 
		</tfoot> 
	</table>
</div>
@endsection