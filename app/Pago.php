<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{

    protected $fillable = [
        'asignacion', 
        'tipo', 
        'metodo', 
        'aporte', 
        'fecha',
    ];

    public function asignacion(){

    	return $this->belongsTo(Asignacion::class);
    }

    public function tipo(){

    	return $this->belongsTo(Tipo::class);
    }

    public function metodo(){

    	return $this->belongsTo(Metodo::class);
    }

    public function scopeMetodo($query, $metodo){
        if(trim($metodo) != ""){
            //$type = "%".$type."%";
            //$alumnos = alumno::select('id')->where('nombre', 'like', $type)->get();       
            //$pagos = Asignacion::select('id')->where('ciclo_id', '=', $ciclo)->get();  
            //dd($metodo);
            $metodos = Metodo::select('id')->where('Id', $metodo)->get();
            //$pagos = Pago::whereIn('asignacion_id',$asignaciones)->where('metodo_id', '=', $metodo)->paginate(15);
            return $query->whereIn('metodo_id', $metodos);
        }
    }

    public function scopeTipo($query, $tipo){
        if(trim($tipo) != ""){
            $tipos = Ciclo::select('id')->where('Id', $tipo)->get();
            //$pagos = Pago::whereIn('asignacion_id',$asignaciones)->where('metodo_id', '=', $metodo)->paginate(15);
            return $query->whereIn('tipo_id', $tipos);
        }
    }

    

}
