<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class conductas extends Model
{
    //
    public function formativa(){

    	return $this->belongsTo(formativas::class);
    }

    public function asignacion(){

    	return $this->belongsTo(Asignacion::class);
    }

    
}
