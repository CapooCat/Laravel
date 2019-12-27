<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QuanTriVien;
class QuanTriVienController extends Controller
{
    public function index()
    {
    	$dsQTV=QuanTriVien::all();
    	return view('quantrivien',compact('dsQTV'));
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function layThongTin($ten_dang_nhap)
    {
    	$QTV=QuanTriVien::where('ten_dang_nhap','=',$ten_dang_nhap)->first();
    	return view('profilequantrivien',compact('QTV'));
    }
}
