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

Route::get('/','MainController@home')->name('home');
Route::get('/contact','MainController@contact')->name('contact');
Route::post('/contact/submit', 'contactController@contact')->name('contact-form');
Route::get('/categories','MainController@categories')->name('categories');
Route::get('/categories/{category}','MainController@category')->name('category');
Route::get('/about','MainController@about')->name('about');
Route::get('/basket','BasketController@basket')->name('basket');
Route::get('/basket/place','BasketController@basketPlace')->name('basket_place');
Route::post('/basket/add/{id}','BasketController@basketadd')->name('basket_add');
Route::post('/basket/remove/{id}','BasketController@removeProduct')->name('removeProduct');
Route::get('/admin-add-product','MainController@admin_add_product')->name('admin-add-product');
Route::post('/admin-add-product/submit','ProductController@admin_add_product')->name('admin-add-product-submit');
Route::get('/{category}/{product}','MainController@product')->name('product');

