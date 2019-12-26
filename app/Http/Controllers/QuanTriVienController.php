<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QuanTriVien;
class QuanTriVienController extends Controller
{
    public function index()
    {
    	$dsQTV=QuanTriVien::all();
    	return view('quantrivien',compact('dsQTV'));
    }
}
