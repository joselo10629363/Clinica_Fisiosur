@extends('plantillamedico')
@section('medico2')
<main class="app-content">
    <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i>Listado de los pacientes </h1>
          <p>Muestra de los pacientes ingresados  el dia de hoy</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Registro</li>
          <li class="breadcrumb-item"><a href="#">Atencion del paciente</a></li>
        </ul>
      </div>  
       <div class="row">
        <div class="col-md-12">
          <div class="tile">
            
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
              
              
                <td class="mailbox-messages mailbox-name" ><a style="display:block"><i class="fa fa-user"></i>&nbsp;&nbsp;{{$paciente->persona->nombre }} {{$paciente->persona-> apellido1}} {{$paciente->persona-> apellido2}}</td>
                  <td>{{$paciente->afiliacion->nombre}}</td>
                  <td>{{$paciente->persona->cedula}}</td>
                  
                  <td>{{$paciente->persona->domicilio}}</td>
                <td>{{$paciente->ocupacion}}</td>
           
                <td>{{$paciente->created_at}}</td>

                    <td  >

                 <a href="{{route('atencion.show', $paciente->id)}}"  class="btn btn-success btn-sm ">Atender</a></td>
                </tr>
                 @endforeach
                </tbody>
                     
              </table>
               
          </div>
        </div>
 

      </div>           

    </main>


 
  
        
</body>
   <script type="text/javascript" src="{{url('/')}}/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="{{url('/')}}/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
@stop 