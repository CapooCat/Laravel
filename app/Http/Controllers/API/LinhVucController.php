<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\linhVuc;
class LinhVucController extends Controller
{
    public function layDanhSach()
    {
    	$lstDanhSach=LinhVuc::all()->random(4);
    	$result = [
    		'success'	=> true,
    		'lstDanhSach'	=> $lstDanhSach
    	];
    	return response()->json($result);
    }
}
