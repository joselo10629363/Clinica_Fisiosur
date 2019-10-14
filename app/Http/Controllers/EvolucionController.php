<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diagnostico;
use App\Tratamiento;
use App\Evolucion;
use App\programacion_tratamiento;

class EvolucionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
   // $programaciones=programacion_tratamiento::where("estado","=","activo")->get()->orderBy('horario','ASC');

$programaciones= programacion_tratamiento::where('estado','activo')->orderBy('horario','ASC')->paginate(6);

       return view('evolucion.index',compact('programaciones') );   
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $evolucion=new Evolucion;
        $evolucion->diagnostico_id= $request->diagnostico_id;
        $evolucion->sesion=$request->sesion;
        $evolucion->tratamiento_id=$request->t_id;
        $evolucion->observacion=$request->observacion;
        $evolucion->save();
        return back()->with('info','El registro de evolucion fue registrado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        $diagnostico=Diagnostico::find($id);
        $tratamientos=Tratamiento::all();
       return view('evolucion.crear',compact('tratamientos','diagnostico') ); 
    
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
