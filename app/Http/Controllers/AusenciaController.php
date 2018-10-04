<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asignacion;
use App\Ausencia;

class AusenciaController extends Controller
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
    public function create($id)
    {
        //
        //dd($id);
        $asignacion = Asignacion::find($id);

        return view('ausencia.crear', compact('id', 'asignacion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $asignacion)
    {
        
        $as = Ausencia::where('asignacion_id', $asignacion)->get();
        $j = $as->get('0');
        $ausencia = Ausencia::find($j->id);
        //dd($ausencia);


          $ausencia->ausencias = $request->get('ausencias');
          //$as->asignacion_id = $asignacion;
          
          $ausencia->save();

          return redirect('punteo');


          /*
                $punteo_actualizado = Punteo::find($punteo_id);



           $punteo_actualizado->curso_id = $id_curso;
            $punteo_actualizado->asignacion_id = $asignacion_id;
            $punteo_actualizado->nota1 = $request->get($i.'-nota1');
            $punteo_actualizado->nota2 = $request->get($i.'-nota2');
            $punteo_actualizado->nota3 = $request->get($i.'-nota3');
            $punteo_actualizado->nota4 = $request->get($i.'-nota4');

            $punteo_actualizado->save();

          */

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
