
@extends('home2')
@section('home2')
<main class="app-content">
 <div class="row">
       <div class="clearix"></div>
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">LISTADO DE   AFILIADOS</h3>

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
             <a href="#" class="btn btn-primary pull-right" data-toggle="modal" data-target="#crear"><i class="fa fa-plus"></i>Nuevo</a>

              <table class="table table-hover table-striped">
                <thead>
                  <tr style="background-color:#5DADE2 " >
                    <th>Nombre</th>
                     <th>Descripcion</th>
                     <th>Fecha</th>
                     <th>Estado</th>
                    <th colspan="2">&nbsp;</th>
                  </tr >
                </thead>
                <tbody>
                  @foreach($f as $filia)
                 <tr>
                <td>{{$filia->nombre}}</td>
               <td>{{$filia->descripcion}}</td>
                <td>{{$filia->created_at}}</td>
                <td>{{$filia->estado}}</td>
                <td width="10px"><a  data-toggle="modal"  class="btn btn-warning btn-sm"  data-target="#editar{{$filia->id}}">Editar</a></td>

                   <div class="modal fade" id="editar{{$filia->id}}">
      <div class="modal-dialog">
        <div class="modal-content" >
          <div class="modal-header" style="background-color:#73C6B6">
             <h1>Editar Afiliacion</h1>
  <button class="btn btn-danger btn-sm" type="button" class="close" data-dismiss="modal">
              <span>&times;</span>
            </button>
         
          </div>
          <div class="modal-body">
        <form class="form-group"  method="POST" action="{{route('filiacion.update', $filia->id)}}" enctype="multipart/form-data" >
          @method('PUT')
            @csrf
  <div class="form-group">
    <label for="">Nombre</label>
    <input  type="text"  required="" placeholder="Nombre" name="nombre" value="{{$filia->nombre}}" class="form-control">
    </div>

    <div class="form-group">
    <label for="">Descripcion</label>
    <input type="text"   required="" placeholder="Descripcion" name="descripcion" value="{{$filia->descripcion}}" class="form-control">
    </div>

    <div class="form-group">
                    <label for="">Estado del Afiliado</label>  
                <select  name="estado" class="form-control" >
                      <option value="{{$filia->estado}}"  >{{$filia->estado}} </option>
                      <option value="Activo">Activo </option>
                      <option  value="Inactivo">Inactivo</option>
                    </select> 
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
                 <td>
                <form action="{{route('filiacion.destroy', $filia->id)}}" method="POST">
                  {{csrf_field()}}
                  <input type="hidden" name="_method"   value="DELETE">
                  <button  class="btn btn-danger btn-sm" onclick="return confirm('No deberias de eliminar  el afiliado.Estas seguro de eliminar?')">Eliminar</button>
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
@endsection