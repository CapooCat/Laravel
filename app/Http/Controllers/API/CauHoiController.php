<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CauHoi;
use App\LinhVuc;
class CauHoiController extends Controller
{
    public function loadCauHoi(Request $request)
    {
    	$linhVucID=$request->linh_vuc_id;
    	$dsCauHoi=CauHoi::where('linh_vuc_id','=',$linhVucID)->get();
    	if($dsCauHoi!="")
    	{
    	 $res = [
                'success'   => true,
                'dsCauHoi'	=>$dsCauHoi
            ];
            return \response()->json($res);
        }

    }
}
