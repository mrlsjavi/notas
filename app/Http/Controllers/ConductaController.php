<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conducta;
use App\Formativa;
class ConductaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $cursos = Conducta::where('asignacion_id', $id)->get();
        //dd($cursos);
        return view('conducta.edit', compact('cursos', 'id'));
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
        //dd($request->all());
        $conductas = (count($request->all())-2)/2;
        //dd($clases);

        $curso = 0;
        for($i =0; $i<$conductas; $i++){
         $curso = Formativa::select('id')->where('nombre', $request->get('clase_'.$i))->get();
 
           $c = $curso->get('0');
           $id_curso = $c->id;
           $asignacion_id = $id;
 
           $punteo = Conducta::select('id')->where('formativa_id', $id_curso)->where('asignacion_id', $asignacion_id)->get();
 
 
           $p = $punteo->get('0');
           $punteo_id = $p->id;
 
           $punteo_actualizado = Conducta::find($punteo_id);
 
 
 
            $punteo_actualizado->formativa_id = $id_curso;
             $punteo_actualizado->asignacion_id = $asignacion_id;
             $punteo_actualizado->calificacion = $request->get($i.'-nota1');

             $punteo_actualizado->save();
 
        }

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
