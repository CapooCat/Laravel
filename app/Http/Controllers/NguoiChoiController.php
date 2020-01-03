<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NguoiChoi;
use DB;
class NguoiChoiController extends Controller
{
    public function index()
    {
    	$dsNguoiChoi=NguoiChoi::all();
    	return view('nguoichoi',compact('dsNguoiChoi'));
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
     public function suaNguoiChoi($id)
    {
    	$dsNguoiChoi=NguoiChoi::find($id);
        return view('suanguoichoi',compact('dsNguoiChoi'));
    }
    public function update(Request $request)
    {
        $NguoiChoi =NguoiChoi::findOrFail($request->id);
        $NguoiChoi->ten_dang_nhap= $request->ten_dang_nhap;
        $NguoiChoi->email=$request->email;
        $NguoiChoi->diem_cao_nhat=$request->diem_cao_nhat;
        $NguoiChoi->credit=$request->credit;
        $kq= $NguoiChoi->save();

            if ($kq) {
                return redirect()
                        ->route('trang-chu.ql-nguoi-choi')
                        ->with('msg', 'Cập nhật câu hỏi thành công');
                    }
            else
            {
                return back()->with('thongbaoloi','Có lỗi xảy ra,Cập nhật người chơi thất bại');
            }
    }

    public function themNguoiChoi()
    {
    	return view('themnguoichoi');
    }

    public function updateThem(Request $request)
    {
        $kttt=DB::table('nguoi_choi')->where('ten_dang_nhap','=',$request->ten_dang_nhap)->first();
         if($kttt!="")
        {
            return redirect()->back()->with('thongbaoloi','Người chơi đã tồn tại !');
        }
        else
        {
        $NguoiChoi =new NguoiChoi();
        $NguoiChoi->ten_dang_nhap= $request->ten_dang_nhap;
        $NguoiChoi->mat_khau=$request->mat_khau;
        $NguoiChoi->email=$request->email;
        $NguoiChoi->hinh_dai_dien="";
        $NguoiChoi->diem_cao_nhat=$request->diem_cao_nhat;
        $NguoiChoi->credit=$request->credit;
        $NguoiChoi->save();
        return redirect()->back()->with('thongbaosuccess','Thêm người chơi thành công');
        }
    }
    public function xoaNguoiChoi(Request $request)
    {
        $nguoiChoi_xoa=NguoiChoi::findOrFail($request->input('id'));
        if($nguoiChoi_xoa->delete())
        {
            echo 'Data Delete';
        }
    }
}
