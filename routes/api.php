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

Route::post('/car', 'CarController@create');
Route::get('/car', 'CarController@list');
Route::get('/car/{id}', 'CarController@detail');
Route::put('/car/{id}', 'CarController@update');
Route::delete('/car/{id}', 'CarController@delete');
