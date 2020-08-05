@extends('layout')

@section('contenido')

<h1>Alumnos</h1>

<br/>
<table class="table">
	<thead>
		<tr>
			<th>id</th>
			<th>nombre</th>
			<th>usuario</th>

		</tr>

	</thead>
	<tbody>
		@foreach($usuarios as $usuario)
		<tr>
			<td>{{ $usuario->id}}</td>
			<td>{{ $usuario->name}}</td>
			<td>{{ $usuario->email}}</td>

		</tr>
			@endforeach

	</tbody>

	{{ $usuarios->links() }}

</table>



@stop