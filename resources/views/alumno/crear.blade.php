@extends('layout')

@section('contenido')
	<h3>Nuevo Alumno</h3>


<form method="POST" action="{{ route('alumno.store') }}">
	{!! csrf_field() !!}

	<p>
	<label for="nombre">Nombre

	<input class="form-control" type="text" name="nombre">
	</label>
	</p>

	<p>
	<label for="codigo">Codigo


		<input class="form-control"type="text" name="codigo">
	</label>
	</p>

	<input class="btn btn-primary" type="submit" name="" value="Enviar">

</form>


	
	
@stop