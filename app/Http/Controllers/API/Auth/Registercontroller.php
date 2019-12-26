<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Registercontroller extends Controller
{
    public function register(Request $request){
    	dd($request->all());
    }
}
