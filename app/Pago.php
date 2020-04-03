<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $fillable = [
        'asignacion', 'tipo', 'metodo', 'aporte', 'fecha',
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

}
