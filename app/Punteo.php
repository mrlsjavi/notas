<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Punteo extends Model
{
    //

    public function curso(){

    	return $this->belongsTo(Curso::class);
    }

    public function asignacion(){

    	return $this->belongsTo(Asignacion::class);
    }

}

