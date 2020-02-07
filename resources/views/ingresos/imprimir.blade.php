<!DOCTYPE html>
<html>
<head>
    <title>BOLETA DE PAGO</title>
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
    .tabla3 .cancelado{
        border-left: 0;
        border-right: 0;
        border-bottom: 0;
        border-top: 1px dotted #000;
        width: 200px;
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
                            @if ($ingresos['paciente_id']=="")
      
                <td height="15"   align="center" class="border"><span class="h3">Af.:{{$ingresos->afiliacion->nombre}}   </span></td>
                @else 
 
                            <td height="15"   align="center" class="border"><span class="h3">Af.:{{$ingresos->paciente->afiliacion->nombre}}   </span></td>
                      @endif
                        </tr>
                         
                        <tr>
                            <td height="15"  align="center" class="border"> Nº- 0000<span class="text">{{$ingresos->id}}</span></td>
                        </tr>
                    </table>
        <table width="100%" class="tabla1">

            <tr>
                
                
                    
                </td>
            </tr>
            <tr>
                <td align="center">CLINICA FISIOSUR</td>
            </tr>
            <tr>
                <td align="center">Dir.: Av. Santa Cruz N° 1378 entre Cochabamba y Benemeritos  </td>
            </tr>
        </table>
        <table width="100%" class="tabla2">
            <tr>
                   @if ($ingresos['paciente_id']=="")
                   <td width="11%">Institucion:</td>
                <td width="37%" class="linea"><span class="text">{{$ingresos->afiliacion->nombre}}</span></td>
                
            @else 
              <td width="11%">Señor (es):</td>
                <td width="37%" class="linea"><span class="text"> {{$ingresos->paciente->persona->nombre}}  {{$ingresos->paciente->persona->apellido1}}  {{$ingresos->paciente->persona->apellido2}}</span></td>
            @endif
                <td width="5%">&nbsp;</td>
                <td width="13%">&nbsp;</td>
                <td width="4%">&nbsp;</td>
                <td width="7%" align="center" class="border fondo"><strong>DÍA</strong></td>
                <td width="8%" align="center" class="border fondo"><strong>MES</strong></td>
                <td width="7%" align="center" class="border fondo"><strong>AÑO</strong></td>
            </tr>
            <tr>
                <td>Concepto:</td>
                <td class="linea"><span class="text">{{$ingresos->concepto}}</span></td>
                 
                @if ($ingresos['paciente_id']=="")
                <td>NIT:</td>
               <td class="linea"><span class="text"> </span></td>
                   @else 
                    <td>CI:</td>
 <td class="linea"><span class="text">{{$ingresos->paciente->persona->cedula}}</span></td>
                   @endif
                <td>&nbsp;</td>
                <td align="center" class="border"><span class="text">{{ $dia }}</span></td>
                <td align="center" class="border"><span class="text">{{ $me }}</span></td>
                <td align="center" class="border"><span class="text">{{ $anu }}</span></td>
            </tr>
        </table>
        <table width="100%" class="tabla3">
            <tr>
                <td align="center" class="fondo"><strong>N° Emision.</strong></td>
                <td align="center" class="fondo"><strong>DESCRIPCIÓN</strong></td>
                <td align="center" class="fondo"><strong>PRECIO </strong></td>
                <td align="center" class="fondo"><strong>IMPORTE</strong></td>
            </tr>
         
            <tr>
                <td width="7%" align="center"><span class="text"></span> #0000{{$ingresos->id}}  </td>
                <td width="59%"><span class="text">{{$ingresos->descripcion}}</span></td>
                <td width="16%" align="right"><span class="text">---</span></td>
                <td width="18%" align="right"><span class="text">{{$ingresos->monto_total}}</span></td>
            </tr>
            
          
            <tr>
                <td style="border:0;">&nbsp;</td>
                <td style="border:0;">&nbsp;</td>
                <td align="right"><strong>TOTAL C/Bs.</strong></td>
                <td align="right"><span class="text"> {{$ingresos->monto_total}}</span></td>
            </tr>

            <tr>
                <td style="border:0;">&nbsp;</td>
                <td style="border:0;">&nbsp;</td>
                <td align="right"><strong>SALDO P/Bs.</strong></td>
                <td align="right"><span class="text"> {{$ingresos->saldo}}</span></td>
            </tr>
            <tr>
                <td style="border:0;">&nbsp;</td>
                <td align="center" style="border:0;">
                    <table width="200" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td align="center" class="cancelado">CANCELADO</td>
                            <td align="center" class="cancelado">{{$ingresos->usuario->persona->nombre}}  {{$ingresos->usuario->persona->apellido1}}  {{$ingresos->usuario->persona->apellido2}}</td>
                        </tr>
                    </table>
                </td>
                <td style="border:0;">&nbsp;</td>
                <td align="center" style="border:0;" class="emisor"><strong> </strong></td>
            </tr>
        </table>
    </div>
</body>
</html>