<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente;
use App\Afiliacion;
use App\Programacion_tratamiento;
use App\Usuario;
use App\Ingreso;
use App\User;
use Illuminate\Support\Facades\Auth;
 
 use App\Http\Requests\IngresoRequest;
 

class IngresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    $programaciones=Programacion_tratamiento::orderBy('id','DESC')->paginate(6);
    
       $afiliaciones=Afiliacion::where("estado","=","activo")->orderBy('id','DESC')->paginate(5);

       return view('ingresos.index',compact('programaciones','afiliaciones') ); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IngresoRequest $request)
    {

        $ingreso=new Ingreso;
         $ingreso->usuario_id=$request->usuario_id;
       $ingreso->paciente_id= $request->paciente_id;
       $ingreso->afiliacion_id= $request->afiliacion_id;
         $ingreso->monto_total=$request->monto;
        $ingreso->concepto=$request->concepto;
        $ingreso->saldo=$request->saldo;
        $ingreso->descripcion=$request->descripcion;
        $ingreso->save();
        return back()->with('info','El registro de pago se guardado exitosamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $usuario=Auth::user();
      $programacion=Programacion_tratamiento::find($id);
      $ingresos=Ingreso::where('paciente_id',$programacion->diagnostico->paciente_id)->orderBy('id','DESC')->paginate(3);

      
      return view('ingresos.recibo', compact('programacion','usuario','ingresos'));
    }
 /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 
    public function edit($id)
    {
      $usuario=Auth::user();
      $afiliados=Afiliacion::find($id);
      $ingresos=Ingreso::where('afiliacion_id',$id)->orderBy('id','DESC')->paginate(3);
      return view('ingresos.recibofiliacion', compact('afiliados','ingresos','usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $ingreso=Ingreso::find($id);
     $ingreso->delete();
     return back()->with('info', 'El registro de ingresos fue eliminado');
    }

  
}
