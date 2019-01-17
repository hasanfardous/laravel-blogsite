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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/portfolios', function(){
    return view('portfolios.portfolios');
});

Route::get('/portfolios/new', function(){
    return view('portfolios.new');
});

Route::get('/portfolios/{portfolio}', function(){
    return view('portfolios.single');
});

