<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
// use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
session_start();

class CheckoutController extends Controller
{
    public function login_checkout()
    {
        $thuonghieu_sanpham = DB::table('thuonghieu')->get();
        $sanpham = DB::table('sanpham')->get();
        return view('pages.dangnhap')->with('thuonghieu', $thuonghieu_sanpham)->with('pham', $sanpham);
    }
    public function add_customer(Request $request)
    {
        $data =array();
        $data['hovaten'] = $request->hovaten;
        $data['sodienthoai'] = $request->sodienthoai;
        $data['email'] = $request->email;
        $data['matkhau'] = md5($request->matkhau);
        $khachhang_id = DB::table('khachhang')->insertGetId($data);
        Session::put('khachhang_id',$khachhang_id);
        Session::put('hovaten', $request->hovaten);
        return Redirect::to('/thanhtoan');
    }
    public function checkout()
    {
        $thuonghieu_sanpham = DB::table('thuonghieu')->get();
        $sanpham = DB::table('sanpham')->get();
        return view('pages.thanhtoan')->with('thuonghieu', $thuonghieu_sanpham)->with('pham', $sanpham);
    }
    public function save_checkout(Request $request)
    {
        $data =array();
        $data['tenvanchuyen'] = $request->tenvanchuyen;
        $data['vanchuyen_dienthoai'] = $request->vanchuyen_dienthoai;
        $data['vanchuyen_email'] = $request->vanchuyen_email;
        $data['vanchuyen_diachi'] = $request->vanchuyen_diachi;
        $data['vanchuyen_ghichu'] = $request->vanchuyen_ghichu;
        $vanchuyen_id = DB::table('giaohang')->insertGetId($data);
        Session::put('vanchuyen_id',$vanchuyen_id);
        return Redirect::to('/tongtien');
    }
    public function payment()
    {
        $thuonghieu_sanpham = DB::table('thuonghieu')->get();
        $sanpham = DB::table('sanpham')->get();
        return view('pages.tongtien')->with('thuonghieu', $thuonghieu_sanpham)->with('pham', $sanpham);
    }
    public function order(Request $request)
    {
        
        $data =array();
        $data['phuongthuc_tongtien'] = $request->payment_option;
        $data['trangthai_tongtien'] = 'Đang chờ xử lý';
        $tongtien_id = DB::table('tongtien')->insertGetId($data);
        // $content = Cart::content();
        // echo $content;
        $order_data =array();
        $order_data['khachhang_id'] = Session::get('khachhang_id');
        $order_data['vanchuyen_id'] = Session::get('vanchuyen_id');
        $order_data['tongtien_id'] = $tongtien_id;
        $order_data['tonggia_dathang'] = Cart::total();
        $order_data['trangthai_dathang'] = 'Dang chờ xử lý';
        $order_id = DB::table('dathang')->insertGetId($order_data);

        // $content = Cart::content();
        // foreach ($content as $v_content) {
        //     $order_d_data['order_id'] = $order_id;
        //     $order_d_data['product_id'] =  'Dang chờ xử lý';
        //     $order_d_data['product_giaban'] = $v_content->price;
        //     $order_d_data['product_soluongton'] = $v_content->qty;
        //     DB::table('tbl_order')->insert($order_d_data);

        // }
        if($data['phuongthuc_tongtien'] == 1)
        {
            Cart::destroy();
            $thuonghieu_sanpham = DB::table('thuonghieu')->get();
            $sanpham = DB::table('sanpham')->get();
           return view('pages.giaohang')->with('thuonghieu', $thuonghieu_sanpham)->with('pham', $sanpham);
        }else if($data['phuongthuc_tongtien'] == 2)
        {
            Cart::destroy();
            $thuonghieu_sanpham = DB::table('thuonghieu')->get();
            $sanpham = DB::table('sanpham')->get();
           return view('pages.giaohang')->with('thuonghieu', $thuonghieu_sanpham)->with('pham', $sanpham);
        }else
        {
            Cart::destroy();
            $thuonghieu_sanpham = DB::table('thuonghieu')->get();
            $sanpham = DB::table('sanpham')->get();
           return view('pages.giaohang')->with('thuonghieu', $thuonghieu_sanpham)->with('pham', $sanpham);
        }

        // return Redirect::to('/payment');
    }
    public function logout_checkout()
    {
        Session::flush();
        return Redirect::to('/dangnhap-thanhtoan');
    }
    public function login(Request $request)
    {
        $email = $request->email_account;
        $password = md5($request->password_account);
        $result = DB::table('khachhang')->where('email',$email)->where('matkhau',$password)->get();
        if($result){
            return Redirect::to('/thanhtoan');
        }else{
            return Redirect::to('/dangnhap-thanhtoan');
        }

        Session::put('khachhang_id',$result->khachhang_id);
        
    }
}
