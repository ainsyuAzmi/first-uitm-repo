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

Route::get('/testing', function () {
    echo('This is testing');
});

Route::view('/welcome', 'welcome');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
