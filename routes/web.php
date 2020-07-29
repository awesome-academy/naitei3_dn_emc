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

/* Auth */

Auth::routes();

/* Auth */

/* Admin */

Route::group(['prefix'=>'admin-page'],function(){
    Route::get('/', 'AdminHomeController@index');
    Route::get('/user', 'Admin\UsersController@index')->name('manage_users');
    Route::get('user/show/{id?}', 'Admin\UsersController@show')->name('show_users');
    Route::get('/user/create', 'Admin\UsersController@create')->name('create_users');
    Route::post('/user/store', 'Admin\UsersController@store')->name('store_users');
    Route::get('user/edit/{id?}', 'Admin\UsersController@edit')->name('edit_users');
    Route::post('user/update/{id?}', 'Admin\UsersController@update')->name('update_users');
    Route::get('user/delete/{id?}', 'Admin\UsersController@destroy')->name('delete_users');
});

/* Admin */


/* Client*/

Route::get('/', 'ClientHomeController@index')->name('home');

Route::namespace('Client')->group(function() {
    Route::post('/','ClientRegisterController@register')->name('register');
    Route::get('/logout', 'Session@logout')->name('logout');
    Route::post('/login', 'Session@login')->name('login');
});

Route::group(['prefix' => 'products'], function(){
    Route::get('/product-accord-category/{category}', 'ProductController@product_accord_category')->name('pro_accord_cate');
    Route::get('/product-accord-price/{parameter}', 'ProductController@product_accord_price')->name('pro_accord_price');
    Route::get('/{product}', 'ProductController@show')->name('product_detail');
});


Route::get('users/{user}/detail', 'UserController@show')->name('users.detail');
Route::patch('users/{user}', 'UserController@update')->name('users.update');
Route::get('/changePassword','UserController@showChangePassword');
Route::post('/changePassword', 'UserController@changePassword')->name('changePassword');
Route::group(['prefix' => 'order'], function(){
    Route::post('/order-item', 'OrderController@orderItem')->name('order_item');
    Route::post('/order-item/update-quantity', 'OrderController@updateQuantity')->name('update_quantity');
    Route::post('/order-item/delete-item', 'OrderController@deleteItem')->name('delete_item');
    Route::get('/order-item/{order}', 'OrderController@checkout')->name('checkout');
    Route::post('/order-item/update_ship_address', 'OrderController@update_ship_address')->name('update_ship_address');
});



/* Client*/
