@extends('home2')
@section('home2')
<main class="app-content">
     <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i>Roles de usuarios</h1>
          <p>Muestra de roles y registro</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg" ></i><a >inicio</a></li>
        <li class="breadcrumb-item">Usuarios y Roles</li>
          <li class="breadcrumb-item"><a href="#"> Roles</a></li>
        </ul>
      </div>


 <div class="row">
       <div class="clearix"></div>
        <div class="col-md-10">
          <div class="tile">

            <h3 class="tile-title">LISTADO DE ROLES</h3>
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
             <a href="#" class="btn btn-primary pull-right" data-toggle="modal" data-target="#crear"><i class="fa fa-plus"></i>Nuevo Rol</a>
              <table class="table table-hover table-striped">
                <thead>
                  <tr style="background-color:#5DADE2 ">
                   
                    <th>Nombre</th>
                    <th colspan="2">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($rols as $rol)
                 <tr>
              
                <td>{{$rol->nombre}}</td>
<td width="10px"><a  data-toggle="modal"  class="btn btn-warning btn-sm"  data-target="#editar{{$rol->id}}">Editar</a></td>

                   <div class="modal fade" id="editar{{$rol->id}}">
      <div class="modal-dialog">
        <div class="modal-content" >
          <div class="modal-header" style="background-color:#73C6B6">
             <h1>Editar Rol</h1>
  <button class="btn btn-danger btn-sm" type="button" class="close" data-dismiss="modal">
              <span>&times;</span>
            </button>
         
          </div>
          <div class="modal-body">
        <form class="form-group"  method="POST" action="{{route('rol.update', $rol->id)}}" enctype="multipart/form-data" >
          @method('PUT')
            @csrf
  <div class="form-group">
    <label for="">Nombre</label>
    <input  type="text"  required="" placeholder="Nombre" name="nombre" value="{{$rol->nombre}}" class="form-control">
    </div>

  <button type="button" class="btn btn-danger pull-right" class="close" data-dismiss="modal">Cancelar</button>           
 
  <button type="subtmit" class=" btn btn-primary pull-right"><i class="fa fa-fw fa-lg fa-check-circle"></i>Actualizar</button>

 </form> 
          </div>

          <div class="modal-footer" style="background-color:#73C6B6"  >
           
          </div>
        </div>
        
      </div>
    </div>

                </td>
          
                 <td>
                <form action="{{route('rol.destroy', $rol->id)}}" method="POST">
                  {{csrf_field()}}
                  <input type="hidden" name="_method"   value="DELETE">
                  <button  class="btn btn-danger btn-sm"  onclick="return confirm('Avertencia no deberia eliminar el registro de rol.Estas seguro de eliminar?')">Eliminar</button>
                </form>
                 </td>
              </tr>
                  @endforeach
                </tbody>

              </table> 
               {!!$rols->render()!!}

           @include('rol.crear')

      
          </div>

        </div>


</div>



    </main>

  
@stop 