<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',"CarKeyController@index");
Route::get('/edit/{CarKeyNumber}',"CarKeyController@edit");
Route::get('/show/{CarKeyNumber}',"CarKeyController@show");
Route::get('/create',"CarKeyController@create");
Route::put('/store',"CarKeyController@store");
Route::get('/update/{CarKeyNumber}',"CarKeyController@update");