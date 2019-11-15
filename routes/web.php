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

Route::get('/', function () {
    return view('welcome');
});

Route::get('empleado','EmpleadoController@show')->name('empleado');

Route::get('departamentos','DepartamentoController@sacardepartamentos')->name('departamentos');

Route::get('empleados','EmpleadoController@sacarempleados')->name('empleados');

Route::get('proyectos','ProyectoController@sacarproyectos')->name('proyectos');
