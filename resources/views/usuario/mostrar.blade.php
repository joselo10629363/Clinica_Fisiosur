  
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
                    <h5><a href="#">{{$usuario->persona->nombre}}  {{$usuario->persona->apellido1}} {{$usuario->persona->apellido2}} </a></h5>
                    <p class="text-muted"><small> {{$usuario->rol->nombre}}  </small><br><small> {{$usuario->email}}</small>


                    </p> 
                    
                  </div>
           
                </div>
                 <hr align="left" noshade="noshade" size="2" width="50%" />
                <div class="post-content">
                
                  <p>
                 
                 <div class="row">
                <div class="col-md-6 ">
                   
                   <p>Telefono:| {{$usuario->persona->telefono}} </p>
                     <p>Domicilio:| {{$usuario->persona->domicilio}} </p>
                     <p>Cedula:| {{$usuario->persona->cedula}} </p>
                       <p>Genero:| {{$usuario->persona->genero}} </p>
                    

                </div>
               
              </div>
                 </p>

                  
                </div>
                <ul class="post-utility">
                  <li class="likes"><a href="#"> <i class="fa fa-user-md" aria-hidden="true"></i>    </a></li>
                  
                  <li class="comments"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>{{$usuario->created_at}}   </li>
                </ul>
              </div>
           
      
                 
      
               
            </div>
            
          </div>
        </div>
      </div>
    </main>
    @stop