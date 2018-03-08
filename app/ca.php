<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ca extends Model
{
    protected $table = "ca";
    public $timestamps = false;
    public function diemdanh(){
        return $this->hasMany('App\diemdanh','idca','id');
    } 
}
