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
				//alert("no es 0");
				traer_grados();
			}
		});

		function traer_grados(){
			var data = { id:$("#slt_grado").val() };
			var data_jason = JSON.stringify(data);
			enviar = {info: data_jason};
			alert("ada");
			$.ajax({
				type:"POST",
				data: enviar,
				url:'asignacion.getcursos',
				success: function(res){
					alert(res);
				}

			});
		}

		
		
	});
	

</script>


<h4>asignacion de grado a Alumno</h4>
<div>
<div style="float:left;">
	<form method="POST" action="{{action('AsignacionController@guardar')}}">
		{!! csrf_field() !!}
		<p>
		<label for="ciclo">Ciclo
			<select name="ciclo">
				@foreach($ciclos as $ciclo)
				 <option value="{{ $ciclo->id }}">{{$ciclo->nombre}}</option>
				 @endforeach
			</select>
		</label>
		</p>

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
		<p>
			<label for="alumno">
				<input type="text" name="" value="{{$alumno->nombre }}" readonly="readonly">
				<input type="hidden" name="alumno" value="{{ $alumno->id }}">

			</label>
		</p>

		<input class="btn btn-primary" type="submit" name="" value="Enviar">

	</form>
</div>
<br/>
<br/>

<div style="float:right;">
	<ul>
		@foreach($cursos as $curso)
			<li>{{ $curso->nombre }}</li>

		@endforeach
	</ul>

</div>
</div>
<div style="clear:both;">
	<input type="button" name="" id="test" value="test">
	<br>
	<br>
</div>

@stop