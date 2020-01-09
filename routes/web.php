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
Route::get('quanly',[
	'as'=>'trang-admin',
	'uses'=>'Pagecontroller@getAdmin'
]);
Route::get('adminQuatang',[
	'as'=>'trang-quatang',
	'uses'=>'Pagecontroller@getGift'
]);
Route::get('themQuaTang',[
	'as'=>'them-quatang',
	'uses'=>'Pagecontroller@getQuatang'
]);
Route::post('themQuaTang',[
	'as'=>'them-quatang',
	'uses'=>'Pagecontroller@postQuatang'
]);
Route::get('xoaQuaTang/{id}',[
	'as'=>'xoa-quatang',
	'uses'=>'Pagecontroller@getxoaQuatang'
]);
Route::get('suaQuaTang/{id}',[
	'as'=>'sua-quatang',
	'uses'=>'Pagecontroller@getSuaQuatang'
]);
Route::post('suaQuaTang/{id}',[
	'as'=>'sua-quatang',
	'uses'=>'Pagecontroller@postSuaQuatang'
]);


