  
@extends('home2')
@section('home2')
   <main class="app-content">
      <div class="row user">
        <div class="col-md-12">
          <div class="profile">
            <div class="info"><img class="user-img" src="{{url('/')}}/imagenes/img/user.jpg ">

               

              <h4>{{$pacientes->persona->nombre}}</h4>
              <p>{{$pacientes->persona->apellido1}}  {{$pacientes->persona->apellido2}}</p>
              <a style="font-style:italic; font:bold; color: #5DE2CE; font-size: 20px;"> {{$pacientes->afiliacion->nombre}}</a>  
            </div>
            <div class="cover-image"></div>
          </div>
        </div>
        <div class="col-md-3"  >
          <div   class="tile p-2">
            
              <center><h4 style="color:blue">DATOS PERSONALES</h4></center>
           <hr align="left" noshade="noshade" size="2" width="100%" />

              <p>Nombre:|{{$pacientes->persona->nombre}} </p>
               <p>Apellido Paterno:| {{$pacientes->persona->apellido1}} </p>
                <p>Apellido Materno:| {{$pacientes->persona->apellido2}} </p>
                 <p>Cedula I.:| {{$pacientes->persona->cedula}} </p>
                   <p>Telefono:| {{$pacientes->persona->telefono}} </p>
                     <p>Domicilio:| {{$pacientes->persona->domicilio}} </p>
                       <p>Genero:| {{$pacientes->persona->genero}} </p>
                         <p>Fecha R.:| {!! \Carbon\Carbon::parse($pacientes->fecha)->format('d-m-Y') !!} </p>
                         <p>Observacion.:| {{$pacientes->descripcion}} </p>
          </div>
        </div>
        <div class="col-md-9">
          <div class="tab-content">
            <div class="tab-pane active" id="user-timeline">
          

                @foreach($patologias as $patologia)

            
              <div class="timeline-post">
                <div class="post-media"><a href="#"><img  width="65px" height="65px" src="{{url('/')}}/imagenes/img/doctor-thumb-04.jpg"></a>

 


                  <div class="content">
                    <h5><a href="{{route('reporte.edit',$patologia->id)}}">{{$patologia->patologia->nombre}}</a></h5>
                    <p class="text-muted"><small> {{$patologia->medico->nombre}} {{$patologia->medico->apellido}} </small><br><small> {!! \Carbon\Carbon::parse($patologia->created_at)->format('d-m-Y') !!} </small>


                    </p> 
                    
                  </div>
                </div>
                <div class="post-content">
                  @foreach($evoluciones as $evolucion)
                  <p>
                 
                 <div class="row">
                <div class="col-md-3 ">
                     <h5>Sesion N°: {{$evolucion->sesion}}</h5>

                     <a style="font-style:italic; font-weight:bold;">tratamiento : {{$evolucion->tratamiento->nombre}}</a>  
                </div>
                
               
              </div>
             <p> {{$evolucion->observacion}}.</p> 
                  
                 
               
                   
                 </p>

                  @endforeach
                </div>
                <ul class="post-utility">
                  <li class="likes"><a href="#"> <i class="fa fa-user-md" aria-hidden="true"></i> {{ $patologia->medico->nombre}} {{$patologia->medico->apellido}}</a></li>
                  
                  <li class="comments"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>  {!! \Carbon\Carbon::parse($pacientes->fecha)->format('d-m-Y') !!}</li>
                </ul>
              </div>
           
      
                  @endforeach
      
               
            </div>
            
          </div>
        </div>
      </div>
    </main>
    @stop