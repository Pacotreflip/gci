<?php

// Home
Route::get('/', [
	'uses' => 'HomeController@index', 
	'as' => 'home'
]);

// Acerca de Nosotros
Route::get('acerca', 'AcercaController@Acerca');

// Portafolio
Route::get('galeria', 'GaleriaController@galeria');

// Servicios

Route::get('servicios','ServiciosController@servicios');

// Admin
Route::get('admin', [
	'uses' => 'AdminController@admin',
	'as' => 'admin',
	'middleware' => 'admin'
]);

// Contact
Route::resource('contact', 'ContactController', [
	'except' => ['show', 'edit']
]);

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
Route::get('auth/confirm/{token}', 'Auth\AuthController@getConfirm');
