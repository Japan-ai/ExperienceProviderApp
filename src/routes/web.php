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

Route::get('/home', 'ShopController@index');

Route::group(['middleware' => 'auth:user'], function () {
Route::get('/mycart', 'ShopController@myCart');
Route::post('/mycart', 'ShopController@addMycart')->name('mycart.add');
Route::post('/cartdelete', 'ShopController@deleteCart');
Route::post('/checkout', 'ShopController@checkout');

Route::post('/login', 'User\Auth\LoginController@login')->name('user.login');
});