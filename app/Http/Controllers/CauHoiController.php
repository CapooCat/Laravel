<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LinhVuc;
use App\CauHoi;
use DB;
class CauHoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsLinhVuc=LinhVuc::all();
        return view('cauhoi', compact('dsLinhVuc'));
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function chonLinhVuc($id)
    {
        $dsLinhVuc=LinhVuc::all();
        $titleLinhVuc=LinhVuc::find($id)->toArray();
        $dsCauHoi=CauHoi::where('linh_vuc_id','=',$id)->get();
        return view('cauhoi',compact('dsCauHoi','dsLinhVuc','titleLinhVuc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dsLinhVuc=LinhVuc::all();
        return view('layout', compact('dsLinhVuc'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $linhVuc=new LinhVuc();
        $linhVuc->ten_linh_vuc=$request->ten_linh_vuc;
        $linhVuc->save();
        return redirect()->action('CauHoiController@create');
    }

    
    public function update(Request $request)
    {
        $CauHoi =CauHoi::findOrFail($request->id);
        $CauHoi->noi_dung= $request->noi_dung;
        $CauHoi->linh_vuc_id=$request->linh_vuc_id;
        $CauHoi->phuong_an_a=$request->phuong_an_a;
        $CauHoi->phuong_an_b=$request->phuong_an_b;
        $CauHoi->phuong_an_c=$request->phuong_an_c;
        $CauHoi->phuong_an_d=$request->phuong_an_d;
        $CauHoi->dap_an=$request->dap_an;
        $CauHoi->save();
        return redirect()->route('trang-chu.chon-linh-vuc',$request->linh_vuc_id)->with('thongbaosuccess','Sửa câu hỏi thành công !');
    }
    public function ThemCauHoiTheoLV(Request $request)
    {
        $kiem_tra_tt=DB::table('cau_hoi')->where('noi_dung','=',$request->noi_dung)->first();
        if($kiem_tra_tt!="")
        {
            return redirect()->back()->with('thongbaoloi','Câu hỏi đã tồn tại');
        }
        else if($request->noi_dung==""||$request->phuong_an_a==""||$request->phuong_an_b==""||$request->phuong_an_c==""||$request->phuong_an_d==""||$request->dap_an=="")
        {
            return redirect()->back()->with('thongbaoloi','Không được để trống');
        }
        else
        {
            $CauHoi =new CauHoi();
            $CauHoi->noi_dung= $request->noi_dung;
            $CauHoi->linh_vuc_id=$request->linh_vuc_id;
            $CauHoi->phuong_an_a=$request->phuong_an_a;
            $CauHoi->phuong_an_b=$request->phuong_an_b;
            $CauHoi->phuong_an_c=$request->phuong_an_c;
            $CauHoi->phuong_an_d=$request->phuong_an_d;
            $CauHoi->dap_an=$request->dap_an;
            $CauHoi->save();
            return redirect()->back()->with('thongbaosuccess','Thêm câu hỏi thành công');
        }
    }

 
    public function getCauHoi()
    {
        
      //$cauHoi=CauHoi::where('linh_vuc_id','=',$request->linh_vuc_id)->get();
        
           
       // if($request->ajax()) {
        // return view('home')->renderSections();
    }
    public function themCauHoi($id){
        $dsLinhVuc=LinhVuc::find($id);
        return view('themcauhoi',compact('dsLinhVuc'));
    }

    public function suaCauHoi($id){
        $dsCauHoi=CauHoi::find($id);
        $dsLinhVuc=LinhVuc::find($dsCauHoi->linh_vuc_id);
        return view('suacauhoi',compact('dsLinhVuc','dsCauHoi'));
    }
    public function xoaCauHoi(Request $request)
    {
       $cauHoi_xoa=CauHoi::findOrFail($request->input('id'));
        if($cauHoi_xoa->delete())
        {
            echo 'Data Delete';
        }
    }
}
