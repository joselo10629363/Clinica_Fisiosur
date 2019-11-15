<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Usuario;
use Hash;
use App\User;
use App\Paciente;
use App\Afiliacion;
use App\Medico;
use App\Ingreso;
use App\Egreso;
 
use Carbon\Carbon; 
use App\Programacion_tratamiento;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function form(){

$dia = array(
"Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado"
);
$fecha =$dia[date("w")];

       

 
$programaciones= programacion_tratamiento::where('estado','activo')->where('dia',$fecha)->orwhere('dia','todos')->orderBy('horario','ASC')->paginate(6);
 
         $usuario=Auth::user();
         
         $paciente=Paciente::count();
         $usuarios=Usuario::count();
            $medico=Medico::count();
        $afiliacion=Afiliacion::where("estado","=","activo")->count();
         $programacion=Programacion_tratamiento::where("estado","=","activo")->count();
         $ingresos=Ingreso::sum('monto_total') ;
         $egresos=Egreso::sum('monto_total') ;

        if (Auth::user()) {

          if ($usuario->esAdmin()) {
      
            return view('home', compact( 'paciente','tratamiento','afiliacion','programacion','medico','ingresos','egresos','usuarios','programaciones'));


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
