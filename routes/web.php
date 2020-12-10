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

Route::get('/','WeatherController@consultar')->name('home');
Route::get('/consulta','WeatherController@consultar')->name('consulta');
Route::post('/consulta/ajax','WeatherController@guardar')->name('consulta.save');
Route::get('/informe','WeatherController@informe')->name('informe.consulta');
