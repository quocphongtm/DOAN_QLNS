<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chucvu extends Model
{
    protected $table = "chucvu";
    public $timestamps = false;
    public function nhanvien(){
        return $this->hasMany('App\nhanvien','idcv','id');
    } 
}
