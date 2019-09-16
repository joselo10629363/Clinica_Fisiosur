@extends('home2')
@section('home2')
<main class="app-content">
     <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i>Muestras de Roles</h1>
          <p>Muestra de roles y registro</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg" ></i><a href="home1">inicio</a></li>
        <li class="breadcrumb-item">Usuarios y Roles</li>
          <li class="breadcrumb-item"><a href="#"> Roles</a></li>
        </ul>
      </div>
 <div class="row">
       <div class="clearix"></div>
        <div class="col-md-10">
          <div class="tile">
            <h3 class="tile-title">LISTADO DE ROLES</h3>
             <a href="#" class="btn btn-primary pull-right" data-toggle="modal" data-target="#crear"><i class="fa fa-plus"></i>Nuevo Rol</a>
              
             @include('usuario/fragment/info')
              <table class="table table-hover table-striped">
                <thead>
                  <tr>
                    <th width="20px">ID</th>
                    <th>Nombre</th>
                    <th colspan="2">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($rols as $rol)
                 <tr>
                <td>{{$rol->id }}</td>
                <td>{{$rol->nombre}}</td>
                <td width="10px"><a href="{{route('rol.edit', $rol->id)}}"  class="btn btn-warning btn-sm">Editar</a></td>
          
                 <td>
                <form action="{{route('rol.destroy', $rol->id)}}" method="POST">
                  {{csrf_field()}}
                  <input type="hidden" name="_method"   value="DELETE">
                  <button  class="btn btn-danger btn-sm">Eliminar</button>
                </form>
                 </td>
              </tr>
                  @endforeach
                </tbody>

              </table> 
               {!!$rols->render()!!}

           @include('usuario.crear')
      
          </div>

        </div>


</div>
    </main>
@stop 