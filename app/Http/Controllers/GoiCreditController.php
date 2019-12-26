<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GoiCredit;
class GoiCreditController extends Controller
{
    public function index()
    {
    	$dsGoiCredit=GoiCredit::all();
    	return view('goicredit',compact('dsGoiCredit'));
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function updateThem(Request $request)
    {
    	try {
        $goiCredit =new GoiCredit();
        $goiCredit->ten_goi=$request->ten_goi;
        $goiCredit->credit=$request->credit;
        $goiCredit->so_tien=$request->so_tien;
       $kq= $goiCredit->save();

            if ($kq) {
                return redirect()
                        ->route('trang-chu.goi-credit')
                        ->with('msg', 'Cập nhật câu hỏi thành công');
            }
            return back()
                    ->withErrors('Cập nhật câu hỏi thất bại')
                    ->withInput();
        } catch (Exception $e) {
            return back()
                    ->withErrors('Có lỗi xảy ra, mời thử lại sau')
                    ->withInput();
        }
    }
    public function themGoiCredit()
    {
    	return view('themgoicredit');
    }
    public function suaGoiCredit($id)
    {
    	$dsGoiCredit=GoiCredit::findOrFail($id);
    	return view('suagoicredit',compact('dsGoiCredit'));
    }
    public function updateSua(Request $request)
    {
        try {
        $goiCredit =GoiCredit::findOrFail($request->id);
        $goiCredit->ten_goi=$request->ten_goi;
        $goiCredit->credit=$request->credit;
        $goiCredit->so_tien=$request->so_tien;
      	$kq= $goiCredit->save();

            if ($kq) {
                return redirect()
                        ->route('trang-chu.goi-credit')
                        ->with('msg', 'Cập nhật câu hỏi thành công');
            }
            return back()
                    ->withErrors('Cập nhật câu hỏi thất bại')
                    ->withInput();
        } catch (Exception $e) {
            return back()
                    ->withErrors('Có lỗi xảy ra, mời thử lại sau')
                    ->withInput();
        }
    }
    public function xoaGoiCredit(Request $request)
    {
        $goiCredit_xoa=GoiCredit::findOrFail($request->input('id'));
         if($goiCredit_xoa->delete())
        {
            echo 'Data Delete';
        }
    }
}
