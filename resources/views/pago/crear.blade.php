@extends('layout')

@section('contenido')
	<h3>Registrar Pago</h3>


<form method="POST" action="{{ route('pago.store') }}">
	{!! csrf_field() !!}

	<p>
	<label for="asignacion_id">Asignacion

	<input class="form-control" type="text" name="asignacion">
	</label>
	</p>

	<p>
	<label for="tipo">Tipo


		<input class="form-control" type="number" name="tipo">
	</label>
	</p>

	<p>
	<label for="metodo">Metodo

	<input class="form-control" type="text" name="metodo">
	</label>
	</p>

	<p>
	<label for="aporte">Aporte

	<input class="form-control" type="text" name="aporte">
	</label>
	</p>

	<p>
	<label for="fecha">Fecha

	<input class="form-control" type="date" name="fecha">
	</label>
	</p>

	<input class="btn btn-primary" type="submit" name="" value="Enviar">

</form>


	
	
@stop