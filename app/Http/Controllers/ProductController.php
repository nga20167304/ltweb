<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Laptop;
use App\Phone;
use App\Tablet;




class ProductController extends Controller
{
    public function getDanhSach(){
        $product = Product::all();
        return view('admin.product.danhsach',['product'=>$product]);
    }

    public function getThem(){
        return view('admin.product.them');
    }

    public function postThem(Request $request){
        $loaiSP = $request->loaiSanPham;
        $rdo = $request->rdoStatus;

        $sp= new Product;
        $laptop = new Laptop;
        $phone = new Phone;
        $tablet = new Tablet;
        $image = array();

        $sp->product_name = $request->product_name;
        $sp->price = $request->price;
        $sp->discount = $request->discount;
        $sp->so_luong = $request->so_luong;
        if($request->rdoStatus == 2){
            if($request->loaiSanPham == 1){
                $laptop->brand = $request->brand;
                $laptop->ten = $request->product_name;
                $laptop->cpu = $request->cpu;
                $laptop->ram = $request->ram;
                $laptop->o_cung = $request->ocung;
                $laptop->man_hinh = $request->manhinh;
                $laptop->card_man_hinh = $request->card_manhinh;
                $laptop->am_thanh = $request->amthanh;
                $laptop->cong_ket_noi = $request->cong_ketnoi;
                $laptop->webcam = $request->webcam;
                $laptop->he_dieu_hanh = $request->hedieuhanh;
                $laptop->pin = $request->pin;
                $laptop->kich_thuoc = $request->kichthuoc;
                $laptop->khoi_luong = $request->khoiluong;
                $laptop->bao_hanh = $request->baohanh;
                $laptop->save();
                $sp->laptop_id = $laptop->id;
                    
            }else if($request->loaiSanPham == 2){
                $phone->brand = $request->brand;
                $phone->ten = $request->product_name;
                $phone->man_hinh = $request->manhinh;
                $phone->camera = $request->camera;
                $phone->ram = $request->ram;
                $phone->bo_nho_trong = $request->bonhotrong;
                $phone->he_dieu_hanh = $request->hedieuhanh;
                $phone->cpu = $request->cpu;
                $phone->gpu = $request->gpu;
                $phone->pin = $request->pin;
                $phone->kich_thuoc = $request->kichthuoc;
                $phone->bao_hanh = $request->baohanh;
                
                $phone->save();
                $sp->phone_id = $phone->id;
            }else{
                $tablet->brand = $request->brand;
                $tablet->ten = $request->product_name;
                $tablet->man_hinh = $request->manhinh;
                $tablet->camera = $request->camera;
                $tablet->ram = $request->ram;
                $tablet->bo_nho_trong = $request->bonhotrong;
                $tablet->he_dieu_hanh = $request->hedieuhanh;
                $tablet->cpu = $request->cpu;
                $tablet->gpu = $request->gpu;
                $tablet->pin = $request->pin;
                $tablet->kich_thuoc = $request->kichthuoc;
                $tablet->bao_hanh = $request->baohanh;

                $tablet->save();
                $sp->tablet_id = $tablet_id;
            }
        }

        if($file = $request->file('images')){
            $nImages = count($file);
            $sp->number_image = $nImages; 
        }
        $sp->save();
        if($file = $request->file('images')){
            for ($i = 0; $i < count($file) ; $i++) {
                $name = $sp->id .'_'.$i.'.'.$file[$i]->getClientOriginalExtension();
                $file[$i]->move("resources/item",$name);
            }
        }

        return redirect('admin/product/them')->with('thongbao','Bạn đã thêm sản phẩm mới thành công');
    }

    public function getSua($id){
        $product = Product::find($id); 
        return view('admin.product.sua',['product'=>$product]);
    }

    public function postSua(Request $request,$id){
        $product = Product::find($id);
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->so_luong = $request->so_luong;

         if($file = $request->file('images')){
            $nImages = count($file);
           
            for ($i = 0; $i < count($file) ; $i++) {
                $name = $product->id .'_'.($product->number_image + $i).'.'.$file[$i]->getClientOriginalExtension();
                $file[$i]->move("resources/item",$name);
            }
             $product->number_image += $nImages;
        }
        $product->save();
        return redirect('admin/product/sua/'.$id)->with('thongbao','Sửa thành công ');

    }
    public function getXoa($id){
        $product = Product::find($id);
        $product->delete();
        return redirect('admin/product/danhsach')->with('thongbao','Xóa thành công');
    }
}
