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

// Route::get('/', function () {
//     return view('site.index');
// });

Route::get('/', 'IndexController@index');
Route::get('/services', 'ServicesController@index');
Route::get('/products', 'ProductsController@index');
Route::get('/contact', 'ContactsController@index');

Route::get('/about', function () {
    return view('site.about');
});

Route::get('/product/{product}', 'ProductsController@show');
Route::get('/service/{service}', 'ServicesController@show');
