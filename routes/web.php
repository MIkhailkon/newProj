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
Route::get('/basket','MainController@basket')->name('basket');
Route::get('/{product}','MainController@product')->name('product');

