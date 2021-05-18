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

Route::get('/', 'App\Http\Controllers\MyController@home');
Route::get('/login', 'App\Http\Controllers\LoginController@login');
Route::get('/register', 'App\Http\Controllers\MyController@registration');
Route::get('/welcome', 'App\Http\Controllers\LoginController@protect');
Route::get('/logout', 'App\Http\Controllers\LoginController@logout');
Route::post('/add_data', 'App\Http\Controllers\MyController@insert_data');
Route::post('/check', 'App\Http\Controllers\LoginController@loginCheck');

Route::get('/chinese', 'App\Http\Controllers\Menu@chinese');
Route::get('/italian', 'App\Http\Controllers\Menu@italian');
Route::get('/indian', 'App\Http\Controllers\Menu@indian');

Route::get('/cart', 'App\Http\Controllers\ProductsController@cart');
Route::get('/add-to-cart/{id}', 'App\Http\Controllers\ProductsController@addToCart')->name('addCart');
Route::patch('update-cart', 'App\Http\Controllers\ProductsController@update');
Route::delete('remove-from-cart', 'App\Http\Controllers\ProductsController@remove');
