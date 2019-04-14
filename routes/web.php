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


Route::get('/home', 'HomeController@index')->name('home.index');


Route::get('/', 'ShopController@index')->name('shop.index');
//Route::get('/shop', 'ShopController@category')->name('shop.category');
//Route::get('/shop/{groupproduct}', 'ShopController@show')->name('shop.show');
Route::get('/shop', 'ShopController@categories')->name('shop.categories');
Route::get('/shop/{slug?}', 'ShopController@category')->name('shop.category');
Route::get('/products/{slug}', 'ShopController@show')->name('shop.product');
Route::post('/add-cart', 'CartController@addCart')->name('cart.add');
Route::get('/products-in-cart', 'CartController@productsInCart')->name('cart.products');
Route::get('/get-item-amount', 'CartController@itemAmount')->name('cart.itemamount');//!!!get-параметры обязательны!!!
Route::get('/get-old-cart', 'CartController@productsInOldCart')->name('cart.old');
Route::get('/get-hold-cart', 'CartController@productsInHoldCart')->name('cart.hold');
Route::get('/status-cart', 'CartController@statusCart')->name('cart.status');
Route::get('/cart', 'CartController@showCart')->name('cart.show');
Route::post('/delete-cart', 'CartController@deleteCart')->name('cart.delete');
Route::get('/queue', function() {
    App\Jobs\ClearCart::dispatch("Send test queue message");
});

Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('a7dm0in3')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
});

Auth::routes();
