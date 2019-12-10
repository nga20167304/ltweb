<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

use App\Product;
use App\Customer;
use App\Bill;
use App\Phone;
use App\Tablet;
use App\Laptop;
use App\Cart;
use App\Order;
use App\Rating;
use Session;

class PagesController extends Controller
{
    public function getIndex(){
        $iphone = Product::where('id','<', 13) -> orderBy('luot_mua', 'desc')->paginate(6);
        $laptop = Product::where('id','<', 27) -> where('id','>', 12) -> orderBy('luot_mua', 'desc')->paginate(6);
        $tablet = Product::where('id','>', 26) -> orderBy('luot_mua', 'desc')->paginate(6);
        return view('pages.homepage',compact('iphone', 'laptop', 'tablet'));
    }
    
    public function getChiTiet($id){
        $product = Product::find($id);
        $rating = Rating::where('product_id','=',$id)->orderBy('id','desc')->get();
        return view('pages.chitiet',compact('product','rating'));
    }

    public function postDanhGia(Request $request,$id){
        $rating = new Rating;
        $rating->email = $request->email;
        $rating->comment = $request->comment;
        $rating->rating = $request->star_rating;
        $rating->product_id = $id;
        $rating->datetime = date("H:i:s , d/m/Y");
        $rating->save();
        return redirect()->back(); 
    }

    public function getGioHang(){ 
        return view('pages.giohang');
        
    }
    public function getDatHang(){
        return view('pages.dathang');
    }

    public function getAddToCart(Request $request,$id,$muangay){
        if($request->session()->has('cart')){
            $cart = $request->session()->get('cart');
            $cart->addItem($id);
            $request->session()->put('cart', $cart);
            if($muangay == "muangay"){
                return redirect('dathang');
            }else{
                return redirect()->back()->with('thongbao','Đã thêm sản phẩm vào giỏ hàng thành công');
            }
            
        }else{
            $cart = new Cart();
            $cart->addItem($id);
            $request->session()->put('cart', $cart);
            if($muangay == "muangay"){
                return redirect('dathang');
            }else{
                return redirect()->back()->with('thongbao','Đã thêm sản phẩm vào giỏ hàng thành công');
            }
            
        }
    }

    public function getIncreQty(Request $request , $id){
        $cart = $request->session()->get('cart');
        $cart->increQty($id);
        $request->session()->put('cart', $cart);
        return redirect()->back();
    }

    public function getDecreQty(Request $request, $id){
        $cart = $request->session()->get('cart');
        $cart->decreQty($id);
        $request->session()->put('cart', $cart);
        return redirect()->back();
    }

    public function getDeleteItem(Request $request,$id){
        $cart = $request->session()->get('cart');
        $cart->deleteItem($id);
        $request->session()->put('cart', $cart);
        return redirect()->back();
    }


    function timkiem(Request $request)
    {
        
        $laptop = Laptop::where('ten', 'like', "%".$request->tukhoa."%")->orwhere('brand', 'like', "%".$request->tukhoa."%")->orwhere('cpu', 'like', "%".$request->tukhoa."%")->orwhere('card_man_hinh', 'like', "%".$request->tukhoa."%")->orwhere('he_dieu_hanh', 'like', "%".$request->tukhoa."%")->get();

        $phone = Phone::where('ten', 'like', "%".$request->tukhoa."%")->orwhere('brand', 'like', "%".$request->tukhoa."%")->orwhere('cpu', 'like', "%".$request->tukhoa."%")->orwhere('he_dieu_hanh', 'like', "%".$request->tukhoa."%")->get();

        $tablet = Tablet::where('ten', 'like', "%".$request->tukhoa."%")->orwhere('brand', 'like', "%".$request->tukhoa."%")->orwhere('cpu', 'like', "%".$request->tukhoa."%")->orwhere('he_dieu_hanh', 'like', "%".$request->tukhoa."%")->get();
        
        
        return view('pages.timkiem', ['laptop'=>$laptop, 'phone'=>$phone, 'tablet'=>$tablet, 'tukhoa'=>$request->tukhoa] );

    }

    public function postDatHang(Request $request){
        $cart = new Cart;
        if($request->session()->has('cart')){
            $cart = $request->session()->get('cart');
        }else{
            return redirect()->back()->with('thongbao1','Quá phiên làm việc giỏ hàng đã bị làm trống');
        }
        if(Auth::check()){
            $user = Auth::user();
            if(Customer::where('user_id','=',$user->id)->get()->first()){
                $customer = Customer::where('user_id','=',$user->id)->get()->first();
            }else{
                $customer = new Customer;
                $customer->user_id = $user->id;
                $customer->save(); 
            }

        }else{
            if(Customer::where([['email','=',$request->email],['phone','=',$request->phone]])->get()->first()){
                $customer = Customer::where([['email','=',$request->email],['phone','=',$request->phone]])->get()->first();
            }else{
                $customer = new Customer;
                $customer->name = $request->name;
                $customer->email = $request->email;
                $customer->phone = $request->phone;
                $customer->address = $request->address;
                
                $customer->save();
            }
           
        }
        $bill = new Bill;
        $bill->customer_id =$customer->id;
        $bill->status = -1;
        $bill->date = date("d/m/Y");
        $bill->save();

        foreach ($cart->items as $item) {
            $order = new Order;
            $order->bill_id = $bill->id;
            $order->product_id = $item["product"]->id;
            $order->so_luong = $item["quantity"];
            $order->save();
        }
        Session::forget('cart');
        return redirect()->back()->with('thongbao2','Đặt hàng thành công!');
    }

    

    public function getLocPhone(){
        return view('pages.boloc');
    }
    public function postLocPhone(Request $request){
        $brands = $request->brands;
        $prices = $request->prices;
        $camera = $request->camera;
        $ram = $request->ram;
        if($brands != null){
            $whereClause = "(";

            for ($i = 0; $i < count($brands) ; $i++) {
                if($i != count($brands) - 1){
                    $whereClause .= "brand = \"".$brands[$i]."\" or ";
                }else{
                    $whereClause .= "brand = \"".$brands[$i]."\"";
                }
                
            }
            $whereClause .= ") and";
        }else{
            $whereClause = "";
        }
        $phoneList = array();
        $phone = DB::select('select *,product.id as product_id from phone join product on phone.id = product.phone_id where '.$whereClause.' camera like "%'.$camera.'%" and ram like "%'.$ram.'%"');
        if($prices == null){
            $phoneList = $phone;
        }else if($prices == 1000000){
            foreach ($phone as $phone) {
                if($phone->price <= 1000000){
                    $phoneList[] = $phone;
                }
            }       
        }else if($prices == 3000000){
            foreach ($phone as $phone) {
                if($phone->price > 1000000 &&$phone->price <= 3000000){
                    $phoneList[] = $phone;
                }
            }
        }else if($prices == 6000000){
            foreach ($phone as $phone) {
                if($phone->price > 3000000 &&$phone->price <= 6000000){
                    $phoneList[] = $phone;
                }
            }
        }else if($prices == 10000000){
            foreach ($phone as $phone) {
                if($phone->price > 6000000 &&$phone->price <= 10000000){
                    $phoneList[] = $phone;
                }
            }
        }else if($prices == 15000000){
            foreach ($phone as $phone) {
                if($phone->price > 10000000 &&$phone->price <= 15000000){
                    $phoneList[] = $phone;
                }
            }
        }else if($prices == "max"){
            foreach ($phone as $phone) {
                if($phone->price > 15000000 ){
                    $phoneList[] = $phone;
                }
            }
        }
        return redirect()->back()->with('phoneList',$phoneList); 
    
    }
}
