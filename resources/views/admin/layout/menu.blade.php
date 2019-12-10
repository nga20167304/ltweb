@if(Auth::user()->access == 2)
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="#"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="#"> <i class="fa fa-file-text-o fa-fw" aria-hidden="true" ></i>Đơn hàng<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="admin/bill/chuagiao">Chưa giao hàng</a>
                    </li>
                    <li>
                        <a href="admin/bill/unpaid">Đang giao hàng</a>
                    </li>
                    <li>
                        <a href="admin/bill/paid">Đã thanh toán</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            </li>
             <li>
                <a href="#"><i class="fa fa-motorcycle fa-fw" aria-hidden="true" ></i>Người chuyển hàng<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="admin/shipper/danhsach">Danh sách người chuyển hàng</a>
                    </li>
                    <li>
                        <a href="admin/shipper/them">Thêm người chuyển hàng</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
       
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
@else
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="#"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="#"> <i class="fa fa-file-text-o fa-fw" aria-hidden="true" ></i>Đơn hàng<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="admin/bill/chuaxacnhan">Chưa xác nhận</a>
                    </li>
                    <li>
                        <a href="admin/bill/chuagiao">Chưa giao hàng</a>
                    </li>
                    <li>
                        <a href="admin/bill/unpaid">Đang giao hàng</a>
                    </li>
                    <li>
                        <a href="admin/bill/paid">Đã thanh toán</a>
                    </li>
                    <li>
                        <a href="admin/bill/deleted">Đã hủy</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-mobile fa-fw" aria-hidden="true"></i>Sản phẩm<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="admin/product/danhsach">Danh sách sản phẩm</a>
                    </li>
                    <li>
                        <a href="admin/product/them">Thêm sản phẩm</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-user fa-fw" aria-hidden="true"></i>User<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="admin/user/danhsach">Danh sách user</a>
                    </li>
                    <li>
                        <a href="admin/user/them">Thêm user</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
             <li>
                <a href="#"><i class="fa fa-motorcycle fa-fw" aria-hidden="true" ></i>Người chuyển hàng<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="admin/shipper/danhsach">Danh sách người chuyển hàng</a>
                    </li>
                    <li>
                        <a href="admin/shipper/them">Thêm người chuyển hàng</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="admin/chart"><i class="fa fa-line-chart fa-fw"></i>Thống kê doanh số</a>
            </li>
       
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>

@endif
