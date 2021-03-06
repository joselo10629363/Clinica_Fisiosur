 <!DOCTYPE html>
<html lang="es">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Administracion</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
     <header class="app-header"><a style=" color:#F5DA81; font-size: 40px "  class="app-header__logo" href="#">C. Fisiosur</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        <!--Notification Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
           
        </li>
        <!-- User Menu-->
       <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
             
            <li><a class="dropdown-item" href="/logout"><i class="fa fa-sign-out fa-lg"></i> Cerrar sesion</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img width="65px" height="65px" class="app-sidebar__user-avatar" src="{{url('/')}}/imagenes/img/administradora.jpg" alt="User Image">
        <div>
          
          <p class="app-sidebar__user-name">{{auth()->user()->persona->nombre}}</p>
        
          <p class="app-sidebar__user-designation">{{auth()->user()->rol->nombre}}</p>

        </div>
      </div>
      <ul class="app-menu">
         <li class="app-menu__item "style="background-color:#1F618D"   class="header">NAVEGACION PRINCIPAL</li>
       
       <li><a class="app-menu__item " href="{{route('paciente.index')}}"><i class="app-menu__icon  fa fa-medkit" aria-hidden="true"></i><span class="app-menu__label">Gestionar pacientes</span></a></li>
        
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-database" aria-hidden="true"></i><span class="app-menu__label">Reportes</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{route('reporte.index')}}"><i class="icon fa fa-circle-o"></i>Pacientes</a></li>
            <li><a class="treeview-item" href="{{route('ingresospdf.index')}} "><i class="icon fa fa-circle-o"></i> Ingresos  </a></li>
            <li><a class="treeview-item" href="{{route('egresospdf.index')}}"><i class="icon fa fa-circle-o"></i> Egresos</a></li>
            
          </ul>
        </li>

  <li><a class="app-menu__item " href="{{route('ingreso.index')}}"><i class="app-menu__icon fa fa-money" aria-hidden="true"></i><span class="app-menu__label">Gestionar Ingresos</span></a></li> 

  
<li><a class="app-menu__item " href="{{route('egreso.index')}}"><i class="app-menu__icon fa fa-cc" aria-hidden="true"></i><span class="app-menu__label">Gestionar Egresos</span></a></li>
<li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-user-circle-o" aria-hidden="true"></i><span class="app-menu__label">Usuario y Roles</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{route('usuario.index')}}"><i class="icon fa fa-user-plus" aria-hidden="true"></i>Usuarios</a></li>
            <li><a class="treeview-item" href="{{route('rol.index')}}"><i class="icon fa fa-male" aria-hidden="true"></i>Roles</a></li>
            
            
          </ul>
        </li>
 <li><a class="app-menu__item " href="{{route('filiacion.index')}}"><i class="app-menu__icon fa fa-id-badge" aria-hidden="true"></i><span class="app-menu__label">Afiliacion</span></a></li>

 
      
      </ul>
    </aside>
 <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Panel de administracion</h1>
          <p>Muestra de datos mas relevantes de los registros en la clinica Fisiosur</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Inicio</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
              <h4>Pacientes</h4>
              <p><i class="fa fa-check-circle-o" aria-hidden="true"></i><b> {{$paciente}}</b></p>
            </div>
          </div>
        </div>

         <div class="col-md-6 col-lg-3">
          <div class="widget-small danger coloured-icon"><i class="icon fa fa-heartbeat fa-3x"></i>
            <div class="info">
              <h4>Tratamientos en curso</h4> 
              <p><i class="fa fa-check-circle-o" aria-hidden="true"></i><b> {{$programacion}}</b></p>
            </div>
          </div>
        </div>




<div class="col-md-6 col-lg-3">
          <div class="widget-small info coloured-icon"><i class=" icon fa fa-user-md fa-3x"></i>
            <div class="info">
              <h4>Medicos</h4>
              <p><i class="fa fa-check-circle-o" aria-hidden="true"></i><b>{{$medico}}</b></p>
            </div>
          </div>
        </div>



        <div class="col-md-6 col-lg-3">
          <div   class="widget-small btn-success coloured-icon"><i class="icon fa fa-usd fa-3x"></i>
            <div class="info">
              <h4>Ingresos</h4>
              <p><i class="fa fa-check-circle-o" aria-hidden="true"></i><b> {{$ingresos}} Bs</b></p>
            </div>
          </div>
        </div>

      <div class="col-md-6 col-lg-3">
          <div   class="widget-small danger coloured-icon"><i class="icon fa fa-money fa-3x"></i>
            <div class="info">
              <h4>Egresos</h4>
              <p><i class="fa fa-check-circle-o" aria-hidden="true"></i><b> {{$egresos}} Bs</b></p>
            </div>
          </div>
        </div>
            
        <div class="col-md-6 col-lg-3">
          <div class="widget-small warning coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
            <div class="info">
              <h4>Afiliados activos</h4>
              <p><b>{{$afiliacion}}</b></p>
            </div>
          </div>
        </div>

         <div class="col-md-6 col-lg-3">
          <div style="background-color: #D1A653"  class="widget-small   coloured-icon"><i class="icon fa fa-user-o fa-3x"></i>
            <div class="info">
              <h4>usuarios</h4>
              <p><i class="fa fa-check-circle-o" aria-hidden="true"></i><b> {{$usuarios}} </b></p>
            </div>
          </div>
        </div>
          <div class="col-md-6 col-lg-3">
          <div class="widget-small info coloured-icon"><i class=" icon fa fa-wheelchair-alt fa-3x"></i>
            <div class="info">
              <h4>{{$fecha}}</h4>
              <p><i class="fa fa-check-circle-o" aria-hidden="true"></i><b> {{$atender}} Pacientes</b></p>
            </div>
          </div>
        </div>
      </div>
     
      <div class="row">
        <div class="col-md-8">
          <div class="tile">
            <center><h5 >AGENDA MEDICA</h5></center>
             
              <table class="table table-hover table-striped">
                <thead>
                  <tr style="background-color:#5DADE2">
                    <th>Paciente</th> 
                     <th>Fecha</th>
                     <th>Horario</th>
                    <th>Dia</th>
                      <th>Estado</th>
                   
                    <th colspan="3">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>  
               <tr>
                
                @foreach($programaciones as $programacion)

                <td>{{$programacion->diagnostico->paciente->persona->nombre}}
                 {{$programacion->diagnostico->paciente->persona->apellido1}} {{$programacion->diagnostico->paciente->persona->apellido2}}</td>
                 <td>{{$programacion->fecha}}</td>
                  <td>{{$programacion->horario}}</td>
                   <td>{{$programacion->dia}}</td>
                    <td>{{$programacion->estado}}</td>
                 
                   </tr>

                  @endforeach
                </tbody>

              </table> 
               
                {!!$programaciones->render()!!}
            
          </div>
        </div>

        
        <div class="col-md-4">
          <div class="tile">
            <CENTER><h5>AFILIADOS</h5></CENTER>
              <table class="table table-hover table-striped">
                <thead>
                  <tr style="background-color:#5DADE2">
  
                   
                    <th>Nombre</th>
                    <th>Estado</th>
                     <th>Fecha</th>
                      
                   
                    <th colspan="3">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>  
               <tr>
           @foreach($afi as $af)
              
                
             
              <td style="font-style:italic; font:bold; color: #DF7401; font-size: 20px;"> {{$af->nombre}}</td>  

                 <td>{{$af->estado}}</td>
                  <td>{{$af->created_at}}</td>
                  
                 
                   </tr>

                  @endforeach
                </tbody>

              </table> 
             
 
              
            

          
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="js/plugins/chart.js"></script>
    <script type="text/javascript">
      var data = {
      	labels: ["January", "February", "March", "April", "May"],
      	datasets: [
      		{
      			label: "My First dataset",
      			fillColor: "rgba(220,220,220,0.2)",
      			strokeColor: "rgba(220,220,220,1)",
      			pointColor: "rgba(220,220,220,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(220,220,220,1)",
      			data: [65, 59, 80, 81, 56]
      		},
      		{
      			label: "My Second dataset",
      			fillColor: "rgba(151,187,205,0.2)",
      			strokeColor: "rgba(151,187,205,1)",
      			pointColor: "rgba(151,187,205,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(151,187,205,1)",
      			data: [28, 48, 40, 19, 86]
      		}
      	]
      };
      var pdata = [
      	{
      		value: 300,
      		color: "#46BFBD",
      		highlight: "#5AD3D1",
      		label: "Complete"
      	},
      	{
      		value: 50,
      		color:"#F7464A",
      		highlight: "#FF5A5E",
      		label: "In-Progress"
      	}
      ]
      
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
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
    <div class="container">
      
    </div>
 
  </body>
</html>