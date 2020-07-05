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
    return view('contents.imgerd');
})->name('home');

Route::get('/artikel/create', 'ArtikelController@create')->name('artikel.create');
Route::post('/artikel', 'ArtikelController@store')->name('artikel.store'); 
Route::get('/artikel', 'ArtikelController@index')->name('artikel.index'); 
Route::get('/artikel/{id}', 'ArtikelController@show')->name('artikel.show'); 
Route::get('/artikel/{id}/edit', 'ArtikelController@edit')->name('artikel.edit'); 
Route::put('/artikel/{id}', 'ArtikelController@update')->name('artikel.update'); 
Route::delete('/artikel/{id}', 'ArtikelController@delete')->name('artikel.delete'); 