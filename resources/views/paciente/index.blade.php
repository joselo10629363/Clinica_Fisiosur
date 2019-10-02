@extends('home2')
@section('home2')
<main class="app-content">
    <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Registro del Paciente</h1>
          <p>Nuevo</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Registro</li>
          <li class="breadcrumb-item"><a href="#">Formulario Paciente</a></li>
        </ul>
      </div>  
       <div class="row">
        <div class="col-md-12">
          <div class="tile">
            @include('rol/fragment/info')
            <div class="row">
              <div class="col-lg-6">
               
    <form class="form-group"  method="POST" action="{{route('paciente.store')}}" enctype="multipart/form-data" >

                   @csrf
  <div class="form-group">
    <label for="">Nombre</label>
    <input  type="text"  required="" placeholder="Nombre" name="nombre" class="form-control">
    </div>
     <div class="form-group">
    <label for="">Apellido Paterno</label>
    <input  type="text"required="" placeholder="Apellido" name="apellido1" class="form-control">
    </div>
 <div class="form-group">
    <label for="">Apellido Materno</label>
    <input  type="text"required="" placeholder="Apellido" name="apellido2" class="form-control">
    </div>
 <div class="form-group">
    <label for="">Cedula</label>
    <input  type="text"  required="" placeholder="C.I." name="cedula" class="form-control">
    </div>
 <div class="form-group">
    <label for="">Telefono</label>
    <input  type="text"  required="" placeholder="Telefono" name="telefono" class="form-control">
    </div>
              </div>
              <div class="col-lg-4 offset-lg-1">
     <div class="form-group">
    <label for="">Domicilio</label>
    <input  type="text"  required="" placeholder="Domicilio" name="domicilio" class="form-control">
    </div>         


   
    <div class="form-group row">
                  <label class="control-label col-md-3">Genero</label>
                  <div class="col-md-9">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="genero" value="M">Masculino
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                         <input class="form-check-input" type="radio" name="genero" value="F">Femenino
                      </label>
                    </div>
                  </div>
                </div>
                 
     

                 <div class="form-group">
                    <label for="">Afiliacion</label>  
                <select  name="afiliacion_id" id="inputAfiliacion_id" class="form-control">
                      <option>---Seleccionar </option>
                      @foreach($afiliacion as $afi)
                      <option value="{{$afi['id']}}">{{$afi['nombre']}}</option>
                    @endforeach
                    </select> 
                  </div>

       
<div class="form-group">
    <label for="">Ocupacion</label>
    <input type="text"  required="" placeholder="Ocupacion" name="ocupacion" class="form-control">
    </div>
    <div class="form-group">
                    <label for="">Observaciones</label>
                    <textarea class="form-control" name='descripcion'  rows="3"></textarea>
                  </div> 
                  <button type="subtmit" class=" btn btn-primary pull-right"><i class="fa fa-fw fa-lg fa-check-circle"></i>Guardar</button>
                </form> 
              </div>
            </div>
            <div class="tile-footer">
               

            </div>


            @include('rol/fragment/info')
              <table class="table table-hover table-striped">
                <thead>
                  <tr   style="background-color:  #48C9B0">
                    <th width="20px">ID</th>
                    <th>Afiliacion</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>C.i.</th>
                    <th>Ocupacion</th>
                    <th>Observacion</th>
                    <th colspan="2">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
               
                  @foreach($pacientes as $paciente)
                 <tr>
                <td>{{$paciente->id }}</td>
                <td>{{$paciente->afiliacion->nombre}}</td>
                <td>{{$paciente->persona->nombre}}</td>
                  <td>{{$paciente->persona->apellido1}}</td>
                  <td>{{$paciente->persona->cedula}}</td>
                <td>{{$paciente->ocupacion}}</td>
                <td>{{$paciente->descripcion}}</td>
                
                <td width="10px">
                  <a href="{{route('paciente.show', $paciente->id)}}"  class="btn btn-warning btn-sm">Ver</a></td>

                <td width="10px">
                  <a href="{{route('paciente.edit', $paciente->id)}}"  class="btn btn-warning btn-sm">Editar</a></td>
          
                 <td>
                <form action="{{route('paciente.destroy', $paciente->id)}}" method="POST">
                  {{csrf_field()}}
                  <input type="hidden" name="_method"   value="DELETE">
                  <button  class="btn btn-danger btn-sm">Eliminar</button>
                </form>
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
@stop 