

    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>

    <link href="{{url('/')}}/clockpicker.css" rel="stylesheet" />
<script src="{{url('/')}}/clockpicker.js"></script>
<link href="{{url('/')}}/clockpicker.css" rel="stylesheet" />

 <div class="modal fade" id="crea">
      <div class="modal-dialog">
        <div class="modal-content">
          <div  class="modal-header" style=" background-color: #48C9B0" >
             <h1>Programar Tratamiento</h1>
            <button class="btn btn-danger btn-sm" type="button" class="close" data-dismiss="modal">
              <span>&times;</span>
            </button>
         
          </div>
          <div class="modal-body">
        

        <form class="form-group"  method="POST" action="{{route('programacion.store')}}" enctype="multipart/form-data" >
            @csrf

   <div class="form-group">
<label for=""> Seleccionar fecha</label>
<div class="input-group">
<div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-calendar" aria-hidden="true"></i></span></div>
    <input class="form-control" id="demoDate" type="text" name="fecha" placeholder="Seleccionar fecha"required=""/> 
 </div>
 </div>
          <div class="form-group">
            <div class="input-group">
        <label for="">Dias de tratamientos</label>
                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-calendar-check-o" aria-hidden="true"></i></span>

    <select style="width:400px;" class="form-control" name="dia"  id="demoSelect" multiple="multiple">
                <optgroup label="Selecionar dias">
                  <option >Todos los dias</option>
                  <option value="lunes" >Lunes</option>
                  <option  value="martes">Martes</option>
                  <option value="miercoles">Miercoles</option>
                  <option value="jueves" >Jueves</option>
                  <option value="viernes" >Viernes</option>
                  <option value="sabado" >Sabado</option>
                </optgroup>
              </select>
                  </div></div>
                  </div>




<div class="form-group">
<label >Hora de Tratamiento</label>
<div class="input-group clockpicker " data-autoclose="true">
<span class="input-group-addon">

  <span class="input-group-text" style=" height: 35px;/*startDM*/background-color: #222222 !important;color: #eeeeee !important;/*endDM*/;/*startDM*/background-color: #222222 !important;color: #eeeeee !important;/*endDM*/"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
<span class="glyphicon glyphicon-time"></span>
</span>
<input type="text" class="form-control" name="horario" placeholder="Selecione hora" />
</div>
</div>
                 <div class="form-group">
                    <label for="">Estado del tratamiento</label>  
                <select  name="estado" id="" class="form-control">
                      <option value="Activo">Activo  </option>
                      <option value="Inactivo">Desactivado</option>
                     
                    </select> 
                  </div>



  <button type="subtmit" class=" btn btn-primary pull-right"><i class="fa fa-fw fa-lg fa-check-circle"></i>Guardar</button>
 </form> 
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

     











