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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/', 'PagesController@index');
Route::get('/', function()
{
    if(Auth::guest()){
        return view('auth/login');
    } else {
        return view('home');
    }
});
//Route::get('/store', 'PagesController@getStore');
Route::get('/coupon', 'PagesController@getCoupon');
Route::resource('/stores','StoreController');

