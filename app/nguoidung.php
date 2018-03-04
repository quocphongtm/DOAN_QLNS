<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nguoidung extends Model
{
    protected $table = "nguoidung";
    public function nhanvien(){
        return $this->hasMany('App\nhanvien','idnv','idnv');
    } 
}
