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
Route::get('/product/{id}', ['as' => 'watchprd', 'uses' => 'HomeController@watchprd']);
Route::get('/newproduct', ['as' => 'newproduct', 'uses' => 'HomeController@newproductview']);
Route::post('/regproduct', ['as' => 'regnewprd', 'uses' => 'HomeController@newproduct']);
Route::get('/auctions', ['as' => 'auctions', 'uses' => 'AuctionsController@index']);

Route::group(['prefix' => 'auctions'], function() {
    Route::get('/', ['as' => 'auctions', 'uses' => 'AuctionsController@index']);
    Route::get('/filtrar/{txt}', ['as' => 'auctions.filtrar', 'uses' => 'AuctionsController@filtrar']);
    Route::get('/modal/{id}', ['as' => 'auctions.modal', 'uses' => 'AuctionsController@modal']);
    Route::post('/bid', ['as' => 'auctions.bid', 'uses' => 'AuctionsController@bid']);
});

Route::group(['prefix' => 'contracts'], function() {
    Route::get('/', ['as' => 'contracts', 'uses' => 'ContractsController@index']);
    Route::post('/contract', ['as' => 'contracts.contract', 'uses' => 'ContractsController@contract']);
});

Auth::routes();
