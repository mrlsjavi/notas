<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\alumno;
use App\Asignacion;
class Punteo extends Model
{
    //

    public function curso(){

    	return $this->belongsTo(Curso::class);
    }

    public function asignacion(){

    	return $this->belongsTo(Asignacion::class);
    }

    public function scopeName($query, $name){
       
        

       if(trim($name) != ""){
        $name = "%".$name."%";
        $alumnos = alumno::select('id')->where('nombre', 'like', $name)->get();       
        $asignaciones = Asignacion::select('id')->whereIn('alumno_id', $alumnos)->get();      
        return $query->WhereIn('asignacion_id', $asignaciones);
       }
       
       
    }

    public function scopeType($query, $type){
        //verificar que el filto que se esta mandando si existe o sea valido
       // dd($type);
        if(trim($type) != ""){
            //$type = "%".$type."%";
            //$alumnos = alumno::select('id')->where('nombre', 'like', $type)->get();       
            $asignaciones = Asignacion::select('id')->where('grado_id', '=', $type)->get();      
            return $query->WhereIn('asignacion_id', $asignaciones);
        }
    }

    public function scopeCiclo($query, $ciclo){
        if(trim($ciclo) != ""){
            //$type = "%".$type."%";
            //$alumnos = alumno::select('id')->where('nombre', 'like', $type)->get();       
            $asignaciones = Asignacion::select('id')->where('ciclo_id', '=', $ciclo)->get();      
            return $query->WhereIn('asignacion_id', $asignaciones);
        }
    }

}

