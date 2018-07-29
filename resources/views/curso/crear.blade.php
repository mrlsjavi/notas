@extends('layout')

@section('contenido')
	<h3>Crear Curso</h3>


<form method="POST" action="{{ route('curso.store') }}">
	{!! csrf_field() !!}

	<p>
	<label for="nombre">Nombre

	<input class="form-control" type="text" name="nombre">
	</label>
	</p>

	<p>
	<label for="orden">Orden


		<input class="form-control"type="number" name="orden">
	</label>
	</p>

	<input class="btn btn-primary" type="submit" name="" value="Enviar">

</form>


	
	
@stop