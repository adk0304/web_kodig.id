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

Route::get('/admin', function () {
    return view('admin/dashboard');
});
Route::get('/a', function () {
    return view('admin/produk/data_produk');
});

//PRODUK
Route::get('/produk','ProdukController@index');
Route::put('/produk/store','ProdukController@store');

Route::get('/produk/delete/{id}', 'ProdukController@destroy');


//PROMO
Route::get('/promo','PromoController@index');
Route::put('/promo/store','PromoController@store');

Route::get('/promo/delete/{id}', 'PromoController@destroy');
