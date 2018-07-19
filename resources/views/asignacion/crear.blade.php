@extends('layout')

@section('contenido')

<h4>asignacion de grado a Alumno</h4>

<form method="POST" action="{{ route('asignacion.store') }}">
	{!! csrf_field() !!}

	<p>
	<label for="ciclo">Ciclo
		<select name="ciclo">
			@foreach($ciclos as $ciclo)
			 <option>{{$ciclo->nombre}}</option>
			 @endforeach
		</select>
	</label>
	</p>

	<p>
	<label for="grado">Codigo


		<select name="grado">
			@foreach($grados as $grado)
			 <option>{{$grado->nombre}}</option>
			 @endforeach
		</select>
	</label>
	</p>
	<p>
		<label for="alumno">
			<input type="text" name="alumno">

		</label>
	</p>

	<input class="btn btn-primary" type="submit" name="" value="Enviar">

</form>

<br/>
<br/>

<div>
	<ul>
		@foreach($cursos as $curso)
			<li>{{ $curso->nombre }}</li>

		@endforeach
	</ul>

</div>


@stop