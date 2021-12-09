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

Route::get('/', 'App\Http\Controllers\PageController@home')->name('home');
Route::get('/nosotros', 'App\Http\Controllers\PageController@about')->name('about');

/*Route::get("/", "App\Http\Controllers\MiControlador@index");
Route::get("/crear", "App\Http\Controllers\MiControlador@create");
Route::get("/articulos", "App\Http\Controllers\MiControlador@store");
Route::get("/mostrar", "App\Http\Controllers\MiControlador@show");*/
