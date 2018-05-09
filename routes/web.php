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




Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('inventory','InventoryController');


Route::get('/inventory/create',['as'=>'inventory.create','uses'=>'InventoryController@create']);
Route::post('/inventory/store',['as'=>'inventory.store','uses'=>'InvnentoryController@store']);
Route::get('/inventory/index',['as'=>'inventory.index','uses'=>'InventoryController@index']);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');