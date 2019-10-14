<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Usuario;
use Hash;
use App\User;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function form(){


         $usuario=Auth::user();
        if (Auth::user()) {

          if ($usuario->esAdmin()) {
      
            return view('home', compact('usuario'));
          }else
          {
               return view('vistamedico', compact('usuario'));
          }
       
    }
      else
      {
        return view('login')->with('info','los credenciales no coisiden con ninguno de nuestros registros');
    }
        }



   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request){
      
 $lembrar=empty($request->lembrar) ? false :true;
 $usuario= User::where('email',$request->email)->first();


if($usuario && Hash::check($request->password, $usuario->password )){
   Auth::loginUsingId($usuario->id, $lembrar); 
}
return redirect()->action('LoginController@form');
}

//if($usuario && Hash::check($usuario->password, bcrypt($request->password) )){
    
}
