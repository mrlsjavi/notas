@extends('layout')

@section('contenido')



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script type="text/javascript">

	$(document).ready(function(){
		

		$("#test").click(function(){
			alert("presiono boton");
		});

		$("#slt_grado").change(function(){
			if($("#slt_grado").val() != 0){
				alert("no es 0");
			}
		});
		
	});
	

</script>


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
	<label for="grado">Grado


		<select name="grado" id="slt_grado">
			<option value="0">Seleccione</option>
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
<input type="button" name="" id="test" value="test">
<div>
	<ul>
		@foreach($cursos as $curso)
			<li>{{ $curso->nombre }}</li>

		@endforeach
	</ul>

</div>


@stop