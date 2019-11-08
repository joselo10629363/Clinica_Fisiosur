<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evolucion extends Model
{
        protected $table = 'evolucion';
          public function tratamiento(){
       return $this->belongsTo(Tratamiento::class);
        }
}
