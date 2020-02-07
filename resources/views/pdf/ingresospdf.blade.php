<!DOCTYPE html>
<html>
<head>
    <title>REPORTE DE INGRESOS</title>
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
                            <td height="15"    class="border"> Nº 000<span class="text"> </span></td>
                        </tr>
                         
                    </table>
        <table width="100%" class="tabla1">

            <tr>
                
                
                    
                </td>
            </tr>
            <tr>
                <td align="center">REPORTE DE INGRESOS - CLINICA FISIOSUR</td>
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
                <td align="center" class="fondo"><strong>USUARIO</strong></td>
                <td align="center" class="fondo"><strong>CONCEPTO </strong></td>
                 <td align="center" class="fondo"><strong>SALDO </strong></td>
                <td align="center" class="fondo"><strong>FECHA</strong></td>
                <td align="center" class="fondo"><strong>MONTO Bs</strong></td>
            </tr>

        </thead>
        
         @int=0;
           <tbody>
                   @foreach($ingresos as $egreso)
                 <tr>
                <td>{{$egreso->id}}</td>
                <td>{{$egreso->usuario->persona->nombre }} {{$egreso->usuario->persona->apellido1}} {{$egreso->usuario->persona->apellido2}}</td>
                
 
                  <td>{{$egreso->concepto}}</td>   
                  <td>{{$egreso->saldo}}</td>
                <td align="center">{!! \Carbon\Carbon::parse($egreso->fecha)->format('d-m-Y') !!}</td>


                <td align="center">{{$egreso->monto_total}}</td>
                
                  
                </tr>
                 @endforeach
                </tbody>
        
              <tr>
                <td style="border:0;">&nbsp;</td>
                <td style="border:0;">&nbsp;</td>
                <td style="border:0;">&nbsp;</td>
                <td style="border:0;">&nbsp;</td>
                <td align="right"><strong>TOTAL Bs</strong></td>
                <td align="center"><span class="text"> {{$suma}}</span></td>
                
            </tr>
        </table>
            
          <br></br>
       <p align="center">_____________________________</p>
    </div>
 
</body>
</html>
