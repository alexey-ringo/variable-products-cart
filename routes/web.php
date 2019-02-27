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


Route::get('/', 'ShopController@index')->name('shop.index');
//Route::get('/shop', 'ShopController@category')->name('shop.category');
//Route::get('/shop/{groupproduct}', 'ShopController@show')->name('shop.show');
Route::get('/shop', 'ShopController@categories')->name('shop.categories');
Route::get('/shop/{slug?}', 'ShopController@category')->name('shop.category');
Route::get('/products/{slug}', 'ShopController@show')->name('shop.product');
Route::post('/add-cart', 'CartController@addCart')->name('cart.add');
Route::get('/show-cart', 'CartController@showCart')->name('cart.show');


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/category', 'CategoryController@index')->name('shop.category');
