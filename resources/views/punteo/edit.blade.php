@extends('layout')

@section('contenido')
	<h3>editars</h3>
	

	<form method="post" action="{{action('PunteoController@update', $id)}}">
	{!! csrf_field() !!}
	<input type="hidden" name="_method" value="PATCH">
	
	@php
		$cont =0;
	@endphp
	@foreach($cursos as $curso)
	@if ($cont ==0)
		<p>

	<label for="clase {{$cont}}">Materia

	<input class="form-control" type="text" name="clase {{$cont}}" value="{{$curso->curso->nombre}}" readonly="readonly">
	</label>

	<label for="{{$cont}}-nota1">Nota1

	<input class="form-control" type="text" name="{{$cont}}-nota1" size="5" value="{{$curso->nota1}}">
	</label>
	<label for="{{$cont}}-nota2">Nota2

	<input class="form-control" type="text" name="{{$cont}}-nota2" size="5" value="{{$curso->nota2}}">
	</label>
	<label for="{{$cont}}-nota3">Nota3

	<input class="form-control" type="text" name="{{$cont}}-nota3" size="5" value="{{$curso->nota3}}">
	</label>
	<label for="{{$cont}}-nota4">Nota4

	<input class="form-control" type="text" name="{{$cont}}-nota4" size="5" value="{{$curso->nota4}}">
	</label>
	</p>
	@else
	<p>

	<label for="clase {{$cont}}">

	<input class="form-control" type="text" name="clase {{$cont}}" value="{{$curso->curso->nombre}}" readonly="readonly">
	</label>

	<label for="{{$cont}}-nota1">

	<input class="form-control" type="text" name="{{$cont}}-nota1" size="5" value="{{$curso->nota1}}">
	</label>
	<label for="{{$cont}}-nota2">

	<input class="form-control" type="text" name="{{$cont}}-nota2" size="5" value="{{$curso->nota2}}">
	</label>
	<label for="{{$cont}}-nota3">

	<input class="form-control" type="text" name="{{$cont}}-nota3" size="5" value="{{$curso->nota3}}">
	</label>
	<label for="{{$cont}}-nota4">

	<input class="form-control" type="text" name="{{$cont}}-nota4" size="5" value="{{$curso->nota4}}">
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