  
@extends('home2')
@section('home2')
   <main class="app-content">
      <div class="row user">
         <div class="col-md-10">
          <div class="tab-content">
            <div class="tab-pane active" id="user-timeline">
              <div class="timeline-post">
                <div class="post-media"><a href="#"><img  width="65px" height="65px" src="{{url('/')}}/imagenes/img/user.jpg"></a>
                  <div class="content">
                    <h5><a href="#">{{$pacientes->persona->nombre}}  {{$pacientes->persona->apellido1}} {{$pacientes->persona->apellido2}} </a></h5>
                    <p class="text-muted"><small> {{$pacientes->afiliacion->nombre}}  </small><br><small> CI: {{$pacientes->persona->cedula}}</small>


                    </p> 
                    
                  </div>
           
                </div>
                 <hr align="left" noshade="noshade" size="2" width="50%" />
                <div class="post-content">
                
                  <p>
                 
                 <div class="row">
                <div class="col-md-3 ">
                   
                   <p>Telefono:| {{$pacientes->persona->telefono}} </p>
                     <p>Domicilio:| {{$pacientes->persona->domicilio}} </p>
                      <p>Ocupacion:| {{$pacientes->ocupacion}} </p>
                       <p>Genero:| {{$pacientes->persona->genero}} </p>
                     <p style="font-style:italic; font-weight:bold;">Afiliacion:{{$pacientes->afiliacion->nombre}}  </p> 

                </div>
                
               
              </div>
          <p>Observacion.:| {{$pacientes->descripcion}} </p>
                  
                 
               
                   
                 </p>

                  
                </div>
                <ul class="post-utility">
                  <li class="likes"><a href="#"> <i class="fa fa-user-md" aria-hidden="true"></i>    </a></li>
                  
                  <li class="comments"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>{{$pacientes->created_at}}   </li>
                </ul>
              </div>
           
      
                 
      
               
            </div>
            
          </div>
        </div>
      </div>
    </main>
    @stop