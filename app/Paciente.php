<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
	 protected $table = 'paciente';



	public function afiliacion(){
		 return $this->hasOne(Afiliacion::class);
	} 
	 
}