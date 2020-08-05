@extends('layout')

@section('contenido')

<h1>Tipo de Pago</h1>

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
		@foreach($metodos as $metodo)
		<tr>
			<td>{{ $metodo->id}}</td>
			<td>{{ $metodo->nombre}}</td>
			<td><a href="{{ action('MetodoController@edit', $metodo['id']) }}" class="btn btn-info btn-xs">Edit</a></td>
		</tr>
			@endforeach

	</tbody>

	{{ $metodos->links() }}

</table>



@stop