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
    return view('index');
});

Route::get('/404', ['as'=>'404','uses'=>'HomeController@notfound']);
Route::get('/500', ['as'=>'500','uses'=>'HomeController@internalError']);