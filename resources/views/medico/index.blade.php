@extends('plantillamedico')
@section('medico2')
<main class="app-content">
     <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i>Registro de medicos encargados del diagnostico</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg" ></i><a href="#"></a></li>
         
          <li class="breadcrumb-item"><a href="#">Medico</a></li>
        </ul>
      </div>
 <div class="row">
       <div class="clearix"></div>
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
            <h3 class="tile-title">LISTADO DE MEDICOS</h3>
             <a href="#" class="btn btn-primary pull-right" data-toggle="modal" data-target="#crear"><i class="fa fa-plus"></i>Nuevo</a>
              
              
              <table class="table table-hover table-striped">
                <thead>
                  <tr style="background-color:#5DADE2 ">
                     
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Matricula profesional</th>
                    <th colspan="2">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($medicos as $medico)
                 <tr>
                 
                <td>{{$medico->nombre}}</td>
                <td>{{$medico->apellido}}</td>
                <td>{{$medico->matricula}}</td>
                <td width="10px"><a  data-toggle="modal"  class="btn btn-warning btn-sm"  data-target="#edit{{$medico->id}}">Editar</a></td>
           <div class="modal fade" id="edit{{$medico->id}}">
      <div class="modal-dialog">
        <div class="modal-content">
          <div  class="modal-header" style=" background-color: #48C9B0" >
             <h1>Editar Tratamiento</h1>
            <button class="btn btn-danger btn-sm" type="button" class="close" data-dismiss="modal">
              <span>&times;</span>
            </button>
         
          </div>
          <div class="modal-body">
<form class="form-group"  method="POST" action="{{route('medicos.update',$medico->id)}}" enctype="multipart/form-data" >
   @method('PUT')
            @csrf
  <div class="form-group">
    <label for="">Nombre</label>
    <input  type="text"  required="" value="{{$medico->nombre}}" name="nombre" class="form-control">
    </div>
     <div class="form-group">
    <label for="">Apellido</label>
    <input  type="text"  required="" value="{{$medico->apellido}}" name="apellido" class="form-control">
    </div>
<div class="form-group">
    <label for="">Matricula</label>
    <input  type="text"  required="" value="{{$medico->matricula}}" name="matricula" class="form-control">
    </div>

    
  <button type="subtmit" class=" btn btn-primary pull-right"><i class="fa fa-fw fa-lg fa-check-circle"></i>Actualizar</button>
 </form> 
          </div>

          <div class="modal-footer" style="background-color:  #48C9B0">
           
          </div>
        </div>
        
      </div>
    </div>

                 <td>
                <form action="{{route('medicos.destroy', $medico->id)}}" method="POST">
                  {{csrf_field()}}
                  <input type="hidden" name="_method"   value="DELETE">
                  <button  class="btn btn-danger btn-sm" onclick="return confirm('Avertencia  los datos estan en uso .. esta seguro de eliminar?')">Eliminar</button>
                </form>
                 </td>
              </tr>
                  @endforeach
                </tbody>

              </table> 
               {!!$medicos->render()!!}

           @include('medico.crear')
      
          </div>

        </div>


</div>
    </main>
@stop 