@extends('layout')

@section('contenido')
	<h3>Nuevo Tipo de Pago</h3>


<form method="POST" action="{{ route('tipo.store') }}">
	{!! csrf_field() !!}

	<p>
	<label for="nombre">Tipo 

	<input class="form-control" type="text" name="nombre">
	</label>
	</p>

	<input class="btn btn-primary" type="submit" name="" value="Guardar">

</form>


	
	
@stop