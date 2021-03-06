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

Route::get('/', function(){
  return view('index');
});

Route::get('/dviratis', 'BikeController@index')->name('DviraciuSarasas');

Route::resource('dviratis', 'BikeController');

Route::get('/detale', 'DetaleController@index')->name('DetaliuSarasas');;

Route::resource('detale', 'DetaleController');

Route::get('/DviraciuPirkimai', 'DviraciuPirkimuController@index')->name('DviraciuPirkimuSarasas');

Route::resource('DviraciuPirkimai', 'DviraciuPirkimuController');

Route::get('/DetaliuPirkimai', 'DetaliuPirkimuController@index')->name('DviraciuPirkimuSarasas');

Route::resource('DetaliuPirkimai', 'DetaliuPirkimuController');

Route::get('/dviraciuPirkimai', function(){
  return view('pirkimai');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
