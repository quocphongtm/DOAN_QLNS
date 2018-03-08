<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class diemdanh extends Model
{
    protected $table = "diemdanh";
    
    public $timestamps = false;
    public function nhanvien(){
        return $this->belongsTo('App\nhanvien','idnv','idnv');
    } 
    public function ca(){
        return $this->belongsTo('App\ca','idca','idca');
    } 
}
