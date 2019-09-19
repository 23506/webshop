<?php

use Illuminate\Support\Facades\Route;

Route::get('/','ProductController@index')->name('products.index');
Route::get('/products/{product}','ProductController@show')->name('products.show');

Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
