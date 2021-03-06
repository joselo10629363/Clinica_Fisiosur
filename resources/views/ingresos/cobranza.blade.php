<!DOCTYPE html>
<html>
<head>
    <title>BOLETA DE Pago</title>
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
                            <td height="15"   align="center" class="border"><span class="h3">particular</span></td>
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
                <td width="11%">Señor (es):</td>
                <td width="37%" class="linea"><span class="text">DEDEWDWE</span></td>
                <td width="5%">&nbsp;</td>
                <td width="13%">&nbsp;</td>
                <td width="4%">&nbsp;</td>
                <td width="7%" align="center" class="border fondo"><strong>DÍA</strong></td>
                <td width="8%" align="center" class="border fondo"><strong>MES</strong></td>
                <td width="7%" align="center" class="border fondo"><strong>AÑO</strong></td>
            </tr>
            <tr>
                <td>Dirección:</td>
                <td class="linea"><span class="text">dedededed}</span></td>
                <td>DNI:</td>
                <td class="linea"><span class="text">dedede</span></td>
                <td>&nbsp;</td>
                <td align="center" class="border"><span class="text">{{ $dia }}</span></td>
                <td align="center" class="border"><span class="text">{{ $me }}</span></td>
                <td align="center" class="border"><span class="text">{{ $anu }}</span></td>
            </tr>
        </table>
        <table width="100%" class="tabla3">
            <tr>
                <td align="center" class="fondo"><strong>CANT.</strong></td>
                <td align="center" class="fondo"><strong>DESCRIPCIÓN</strong></td>
                <td align="center" class="fondo"><strong>P. UNITARIO</strong></td>
                <td align="center" class="fondo"><strong>IMPORTE</strong></td>
            </tr>
         
            <tr>
                <td width="7%" align="center"><span class="text"> DFFFFGGF</span></td>
                <td width="59%"><span class="text">FDDFDFF</span></td>
                <td width="16%" align="right"><span class="text">DFDFDF</span></td>
                <td width="18%" align="right"><span class="text">DFFDFFD</span></td>
            </tr>
            
            <tr>
                <td width="7%">&nbsp;</td>
                <td width="59%">&nbsp;</td>
                <td width="16%">&nbsp;</td>
                <td width="18%" align="left">&nbsp;</td>
            </tr>
            
            <tr>
                <td style="border:0;">&nbsp;</td>
                <td style="border:0;">&nbsp;</td>
                <td align="right"><strong>TOTAL S/.</strong></td>
                <td align="right"><span class="text"> weedede</span></td>
            </tr>
            <tr>
                <td style="border:0;">&nbsp;</td>
                <td align="center" style="border:0;">
                    <table width="200" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td align="center" class="cancelado">CANCELADO</td>
                        </tr>
                    </table>
                </td>
                <td style="border:0;">&nbsp;</td>
                <td align="center" style="border:0;" class="emisor"><strong>EMISOR</strong></td>
            </tr>
        </table>
    </div>
</body>
</html>