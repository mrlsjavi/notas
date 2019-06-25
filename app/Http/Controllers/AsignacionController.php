<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asignacion;
use App\Ciclo;
use App\Grado;
use App\Curso;
use App\alumno;
use App\Pensum;
use App\Punteo;
use App\Ausencia;
use App\Reporte;
use App\conductas;
use Illuminate\Support\Facades\DB;

class AsignacionController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Asignaciones = Asignacion::paginate(15);
        return view('asignacion.index', compact('Asignaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $ciclos = ciclo::all();
        $grados = grado::all();
        $cursos = curso::all();
        $alumno = alumno::find($id);
        
        return view('asignacion.crear', compact('ciclos', 'grados', 'cursos', 'alumno', 'id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        //
        dd($id);

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $punteos = Punteo::select('asignacion_id')->groupBy('asignacion_id')->name($request->get('name'))->type($request->get('type'))->ciclo($request->get('ciclo'))->orderBy('asignacion_id', 'desc')->paginate(15);
       $cursos = Pensum::select('curso_id')->where('grado_id',$id)->get();
       $array = array();
       foreach($cursos as $c){
            array_push($array, $c['curso_id']);
           //return $c['curso_id'];
       }
       //return $array;
       $curso = curso::whereIn('id', $array)->get();
        return response()->json( $curso);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        return redirect('alumno');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getcursos(){

        //return response()->json();
        $cursos = curso::select('nombre')->get();
       // dd($cursos);
       //echo ("hola");
       return response()->json(array('success'=>true, 'curos'=>$cursos));
    }

    public function guardar(Request $request){
       
    $pensum = Pensum::where('grado_id', $request->get('grado'))->get();
      
      // dd($cursos); 
      DB::transaction(function() use($request){
        $as = new Asignacion;
          $as->ciclo_id = $request->get('ciclo');
          $as->grado_id = $request->get('grado');
          $as->alumno_id = $request->get('alumno');
          $as->save();

          

          collect(Pensum::where('grado_id', $request->get('grado'))->get())->map(function($p) use($as){
            //dd($as->id);
            //return $p->curso_id;
                 $punteo = new Punteo;
                 $punteo->curso_id = $p->curso_id;
                 $punteo->asignacion_id = $as->id;
                 $punteo->nota1 = 0;
                 $punteo->nota2 = 0;
                 $punteo->nota3 = 0;
                 $punteo->nota4 = 0;
                 $punteo->save();
          });

          //ausencias y reportes
          $aus = new Ausencia;
          $aus->asignacion_id = $as->id;
          $aus->ausencias = 0;
          $aus->save();

          $reporte = new Reporte;
          $reporte->asignacion_id = $as->id;
          $reporte->reportes = 0;
          $reporte->save();

          $con = new conductas;
          $con->formativa_id = 1;
          $con->asignacion_id = $as->id;
          $con->calificacion = "Excelente";
          $con->save();

          $con = new conductas;
          $con->formativa_id = 2;
          $con->asignacion_id = $as->id;
          $con->calificacion = "Excelente";
          $con->save();

          $con = new conductas;
          $con->formativa_id = 3;
          $con->asignacion_id = $as->id;
          $con->calificacion = "Excelente";
          $con->save();

          $con = new conductas;
          $con->formativa_id = 4;
          $con->asignacion_id = $as->id;
          $con->calificacion = "Excelente";
          $con->save();

          $con = new conductas;
          $con->formativa_id = 5;
          $con->asignacion_id = $as->id;
          $con->calificacion = "Excelente";
          $con->save();

          $con = new conductas;
          $con->formativa_id = 6;
          $con->asignacion_id = $as->id;
          $con->calificacion = "Excelente";
          $con->save();


      });
        return redirect('alumno');
    }

    


}
