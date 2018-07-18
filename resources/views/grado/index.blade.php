@extends('layout')

@section('contenido')

<h1>Cursos</h1>

<table class="table">
	<thead>
		<tr>
			<th>id</th>
			<th>nombre</th>
		</tr>

	</thead>
	<tbody>
		@foreach($grados as $grado)
		<tr>
			<td>{{ $grado->id}}</td>
			<td>{{ $grado->nombre}}</td>
			<td><a href="{{ action('GradoController@edit', $grado['id']) }}" class="btn btn-info btn-xs">Edit</a></td>
		</tr>
			@endforeach

	</tbody>

	{{ $grados->links() }}

</table>



@stop