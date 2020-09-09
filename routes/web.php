<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'IndexController@index');
Route::get('/services', 'ServicesController@index');
Route::get('/products', 'ProductsController@index');
Route::get('/contact', 'ContactsController@index');
Route::get('/about', 'AboutsController@index');

Route::post('/services/enquery', 'ServicesEnqController@store');
Route::get('/thankyou', function () {
    return view('site.thankyou');
});

Route::post('/product/enquery', 'ProductEnqController@store');
Route::get('/thankyou', function () {
    return view('site.thankyou');
});

Route::get('/product/{product}', 'ProductsController@show');
Route::get('/service/{service}', 'ServicesController@show');


//admin
Route::get('/admin/index', function () {
    return view('admin.app');
});


Route::get('/admins', 'AdminDashController@index');


Route::get('/admin/enquery_products', function () {
    return view('admin.enquery_products');
});

Route::get('/admin/products', function () {
    return view('admin.products');
});

Route::get('/admin/products/table', function () {
    return view('admin.products_table');
});


//services_enquery
Route::get('/admin/enquery_services', 'ServicesEnqController@index');
Route::get('/admin/service/{id}/edit', 'ServicesEnqController@edit');
Route::put('/admin/service/{id}', 'ServicesEnqController@update');

//services_enquery
Route::get('/admin/enquery_products', 'ProductEnqController@index');
Route::get('/admin/product/{id}/edit', 'ProductEnqController@edit');
Route::put('/admin/product/{id}', 'ProductEnqController@update');

//admin
Route::get('/admin/profile', 'AdminController@index');
Route::put('/admin/profile/{id}', 'AdminController@update');
Route::get('/admin/profile/siteinfos', 'SiteinfosController@index');
Route::put('/admin/profile/siteinfos/{id}', 'SiteinfosController@update');
Route::get('/admin/profile/password', 'AdminController@password');
Route::put('/admin/profile/password{id}', 'AdminController@updatepass');
// Route::post('/admin/services/table', 'AdminServicesController@store');
Route::get('/admin/profile/{id}/edit', 'AdminServicesController@edit');


//services
Route::get('/admin/services', 'AdminServicesController@index');
Route::get('/admin/services/table', 'AdminServicesController@service');
Route::post('/admin/services/table', 'AdminServicesController@store');
Route::get('/admin/services/table/{id}/edit', 'AdminServicesController@edit');
Route::put('/admin/services/table/{id}', 'AdminServicesController@update');
Route::delete('/admin/services/{id}', 'AdminServicesController@destroy');

//products
Route::get('/admin/products', 'AdminProductsController@index');
Route::get('/admin/products/table', 'AdminProductsController@product');
Route::post('/admin/products/table', 'AdminProductsController@store');
Route::get('/admin/products/table/{id}/edit', 'AdminProductsController@edit');
Route::put('/admin/products/table/{id}', 'AdminProductsController@update');
Route::delete('/admin/products/{id}', 'AdminProductsController@destroy');


//provider

Route::get('/admin/providers', 'AdminProvidersController@index');
Route::get('/admin/providers/table', 'AdminProvidersController@provider');
Route::post('/admin/providers/table', 'AdminProvidersController@store');
Route::get('/admin/providers/table/{id}/edit', 'AdminProvidersController@edit');
Route::put('/admin/providers/table/{id}', 'AdminProvidersController@update');
Route::delete('/admin/providers/{id}', 'AdminProvidersController@destroy');

//Category
Route::get('/admin/categories', 'AdminCategoriesController@index');
Route::post('/admin/categories', 'AdminCategoriesController@store');
Route::get('/admin/categories/{id}/edit', 'AdminCategoriesController@edit');
Route::put('/admin/categories/{id}', 'AdminCategoriesController@update');
Route::delete('/admin/categories/{id}', 'AdminCategoriesController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
