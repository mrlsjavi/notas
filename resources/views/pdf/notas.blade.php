


	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>	


	<style type="text/css">
	h3, h4, h5 {display: inline;}
	table{
		border-collapse: collapse;
	}

</style>

<div style="height: 19cm; width: 25cm; text-align: center; border-style: solid; border-width: solid; border-bottom: solid; border-left: solid; border-right: solid; border-top: solid; overflow: hidden;">
	<div>
		
			<h1>Centro Escolar Alegre Infancia</h1>
			<h2 style="font-family: DejaVu Sans;">{{$as->alumno->nombre}}</h2>
			<h3>Grado:</h3>&nbsp;<label>{{$as->grado->nombre}}</label>&nbsp;&nbsp;<h3>Ciclo Escolar:</h3>&nbsp;<label>{{$as->ciclo->nombre}}</label>&nbsp;&nbsp;<h3>Codigo:</h3>&nbsp;<label>{{$as->alumno->codigo}}</label>
		
	</div>


<br/>
<br/>
<table border="1" align="center">
	<thead>
		<tr>
			<th align="center">Area</th>
			<th align="center"> I Bimestre </th>
			<th align="center"> II Bimestre </th>
			<th align="center"> III Bimestre </th>
			<th align="center"> IV Bimestre </th>
			<th align="center"> Nota Final </th>
		</tr>
		
	</thead>
	<tbody>

		@foreach($cursos as $curso)
		<tr>
			<td align="center"><font color="black">{{ $curso->curso->nombre}}</font></td>
			<td align="center">@if ($curso->nota1 == 0) - @else {{$curso->nota1}} @endif</td>
			<td align="center">@if ($curso->nota2 == 0) - @else {{$curso->nota2}} @endif</td>
			<td align="center">@if ($curso->nota3 == 0) - @else {{$curso->nota3}} @endif</td>
			<td align="center">@if ($curso->nota4 == 0) - @else {{$curso->nota4}} @endif</td>
			<td align="center"> - </td>
		</tr>

		@endforeach
		
		<tr>
			<td align="center"><font color="black"><b>Promedio Bimestral</b></font></td>
			<td align="center">@if ($nota1 == 0) - @else {{$nota1}} @endif</td>
			<td align="center">@if ($nota2 == 0) - @else {{$nota2}} @endif</td>
			<td align="center">@if ($nota3 == 0) - @else {{$nota3}} @endif</td>
			<td align="center">@if ($nota4 == 0) - @else {{$nota4}} @endif</td>
			<td align="center"> - </td>
			
		</tr>


		
		
		

	</tbody>


</table>

<br/>
<br/>
<div style="position: absolute; bottom: 5cm; left: 6cm; border-style: solid; border-top: solid; border-right: solid; border-left: solid; border-bottom: solid; width: 5cm; height: 1cm;" align="center">
	<label style="font-weight: bold;">Ausencias:</label>&nbsp;<label>{{$a->ausencias}}</label>
</div>

<br/>
<br/>
<hr style="width: 5cm; position: absolute; bottom: 1.5cm; left: 5cm;" />
<hr style="width: 5cm; position: absolute; bottom: 1.5cm; left: 15cm;" />
<label style="position: absolute; bottom: 1cm;left:7cm;">Maestra</label>
<label style="position: absolute; bottom: 1cm;left:17cm;">Directora</label>


<img src="logo.jpeg" style="position: absolute; top: 0; left: 0; width:15%; height:15%;">


</div>








