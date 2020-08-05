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
    // User
    Route::get('/user', 'Admin\UsersController@index')->name('manage_users');
    Route::get('user/show/{id?}', 'Admin\UsersController@show')->name('show_users');
    Route::get('/user/create', 'Admin\UsersController@create')->name('create_users');
    Route::post('/user/store', 'Admin\UsersController@store')->name('store_users');
    Route::get('user/edit/{id?}', 'Admin\UsersController@edit')->name('edit_users');
    Route::post('user/update/{id?}', 'Admin\UsersController@update')->name('update_users');
    Route::get('user/delete/{id?}', 'Admin\UsersController@destroy')->name('delete_users');
    //Order
    Route::get('/order', 'Admin\OrdersController@index')->name('manage_orders');
    Route::get('order/show/{id?}', 'Admin\OrdersController@show')->name('show_orders');
    Route::post('/order/accept_order', 'Admin\OrdersController@acceptOrder')->name('accept_orders');
    Route::get('/order/update_quantity/{id?}', 'Admin\OrdersController@updateQuantity')->name('update_quantity');
    Route::post('order/denied_order', 'Admin\OrdersController@deniedOrder')->name('denied_orders');
    //Category
    Route::get('/category', 'Admin\CategoriesController@index')->name('manage_categories');
    Route::get('category/show/{id?}', 'Admin\CategoriesController@show')->name('show_categories');
    Route::get('category/delete/{id?}', 'Admin\CategoriesController@destroy')->name('delete_categories');
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

/* Client*/
Route::get('/', 'ClientHomeController@index')->name('home');

Route::get('users/{user}/detail', 'UserController@show')->name('users.detail');
Route::patch('users/{user}', 'UserController@update')->name('users.update');
Route::get('/changePassword','UserController@showChangePassword');
Route::post('/changePassword', 'UserController@changePassword')->name('changePassword');

Route::group(['prefix' => 'products'], function(){
    Route::get('/product-accord-category/{category}', 'ProductController@product_accord_category')->name('pro_accord_cate');
    Route::get('/product-accord-price/{parameter}', 'ProductController@product_accord_price')->name('pro_accord_price');
    Route::get('/{product}', 'ProductController@show')->name('product_detail');
});

Route::group(['prefix' => 'order'], function(){
    Route::post('/order-item', 'OrderController@orderItem')->name('order_item');
    Route::post('/order-item/update-quantity', 'OrderController@updateQuantity')->name('update_quantity');
    Route::post('/order-item/delete-item', 'OrderController@deleteItem')->name('delete_item');
    Route::get('/order-item/{order}', 'OrderController@checkout')->name('checkout');
    Route::post('/order-item/update_ship_address', 'OrderController@update_ship_address')->name('update_ship_address');
    Route::get('/order-item/finish-order/{order}', 'OrderController@finish_order')->name('finish_order');
    Route::post('/order-item/accept_order', 'OrderController@accept_order')->name('accept_order');
    Route::get('/list-order/{user}', 'OrderController@list_order')->name('list_order');
    Route::get('/list-order/{order}/detail', 'OrderController@order_detail')->name('order_detail');
});
/* Client*/
