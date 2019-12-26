<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\GoiCredit;
class GoiCreditController extends Controller
{
    public function layDanhSach()
    {
    	$dsGoiCredit=GoiCredit::all();
    	$result = [
    		'success'	=> true,
    		'lstDanhSach'	=> $dsGoiCredit
    	];
    	return response()->json($result);
    }
}
