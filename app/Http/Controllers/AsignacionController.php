<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asignacion;
use App\Ciclo;
use App\Grado;
use App\Curso;
use App\alumno;

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
        //dd($id);

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    public function getcursos($request){

    	return response()->json();
    }

    public function guardar(Request $request){
        
        
        //dd($request->ciclo);

      //dd($request->all());
     /*  $request->validate([
        'alumno' => 'required',
        'ciclo' => 'required|min:1',
        'grado' => 'required'
       ]);*/
      /*Asignacion::create(
        $request->all()
      );*/
      $as = new Asignacion;
      $as->ciclo_id = $request->get('ciclo');
      $as->grado_id = $request->get('grado');
      $as->alumno_id = $request->get('alumno');
      $as->save();

      dd($as->id);
      //tambien necesito ingresar los punteos
      //buscar todos los cursos asociados a ese grado y guardarlos con punteo de 0
      //select * from pensums where grado = al grado que traigo 
      

      // dd($i);
        return redirect('alumno');
    }

    


}
