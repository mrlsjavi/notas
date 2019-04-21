<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alumno extends Model
{
    //
    protected $fillable =[
    	'nombre',
    	'codigo'
    ];

    public function scopeName($query, $name){
       
        if(trim($name) != ""){
         $name = "%".$name."%";
               
         return $query->where('nombre', 'like', $name);
        }
             
     }
}
