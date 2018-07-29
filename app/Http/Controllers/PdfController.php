<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;

use Illuminate\Http\Request;
use App\Punteo;
use App\Asignacion;
use App\Curso;

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

    	$pdf = PDF::loadView('pdf.notas', compact('cursos', 'id', 'nota1', 'nota2', 'nota3', 'nota4', 'as'))->setPaper('Letter', 'landscape');
    	return $pdf->download('notas.pdf');
    }
}
