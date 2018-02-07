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
})->middleware('auth');
Route::get('boissons','ListeBoissonsController@listBoisson')->middleware('auth');
//Route::get('boissons','ListeBoissonsController@venteShow')->middleware('auth');
Route::get('boissons/listByName','ListeBoissonsController@orderByName')->middleware('auth');
Route::get('boissons/listByPrice','ListeBoissonsController@orderByPrice')->middleware('auth');
Route::delete('boissons/{id}','ListeBoissonsController@destroy')->middleware('auth');
Route::post('boissons/{boisson}','ListeBoissonsController@venteStore');
//Attention, dans laravel, un lien est créé si le parametre de la route à le même nom que celui de la méthode appelée!!

Route::get('boissons/addNewDrink','AddDrinkController@create')->middleware('auth');
Route::post('boissons','AddDrinkController@store')->middleware('auth');

Route::get('boissons/edit/{id}','ListeBoissonsController@editBoisson')->middleware('auth');
Route::put('boissons/{id}','ListeBoissonsController@update' )->middleware('auth');

Route::get('/boissons/{id}','ListeBoissonsController@showBoisson')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
