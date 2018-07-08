@extends('layout')

@section('contenido')
	<h3>editars</h3>
	

	<form method="post" action="{{action('AlumnoController@update', $id)}}">
	{!! csrf_field() !!}
	<input type="hidden" name="_method" value="PATCH">
	<p>
	<label for="nombre">Nombre

	<input class="form-control" type="text" name="nombre" value="{{ $alumno->nombre}}">
	</label>
	</p>

	<p>
	<label for="codigo">Codigo


		<input class="form-control"type="text" name="codigo" value=" {{$alumno->codigo}}">
	</label>
	</p>

	<input class="btn btn-primary" type="submit" name="" value="Enviar">

</form>


	



@stop