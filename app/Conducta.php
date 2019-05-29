<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conducta extends Model
{
    //
    public function formativa(){

    	return $this->belongsTo(Formativa::class);
    }

    public function asignacion(){

    	return $this->belongsTo(Asignacion::class);
    }

    
}
