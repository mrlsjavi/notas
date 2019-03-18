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
	/*$Asuencias = new \App\Ausencia;
	$Asuencias->asignacion_id =6;
	$Asuencias->ausencias = 3;

$Asuencias->save();*/
	/*$asig = new \App\Asignacion;
	$asig->ciclo_id = 2;
	$asig->grado_id = 2;
	$asig->alumno_id = 1;
	$asig->save();*/
	
	$pensum = new \App\Pensum;
	$pensum->grado_id =5;
	$pensum->curso_id = 10;
	$pensum->save();

	$pensum = new \App\Pensum;
	$pensum->grado_id =5;
	$pensum->curso_id = 11;
	$pensum->save();

	$pensum = new \App\Pensum;
	$pensum->grado_id =5;
	$pensum->curso_id = 12;
	$pensum->save();

	$pensum = new \App\Pensum;
	$pensum->grado_id =5;
	$pensum->curso_id = 13;
	$pensum->save();

	$pensum = new \App\Pensum;
	$pensum->grado_id =5;
	$pensum->curso_id = 14;
	$pensum->save();

	$pensum = new \App\Pensum;
	$pensum->grado_id =5;
	$pensum->curso_id = 15;
	$pensum->save();

	$pensum = new \App\Pensum;
	$pensum->grado_id =5;
	$pensum->curso_id = 5;
	$pensum->save();

	$pensum = new \App\Pensum;
	$pensum->grado_id =5;
	$pensum->curso_id = 16;
	$pensum->save();

	$pensum = new \App\Pensum;
	$pensum->grado_id =5;
	$pensum->curso_id = 6;
	$pensum->save();

	$pensum = new \App\Pensum;
	$pensum->grado_id =5;
	$pensum->curso_id = 17;
	$pensum->save();

	$pensum = new \App\Pensum;
	$pensum->grado_id =5;
	$pensum->curso_id = 18;
	$pensum->save();
	/*$grado = new \App\Grado;
	$grado->nombre = 'Primero';
	$grado->save();


	
	$ciclo = new \App\Ciclo;
	$ciclo->nombre = '2019';
	

	$ciclo->save();
	$curso = new \App\Curso;
	$curso->nombre = 'Comunicación y Lenguaje';
	$curso->orden = 10;

	$curso->save();
	$curso = new \App\Curso;
	$curso->nombre = 'Matemática';
	$curso->orden = 11;

	$curso->save();
	$curso = new \App\Curso;
	$curso->nombre = 'Medio Social';
	$curso->orden = 12;;

	$curso->save();

	$curso = new \App\Curso;
	$curso->nombre = 'Medio Natural';
	$curso->orden = 13;

	$curso->save();

	$curso = new \App\Curso;
	$curso->nombre = 'Expresión Artística';
	$curso->orden = 14;

	$curso->save();

	$curso = new \App\Curso;
	$curso->nombre = 'Formación Cuidadana';
	$curso->orden = 15;

	$curso->save();
	$curso = new \App\Curso;
	$curso->nombre = 'Pocoman';
	$curso->orden = 16;

	$curso->save();

	$curso = new \App\Curso;
	$curso->nombre = 'Tics / Computación';
	$curso->orden = 17;

	$curso->save();

	$curso = new \App\Curso;
	$curso->nombre = 'Caligrafía / Ortografia';
	$curso->orden = 18;

	$curso->save();

	$formativa = new \App\formativas;
	$formativa->nombre = 'Higiene Personal';
	$formativa->orden =1;
	$formativa->save();
	$formativa = new \App\formativas;
	$formativa->nombre = 'Uniforme (diario y fisica)';
	$formativa->orden =2;
	$formativa->save();

	$formativa = new \App\formativas;
	$formativa->nombre = 'Puntualidad al ingreso de clases';
	$formativa->orden =3;
	$formativa->save();

	$formativa = new \App\formativas;
	$formativa->nombre = 'Vocabulario apropidado';
	$formativa->orden =4;
	$formativa->save();

	$formativa = new \App\formativas;
	$formativa->nombre = 'Cumple con las normas del aula';
	$formativa->orden =5;
	$formativa->save();

	$formativa = new \App\formativas;
	$formativa->nombre = 'Demuestra valores';
	$formativa->orden =6;
	$formativa->save();

	$formativa = new \App\formativas;
	$formativa->nombre = 'Biblioteca';
	$formativa->orden =7;
	$formativa->save();

	$formativa = new \App\formativas;
	$formativa->nombre = 'Lectura';
	$formativa->orden =8;
	$formativa->save();*/

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