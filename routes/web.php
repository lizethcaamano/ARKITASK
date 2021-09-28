<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');

});

<<<<<<< HEAD

Route::resource('proyecto', 'ProyectoController');

Route::resource('Usuario','UsuarioController');


Route::resource('Encargado','EncargadoProyectoController');
Route::resource('Grupo','GruposTrabajoController');
=======
Route::resource('actividades', 'ActividadesController');

Route::resource('entregables', 'EntregablesController');
>>>>>>> 29f4d25d54f8ae25e438ee9666b5994e42238526
