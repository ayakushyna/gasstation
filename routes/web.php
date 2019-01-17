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
    return view('homepage.index');
});

//Route::get('/home', 'HomeController@index')->name('home');

        Route::get('/fuels', 'FuelController@index')->name('fuels');
        Route::get('/fuels/create', 'FuelController@create')->name('fuels.create');
        Route::get('/fuels/{fuel}/edit', 'FuelController@edit')->name('fuels.edit');
        Route::post('/fuels/store', 'FuelController@store')->name('fuels.store');
        Route::post('/fuels/{fuel}', 'FuelController@update')->name('fuels.update');
        Route::post('/fuels', 'FuelController@delete')->name('fuels.delete');


//Route::get('/', 'PostController@index')->name('home');
//Route::get('/posts', 'PostController@index')->name('home');
//Route::post('/posts', 'PostController@store');
//Route::get('/posts/create', 'PostController@create');
//Route::get('/posts/{post}/edit', 'PostController@edit');
//Route::get('/posts/{post}', 'PostController@show');
//Route::post('/posts/{post}', 'PostController@update');
//
//Route::get('/suppliers', 'SupplierController@index');
//Route::post('/suppliers', 'SupplierController@store')->name('suppliers.store');
//Route::get('/suppliers/{supplier}', 'SupplierController@show');
//Route::post('/suppliers/{supplier}', 'SupplierController@update')->name('suppliers.update');
//Route::post('/suppliers/{supplier}/delete', 'SupplierController@delete');