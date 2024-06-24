<?php

use Illuminate\Support\Facades\Route;

$controller_route = 'App\Http\Controllers\\';

Route::view('/', 'home')->name('home');

Route::get('personas', $controller_route.'PersonasController@index')->name('personas.index');

Route::get('personas/crear', $controller_route.'PersonasController@create')->name('personas.create');

Route::get('personas/{nPerCodigo}/editar', $controller_route.'PersonasController@edit')->name('personas.edit');

Route::patch('personas/{nPerCodigo}', $controller_route.'PersonasController@update')->name('personas.update');

Route::post('personas', $controller_route.'PersonasController@store')->name('personas.store');

Route::get('personas/{nPerCodigo}', $controller_route.'PersonasController@show')->name('personas.show');

Route::view('contacto', 'contacto')->name('contacto');