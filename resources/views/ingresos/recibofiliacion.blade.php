 
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
         
          <div class="tile" style="background-color: #AEE5F9" >
            <h3 class="tile-title"></h3>
            <div class="modal-footer" style=" border-radius:8px; background-color:#5DADE2">
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
                    <label for="">Monto Total</label>  
                  <div class="input-group">

   <input class="form-control"  type="text" maxlength="10"  name="monto" placeholder="Monto Total"required=""/> <div class="input-group-prepend"><span class="input-group-text">Bs</span></div>
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
                 <button type="subtmit" class=" btn btn-primary pull-ringh"><i class="fa fa-fw fa-lg fa-check-circle"></i>Guardar</button>
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
            
                     <a style="font-style:italic; font-weight:bold;">Pago efectuado : {{$ingreso->monto_total}}</a><br>
                     <a style="font-style:italic; font-weight:bold;" >Saldo : {{$ingreso->saldo}}</a><br>
                      <a style="font-style:italic;"class="card-text pull-left">Fecha : {{$ingreso->created_at}}. </a>
                </div>
                
                
              </div>
               <div class="row d-print-none mt-2">
                <div class="col-12 text-right"><a class="btn btn-primary btn-sm" href="javascript:window.print();" target="_blank"><i class="fa fa-print"></i> </a></div>
              </div>
            </section>
            </div>

              </form>

              <form action="{{route('ingreso.destroy',$ingreso->id)}}" method="POST">
                  {{csrf_field()}}
                  <input type="hidden" name="_method"   value="DELETE">
                  <button class="btn  pull-right btn-sm" ><i class="fa fa-trash" aria-hidden="true"></i></button>
                </form><br>
               
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
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-72504830-1', 'auto');
        ga('send', 'pageview');
      }
    </script>
    @stop