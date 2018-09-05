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

Route::get('clientes','ClienteController@index')->name('clientes');

Route::get('alumnos','AlumnoVController@index')->name('alumnos');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
