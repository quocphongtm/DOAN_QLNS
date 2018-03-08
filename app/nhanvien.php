<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhanvien extends Model
{
    protected $table = "nhanvien";
    public $timestamps = false;
    public function User(){
        return $this->hasMany('App\User','idnv','id');
    } 
    public function diemdanh(){
        return $this->hasMany('App\diemdanh','idnv','id');
    } 
    public function phong(){
        return $this->belongsTo('App\phong','idphong','id');
    } 
    public function chucvu(){
        return $this->belongsTo('App\chucvu','idcv','id');
    } 
}
