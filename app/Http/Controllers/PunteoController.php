<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Punteo;
use App\Asignacion;
use App\Curso;

class PunteoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

       /* $punteo = Punteo::find(1);
        $asignacion = Asignacion::find(1);

       return $asignacion->alumno->nombre;*/
       
        $punteos = Punteo::select('asignacion_id')->groupBy('asignacion_id')->paginate(15);
      // $punteos = Punteo::groupBy('asignacion_id')->paginate(15);
        //dd($asignaciones);
        return view('punteo.index', compact('punteos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $cursos = Punteo::where('asignacion_id', $id)->get();
        //dd($cursos);
        return view('punteo.edit', compact('cursos', 'id'));
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

        $clases = (count($request->all())-2)/5;
        $curso = 0;
       for($i =0; $i<$clases; $i++){
        $curso = Curso::select('id')->where('nombre', $request->get('clase_'.$i))->get();

          $c = $curso->get('0');
          $id_curso = $c->id;
          $asignacion_id = $id;

          $punteo = Punteo::select('id')->where('curso_id', $id_curso)->where('asignacion_id', $asignacion_id)->get();


          $p = $punteo->get('0');
          $punteo_id = $p->id;

          $punteo_actualizado = Punteo::find($punteo_id);



           $punteo_actualizado->curso_id = $id_curso;
            $punteo_actualizado->asignacion_id = $asignacion_id;
            $punteo_actualizado->nota1 = $request->get($i.'-nota1');
            $punteo_actualizado->nota2 = $request->get($i.'-nota2');
            $punteo_actualizado->nota3 = $request->get($i.'-nota3');
            $punteo_actualizado->nota4 = $request->get($i.'-nota4');

            $punteo_actualizado->save();

       
     
          



       }

       
        //return  $punteo;

        //aqui ya puedo hacer el update 
        //dd($request->all());

          return redirect('punteo');
       

        
       
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
}
