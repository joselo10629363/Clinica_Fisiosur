 
@extends('home2')
@section('home2')
 <main class="app-content">
      <div class="app-title">
        <h3>Registro de ingresos y emision de comprobante de pago</h3>                                                                
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Afiliados</li>
          <li class="breadcrumb-item"><a href="#">Registro  de ingresos</a></li>
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
      
      <div class="row"  >
        
        <div class="col-md-6" >
         
          <div class="tile" style="background-color: #BFC9CA" >
            <h3 class="tile-title"></h3>
            <div class="modal-footer" style=" border-radius:8px; background-color:#AEB6BF">
               <div>

                <h5>RECIBO</h5>
                </div>
               </div>
           
            <div class="tile-body">
 
            <form class="form-group"  method="POST" autocomplete="off"  action="{{route('ingreso.store')}}" enctype="multipart/form-data" >
                 @csrf
        <div class="form-group">
                <label for="">Afiliado</label>  
                <select  name="afiliacion_id" class="form-control">     
      <option value="{{$afiliados->id}}">{{$afiliados ->nombre}}</option>
               
                    </select> 
                  </div>


        <div class="form-group">
                    <label for="">Recebido por el administrador</label>  
                <select  name="usuario_id"   class="form-control">
                      <option  value="{{$usuario->id}}">{{$usuario->persona->nombre}} {{$usuario->persona->apellido1}} {{$usuario->persona->apellido2}}</option>
                       
                    </select> 
                  </div>

          
                <div class="form-group">
                    <label for="">Monto de pago</label>  
                  <div class="input-group">

   <input class="form-control"  type="text" maxlength="10"  name="monto" placeholder="Pago efectuado"required=""/> <div class="input-group-prepend"><span class="input-group-text">Bs</span></div>
                    </div>            
                
                     </div>
   

      <div class="form-group">
    <label for="">Concepto</label>
    <input  type="text"  required="" placeholder="Concepto" name="concepto" class="form-control">
    </div>
           
        
                <div class="form-group">
                    <label for="">Saldo</label>  
                  <div class="input-group">

                  <input class="form-control"  type="text" maxlength="10" name="saldo" placeholder="saldo"required=""/> <div class="input-group-prepend"><span class="input-group-text">Bs</span></div>
                    </div>            
                
                     </div>

               <div class="form-group">
                    <label for="">Descripcion</label>
                    <textarea class="form-control" name='descripcion' required="" rows="2"></textarea>
                  </div> 
                 <button type="subtmit" class=" btn btn-primary pull-right"><i class="fa fa-fw fa-lg fa-check-circle"></i>Guardar</button><br>

              </form>

            </div>
           
          </div>
        </div>


        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Pagos Anteriores Realizados por el Afiliado</h3>
            <div class="tile-body">
              <form class="form-horizontal">

              
                   @foreach($ingresos as $ingreso)


            <div class="tile-footer">
              <section class="invoice">
              <div class="row">
                
                 <div class="col-md-6" >

                   <a style="font-style:italic; font-weight:bold;" >Afiliado: {{$ingreso->afiliacion->nombre}}</a><br>
                   
                  <a style="font-style:italic;"class="card-text pull-left">Concepto : {{$ingreso->concepto}} </a><br>

                 <a style="font-style:italic; font-weight:bold;" >Recibido por : {{$ingreso->usuario->persona->nombre}}  {{$ingreso->usuario->persona->apellido1}}  {{$ingreso->usuario->persona->apellido2}}</a>
                   
                  </div>
                <div class="col-md-5" >
            
                     <a style="font-style:italic; font-weight:bold;">Pago efectuado : {{$ingreso->monto_total}} Bs</a><br>
                     <a style="font-style:italic; font-weight:bold;" >Saldo : {{$ingreso->saldo}} Bs</a><br>
                      <a style="font-style:italic;"class="card-text pull-left">Fecha :{!! \Carbon\Carbon::parse($ingreso->fecha)->format('d-m-Y') !!}  </a>
                </div>
                
                
              </div>
              
            </section>
            </div>

              </form>

@if ($ingreso['estado']=="Anulado")
     
                  <button class="btn btn-danger btn-sm">
                   <i class="fa fa-ban" aria-hidden="true"></i>
                  </button>
                
                @elseif ($ingreso['estado']=="Activo")

<a href="" data-target="#modal-{{$ingreso->id}}" data-toggle="modal">
                  <button class="btn btn-success btn-sm">
                    Anular
                  </button>
                </a>
 @endif
                      @if ($ingreso['saldo']>"0")
     

<a href="" data-target="#modal-cambia-{{$ingreso->id}}" data-toggle="modal">
                  <button class="btn btn-success btn-sm">
                    Quitar saldo
                  </button>
                </a>
 @endif
       <a href="{{route('ingresospdf.show', $ingreso->id)}}"  class="btn btn-outline-info btn-sm"><i class="fa fa-print"></i></a>
            @include('ingresos.modal')     
                
              @include('ingresos.modals')
               @endforeach
                 {!!$ingresos->render()!!}
            </div>
            <div class="tile-footer">
              <div class="row">
               
              </div>
            </div>
          </div>
        </div>
      
      </div>
    </main>
    
    @stop