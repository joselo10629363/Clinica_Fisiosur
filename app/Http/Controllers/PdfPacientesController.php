<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
   use Barryvdh\DomPDF\Facade as PDF; 
    use App\paciente;
use App\Afiliacion;
use Carbon\Carbon; 
class PdfPacientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        $dia=Carbon::now()->format('d');
        $me=Carbon::now()->format('m');
        $anu=Carbon::now()->format('Y');
        $id= $request->afiliacion_id;
        $inicio=$request->fecha1;
        $fin= $request->fecha2;
        $afiliacion=Afiliacion::find($id);
        $pacientes=Paciente::whereBetween('fecha', [$inicio, $fin])->where("afiliacion_id","=",$id)->get();
        $listado=PDF::loadView('pdf.pdfpacientes',compact('pacientes','afiliacion','dia','me','anu','inicio','fin'));
 return $listado->stream();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $hoy = Carbon::today();
     $afiliacion=Afiliacion::find($id);
$pacientes=Paciente::where("afiliacion_id","=",$id)->get();
$listado=PDF::loadView('pdf.pdfpacientes',compact('pacientes','afiliacion','hoy'));
 return $listado->stream();


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
}
