<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\NguoiChoi;

class DangNhapController extends Controller
{
    public function dangNhap(Request $request)
    {
        $credentials =[
            'ten_dang_nhap'=>$request->ten_dang_nhap,
            'password'=>$request->mat_khau
        ];
        $token = auth('api')->attempt($credentials);
        if (!$token)
        {
            $res = [
                'success'   => false,
                'msg'       => 'Đăng nhập thất bại, mời thử lại',
                'tk'        =>$credentials
            ];
            return \response()->json($res);
        }
        $res = [
            'success'   => true,
            'msg'       => 'Đăng nhập thành công',
            'token'     => $token,
            'type'      => 'Bearer', // you can ommit this
            'expires'   => auth('api')->factory()->getTTL() * 60 * 24 * 7
        ];
        return \response()->json($res);
    }

    public function layThongTin()
    {
        return auth('api')->user();
    }
}
