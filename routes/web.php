<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::get('personas','App\Http\Controllers\PersonasController@index')->name('personas.index');
Route::get('personas/{nPerCodigo}','App\Http\Controllers\PersonasController@show')->name('personas.show');
Route::view('contacto','contacto')->name('contacto');