<?php

use App\Http\Controllers\Api;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('Api')->name('api.')->group(function (){
    Route::prefix('cars')->group(function () {
        
        Route::get('/', 'CarController@index')->name('index_cars');
        Route::get('/{id}', 'CarController@show')->name('single_cars');
       
        Route::post('/', 'CarController@store')->name('store_cars');
		Route::put('/{id}', 'CarController@update')->name('update_cars');

		Route::delete('/{id}', 'CarController@delete')->name('delete_cars');
    });
});