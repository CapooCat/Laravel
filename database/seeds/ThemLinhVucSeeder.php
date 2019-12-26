<?php

use Illuminate\Database\Seeder;

class ThemLinhVucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('linh_vuc')->insert([
        	['ten_linh_vuc'=>'Thể thao'],
        	['ten_linh_vuc'=>'Lịch sử'],
        	['ten_linh_vuc'=>'Âm nhạc-Phim'],
        	['ten_linh_vuc'=>'Địa lý'],
        	['ten_linh_vuc'=>'Văn học'],
        	['ten_linh_vuc'=>'Y học'],
        	['ten_linh_vuc'=>'Văn hóa-Sự kiện']
        ]);
    }
}
