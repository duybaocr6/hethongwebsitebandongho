<?php

use Illuminate\Support\Facades\Route;

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
//front end
Route::get('/', 'HomeController@index');
Route::get('/trangchu', 'HomeController@index');
Route::get('/dangnhap','HomeController@index1');
Route::get('/ctsanpham/{sanpham_id}','HomeController@index2');
Route::get('/lienhe','HomeController@index3');
Route::get('/danhmucsanpham/{thuonghieu_id}','HomeController@index4');
Route::get('/kichcodaydeo/{sanpham_kichco}','HomeController@index5');
Route::post('/timkiem','HomeController@index6');
Route::get('/blog','HomeController@index7');
Route::get('/danhsachsanpham', 'HomeController@index8');
Route::post('/luulienhe','HomeController@index9');
//giohang
Route::post('/giohang','CartController@index');
// Route::post('/giohangajax','CartController@giohang_ajax');
Route::get('/xemgiohang','CartController@show_cart');
// Route::get('/xemgiohang_ajax','CartController@show_cart_ajax');
Route::get('/xoa/{rowId}','CartController@delete');
Route::post('/sua','CartController@update');
//checkout
Route::post('/dangnhap-thanhtoan','CheckoutController@login');
Route::get('/dangnhap-thanhtoan','CheckoutController@login_checkout');
Route::get('/dangxuat-thanhtoan','CheckoutController@logout_checkout');
Route::post('/khachhang','CheckoutController@add_customer');
Route::post('/dathang','CheckoutController@order');
Route::get('/thanhtoan','CheckoutController@checkout');
Route::get('/tongtien','CheckoutController@payment');
Route::post('/luuthanhtoan','CheckoutController@save_checkout');
