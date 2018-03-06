<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('index',[
	'as'=>'trang-chu',
	'uses'=>'PageController@getIndex'
]);
Route::get('nhanvien',[
	'as'=>'nhan-vien',
	'uses'=>'PageController@getNhanVien'
]);
Route::get('profile',[
	'as'=>'profile',
	'uses'=>'PageController@getProfile'
]);
Route::get('themnhanvien',[
	'as'=>'themnhanvien',
	'uses'=>'PageController@getThemNhanVien'
]);

//auth
Route::get('dangnhap',[
	'as'=>'profile',
	'uses'=>'PageController@getDangNhap'
]);
Route::post('dangnhap','AuthController@login')->name('login');