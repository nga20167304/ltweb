<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Laptop;
use App\Product;
use App\Customer;



Route::get('/', 'PagesController@getIndex');

Route::get('login','UserController@getLogin');

Route::post('login','UserController@postLogin');

Route::get('logout','UserController@getLogout');

Route::get('signup','UserController@getSignUp');

Route::post('signup','UserController@postSignUp');


Route::get('admin',function(){
	return redirect('admin/bill/chuagiao');
});

Route::get('usersetting',function(){
	return view('pages.usersetting');
});

Route::post('usersetting','UserController@postUserSetting');

Route::group(['prefix'=>'admin','middleware'=>'adminLogin'],function(){
	Route::group(['prefix'=>'bill'],function(){
		Route::get('chuaxacnhan','BillController@getChuaXacNhan');

		Route::get('chuaxacnhan/xacnhan/{id}','BillController@getXacNhanDonHang');

		Route::get('orderlist','BillController@getOrderList');

		Route::get('order/sua/{id}','BillController@getEditOrder');

		Route::post('order/sua/{id}','BillController@postEditOrder');

		Route::get('order/xoa/{id}','BillController@getDeleteOrder');

		Route::get('paid','BillController@getDaThanhToan');

		Route::get('unpaid','BillController@getChuaThanhToan');

		Route::get('unpaid/editOrder/{id}','BillController@getSuaOrder');

		Route::get('unpaid/editShipper/{id}','BillController@getEditShipper');

		Route::post('unpaid/editShipper/{id}','BillController@postEditShipper');

		Route::get('unpaid/xntt/{id}','BillController@getConfirm');

		Route::get('chuagiao/huy/{id}','BillController@getHuy');

		Route::get('deleted','BillController@getDeletedList');

		Route::get('khoiphuc/{id}','BillController@getKhoiPhuc');

		Route::get('chuagiao','BillController@getChuaGiao');

		Route::get('chuagiao/xngh/{id}','BillController@getXNGH');

		Route::get('nhacgiaohang','BillController@getNhacGiaoHang');

		Route::get('nhaclayhang','BillController@getNhacLayHang');
	});
	Route::group(['prefix'=>'product'],function(){

		Route::get('danhsach','ProductController@getDanhSach');

		Route::get('sua/{id}','ProductController@getSua');

		Route::post('sua/{id}','ProductController@postSua');

		Route::get('them','ProductController@getThem');

		Route::post('them','ProductController@postThem');

		Route::get('xoa/{id}','ProductController@getXoa');
	});
	Route::group(['prefix'=>'shipper'],function(){

		Route::get('danhsach','ShipperController@getDanhSach');

		Route::get('sua/{id}','ShipperController@getSua');

		Route::post('sua/{id}','ShipperController@postSua');

		Route::get('them','ShipperController@getThem');

		Route::post('them','ShipperController@postThem');

		Route::get('xoa/{id}','ShipperController@getXoa');

		Route::get('dangchuyen/{id}','ShipperController@getDangChuyen');

		Route::get('chonhan/{id}','ShipperController@getChoNhan');
	});
	Route::group(['prefix'=>'user'],function(){

		Route::get('danhsach','UserController@getDanhSach');

		Route::get('sua/{id}','UserController@getSua');

		Route::post('sua/{id}','UserController@postSua');

		Route::get('them','UserController@getThem');

		Route::post('them','UserController@postThem');

		Route::get('xoa/{id}','UserController@getXoa');
	});
	Route::group(['prefix'=>'ajax'],function(){
		Route::get('product/{loaiSP}','AjaxController@getCauHinh');

	});
	Route::get('chart',function(){
		return view('admin.chart.chart');
	});
});

Route::get('chartdata','AjaxController@getChartData');

Route::get('checkuser','AjaxController@checkUserName');

Route::get('home',function(){

	return view('pages.homepage');
});

Route::match(['get', 'post'], 'timkiem', 'PagesController@timkiem');

Route::get('users','UserController@getUser');


Route::get('boloc/phone','PagesController@getLocPhone');

Route::post('boloc/phone','PagesController@postLocPhone');


Route::get('chitiet/{id}','PagesController@getChiTiet');

Route::post('danhgia/{id}','PagesController@postDanhGia');

Route::get('giohang','PagesController@getGioHang');

Route::get('tangsoluong/{id}','PagesController@getIncreQty');

Route::get('giamsoluong/{id}','PagesController@getDecreQty');

Route::get('xoasanpham/{id}','PagesController@getDeleteItem');

Route::get('dathang','PagesController@getDatHang');

Route::post('dathang','PagesController@postDatHang');

Route::get('addtocart/{id}/{muangay}','PagesController@getAddToCart');





