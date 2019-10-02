<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Persona;
use App\Rol;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios=Usuario::orderBy('id','DESC')->paginate(3);
      $rols=Rol::all();
       return view('usuario.index', compact('usuarios','rols')); 
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


        $usuario=new Usuario();
        $usuario->rol_id=$request->rol_id;
        $usuario->email=$request->email;
      $usuario->password=bcrypt($request->password);
        $usuario->persona_id=persona::get()->max('id');
        
        $usuario->save();
        return redirect()->route('usuario.index')->with('info','El usuario se creo');
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
