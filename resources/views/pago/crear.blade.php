@extends('layout')

@section('contenido')
	<h3>Registrar Pago</h3>


<form method="POST" action="{{ route('pago.store') }}">
	{!! csrf_field() !!}


	<p>
		<label for="asignacion">Grado (asignado)
			<select name="asignacion">
				@foreach($asignaciones as $asignacion)
				 <option value="{{ $asignacion->id }}"><?php echo $asignacion->grado->nombre."-".$asignacion->ciclo->nombre ?></option>
				 @endforeach
			</select>
		</label>
		</p>

	<p>

	<p>
		<label for="tipo">Tipo
			<select name="tipo">
				@foreach($tipos as $tipo)
				 <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
				 @endforeach
			</select>
		</label>
	</p>

	<p>
		<label for="metodo">Metodo
			<select name="metodo">
				@foreach($metodos as $metodo)
				 <option value="{{ $metodo->id }}">{{ $metodo->nombre }}</option>
				 @endforeach
			</select>
		</label>
	</p>



	<label for="aporte">Aporte

	<input class="form-control" type="text" name="aporte">
	</label>
	</p>

	<p>
	<label for="fecha">Fecha

	<input class="form-control" type="date" name="fecha" value="{{date('Y-m-d')}}">
	</label>
	</p>

	<input class="btn btn-primary" type="submit" name="" value="Enviar">

</form>


	
	
@stop