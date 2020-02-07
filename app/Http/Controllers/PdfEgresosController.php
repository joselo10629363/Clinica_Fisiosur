<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
  use App\Egreso;
   use App\Concepto;
  use Carbon\Carbon; 
  use Barryvdh\DomPDF\Facade as PDF; 
class PdfEgresosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $me=Carbon::now()->format('m');
       $anu=Carbon::now()->format('Y');
       $conceptos=Concepto::all();
           
      $egre=Egreso::sum('monto_total') ;
       $mes=Egreso::whereMonth('fecha', $me)->sum('monto_total'); 
       $anual=Egreso::whereYear ('fecha', $anu)->sum('monto_total');
       $egresos=Egreso::all();
           return view('reportes.reporteegresos',compact('egresos','egre','mes','anual','conceptos') );     }

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

        $id= $request->concepto_id;
        $inicio=$request->fecha1;
        $fin= $request->fecha2;
        if ( ($id=="")) {
        $suma=Egreso::whereBetween('fecha', [$inicio, $fin])->sum('monto_total');

        $egresos=Egreso::whereBetween('fecha', [$inicio, $fin])->get();
        $listado=PDF::loadView('egresos.egresospdf',compact('egresos','dia','me','anu','inicio','fin','suma'));
        return $listado->stream();
            
        } else {
             $suma=Egreso::whereBetween('fecha', [$inicio, $fin])->where("concepto_id","=",$id)->sum('monto_total');
            $conceptos=Concepto::find($id);
            
        $egresos=Egreso::whereBetween('fecha', [$inicio, $fin])->where("concepto_id","=",$id)->get();
        $listado=PDF::loadView('egresos.egresospdf',compact('egresos','conceptos','dia','me','anu','inicio','fin','suma'));
        return $listado->stream();
        }
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
