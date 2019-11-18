<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 
use App\Diagnostico;
use App\Tratamiento;
use App\Evolucion;
use App\programacion_tratamiento;
use Carbon\Carbon; 
use App\Http\Requests\EvolucionRequest;
class EnfermeriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          // $fecha=date('l');
   // $fecha=Carbon::now()->format('l');
$dia = array(
"Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado"
);
$fecha =$dia[date("w")];

       

  //  $programaciones=programacion_tratamiento::where("estado","=","activo")->get()->orderBy('horario','ASC');

$programaciones= programacion_tratamiento::where('estado','activo')->where('dia',$fecha)->orwhere('dia','todos')->orderBy('horario','ASC')->paginate(6);
//$programaciones= programacion_tratamiento::where('estado','activo')->orderBy('horario','ASC')->paginate(6);

       return view('evolucion.enfermeria',compact('programaciones')); 
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $diagnostico=Diagnostico::find($id);
        $evoluciones=Evolucion::where('diagnostico_id',$id)->orderBy('sesion','DESC')->paginate(3);
        $tratamientos=Tratamiento::all();
       return view('evolucion.registrar',compact('tratamientos','diagnostico','evoluciones') ); 
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
