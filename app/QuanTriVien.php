<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model; 
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

/*use Tymon\JWTAuth\Contracts\JWTSubject;*/
class QuanTriVien extends Authenticatable /*implements JWTSubject*/
{
    use Notifiable;
    protected $table='quan_tri_vien';
     protected $fillable = [
        'ten_dang_nhap', 'mat_khau','ho_ten',
    ];
    /*public function getJWTIdentifier()
    {
    	return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
    	return [];
    }*/
    public function getPasswordAttribute()
    {
        return $this->mat_khau;
    }
    public function getAuthPassword()
    {
        return $this->mat_khau;
    }
    //public function getPasswordAttribute()
    //{
    	//return $this->mat_khau;
    //}

}
