@extends('layout')

@section('contenido')



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>


<script type="text/javascript">

	$(document).ready(function(){
		$("#slt_grado").change(function(){
			if($("#slt_grado").val() != 0){
				//alert("no es 0");
				traer_grados($("#slt_grado").val());
			}
		});

		function traer_grados(grado){
		
		//http://notas.com/asignacion/4
		var url  ="http://notas.com/asignacion/"+grado;
		//console.log(url);

               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
               jQuery.ajax({
				   
                  url: url,
				  type: 'GET',
				  contentType: 'application/json',
                  data: {
                     //name: jQuery('#name').val(),
                    
                  },
                  success: function(result){
                     
					 var html = "";
					 for (x=0;x<result.length;x++){
						 //console.log(result[x].nombre);
						 html +="<li>"+ result[x].nombre +"</li>";
					 }
					 $("#lstCursos").html(html);
					
				  },
				  error: function (xhr, ajaxOptions, thrownError){
					  /*console.log(xhr.status);
					  console.log(thrownError);
					  console.log(ajaxOptions);*/
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
	<ul id="lstCursos">
		
	</ul>

</div>
</div>
<div style="clear:both;">
	
	<br>
	<br>
</div>

@stop