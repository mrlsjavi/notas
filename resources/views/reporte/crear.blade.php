@extends('layout')

@section('contenido')
	<h3>Insertar Reportes Disciplinarios</h3>


<form method="POST" action="{{ action('ReporteController@store', $id)}}">
	{!! csrf_field() !!}

	<p>
	<label for="reportes">Reportes de  {{$asignacion->alumno->nombre}}

	<input class="form-control" type="text" name="reportes">
	</label>
	</p>

	

	<input class="btn btn-primary" type="submit" name="" value="Enviar">

</form>


	
	
@stop