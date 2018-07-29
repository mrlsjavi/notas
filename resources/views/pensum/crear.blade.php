@extends('layout')

@section('contenido')
	<h3>Creacion de Pensum</h3>

<br>
<br>

<form method="POST" action="{{ route('pensum.store') }}">
	{!! csrf_field() !!}

	<p>
		<label for="grado">Grado


			<select name="grado" id="slt_grado">
				<option value="0">Seleccione</option>
				@foreach($grados as $grado)
				 <option value="{{ $grado->id }}">{{$grado->nombre}}</option>
				 @endforeach
			</select>
		</label>
	</p>
<br>
<br>
	
@foreach($cursos as $curso)
<input class="" type="checkbox" name="curso[]" value="{{ $curso->id }}">{{$curso->nombre}}<br>
@endforeach

<br>
<br>
	<input class="btn btn-primary" type="submit" name="" value="Enviar">

</form>



	
@stop