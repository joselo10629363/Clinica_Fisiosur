<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
   use Barryvdh\DomPDF\Facade as PDF; 
  use App\Ingreso;
    use Carbon\Carbon; 
class PdfIngresosController extends Controller
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
 
           
         $egre=Ingreso::sum('monto_total') ;
       $mes=Ingreso::whereMonth('fecha', $me)->sum('monto_total') ; 
       $anual=Ingreso::whereYear ('fecha', $anu)->sum('monto_total') ;
        $ingresos=Ingreso::all();
           return view('reportes.reporteingresos',compact('ingresos','egre','mes','anual') );  
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
 
        $inicio=$request->fecha1;
        $fin= $request->fecha2;
    
        $suma=Ingreso::whereBetween('fecha', [$inicio, $fin])->sum('monto_total');

        $ingresos=Ingreso::whereBetween('fecha', [$inicio, $fin])->get();
        $listado=PDF::loadView('pdf.ingresospdf',compact('ingresos','dia','me','anu','inicio','fin','suma'));
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
         $dia=Carbon::now()->format('d');
        $me=Carbon::now()->format('m');
       $anu=Carbon::now()->format('Y');

 
     $ingresos=Ingreso::find($id);
      
$listado=PDF::loadView('ingresos.imprimir',compact('ingresos','dia','me','anu'));
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
