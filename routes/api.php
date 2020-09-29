<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('todo', 'TodoApiController@index');
Route::get('todo/{id}', 'TodoApiController@show');
Route::post('todo', 'TodoApiController@store');
Route::put('todo/{id}', 'TodoApiController@update');
Route::delete('todo/{id}', 'TodoApiController@delete');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


