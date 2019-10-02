<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programacion_tratamiento extends Model
{
       protected $table = 'Programacion_tratamiento';



      public function diagnostico(){
       return $this->belongsTo(diagnostico::class);
        }


}
