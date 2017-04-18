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

Route::get('/', ['as'=>'index','uses'=>'HomeController@index']);

Route::get('/404', ['as'=>'404','uses'=>'HomeController@notfound']);
Route::get('/500', ['as'=>'500','uses'=>'HomeController@internalError']);

Route::group(['prefix'=>'user'],function(){
	Route::group(['middleware'=>'guest'],function(){
		Route::get('/singup', ['as'=>'user.getsingup','uses'=>'UserController@getsignup']);
		Route::post('/singup', ['as'=>'user.postsingup','uses'=>'UserController@postsignup']);

		Route::get('/singin', ['as'=>'user.getlogin','uses'=>'UserController@getlogin']);
		Route::post('/singin', ['as'=>'user.postlogin','uses'=>'UserController@postlogin']);
	});

});

Route::group(['middleware'=>'auth'],function(){
	Route::get('/profile', ['as'=>'user.profile','uses'=>'UserController@profile']);
	Route::get('/logout', ['as'=>'user.getLogOut','uses'=>'UserController@getLogOut']);
});



