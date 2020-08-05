@extends('layout')

@section('contenido')
	<h3>Nuevo Metodo de Pago</h3>


<form method="POST" action="{{ route('metodo.store') }}">
	{!! csrf_field() !!}

	<p>
	<label for="nombre">Metodo

	<input class="form-control" type="text" name="nombre">
	</label>
	</p>

	<input class="btn btn-primary" type="submit" name="" value="Guardar">

</form>


	
	
@stop