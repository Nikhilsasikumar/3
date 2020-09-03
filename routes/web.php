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


//admin
Route::get('/admin/index', function () {
    return view('admin.app');
});

Route::get('/admin/profile', function () {
    return view('admin.profile');
});

Route::get('/admin/enquery_products', function () {
    return view('admin.enquery_products');
});

Route::get('/admin/products', function () {
    return view('admin.products');
});

Route::get('/admin/products/table', function () {
    return view('admin.products_table');
});


//services
Route::get('/admin/enquery_services', function () {
    return view('admin.enquery_services');
});


Route::get('/admin/services', 'AdminServicesController@index');
Route::get('/admin/services/table', 'AdminServicesController@service');
Route::post('/admin/services/table', 'AdminServicesController@store');
Route::get('/admin/services/table/{id}/edit', 'AdminServicesController@edit');
Route::put('/admin/services/table/{id}', 'AdminServicesController@update');
Route::delete('/admin/services/{id}', 'AdminServicesController@destroy');




//provider

Route::get('/admin/provider', function () {
    return view('admin.provider');
});

Route::get('/admin/provider/table', function () {
    return view('admin.provider_table');
});
