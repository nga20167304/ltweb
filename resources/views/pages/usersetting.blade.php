@extends('layout.index')

@section('content')

<div id="content">
	<div class="container ">
		<div class="row my-2">
			<div class="col-md-12 px-0">
				<nav aria-label=" breadcrumb">
				  <ol class="breadcrumb ">
				  	<li class="breadcrumb-item"><a href="#">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">User</li>
				  </ol>
				</nav>
			</div>	
		</div>
	</div>
</div>	


<div class="container bg-white">
	@if(session('thongbao'))
		<div class="alert alert-success">
			{{session('thongbao')}}
		</div>
	@endif
	<form action="usersetting" method="POST" class="px-5 py-5" >
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<div class="form-group">
            <label for="name">Họ và tên</label>
            <input class="form-control" name="name" id="name" placeholder="Nhập họ tên user" value="{{Auth::user()->name}}" />
        </div>
        <div class="form-group">
            <label for="birthday">Ngày sinh</label>
            <input class="form-control" id="birthday" name="birthday" type="date" value="{{Auth::user()->birthday}}" />
        </div>
        <div class="form-group">
            <label id="sex">Giới tính</label>
            <select class="form-control" name="sex" id="sex">
                @if(Auth::user()->sex == "Nam")
                <option selected value="Nam">Nam</option>
                <option value="Nữ">Nữ</option>
                @else
                <option  value="Nam">Nam</option>
                <option selected value="Nữ">Nữ</option>
                @endif
            </select>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="example@email.com" value="{{Auth::user()->email}}" />
        </div>
        <div class="form-group">
            <label for="phone">Số điện thoại</label>
            <input class="form-control" name="phone" id="phone" placeholder="Nhập số điện thoại user" value="{{Auth::user()->phone}}" />
        </div>
        <div class="form-group">
            <label for="address">Địa chỉ</label>
            <input class="form-control" name="address" id="address" placeholder="Nhập địa chỉ user" value="{{Auth::user()->address}}" />
        </div>
	
		<button type="submit" class="btn btn-success float-right">Thay đổi</button>
	</form>
</div>

@endsection

@section('script')
	<script>
		$(document).ready(function(){
			$("#footer").addClass("fixed-bottom");
		});
		
	</script>

@endsection