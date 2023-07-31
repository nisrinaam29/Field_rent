<?php

use App\Models\product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/','App\Http\Controllers\AppController@index');;

//product Routes
Route::get('/product/{id}', 'App\Http\Controllers\ProductController@products');

Route::get('/categorybasket', 'App\Http\Controllers\ProductController@index');
Route::get('/products/manage', 'App\Http\Controllers\ProductController@showAllproduct');
Route::get('/products/add','App\Http\Controllers\ProductController@add');
Route::post('/products/add','App\Http\Controllers\ProductController@store');
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@edit');
Route::put('/products/{id}', 'App\Http\Controllers\ProductController@update');
Route::delete('/products/{id}', 'App\Http\Controllers\ProductController@destroy');



Route::get('/profile', function () {
    return view('profile');
});

Route::get('/news', function () {
    return view('news');
});