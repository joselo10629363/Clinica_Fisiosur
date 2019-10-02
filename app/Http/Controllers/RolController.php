<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rol;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $rols=Rol::orderBy('id','DESC')->paginate(5);
       return view('rol.index',compact('rols') );   }

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
     $rols=new Rol;
        $rols->nombre= $request->nombre;
        $rols->save();

    return redirect()->route('rol.index')->with('info','El rol fue Guardado');

     
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
      $rols=Rol::find($id);

        return view('rol.editar')->with( ['role' => $rols] );
      

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
        $rols=Rol::find($id);
        $rols->nombre= $request->nombre;
        $rols->save();

        return redirect()->route('rol.index')->with('info','El rol fue actualizado');

     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rols=Rol::find($id);
        $rols->delete();
        return back()->with('info', 'El rol fue eliminado');

    }
}
