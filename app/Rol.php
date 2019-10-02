<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Usuario;
class Rol extends Model
{
      protected $table = 'rol';

     
        public function usuario()
        {
        	return $this->hasMany(Usuario::class);
        }
}
