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
		@foreach($tipos as $tipo)
		<tr>
			<td>{{ $tipo->id}}</td>
			<td>{{ $tipo->nombre}}</td>
			<td><a href="{{ action('TipoController@edit', $tipo['id']) }}" class="btn btn-info btn-xs">Edit</a></td>
		</tr>
			@endforeach

	</tbody>

	{{ $tipos->links() }}

</table>



@stop