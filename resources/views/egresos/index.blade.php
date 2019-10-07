 
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
      
         @include('rol/fragment/info')
      <div class="footer" style=" height: 70px; border-radius:8px; background-color:#A3E4D7"><br>
       
      <a class="btn btn-success  "data-toggle="modal" data-target="#creart"><i class="fa fa-file"></i>Reporte de egresos</a>
                 </div>
      <div class="row">
        
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Registro de Egreso</h3>
            <div class="tile-body">

            <form class="form-group"  method="POST" action="{{route('egreso.store')}}" enctype="multipart/form-data" >
                 @csrf
       
      

           
       
      <div class="form-group">
                    <label for="">Concepto del egreso</label>  
                <select  name="concepto_id" id="" class="form-control">
                      <option>---Seleccionar  </option>
                      @foreach($conceptos as $p)
                      <option value="{{$p['id']}}">{{$p['nombre']}}</option>
                    @endforeach
                    </select> 
                  </div>

                <div class="form-group">
                    <label for="">Usuario del egreso</label>  
                <select  name="usuario_id" id="" class="form-control">
                      <option>---Seleccionar  </option>
                      @foreach($usuarios as $p)
                      <option value="{{$p['id']}}">{{$p->persona->nombre}} {{$p->persona->apellido1}}{{$p->persona->apellido2}}</option>
                    @endforeach
                    </select> 
                  </div>
                  

                <div class="form-group">
                    <label for="">Monto Total</label>  
                  <div class="input-group">

                  <input class="form-control"  type="text" name="monto" placeholder="Monto Total"required=""/> <div class="input-group-prepend"><span class="input-group-text">Bs</span></div>
                    </div>            
                
                     </div>



                    <div class="form-group">
                    <label for="">Descripcion</label>
                    <textarea class="form-control" name='descripcion'  rows="3"></textarea>
                  </div> 

               
                 <button type="subtmit" class=" btn btn-primary"><i class="fa fa-fw fa-lg fa-check-circle"></i>Guardar</button>
              </form>

            </div>
           
          </div>
        </div>


        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Listado de los conceptos de egreso registrados</h3>
             <a href="#" class="btn btn-primary pull-right" data-toggle="modal" data-target="#create"><i class="fa fa-plus"></i>Nuevo</a>
            <div class="tile-body">
                          <table class="table table-hover table-striped">
                <thead>
                  <tr style="background-color:#5DADE2 ">
                    <th width="20px">ID</th>
                    <th>Nombre</th>
                    <th colspan="2">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($conceptos as $concepto)
                 <tr>
                <td>{{$concepto->id }}</td>
                <td>{{$concepto->nombre}}</td>
                <td width="10px"><a href="#"  class="btn btn-warning btn-sm">Editar</a></td>
                 <td>
                <form action="{{route('concepto.destroy', $concepto->id)}}" method="POST">
                  {{csrf_field()}}
                  <input type="hidden" name="_method"   value="DELETE">
                  <button  class="btn btn-danger btn-sm">Eliminar</button>
                </form>
                 </td>
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
         @include('tratamiento.crear')
      </div>
    </main>
    @stop