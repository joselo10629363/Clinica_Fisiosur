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


<div class="app-title">
        <div class="clearix"></div>
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Generar reporte en pdf </h3>
            <div class="tile-body">
              <form class="row" method="POST" autocomplete="off"  action="{{route('egresospdf.store')}}" enctype="multipart/form-data">
             @csrf
                <div class="form-group col-md-3">
                
                  <select  name="concepto_id"   class="form-control">
                      <option value="">---Seleccionar concepto</option>
                    @foreach($conceptos as $concepto)
                      <option value="{{$concepto['id']}}">{{$concepto['nombre']}}</option>
                    @endforeach
                    </select> 
                </div>
                <div class="form-group col-md-3">
                  <div class="input-group">
                 <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-calendar" aria-hidden="true"></i></span></div>
                <input class="form-control" id="demoDate" type="text" name="fecha1" placeholder="Seleccionar fecha"required=""/> 
                </div>
                </div>

                <div class="form-group col-md-3">
                  <div class="input-group">
               <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-calendar" aria-hidden="true"></i></span></div>
              <input class="form-control" id="demo" type="text" name="fecha2" placeholder="Seleccionar fecha"required=""/> 
              </div>
                </div>
                 

                <div class="form-group col-md-1 align-self-end">
                  <button type="subtmit" class="btn btn-primary"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></button>
                </div>
              </form>
            </div>
          </div>
        </div>
         
        
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

                  
                  
                              <td>{!! \Carbon\Carbon::parse($egreso->fecha)->format('d-m-Y') !!}</td>

                
                </tr>
                 @endforeach
                </tbody>
                     
              </table>
            </div>
            <hr align="left" noshade="noshade" size="2" width="50%" />
           <p>Total egresos Mes:|{{$mes}}</p>
           <p>Total egresos Año actual:|{{$anual}}</p>
            <p>Total egresos realizados:|{{$egre}}</p>
         
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
     <script src="{{url('/')}}/js/plugins/pace.min.js"></script>
<script type="text/javascript" src="{{url('/')}}/js/plugins/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="{{url('/')}}/js/plugins/select2.min.js"></script>
    <script type="text/javascript" src="{{url('/')}}/js/plugins/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
      $('#sl').click(function(){
        $('#tl').loadingBtn();
        $('#tb').loadingBtn({ text : "Signing In"});
      });
      
      $('#el').click(function(){
        $('#tl').loadingBtnComplete();
        $('#tb').loadingBtnComplete({ html : "Sign In"});
      });
      
      $('#demoDate').datepicker({
        format: "yyyy/mm/dd",
        autoclose: true,
        todayHighlight: true
      });
      
      $('#demoSelect').select2();
    </script>
     
    <script type="text/javascript">
      $('#sl').click(function(){
        $('#tl').loadingBtn();
        $('#tb').loadingBtn({ text : "Signing In"});
      });
      
      $('#el').click(function(){
        $('#tl').loadingBtnComplete();
        $('#tb').loadingBtnComplete({ html : "Sign In"});
      });
      
      $('#demo').datepicker({
        format: "yyyy/mm/dd",
        autoclose: true,
        todayHighlight: true
      });
      
      $('#demoSelect').select2();
    </script>
    <script type="text/javascript" src="{{url('/')}}/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="{{url('/')}}/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    <!-- Google analytics script-->
</main>
    @stop