@extends('layout')

@section('contenido')
	<h3>Nuevo Usuario del Sistema</h3>


<form method="POST" action="{{ route('user.store') }}">
	{!! csrf_field() !!}

	<p>
	<label for="name">Nombre

	<input class="form-control" type="text" name="name">
	</label>
	</p>

	<p>
	<label for="email">email (Debe ser mail) - usuario para acceder al sistema


		<input class="form-control"type="text" name="email">
	</label>
	</p>

    <p>
	<label for="password">Clave

	<input class="form-control" type="password" name="password">
	</label>
	</p>

	<input class="btn btn-primary" type="submit" name="" value="Enviar">

</form>


	
	
@stop