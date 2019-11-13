 
@extends('home2')
@section('home2')
 


<main class="app-content">
      <div class="app-title">
        <div>
             
        </div>
      </div>
      <div class="row-center">
        <div  class="col-md-10">
          <div class="tile">
            <center> <h5>Evolucion  del paciente que fue tratado segun su diagnostco </h5></center>
   @foreach($evoluciones as $evolucion)


            <div class="tile-footer">
              <div class="row">
                <div class="col-md-3 ">
                     <h4>Sesion N°: {{$evolucion->sesion}}</h4>
                      <a style="font-style:italic; color:#1F6180;" >Fecha: {{$evolucion->created_at}}</a>
                       <a style="font-style:italic;  color:blue;" >Tratamiento : {{$evolucion->tratamiento->nombre}}</a>
                </div>
                 
              </div>
             <p> {{$evolucion->observacion}}.</p> 
            </div>

          @endforeach

          </div>
        </div>
      </div>
    </main>
    @stop