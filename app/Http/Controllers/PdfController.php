<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;

use Illuminate\Http\Request;
use App\Punteo;
use App\Asignacion;
use App\Curso;
use App\Ausencia;
use App\Reporte;

class PdfController extends Controller
{
    //

    public function impresion($id){
    	//$id = 1;
    	$cursos = Punteo::where('asignacion_id', $id)->get();
    	$nota1 = round(Punteo::where('asignacion_id', $id)->avg('nota1'), 0);
    	$nota2 = round(Punteo::where('asignacion_id', $id)->avg('nota2'), 0);
    	$nota3 = round(Punteo::where('asignacion_id', $id)->avg('nota3'), 0);
    	$nota4 = round(Punteo::where('asignacion_id', $id)->avg('nota4'), 0);
    	

    	$as = Asignacion::find($id);
    	//dd($as->alumno->nombre);

        $ausencia = Ausencia::where('asignacion_id', $id)->get();
        $au = $ausencia->all();
		$a = $au['0'];
		//reporte solo si es primaria porque los antiguos no tienen reporte
		if($as->grado->nombre == 'Primero'){
			$reporte = Reporte::where('asignacion_id', $id)->get();
        	$re = $reporte->all();
			$r = $re['0'];

			$conductas = Conductas::where('asignacion_id', $id)->get();
			$pdf =PDF::loadView('pdf.primaria', compact('cursos', 'id', 'nota1', 'nota2', 'nota3', 'nota4', 'as', 'a', 'r', 'conductas'))->setPaper('Letter', 'landscape');
    		return $pdf->download('notas.pdf');
		}
		else {
			$pdf =PDF::loadView('pdf.notas', compact('cursos', 'id', 'nota1', 'nota2', 'nota3', 'nota4', 'as', 'a'))->setPaper('Letter', 'landscape');
    		return $pdf->download('notas.pdf');
		}
        //$a = $au->all();
        //dd($a->ausencias);
        //dd($au['Ausencia']);
    	
    }
}
