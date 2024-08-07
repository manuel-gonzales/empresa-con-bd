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

Route::delete('personas/{persona}', $controller_route.'PersonasController@destroy')->name('personas.destroy');

Route::view('contacto', 'contacto')->name('contacto');

Route::post('contacto', $controller_route.'ContactoController@store');

Route::view('contacto/enviado', 'emails.mensaje-enviado')->name('mensaje-enviado');