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
        $nhanvien = nhanvien::all();
        
    	return view('page.nhanvien',compact('nhanvien'));
    }
    public function getProfile(){ 
    	return view('page.profile');
    }
}
