 
@extends('plantillamedico')
@section('medico2')
 <main class="app-content">
      <div class="app-title">
        <h3>Datos Personales</h3>
        <div>
           
                 <a style="font-style:italic;"class="card-text">Nombre: {{$diagnostico->paciente->persona->nombre}}</a><br>
                  <a style="font-style:italic;" class="card-text">Cedula: {{$diagnostico->paciente->persona->cedula}} </a><br>
                  <a style="font-style:italic;" class="card-text">Afiliacion: {{$diagnostico->paciente->afiliacion->nombre}} </a><br>
               
                  <a style="font-style:italic; font-weight:bold;" class="card-text">Fecha de registro: {{$diagnostico->created_at}} </a>
                  <a style="font-style:italic; font-weight:bold;" class="card-text">Diagnostico: {{$diagnostico->observacion}} </a>
         </div>
         
         <div>
           
 <a style="font-style:italic;" class="card-text">Apellido: {{$diagnostico->paciente->persona->apellido1}}  {{$diagnostico->paciente->persona->apellido2}}</a><br>

      <a style="font-style:italic;"class="card-text">Telefono: {{$diagnostico->paciente->persona->telefono}}</a><br>
            <a style="font-style:italic;"class="card-text">Medico: {{$diagnostico->medico->nombre}}  {{$diagnostico->medico->apellido}}</a><br>


            <a style="font-style:italic; font-weight:bold;" class="card-text">Patologia: {{$diagnostico->patologia->nombre}} </a>
         </div>


         @include('rol/fragment/info')
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Programaciones</li>
          <li class="breadcrumb-item"><a href="#">Registro Evolucion</a></li>
        </ul>
      </div>
      
         @include('rol/fragment/info')
      <div class="modal-footer" style=" border-radius:8px; background-color:#A3E4D7">

                   
                   <a class="btn btn-success  "data-toggle="modal" data-target="#creart"><i class="fa fa-plus"></i>Tipo de Tratamiento</a>
                 </div>
      <div class="row">
        
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Registro del tratamiento realizado</h3>
            <div class="tile-body">

            <form class="form-group"  method="POST" action="{{route('evolucion.store')}}" enctype="multipart/form-data" >
                 @csrf
       
        <div class="form-group">
                    <label for="">Paciente Diagnosticado</label>  
                    <select  name="diagnostico_id"  class="form-control">
                     
                     <option value="{{$diagnostico['id']}}">{{$diagnostico->paciente->persona->nombre }} {{$diagnostico->paciente->persona->apellido1 }} </option>
                    </select> 
                  </div>

           
          <div class="form-group">
    <label for="">N° de Sesion</label>
    <input  type="text"  required="" placeholder="Sesion" name="sesion" class="form-control">
    </div>
       <div class="form-group">
                    <label for="">Nombre del tratamiento</label>  
                <select  name="t_id" id="" class="form-control">
                      <option>---Seleccionar </option>
                      @foreach($tratamientos as $t)
                      <option value="{{$t['id']}}">{{$t['nombre']}}</option>
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
           
          </div>
        </div>


        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Historial del paciente</h3>
            <div class="tile-body">
              <form class="form-horizontal">

              <h4>Sesion 1</h4>
               <p> El paciente ha presentado una mejora considerable en los nervios de la rodilla de las cuales se seguira apliacando la misma  reglas de cuidado</p>

             <h4>Sesion 2</h4>
               <p> Al inicio de este paciente ha presentado una mejora considerable en los nervios de la rodilla de las cuales se seguira apliacando la misma  reglas de cuidado</p>
              </form>
            </div>
            <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-danger" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Editar</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                </div>
              </div>
            </div>
          </div>
        </div>
         @include('tratamiento.crear')
      </div>
    </main>
    @stop