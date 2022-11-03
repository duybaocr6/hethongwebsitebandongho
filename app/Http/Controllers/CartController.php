<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Cart;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class CartController extends Controller
{
    public function index(Request $request){
       
        $sanphamid = $request->productid_hidden;
        $quantity = $request->qty;
        $thongtinsanpham = DB::table('sanpham')->where('sanpham_id', $sanphamid)->first();
        $data['id']=$sanphamid;
        $data['qty']=$quantity;
        $data['name']=$thongtinsanpham->sanpham_image;
        $data['weight']='123';
        $data['price']=$thongtinsanpham->sanpham_giaban;
        $data['options']['image']=$thongtinsanpham->sanpham_image;
        Cart::add($data);
        return Redirect::to('/xemgiohang');
        // Cart::destroy(); 
    }
    public function show_cart()
    {
        $thuonghieu_sanpham = DB::table('thuonghieu')->get();
        $sanpham = DB::table('sanpham')->limit(6)->get();
        return view('pages.giohang')->with('thuonghieu', $thuonghieu_sanpham)->with('pham', $sanpham);
    }
    public function delete($rowId)
    {
        Cart::update($rowId,0);
        return Redirect::to('/xemgiohang');
    }
    public function update(Request $request)
    {
        $rowId=$request->rowIdcart;
        $qty = $request->quantitycart;
        Cart::update($rowId,$qty);
        return Redirect::to('/xemgiohang');
    }
    // public function giohang_ajax(Request $request)
    // {
    //     $data = $request->all();
    //     $session_id = substr(md5(microtime()),rand(0,26),5);
    //     $cart = Session::get('cart');
    //     if($cart == true){
    //         $is_avaiable = 0;
    //         foreach($cart as $key => $val){
    //             if($val['cart_product_id']==$data['cart_product_id']){
    //                 $is_avaiable++;
    //                 $cart[]= array(
    //                     'session_id'=>$data['session_id'],
    //                     'cart_product_id'=>$data['cart_product_id'],
    //                     'cart_product_image'=>$data['cart_product_image'],
    //                     'cart_product_qty'=>$data['cart_product_qty'],
    //                     'cart_product_price'=>$data['cart_product_price'],
    //                 );
    //                 Session::put('cart',$cart);
    //             }
    //         }
    //         if($is_avaiable == 0){
    //             $cart[]= array(
    //                 'session_id'=>$data['session_id'],
    //                 'cart_product_id'=>$data['cart_product_id'],
    //                 'cart_product_image'=>$data['cart_product_image'],
    //                 'cart_product_qty'=>$data['cart_product_qty'],
    //                 'cart_product_price'=>$data['cart_product_price'],
    //             );
    //             Session::put('cart',$cart);
    //         }
    //     }
    //     // else
    //     // {
    //     //     $cart[$key]= array(
    //     //         'session_id'=>$val['session_id'],
    //     //         'product_id'=>$val['cart_product_id'],
    //     //         'product_image'=>$val['cart_product_image'],
    //     //         'product_qty'=>$val['cart_product_qty']+$data['cart_product_qty'],
    //     //         'product_price'=>$val['cart_product_price'],
    //     //     );
    //     // }
    //     Session::put('cart',$cart);
    //     Session::save();
    // }
    // public function show_cart_ajax(Request $request)
    // {
    //     $thuonghieu_sanpham = DB::table('thuonghieu')->get();
    //     $sanpham = DB::table('sanpham')->limit(6)->get();
    //     return view('pages.giohangajax')->with('thuonghieu', $thuonghieu_sanpham)->with('pham', $sanpham);
    // }
}
