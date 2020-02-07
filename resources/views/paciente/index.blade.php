@extends('home2')
@section('home2')
<main class="app-content">
    <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Registro de pacientes</h1>
          <p>Nuevo</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"></li>
          <li class="breadcrumb-item"><a href="#">registro de Paciente</a></li>
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
               
    <form class="form-group"    method="POST" action="{{route('paciente.store')}}" enctype="multipart/form-data" >

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
    <input  type="text" placeholder="Apellido" name="apellido2" class="form-control">
    </div>
 <div class="form-group">
    <label for="">Cedula</label>
    <input  type="text"  required="" placeholder="C.I."  maxlength="10" name="cedula" class="form-control">
    </div>
 <div class="form-group">
    <label for="">Telefono</label>
    <input  type="text"  required="" placeholder="Telefono" maxlength="10" name="telefono" class="form-control">
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
       <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr style="background-color:  #48C9B0">
                   <th>ID</th>
                    <th>Paciente</th>
                    <th>Afiliacion</th>
                    <th>Cedula</th>
                    <th>Domicilio</th>
                    <th>Ocupacion</th>
                     <th></th>
                     <th></th>
                     <th></th>
                  </tr>
                </thead>
                <tbody>
                  
                  @foreach($pacientes as $paciente)
                 <tr>
                <td>{{$paciente->id}}</td>
              
                <td>{{$paciente->persona->nombre }} {{$paciente->persona-> apellido1}} {{$paciente->persona-> apellido2}}</td>
                  <td>{{$paciente->afiliacion->nombre}}</td>
                  <td>{{$paciente->persona->cedula}}</td>
                  
                  <td>{{$paciente->persona->domicilio}}</td>
                <td>{{$paciente->ocupacion}}</td>
                <td  width="3px" ><a href="{{route('paciente.show', $paciente->id)}}" ><i class="fa fa-eye" aria-hidden="true"></i>
                 </a> </td>
                <td width="3px">
                  <a href="{{route('paciente.edit', $paciente->id)}}"  class="btn btn-warning btn-sm"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

                </td>
          
                 <td width="3px" >
                <form action="{{route('paciente.destroy', $paciente->id)}}" method="POST">
                  {{csrf_field()}}
                  <input type="hidden" name="_method"   value="DELETE">
                  <button  class="btn btn-danger btn-sm" onclick="return confirm('Esta seguro de eliminar de manera definitiva?')"><i class="fa fa-trash-o" aria-hidden="true"></i> </button>
                </form>
                 </td>
                </tr>
                 @endforeach
                </tbody>
                     
              </table>
          </div>
        </div>


      </div>           
<script src="{{url('/')}}/js/jquery-3.2.1.min.js"></script>
    <script src="{{url('/')}}/js/popper.min.js"></script>
    <script src="{{url('/')}}/js/bootstrap.min.js"></script>
    <script src="{{url('/')}}/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <script type="text/javascript" src="{{url('/')}}/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="{{url('/')}}/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    </main>
@stop 