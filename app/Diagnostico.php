<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diagnostico extends Model
{
      protected $table = 'diagnostico';


      public function medico(){
       return $this->belongsTo(Medico::class);
        }


         public function patologia(){
       return $this->belongsTo(Patologia::class);
        }
        public function paciente(){
       return $this->belongsTo(Paciente::class);
        }

         public function programacion()
        {
          return $this->hasMany(Programacion_tratamiento::class);
        }

}
