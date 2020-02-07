<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medico;
use App\Http\Requests\MedicoRequest;
class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

$medicos=Medico::orderBy('id','DESC')->paginate(5);
       return view('medico.index',compact('medicos') );

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
    public function store(MedicoRequest $request)
    {
      $medico=new Medico;
        $medico->nombre= $request->nombre;
        $medico->apellido=$request->apellido;
        $medico->matricula=$request->matricula;
        $medico->save();

        return back()->with('info','El registro  del medico fue exitosa');
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
    public function update(MedicoRequest $request, $id)
    {
        $medico=Medico::find($id);
        $medico->nombre= $request->nombre;
        $medico->apellido=$request->apellido;
        $medico->matricula=$request->matricula;
        $medico->save();

        return back()->with('info','El registro  del medico se modifico  exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $medico=Medico::find($id);
        $medico->delete();
        return back()->with('info', 'El registro del medico fue eliminada de manera exitosa');
    }
}
