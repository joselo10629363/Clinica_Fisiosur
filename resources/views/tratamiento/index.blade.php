@extends('plantillamedico')
@section('medico2')
<main class="app-content">
     <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i>Listado de todos los tipos de tratamientos</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg" ></i><a href="home1">inicio</a></li>
        <li class="breadcrumb-item">diagnostico</li>
          <li class="breadcrumb-item"><a href="#"> tratamientos</a></li>
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
            <h3 class="tile-title">LISTADO DE TRATANIENTOS</h3>
             <a href="#" class="btn btn-primary pull-right" data-toggle="modal" data-target="#creart"><i class="fa fa-plus"></i>Nuevo</a>
              
              
              <table class="table table-hover table-striped">
                <thead>
                  <tr style="background-color:#5DADE2 ">
                     
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th colspan="2">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($tratamientos as $t)
                 <tr>
                 
                <td>{{$t->nombre}}</td>
                <td>{{$t->descripcion}}</td>
                <td width="10px"><a  data-toggle="modal"  class="btn btn-warning btn-sm"  data-target="#editar{{$t->id}}">Editar</a></td>
           <div class="modal fade" id="editar{{$t->id}}">
      <div class="modal-dialog">
        <div class="modal-content">
          <div  class="modal-header" style=" background-color: #48C9B0" >
             <h1>Editar Tratamiento</h1>
            <button class="btn btn-danger btn-sm" type="button" class="close" data-dismiss="modal">
              <span>&times;</span>
            </button>
         
          </div>
          <div class="modal-body">
<form class="form-group"  method="POST" action="{{route('tratamiento.update',$t->id)}}" enctype="multipart/form-data" >
   @method('PUT')
            @csrf
  <div class="form-group">
    <label for="">Nombre</label>
    <input  type="text"  required="" value="{{$t->nombre}}" name="nombre" class="form-control">
    </div>
     
    <div class="form-group">
    <label for="">Descripcion del tratamiento</label>
    <input type="text" required="" value="{{$t->descripcion}}" name="descripcion" class="form-control">
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
                <form action="{{route('tratamiento.destroy', $t->id)}}" method="POST">
                  {{csrf_field()}}
                  <input type="hidden" name="_method"   value="DELETE">
                  <button  class="btn btn-danger btn-sm">Eliminar</button>
                </form>
                 </td>
              </tr>
                  @endforeach
                </tbody>

              </table> 
               {!!$tratamientos->render()!!}

           @include('tratamiento.crear')
      
          </div>

        </div>


</div>
    </main>
@stop 