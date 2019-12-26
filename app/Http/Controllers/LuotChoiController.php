<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use NguoiChoi;
use LuotChoi;
use DB;
class LuotChoiController extends Controller
{
    public function index()
    {
    	$dsLuotChoi = DB::table('luot_choi')
            ->leftJoin('nguoi_choi', 'nguoi_choi.id', '=', 'luot_choi.nguoi_choi_id')
            ->get();
    	return view('luotchoi',compact('dsLuotChoi'));
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
