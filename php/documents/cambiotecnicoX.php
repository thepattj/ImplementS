<?php
    include '../conex.php';
    $id = $_GET["x"];
    $con = Conectarse();

    require __DIR__.'\vendor\autoload.php';
    use Spipu\Html2Pdf\Html2Pdf;

    $encab = "SELECT razonSocial AS inst, abreviatura as abrv, rtec as tecnico, rl as legal FROM cesh a INNER JOIN estado b ON a.idEstado = b.idEstado WHERE idCESH = '".$id."'";
    $rese = mysqli_query($con, $encab);
    if($rese->num_rows > 0){
        while($fila0 = $rese->fetch_assoc()){
            $nombre = $fila0['inst'];
            $abr = $fila0['abrv'];
            $rept = $fila0['tecnico'];
            $repl = $fila0['legal'];
        }
    }

    //dividir aqui la parte del PL
    $separador = explode("/",$id);
    $nosa = $separador[0].$separador[1];

    $titulo = $nosa." ".$nombre;

    $reportecambio = "SELECT a.equipo, a.descripcionC, a.fechaC, b.nombre, b.apellidoP, b.apellidoM FROM dzcambiot a INNER JOIN organigrama b ON a.idTrab = b.idTrab WHERE a.idCESH = '".$id."' ORDER BY a.idCambioT DESC LIMIT 1";

    //echo $reportecambio;
    $resul = mysqli_query($con, $reportecambio);

   if($resul->num_rows > 0){
        while($fila1 = $resul->fetch_assoc()){
            $eq = $fila1['equipo'];
            $des = $fila1['descripcionC'];
            $fecha = $fila1['fechaC'];
            $n = $fila1['nombre'];
            $ap = $fila1['apellidoP'];
            $am = $fila1['apellidoM'];
        }
    }
    //PRUEBA DE DATOS
    //echo $idreporte."NO ESTACION: ".$nosa." INSTALACION: ".$nombre;

    $html2pdf = new Html2Pdf('P','letter','es','true','UTF-8');
    $html2pdf->writeHTML('<!doctype html>
                            <html class="no-js" lang="">

                            <head>
                                <style>
                                td, th {
                                    border: 1px solid rgb(0, 0, 0);
                                    padding: 8px;
                                    text-align:center;
                                  }
                                </style>
                            </head>
                            <body>
                                <table style="margin-left:5%;">
                                    <tr>
                                        <td rowspan="3">IMG</td>
                                        <td colspan="2">Sistema de Administración de Seguridad Industrial Seguridad Operativa y Protección al Medio Ambiente</td>            
                                    </tr>
                                    <tr> <td colspan="2">'.$titulo.'</td> </tr>
                                    <tr> <td>Administración de Cambios técnologicos</td> <td> SASISOPA-'.$abr.'-'.$nosa.'-10-FM-03</td> </tr>
                                </table>

                                <table width="2560" style="margin-top: 10%; margin-left:7%;">
                                    <tr>
                                        <th> Equipo: </th>
                                        <td>'.$eq.'</td>
                                        <th>Fecha: </th>
                                        <td>'.$fecha.'</td>
                                    </tr>
                                    
                                    <tr>
                                        <th colspan="4"> Descripción de cambio: </th>
                                    </tr>
                                    <tr>
                                        <td colspan="4">'.$des.'</td>
                                    </tr>
                                    <tr>
                                        <th colspan="1">Responsable de la <br> realización de Mantenimiento: </th>
                                        <td colspan="1"> '.$n.' '.$ap.' '.$am.' </td>
                                        <th>Firma de conformidad<br>del responsable del equipo: </th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        
                                    </tr>
                                    <tr>
                                        
                                    </tr>
                                </table>

                                <table width="2560" style="margin-top: 60%;">
                                    <tr>
                                        <td>Elaborado por: <br> '.$rept.'</td>
                                        <td>Revisado por: <br> '.$rept.'</td>
                                        <td>Aprobado por: <br> '.$repl.'</td>
                                        <td>Fecha de publicación: <br></td>
                                        <td>Fecha de edición: <br></td>
                                    </tr>
                                </table>
                                
                            </body>
                            </html>');
    $html2pdf->output();
?>