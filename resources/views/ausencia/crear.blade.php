@extends('layout')

@section('contenido')
	<h3>Insertar Ausencias</h3>


<form method="POST" action="{{ action('AusenciaController@store', $id)}}">
	{!! csrf_field() !!}

	<p>
	<label for="ausencias">Ausencias de  {{$asignacion->alumno->nombre}}

	<input class="form-control" type="text" name="ausencias">
	</label>
	</p>

	

	<input class="btn btn-primary" type="submit" name="" value="Enviar">

</form>


	
	
@stop