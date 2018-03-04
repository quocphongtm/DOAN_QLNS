<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhanvien extends Model
{
    protected $table = "nhanvien";

    public function nguoidung(){
        return $this->belongsTo('App\nguoidung','idnv','idnv');
    } 
}
