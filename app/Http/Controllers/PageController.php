<?php

namespace App\Http\Controllers;
use App\nhanvien;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
    	return view('page.trangchu');
    }
    public function getNhanVien(){
        $nhanVien = nhanvien::all();
    	return view('page.nhanvien',compact('nhanVien'));
    }
    public function getProfile(){ 
    	return view('page.profile');
    }
    public function getDangNhap(){
        return view('page.dangnhap');
    }
    public function getThemNhanVien(){
        return view('page.themnhanvien');
    }
}
