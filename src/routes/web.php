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

Route::get('/', 'ShopController@index');

Route::group(['middleware' => 'auth'], function () {
Route::get('/mycart', 'ShopController@myCart');
Route::post('/mycart', 'ShopController@addMycart')->name('mycart.add');
Route::post('/cartdelete', 'ShopController@deleteCart');
Route::post('/checkout', 'ShopController@checkout');
});

Route::group(['prefix' => 'admin'], function() {
Route::get('login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('login', 'Admin\Auth\LoginController@login')->name('admin.login');
Route::get('logout', 'Admin\Auth\LoginController@logout')->name('admin.logout');
Route::get('register', 'Admin\Auth\RegisterController@showRegisterForm')->name('admin.register');
Route::post('register', 'Admin\Auth\RegisterController@register')->name('admin.register');
Route::get('home', 'Admin\HomeController@index')->name('admin.home');
});

Auth::routes();