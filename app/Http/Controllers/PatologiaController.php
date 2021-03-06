<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patologia;
use App\Http\Requests\PatologiaRequest;
class PatologiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $patologias=Patologia::orderBy('id','DESC')->paginate(5);
       return view('patologia.index',compact('patologias') );  
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
    public function store(PatologiaRequest $request)
    {
          $Patologia=new Patologia;
        $Patologia->nombre= $request->nombre;
        $Patologia->descripcion=$request->descripcion;
        $Patologia->save();

        return back()->with('info','La patologia se registro correctamente');
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
    public function update(PatologiaRequest $request, $id)
    {
     $Patologia=Patologia::find($id);
        $Patologia->nombre= $request->nombre;
        $Patologia->descripcion=$request->descripcion;
        $Patologia->save();

        return back()->with('info','el registro se actualizo de manera exitosa');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $patologia=Patologia::find($id);
        $patologia->delete();
        return back()->with('info', 'El registro de la patologia fue eliminada');
    }
}
