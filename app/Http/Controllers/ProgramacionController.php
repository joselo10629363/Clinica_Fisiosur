<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tratamiento;
use App\Diagnostico;
use App\Programacion_tratamiento;
use App\Http\Requests\ProgramacionRequest;
class ProgramacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tratamientos=Tratamiento::all();
       return view('programaciones.crear', compact('tratamientos'));
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
    public function store(ProgramacionRequest  $request)
    {
        $programacion=new Programacion_tratamiento();
        $programacion->fecha=$request->fecha;
        $programacion->dia=$request->dia;
        $programacion->horario=$request->horario;
        $programacion->estado=$request->estado;
        $programacion->diagnostico_id=Diagnostico::get()->max('id');
        $programacion->save();
        return back()->with('info','Se realizo una nueva programacion de Tratamiento');

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
        

        $programacion=Programacion_tratamiento::find($id);
     
    
    return view('programaciones.editar',compact('programacion') ); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProgramacionRequest $request, $id)
    {
  

        $programacion=Programacion_tratamiento::find($id);
        $programacion->fecha=$request->fecha;
        $programacion->dia=$request->dia;
        $programacion->horario=$request->horario;
                $programacion->estado=$request->estado;

        $programacion->save();
 
      return redirect()->route('evolucion.index')->with('info','El registro  se  actualizo correctamente ');

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
