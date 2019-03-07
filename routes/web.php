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

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@inicio']);
Route::get('/home', function(){
    return redirect('/mensajes');
});
// mensajes
// Route::get('/mensajes', ['as' => 'mensajes', 'uses' => 'PagesController@contacto']);
// Route::post('contacto', 'PagesController@mensajes');

Route::view('/about', 'about')->name('acerca');
Route::view('/servicios', 'servicios')->name('servicios');

// Saludos
Route::get('/saludos/{nombre?}', ['as' => 'saludos', 'uses' => 'PagesController@saludo' ])->where('nombre', "[A-Za-z]+");


// Mensajes
Route::resource('mensajes', 'MessagesController');

Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout');

// Users
Route::get('usuarios', ['as' => 'users.index', 'uses' => 'UsersController@index']);
