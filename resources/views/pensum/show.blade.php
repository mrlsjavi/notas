@extends('layout')

@section('contenido')

<h1>Ciclos</h1>

<br/>
<table class="table">
	<thead>
		<tr>
			<th>id</th>
			<th>grado</th>
            <th>curso</th>
			<th>Accion</th>
		</tr>

	</thead>
	<tbody>
		
		<tr>
			<td>{{ $pensums->grado_id}}</td>
            <td>{{ $pensums->grado->nombre}}</td>
            <td>{{ $pensums->grado->nombre}}</td>
		</tr>
			

	</tbody>



</table>



@stop