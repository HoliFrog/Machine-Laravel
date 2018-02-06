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
Route::get('boissons','ListeBoissonsController@listBoisson');
Route::get('boissons/listByName','ListeBoissonsController@orderByName');
Route::get('boissons/listByPrice','ListeBoissonsController@orderByPrice');
Route::delete('boissons/{id}','ListeBoissonsController@destroy');

Route::get('boissons/addNewDrink','AddDrinkController@create');
Route::post('boissons','AddDrinkController@store');

Route::get('boissons/edit/{id}','ListeBoissonsController@editBoisson');
Route::put('boissons/{id}','ListeBoissonsController@update' );

Route::get('/boissons/{id}','ListeBoissonsController@showBoisson');
