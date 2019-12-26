<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NguoiChoi;
use App\LuotChoi;
use App\CauHoi;
use DB;
class ChiTietLuotChoiController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
	public function index(){

    $dsCTLuotChoi = DB::table('chi_tiet_luot_choi')
            ->leftJoin('cau_hoi', 'cau_hoi.id', '=', 'chi_tiet_luot_choi.cau_hoi_id')
            ->leftJoin('luot_choi', 'luot_choi.id', '=', 'chi_tiet_luot_choi.luot_choi_id')
            ->leftJoin('nguoi_choi', 'nguoi_choi.id', '=', 'luot_choi.nguoi_choi_id')
            ->select('chi_tiet_luot_choi.id','nguoi_choi.ten_dang_nhap','cau_hoi.noi_dung','chi_tiet_luot_choi.phuong_an')
            ->get();
    	return view('chitietluotchoi',compact('dsCTLuotChoi'));
    }
}
