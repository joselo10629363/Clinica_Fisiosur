 
@extends('home2')
@section('home2')
 <main class="app-content">
      <div class="app-title">
        <h3>Listado De Los Pacientes e Instituciones Afiliadas</h3>
       
         
        

         @include('rol/fragment/info')
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Programaciones</li>
          <li class="breadcrumb-item"><a href="#">Registro Evolucion</a></li>
        </ul>
      </div>
      
         @include('rol/fragment/info')
      <div class="modal-footer" style=" border-radius:8px; background-color:#A3E4D7">

                   
                  
                 </div>
      <div class="row">
        
        <div class="col-md-7">
          <div class="tile">
            <h3 class="tile-title">Listado de los pacientes en curso de tratamientos</h3>
            <div class="tile-body">

             <table class="table table-hover table-striped">
                <thead>
                  <tr style="background-color:#5DADE2 ">
                    <th>Paciente</th>
                     <th>Patologia</th>
                      <th>Fecha de inicio</th>
                       <th>Estado</th>
                    <th colspan="2">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($programaciones as $programacion)
                 <tr>
             
                   <td class="mailbox-messages mailbox-name" ><a style="display:block"><i class="fa fa-user"></i>&nbsp;&nbsp;{{ $programacion->diagnostico->paciente->persona-> nombre }} {{ $programacion->diagnostico->paciente->persona->apellido1}} {{ $programacion->diagnostico->paciente->persona->apellido2}}</a></td>
                   <td>{{$programacion->diagnostico->patologia->nombre}}</td>
                   <td>{{$programacion->fecha}}</td>
                   <td>{{$programacion->estado}}</td>

                   
               
                <td width="10px"><a href="{{route('ingreso.show', $programacion->id)}}"  class="btn btn-info btn-sm"><i class="fa fa-usd" aria-hidden="true"></i>Recibo</a></td>
                 
               
              </tr>
                  @endforeach
                </tbody>

              </table> 
               {!!$programaciones->render()!!}

            </div>
           
          </div>
        </div>


        <div class="col-md-5">
          <div class="tile">
            <h3 class="tile-title">Instituciones Afiliadas</h3>
            <div class="tile-body">
              <table class="table table-hover table-striped" >
                <thead>
                  <tr  style="background-color:#5DADE2 ">
                    <th>nombre</th>
                    
                    <th>Descripcion de la Institucion</th>
                    <th colspan="2">&nbsp;</th>
                  </tr>
                </thead>
               @foreach($afiliaciones as $afiliacion)
                <tbody>
                  <tr>
                    <td class="mailbox-messages mailbox-name" ><a style="display:block"><i class="fa fa-user"></i>&nbsp;&nbsp;<?= $afiliacion->nombre;  ?></a></td>
                   <td>{{$afiliacion->descripcion}}</td>
                
                 
   <td width="10px"><a href="{{route('ingreso.show', $afiliacion->id)}}"  class="btn btn-info btn-sm"><i class="fa fa-usd" aria-hidden="true"></i>Recibo</a></td>
                  </tr>
                 @endforeach
                </tbody>
               
              </table>


 {!!$afiliaciones->render()!!}



            </div>
           


          </div>
        </div>
     
      </div>
    </main>
    @stop