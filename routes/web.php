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
Route::group(['prefix'=>'nhanvien'],function(){
	Route::get('danhsach',[
	'as'=>'nhan-vien',
	'uses'=>'NhanVienController@getNhanVien'
	]);
	Route::get('profile/{id}',[
		'as'=>'profile',
		'uses'=>'NhanVienController@getProfile'
	]);
	Route::get('themnhanvien',[
		'as'=>'themnhanvien',
		'uses'=>'NhanVienController@getThemNhanVien'
	]);
	Route::post('themnhanvien',[
		'as'=>'themnhanvien',
		'uses'=>'NhanVienController@postThemNhanVien'
	]);
	Route::get('suanhanvien',[
		'as'=>'themnhanvien',
		'uses'=>'NhanVienController@getSuaNhanVien'
	]);
});
Route::get('index',[
	'as'=>'trang-chu',
	'uses'=>'PageController@getIndex'
]);


//auth
Route::get('dangnhap',[
	'as'=>'profile',
	'uses'=>'PageController@getDangNhap'
]);
Route::post('dangnhap','AuthController@login')->name('login');
Route::get('test',function(){
	$data = App\nhanvien::find('1')->chucvu->tencv;
	var_dump($data); 
});