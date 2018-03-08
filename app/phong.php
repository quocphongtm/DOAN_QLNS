<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phong extends Model
{
    protected $table = "phong";
	public $timestamps = false;
    public function nhanvien(){
        return $this->hasMany('App\nhanvien','idphong','id');
    } 
}
