@extends('plantillamedico')
@section('medico2')
<main class="app-content">
    <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i>Listado de los pacientes </h1>
          <p>Muestra de los pacientes ingresados  el dia de hoy</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Registro</li>
          <li class="breadcrumb-item"><a href="#">Atencion del paciente</a></li>
        </ul>
      </div>  
       <div class="row">
        <div class="col-md-12">
          <div class="tile">
            @include('rol/fragment/info')
            <div class="row">
              <div class="col-lg-6">
               
    
              </div>
            </div>
           
            @include('rol/fragment/info')
              <table class="table table-hover table-striped">
                <thead>
                  <tr style=" background-color: #48C9B0">
                 
                    
                    <th>Paciente</th>
                     <th>Afiliacion</th>
                    <th>C.i.</th>
                    <th>Ocupacion</th>
                    <th>Observacion</th>
                    <th colspan="3">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
               
                  @foreach($pacientes as $paciente)
                 <tr>
              
       <td class="mailbox-messages mailbox-name" ><a style="display:block"><i class="fa fa-user"></i>&nbsp;&nbsp; {{$paciente->persona->nombre }}  {{ $paciente->persona-> apellido1 }} {{$paciente->persona->apellido2}}</td>
                 
                 <td>{{$paciente->afiliacion->nombre}}</td>

                  <td>{{$paciente->persona->cedula}}</td>
                <td>{{$paciente->ocupacion}}</td>
                <td>{{$paciente->descripcion}}</td>
                
                

                <td width="10px">

                  <a href="{{route('atencion.show', $paciente->id)}}"  class="btn btn-success ">Atender</a></td>
        
 

        <td>


         <div class="col-md-6">
                <div class="toggle-flip">
                  <label>
                    <input type="checkbox"><span class="flip-indecator" data-toggle-on="Atender" data-toggle-off="Atendido"></span>
                  </label>
                </div>
            
              </div>

        </td>

              </tr>

 


                  @endforeach




                </tbody>

              </table> 
               {!!$pacientes->render()!!}
          </div>
        </div>
 

      </div>           

    </main>


 
 
</body>
 
@stop 