<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Afiliacion extends Model
{
    protected $table = 'afiliacion';


 public function paciente()
        {
        	return $this->hasMany(Paciente::class);
        }

}
  