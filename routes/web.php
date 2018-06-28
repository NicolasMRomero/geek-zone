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

// home
Route::get('/index', 'IndexController@index')->name('index');
// faq
Route::get('/faq', 'IndexController@faq')->name('faq');

// profile => user
Route::get('/profile', 'UserController@profile')->name('profile');

// login y register
Auth::routes();

//productos
Route::middleware('auth')->group(function () {
    Route::resource('product', 'ProductController');
    });
