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

Route::get('project/{id}/notes', 'ProjectNoteController@index');
Route::get('project/{id}/notes/{noteid}', 'ProjectNoteController@show');
Route::post('project/{id}/notes/{noteid}', 'ProjectNoteController@store');
Route::put('project/{id}/notes/{noteid}', 'ProjectNoteController@update');
Route::delete('project/{id}/notes/{noteid}', 'ProjectNoteController@delete');

Route::get('project', 'ProjectController@index');
Route::post('project', ['as'=> 'Project.store', 'uses' => 'ProjectController@store']);
Route::get('project/{id}', ['as'=> 'Project.show', 'uses' => 'ProjectController@show']);
Route::delete('project/{id}', ['as'=> 'Project.delete', 'uses' => 'ProjectController@destroy']);


