<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente;
use App\Persona;
use App\Afiliacion;
use App\Http\Requests\PacienteRequest;

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
      $afiliacion=Afiliacion::where("estado","=","activo")->get();
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
    public function store(PacienteRequest $request)
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
        return back()->with('info','El registro del nuevo paciente fue exitoso');
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

          
               
return view('paciente.mostrar', compact('pacientes'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
             $paciente=Paciente::find($id);
            $afiliacion=Afiliacion::where("estado","=","activo")->get();

             
                return view('paciente.editar', compact('paciente','afiliacion'));
         
             }


        


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PacienteRequest $request,  $id)
    {


        $paciente=Paciente::find($id);
        $paciente->afiliacion_id=$request->afiliacion_id;
         $paciente->ocupacion=$request->ocupacion;
        $paciente->descripcion=$request->descripcion;
        $paciente->save();


       $persona=Persona::find($paciente->persona_id);

        $persona->nombre= $request->nombre;
        $persona->apellido1= $request->apellido1;
        $persona->apellido2= $request->apellido2;
        $persona->cedula= $request->cedula;
        $persona->genero= $request->genero; 
        $persona->telefono= $request->telefono;
        $persona->domicilio= $request->domicilio;
        $persona->save();


        return back()->with('info','el registro se actualizo de manera correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paciente=Paciente::find($id);
        $persona=Persona::find($paciente->persona_id);
          $persona->delete();
        $paciente->delete();
        return back()->with('info', 'El registro fue eliminado de manera exitosa');
    }
}
