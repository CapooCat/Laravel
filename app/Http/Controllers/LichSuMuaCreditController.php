<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\LichSuMuaCredit;
use App\NguoiChoi;
class LichSuMuaCreditController extends Controller
{
    public function index()
    {
    	$dsNguoiChoi = DB::table('nguoi_choi')
            ->leftJoin('lich_su_mua_credit', 'nguoi_choi.id', '=', 'lich_su_mua_credit.nguoi_choi_id')
            ->get();
    	return view('lichsumuacredit',compact('dsNguoiChoi'));
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
