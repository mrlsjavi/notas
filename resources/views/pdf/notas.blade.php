
<!DOCTYPE html>





<style type="text/css">
	h3, h4, h5 {display: inline;}
	table{
		border-collapse: collapse;
	}

</style>

<div style="height: 19cm; width: 25cm; text-align: center; border-style: solid; border-width: solid; border-bottom: solid; border-left: solid; border-right: solid; border-top: solid; overflow: hidden;">
	<div>
		
			<h1>Centro Escolar Alegre Infancia</h1>
			<h2>Javier Morales</h2>
			<h3>Grado:</h3>&nbsp;<label>Kinder</label>&nbsp;&nbsp;<h3>Ciclo Escolar:</h3>&nbsp;<<label>2018</label>&nbsp;&nbsp;<h3>Codigo:</h3>&nbsp;<label>878-l</label>
		
	</div>


<br/>
<br/>
<table border="1" align="center">
	<thead>
		<tr>
			<th align="center">Area</th>
			<th>I Bimestre</th>
			<th>II Bimestre</th>
			<th>III Bimestre</th>
			<th>IV Bimestre</th>
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
		<tr>
			<td align="center"><font color="blue">clase4</font></td>
			<td>10</td>
			<td>10</td>
			<td>10</td>
			<td>10</td>
			<td></td>
			
		</tr>
		<tr>
			<td align="center"><font color="blue">clase5</font></td>
			<td>10</td>
			<td>10</td>
			<td>10</td>
			<td>10</td>
			<td></td>
			
		</tr>
		<tr>
			<td align="center"><font color="blue">clase6</font></td>
			<td>10</td>
			<td>10</td>
			<td>10</td>
			<td>10</td>
			<td></td>
			
		</tr>
		<tr>
			<td align="center"><font color="blue">clase7</font></td>
			<td>10</td>
			<td>10</td>
			<td>10</td>
			<td>10</td>
			<td></td>
			
		</tr>
		<tr>
			<td align="center"><font color="blue">Expresion Artistica/ Talleres Didacticos</font></td>
			<td>10</td>
			<td>10</td>
			<td>10</td>
			<td>10</td>
			<td></td>
			
		</tr>
		<tr>
			<td align="center"><font color="blue">Medio Social y Natural</font></td>
			<td>10</td>
			<td>10</td>
			<td>10</td>
			<td>10</td>
			<td></td>
			
		</tr>
		<tr>
			<td align="center"><font color="blue">promedio Bimestral</font></td>
			<td>10</td>
			<td>10</td>
			<td>10</td>
			<td>10</td>
			<td></td>
			
		</tr>
		

	</tbody>


</table>

<br/>
<br/>
<div style="position: absolute; bottom: 5cm; left: 6cm; border-style: solid; border-top: solid; border-right: solid; border-left: solid; border-bottom: solid; width: 5cm; height: 1cm;" align="center">
	<label style="font-weight: bold;">Ausencias:</label>&nbsp;<label>15</label>
</div>

<br/>
<br/>
<hr style="width: 5cm; position: absolute; bottom: 1.5cm; left: 5cm;" />
<hr style="width: 5cm; position: absolute; bottom: 1.5cm; left: 15cm;" />
<label style="position: absolute; bottom: 1cm;left:7cm;">Maestra</label>
<label style="position: absolute; bottom: 1cm;left:17cm;">Directora</label>


<img src="logo.jpeg" style="position: absolute; top: 0; left: 0; width:20%; height:20%;">


</div>

