@extends('home2')
@section('home2')
<main class="app-content">
 
  
      <div class="app-title"  >
        <div class="clearix" ></div>
        <div class="col-md-12" >
          <div class="tile" style="background-color:#1F618D">
            <h3 class="tile-title" >Generar reporte en pdf </h3>
            <div class="tile-body">
              <form class="row" method="POST" autocomplete="off"  action="{{route('generarpdf.store')}}" enctype="multipart/form-data">
             @csrf
                <div class="form-group col-md-3">
                
                  <select  name="afiliacion_id"   class="form-control" required="">
                      <option value="">---Seleccionar afiliacion</option>
                    @foreach($afiliaciones as $afiliacion)
                      <option value="{{$afiliacion['id']}}">{{$afiliacion['nombre']}}</option>
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
                  <button type="subtmit" class="btn btn-warning"><i class="fa fa-file-pdf-o" aria-hidden="true"> PDF</i></button>
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
                  
                    <th>Paciente</th>
                    <th>Afiliacion</th>
                    <th>Cedula</th>
                    <th>Domicilio</th>
                    <th>Ocupacion</th>
                    <th>Fecha ingreso</th>
                     <th>Accion</th>
                    
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
           
                <td>{!! \Carbon\Carbon::parse($paciente->fecha)->format('d-m-Y') !!}</td>

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