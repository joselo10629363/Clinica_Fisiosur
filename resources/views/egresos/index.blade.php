 
@extends('home2')
@section('home2')
 <main class="app-content">
      <div class="app-title">
      <div>
          <h1><i class="fa fa-edit"></i> Registro de Egresos </h1>
          <p>Registro de egresos y registro de conceptos de egresos</p>
        </div>


        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Registro egresos</li>
          <li class="breadcrumb-item"><a href="#">Registro </a></li>
        </ul>
      </div>
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
      <div class="footer" style=" height: 70px; border-radius:8px; background-color:#A3E4D7"><br>
       
       
      <div class="row">
        
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Registro de Egreso</h3>
            <div class="tile-body">

            <form class="form-group"  method="POST" autocomplete="off" action="{{route('egreso.store')}}" enctype="multipart/form-data" >
                 @csrf
       
      

           
       
      <div class="form-group">
                    <label for="">Concepto del egreso</label>  
                <select  name="concepto_id"  required=" " class="form-control">
                      <option value="">---Seleccionar------  </option>
                      @foreach($conceptos as $p)
                      <option value="{{$p['id']}}">{{$p['nombre']}}</option>
                    @endforeach
                    </select> 
                  </div>

                <div class="form-group">
                    <label for="">Usuario del egreso</label>  
                <select  name="usuario_id" required=" " class="form-control">
                      <option value="">---Seleccionar----  </option>
                      @foreach($usuarios as $p)
                      <option value="{{$p['id']}}">{{$p->persona->nombre}} {{$p->persona->apellido1}}{{$p->persona->apellido2}}</option>
                    @endforeach
                    </select> 
                  </div>
                  

                <div class="form-group">
                    <label for="">Monto Total</label>  
                  <div class="input-group">

                  <input class="form-control"  type="text"  maxlength="10" name="monto" placeholder="Monto Total"required=""/> <div class="input-group-prepend"><span class="input-group-text">Bs</span></div>
                    </div>            
                
                     </div>



                    <div class="form-group">
                    <label for="">Descripcion</label>
                    <textarea class="form-control" required=" " name='descripcion'  rows="3"></textarea>
                  </div> 

               
                 <button type="subtmit" class=" btn btn-primary"><i class="fa fa-fw fa-lg fa-check-circle"></i>Guardar</button>
              </form>

            </div>
           
          </div>
        </div>


        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Listado de los conceptos de egreso </h3>
             <a href="#" class="btn btn-primary pull-right" data-toggle="modal" data-target="#create"><i class="fa fa-plus"></i>Nuevo</a>
            <div class="tile-body">
                          <table class="table table-hover table-striped">
                <thead>
                  <tr style="background-color:#5DADE2 ">
                    
                    <th>Nombre</th>
                    <th colspan="2">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($conceptos as $concepto)
                 <tr>
               
                <td>{{$concepto->nombre}}</td>
                 
             <td width="10px"><a  data-toggle="modal"  class="btn btn-warning btn-sm"  data-target="#editar{{$concepto->id}}">Editar</a></td>
           <div class="modal fade" id="editar{{$concepto->id}}">
      <div class="modal-dialog">
        <div class="modal-content">
          <div  class="modal-header" style=" background-color: #3D8B7D" >
             <h3>Editar concepto de egreso</h3>
            <button class="btn btn-danger btn-sm" type="button" class="close" data-dismiss="modal">
              <span>&times;</span>
            </button>
         
          </div>
          <div class="modal-body">
<form class="form-group"  method="POST" action="{{route('concepto.update',$concepto->id)}}" enctype="multipart/form-data" >
   @method('PUT')
            @csrf
  <div class="form-group">
    <label for="">Nombre</label>
    <input  type="text"  required="" value="{{$concepto->nombre}}" name="nombre" maxlength="20" class="form-control">
    </div>
     
     <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">
            Cancelar
  <button type="subtmit" class=" btn btn-primary pull-right"><i class="fa fa-fw fa-lg fa-check-circle"></i>Actualizar</button>
</div>
 </form> 
          </div>

          <div class="modal-footer" style="background-color:  #48C9B0">
           
          </div>
        </div>
        
      </div>
    </div>

              </tr>

                  @endforeach
                </tbody>

              </table> 
               {!!$conceptos->render()!!}
        
         @include('egresos.create')
  
            </div>
            <div class="tile-footer">
              <div class="row">
               
              </div>
            </div>
          </div>
        </div>
         <div class="tile-footer">
               

            </div> 
              <table class="table table-hover table-striped">
                <thead>
                  <tr style="background-color:#5DADE2 ">
                    <th>ID</th>
                  <th>Usuario</th>
                    <th>Concepto</th>
                    <td>Monto Bs</td>
                    <th>Descripcion</th>
                    <th>Fecha</th>
                    <th>Estado</th>
                    <th colspan="3">&nbsp; Accion</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($egresos as $egreso)
                 <tr>
               
                <td>{{$egreso->id}}</td>
                <td class="mailbox-messages mailbox-name" ><a style="display:block"><i class="fa fa-user"></i>&nbsp;&nbsp; 
                  {{$egreso->usuario->persona->nombre}}   {{$egreso->usuario->persona->apellido1}} 
                 {{$egreso->usuario->persona->apellido2}}
                  </td>
                     <td>{{$egreso->concepto->nombre}}</td>
                   <td>{{$egreso->monto_total}} </td>
                     <td>{{$egreso->descripcion}}</td>
                 
                  <td>{!! \Carbon\Carbon::parse($egreso->fecha)->format('d-m-Y') !!}</td>
                 <td>{{$egreso->estado}}</td>
          
               <td>
                
 @if ($egreso['estado']=="Anulado")
     
                  <button class="btn btn-danger btn-sm">
                   <i class="fa fa-ban" aria-hidden="true"></i>
                  </button>
                
                @elseif ($egreso['estado']=="Activo")

<a href="" data-target="#modal-delete-{{$egreso->id}}" data-toggle="modal">
                  <button class="btn btn-success btn-sm">
                    Anular
                  </button>
                </a>
 @endif
                  
                
                 </td>
              </tr>
              @include('egresos.modal')
                  @endforeach
                </tbody>

              </table> 
               {!!$egresos->render()!!}
          </div>
           <hr align="left" noshade="noshade" size="2" width="50%" />
           <p>Total egresos Mes:|{{$mes}}</p>
           <p>Total egresos Año actual:|{{$anual}}</p>
            <p>Total egresos realizados:|{{$egre}}</p>
         
         
      </div>
    </main>
    @stop