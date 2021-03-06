<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Paciente;
 use App\Diagnostico;
  use App\Evolucion;
   use App\Afiliacion;
class ReporteAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
         $pacientes=Paciente::all();
 $afiliaciones=Afiliacion::all();
       return view('reportes.reportepaciente', compact('pacientes','afiliaciones'));  
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
 $patologias= Diagnostico::where('paciente_id',$id)->get();
$diagnostico = '';
 foreach($patologias as $patologia){
          $diagnostico.= "{$patologia->id} ";
       }     


 $evoluciones= Evolucion::where('diagnostico_id',$diagnostico)->get();
 $pacientes=Paciente::find($id);
  

      return view('reportes.informepacientes', compact('pacientes','patologias','evoluciones' ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
 $evoluciones=Evolucion::where('diagnostico_id',$id)->get();
 
  return view('reportes.evolucion', compact('evoluciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( $id)
    {
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      return($id);
    }
}
