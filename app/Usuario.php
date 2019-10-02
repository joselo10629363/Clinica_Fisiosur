<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Rol;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
        protected $table = 'usuario';


        public function rol()
        {

        	return $this->belongsTo(Rol::class);
        }
         public function persona()
        {
        	
        	return $this->belongsTo(Persona::class);
        }
}
