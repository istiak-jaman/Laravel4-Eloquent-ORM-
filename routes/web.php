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

//HasOne
//Route::get('/users', 'UserController@index')->name('users');

//Belongs to
Route::get('/users', 'PhoneController@index')->name('users');
Route::get('/posts', 'PostController@index')->name('posts');

Route::get('istiak', 'PostController@getIstiakPost');