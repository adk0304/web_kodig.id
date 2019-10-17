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
    return view('admin/dashboard');
});
Route::get('/a', function () {
    return view('admin/produk/data_produk');
});
Route::get('/produk','ProdukController@index');
Route::post('/produk/create','ProdukController@create');

