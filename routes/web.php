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

Route::get('/login', 'LoginController@index');
Route::post('/login' , 'LoginController@login');

Route::get('/', 'PostController@index');
Route::post('/create', 'PostController@create');

Route::post('/message', 'MessageController@send');