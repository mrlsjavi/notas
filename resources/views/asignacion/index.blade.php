@extends('layout')

@section('contenido')

<h4>Asignacion de Cursos</h4>

<table class="table">
	<thead>
		<tr>
			<th>id</th>
			<th>Alumno</th>
			<th>Grado</th>
			<th>Ciclo</th>
			<th>Action</th>
		</tr>

	</thead>
	<tbody>
		@foreach($Asignaciones as $asignacion)
		<tr>
			<td>{{ $asignacion->id}}</td>
			<td>{{ $asignacion->alumno->nombre}}</td>
			<td>{{ $asignacion->grado->nombre}}</td>
			<td>{{ $asignacion->ciclo->nombre}}</td>
			
			
			<td><a href="{{ action('AsignacionController@edit', $asignacion['id']) }}" class="btn btn-info btn-xs">Edit</a></td>
		</tr>
			@endforeach

	</tbody>

	{{ $Asignaciones->links() }}

</table>



@stop