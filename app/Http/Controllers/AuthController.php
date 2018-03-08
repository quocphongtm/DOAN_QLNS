<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\User; 
use App\nhanvien;
class AuthController extends Controller
{
    //
    public function login(Request $request)
    {
    	$email = $request['email'];
    	$password = $request['password'];
    	
    	 
    	if (Auth::attempt(['email'=>$email,'password'=>$password])) 
    	{   
            $nhanVien = nhanvien::all();
            return view('page.nhanvien.nhanvien',compact('nhanVien'));
        }
    	else 
    		return view('page.dangnhap');	
    			
    }
}
