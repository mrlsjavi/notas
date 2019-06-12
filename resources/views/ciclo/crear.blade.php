@extends('layout')

@section('contenido')
	<h3>Nuevo Ciclo</h3>


<form method="POST" action="{{ route('ciclo.store') }}">
	{!! csrf_field() !!}

	<p>
	<label for="nombre">Ciclo

	<input class="form-control" type="text" name="nombre">
	</label>
	</p>

	<input class="btn btn-primary" type="submit" name="" value="Guardar">

</form>


	
	
@stop