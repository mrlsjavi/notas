@extends('layout')

@section('contenido')

<h1>Alumnos</h1>

<table class="table">
	<thead>
		<tr>
			<th>id</th>
			<th>nombre</th>
			<th>codigo</th>
			<th>Accion</th>
			<th>Asignar Grado</th>
		</tr>

	</thead>
	<tbody>
		@foreach($alumnos as $alumno)
		<tr>
			<td>{{ $alumno->id}}</td>
			<td>{{ $alumno->nombre}}</td>
			<td>{{ $alumno->codigo}}</td>
			<td><a href="{{ action('AlumnoController@edit', $alumno['id']) }}" class="btn btn-info btn-xs">Edit</a></td>
			<td><a href="{{ action('AsignacionController@create', $alumno['id']) }}" class="btn btn-info btn-xs">Asignar</a></td>
		</tr>
			@endforeach

	</tbody>

	{{ $alumnos->links() }}

</table>



@stop