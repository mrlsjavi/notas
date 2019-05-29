@extends('layout')

@section('contenido')
	<h3>editars</h3>
	

	<form method="post" action="{{action('ConductaController@update', $id)}}">
	{!! csrf_field() !!}
	<input type="hidden" name="_method" value="PATCH">
	
	@php
		$cont =0;
	@endphp
	@foreach($cursos as $curso)
	@if ($cont ==0)
		<p>

	<label for="clase {{$cont}}">Area Formativa

	<input class="form-control" type="text" name="clase {{$cont}}" value="{{$curso->formativa->nombre}}" readonly="readonly">
	</label>

	<label for="{{$cont}}-nota1">Calificacion

	<input class="form-control" type="text" name="{{$cont}}-nota1" size="7" value="{{$curso->calificacion}}">
	</label>
	</p>
	@else
	<p>

	<label for="clase {{$cont}}">

	<input class="form-control" type="text" name="clase {{$cont}}" value="{{$curso->formativa->nombre}}" readonly="readonly">
	</label>

	<label for="{{$cont}}-nota1">

	<input class="form-control" type="text" name="{{$cont}}-nota1" size="7" value="{{$curso->calificacion}}">
	</label>
	</p>

	@endif
	
	@php
		$cont++;
	@endphp
	@endforeach


	<input class="btn btn-primary" type="submit" name="" value="Enviar">

</form>


	



@stop