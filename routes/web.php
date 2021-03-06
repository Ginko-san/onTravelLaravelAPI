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

Route::get('/', function(){
	return redirect()->route('login');
});

Route::group(['middleware'=>'web'], function (){
	Auth::routes();
});

//Auth::routes();
Route::group(['middleware' => ['auth']], function(){
    Route::get('/home', 'HomeController@index')->name('home');
	
	Route::get('/paseos', 'PaseoController@indexVista')->name('paseos.indexVista');
	Route::get('/paseos/create', 'PaseoController@create')->name('paseos.createVista');
	Route::get('/paseos/{id}/edit', 'PaseoController@edit')->name('paseos');
	Route::put('/paseos/{id}', 'PaseoController@update')->name('paseos');

	Route::get('/categorias', 'CategoriaController@indexVista')->name('categorias.indexVista');
	Route::get('/categorias/create', 'CategoriaController@create')->name('categorias.createVista');
});


