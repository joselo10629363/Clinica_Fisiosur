
@extends('plantillamedico')
@section('medico2')
<main class="app-content">
     <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Registro de Patologias</h1>
          <p>Muestra el listado  de las patologias  para  editar y eliminar</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
         
          <li class="breadcrumb-item"><a href="#">patologias</a></li>
        </ul>
      </div> 
 <div class="row">
       <div class="clearix"></div>
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">LISTADO  DE LAS PATOLOGIAS</h3>
             <a href="#" class="btn btn-primary pull-right" data-toggle="modal" data-target="#create"><i class="fa fa-plus"></i>Nuevo</a>
              
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
                  @foreach($patologias as $patologia)
                 <tr>
                <td>{{$patologia->id }}</td>
                <td>{{$patologia->nombre}}</td>
               <td>{{$patologia->descripcion}}</td>
                <td width="10px"><a href="#"  class="btn btn-warning btn-sm">Editar</a></td>
          
                 <td>
                <form action="{{route('patologia.destroy', $patologia->id)}}" method="POST">
                  {{csrf_field()}}
                  <input type="hidden" name="_method"   value="DELETE">
                  <button  class="btn btn-danger btn-sm">Eliminar</button>
                </form>
                 </td>
              </tr>
                  @endforeach
                </tbody>

              </table> 
               {!!$patologias->render()!!}

         @include('patologia.crear')
          </div>

        </div>


</div>
    </main>
@stop 