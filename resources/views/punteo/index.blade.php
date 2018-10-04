@extends('layout')

@section('contenido')

<h1>Punteos</h1>

<table class="table">
	<thead>
		<tr>
			<th>asignacion_id</th>
			<th>Alumno</th>
			<th>Grado</th>
			<th>Ciclo</th>
			<th>Accion</th>
			<th>Imprimir</th>
		</tr>

	</thead>
	<tbody>
		@foreach($punteos as $punteo)
		<tr>
			<td>{{ $punteo->asignacion_id}}</td>
			<td>{{ $punteo->asignacion->alumno->nombre}}</td>
			<td>{{ $punteo->asignacion->grado->nombre}}</td>
			<td>{{ $punteo->asignacion->ciclo->nombre}}</td>
			<td><a href="{{ action('PunteoController@edit', $punteo['asignacion_id']) }}" class="btn btn-info btn-xs">Ingresar Notas</a></td>
			<td><a href="{{ action('AusenciaController@create', $punteo['asignacion_id']) }}" class="btn btn-info btn-xs">Ingresar Ausencias</a></td>
			<td><a href="{{ action('PdfController@impresion', $punteo['asignacion_id']) }}" class="btn btn-info btn-xs">Imprimir Tarjeta</a></td>
		</tr>
			@endforeach

	</tbody>

	{{ $punteos->links() }}

</table>



@stop