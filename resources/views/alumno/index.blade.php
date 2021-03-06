@extends('layout')

@section('contenido')

<h1>Alumnos</h1>
<div>
{!! Form::open(['route' => 'alumno.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right']) !!}
	<div class="form-group">
	{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de alumno']) !!}
	</div>
	<button type="submit" class="btn btn-primary">Buscar</button>
{!! Form::close() !!}
</div>
<br/>
<table class="table">
	<thead>
		<tr>
			<th>id</th>
			<th>nombre</th>
			<th>codigo</th>
			<th>Accion</th>
			<th>Asignar Grado</th>
			<th>Realizar Pago</th>
			<th>Historial Pagos</th>
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
			<td><a href="{{ action('PagoController@edit', $alumno['id']) }}" class="btn btn-info btn-xs">Pago</a></td>
			<td><a href="{{ action('PagoController@show', $alumno['id']) }}" class="btn btn-info btn-xs">Ver Pagos</a></td>
		</tr>
			@endforeach

	</tbody>

	{{ $alumnos->links() }}

</table>



@stop