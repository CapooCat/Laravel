<?php

use Illuminate\Database\Seeder;

class ThemNguoiChoiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        	App\NguoiChoi::create([
        		'ten_dang_nhap' => 'nhoxking500',
        		'mat_khau' => Hash::make('123456'),
        		'email' =>  'nhoxking500@gmail.com',
        		'hinh_dai_dien' => 'nhoxking500.jpg',
        		'diem_cao_nhat' => rand(1000, 5000),
        		'credit' => rand(10,500)
        	]);
        	
        
    }
}
