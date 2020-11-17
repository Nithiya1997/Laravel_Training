<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','App\Http\Controllers\FormsController@index');

Route::get('/contact','App\Http\Controllers\FormsController@index');

Route::get('/article','App\Http\Controllers\ArticleController@index');

Route::get('/article/create','App\Http\Controllers\ArticleController@create');

Route::post('/article','App\Http\Controllers\ArticleController@store');

Route::get('/article/show/{article}','App\Http\Controllers\ArticleController@show');

Route::get('/article/{article}/edit','App\Http\Controllers\ArticleController@edit');

Route::put('/article/{article}','App\Http\Controllers\ArticleController@update');

Route::delete('/article/{article}','App\Http\Controllers\ArticleController@destroy');