@extends('home2')
@section('home2')
<main class="app-content">
     
 <div class="row">
       <div class="clearix"></div>
        <div class="col-md-10">
          <div class="tile">
            <h3 class="tile-title">LISTADO DE FILIACION</h3>
             <a href="#" class="btn btn-primary pull-right" data-toggle="modal" data-target="#crear"><i class="fa fa-plus"></i>Nuevo</a>
              
              @include('rol/fragment/info')
              <table class="table table-hover table-striped">
                <thead>
                  <tr style="background-color:#5DADE2 " >
                    <th width="20px">ID</th>
                    <th>Nombre</th>
                     <th>Descripcion</th>
                    <th colspan="2">&nbsp;</th>
                  </tr >
                </thead>
                <tbody>
                  @foreach($f as $filia)
                 <tr>
                <td>{{$filia->id }}</td>
                <td>{{$filia->nombre}}</td>
               <td>{{$filia->descripcion}}</td>
                <td width="10px"><a href="#"  class="btn btn-warning btn-sm">Editar</a></td>
          
                 <td>
                <form action="{{route('filiacion.destroy', $filia->id)}}" method="POST">
                  {{csrf_field()}}
                  <input type="hidden" name="_method"   value="DELETE">
                  <button  class="btn btn-danger btn-sm">Eliminar</button>
                </form>
                 </td>
              </tr>
                  @endforeach
                </tbody>

              </table> 
               {!!$f->render()!!}

         @include('filiacion.crear')
          </div>

        </div>


</div>
    </main>
@stop 