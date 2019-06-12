@extends('layout')

@section('contenido')
	<h3>Editar Ciclo</h3>
	

	<form method="post" action="{{action('CicloController@update', $id)}}">
	{!! csrf_field() !!}
	<input type="hidden" name="_method" value="PATCH">
	<p>
	<label for="nombre">Ciclo

	<input class="form-control" type="text" name="nombre" value="{{ $ciclo->nombre}}">
	</label>
	</p>


	<input class="btn btn-primary" type="submit" name="" value="Actualizar">

</form>

@stop