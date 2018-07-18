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

Route::get('test', function(){
	
	$curso = new \App\Curso;
	$curso->nombre = 'ingles';
	$curso->orden = 5;

	$curso->save();

	/*$ciclo = new \App\Ciclo;
	$ciclo->nombre = '2018';
	

	$ciclo->save();

	$grado = new \App\Grado;
	$grado->nombre = 'Kinder';
	

	$grado->save();

	$asig = new \App\Asignacion;
	$asig->ciclo_id = 1;
	$asig->grado_id = 1;
	$asig->alumno_id = 1;

	

	$asig->save();*/

	$punteo = new \App\Punteo;
	$punteo->nota1 = 20;
	$punteo->nota2 = 20;
	$punteo->nota3 = 20;
	$punteo->nota4 = 20;
	$punteo->curso_id = 3;
	$punteo->asignacion_id = 1;
	

	$punteo->save();

	
});






Route::resource('punteo', 'PunteoController');

 


Route::resource('alumno', 'AlumnoController');


Route::get('pdf/impresion', 'PdfController@impresion');

Route::resource('curso', 'CursoController');
Route::resource('grado', 'GradoController');