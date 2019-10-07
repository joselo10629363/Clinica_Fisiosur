<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente;
use App\Afiliacion;
use App\Programacion_tratamiento;
use App\Usuario;
use App\Ingreso;


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
      $afiliaciones=Afiliacion::orderBy('id','DESC')->paginate(6);

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
    public function store(Request $request)
    {

        $ingreso=new Ingreso;
         $ingreso->usuario_id=$request->usuario_id;
        $ingreso->paciente_id= $request->paciente_id;
        $ingreso->monto_total=$request->monto_total;

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
        $usuarios=Usuario::all();
      $programacion=Programacion_tratamiento::find($id);
      return view('ingresos.recibo', compact('programacion','usuarios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

      public function buscar_pacientes($afiliacion,$dato='')
    {
$pacientes=Paciente($afiliacion,$dato)->ppaginate(8);
$afiliaciones=Afiliacion::all();
$afiliacionselec=$afiliaciones->find($afiliacion);
 return view('ingresos.index',compact('pacientes', 'afiliaciones', 'afiliacionselect') ); 

    }
}
