@extends('layout')

@section('contenido')
	<h3>Login</h3>


<form method="POST" action="/login">
	{!! csrf_field() !!}
	<input type="email" name="email" placeholder="email">
	<input type="password" name="password" placeholder="password">


	<input class="btn btn-primary" type="submit" name="" value="Enviar">


</form>


<br>
<br>
	
	
@stop