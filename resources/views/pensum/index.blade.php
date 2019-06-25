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
		@foreach($pensums as $pensum)
		<tr>
			<td>{{ $pensum}}</td>
			<td>{{ $pensum->grado->nombre}}</td>
            <td>{{ $pensum->curso->nombre}}</td>
            <td><a href="{{ action('PensumController@show', $pensum['id']) }}" class="btn btn-info btn-xs">Edit</a></td>
			
		</tr>
			@endforeach

	</tbody>

	{{ $pensums->links() }}

</table>



@stop