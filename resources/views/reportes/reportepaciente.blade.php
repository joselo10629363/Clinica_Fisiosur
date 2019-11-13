@extends('home2')
@section('home2')
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Listado de todos los pacientes</h1>
          <p>Muestra de  todos los pacientes registrados  y distintas afiliaciones donde se puede buscar un registro especifico ingresando algun dato relacionado al paciente en la caja de busqueda en tiempo real</p>
         </div>
         
          
         
        
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Pacientes</li>
        </ul>
      </div>
 
 <div class="modal-footer" style=" border-radius:8px; background-color:#A3E4D7">

              @foreach($afiliaciones as $afiliacion)
           

     <a  href="{{route('generarpdf.show',$afiliacion->id)}}" class="btn btn-success"  > {{$afiliacion->nombre}}</a>
 @endforeach
                 </div>
      <div class="row">
        <div class="col-md-12">
          
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                  
                    <th>Paciente</th>
                    <th>Afiliacion</th>
                    <th>Cedula</th>
                    <th>Domicilio</th>
                    <th>Ocupacion</th>
                    <th>Fecha ingreso</th>
                     <th> Accion</th>
                    
                  </tr>
                </thead>
                <tbody>
                  
                  @foreach($pacientes as $paciente)
                 <tr>
              
              
                <td>{{$paciente->persona->nombre }} {{$paciente->persona-> apellido1}} {{$paciente->persona-> apellido2}}</td>
                  <td>{{$paciente->afiliacion->nombre}}</td>
                  <td>{{$paciente->persona->cedula}}</td>
                  
                  <td>{{$paciente->persona->domicilio}}</td>
                <td>{{$paciente->ocupacion}}</td>
           
                <td>{{$paciente->created_at}}</td>

                    <td  >

                  <a href=" {{route('reporte.show',$paciente->id)}}}"  class="btn btn-success btn-sm ">informe</a></td>
                </tr>
                 @endforeach
                </tbody>
                     
              </table>
            </div>
          </div>
        </div>
      </div>




<script src="{{url('/')}}/js/jquery-3.2.1.min.js"></script>
    <script src="{{url('/')}}/js/popper.min.js"></script>
    <script src="{{url('/')}}/js/bootstrap.min.js"></script>
    <script src="{{url('/')}}/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <script type="text/javascript" src="{{url('/')}}/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="{{url('/')}}/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    <!-- Google analytics script-->
</main>
    @stop