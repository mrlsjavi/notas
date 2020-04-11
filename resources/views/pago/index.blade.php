@extends('layout')

@section('contenido')

<h4>Listado de Pagos</h4>

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
			<th>Action</th>
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
			
			
			<td><a href="{{ action('PagoController@edit', $pago['id']) }}" class="btn btn-info btn-xs">Edit</a></td>
		</tr>
			@endforeach

	</tbody>

	{{ $pagos->links() }}

</table>



@stop