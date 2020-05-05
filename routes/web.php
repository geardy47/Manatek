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
    return view('home');
});

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

Route::get('/user', 'UserController@index')->middleware('auth');
		
Route::post('/user/create','UserController@create')->middleware('auth');
Route::get('/user/{id}/edit', 'UserController@edit')->middleware('auth');
Route::post('/user/{id}/update','UserController@update')->middleware('auth');
Route::get('/user/{id}/delete', 'UserController@delete')->middleware('auth');

	Route::group(['middleware'=>['auth','checkrole:admin']],function(){
		Route::get('/cabang/{idcabang}/edit', 'CabangController@edit');
		Route::post('/cabang/{idcabang}/update','CabangController@update');
		Route::get('/cabang/{idcabang}/delete', 'CabangController@delete');

		Route::get('/pegawai/{idpegawai}/edit', 'PegawaiController@edit');
		Route::post('/pegawai/{idpegawai}/update','PegawaiController@update');
		Route::get('/pegawai/{idpegawai}/delete', 'PegawaiController@delete');
	
		Route::get('/obat/{kodeobat}/edit', 'ObatController@edit');
		Route::post('/obat/{kodeobat}/update','ObatController@update');
		Route::get('/obat/{kodeobat}/delete', 'ObatController@delete');
	});

	Route::group(['middleware'=>['auth','checkrole:admin,owner']],function(){
		Route::get('/dashboard','DashboardController@index');

		Route::get('/cabang', 'CabangController@index');
		Route::post('/cabang/create','CabangController@create');

		Route::get('/obat', 'ObatController@index');
		Route::post('/obat/create','ObatController@create');

		Route::get('/pegawai', 'PegawaiController@index');
		Route::post('/pegawai/create','PegawaiController@create');

	});