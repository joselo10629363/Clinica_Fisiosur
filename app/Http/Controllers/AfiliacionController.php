<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Afiliacion;

use App\Http\Requests\AfiliacionRequest;

class AfiliacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $usuario=Auth::user();
     $f=Afiliacion::orderBy('id','DESC')->paginate(7);
       return view('filiacion.index',compact('f','usuario') );  
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
    public function store( AfiliacionRequest $request)
    {

        $f=new Afiliacion;
        $f->nombre= $request->nombre;
        $f->descripcion=$request->descripcion;
        $f->estado= $request->estado;
        $f->save();

        return back()->with('info','El registro de la nueva afiliacion fue exitosa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
 
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
    public function update(AfiliacionRequest $request, $id)
    {
        
         $f=Afiliacion::find($id);
        $f->nombre= $request->nombre;
        $f->descripcion=$request->descripcion;
        $f->estado= $request->estado;
        $f->save();

        return back()->with('info', 'El registro del afiliado se modifico');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
 
    $f=Afiliacion::find($id);
      $f->delete();
        return back()->with('info', 'El afiliado fue retirado');
    }



    public function anulaAfiliado(Request $request, $id){
        if($request->ajax()) {
            $afiliado = \App\Afiliacion::find($id);
            $afiliado ->delete();
            return Response()->json('info', 'El afiliado fue retirado');

        }
    }
}
