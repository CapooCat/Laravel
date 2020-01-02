<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
use App\QuanTriVien;
use Auth;
class LoadAvatarController extends Controller
{
    public function update_avatar(Request $request)
    {
    	if($request->hasFile('avatar'))
    	{
    		$avatar =$request->file('avatar');
    		$filename=Auth::user()->ten_dang_nhap.'.'.$avatar->getClientOriginalExtension();
    		Image::make($avatar->getRealPath())->resize(300,300)->save(public_path('/uploads/avatars/'.$filename));

    		$qtv=Auth::user();
    		$qtv->hinh_dai_dien=$filename;
    		$qtv->save();
    	}
    	return redirect()->back();

    }
}
