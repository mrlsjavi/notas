@extends('layout')

@section('contenido')

<h3>Colegio Alegre Infancia</h3>

<table border="1">
	<thead>
		<tr>
			<th align="center">Materia</th>
			<th>1er. Bimestre</th>
			<th>2do. Bimestre</th>
			<th>3er. Bimestre</th>
			<th>4to. Bimestre</th>
			<th>Nota Final</th>
		</tr>
		
	</thead>
	<tbody>

		@foreach($cursos as $curso)
		<tr>
			<td align="center"><font color="blue">{{ $curso->curso->nombre}}</font></td>
			<td>{{ $curso->nota1}}</td>
			<td>{{ $curso->nota2}}</td>
			<td>{{ $curso->nota3}}</td>
			<td>{{ $curso->nota4}}</td>
			<td></td>
		</tr>

		@endforeach
		

	</tbody>


</table>

<br/>
<br/>

<img src="index.png">


@stop