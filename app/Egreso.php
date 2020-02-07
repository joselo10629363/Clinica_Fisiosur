<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Egreso extends Model
{
    public $timestamps = false;  
    
    public function usuario(){
       return $this->belongsTo(Usuario::class);
        }


         public function concepto()
        {
        	
        	return $this->belongsTo(Concepto::class);
        }
}
