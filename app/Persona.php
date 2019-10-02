<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
     protected $table = 'persona';

     public function usuario()
        {
        	return $this->hasMany(Usuario::class);
        }

 public function paciente()
        {
        	return $this->hasMany(Paciente::class);
        }
        

}
  