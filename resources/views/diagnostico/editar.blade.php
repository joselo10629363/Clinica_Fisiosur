@extends('plantillamedico')
@section('medico2')
<main class="app-content">
    <div class="app-title">
         <div>
           
                 <a style="font-style:italic;"class="card-text">Nombre: {{$diagnostico->paciente->persona->nombre}}</a><br>
                  <a style="font-style:italic;" class="card-text">Cedula: {{$diagnostico->paciente->persona->cedula}} </a><br>
                  <a style="font-style:italic;" class="card-text">Afiliacion: {{$diagnostico->paciente->afiliacion->nombre}} </a><br>
               
                  <a style="font-style:italic; font-weight:bold;" class="card-text">Fecha de registro: {{$diagnostico->paciente->created_at}} </a>
         </div>
         
         <div>
           
 <a style="font-style:italic;" class="card-text">Apellido: {{$diagnostico->paciente->persona->apellido1}}  {{$diagnostico->paciente->persona->apellido2}}</a><br>
      <a style="font-style:italic;"class="card-text">Telefono: {{$diagnostico->paciente->persona->telefono}}</a><br>
            <a style="font-style:italic;"class="card-text">Nombre: {{$diagnostico->paciente->ocupacion}}</a><br>


            <a style="font-style:italic; font-weight:bold;" class="card-text">Fecha de registro: {{$diagnostico->paciente->observacion}} </a>
         </div>


        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Registro</li>
          <li class="breadcrumb-item"><a href="#">Diagnostico</a></li>
        </ul>
      </div> 

       <div class="row">
        <div class="col-md-10">
          <div class="tile">
            @if ($errors->any())
             <div  class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert">
                &times;
              </button>
               <ul>
                 @foreach($errors->all() as $error)

                 <li>{{$error}} </li>
                 @endforeach
               </ul>
             </div>
             @endif
            @include('rol/fragment/info')
            <div class="row">

              <div class="col-lg-12">
             <div class="modal-footer" style=" border-radius:8px; background-color:#A3E4D7">

              <h3 style="padding-right: 300px">Editar diagnostico de paciente</h3>
           </div>
                <form class="form-group"  method="POST" action="{{route('diagnostico.update',$diagnostico->id)}}" enctype="multipart/form-data" >
               @method('PUT')

                   @csrf

                   <div class="form-group">
                    <label for="">Paciente Diagnosticado</label>  
                    <select  name="paciente_id"  class="form-control"  >
                     
                     <option value="{{$diagnostico->paciente['id']}}">{{$diagnostico->paciente->persona->nombre }} {{$diagnostico->paciente->persona->apellido1}}   {{$diagnostico->paciente->persona->apellido2}}</option>
                    </select> 
                  </div>
   
                 <div class="form-group">
                    <label >Medico Del Diagnostico</label>  
                <select  name="medico" class="form-control">
    <option value="{{$diagnostico->medico['id']}}" >{{$diagnostico->medico->nombre}} {{$diagnostico->medico->apellido}}</option>
                      @foreach($medicos as $medico)
                      <option value="{{$medico['id']}}">{{$medico['nombre']}} {{$medico['apellido']}}    </option>
                    @endforeach
                    </select> 

                  </div>
                   
                    <div class="form-group">
                    <label >Patologia</label>  
                <select  name="patologia"   class="form-control">
    <option value="{{$diagnostico->patologia['id']}}">{{$diagnostico->patologia->nombre}}</option>
    @foreach($patologias as $p)
     <option value="{{$p['id']}}">{{$p['nombre']}}</option>
                    @endforeach
                    </select> 
                  </div>


                  <div class="form-group">
                    <label for="">Observaciones</label>
                    <textarea class="form-control" name='observacion'  rows="3">{{$diagnostico->observacion}}</textarea>
                  </div> 
                  <button type="subtmit" class=" btn btn-primary pull-right"><i class="fa fa-fw fa-lg fa-check-circle"></i>Actualizar</button>
                  <button type="button"  class="btn btn-danger pull-right" onclick="history.back()" >Cancelar</button> 
                   <button type="button"  class="btn btn-danger"onclick="history.go(-2);" >Salir</button> 
                </form> 
              </div>
             
            </div>

</div>
   



          </div>
        </div>


      </div>  

    </main>
@stop 