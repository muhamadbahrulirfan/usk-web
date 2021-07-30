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
Route::get('/buku','BukuController@index')->name('buku');
Route::get('/buku/create','BukuController@create')->name('create');
Route::post('/buku','BukuController@store')->name('store');
Route::get('/buku/{id}/edit','BukuController@edit')->name('edit');
Route::patch('/buku/{id}/update','BukuController@update')->name('update');
Route::get('/buku/{id}/delete','BukuController@destroy')->name('delete');
Route::get('/buku/search','BukuController@search')->name('search');
Route::get('/buku/{id}/detail','BukuController@show')->name('detail');