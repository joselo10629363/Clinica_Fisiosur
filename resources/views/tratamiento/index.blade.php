@extends('plantillamedico')
@section('medico2')
<main class="app-content">
     <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i>Listado de trtamientos</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg" ></i><a href="home1">inicio</a></li>
        <li class="breadcrumb-item">diagnostico</li>
          <li class="breadcrumb-item"><a href="#"> tratamientos</a></li>
        </ul>
      </div>
 <div class="row">
       <div class="clearix"></div>
        <div class="col-md-10">
          <div class="tile">
            <h3 class="tile-title">LISTADO DE TRATANIENTOS</h3>
             <a href="#" class="btn btn-primary pull-right" data-toggle="modal" data-target="#creart"><i class="fa fa-plus"></i>Nuevo</a>
              
             @include('rol/fragment/info')
              <table class="table table-hover table-striped">
                <thead>
                  <tr style="background-color:#5DADE2 ">
                    <th width="20px">ID</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th colspan="2">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($tratamientos as $t)
                 <tr>
                <td>{{$t->id}}</td>
                <td>{{$t->nombre}}</td>
                <td>{{$t->descripcion}}</td>
                <td width="10px"><a href="#"  class="btn btn-warning btn-sm">Editar</a></td>
          
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