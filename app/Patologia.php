<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patologia extends Model
{
 protected $table = 'patologias';
 
   public function diagnostico()
        {
        	return $this->hasMany(Diagnostico::class);
        }
}
