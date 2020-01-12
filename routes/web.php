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

Route::prefix('minha-agenda')->group(function() {

    Route::view('/', 'agenda.index');
    Route::view('/create', 'agenda.create')->name('create');
    Route::get('/list', 'ContatoController@list')->name('list');
    Route::post('/store', 'ContatoController@store')->name('store');
    Route::get('/{id}/delete', 'ContatoController@delete')->name('delete');
    Route::get('/{id}/edit','ContatoController@edit')->name('edit');
    Route::put('/{id}/update', 'ContatoController@update')->name('update');
        
});