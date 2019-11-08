<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente;
use App\Persona;
use App\Medico;
use App\Diagnostico;
use App\Afiliacion;
use App\Tratamiento;
use App\Patologia;
use Carbon\Carbon; 
class AtencionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    $hoy = Carbon::today();
  

 
 $pacientes=Paciente::whereDate('created_at',date('Y-m-d'))->orderBy('id','ASC')->paginate(7);

      $afiliacion=Afiliacion::all();
       return view('medico.atencion', compact('afiliacion','pacientes','hoy')); 
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $pacientes=Paciente::find($id);
       $medicos=Medico::all();
       $pa=Patologia::all();
        $diagnosticos=Diagnostico:: orderBy('id','DESC')->paginate(6);
      return view('diagnostico/diagnostico', compact('pacientes','medicos','diagnosticos','pa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
}
