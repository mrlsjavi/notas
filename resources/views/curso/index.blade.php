@extends('layout')

@section('contenido')

<h1>Cursos</h1>

<table class="table">
	<thead>
		<tr>
			<th>id</th>
			<th>nombre</th>
			<th>Orden</th>
		</tr>

	</thead>
	<tbody>
		@foreach($cursos as $curso)
		<tr>
			<td>{{ $curso->id}}</td>
			<td>{{ $curso->nombre}}</td>
			<td>{{ $curso->orden}}</td>
			<td><a href="{{ action('CursoController@edit', $curso['id']) }}" class="btn btn-info btn-xs">Edit</a></td>
		</tr>
			@endforeach

	</tbody>

	{{ $cursos->links() }}

</table>



@stop