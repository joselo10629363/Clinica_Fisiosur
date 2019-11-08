<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
  protected $table = 'tratamientos'; 

   public function tratamiento()
        {
        	return $this->hasMany(Evolucion::class);
        }
}
