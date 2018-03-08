<?php

namespace App\Http\Controllers;
use App\nhanvien;
use App\chucvu;
use App\phong;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
        $phong = phong::all();
        echo $phong;
        return view('page.trangchu');

    }
    
    public function getDangNhap(){
        return view('page.dangnhap');
    }
    
}
