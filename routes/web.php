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


//预留的接口,一般不会用到
//Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/log', 'LogController@index')->name('api.index');


Route::resource('ab', 'AbController');
Route::resource('user', 'UserController');
Route::resource('role', 'RoleController');