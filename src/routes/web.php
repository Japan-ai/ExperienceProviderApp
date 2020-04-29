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

Auth::routes();
Route::get('/', 'ShopController@index')->name('top');

//ユーザー側 ログイン後
Route::group(['middleware' => 'auth'], function () {
Route::get('/home', 'ShopController@index')->name('home');
Route::get('/mycart', 'ShopController@myCart');
Route::post('/mycart', 'ShopController@addMycart')->name('mycart.add');
Route::post('/cartdelete', 'ShopController@deleteCart');
Route::post('/checkout', 'ShopController@checkout');
});

//管理者側 ログイン前
Route::group(['prefix' => 'admin'], function() {
Route::get('login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('login', 'Admin\Auth\LoginController@login');
Route::get('password/confirm', 'Admin\Auth\ConfirmPasswordController@showConfirmForm ')->name('adminpassword.confirm');
Route::post('password/confirm', 'Admin\Auth\ConfirmPasswordController@confirm');
Route::post('password/email', 'Admin\Auth\ForgotPasswordController@sendResetLinkEmail')->name('adminpassword.email');
Route::get('password/reset', 'Admin\Auth\ForgotPasswordController@showLinkRequestForm')->name('adminpassword.request');
Route::post('password/reset', 'Admin\Auth\ResetPasswordController@reset')->name('adminpassword.update');
Route::get('password/reset/{token}', 'Admin\Auth\ResetPasswordController@showResetForm')->name('adminpassword.reset');
Route::get('register', 'Admin\Auth\RegisterController@showRegistrationForm')->name('admin.register');
Route::post('register', 'Admin\Auth\RegisterController@register');
});
//管理者側ログイン後
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function() {
Route::get('home', 'Admin\HomeController@index')->name('admin.home');
Route::post('logout', 'Admin\Auth\LoginController@logout')->name('admin.logout');
});