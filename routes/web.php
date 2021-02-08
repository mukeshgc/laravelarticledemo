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


// User Routes
Route::group(['namespace' => 'User'],function(){
	Route::get('/','HomeController@index');
	Route::get('/articles','HomeController@index');
	Route::get('article/{post}','PostController@post')->name('article');
	Route::get('article/tag/{tag}','HomeController@tag')->name('tag');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
