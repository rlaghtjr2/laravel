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
Route::get('/index','ArticleController@index');
Route::get('/index/create','ArticleController@create');
Route::post('index','ArticleController@store');
Route::get('index/{id}/edit','ArticleController@edit');
Route::get('index/{id}','ArticleController@show');
Route::post('index/{id}','ArticleController@update');
Route::post('index/{id}','ArticleController@delete');
