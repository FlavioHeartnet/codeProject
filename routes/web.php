<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('client', 'clientController@index');
Route::post('client', ['as'=> 'client.store', 'uses' => 'clientController@store']);
Route::get('client/{id}', ['as'=> 'client.show', 'uses' => 'clientController@show']);
Route::delete('client/{id}', ['as'=> 'client.delete', 'uses' => 'clientController@destroy']);
