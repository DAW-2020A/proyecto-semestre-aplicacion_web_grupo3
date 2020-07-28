<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

//Rutas Bus Stop
Route::get('bus_stops', 'BusStopController@index');
Route::get('bus_stops/{bus_stop}', 'BusStopController@show');
Route::post('bus_stops', 'BusStopController@store');
Route::put('bus_stops/{bus_stop}', 'BusStopController@update');
Route::delete('bus_stops/{bus_stop}', 'BusStopController@delete');

// Rutas Rutas
Route::get('rutas', 'RutasController@index');
Route::get('rutas/{rutas}', 'RutasController@show');
Route::post('rutas', 'RutasController@store');
Route::put('rutas/{rutas}', 'RutasController@update');
Route::delete('rutas/{rutas}', 'RutasController@delete');

//Rutas Driver
Route::get('drivers', 'DriverController@index');
Route::get('drivers/{drivers}', 'DriverController@show');
Route::post('drivers', 'DriverController@store');
Route::put('drivers/{drivers}', 'DriverController@update');
Route::delete('drivers/{drivers}', 'DriverController@delete');

//Rutas Cooperativa
Route::get('cooperativas', 'CooperativaController@index');
Route::get('cooperativas/{cooperativas}', 'CooperativaController@show');
Route::post('cooperativas', 'CooperativaController@store');
Route::put('cooperativas/{cooperativas}', 'CooperativaController@update');
Route::delete('cooperativas/{cooperativas}', 'CooperativaController@delete');
