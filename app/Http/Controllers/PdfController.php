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

    public function impresion(){
    	$id = 1;
    	  $cursos = Punteo::where('asignacion_id', $id)->get();
    	 
        //dd($cursos);
     // dd($cursos);


    	$pdf = PDF::loadView('pdf.notas', compact('cursos', 'id'))->setPaper('Letter', 'landscape');
    	return $pdf->download('notas.pdf');
    }
}
