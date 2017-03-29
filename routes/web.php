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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => ['auth','checkRole:pengarang']], function() { //checkRole middleware name registered in Kernel.php
    // dd('pengarang');
	Route::get('/test', 'HomeController@userRole');

});