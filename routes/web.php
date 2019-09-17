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
    return view('home');
});

Route::resource ('rol','RolController');
Route::resource ('filiacion','AfiliacionController');
Route::resource ('paciente','PacienteController');
Route::resource ('tratamiento','TratamientoController');




Route::get('login', function () {
    return view('login');
});

Route::get('usuario/createrol', function () {
    return view('usuario/createrol');
    
});


