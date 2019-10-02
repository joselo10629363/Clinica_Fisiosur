<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
        protected $table = 'medico';

        public function diagnostico()
        {
        	return $this->hasMany(Diagnostico::class);
        }
}
