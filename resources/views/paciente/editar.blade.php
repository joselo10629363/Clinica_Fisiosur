 


@extends('home2')
@section('home2')
<main class="app-content">
    <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i>Editar registro de paciente</h1>
          <p>Editar</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Paciente</li>
          <li class="breadcrumb-item"><a href="#">Editar Paciente</a></li>
        </ul>
      </div>  
       <div class="row">
        <div class="col-md-12">
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
              <div class="col-lg-6">
               
    <form class="form-group"  method="POST" action="{{route('paciente.update',$paciente->id)}}   " enctype="multipart/form-data" >
@method('PUT')
@csrf
  <div class="form-group">
    <label for="">Nombre</label>
    <input  type="text"  required="" name="nombre" value="{{$paciente->persona->nombre}}" class="form-control">
    </div>
     <div class="form-group">
    <label for="">Apellido Paterno</label>
    <input  type="text"required="" value="{{$paciente->persona->apellido1}}" name="apellido1" class="form-control">
    </div>
 <div class="form-group">
    <label for="">Apellido Materno</label>
    <input  type="text"required="" value="{{$paciente->persona->apellido2}}" name="apellido2" class="form-control">
    </div>
 <div class="form-group">
    <label for="">Cedula</label>
    <input  type="text"  required="" value="{{$paciente->persona->cedula}}" name="cedula" class="form-control">
    </div>
 <div class="form-group">
    <label for="">Telefono</label>
    <input  type="text"  required="" value="{{$paciente->persona->telefono}}" name="telefono" class="form-control">
    </div>
    <button type="button"  class="btn btn-danger"onclick="history.go(-2);" >Salir</button> 
              </div>

    <div class="col-lg-5 offset-lg-1">
     <div class="form-group">
    <label for="">Domicilio</label>
    <input  type="text"  required="" value="{{$paciente->persona->domicilio}}" name="domicilio" class="form-control">
    </div>       


   
    <div class="form-group row">
                  <label class="control-label col-md-3">Genero</label>
                  <div class="col-md-9">
                    <div class="form-check">
                      <label class="form-check-label">
        <input class="form-check-input" type="radio" name="genero" value="M"{{$paciente->persona->genero == 'M' ? 'checked' : ''}}  >Masculino
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                         <input class="form-check-input"  type="radio" name="genero"  value="F"{{$paciente->persona->genero == 'F' ? 'checked' : ''}} >Femenino
                      </label>
                    </div>
                  </div>
                </div>
                 
     

                        <div class="form-group">
                    <label for="">Afiliacion</label>  
                <select  name="afiliacion_id" id="inputAfiliacion_id" class="form-control">
          <option  value="{{$paciente->afiliacion_id}}">{{$paciente->afiliacion->nombre}}</option>
                      @foreach($afiliacion as $afi)
                      <option value="{{$afi['id']}}">{{$afi['nombre']}}</option>
                    @endforeach
                    </select> 
                  </div>

       
<div class="form-group">
    <label for="">Ocupacion</label>
    <input type="text"  required="" value="{{$paciente->ocupacion}}" name="ocupacion" class="form-control">
    </div>
    <div class="form-group">
                    <label for="">Observaciones</label>
                    <textarea class="form-control" name='descripcion'  rows="3">{{$paciente->descripcion}}</textarea>
                  </div> 
                  <button type="subtmit" class=" btn btn-primary pull-right"><i class="fa fa-fw fa-lg fa-check-circle"></i>Actualizar</button>
                   <button type="button"  class="btn btn-danger pull-right" onclick="history.back()" >Cancelar</button> 
                </form> 
              </div>
            </div>
            
                
          </div>
        </div>


      </div>           

    </main>
@stop 