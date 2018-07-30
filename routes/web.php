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
	
	$ciclo = new \App\Ciclo;
	$ciclo->nombre = '2018';
	

	$ciclo->save();

	/*$pensum = new \App\Pensum;
	$pensum->grado_id =1;
	$pensum->curso_id = 1;
	$pensum->save();
	$pensum = new \App\Pensum;
	$pensum->grado_id =1;
	$pensum->curso_id = 2;
	$pensum->save();
	$pensum = new \App\Pensum;
	$pensum->grado_id =1;
	$pensum->curso_id = 3;
	$pensum->save();
	$curso = new \App\Curso;
	$curso->nombre = 'ingles';
	$curso->orden = 5;

	$curso->save();

	$ciclo = new \App\Ciclo;
	$ciclo->nombre = '2018';
	

	$ciclo->save();

	grado = new \App\Grado;
	$grado->nombre = 'Kinder';
	

	$grado->save();

	$asig = new \App\Asignacion;
	$asig->ciclo_id = 1;
	$asig->grado_id = 1;
	$asig->alumno_id = 1;

	

	$asig->save();*/

	/*$punteo = new \App\Punteo;
	$punteo->nota1 = 20;
	$punteo->nota2 = 20;
	$punteo->nota3 = 20;
	$punteo->nota4 = 20;
	$punteo->curso_id = 3;
	$punteo->asignacion_id = 1;
	

	$punteo->save();*/

	
});






Route::resource('punteo', 'PunteoController');

 


Route::resource('alumno', 'AlumnoController');


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
	$user->name = 'Javier';
	$user->email = 'mrlsjavi@gmail.com';
	$user->password = bcrypt('atleta');
	$user->save();

	return $user;
});

Route::get('ausencia/{asignacion}/assign', 'AusenciaController@create');
Route::post('ausencia/{asignacion}/save',  'AusenciaController@store');
//Route::resource('ausencia', 'AusenciaController');