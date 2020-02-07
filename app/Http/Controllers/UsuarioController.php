<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Persona;
use App\Rol;
 use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UsuarioRequest;
class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios=Usuario::orderBy('id','DESC')->paginate(6);
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
    public function store(UsuarioRequest $request)
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
        return back()->with('info','El usuario se registro exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

     $usuario=Usuario::find($id);
               
return view('usuario.mostrar', compact('usuario'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    $usuario=Usuario::find($id);
     $roles=rol::all();

             
     return view('usuario.editar', compact('usuario','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(request  $request, $id)
    {
      
       

$dato=request()->validate([

           'nombre'=>'required|max:30',
           'apellido1'=>'required|max:25',
           'apellido2'=>'max:25',
           'cedula' => 'required|String|max:10',
            'genero'=>'required|max:2',
            'telefono'=>'required|max:10',
            'domicilio'=>'required|max:50',
            'rol_id'=>'required',
           'email'=>'required|email|unique:usuario,email,'.$id,  
            'password'=>'nullable|string|min:6',
],[
             'nombre.required'=>'El campo nombre  es obligatorio',
           'apellido1.required'=>'El campo  apellido  paterno es obligatorio',
           'apellido2.max'=>'El campo  apellido materno  es de maximo 25 caraceteres ',
           'cedula.required' => 'El campo  cedula es obligatorio',
            'genero.required'=>'El campo  genero es obligatorio',
            'telefono.required'=>'El campo  telefono es obligatorio',
            'domicilio.required'=>'El campo  domicilio es obligatorio',
            'rol_id.required'=>'El campo  rol es obligatorio',
           'email.required'=>'El campo  password es obligatorio'  ,
           'email.unique'=>'El email ya fue registrado escoge otra'  ,
             
             'password.min'=>' El campo  password debe contener almenos 6 caracteres obligatorio',

]);



         $usuario=Usuario::find($id);
        $usuario->rol_id=$request->rol_id;
        $usuario->email=$request->email;

if ($request->password !=null) {

 $usuario->password=bcrypt($request->password );
    
}else{
    unset($request->password );
}
  $usuario->save();
        $persona= Persona::find($usuario->persona_id);
        $persona->nombre= $request->nombre;
        $persona->apellido1= $request->apellido1;
        $persona->apellido2= $request->apellido2;
        $persona->cedula= $request->cedula;
        $persona->genero= $request->genero; 
        $persona->telefono= $request->telefono;
        $persona->domicilio= $request->domicilio;
        $persona->save();


      
        
      
        return back()->with('info','El usuario se registro exitosamente');
    
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $usuario=Usuario::find($id);
        $persona=Persona::find($usuario->persona_id);
          $persona->delete();
        $usuario->delete();
        return back()->with('info', 'El registro del usuario fue eliminado de manera exitosa');
    }
}
