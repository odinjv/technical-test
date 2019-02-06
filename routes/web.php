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

Route::get('/csrf', function(){
    return csrf_token();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/products', 'ProductController@index');
Route::get('/products/{product}', 'ProductController@show');
Route::post('/products/{product}/like', 'ProductController@like')->middleware('auth:api');
Route::post('/products/{product}/unlike', 'ProductController@unlike')->middleware('auth:api');
Route::post('/products/new', 'ProductController@insert')->middleware('auth:api');
