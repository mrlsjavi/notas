@extends('layout')

@section('contenido')
	<h3>Editar Curso</h3>
	

	<form method="post" action="{{action('CursoController@update', $id)}}">
	{!! csrf_field() !!}
	<input type="hidden" name="_method" value="PATCH">
	<p>
	<label for="nombre">Nombre

	<input class="form-control" type="text" name="nombre" value="{{ $curso->nombre}}">
	</label>
	</p>

	<p>
	<label for="orden">Orden


		<input class="form-control"type="text" name="orden" value=" {{$curso->orden}}">
	</label>
	</p>

	<input class="btn btn-primary" type="submit" name="" value="Enviar">

</form>


	



@stop