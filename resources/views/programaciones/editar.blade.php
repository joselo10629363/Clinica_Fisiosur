@extends('plantillamedico')
@section('medico2')
<main class="app-content">
    <div class="app-title">
         
<div></div>

        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Evolucion</li>
          <li class="breadcrumb-item"><a href="#">Editar programacion</a></li>
        </ul>
      </div> 

       <div class="row">
        <div class="col-md-10">
          <div class="tile">
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
            <div class="row">

              <div class="col-lg-12">
             <div class="modal-footer" style=" border-radius:8px; background-color:#A3E4D7">

              <h3 style="padding-right: 300px">Editar Programacion para Tratamiento</h3>
           </div>
           <script src="https://code.jquery.com/jquery-3.2.1.js"></script>

    <link href="{{url('/')}}/clockpicker.css" rel="stylesheet" />
<script src="{{url('/')}}/clockpicker.js"></script>
<link href="{{url('/')}}/clockpicker.css" rel="stylesheet" />
                <form class="form-group"  method="POST" autocomplete="off" action="{{route('programacion.update',$programacion->id)}}" enctype="multipart/form-data" >
               @method('PUT')

                   @csrf

                   
   <div class="form-group">
<label for=""> Seleccionar fecha</label>
<div class="input-group">
<div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-calendar" aria-hidden="true"></i></span></div>
    <input class="form-control" id="demoDate" type="text" value="{{$programacion->fecha}}" name="fecha" placeholder="Seleccionar fecha"required=""/> 
 </div>
 </div> 

 <label > Dias de tratamiento  </label>
          <div class="form-group">
            <div class="input-group">
       
    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-calendar-check-o" aria-hidden="true"></i></span></div>

    <select  class="form-control"  name="dia"  required=""  id="demoSelect" value="{{ $programacion->dia}}"  multiple="multiple">

                <optgroup label="Selecionar dias">
              
                <option selected>{{ $programacion->dia}}</option>
                  <option value="todos">Todos los dias</option>
                  <option value="Lunes" >Lunes</option>
                  <option  value="Martes">Martes</option>
                  <option value="Miercoles">Miercoles</option>
                  <option value="Jueves" >Jueves</option>
                  <option value="Viernes" >Viernes</option>
                  <option value="Sabado" >Sabado</option>
                </optgroup>
              </select>
                  </div>
                  </div>


  

<div class="form-group">
<label >Hora de Tratamiento</label>
<div class="input-group clockpicker " data-autoclose="true">
<span class="input-group-addon">

  <span class="input-group-text" style=" height: 35px;/*startDM*/background-color: #222222 !important;color: #eeeeee !important;/*endDM*/;/*startDM*/background-color: #222222 !important;color: #eeeeee !important;/*endDM*/"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
<span class="glyphicon glyphicon-time"></span>
</span>
<input type="text" class="form-control" name="horario" required="" value="{{$programacion->horario}}" placeholder="Selecione hora" />
</div>
</div>
                 <div class="form-group">
                    <label for="">Estado del tratamiento</label>  
                <select  name="estado" value="{{$programacion->estado}}"  class="form-control">

                      <option value="Activo">Activo  </option>
                      <option value="Inactivo">Desactivado</option>
                     
                    </select> 
                  </div>


                  <button type="subtmit" class=" btn btn-primary pull-right"><i class="fa fa-fw fa-lg fa-check-circle"></i>Actualizar</button>
                  <button type="button"  class="btn btn-danger pull-right" onclick="history.back()" >Cancelar</button> 
                   <button type="button"  class="btn btn-danger"onclick="history.go(-2);" >Salir</button> 
                </form> 
              </div>
             
            </div>

</div>
   



          </div>
        </div>


      </div>  

    </main>
    <script type="text/javascript">

$('.clockpicker').clockpicker();
</script>
          </div>

          <div class="modal-footer" style="background-color:  #48C9B0">
           
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
    <!-- Page specific javascripts-->
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
        format: "dd/mm/yyyy",
        autoclose: true,
        todayHighlight: true
      });
      
      $('#demoSelect').select2();
    </script>
    <!-- Google analytics script-->
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