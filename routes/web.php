<?php

use Illuminate\Support\Facades\Route;

// Ruta para la vista principal
Route::view('/', 'home')->name('home');

Route::view('servicios', 'servicios')->name('servicios');

Route::view('proyectos', 'proyectos')->name('proyectos');

//ruta del controlador clientes
Route::get('clientes', 'App\Http\Controllers\ClientesController@index')->name('clientes');
// ->middleware('auth');

Route::get('clientes/crear', 'App\Http\Controllers\ClientesController@create')->name('clientes.create');
//ruta editar
Route::get('clientes/{id}/editar', 'App\Http\Controllers\ClientesController@edit')->name('clientes.edit');
//ruta modificar con el metodo parcial partch
Route::patch('clientes/{id}', 'App\Http\Controllers\ClientesController@update')->name('clientes.update');
//ruta  store con metodo post
Route::post('clientes', 'App\Http\Controllers\ClientesController@store')->name('clientes.store');
Route::get('clientes/{id}', 'App\Http\Controllers\ClientesController@show')->name('clientes.show');
//ruta eliminar con metodo destroy
Route::delete('clientes/{id}', 'App\Http\Controllers\ClientesController@destroy')->name('clientes.destroy');

Route::view('blog', 'blog')->name('blog');
//ruta del contacto
Route::view('contacto', 'contacto')->name('contacto');

