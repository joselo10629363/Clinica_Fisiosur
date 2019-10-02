<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diagnostico;
use App\Tratamiento;
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
    public function store(Request $request)
    {
        $diagnostico=new Diagnostico;
        $diagnostico->paciente_id= $request->paciente_id;
        $diagnostico->medico_id=$request->medico_id;
        $diagnostico->patologia_id=$request->p_id;
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
