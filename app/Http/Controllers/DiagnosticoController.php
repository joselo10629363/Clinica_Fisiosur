<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diagnostico;
use App\Tratamiento;
use App\Patologia;
use App\Medico;
use App\Http\Requests\DiagnosticoRequest;
class DiagnosticoController extends Controller
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
    public function store(DiagnosticoRequest $request)
    {
        $diagnostico=new Diagnostico;
        $diagnostico->paciente_id= $request->paciente_id;
        $diagnostico->medico_id=$request->medico;
        $diagnostico->patologia_id=$request->patologia;
        $diagnostico->observacion=$request->observacion;
        $diagnostico->save();
        return back()->with('info','El diagnostico del paciente fue registrado correctamente');

         //->with( ['merchant' => $merchant] );
    }


 public function store2(Request $request)
    {
        $t=new Tratamiento;
        $t->nombre= $request->nombre;
        $t->descripcion= $request->descripcion;
        $t->save();
        return back()->with('info','El diagnostico del paciente fue registrado correctamente');
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
    $diagnostico=Diagnostico::find($id);
     $medicos=Medico::all();
     $patologias=Patologia::all();
    return view('diagnostico.editar',compact('diagnostico','medicos','patologias') ); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DiagnosticoRequest $request, $id)
    {
            


        $diagnostico=Diagnostico::find($id);
        $diagnostico->medico_id=$request->medico;
        $diagnostico->patologia_id=$request->patologia;
        $diagnostico->observacion=$request->observacion;
        $diagnostico->save();

          return back()->with('info','El registro  se  actualizo correctamente ');

       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $d=Diagnostico::find($id);
        $d->delete();
        return back()->with('info', 'El diagnostico del paciente fue eliminado exitosamente');
    }
}
