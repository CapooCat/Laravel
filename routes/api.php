<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('tap-tho', 'API\BaiThoController@layDanhSach');
Route::get('tap-tho/{id}', 'API\BaiThoController@layBaiTho');
Route::get('linh-vuc','API\LinhVucController@layDanhSach');
Route::post('register','API\Auth\RegisterController@register');
Route::post('dang-nhap','API\DangNhapController@dangNhap');
Route::get('lay-thong-tin','API\DangNhapController@layThongTin');
Route::get('credit','API\GoiCreditController@layDanhSach');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('nguoi-choi', 'API\NguoiChoiController@layDanhSach');


