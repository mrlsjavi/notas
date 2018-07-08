<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
    //


    public function ciclo(){

    	return $this->belongsTo(Ciclo::class);
    }

    public function grado(){

    	return $this->belongsTo(Grado::class);
    }

    public function alumno(){

    	return $this->belongsTo(alumno::class);
    }


}
