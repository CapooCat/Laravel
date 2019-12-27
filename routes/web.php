<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::prefix('trang-chu')->group(function()
{
        //Route::post('/','CauHoiController@getCauHoi')->name('trang-chu.cau-hoi');
        Route::get('login','DangNhapController@index')->name('trang-chu.dang-nhap');
        Route::post('login','DangNhapController@DangNhap')->name('dang-nhap.kiem-tra');
        Route::get('dang-xuat','DangNhapController@DangXuat')->name('dang-xuat');
        //Route::get('dang-ky','DangKyController@index')->name('trang-chu.dang-ky');
        //Route::post('dang-ky','DangKyController@DangKy')->name('dang-ky');
       	//Route::get('linh-vuc','LinhVucController@loadLinhVuc')->name('trang-chu.home');

    Route::middleware('auth')->group(function()
    {
        Route::prefix('linh-vuc')->group(function()
        {
            Route::get('','LinhVucController@loadLinhVuc')->name('trang-chu.home');
            Route::post('them','LinhVucController@themLinhVuc')->name('trang-chu.them-linh-vuc');
            Route::get('sua/{id}','LinhVucController@suaLinhVuc')->name('trang-chu.sua');
            Route::get('xoa/{id}','LinhVucController@xoaLinhVuc')->name('trang-chu.xoa');
            Route::get('/xoa-ajax','LinhVucController@xoaLV')->name('trang-chu.xoa-ajax');
            Route::post('/','LinhVucController@update')->name('trang-chu.update');
        });


        Route::prefix('quan-ly-cau-hoi')->group(function(){
        	Route::get('','CauHoiController@index')->name('trang-chu.ql-cau-hoi');
        	Route::get('them-cau-hoi/{id}','CauHoiController@themCauHoi')->name('trang-chu.them-cau-hoi');
        	Route::post('update','CauHoiController@update')->name('trang-chu.update-cau-hoi');
            Route::post('','CauHoiController@ThemCauHoiTheoLV')->name('trang-chu.them-cau-hoi-lv');
        	Route::get('sua/{id}','CauHoiController@suaCauHoi')->name('trang-chu.sua-cau-hoi');
        	Route::get('xoa/','CauHoiController@xoaCauHoi')->name('trang-chu.xoa-cau-hoi');
            Route::get('/{id}','CauHoiController@chonLinhVuc')->name('trang-chu.chon-linh-vuc');
        });

        Route::prefix('nguoi-choi')->group(function(){
            Route::get('','NguoiChoiController@index')->name('trang-chu.ql-nguoi-choi');
            Route::get('sua/{id}','NguoiChoiController@suaNguoiChoi')->name('trang-chu.sua-nguoi-choi');
            Route::post('','NguoiChoiController@update')->name('trang-chu.update-nguoi-choi');
            Route::get('them-nguoi-choi','NguoiChoiController@themNguoiChoi')->name('trang-chu.them-nguoi-choi');
            Route::post('them-nguoi-choi','NguoiChoiController@updateThem')->name('update.them-nguoi-choi');
            Route::get('xoa/','NguoiChoiController@xoaNguoiChoi')->name('xoa.nguoi-choi');
        });

        Route::prefix('goi-credit')->group(function(){
            Route::get('','GoiCreditController@index')->name('trang-chu.goi-credit');
            Route::get('them-goi-credit','GoiCreditController@themGoiCredit')->name('them-goi-credit');
            Route::post('them-goi-credit','GoiCreditController@updateThem')->name('goi-credit.update');
            Route::get('sua-goi-credit/{id}','GoiCreditController@suaGoiCredit')->name('sua-goi-credit');
            Route::post('','GoiCreditController@updateSua')->name('goi-credit.update-sua');
            Route::get('xoa','GoiCreditController@xoaGoiCredit')->name('xoa.goi-credit');
        });


        Route::get('lich-su-mua-credit','LichSuMuaCreditController@index')->name('lich-su-mua-credit.index');

        Route::get('luot-choi','LuotChoiController@index')->name('luot-choi.index');

        Route::get('chi-tiet-luot-choi','ChiTietLuotChoiController@index')->name('chi-tiet-luot-choi.index');


        Route::prefix('thung-rac')->group(function(){
            Route::get('','ThungRacController@thungRac')->name('thung-rac');
            Route::get('lv','ThungRacController@linhVuc')->name('thung-rac-lv');
            Route::get('ch','ThungRacController@cauHoi')->name('thung-rac-ch');
            Route::get('nc','ThungRacController@nguoiChoi')->name('thung-rac-nc');
            Route::get('gc','ThungRacController@goiCredit')->name('thung-rac-gc');

            Route::get('xoaLV/{id}','ThungRacController@xoaLV')->name('thung-rac.xoaLV');
            Route::get('xoaCH/{id}','ThungRacController@xoaCH')->name('thung-rac.xoaCH');
            Route::get('xoaNC/{id}','ThungRacController@xoaNC')->name('thung-rac.xoaNC');
            Route::get('xoaGC/{id}','ThungRacController@xoaGC')->name('thung-rac.xoaGC');

            Route::get('restoreLV/{id}','ThungRacController@restoreLV')->name('thung-rac.restoreLV');
            Route::get('restoreCH/{id}','ThungRacController@restoreCH')->name('thung-rac.restoreCH');
            Route::get('restoreNC/{id}','ThungRacController@restoreNC')->name('thung-rac.restoreNC');
            Route::get('restoreGC/{id}','ThungRacController@restoreGC')->name('thung-rac.restoreGC');
        });
        Route::prefix('quan-tri-vien')->group(function(){
            Route::get('','QuanTriVienController@index')->name('quan-tri-vien.index');
            Route::get('profile/{ten_dang_nhap}','QuanTriVienController@layThongTin')->name('quan-tri-vien.profile');

        });




    });
});
//Route::get('/', function () {
    //return view('welcome');
//});
