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

Route::get('/', function () {
    return view('welcome');
});

Route::get('post', 'App\Http\Controllers\PostController@index');
Route::post('post', 'App\Http\Controllers\PostController@store');
Route::post('post/delete', 'App\Http\Controllers\PostController@delete');
Route::get('board', 'App\Http\Controllers\PostController@board');