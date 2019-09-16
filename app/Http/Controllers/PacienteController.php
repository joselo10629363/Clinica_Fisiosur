<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente;
use App\Persona;
use App\Afiliacion;
class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $pacientes=Paciente::orderBy('id','DESC')->paginate(3);
      $afiliacion=Afiliacion::all();
       return view('paciente.index', compact('afiliacion','pacientes')); 
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
        $persona=new Persona();
        $persona->nombre= $request->nombre;
        $persona->apellido1= $request->apellido1;
        $persona->apellido2= $request->apellido2;
        $persona->cedula= $request->cedula;
        $persona->genero= $request->genero; 
        $persona->telefono= $request->telefono;
        $persona->domicilio= $request->domicilio;
        $persona->save();


        $paciente=new Paciente();
        $paciente->afiliacion_id=$request->afiliacion_id;
         $paciente->ocupacion=$request->ocupacion;
        $paciente->descripcion=$request->descripcion;
        $paciente->persona_id=persona::get()->max('id');

        
        $paciente->save();
        return redirect()->route('paciente.index')->with('info','Nueva Afiliacion Guardado');
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
