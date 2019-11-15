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

Route::get('/', ['as' => 'myproducts', 'uses' => 'HomeController@index']);
Route::get('/home', ['as' => 'myproducts', 'uses' => 'HomeController@index']);
Route::get('/myproducts', ['as' => 'myproducts', 'uses' => 'HomeController@getmyprds']);
Auth::routes();
