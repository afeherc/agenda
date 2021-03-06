<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::model('citas', 'Cita');
Route::model('contactos', 'Contacto');

Route::get('/', 'AgendaController@index');
Route::resource('agenda', 'AgendaController');
Route::resource('citas', 'CitasController');
Route::resource('contactos', 'ContactosController');

Route::bind('citas', function($value, $route) {
    return App\Cita::whereSlug($value)->first();
});
Route::bind('contactos', function($value, $route) {
    return App\Contacto::whereSlug($value)->first();
});

