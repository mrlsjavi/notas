@extends('layout')

@section('contenido')

<h1>Ciclos</h1>

<br/>
<table class="table">
	<thead>
		<tr>
			<th>id</th>
			<th>nombre</th>
			<th>Accion</th>
		</tr>

	</thead>
	<tbody>
		@foreach($ciclos as $ciclo)
		<tr>
			<td>{{ $ciclo->id}}</td>
			<td>{{ $ciclo->nombre}}</td>
			<td><a href="{{ action('CicloController@edit', $ciclo['id']) }}" class="btn btn-info btn-xs">Edit</a></td>
		</tr>
			@endforeach

	</tbody>

	{{ $ciclos->links() }}

</table>



@stop