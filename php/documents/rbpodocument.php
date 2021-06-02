<?php
	include '../conex.php';
    $id = $_GET["x"];
    $con = Conectarse();

	require __DIR__.'\vendor\autoload.php';
	use Spipu\Html2Pdf\Html2Pdf;

    $encab = "SELECT razonSocial AS inst, abreviatura as abrv FROM cesh a INNER JOIN estado b ON a.idEstado = b.idEstado WHERE idCESH = '".$id."'";
    $rese = mysqli_query($con, $encab);
    if($rese->num_rows > 0){
        while($fila0 = $rese->fetch_assoc()){
            $nombre = $fila0['inst'];
            $abr = $fila0['abrv'];
        }
    }

    //dividir aqui la parte del PL
    $separador = explode("/",$id);
    $nosa = $separador[0].$separador[1];

    $titulo = $nosa." ".$nombre;

	$reporte9 = "SELECT * FROM rbpo WHERE idCESH = '".$id."' ORDER BY idRbpo DESC LIMIT 1";
    $resul = mysqli_query($con, $reporte9);

    if($resul->num_rows > 0){
        while($fila1 = $resul->fetch_assoc()){
            $idreporte = $fila1['idRbpo'];
            $act = $fila1['actividad'];
            $ar = $fila1['area'];
            $nombre1 = $fila1['nombreSupervisor'];
            $nombre2 = $fila1['nombreTrabajador'];
            $desc = $fila1['descripcion'];
            $cri = $fila1['critica'];
            $ia = $fila1['incAcc'];
            $causa = $fila1['causa'];
            $obs = $fila1['obser'];
        }
    }

    //PRUEBA DE DATOS
    //echo $idreporte."NO ESTACION: ".$nosa." INSTALACION: ".$nombre;

    $html2pdf = new Html2Pdf('P','A4','es','true','UTF-8');
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
                        <table>
                            <tr>
                                <td rowspan="3"> </td>
                                <td colspan="2">Sistema de Administración de Seguridad Industrial Seguridad Operativa y Protección al Medio Ambiente</td>            
                            </tr>
                            <tr> <td colspan="2">'.$titulo.'</td> </tr>
                            <tr> <td>Revisión de mejores prácticas de Operación</td> <td> SASISOPA-'.$abr.'-'.$nosa.'-09-FM-01</td> </tr>
                        </table>
                        <table width="2560" style="margin-top: 2%;">        
                            <tr>
                                <td colspan=""> Fecha: </td>
                                <td > '.date("F j, Y, g:i a").' </td>
                                <td > Área: </td>
                                <td > '.$ar.' </td>            
                            </tr>
                            <tr>
                                <td >Operación/Actividad</td>
                                <td colspan="3"> '.$act.'</td>
                            </tr>
                            <tr>
                                <td>Nombre del Supervisor</td>
                                <td colspan="3"> '.$nombre1.'</td>
                            </tr>
                            <tr>
                                <td>Nombre del trabajador</td>
                                <td colspan="3"> '.$nombre2.'</td>
                            </tr>
                        </table>
                        <table width="760" style="margin-top: 2%;">
                            <tr>
                                <th>Descripción de la actividad</th>
                            </tr>
                            <tr>
                                <td> '.$desc.'</td>
                            </tr>
                            <tr>
                                <th>Incidentes y/o accidentes de actividad</th>
                            </tr>
                            <tr>
                                <td> '.$ia.'</td>
                            </tr>
                            <tr>
                                <th >Causas que pueden generar el incidente y/o accidente</th>
                            </tr>
                            <tr>
                                <td > '.$causa.'</td>
                            </tr>
                            <tr>
                                <th >Observaciones</th>
                            </tr>
                            <tr>
                                <td > '.$obs.'</td>
                            </tr>
                        </table>
                    </body>
                    </html>');
    $html2pdf->output();
?>