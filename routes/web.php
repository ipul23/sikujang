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

Auth::routes();
Route::resource('/','HomeController');
Route::resource('home','HomeController');
Route::get('user/log','UserController@log')->name('user.log');
Route::get('demand/selesai','DemandController@selesai')->name('demand.selesai');
Route::resource('demand','DemandController');
Route::resource('product','ProductController');
Route::get('grafik/produksi','ChartProduksiController@index')->name('grafik.produksi');
Route::get('grafik/perjenis','ChartPerjenisController@index')->name('grafik.perjenis');
Route::get('grafik/keuntungan','ChartKeuntunganController@index')->name('grafik.keuntungan');
Route::resource('stock','StockController');
Route::resource('user','UserController');
