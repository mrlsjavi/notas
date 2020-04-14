<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pago;
use App\Asignacion;
use App\Tipo;
use App\Metodo;

class PagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagos = Pago::paginate(15);
        return view('pago.index', compact('pagos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // Pago::create($request->all());

        $pago = new Pago;
        $pago->asignacion_id = $request['asignacion'];
        $pago->tipo_id = $request['tipo'];
        $pago->metodo_id = $request['metodo'];
        $pago->aporte = $request['aporte'];
        $pago->fecha = $request['fecha'];
        $pago->save();
        
        return redirect('pago');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $asignaciones = Asignacion::where('alumno_id',$id)->get();
        $tipos = Tipo::all();
        $metodos = Metodo::all();
        return view('pago.crear', compact('asignaciones', 'tipos', 'metodos'));
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
