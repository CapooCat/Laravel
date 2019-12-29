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


Route::get('linh-vuc','API\LinhVucController@layDanhSach');
Route::post('register','API\Auth\RegisterController@register');
Route::post('credit','API\GoiCreditController@layDanhSach');
Route::post('load-cau-hoi','API\CauHoiController@loadCauHoi');
Route::get('credit','API\GoiCreditController@layDanhSach');
Route::post('lay-thong-tin','API\DangNhapController@layThongTin');
Route::post('lay-diem-cao-nhat','API\NguoiChoiController@ssDiemCaoNhat');
Route::post('sua-thong-tin','API\NguoiChoiController@suaThongTin');
Route::post('nap-credit','API\NguoiChoiController@napCredit');
Route::post('tru-credit','API\NguoiChoiController@truCredit');
Route::post('dang-nhap','API\DangNhapController@dangNhap');
Route::post('dang-ky','API\DangKyController@dangKy');
Route::post('dang-xuat','API\DangNhapController@dangXuat');
//send mail
Route::post('mail/send','API\SendMailController@sendMail');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('nguoi-choi', 'API\NguoiChoiController@layDanhSach');


