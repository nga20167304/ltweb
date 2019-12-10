<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <meta name="author" content="">

    <title>Sign up</title>
    <base href="{{asset('')}}">

    <!-- Bootstrap Core CSS -->
    <link href="admin_asset/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="admin_asset/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="admin_asset/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="admin_asset/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
<body>
	<div class="container bg-white">
		<h2 class="text-center"><strong>Đăng ký tài khoản mới</strong></h4>
		<form action="signup" method="POST"  class="px-5 py-5" >
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<div class="form-group">
				<label for="hoten"><strong>Họ và tên</strong></label>
				<input type="text" class="form-control " id="hoten" name="name" required="" placeholder="Nhập họ và tên">
			</div>
			<div class="form-group">
	            <label for="birthday">Ngày sinh</label>
	            <input class="form-control" id="birthday" name="birthday" type="date" required="" />
	        </div>

	        <div class="form-group">
	            <label id="sex">Giới tính</label>
	            <select class="form-control" name="sex" id="sex">
	                <option selected value="Nam">Nam</option>
	                <option value="Nữ">Nữ</option>
	            </select>
	        </div>


			<div class="form-group ">
				<label for="phone" ><strong>Số điện thoại</strong></label>
				<input type="text" class="form-control " id="phone" name="phone" required="" placeholder="Nhập số điện thoại">
			</div>


			<div class="form-group ">
				<label for="email" ><strong>Email</strong></label>
				<input type="text" class="form-control" id="email" name="email" required="" placeholder="name@example.com">
			</div>

			<div class="form-group ">
				<label for="diachi"><strong>Địa chỉ</strong></label>
				<input type="text" class="form-control " id="diachi" name="address" required="" placeholder="Nhập địa chỉ số nhà,đường,xã,quận,tỉnh/thành phố">
			</div>	

			<div class="form-group ">
				<label for="username"><strong>Username</strong></label>
				<input type="text" class="form-control" id="username" name="username" required="">
			</div>
			<div class="form-group ">
				<label for="password"><strong>Password</strong></label>
				<input type="password" class="form-control" id="password" name="password" required="">
			</div>
			<div class="form-group ">
				<label for="rPassword"><strong>Re-enter the password</strong></label>
				<input type="password" class="form-control" id="rPassword" name="rPassword" required="">
			</div>
			<a href="">Quay lại trang chủ</a>
			<button  type="submit" onclick=" return checkData()"  class="btn btn-success pull-right">Đăng ký</button>

		</form>	
	</div>

	<script src="admin_asset/bower_components/jquery/dist/jquery.min.js"></script>
	<script>
		function checkData(){
			if($('#password').val() != $('#rPassword').val()){
				alert("Nhập lại password chưa chính xác");
				return false;
			}	
			var username = $("#username").val();
			$.get("checkuser",{un : username },function(data){
				if(data == 0){
					alert("Tên đăng nhập đã tồn tại");
					return false;
				}else{
					return true;
				}
			});

		}


		

	</script>
</body>


