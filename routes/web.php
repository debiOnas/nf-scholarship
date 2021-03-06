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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'PageController@index')->name('index');

Route::group(['middleware' => 'auth'], function () {
  Route::get('/daftar-beasiswa', 'PageController@getBeasiswa')->name('getbeasiswa');
  Route::post('/daftar-beasiswa', 'PageController@postBeasiswa')->name('postbeasiswa');
  Route::get('/dashboard', 'PageController@getDashboard')->name('dashboard');
});
//abort(404);
