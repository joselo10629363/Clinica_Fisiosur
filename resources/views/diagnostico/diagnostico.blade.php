@extends('plantillamedico')
@section('medico2')
<main class="app-content">
    <div class="app-title">
         <div>
           
                 <a style="font-style:italic;"class="card-text">Nombre: {{$pacientes->persona->nombre}}</a><br>
                  <a style="font-style:italic;" class="card-text">Cedula: {{$pacientes->persona->cedula}} </a><br>
                  <a style="font-style:italic;" class="card-text">Afiliacion: {{$pacientes->afiliacion->nombre}} </a><br>
               
                  <a style="font-style:italic; font-weight:bold;" class="card-text">Fecha de registro: {{$pacientes->created_at}} </a>
         </div>
         
         <div>
           
 <a style="font-style:italic;" class="card-text">Apellido: {{$pacientes->persona->apellido1}}  {{$pacientes->persona->apellido2}}</a><br>

      <a style="font-style:italic;"class="card-text">Telefono: {{$pacientes->persona->telefono}}</a><br>
            <a style="font-style:italic;"class="card-text">Nombre: {{$pacientes->ocupacion}}</a><br>


            <a style="font-style:italic; font-weight:bold;" class="card-text">Fecha de registro: {{$pacientes->observacion}} </a>
         </div>


        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Registro</li>
          <li class="breadcrumb-item"><a href="#">Diagnostico</a></li>
        </ul>
      </div> 

       <div class="row">
        <div class="col-md-12">
          <div class="tile">
            @include('rol/fragment/info')
            <div class="row">

              <div class="col-lg-12">
             <div class="modal-footer" style=" border-radius:8px; background-color:#A3E4D7">

              
           <a  class="btn btn-info pull-ringht  "data-toggle="modal" data-target="#crea"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i>Programar Tratamiento</a>

                 <a class="btn btn-success  "data-toggle="modal" data-target="#create"><i class="fa fa-plus"></i>Patologia</a>

                  <a class="btn btn-success  "data-toggle="modal" data-target="#crear"><i class="fa fa-plus"></i>Registrar Medico</a>
                   
                   <a class="btn btn-success  "data-toggle="modal" data-target="#creart"><i class="fa fa-plus"></i>Tipo de Tratamiento</a>
                 </div>
                 
                  <form class="form-group"  method="POST" action="{{route('diagnostico.store')}}" enctype="multipart/form-data" >

                   @csrf

                   <div class="form-group">
                    <label for="">Paciente Diagnosticado</label>  
                    <select  name="paciente_id"  class="form-control">
                     
                     <option value="{{$pacientes['id']}}">{{$pacientes->persona->nombre }} {{$pacientes->persona->apellido1}}   {{$pacientes->persona->apellido2}}</option>
                    </select> 
                  </div>
   
                 <div class="form-group">
                    <label for="">Medico Del Diagnostico</label>  
                <select  name="medico_id" id="" class="form-control">
                      <option>---Seleccionar medico</option>
                      @foreach($medicos as $medico)
                      <option value="{{$medico['id']}}">{{$medico['nombre']}} {{$medico['apellido']}}    </option>
                    @endforeach
                    </select> 
                  </div>
                   
                    <div class="form-group">
                    <label for="">Patologias</label>  
                <select  name="p_id" id="" class="form-control">
                      <option>---Seleccionar </option>
                      @foreach($pa as $p)
                      <option value="{{$p['id']}}">{{$p['nombre']}}</option>
                    @endforeach
                    </select> 
                  </div>
                  <div class="form-group">
                    <label for="">Observaciones</label>
                    <textarea class="form-control" name='observacion'  rows="3"></textarea>
                  </div> 
                  <button type="subtmit" class=" btn btn-primary"><i class="fa fa-fw fa-lg fa-check-circle"></i>Guardar</button>
                </form> 
              </div>
                @include('tratamiento.crear')
              @include('medico.crear')

              @include('patologia.crear')
              @include('programaciones.crear')
            </div>

</div>
<div class="row">
        <div class="col-md-12">
          <div class="tile">
            @include('rol/fragment/info')
          
              <table class="table table-hover table-striped">
                <thead>
                  <tr style="background-color:#48C9B0">
   
        
                    <th width="20px">ID</th>
                    <th>Paciente</th>
                     <th>Medico</th>
                     <th>Patologia</th>
                    <th>Observacion</th>


                    <th colspan="2">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>  
               
                 
                 <tr>
         @foreach($diagnosticos as $diagnostico)
            <td>{{$diagnostico->id}}</td>
               
                <td>{{$diagnostico->paciente->persona->nombre}}   {{$diagnostico->paciente->persona->apellido1}}</td>
                  <td>{{$diagnostico->medico->nombre}}  {{$diagnostico->medico->apellido}}</td>
             
             <td>{{$diagnostico->patologia->nombre}}</td>
                <td>{{$diagnostico->observacion}}</td>
                
                <td width="10px">
                  <a href="#"  class="btn btn-info ">Editar</a></td>

                <td width="10px">

                  <a href="#"  class="btn btn-danger">Eliminar</a></td>
        
              </tr>

                  @endforeach
                </tbody>

              </table> 
               
                {!!$diagnosticos->render()!!}
         
        
 </div>  
 </div>  
      </div>   



          </div>
        </div>


      </div>  
          
             



    </main>
@stop 