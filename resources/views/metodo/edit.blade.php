@extends('layout')

@section('contenido')
	<h3>Editar Ciclo</h3>
	

	<form method="post" action="{{action('MetodoController@update', $id)}}">
	{!! csrf_field() !!}
	<input type="hidden" name="_method" value="PATCH">
	<p>
	<label for="nombre">Metodo de Pago

	<input class="form-control" type="text" name="nombre" value="{{ $metodo->nombre}}">
	</label>
	</p>


	<input class="btn btn-primary" type="submit" name="" value="Actualizar">

</form>

@stop