<?php

use Illuminate\Support\Facades\Route;

Route::get('/','ProductController@index')->name('products.index');
Route::get('/products/{product}','ProductController@show')->name('products.show');

Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/', 'ProductController@adminIndex')->name('admin.home');
    Route::get('products/{product}/edit', 'ProductController@edit')->name('products.edit');
    Route::patch('products/{product}/update', 'ProductController@update')->name('products.update');
    Route::get('products/create', 'ProductController@create')->name('products.create');
    Route::post('products/store', 'ProductController@store')->name('products.store');
    Route::get('products/{product}/delete', 'ProductController@destroy')->name('products.delete');
});