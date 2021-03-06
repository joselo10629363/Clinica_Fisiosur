<!DOCTYPE html>
<html>
<head>
    <title>REPORTE DE PACIENTES</title>
    <style type="text/css">
    body{
        font-size: 16px;
        font-family: "Arial";
    }
    table{
        border-collapse: collapse;
    }
    td{
        padding: 6px 5px;
        font-size: 15px;
    }
    .h1{
        font-size: 21px;
        font-weight: bold;
    }
    .h2{
        font-size: 18px;
        font-weight: bold;
    }
    .tabla1{
        margin-bottom: 20px;
    }
    .tabla2 {
        margin-bottom: 20px;
    }
    .tabla3{
        margin-top: 15px;
    }
    .tabla3 td{
        border: 1px solid #000;
    }
     
    .emisor{
        color: red;
    }
    .linea{
        border-bottom: 1px dotted #000;
    }
    .border{
        border: 1px solid #000;
    }
    .fondo{
        background-color: #dfdfdf;
    }
    .fisico{
        color: #fff;
    }
    .fisico td{
        color: #fff;
    }
    .fisico .border{
        border: 1px solid #fff;
    }
    .fisico .tabla3 td{
        border: 1px solid #fff;
    }
    .fisico .linea{
        border-bottom: 1px dotted #fff;
    }
    .fisico .emisor{
        color: #fff;
    }
    .fisico .tabla3 .cancelado{
        border-top: 1px dotted #fff;
    }
    .fisico .text{
        color: #000;
    }
    .fisico .fondo{
        background-color: #fff;
    }
    
    #logo{
        display: none;
  
</style>
</head>
<body>
    <div class=" ">

        <table width="20%" align="right">
                        <tr>
                             
      
                <td height="15"   align="center" class="border"><span class="h3">Inst.:{{$afiliacion->nombre}}   </span></td>
                
                        </tr>
                         
                        <tr>
                            <td height="15"  align="center" class="border"> Nº-000<span class="text"> </span></td>
                        </tr>
                         
                    </table>
        <table width="100%" class="tabla1">

            <tr>
                
                
                    
                </td>
            </tr>
            <tr>
                <td align="center">REPORTE DE PACIENTES - CLINICA FISIOSUR</td>
            </tr>
            <tr>
            	
                <td align="center">Dir.: Av. Santa Cruz N° 1378 entre Cochabamba y Benemeritos  </td>

            </tr>
        </table>
        <table width="100%" class="tabla2">
            <tr>
                 
                   <td width="11%">Comprende:</td>
                <td width="37%" class="linea"><span class="text">de {!! \Carbon\Carbon::parse($inicio)->format('d-m-Y') !!} a  {!! \Carbon\Carbon::parse($fin)->format('d-m-Y') !!}</span></td>
                 
            
                <td width="5%">&nbsp;</td>
                <td width="13%">&nbsp;</td>
                <td width="4%">&nbsp;</td>
                <td width="7%" align="center" class="border fondo"><strong>DÍA</strong></td>
                <td width="8%" align="center" class="border fondo"><strong>MES</strong></td>
                <td width="7%" align="center" class="border fondo"><strong>AÑO</strong></td>
            </tr>
            <tr>
                <td>Emite:</td>
                <td class="linea"><span class="text"> {{auth()->user()->persona->nombre }} {{auth()->user()->persona->apellido1 }} {{auth()->user()->persona->apellido2 }}</span></td>
                 
                 
                <td>Rol:</td>
               <td class="linea"><span class="text">{{auth()->user()->rol->nombre}} </span></td>
                   
                <td>&nbsp;</td>
                <td align="center" class="border"><span class="text">{{ $dia }}</span></td>
                <td align="center" class="border"><span class="text">{{ $me }}</span></td>
                <td align="center" class="border"><span class="text">{{ $anu }}</span></td>
            </tr>
        </table>
        <table width="100%" class="tabla3">
<thead>
            <tr >
                <td  align="center" class="fondo"><strong>ID</strong></td>
                <td align="center" class="fondo"><strong>PACIENTE</strong></td>
                <td align="center" class="fondo"><strong>CEDULA </strong></td>
                <td align="center" class="fondo"><strong>DOMICILIO</strong></td>
                <td align="center" class="fondo"><strong>OCUPACION</strong></td>
                <td align="center" class="fondo"><strong>FECHA</strong></td>
            </tr>

        </thead>
        
         
           <tbody>
                  
                  @foreach($pacientes as $paciente)
                 <tr>
           <td>{{$paciente->id}}</td>
                <td>{{$paciente->persona->nombre }} {{$paciente->persona-> apellido1}} {{$paciente->persona-> apellido2}}</td>
               
                  <td>{{$paciente->persona->cedula}}</td>
                  
                  <td>{{$paciente->persona->domicilio}}</td>
                <td>{{$paciente->ocupacion}}</td>
           
                <td>{!! \Carbon\Carbon::parse($paciente->fecha)->format('d-m-Y') !!} </td>

           

                </tr>
                 @endforeach
                </tbody>
          
              
        </table>
          
          <br></br>
       <p align="center">_____________________________</p>
    </div>
 
</body>
</html>
