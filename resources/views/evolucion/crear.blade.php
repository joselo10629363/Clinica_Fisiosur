 
@extends('plantillamedico')
@section('medico2')
 <main class="app-content">
      <div class="app-title">
        <h3>Datos Personales</h3>
        <div>
           
                 <a style="font-style:italic;"class="card-text">Nombre: {{$diagnostico->paciente->persona->nombre}}</a><br>
                  <a style="font-style:italic;" class="card-text">Cedula: {{$diagnostico->paciente->persona->cedula}} </a><br>
                  <a style="font-style:italic;" class="card-text">Afiliacion: {{$diagnostico->paciente->afiliacion->nombre}} </a><br>
               
                  <a style="font-style:italic; font-weight:bold;" class="card-text">Fecha de registro: {{$diagnostico->created_at}} </a><br>
                  <a style="font-style:italic; font-weight:bold;" class="card-text">Diagnostico: {{$diagnostico->observacion}} </a>
         </div>
         
         <div>
           
 <a style="font-style:italic;" class="card-text">Apellido: {{$diagnostico->paciente->persona->apellido1}}  {{$diagnostico->paciente->persona->apellido2}}</a><br>

      <a style="font-style:italic;"class="card-text">Telefono: {{$diagnostico->paciente->persona->telefono}}</a><br>
            <a style="font-style:italic;"class="card-text">Medico: {{$diagnostico->medico->nombre}}  {{$diagnostico->medico->apellido}}</a><br>


            <a style="font-style:italic; font-weight:bold;" class="card-text">Patologia: {{$diagnostico->patologia->nombre}} </a>
         </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Programaciones</li>
          <li class="breadcrumb-item"><a href="#">Registro Evolucion</a></li>
        </ul>
      </div>
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
      <div class="modal-footer" style=" border-radius:8px; background-color:#A3E4D7">

      <a class="btn btn-success  "data-toggle="modal" data-target="#creart"><i class="fa fa-plus"></i>Tipo de Tratamiento</a>
                 </div>
                  
      <div class="row">
        
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Registro del tratamiento realizado</h3>
            <div class="tile-body">

            <form class="form-group"  method="POST" autocomplete="off" action="{{route('evolucion.store')}}" enctype="multipart/form-data" >
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
                <select  name="tratamiento" required=""  class="form-control">
                      <option value="">---Seleccionar tratamiento--- </option>
                      @foreach($tratamientos as $tratamiento)
                      <option value="{{$tratamiento['id']}}">{{$tratamiento['nombre']}}</option>
                    @endforeach
                    </select> 
                  </div>


               <div class="form-group">
                    <label for="">Observaciones</label>
                    <textarea class="form-control" required="" name='observacion'  rows="3"></textarea>
                  </div> 

               
                 <button type="subtmit"  class=" btn btn-primary"  ><i class="fa fa-fw fa-lg fa-check-circle"></i>Guardar</button>
              </form>

            </div>
           
          </div>
        </div>
  @include('tratamiento.crear')

        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Historial de evolucion del paciente</h3>
            <div class="tile-body">
              <form class="form-horizontal">
 
           @foreach($evoluciones as $evolucion)


            <div class="tile-footer">
              <div class="row">
                <div class="col-md-3 ">
                     <h5>Sesion N°: {{$evolucion->sesion}}</h5>  
                </div>
                
                <div class="col-md-6" >
            
                     <a style="font-style:italic; font-weight:bold;" >tratamiento : {{$evolucion->tratamiento->nombre}}</a>
                </div>
                
              </div>
             <p> {{$evolucion->observacion}}.</p> 
            </div>
              </form>

                <form action="{{route('evolucion.destroy',$evolucion->id)}}" method="POST">
                  {{csrf_field()}}
                  <input type="hidden" name="_method"   value="DELETE">
                  <button class="btn  pull-right btn-sm" ><i class="fa fa-trash" aria-hidden="true"></i></button>
                </form>.
 
                  <a href="#" class="btn  pull-right"data-toggle="modal" data-target="#edit{{$evolucion->id}}"><i class="fa fa-pencil" aria-hidden="true"></i></a>


     <div class="modal fade" id="edit{{$evolucion->id}}">
      <div class="modal-dialog">
        <div class="modal-content" >
          <div class="modal-header" style="background-color:#73C6B6">
             <h3>Editar evolucion del paciente</h3>
            <button class="btn btn-danger btn-sm" type="button" class="close" data-dismiss="modal">
              <span>&times;</span>
            </button>
         
          </div>
          <div class="modal-body">
        
  <form class="form-group"  method="POST" autocomplete="off" action="{{route('evolucion.update',$evolucion->id)}}" enctype="multipart/form-data" >
     @method('PUT')
                 @csrf
       
        <div class="form-group">
                    <label for="">Paciente Diagnosticado</label>  
                    <select  name="diagnostico_id"  class="form-control">
                     
                     <option value="{{$diagnostico['id']}}">{{$diagnostico->paciente->persona->nombre }} {{$diagnostico->paciente->persona->apellido1 }} </option>
                    </select> 
                  </div>

           
          <div class="form-group">
    <label for="">N° de Sesion</label>
    <input  type="text"  required="" placeholder="Sesion" value="{{$evolucion['sesion']}}" name="sesion" class="form-control">
    </div>
       <div class="form-group">
                    <label for="">Nombre del tratamiento</label>  
                <select  name="tratamiento" required=""  class="form-control">
                        <option value="{{$evolucion->tratamiento->id}}"> {{$evolucion->tratamiento->nombre}}</option>
                      @foreach($tratamientos as $tratamiento)
                     
                      <option value="{{$tratamiento['id']}}">{{$tratamiento['nombre']}}</option>
                    @endforeach
                    </select> 
                  </div>


               <div class="form-group">
                    <label for="">Observaciones</label>
                    <textarea class="form-control" required="" name='observacion'  rows="3">{{$evolucion->observacion}}</textarea>
                  </div> 

               
               <button class="btn btn-danger btn-sm" type="button" class="close" data-dismiss="modal">
              <span>&times;
              cerrar</span>
            </button>
                 <button type="subtmit"  class=" btn btn-primary btn-sm pull-right"  ><i class="fa fa-fw fa-lg fa-check-circle"></i>Actualizar</button>
 </form> 
          </div>

          <div class="modal-footer" style="background-color:#73C6B6"  >
           
          </div>
        </div>
        
      </div>
    </div>
               @endforeach
            </div>

            <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
                    {!!$evoluciones->render()!!}
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </main>
    @stop