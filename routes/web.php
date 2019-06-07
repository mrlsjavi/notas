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
})->middleware('auth');

Route::get('test', function(){


});






Route::resource('punteo', 'PunteoController');
Route::resource('conducta','ConductaController');
 


Route::resource('alumno', 'AlumnoController');
Route::resource('ciclo', 'CicloController');

Route::get('pdf/{asignacion}/impresion', 'PdfController@impresion');

Route::resource('curso', 'CursoController');
Route::resource('grado', 'GradoController');
Route::resource('asignacion', 'AsignacionController');

Route::post('asignacion/getcursos', 'AsignacionController@getcursos');
Route::get('asignacion/{asignacion}/assign', 'AsignacionController@create');
Route::post('asignacion/guardar', 'AsignacionController@guardar');
Route::resource('pensum', 'PensumController');

Route::get('login', 'Auth\LoginController@showLoginForm');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout');

Route::get('teste', function(){
	$user = new App\User;
	$user->name = 'AlegreInfancia';
	$user->email = 'alegre_infancia@yahoo.com';
	$user->password = bcrypt('Silvita14');
	$user->save();

	return $user;
});

Route::get('ausencia/{asignacion}/assign', 'AusenciaController@create');
Route::post('ausencia/{asignacion}/save',  'AusenciaController@store');
Route::get('reporte/{asignacion}/assign', 'ReporteController@create');
Route::post('reporte/{asignacon}/save', 'ReporteController@store');
//Route::resource('ausencia', 'AusenciaController');