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
/*Limpiar posteriormente
Route::get('/', function () {
    return view('welcome');
});
*/
Route::view('/','hola')->name('hola');//Realizarlo parap politicas de privacidad,terminos y condiciones(texto plano) 
Route::view('/registro','registro')->name('registro');
Route::view('/ayuda','ayuda')->name('ayuda');