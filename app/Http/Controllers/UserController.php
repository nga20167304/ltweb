<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Hash;

use App\Bill;
use App\Order;
use App\User;


class UserController extends Controller
{
     public function getDanhSach(){
        $user = User::all();
        return view('admin.user.danhsach',['user'=>$user]);
    }

    public function getThem(){
        return view('admin.user.them');
    }

    public function postThem(Request $request){
      	$user = new User;

      	$user->name = $request->name;
      	$user->birthday = $request->birthday;
      	$user->sex = $request->sex;
      	$user->email = $request->email;
      	$user->phone = $request->phone;
      	$user->address = $request->address;
      	$user->username = $request->username;
      	$user->password = $request->password;
      	$user->access = $request->access;

      	$user->save();

        return redirect('admin/user/them')->with('thongbao','Thêm user thành công');
    }

    public function getSua($id){
    	$user = User::find($id);
        return view('admin.user.sua',['user'=>$user]);
    }

    public function postSua(Request $request,$id){
       	$user = User::find($id);

       	$user->name = $request->name;
      	$user->birthday = $request->birthday;
      	$user->sex = $request->sex;
      	$user->email = $request->email;
      	$user->phone = $request->phone;
      	$user->address = $request->address;
      	$user->username = $request->username;
      	$user->password = Hash::make($request->password);
      	$user->access = $request->access;

      	$user->save();

       
        return redirect('admin/user/sua/'.$id)->with('thongbao','Sửa thành công ');

    }

    public function getXoa($id){
    	$user = User::find($id);
    	$user->delete();
    	return redirect('admin/user/danhsach')->with('thongbao','Xóa thành công user');

    }

    public function getLogin(){
      return view('login');
    }

    public function getSignUp(){
      return view('signup');
    }

    public function postSignUp(Request $request){
      $user = new User();
      $user->name = $request->name;
      $user->birthday = $request->birthday;
      $user->sex = $request->sex;
      $user->email = $request->email;
      $user->phone = $request->phone;
      $user->address = $request->address;
      $user->username = $request->username;
      $user->username = $request->username;
      $user->password = Hash::make($request->password);
      $user->access = 0;

      $user->save();
      return redirect("login")->with('thanhcong','Đăng ký tài khoản thành công, đăng nhập vào website');
    }

    public function postLogin(Request $request){
      if(Auth::attempt(['username'=>$request->username,'password'=>$request->password])){
        if((Auth::user()->access == 1)||(Auth::user()->access == 2)){
          return redirect('admin/bill/chuagiao');
        }else{
          return redirect("");
        }
      }else{
        return redirect('login')->with('thongbao','Sai tên đăng nhập hoặc mật khẩu');
      }
    }

    public function getLogout(){
      Auth::logout();
      return redirect('login');

    }

    public function postUserSetting(Request $request){
      if(Auth::check()){
        $user = User::find(Auth::user()->id);

        $user->name = $request->name;
        $user->birthday = $request->birthday;
        $user->sex = $request->sex;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;

        $user->save();

        return redirect()->back()->with('thongbao','Thay đổi thông tin thành công');
      }
    }
}

