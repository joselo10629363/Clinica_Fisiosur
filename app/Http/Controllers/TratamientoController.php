<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Tratamiento;
use App\Http\Requests\TratamientosRequest;
class TratamientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $tratamientos=Tratamiento::orderBy('id','DESC')->paginate(5);
       return view('tratamiento.index',compact('tratamientos') );   
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
   public function store(TratamientosRequest $request)
    {
       $tratamiento=new Tratamiento;
        $tratamiento->nombre=$request->nombre;
        $tratamiento->descripcion=$request->descripcion;
        $tratamiento->save();
  return back()->with('info','El Nuevo tipo de tratamiento fue registrado correctamente');
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
    public function update(TratamientosRequest $request, $id)
    {
    
         $t=Tratamiento::find($id);
        $t->nombre= $request->nombre;
        $t->descripcion=$request->descripcion;
        $t->save();
        return back()->with('info', 'El tipo de tratamiento fue modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $tratamientos=Tratamiento::find($id);
        $tratamientos->delete();
        return back()->with('info', 'El tipo de tratamiento  fue eliminado');
    }
}
