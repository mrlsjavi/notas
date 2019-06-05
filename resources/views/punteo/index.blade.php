@extends('layout')

@section('contenido')

<h1>Punteos</h1>
<div style="float:right">
</div>
<div style="float:right">

{!! Form::open(['route' => 'punteo.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right']) !!}
	<div class="form-group">
	{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de alumno']) !!}
	{!! Form::select('type', $grados, null, ['class' => 'form-control']) !!}
	{!! Form::select('ciclo', $ciclos, null, ['class' => 'form-control']) !!}
	</div>
	<button type="submit" class="btn btn-primary">Buscar</button>
{!! Form::close() !!}
</div>
<br/>
<br/>
<table class="table">
	<thead>
		<tr>
			<th>asignacion_id</th>
			<th>Alumno</th>
			<th>Grado</th>
			<th>Ciclo</th>
			<th>Notas</th>
			<th>Conductas</th>
			<th>Ausencias</th>
			<th>Reportes</th>
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
			<td><a href="{{ action('ConductaController@edit', $punteo['asignacion_id']) }}" class="btn btn-info btn-xs">Ingresar Conducta</a></td>
			<td><a href="{{ action('AusenciaController@create', $punteo['asignacion_id']) }}" class="btn btn-info btn-xs">Ingresar Ausencias</a></td>
			<td><a href="{{ action('ReporteController@create', $punteo['asignacion_id']) }}" class="btn btn-info btn-xs">Ingresar Reporte</a></td>
			<td><a href="{{ action('PdfController@impresion', $punteo['asignacion_id']) }}" class="btn btn-info btn-xs">Imprimir Tarjeta</a></td>
		</tr>
			@endforeach

	</tbody>

	{{ $punteos->links() }}

</table>



@stop