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
	$pensum = new \App\Pensum;
	$pensum->grado_id =5;
	$pensum->curso_id = 19;
	$pensum->save();

	$pensum = new \App\Pensum;
	$pensum->grado_id =5;
	$pensum->curso_id = 20;
	$pensum->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 19;
	$punteo->asignacion_id = 42;
	$punteo->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 19;
	$punteo->asignacion_id = 44;
	$punteo->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 19;
	$punteo->asignacion_id = 47;
	$punteo->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 19;
	$punteo->asignacion_id = 79;
	$punteo->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 19;
	$punteo->asignacion_id = 80;
	$punteo->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 19;
	$punteo->asignacion_id = 81;
	$punteo->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 19;
	$punteo->asignacion_id = 82;
	$punteo->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 19;
	$punteo->asignacion_id = 83;
	$punteo->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 19;
	$punteo->asignacion_id = 84;
	$punteo->save();
	
	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 19;
	$punteo->asignacion_id = 85;
	$punteo->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 19;
	$punteo->asignacion_id = 86;
	$punteo->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 19;
	$punteo->asignacion_id = 87;
	$punteo->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 19;
	$punteo->asignacion_id = 88;
	$punteo->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 19;
	$punteo->asignacion_id = 123;
	$punteo->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 19;
	$punteo->asignacion_id = 124;
	$punteo->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 19;
	$punteo->asignacion_id = 125;
	$punteo->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 19;
	$punteo->asignacion_id = 126;
	$punteo->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 19;
	$punteo->asignacion_id = 127;
	$punteo->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 19;
	$punteo->asignacion_id = 128;
	$punteo->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 19;
	$punteo->asignacion_id = 129;
	$punteo->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 19;
	$punteo->asignacion_id = 130;
	$punteo->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 19;
	$punteo->asignacion_id = 131;
	$punteo->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 19;
	$punteo->asignacion_id = 132;
	$punteo->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 19;
	$punteo->asignacion_id = 133;
	$punteo->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 19;
	$punteo->asignacion_id = 134;
	$punteo->save();
	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 19;
	$punteo->asignacion_id = 135;
	$punteo->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 19;
	$punteo->asignacion_id = 136;
	$punteo->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 20;
	$punteo->asignacion_id = 42;
	$punteo->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 20;
	$punteo->asignacion_id = 44;
	$punteo->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 20;
	$punteo->asignacion_id = 47;
	$punteo->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 20;
	$punteo->asignacion_id = 79;
	$punteo->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 20;
	$punteo->asignacion_id = 80;
	$punteo->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 20;
	$punteo->asignacion_id = 81;
	$punteo->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 20;
	$punteo->asignacion_id = 82;
	$punteo->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 20;
	$punteo->asignacion_id = 83;
	$punteo->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 20;
	$punteo->asignacion_id = 84;
	$punteo->save();
	
	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 20;
	$punteo->asignacion_id = 85;
	$punteo->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 20;
	$punteo->asignacion_id = 86;
	$punteo->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 20;
	$punteo->asignacion_id = 87;
	$punteo->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 20;
	$punteo->asignacion_id = 88;
	$punteo->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 20;
	$punteo->asignacion_id = 123;
	$punteo->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 20;
	$punteo->asignacion_id = 124;
	$punteo->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 20;
	$punteo->asignacion_id = 125;
	$punteo->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 20;
	$punteo->asignacion_id = 126;
	$punteo->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 20;
	$punteo->asignacion_id = 127;
	$punteo->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 20;
	$punteo->asignacion_id = 128;
	$punteo->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 20;
	$punteo->asignacion_id = 129;
	$punteo->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 20;
	$punteo->asignacion_id = 130;
	$punteo->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 20;
	$punteo->asignacion_id = 131;
	$punteo->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 20;
	$punteo->asignacion_id = 132;
	$punteo->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 20;
	$punteo->asignacion_id = 133;
	$punteo->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 20;
	$punteo->asignacion_id = 134;
	$punteo->save();
	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 20;
	$punteo->asignacion_id = 135;
	$punteo->save();

	$punteo = new \App\Punteo;
	$punteo->nota1 = 0;
	$punteo->nota2 = 0;
	$punteo->nota3 = 0;
	$punteo->nota4 = 0;
	$punteo->curso_id = 20;
	$punteo->asignacion_id = 136;
	$punteo->save();

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