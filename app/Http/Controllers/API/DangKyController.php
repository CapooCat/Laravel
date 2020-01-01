<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\NguoiChoi;
use Illuminate\Support\Facades\Hash;
class DangKyController extends Controller
{
    public function dangKy(Request $request)
    {
    	$email=$request->email;
    	$tenTK=$request->ten_dang_nhap;
    	$mk=$request->mat_khau;
    	$nhap_lai_mk=$request->nhap_lai_mk;
    	//Kiem tra ton tai
    	$ktEmail=NguoiChoi::where('email','=',$email)->first();
    	$ktTK=NguoiChoi::where('ten_dang_nhap','=',$tenTK)->first();
    	//kiem tra neu nguoi choi ton tai thi
    	if($ktEmail!="" || $ktTK!="")
    	{
    		$res = [
                'success'   => false,
                'msg'       => 'Đăng ký thất bại, tên tài khoản hoặc email đã trùng'
            ];
            return \response()->json($res);
    	}
    	else
    	{
    		if($mk!=$nhap_lai_mk)
    		{
    			$res = [
                'success'   => false,
                'msg'       => 'Đăng ký thất bại, mật khẩu nhập lại không trùng'
            ];
             return \response()->json($res);
    		}
    		else
    		{
    			//Nếu tài khoản ko có lỗi thì thêm vào database
    			$nguoiChoi=new NguoiChoi();
    			$nguoiChoi->ten_dang_nhap=$tenTK;
    			$nguoiChoi->mat_khau=Hash::make($mk);
    			$nguoiChoi->email=$email;
    			$nguoiChoi->hinh_dai_dien="";
    			$nguoiChoi->diem_cao_nhat=0;
    			$nguoiChoi->credit=0;
    			$nguoiChoi->save();
    			//Tim nguoi choi vua moi dang ky
    			$nguoiChoi=NguoiChoi::where('ten_dang_nhap','=',$tenTK)->first();
    			$res = [
                'success'   => true,
                'tt'=>$nguoiChoi,
                'msg'       => 'Đăng ký thành công!'
            ];
             return \response()->json($res);
    		}
    	}
    }
}
