<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ausencia extends Model
{
    //
    protected $fillable = [
        'asignacion', 'ausencias',
    ];

    /*public function asignacion(){

    	return $this->belongsTo(Asignacion::class);
    }*/
}
