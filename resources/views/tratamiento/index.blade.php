@extends('home2')
@section('home2')
<main class="app-content">
     
 <div class="row">
       <div class="clearix"></div>
        <div class="col-md-10">
          <div class="tile">
            <h3 class="tile-title">LISTADO DE TRATAMIENTOS</h3>
             <a href="#" class="btn btn-primary pull-right" data-toggle="modal" data-target="#crear"><i class="fa fa-plus"></i>Nuevo</a>
              
              @include('usuario/fragment/info')
              <table class="table table-hover table-striped">
                <thead>
                  <tr>
                    <th width="20px">ID</th>
                    <th>Nombre</th>
                     <th>Descripcion</th>
                    <th colspan="2">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($tratamientos as $tratamiento)
                 <tr>
                <td>{{$tratamiento->id }}</td>
                <td>{{$tratamiento->nombre}}</td>
               <td>{{$tratamiento->descripcion}}</td>
                <td width="10px"><a href="#"  class="btn btn-warning btn-sm">Editar</a></td>
          
                 <td>
                <form action="{{route('tratamiento.destroy', $tratamiento->id)}}" method="POST">
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