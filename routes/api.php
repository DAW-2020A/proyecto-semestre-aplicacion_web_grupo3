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
