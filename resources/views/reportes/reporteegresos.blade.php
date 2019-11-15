@extends('home2')
@section('home2')
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Listado general de los egresos  </h1>
          <p>Muestra de  todos los egresos realizados y registrados  de  la clinica Fisiosur</p>
         </div>
         
          
         
        
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Reporte egresos</li>
        </ul>
      </div>
 
 <div class="modal-footer" style=" border-radius:8px; background-color:#1F618D">

               
           <h5>Generar Pdf</h5>

     <a  href="# " class="btn btn-warning btn-sm"  ><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Mes</a>
     <a  href=" #" class="btn btn-warning btn-sm  "  ><i class="fa fa-file-pdf-o" aria-hidden="true"></i> todo</a>
 
                 </div>
      <div class="row">
        <div class="col-md-12">
          
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                  
                    <th>Usuario</th>
                    <th>Concepto</th>
                 
                    <th>Total Bs</th>
                     
                    <th>Fecha Registro  </th>
             
                    
                  </tr>
                </thead>
                <tbody>
                  
                  @foreach($egresos as $egreso)
                 <tr>
                <td>{{$egreso->usuario->persona->nombre }} {{$egreso->usuario->persona->apellido1}} {{$egreso->usuario->persona->apellido2}}</td>
                
 
                  <td>{{$egreso->concepto->nombre}}</td>   
                  <td>{{$egreso->monto_total}}</td>

                  
                  
              
                 <td>{{$egreso->created_at}}</td>
                
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