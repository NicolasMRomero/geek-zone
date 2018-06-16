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

Route::get('/portada', 'IndexController@index');
Route::get('/faq', 'IndexController@faq')->name('faq');
Route::get('/profile', 'IndexController@profile')->name('profile');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
