<?php

Auth::routes();
Route::get('/', 'WelcomeController@index')->name('welcome');
Route::post('diagnose', 'DiagnoseController@process_one')->name('kirim-diagnose');

Route::group(['middleware' => 'auth'], function(){

	Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('bobot', 'BobotNilaiController');
    Route::resource('gejala', 'GejalaController');
    Route::resource('solusi', 'SolusiController');
    Route::resource('perbaikan', 'GejalaSolusiController');

});
