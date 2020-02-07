<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{

public $timestamps = false;
 
protected $table = 'ingresos';  
 
 public function usuario()
        {
        	
        	return $this->belongsTo(Usuario::class);
        }


         public function paciente(){
       return $this->belongsTo(Paciente::class);
        }


 public function afiliacion(){
       return $this->belongsTo(Afiliacion::class);
        }



        
 




}
