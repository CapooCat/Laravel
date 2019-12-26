<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\LinhVuc;
use App\CauHoi;
use App\NguoiChoi;
use App\GoiCredit;

class ThungRacController extends Controller
{
    public function thungRac()
    {
    	$dsLinhVuc=LinhVuc::onlyTrashed()->get();
    	$dsCauHoi=CauHoi::onlyTrashed()->get();
    	$dsNguoiChoi=NguoiChoi::onlyTrashed()->get();
    	$dsGoiCredit=GoiCredit::onlyTrashed()->get();
    	return view('thungrac',compact('dsLinhVuc','dsCauHoi','dsNguoiChoi','dsGoiCredit'));
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function linhVuc()
    {
    	//$dsLinhVuc=LinhVuc::onlyTrashed()->get();
    	//return view('thungrac1',compact('dsLinhVuc'));
    	return redirect()->route('thung-rac')->with('linhvuc','hello');
    }
    public function cauHoi()
    {
    	return redirect()->route('thung-rac')->with('cauhoi','hello');
    }
    public function nguoiChoi()
    {
    	return redirect()->route('thung-rac')->with('nguoichoi','hello');
    }
    public function goiCredit()
    {
    	return redirect()->route('thung-rac')->with('goicredit','hello');
    }

    public function xoaLV($id)
    {
        $linhVuc=LinhVuc::withTrashed()->find($id);
        $linhVuc->forceDelete();
        return redirect()->route('thung-rac-lv');
    }
    public function xoaCH($id)
    {
        $cauHoi=CauHoi::withTrashed()->find($id);
        $cauHoi->forceDelete();
        return redirect()->route('thung-rac-ch');
    }
    public function xoaNC($id)
    {
        $nguoiChoi=NguoiChoi::withTrashed()->find($id);
        $nguoiChoi->forceDelete();
        return redirect()->route('thung-rac-nc');
    }
    public function xoaGC($id)
    {
        $goiCredit=GoiCredit::withTrashed()->find($id);
        $goiCredit->forceDelete();
        return redirect()->route('thung-rac-gc');
    }


    public function restoreLV($id)
    {
        $linhVuc=LinhVuc::withTrashed()->find($id);
        $linhVuc->restore();
        return redirect()->route('thung-rac-lv');
    }
    public function restoreCH($id)
    {
        $cauHoi=CauHoi::withTrashed()->find($id);
        $cauHoi->restore();
        return redirect()->route('thung-rac-ch');
    }
    public function restoreNC($id)
    {
        $nguoiChoi=NguoiChoi::withTrashed()->find($id);
        $nguoiChoi->restore();
        return redirect()->route('thung-rac-nc');
    }
    public function restoreGC($id)
    {
        $goiCredit=GoiCredit::withTrashed()->find($id);
        $goiCredit->restore();
        return redirect()->route('thung-rac-gc');
    }
}
