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
/*
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

//Rutas InteresPoint
Route::get('interest_points', 'InterestPointController@index');
Route::get('interest_points/{interest_points}', 'InterestPointController@show');
Route::post('interest_points', 'InterestPointController@store');
Route::put('interest_points/{interest_points}', 'InterestPointController@update');
Route::delete('interest_points/{interest_points}', 'InterestPointController@delete');

//Rutas Horarios
Route::get('horarios', 'HorarioController@index');
Route::get('horarios/{horarios}', 'HorarioController@show');
Route::post('horarios', 'HorarioController@store');
Route::put('horarios/{horarios}', 'HorarioController@update');
Route::delete('horarios/{horarios}', 'HorarioController@delete');

//Rutas Categorie_Places
Route::get('categorie_places', 'CategoriePlaceController@index');
Route::get('categorie_places/{categorie_places}', 'CategoriePlaceController@show');
Route::post('categorie_places', 'CategoriePlaceController@store');
Route::put('categorie_places/{categorie_places}', 'CategoriePlaceController@update');
Route::delete('categorie_places/{categorie_places}', 'CategoriePlaceController@delete');
*/
Route::group(['middleware' => ['cors']], function() {
//User
Route::post('register', 'UserController@register');
Route::post('login', 'UserController@authenticate');

//Bus Stop
Route::get('bus_stops', 'BusStopController@index');
Route::get('bus_stops/{bus_stop}', 'BusStopController@show');

//Rutas
Route::get('rutas', 'RutasController@index');
Route::get('rutas/{rutas}', 'RutasController@show');

//Interest Points
Route::get('interest_points', 'InterestPointController@index');
Route::get('interest_points/{interest_points}', 'InterestPointController@show');

//Horarios
Route::get('horarios', 'HorarioController@index');
Route::get('horarios/{horarios}', 'HorarioController@show');

//Categories Places
Route::get('categorie_places', 'CategoriePlaceController@index');
Route::get('categorie_places/{categorie_places}', 'CategoriePlaceController@show');

Route::get('drivers', 'DriverController@index');

Route::group(['middleware' => ['jwt.verify']], function() {
    //Bus Stop
    Route::post('bus_stops', 'BusStopController@store');
    Route::put('bus_stops/{bus_stop}', 'BusStopController@update');
    Route::delete('bus_stops/{bus_stop}', 'BusStopController@delete');

    //Rutas
    Route::post('rutas', 'RutasController@store');
    Route::put('rutas/{rutas}', 'RutasController@update');
    Route::delete('rutas/{rutas}', 'RutasController@delete');

    //Driver

    Route::get('drivers/{drivers}', 'DriverController@show');
    Route::post('drivers', 'DriverController@store');
    Route::put('drivers/{drivers}', 'DriverController@update');
    Route::delete('drivers/{drivers}', 'DriverController@delete');

    //Coperativa
    Route::get('cooperativas', 'CooperativaController@index');
    Route::get('cooperativas/{cooperativas}', 'CooperativaController@show');
    Route::post('cooperativas', 'CooperativaController@store');
    Route::put('cooperativas/{cooperativas}', 'CooperativaController@update');
    Route::delete('cooperativas/{cooperativas}', 'CooperativaController@delete');

    //Interest Points
    Route::post('interest_points', 'InterestPointController@store');
    Route::put('interest_points/{interest_points}', 'InterestPointController@update');
    Route::delete('interest_points/{interest_points}', 'InterestPointController@delete');

    //Horarios
    Route::post('horarios', 'HorarioController@store');
    Route::put('horarios/{horarios}', 'HorarioController@update');
    Route::delete('horarios/{horarios}', 'HorarioController@delete');

    //Categories Places
    Route::post('categorie_places', 'CategoriePlaceController@store');
    Route::put('categorie_places/{categorie_places}', 'CategoriePlaceController@update');
    Route::delete('categorie_places/{categorie_places}', 'CategoriePlaceController@delete');
});
});
