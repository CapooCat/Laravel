<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\QuanTriVien;
use DB;
use Auth;
use Illuminate\Support\Facades\Hash;
class DangKyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('pages-register'); 
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function DangKy(Request $request)
    {
        $rules = [
            'ho_ten'=>'required',
            'email' =>'required',
            'password' => 'required',
            'repassword'=>'required'
        ];
        $messages = [
            'ho_ten.required'=>'Họ tên là trường bắt buộc',
            'email.required' => 'Email là trường bắt buộc',
            'password.required' => 'Mật khẩu là trường bắt buộc',
            'repassword.required'=>'Mật khẩu là trường bắt buộc'
            
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        else if($request->password!=$request->repassword)
        {
            return redirect()->back()->with('nhap_lai_mk','Nhập lại mật khẩu không đúng');
        }

        else
        {
            $qtv=DB::table('quan_tri_vien')->where('ten_dang_nhap',$request->email)
                                            ->first();
            if($qtv!="")
            {
                 return redirect()->back()->with('thongbao','Tài khoản đã tồn tại');
            }
            else
            {
                $register_qtv=new QuanTriVien();
                $register_qtv->ten_dang_nhap=$request->email;
                $register_qtv->mat_khau=Hash::make($request->password);
                $register_qtv->ho_ten=$request->ho_ten;
                $register_qtv->save();
                return redirect()->back()->with('thongbao','Đăng ký thành công');
            }
        }

    }
}
