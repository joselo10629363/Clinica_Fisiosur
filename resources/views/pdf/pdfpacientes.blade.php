
<!DOCTYPE html>
<html>
<head>
	<title>Generar pdf de los pacientes</title>

	<style >
		
		.table{
		 
			border:1px solid #1656B3;
		}
	</style>
</head>

<body>
	<h4>LISTADO  DE TODOS LOS PACIENTES  ATENDIDOS EN LA CLINICA FISIOSUR  </h4>

<a style="font-style:italic;" class="card-text">Institucion: {{$afiliacion->nombre}} </a><br>
<a style="font-style:italic;" class="card-text">Fecha: {{$hoy}} </a><br>

<table class="table" >
	<thead>
		
		<tr>
                  
                    <th>Pacientes</th>
                  
                    <th>Cedula</th>
                    <th>Domicilio</th>
                    <th>Ocupacion</th>
                    <th>Fecha ingreso</th>


		</tr>
	</thead>
	  <tbody>
                  
                  @foreach($pacientes as $paciente)
                 <tr>
           
                <td>{{$paciente->persona->nombre }} {{$paciente->persona-> apellido1}} {{$paciente->persona-> apellido2}}</td>
               
                  <td>{{$paciente->persona->cedula}}</td>
                  
                  <td>{{$paciente->persona->domicilio}}</td>
                <td>{{$paciente->ocupacion}}</td>
           
                <td>{{$paciente->created_at}}</td>

           

                </tr>
                 @endforeach
                </tbody>
	
</table>
</body>
</html>