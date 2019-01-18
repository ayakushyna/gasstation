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

