@extends('layout')

@section('contenido')
	<h3>Grado Nuevo</h3>


<form method="POST" action="{{ route('grado.store') }}">
	{!! csrf_field() !!}

	<p>
	<label for="nombre">Nombre

	<input class="form-control" type="text" name="nombre">
	</label>
	</p>

	<input class="btn btn-primary" type="submit" name="" value="Enviar">

</form>


	
	
@stop