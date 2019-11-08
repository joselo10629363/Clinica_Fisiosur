<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Egreso;
use App\Concepto;
use App\Usuario;
use App\Http\Requests\EgresoRequest;
class EgresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $conceptos=Concepto::orderBy('id','DESC')->paginate(5);
      
      $egresos=Egreso::orderBy('id','DESC')->paginate(5);
       $usuarios=Usuario::All();
       return view('egresos.index',compact('conceptos', 'egresos','usuarios') ); 
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
    public function store(EgresoRequest $request)
    {
        
        $egreso=new Egreso;
        $egreso->concepto_id= $request->concepto_id;
        $egreso->usuario_id=$request->usuario_id;
        $egreso->monto_total=$request->monto;
        $egreso->descripcion=$request->descripcion;
        $egreso->save();
        return back()->with('info','El Egreso fue registrado de manera correcta');
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

     $egreso=Egreso::find($id);
     $egreso->delete();
     return back()->with('info','Elregistro de egreso fue eliminado de manera correcta');
    }
}
