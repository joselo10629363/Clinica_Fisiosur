<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Paciente;
class ListarController extends Controller
{
     public function index()
    {
        
         $pacientes=Paciente::all();
     
       return view('paciente.reporte', compact('pacientes'));  
    }

}
