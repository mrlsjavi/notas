


	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>	


<style type="text/css">
h3, h4, h5 {display: inline;}
table{
    border-collapse: collapse;
}

</style>

<div style="height: 19cm; width: 25cm; text-align: center; border-style: solid; border-width: solid; border-bottom: solid; border-left: solid; border-right: solid; border-top: solid; overflow: hidden;">
<div>
    
        <h1><font size=5>Centro Escolar Alegre Infancia</h1>
        <h2 style="font-family: DejaVu Sans;"><font size=4>{{$as->alumno->nombre}}</h2>
        <h3><font size=3>Grado:</h3>&nbsp;<label><font size=3>{{$as->grado->nombre}}</label>&nbsp;&nbsp;<h3><font size=3>Ciclo Escolar:</h3>&nbsp;<label><font size=3>{{$as->ciclo->nombre}}</label>&nbsp;&nbsp;<h3><font size=3>Codigo:</h3>&nbsp;<label><font size=3>{{$as->alumno->codigo}}</label>
    
</div>


<br/>
<table border="1" align="center">
<thead>
    <tr>
        <th align="center"><font size=2>Area</th>
        <th align="center"><font size=2> I Bimestre </th>
        <th align="center"><font size=2> II Bimestre </th>
        <th align="center"><font size=2> III Bimestre </th>
        <th align="center"><font size=2> IV Bimestre </th>
        <th align="center"><font size=2> Nota Final </th>
    </tr>
    
</thead>
<tbody>

    @foreach($cursos as $curso)
    <tr>
        <td align="center" style="font-family: DejaVu Sans;"><font color="black" size=2>{{ $curso->curso->nombre}}</font></td>
        <td align="center"><font size=2>@if ($curso->nota1 == 0) - @else {{$curso->nota1}} @endif</td>
        <td align="center"><font size=2>@if ($curso->nota2 == 0) - @else {{$curso->nota2}} @endif</td>
        <td align="center"><font size=2>@if ($curso->nota3 == 0) - @else {{$curso->nota3}} @endif</td>
        <td align="center"><font size=2>@if ($curso->nota4 == 0) - @else {{$curso->nota4}} @endif</td>
        <td align="center"><font size=2> {{round((($curso->nota1 + $curso->nota2 + $curso->nota3 + $curso->nota4)/4), 0)}} </td>
    </tr>

    @endforeach
    
    <tr>
        <td align="center"><font color="black" size=2><b>Promedio Bimestral</b></font></td>
        <td align="center"><font size=2>@if ($nota1 == 0) - @else {{$nota1}} @endif</td>
        <td align="center"><font size=2>@if ($nota2 == 0) - @else {{$nota2}} @endif</td>
        <td align="center"><font size=2>@if ($nota3 == 0) - @else {{$nota3}} @endif</td>
        <td align="center"><font size=2>@if ($nota4 == 0) - @else {{$nota4}} @endif</td>
        <td align="center"> - </td>
        
    </tr>


    
    
    

</tbody>


</table>
<table  border="1" style="position: absolute; top: 14cm; left: 4cm;">
<thead>
    <tr>
        <th align="center"><font size=2>Area Formativa</th>
        <th align="center"><font size=2>Calificacion</th>
        
    </tr>
   
    
</thead>
<tbody>
@foreach($conductas as $conducta)
<tr>
        <td align="center" style="font-family: DejaVu Sans;"><font color="black" size=2>{{$conducta->formativa->nombre}}</font></td>
        <td align="center"><font size=2>{{$conducta->calificacion}}</td>
    </tr>
@endforeach
    
</tbody>
</table>

<br/>
<br/>
<br/>
<br/>
<div style="position: absolute; bottom: 4cm; left: 17cm; border-style: solid; border-top: solid; border-right: solid; border-left: solid; border-bottom: solid; width: 5cm; height: 1cm;" align="center">
<label style="font-weight: bold; vertical-align: middle;"><font size=1>Ausencias:</label>&nbsp;<label style="vertical-align: middle;"><font size=1>{{$a->ausencias}}</label>
<label style="font-weight: bold; vertical-align: middle;"><font size=1>Reportes Disciplinarios:</label>&nbsp;<label style="vertical-align: middle;"><font size=1>{{$r->reportes}}</label>
</div>

<br/>
<br/>
<hr style="width: 5cm; position: absolute; bottom: 1.5cm; left: 12cm;" />
<hr style="width: 5cm; position: absolute; bottom: 1.5cm; left: 19cm;" />
<label style="position: absolute; bottom: 1cm;left:14cm;">Maestra</label>
<label style="position: absolute; bottom: 1cm;left:21cm;">Directora</label>


<img src="logo.jpeg" style="position: absolute; top: 0; left: 0; width:15%; height:15%;">


</div>








