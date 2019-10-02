@extends('plantillamedico')
@section('medico2')
<main class="app-content">
    <div class="app-title">
      <div>
          <h1><i class="fa fa-calendar" aria-hidden="true"></i> Listado de pacientes programados</h1>
          <p>Pacientes a tratar</p>
        </div>

        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        
          <li class="breadcrumb-item"><a href="#">Evolucion</a></li>
        </ul>
      </div> 

       <div class="row">
        <div class="col-md-12">
          <div class="tile">
            @include('rol/fragment/info')
            <div class="row">

              <div class="col-lg-12">
             <div class="footer" style=" border-radius:8px; height:70px; background-color:#A3E4D7"><br>
                <center><h3 class="tile-title">AGENDA DE TRATAMIENTOS PARA EL DIA DE HOY</h3></center>
                  
                 </div>
                 
                  
              </div>
               
            </div>


<div class="row">
        <div class="col-md-12">
          <div class="tile">
            @include('rol/fragment/info')
          
              <table class="table table-hover table-striped">
                <thead>
                  <tr style="background-color:#48C9B0">
  
                    <th>Diagnostico</th>
                    <th>Patologia</th>
                    <th>Paciente</th>
                     <th>Fecha</th>
                     <th>Horario</th>
                    <th>Dia</th>
                      <th>Estado</th>

                    <th colspan="3">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>  
               <tr>
                @foreach($programaciones as $programacion)
                <td>{{$programacion->diagnostico->observacion}}</td>
                <td>{{$programacion->diagnostico->patologia->nombre}}</td>
                <td>{{$programacion->diagnostico->paciente->persona->nombre}}
                 {{$programacion->diagnostico->paciente->persona->apellido1}} {{$programacion->diagnostico->paciente->persona->apellido2}}</td>
                 <td>{{$programacion->fecha}}</td>
                  <td>{{$programacion->horario}}</td>
                   <td>{{$programacion->dia}}</td>
                    <td>{{$programacion->estado}}</td>
                <td width="10px">

                   <a  href="{{route('evolucion.show', $programacion->diagnostico_id)}}"  class="btn btn-info btn-sm "><i class="fa fa-pencil" aria-hidden="true"></i>Evolucion</a>
                 
                <td width="2px">
                  <a href="#"  class="btn btn-warning btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                   
                  <td width="2px">
                  <a href="#"  class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                   </tr>

                  @endforeach
                </tbody>

              </table> 
               
                {!!$programaciones->render()!!}
         
        
 </div>  
 </div>  
      </div>   



          </div>
        </div>


      </div>  
          
             



    </main>
@stop 