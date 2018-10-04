<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pensum extends Model
{
    //
    protected $fillable = [
        'grado', 'curso',
    ];

    public function grado(){

    	return $this->belongsTo(Grado::class);
    }

    public function curso(){

    	return $this->belongsTo(Curso::class);
    }

}
