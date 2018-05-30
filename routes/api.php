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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::middleware('auth:api')->resource('/paseos', 'PaseoController');

Route::resource('/paseos', 'PaseoController');
Route::get('/paseos/reduced/{id}', 'PaseoController@reduced')->name('paseos.reduced');
Route::get('/paseos/detail/{id}', 'PaseoController@exceptImage')->name('paseos.reducedByImage');
Route::get('/paseos/image/{id}', 'PaseoController@image')->name('paseos.image');


Route::resource('/categorias', 'CategoriaController');