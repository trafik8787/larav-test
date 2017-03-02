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



//Route::delete('articles/{id}', 'ArticleController@destroy')->where('id', '[0-9]+');
//
//Route::get('articles/{id}', 'ArticleController@show')->where('id', '[0-9]+');

/**
 * Все REST методы
 */
Route::resource('articles', 'ArticleController');

Route::get('/', 'MainController@index');
Auth::routes();

Route::get('/home', 'HomeController@index');
