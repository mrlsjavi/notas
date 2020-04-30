@extends('layout')

@section('contenido')

<h4>Listado de Pagos</h4>
</br>
</br>
<div style="float:right">

{!! Form::open(['route' => array('pago.show', 1), 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right']) !!}
	<div class="form-group">
	{!! Form::select('metodo', $metodos, null, ['class' => 'form-control']) !!}
	
	</div>
	<button type="submit" class="btn btn-primary">Buscar</button>
{!! Form::close() !!}
</div>
<br/>
<br/>
<table class="table">
	<thead>
		<tr>
			<th>id</th>
			<th>Asignacion</th>
			<th>Ciclo</th>
			<th>Grado</th>
			<th>Tipo</th>
			<th>Metodo</th>
			<th>Aporte</th>
			<th>Fecha</th>
		</tr>

	</thead>
	<tbody>
		@foreach($pagos as $pago)
		<tr>
			<td>{{ $pago->id}}</td>
			<td>{{ $pago->asignacion->alumno->nombre}}</td>
			<td>{{ $pago->asignacion->ciclo->nombre}}</td>
			<td>{{ $pago->asignacion->grado->nombre}}</td>
			<td>{{ $pago->tipo->nombre}}</td>
			<td>{{ $pago->metodo->nombre}}</td>
			<td>{{ $pago->aporte}}</td>
			<td>{{ $pago->fecha}}</td>
		</tr>
			@endforeach

	</tbody>

	{{ $pagos->links() }}

</table>



@stop