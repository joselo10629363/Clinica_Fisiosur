<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Paciente extends Model
{
	 protected $table = 'paciente';

	 public function afiliacion(){
       return $this->belongsTo(Afiliacion::class);
        }

  public function persona(){
       return $this->belongsTo(Persona::class);
        }
public function diagnostico(){
       return $this->hasMany(Diagnostico::class);
        }
        public function ingreso(){
       return $this->hasMany(Ingreso::class);
        }

       
}