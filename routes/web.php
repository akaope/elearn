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

Route::group(['prefix' => '/dashboard'], function(){
	Route::get('/profil','DashboardController@profil');
	Route::get('/setting','DashboardController@setting');
});

Route::get('/siswa/list', 'SiswaController@showAll');
