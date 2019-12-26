<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BaiTho;

class BaiThoController extends Controller
{
    // Lay danh sach bai tho
    public function layDanhSach() 
    {
    	$tap_tho = BaiTho::all();
    	$result = [
    		'success'	=> true,
    		'tap_tho'	=> $tap_tho
    	];
    	return response()->json($result);
    }

    # lay bai tho theo id
    public function layBaiTho($id) {
    	$bai_tho = BaiTho::find($id);
    	if($bai_tho == null)
    	{
    		return response()->json(['success' => false]);
    	}
    	
    	$result = [
    		'success'	=> true,
    		'bai_tho'	=> $bai_tho
    	];
    	return response()->json($result);
    }
}
