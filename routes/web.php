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
    return view('home');
});

$url = "App\Http\Controllers";
// Route::get('product/{slug}', $url."\ProductController@showProducts");


Route::get('product', $url."\ProductController@show");

Route::get('product/edit/{id}', $url."\ProductController@edit");

Route::post('product/update', $url."\ProductController@edit");

