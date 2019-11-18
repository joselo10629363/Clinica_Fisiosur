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

Route::get('/', 'LoginController@form');
Route::post('/login', 'LoginController@login');

Route::group(['middleware'=>['auth']], function(){
	Route::get('/logout',function(){
		Auth::logout();
		return redirect()->action('LoginController@form');
	});
});
Route::get('admin', 'AdminController@index');
Route::resource ('rol','RolController');
Route::resource ('filiacion','AfiliacionController');
Route::resource ('paciente','PacienteController');
Route::resource ('usuario','UsuarioController');
Route::resource ('reporte','ReporteAdminController');
Route::resource ('generarpdf','PdfPacientesController');
Route::resource ('ingresospdf','PdfIngresosController');
Route::resource ('egresospdf','PdfEgresosController');

Route::get('enfermera', function () {
    return view('vistaenfermeria');});

Route::resource ('enfermeria','EnfermeriaController');
 Route::resource ('listarpacientes','ListarpacientesController');

////////////////////
Route::get('medico', function () {
    return view('vistamedico');});

Route::resource ('medicos','MedicoController');
Route::resource ('atencion','AtencionController');
Route::resource ('tratamiento','TratamientoController');
Route::resource ('diagnostico','DiagnosticoController');

Route::resource ('programacion','ProgramacionController');
Route::resource ('patologia','PatologiaController');
Route::resource ('evolucion','EvolucionController');
Route::resource ('egreso','EgresoController');
Route::resource ('concepto','ConceptoController');
Route::resource ('ingreso','ingresoController');
Route::resource ('listar','ListarController');