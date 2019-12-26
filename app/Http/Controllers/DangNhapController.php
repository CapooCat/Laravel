<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Validator;
use App\NguoiChoi;
use App\QuanTriVien;
use Illuminate\Support\Facades\Hash;
class DangNhapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check())
            return redirect()->route('trang-chu.home');
        return view('login');
    }
 
    public function DangNhap(Request $request)
    {
        $rules = [
            'email' =>'required',
            'password' => 'required'
        ];
        $messages = [
            'email.required' => 'Email là trường bắt buộc',
            'password.required' => 'Mật khẩu là trường bắt buộc',
            
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
         else {
        // Nếu dữ liệu hợp lệ sẽ kiểm tra trong csdl
            $credentials=$request->only(['email','password']);
            $qtv=QuanTriVien::where('ten_dang_nhap',$credentials['email'])->first();
            if($qtv==null)
            {
                 return redirect()->back()->with('thongbao','Sai tên đăng nhập');
            }
            else if(!Hash::check($credentials['password'], $qtv->mat_khau))
            {
                return redirect()->back()->with('thongbao','Sai mật khẩu');
            }
           //$data = NguoiChoi::where('email','=',$email)->where('mat_khau','=',$password)->get();
                //if(count($data)>0)
                //{
                //if($data[0]->email==$email && $data[0]->mat_khau==$password)
                    //return redirect('/trang-chu'); 
                //}
                //else
                    //return redirect()->back()->with('thongbao','Đăng nhập thất bại');
                Auth::login($qtv);
                return redirect('/trang-chu/linh-vuc');
            
           
                                

        
        }
    }
    public function DangXuat()
    {
        Auth::logout();
        return redirect()->route('trang-chu.dang-nhap');
            
    }
}

