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

Route::get('/', ['as' => 'inicio', 'uses' => 'PagesController@inicio']);

// mensajes
// Route::get('/mensajes', ['as' => 'mensajes', 'uses' => 'PagesController@contacto']);
// Route::post('contacto', 'PagesController@mensajes');

Route::view('/about', 'about')->name('acerca');
Route::view('/servicios', 'servicios')->name('servicios');

// Saludos
Route::get('/saludos/{nombre?}', ['as' => 'saludos', 'uses' => 'PagesController@saludo' ])->where('nombre', "[A-Za-z]+");


// Mensajes
// Route::get('/mensajes', ['as' => 'messages.index', 'uses' => 'MessagesController@index' ]);
// Route::get('/mensajes/create', ['as' => 'messages.create', 'uses' => 'MessagesController@create' ]);
// Route::post('/mensajes', ['as' => 'messages.store', 'uses' => 'MessagesController@store' ]);
// Route::get('/mensajes/{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show' ]);
// Route::get('/mensajes/{id}/edit', ['as' => 'messages.edit', 'uses' => 'MessagesController@edit' ]);
// Route::put('/mensajes/{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update' ]);
// Route::delete('/mensajes/{id}', ['as' => 'messages.destroy', 'uses' => 'MessagesController@destroy' ]);

Route::resource('mensajes', 'MessagesController');

Route::get('login', 'Auth\LoginController@showLoginForm');
Route::post('login', 'Auth\LoginController@login');
