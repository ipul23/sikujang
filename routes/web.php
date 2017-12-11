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
    return view('home');
})->middleware('auth');

Auth::routes();
Route::get('demand/selesai','DemandController@selesai')->name('demand.selesai');
Route::resource('product','ProductController');
Route::resource('demand','DemandController');
Route::resource('stock','StockController');
Route::resource('user','UserController');