<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\NguoiChoi;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailQuenMatKhau;
class SendMailController extends Controller
{
    public function sendMail(Request $request)
    {
    	//Nhận post tên đăng nhập
    	$user_id=NguoiChoi::where('ten_dang_nhap','=',$request->ten_dang_nhap)->first();
        if($user_id=="")
        {
            $res = [
                'success'   => false,
                'msg'       => 'Tài khoản ko tồn tại'
            ];
            return \response()->json($res);
        }
        else
        {
        	$user=NguoiChoi::find($user_id->id);
            if($user=="")
        	{
        		$res = [
                    'success'   => false,
                    'msg'       => 'Tìm mật khẩu thất bại'
                ];
                return \response()->json($res);
        	}
        	else
        	{
        		 $user->mat_khau=Str::random(6);
        		 $user->save();
        		 //Chọn gmail muốn gửi
        		 Mail::to($user->email)->send(new MailQuenMatKhau($user));
        		 $user->mat_khau=Hash::make($user->mat_khau);
        		 $user->save();
        		 $res = [
                    'success'   => true,
                    'msg'       => 'Tìm mật khẩu thành công'
                ];
                return \response()->json($res);
        	}
        }

    }
}
