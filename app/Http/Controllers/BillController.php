<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bill;
use App\Order;
use App\Shipper;


class BillController extends Controller
{
    public function getOrderList(){
    	$order = Order::join('bill','order.bill_id','=','bill.id')->where('bill.status','=',0)->select('order.id','order.bill_id','order.product_id','order.so_luong')->get();
    	return view('admin.bill.order_list',['order'=>$order]);
    }

    public function getEditOrder($id){
        $order = Order::find($id);
        return view('admin.bill.suaOrder',['order'=>$order]);
    }

    public function postEditOrder(Request $request,$id){
        $order = Order::find($id);
        $order->so_luong = $request->so_luong;
        $order->save();
        return redirect('admin/bill/order/sua/'.$id)->with('thongbao','Sửa hóa đơn thành công!!');
    }

    public function getDeleteOrder($id){
        $order = Order::find($id);
        $bill_id = $order->bill_id;
        $order->delete();
        return redirect('admin/bill/unpaid/editOrder/'.$bill_id)->with('thongbao','Xóa thành công');
    }

    public function getChuaXacNhan(){
        $bill = Bill::where('status','=',-1)->get();
        return view('admin.bill.hoadon_chuaxacnhan',['bill'=>$bill]);
    }

    public function getChuaGiao(){
        $bill = Bill::where('status','=',0)->get();
        return view('admin.bill.hoadon_chuagiaohang',['bill'=>$bill]);
    }

    public function getChuaThanhToan(){
        $bill = Bill::where('status','=',1)->get();
        return view('admin.bill.hoadon_chuathanhtoan',['bill'=>$bill]);
    }

    public function getDaThanhToan(){
        $bill = Bill::where('status','=',2)->get();
    	return view('admin.bill.hoadon_dathanhtoan',['bill'=>$bill]);
    }

    
    public function getDeletedList(){
        $bill = Bill::where('status','=',3)->get();
        return view('admin.bill.hoadon_dahuy',['bill'=>$bill]);
    }

    public function getSuaOrder($id){
        $bill = Bill::find($id);
        return view('admin.bill.order_list',['bill'=>$bill]);
    }

    public function getEditShipper($id){
        $shipperList = Shipper::all();
        $bill = Bill::find($id);
        return view('admin.bill.suaShipper',['shipperList'=>$shipperList,'bill'=>$bill]);
    }

    public function postEditShipper(Request $request,$id){
        $bill = Bill::find($id);
        $bill->shipper_id = $request->shipper;
        $bill->save();
        return redirect('admin/bill/unpaid/editShipper/'.$id)->with('thongbao','Thay shipper thành công');
    }
    //xác nhận giao hàng
    public function getXNGH($id){
        $bill = Bill::find($id);
        $bill->status = 1;
        $bill->save();
        return redirect('admin/bill/chuagiao')->with('thongbao','Xác nhận hóa đơn đang được giao hàng');
    }
    // xác nhận đã thanh toán
    public function getConfirm($id){
        $bill = Bill::find($id);
        $bill->status = 2;
        $bill->save();
        return redirect('admin/bill/unpaid')->with('thongbao','Hóa đơn xác nhận thanh toán thành công');
    }
    // hủy đơn hàng
    public function getHuy($id){
        $bill = Bill::find($id);
        $bill->status = 3;
        $bill->save();
        return redirect('admin/bill/chuagiao')->with('thongbao','Đơn hàng đã bị hủy');
    }
    //khôi phục đơn hàng
    public function getKhoiPhuc($id){
        $bill = Bill::find($id);
        $bill->status = -1;
        $bill->save();
        return redirect('admin/bill/deleted')->with('thongbao','Đã khôi phục thành công!');
    }

    public function getXacNhanDonHang($id){
        $bill = Bill::find($id);
        $bill->status = 0;
        $bill->save();
        return redirect()->back()->with('thongbao','Đã xác nhân đơn hàng!');
    }

    public function getNhacGiaoHang(){
        $APIKey="44D6B694D37A1F94F9C3874E758885";
        $SecretKey="625190EE46B761C45F970632FAF94E";
        $YourPhone="0964016863";
        $Content="Thời gian giao hàng của bạn đã khá lâu. Mau chóng hoàn thành đơn hàng và nộp tiền về kho! Cảm ơn bạn";
        
        $SendContent=urlencode($Content);
        $data="http://rest.esms.vn/MainService.svc/json/SendMultipleMessage_V4_get?Phone=$YourPhone&ApiKey=$APIKey&SecretKey=$SecretKey&Content=$SendContent&SmsType=4";
        
        $curl = curl_init($data); 
        curl_setopt($curl, CURLOPT_FAILONERROR, true); 
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true); 
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
        $result = curl_exec($curl); 
            
        $obj = json_decode($result,true);
        if($obj['CodeResult']==100)
        {
           return redirect()->back()->with("message_success","Tin nhắn đã được gửi thành công!");
        }
        else
        {
            return redirect()->back()->with("message_fail","Đã gặp lỗi khi gửi tin nhắn! Thử lại sau...");
        }

    }

    public function getNhacLayHang(){
        $APIKey="44D6B694D37A1F94F9C3874E758885";
        $SecretKey="625190EE46B761C45F970632FAF94E";
        $YourPhone="0964016863";
        $Content="Bạn có đơn hàng cần chuyển, đến kho và lấy hàng. Nếu không thực hiện được xin vui lòng có hồi đáp!";
        
        $SendContent=urlencode($Content);
        $data="http://rest.esms.vn/MainService.svc/json/SendMultipleMessage_V4_get?Phone=$YourPhone&ApiKey=$APIKey&SecretKey=$SecretKey&Content=$SendContent&SmsType=4";
        
        $curl = curl_init($data); 
        curl_setopt($curl, CURLOPT_FAILONERROR, true); 
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true); 
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
        $result = curl_exec($curl); 
            
        $obj = json_decode($result,true);
        if($obj['CodeResult']==100)
        {
           return redirect()->back()->with("message_success","Tin nhắn đã được gửi thành công!");
        }
        else
        {
            return redirect()->back()->with("message_fail","Đã gặp lỗi khi gửi tin nhắn! Thử lại sau...");
        }

    }
    
}
