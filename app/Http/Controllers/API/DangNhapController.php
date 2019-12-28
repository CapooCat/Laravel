<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\NguoiChoi;
use Auth;
use JWTAuth;
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
                'msg'       => 'Đăng nhập thất bại, mời thử lại'
            ];
            return \response()->json($res);
        }
        $res = [
            'success'   => true,
            'msg'       => 'Đăng nhập thành công',
            'token'     => $token,
            'type'      => 'Bearer', // you can ommit this
            'tk'        =>$credentials,
            'id'        =>auth('api')->user()->id,
            'ten_dang_nhap'=>auth('api')->user()->ten_dang_nhap,
            'credit'    => auth('api')->user()->credit,
            'expires'   => auth('api')->factory()->getTTL()
        ];
        return \response()->json($res);
    }

    public function layThongTin(Request $request)
    {
        //Khi lấy thông tin người chơi thì post token của người chơi hiện tại
      $user = auth('api')->user($request->token);
      if($user!="")
      {
        $res = [
                'success'   => true,
                'msg'       => 'Lấy thông tin thành công',
                'user'      =>$user
            ];
            return \response()->json($res);
      }
      else
      {
        $res = [
                'success'   => false,
                'msg'       => 'Lấy thông tin thất bại'
            ];
            return \response()->json($res);
      }
    }
    public function dangXuat(Request $request)
    {
        if(auth('api')->check($request->token))
        {
            auth('api')->logout($request->token);
            $res = [
                'success'   => true,
                'msg'       => 'Đăng xuất thành công'
            ];
            return \response()->json($res);
        }
        else
        {
            $res = [
                'success'   => false,
                'msg'       => 'Đăng xuất thất bại'
            ];
            return \response()->json($res);
        }
    }
}
