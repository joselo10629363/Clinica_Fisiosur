<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Egreso extends Model
{
      
    public function usuario(){
       return $this->belongsTo(Usuario::class);
        }
}
