<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Sesstion;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

session_start();

class HomeController extends Controller
{
    public function index()
    {
        $thuonghieu_sanpham = DB::table('thuonghieu')->get();
        $sanpham = DB::table('sanpham')->take(6)->get();
        return view('pages.home')->with('thuonghieu', $thuonghieu_sanpham)->with('sanpham', $sanpham);
    }
    public function index1()
    {
        $thuonghieu_sanpham = DB::table('thuonghieu')->get();
        $sanpham = DB::table('sanpham')->take(6)->get();
        return view('pages.dangnhap')->with('thuonghieu', $thuonghieu_sanpham)->with('sanpham', $sanpham);
    }
    public function index2($dmsanpham_id)
    {
        $thuonghieu_sanpham = DB::table('thuonghieu')->get();
        $sanpham = DB::table('sanpham')->take(6)->get();
        $ctsanpham_id = DB::table('sanpham')
        ->join('thuonghieu', 'thuonghieu.thuonghieu_id','=', 'sanpham.sanpham_math')
        ->where('sanpham.sanpham_id',$dmsanpham_id)->limit(1)->get();
        foreach ($ctsanpham_id as $key => $value) {
            $sanpham_id = $value->sanpham_math;
        }
        $sanpham_lq = DB::table('sanpham')
        ->join('thuonghieu', 'thuonghieu.thuonghieu_id','=', 'sanpham.sanpham_math')
        ->where('sanpham.sanpham_math',$sanpham_id)->WhereNotIn('sanpham.sanpham_id',[$dmsanpham_id])->get();

        return view('pages.ctsanpham')->with('thuonghieu', $thuonghieu_sanpham)->with('sanpham', $sanpham)
        ->with('ctsanpham', $ctsanpham_id)->with('sanphamlq', $sanpham_lq);
    }
    public function index3()
    {
        return view('pages.lienhe');
    }
    public function index4($thuonghieu_id)
    {
        $thuonghieu_sanpham = DB::table('thuonghieu')->get();
        $sanpham = DB::table('sanpham')->take(6)->get();
        $thuonghieu_sanpham_id = DB::table('sanpham')
        ->join('thuonghieu', 'thuonghieu.thuonghieu_id','=', 'sanpham.sanpham_math')
        ->where('sanpham.sanpham_math',$thuonghieu_id)->get();
        return view('pages.danhmucsanpham')->with('thuonghieu', $thuonghieu_sanpham)->with('sanpham', $sanpham)->with('san', $thuonghieu_sanpham_id);
    }
    public function index5($sanpham_kichco)
    {
        $thuonghieu_sanpham = DB::table('thuonghieu')->get();
        $sanpham = DB::table('sanpham')->take(6)->get();
        $sanpham_kichco_id = DB::table('sanpham')
        ->where('sanpham.sanpham_kichco',$sanpham_kichco)->get();
        return view('pages.kichcodaydeo')->with('thuonghieu', $thuonghieu_sanpham)->with('sanpham', $sanpham)->with('san', $sanpham_kichco_id);
    }
    public function index6(Request $request)
    {
        $keyword = $request->keyword_submit;
        $thuonghieu_sanpham = DB::table('thuonghieu')->get();
        $sanpham = DB::table('sanpham')->take(6)->get();
        $timkiem = DB::table('sanpham')
        ->where('sanpham_id','like','%'.$keyword.'%')->get();
        return view('pages.timkiem')->with('thuonghieu', $thuonghieu_sanpham)->with('sanpham', $sanpham)->with('timkiem', $timkiem);
    }
    public function index7()
    {
        $thuonghieu_sanpham = DB::table('thuonghieu')->get();
        $sanpham = DB::table('sanpham')->take(6)->get();
        $blog = DB::table('baiviet')->take(2)->get();
        return view('pages.blog')->with('thuonghieu', $thuonghieu_sanpham)->with('sanpham', $sanpham)->with('blog', $blog);
    }
    public function index8()
    {
        $thuonghieu_sanpham = DB::table('thuonghieu')->get();
        $sanpham = DB::table('sanpham')->take(6)->get();
        return view('pages.sanphamyeuthich')->with('thuonghieu', $thuonghieu_sanpham)->with('sanpham', $sanpham);
    }
    public function index9(Request $request)
    {
        $data =array();
        $data['danhgia_hovaten'] = $request->danhgia_hovaten;
        $data['danhgia_email'] = $request->danhgia_email;
        $data['danhgia_tieude'] = $request->danhgia_tieude;
        $data['danhgia_noidung'] = $request->danhgia_noidung;
        $danhgia_id = DB::table('danhgia')->insertGetId($data);
        Session::put('danhgia_id',$danhgia_id);
        return Redirect::to('/trangchu');
    }
}
 