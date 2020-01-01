<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\NguoiChoi;
use App\GoiCredit;
use Illuminate\Support\Facades\Hash;
class NguoiChoiController extends Controller
{
    public function layDanhSach(Request $request) {
    	$page = $request->query('page', 1);
    	$limit = $request->query('limit',25);

    	$listNguoiChoi = NguoiChoi::orderBy('diem_cao_nhat', 'desc')->skip(($page - 1) * $limit)->take($limit)->get();

    	return response()->json([
    		'total' =>NguoiChoi::count(),
    		'data' => $listNguoiChoi
    	]);
    }
    //So sanh diem cao nhat
    public function ssDiemCaoNhat(Request $request)
    {
    	$user=NguoiChoi::find($request->nguoi_choi_id);
    	$diemChoiDuoc=$request->diem;
    	if($user->diem_cao_nhat<$diemChoiDuoc)
    	{
    		$user->diem_cao_nhat=$diemChoiDuoc;
    		$user->save();
    		$res = [
                'success'   => true,
                'msg'       => 'Cập nhật điểm thành công'
            ];
            return \response()->json($res);
    	}
    	else
    	{
    		$res = [
                'success'   => false,
                'msg'       => 'Cập nhật điểm thất bại'
            ];
            return \response()->json($res);
    	}
    }
    public function napCredit(Request $request)
    {
        $user=NguoiChoi::find($request->nguoi_choi_id);
        $goiCredit=GoiCredit::find($request->goi_credit_id);
        if($user!="" && $goiCredit!="")
        {
            $user->credit=$user->credit+$goiCredit->credit;
            $user->save();
            $res = [
                'success'   => true,
                'msg'       => 'Nạp credit thành công'
            ];
            return \response()->json($res);
        }
        else
        {
            $res = [
                'success'   => false,
                'msg'       => 'Nạp credit thất bại'
            ];
            return \response()->json($res);
        }
    }
    public function truCredit(Request $request)
    {
        $soCreditTru=$request->credit_tru;
        $user_id=$request->nguoi_choi_id;

        $user=NguoiChoi::find($user_id);

        if($user!="")
        {
            if($user->credit<$soCreditTru)
            {
                $user->credit=0;
                $user->save();
                $res = [
                    'success'   => false,
                    'msg'       => 'Bạn không đủ số dư trong tài khoản'
                ];
                return \response()->json($res);
            }
            else if($user->credit==0)
            {
                $res = [
                'success'   => false,
                'msg'       => 'Bạn không đủ số dư trong tài khoản'
                ];
                 return \response()->json($res);
            }
            else
            {
                $user->credit=$user->credit-$soCreditTru;
                $user->save();
                $res = [
                    'success'   => true,
                    'msg'       => 'Thành công'
                ];
                return \response()->json($res);
            }
        }
        else
        {
            $res = [
                'success'   => false,
                'msg'       => 'Trừ credit thất bại'
            ];
            return \response()->json($res);
        }
    }
    public function suaThongTin(Request $request)
    {
        //post 4 cái:
        $id=$request->nguoi_choi_id;
        $tenDangNhap=$request->ten_dang_nhap;
        $email=$request->email;
        $matKhau=Hash::make($request->mat_khau);

        $user=NguoiChoi::find($id);
        if($user!="")
        {
            $user->ten_dang_nhap=$tenDangNhap;
            $user->email=$email;
            $user->mat_khau=$matKhau;
            $user->save();

            $res = [
                'success'   => true,
                'msg'       => 'Sửa thông tin thành công'
            ];
            return \response()->json($res);
        }
        else
        {
            $res = [
                'success'   => false,
                'msg'       => 'Sửa thông tin thất bại'
            ];
            return \response()->json($res);
        }

    }
}