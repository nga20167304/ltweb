<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Bill;
use App\Order;
use App\Product;
use App\User;


class AjaxController extends Controller
{
  public function getCauHinh($loaiSP){
    if($loaiSP == 1){
        echo $data = '
                        <h4><strong >Thông số cấu hình sản phẩm</strong></h4>
                        <div class="form-group ">
                            <label for="manhinh">Màn hình</label>
                            <input class="form-control" id="manhinh" name="manhinh" placeholder="Độ phân giải màn hình " required/>
                        </div>
                        <div class="form-group">
                            <label for="cpu">CPU</label>
                            <input class="form-control" id="cpu" name="cpu" placeholder="Cấu hình CPU" required/>
                        </div>
                        <div class="form-group">
                            <label for="ram">Ram</label>
                            <input class="form-control" id="ram" name="ram" placeholder="Thông số Ram" required/>
                        </div>
                        <div class="form-group">
                            <label for="ocung">Ổ cứng</label>
                            <input class="form-control" id="ocung" name="ocung" placeholder="Thông số ổ cứng " required/>
                        </div>
                        <div class="form-group">
                            <label for="card_manhinh">Card màn hình</label>
                            <input class="form-control" id="card_manhinh" name="card_manhinh" placeholder="Thông số card màn hình" required/>
                        </div>
                        <div class="form-group">
                            <label for="amthanh">Âm thanh</label>
                            <input class="form-control" id="amthanh" name="amthanh" placeholder="Thông số âm thanh" required/>
                        </div>
                        <div class="form-group">
                            <label for="cong_ketnoi">Cổng kết nối</label>
                            <input class="form-control" id="cong_ketnoi" name="cong_ketnoi" placeholder="Thông số cổng kết nối" required/>
                        </div>
                        <div class="form-group">
                            <label for="webcam">Webcam</label>
                            <input class="form-control" id="webcam" name="webcam" placeholder="Thông số Webcam" required/>
                        </div>
                        <div class="form-group">
                            <label for="hedieuhanh">Hệ điều hành</label>
                            <input class="form-control" id="hedieuhanh" name="hedieuhanh" placeholder="Hệ điều hành của sản phẩm" required/>
                        </div>
                        <div class="form-group">
                            <label for="pin">Pin</label>
                            <input class="form-control" id="pin" name="pin" placeholder="Thông số Pin" required/>
                        </div>
                        <div class="form-group">
                            <label for="kichthuoc">Kích thước</label>
                            <input class="form-control" id="kichthuoc" name="kichthuoc" placeholder="Kích thước sản phẩm" required/>
                        </div>
                        <div class="form-group">
                            <label for="khoiluong">Khối lượng</label>
                            <input class="form-control" id="khoiluong" name="khoiluong" placeholder="x kg" required/>
                        </div>
                        <div class="form-group">
                            <label for="baohanh">Bảo hành</label>
                            <input class="form-control" id="baohanh" name="baohanh" placeholder="12 tháng / 24 tháng" required/>
                        </div>
                        ';
    }else {
        echo $data = '
                        <h4><strong >Thông số cấu hình sản phẩm</strong></h4>
                        <div class="form-group ">
                            <label for="manhinh">Màn hình</label>
                            <input class="form-control" id="manhinh" name="manhinh" placeholder="Độ phân giải màn hình " required/>
                        </div>
                        <div class="form-group">
                            <label for="camera">Camera</label>
                            <input class="form-control" id="camera" name="camera" placeholder="camera sau/trước(10.0 MP / 5.0 MP)" required/>
                        </div>
                        <div class="form-group">
                            <label for="ram">RAM</label>
                            <input class="form-control" id="ram" name="ram" placeholder="Thông số Ram" required/>
                        </div>
                        <div class="form-group">
                            <label for="bonhotrong">Bộ nhớ trong</label>
                            <input class="form-control" id="bonhotrong" name="bonhotrong" placeholder="Kích thước bộ nhớ trong" required/>
                        </div>
                        <div class="form-group">
                            <label for="hedieuhanh">Hệ điều hành</label>
                            <input class="form-control" id="hedieuhanh" name="hedieuhanh" placeholder="Hệ điều hành của sản phẩm" required/>
                        </div>
                        <div class="form-group">
                            <label for="cpu">CPU</label>
                            <input class="form-control" id="cpu" name="cpu" placeholder="Thông số CPU" required/>
                        </div>
                        <div class="form-group">
                            <label for="gpu">Chip đồ họa</label>
                            <input class="form-control" id="gpu" name="gpu" placeholder="Thông số GPU" required/>
                        </div>
                        
                        <div class="form-group">
                            <label for="pin">Pin</label>
                            <input class="form-control" id="pin" name="pin" placeholder="Thông số Pin" required/>
                        </div>
                        <div class="form-group">
                            <label for="kichthuoc">Kích thước</label>
                            <input class="form-control" id="kichthuoc" name="kichthuoc" placeholder="Kích thước sản phẩm" required/>
                        </div>
                        <div class="form-group">
                            <label for="baohanh">Bảo hành</label>
                            <input class="form-control" id="baohanh" name="baohanh" placeholder="12 tháng / 24 tháng" required/>
                        </div>
                        ';

    }
           
    }
    public function getChartData(){
        $order = Order::join('bill','order.bill_id','=','bill.id')->join('product','order.product_id','=','product.id')->where('bill.status','2')->groupBy('bill.date')->select(DB::raw('sum(product.price*(100 - product.discount)/100*order.so_luong) as money,bill.date'))->get();
        echo json_encode($order);
    }

    public function checkUserName(Request $request){
        $username  = $request->un;
        $user = User::where('name','=',$username)->get();
        if(count($user) != 0){
            return 0;
        }else{
            return 1;
        }
    }
}