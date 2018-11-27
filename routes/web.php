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
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/mapa','GeneralController@map')->name('mapa');
Route::get('/como_funciona','GeneralController@funciona')->name('como_funciona');
Route::get('/ventajas','GeneralController@ventajas')->name('ventajas');
Route::get('/admin','GeneralController@admin')->name('admin');
Route::get('/{slug}','GeneralController@profile')->name('profile');