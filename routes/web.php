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


Route::get('/exit', 'HomeController@goodbye');
Route::get('/', 'HomeController@index')->name('home');

Route::get('/fuels', 'FuelController@index')->name('fuels');
Route::get('/fuels/create', 'FuelController@create')->name('fuels.create');
Route::get('/fuels/{fuel}/edit', 'FuelController@edit')->name('fuels.edit');
Route::post('/fuels/store', 'FuelController@store')->name('fuels.store');
Route::post('/fuels/{fuel}', 'FuelController@update')->name('fuels.update');
Route::post('/fuels', 'FuelController@delete')->name('fuels.delete');

Route::get('/clients', 'ClientController@index')->name('clients');
Route::get('/clients/create', 'ClientController@create')->name('clients.create');
Route::get('/clients/{client}/edit', 'ClientController@edit')->name('clients.edit');
Route::post('/clients/store', 'ClientController@store')->name('clients.store');
Route::post('/clients/{client}', 'ClientController@update')->name('clients.update');
Route::post('/clients', 'ClientController@delete')->name('clients.delete');

Route::get('/provisioners', 'ProvisionerController@index')->name('provisioners');
Route::get('/provisioners/create', 'ProvisionerController@create')->name('provisioners.create');
Route::get('/provisioners/{provisioner}/edit', 'ProvisionerController@edit')->name('provisioners.edit');
Route::post('/provisioners/store', 'ProvisionerController@store')->name('provisioners.store');
Route::post('/provisioners/{provisioner}', 'ProvisionerController@update')->name('provisioners.update');
Route::post('/provisioners', 'ProvisionerController@delete')->name('provisioners.delete');

Route::get('/positions', 'PositionController@index')->name('positions');
Route::get('/positions/create', 'PositionController@create')->name('positions.create');
Route::get('/positions/{position}/edit', 'PositionController@edit')->name('positions.edit');
Route::post('/positions/store', 'PositionController@store')->name('positions.store');
Route::post('/positions/{position}', 'PositionController@update')->name('positions.update');
Route::post('/positions', 'PositionController@delete')->name('positions.delete');

Route::get('/gas_stations', 'GasStationController@index')->name('gas_stations');
Route::get('/gas_stations/create', 'GasStationController@create')->name('gas_stations.create');
Route::get('/gas_stations/{gas_station}/edit', 'GasStationController@edit')->name('gas_stations.edit');
Route::post('/gas_stations/store', 'GasStationController@store')->name('gas_stations.store');
Route::post('/gas_stations/{gas_station}', 'GasStationController@update')->name('gas_stations.update');
Route::post('/gas_stations', 'GasStationController@delete')->name('gas_stations.delete');

Route::get('/gas_columns', 'GasColumnController@index')->name('gas_columns');
Route::get('/gas_columns/create', 'GasColumnController@create')->name('gas_columns.create');
Route::get('/gas_columns/{gas_column}/edit', 'GasColumnController@edit')->name('gas_columns.edit');
Route::post('/gas_columns/store', 'GasColumnController@store')->name('gas_columns.store');
Route::post('/gas_columns/{gas_column}', 'GasColumnController@update')->name('gas_columns.update');
Route::post('/gas_columns', 'GasColumnController@delete')->name('gas_columns.delete');

Route::get('/earning_histories', 'EarningHistoryController@index')->name('earning_histories');
Route::get('/earning_histories/create', 'EarningHistoryController@create')->name('earning_histories.create');
Route::get('/earning_histories/{earning_history}/edit', 'EarningHistoryController@edit')->name('earning_histories.edit');
Route::post('/earning_histories/store', 'EarningHistoryController@store')->name('earning_histories.store');
Route::post('/earning_histories/{earning_history}', 'EarningHistoryController@update')->name('earning_histories.update');
Route::post('/earning_histories', 'EarningHistoryController@delete')->name('earning_histories.delete');

Route::get('/addings', 'AddingController@index')->name('addings');
Route::get('/addings/create', 'AddingController@create')->name('addings.create');
Route::get('/addings/{adding}/edit', 'AddingController@edit')->name('addings.edit');
Route::post('/addings/store', 'AddingController@store')->name('addings.store');
Route::post('/addings/{adding}', 'AddingController@update')->name('addings.update');
Route::post('/addings', 'AddingController@delete')->name('addings.delete');

Route::get('/buyings', 'BuyingController@index')->name('buyings');
Route::get('/buyings/create', 'BuyingController@create')->name('buyings.create');
Route::get('/buyings/{buying}/edit', 'BuyingController@edit')->name('buyings.edit');
Route::post('/buyings/store', 'BuyingController@store')->name('buyings.store');
Route::post('/buyings/{buying}', 'BuyingController@update')->name('buyings.update');
Route::post('/buyings', 'BuyingController@delete')->name('buyings.delete');

Route::get('/workers', 'WorkerController@index')->name('workers');
Route::get('/workers/create', 'WorkerController@create')->name('workers.create');
Route::get('/workers/{worker}/edit', 'WorkerController@edit')->name('workers.edit');
Route::post('/workers/store', 'WorkerController@store')->name('workers.store');
Route::post('/workers/{worker}', 'WorkerController@update')->name('workers.update');
Route::post('/workers', 'WorkerController@delete')->name('workers.delete');

Route::get('/orders', 'OrderController@index')->name('orders');
Route::get('/orders/create', 'OrderController@create')->name('orders.create');
Route::get('/orders/{order}/edit', 'OrderController@edit')->name('orders.edit');
Route::post('/orders/store', 'OrderController@store')->name('orders.store');
Route::post('/orders/{order}', 'OrderController@update')->name('orders.update');
Route::post('/orders', 'OrderController@delete')->name('orders.delete');
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
