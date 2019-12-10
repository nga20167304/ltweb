<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Shipper;
use App\Bill;


class ShipperController extends Controller
{
     public function getDanhSach(){
        $shipper = Shipper::all();
        return view('admin.shipper.danhsach',['shipper'=>$shipper]);
    }

   public function getThem(){
        return view('admin.shipper.them');
    }

    public function postThem(Request $request){
      	$shipper = new Shipper;

      	$shipper->name = $request->name;
      	$shipper->address = $request->address;
      	$shipper->phone = $request->phone;
      	$shipper->email = $request->email;

      	$shipper->save();

        return redirect('admin/shipper/them')->with('thongbao','Thêm user thành công');
    }

    public function getSua($id){
    	$shipper = Shipper::find($id);
        return view('admin.shipper.sua',['shipper'=>$shipper]);
    }

    public function postSua(Request $request,$id){
       	$shipper = Shipper::find($id);

       	$shipper->name = $request->name;
       	$shipper->address = $request->address;
       	$shipper->phone =$request->phone;
       	$shipper->email = $request->email;

       	$shipper->save();
       
        return redirect('admin/shipper/sua/'.$id)->with('thongbao','Sửa thành công ');
    }


    public function getXoa($id){
    	$shipper = Shipper::find($id);
    	$shipper->delete();
    	return redirect('admin/shipper/danhsach')->with('thongbao','Đã xóa shipper '.$shipper->name);

    }

    public function getDangChuyen($id){
      $shipper = Shipper::find($id);
      $bill = Bill::join('shipper','bill.shipper_id','=','shipper.id')->where([['bill.status','=',1],['shipper.id','=',$id]])->select('bill.id','bill.shipper_id','bill.customer_id','bill.status','bill.date')->get();
      return view('admin.shipper.hoadon_dangchuyen',['shipper'=>$shipper,'bill'=>$bill]);
    }

    public function getChoNhan($id){
      $shipper = Shipper::find($id);
      $bill = Bill::join('shipper','bill.shipper_id','=','shipper.id')->where([['bill.status','=',0],['shipper.id','=',$id]])->select('bill.id','bill.shipper_id','bill.customer_id','bill.status','bill.date')->get();
      return view('admin.shipper.hoadon_chonhan',['shipper'=>$shipper,'bill'=>$bill]);
    }
}

