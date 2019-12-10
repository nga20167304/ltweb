<div id="header">
	<nav class="navbar navbar-expand-md	 navbar-dark bg-dark">
	  <div class="container">
		  <a class="navbar-brand font-weight-bold" href=""><span class="text-danger ">Hust</span>Shop.com</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <form action="timkiem" method="get" class="navbar-nav mr-auto form-inline my-2 my-lg-0 mx-auto" >
		     	<input type="text" name="tukhoa" class="form-control mr-sm-2" placeholder="Nhập nội dung" aria-label="Search">

		      	<button type="submit" class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
		    </form>
		    <ul class=" navbar-nav ">
		    	<li  class="nav-item"><a class="nav-link"  href="giohang"><span class="oi" style="font-size: 25px" data-glyph="cart">
					@if(session("cart"))
		    		({{session("cart")->totalQty()}})
					@endif
		    		</span></a></li>

		    	@if(Auth::check())
		    	
		    	<li class="nav-item dropdown mx-2 my-sm-3">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><i class="fa fa-user fa-fw"></i> {{Auth::user()->name}}
                        </li>
                        <li><a href="usersetting"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                @else
                <li  class="nav-item my-1"><a class="btn btn-success mx-lg-3" href="login">Đăng nhập</a></li>
		    	<li  class="nav-item my-1"><a  class="nav-link " href="signup">Đăng ký</a></li>
		    	@endif
		    </ul>
		  </div>
	  </div>
	</nav> <!-- navbar -->	
</div><!-- 	#header -->