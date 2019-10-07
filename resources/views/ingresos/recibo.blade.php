 
@extends('home2')
@section('home2')
 <main class="app-content">
      <div class="app-title">
        <h3>Generar Recibo  para el paciente</h3>
      
         
     

       
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Programaciones</li>
          <li class="breadcrumb-item"><a href="#">Registro Evolucion</a></li>
        </ul>
      </div>
      
         @include('rol/fragment/info')
      
      <div class="row"  >
        
        <div class="col-md-6" >
         
          <div class="tile" style="background-color: #AEE5F9" >
            <h3 class="tile-title">Recibo</h3>
            <div  style=" height:70px; " >
      <div>
                    <a style="font-style:italic;"class="card-text pull-left">Paciente: {{$programacion->diagnostico->paciente->persona->nombre}}  {{$programacion->diagnostico->paciente->persona->apellido1}} {{$programacion->diagnostico->paciente->persona->apellido2}} </a><br>
                     <a style="font-style:italic;"class="card-text pull-left">Cedula: {{$programacion->diagnostico->paciente->persona->cedula}}   </a><br></div>
                     <div>
 <a style="font-style:italic;"class="card-text pull-left">Afiliacion: {{$programacion->diagnostico->paciente->afiliacion->nombre}}   </a><br>

            <a style="font-style:italic; font-weight:bold;" class="card-text">Patologia: {{$programacion->diagnostico->patologia->nombre}} </a>
                   </div>
                 </div>
            <div class="tile-body">
 
            <form class="form-group"  method="POST" action="{{route('ingreso.store')}}" enctype="multipart/form-data" >
                 @csrf
        <div class="form-group">
                    <label for="">Paciente</label>  
                <select  name="paciente_id" class="form-control">     
      <option value="{{$programacion->diagnostico->paciente->id}}">{{$programacion->diagnostico->paciente->persona->nombre}}  {{$programacion->diagnostico->paciente->persona->apellido1}} {{$programacion->diagnostico->paciente->persona->apellido2}}</option>
               
                    </select> 
                  </div>


        <div class="form-group">
                    <label for="">Usuario</label>  
                <select  name="usuario_id" id="" class="form-control">
                      <option>---Seleccionar </option>
                      @foreach($usuarios as $usuario)
                      <option value="{{$usuario['id']}}">{{$usuario->persona->nombre}} {{$usuario->persona->apellido1}} {{$usuario->persona->apellido2}}</option>
                    @endforeach
                    </select> 
                  </div>

          
                <div class="form-group">
                    <label for="">Monto Total</label>  
                  <div class="input-group">

   <input class="form-control"  type="text" name="monto_total" placeholder="Monto Total"required=""/> <div class="input-group-prepend"><span class="input-group-text">Bs</span></div>
                    </div>            
                
                     </div>
   

      <div class="form-group">
    <label for="">Concepto</label>
    <input  type="text"  required="" placeholder="Concepto" name="concepto" class="form-control">
    </div>
           
        
                <div class="form-group">
                    <label for="">Saldo</label>  
                  <div class="input-group">

                  <input class="form-control"  type="text" name="saldo" placeholder="saldo"required=""/> <div class="input-group-prepend"><span class="input-group-text">Bs</span></div>
                    </div>            
                
                     </div>

               <div class="form-group">
                    <label for="">Descripcion</label>
                    <textarea class="form-control" name='descripcion'  rows="2"></textarea>
                  </div> 

               
                 <button type="subtmit" class=" btn btn-primary pull-ringh"><i class="fa fa-fw fa-lg fa-check-circle"></i>Guardar</button>
              </form>

            </div>
           
          </div>
        </div>


        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Pagos Anteriores del paciente</h3>
            <div class="tile-body">
              <form class="form-horizontal">

              <h4>Sesion 1</h4>
               <p> El paciente ha presentado una mejora considerable en los nervios de la rodilla de las cuales se seguira apliacando la misma  reglas de cuidado</p>

             <h4>Sesion 2</h4>
               <p> Al inicio de este paciente ha presentado una mejora considerable en los nervios de la rodilla de las cuales se seguira apliacando la misma  reglas de cuidado</p>
              </form>
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