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

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    //return view('welcome');
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//rutas de crud de ingredientes
Route::get('/ingredientes', 'IngredienteController@index');
Route::get('/ingredientes/edit/{id}', 'IngredienteController@editView')->name('ingredientes.edit_view');
Route::post('/ingredientes/{id}', 'IngredienteController@edit')->name('ingredientes.edit');
Route::post('/ingredientes', 'IngredienteController@store')->name('ingredientes.store');
Route::delete('/ingredientes/{id}', 'IngredienteController@destroy')->name('ingredientes.destroy');

//rutas para el menu
Route::get('/menu', 'RecetasController@indexMenu')->name('recetas.indexMenu');
Route::get('/pide_orden', 'OrdensController@store')->name('ordens.store');

//rutas para las ordenes
Route::get('/ordenes', 'OrdensController@index')->name('ordens.index');
Route::post('/ordenes/detalles/{id}', 'OrdensController@detallesView')->name('ordens.detalles_view');
Route::post('/ordenes/{id}', 'OrdensController@detalles')->name('ordens.detalles');
Route::post('/usuarios/detalles/{id}', 'UsersController@detallesView')->name('users.detalles_view');

//ruta paa las recetas
Route::get('/recetas', 'RecetasController@indexAdmin')->name('recetas.index');