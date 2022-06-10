<?php
    include '../conex.php';
    $id = $_GET["x"];
    $con = Conectarse();
    //echo "listo";
    
    require __DIR__.'/vendor/autoload.php';
    use Spipu\Html2Pdf\Html2Pdf;
    
    $encab = "SELECT razonSocial AS inst, abreviatura as abrv, ubicacion as dir FROM cesh a INNER JOIN estado b ON a.idEstado = b.idEstado WHERE idCESH = '".$id."'";
    $rese = mysqli_query($con, $encab);
    if($rese->num_rows > 0){
        while($fila0 = $rese->fetch_assoc()){
            $nombre = $fila0['inst'];
            $abr = $fila0['abrv'];
            $dir = $fila0['dir'];
        }
    }

    //dividir aqui la parte del PL
    $separador = explode("/",$id);
    $nosa = $separador[0].$separador[1];

    $titulo = $nosa." ".$nombre;
    //echo $titulo;
    
    $auditoriarep = "SELECT alcance, criterioAud, tipoA, objetivos, auditorLider, auditor1, auditor2, periodo FROM auditoria WHERE idCESH = '".$id."' ORDER BY idAuditoria DESC LIMIT 1";

    $resul = mysqli_query($con, $auditoriarep);

   if($resul->num_rows > 0){
        while($fila1 = $resul->fetch_assoc()){
            $periodo = $fila1['periodo'];
            $alcance = $fila1['alcance'];
            $criterio = $fila1['criterioAud'];
            $tAuditoria = $fila1['tipoA'];
            $objetivos = $fila1['objetivos'];
            $auditorL = $fila1['auditorLider'];
            $auditor1 = $fila1['auditor1'];
            $auditor2 = $fila1['auditor2'];
        }
    }

    //$activit = "SELECT proceso FROM actauditoria WHERE idAuditoria = ".$num;
    $activit = "SELECT proceso, fecha, auditor FROM actauditoria WHERE idAuditoria = 48";
    $resactivi = mysqli_query($con, $activit);
    $k=0;
    $y=0;
    if($resactivi->num_rows > 0){
        while ($fila2 = $resactivi->fetch_assoc()) {
            $k++;
            $proc[$k] = $fila2 ['proceso'];
            $fec[$k] = $fila2['fecha'];
            $aud[$k] = $fila2['auditor'];
        }
    }

    $prow = implode(",", $proc);
    $fecw = implode(",", $fec);
    $audw = implode(",", $aud);
    /*echo $auditoriarep;
    echo 'periodo: '.$periodo.' alcance: '.$alcance;*/
    
    $html2pdf = new Html2Pdf('P','letter','es','true','UTF-8');
    if($auditor1 != ""){
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
                        <table style="margin-left: 9%;">
                            <tr>
                                <td colspan="2">Sistema de Administración de Seguridad Industrial Seguridad Operativa y Protección al Medio Ambiente</td>            
                            </tr>
                            <tr> <td colspan="2">'.$titulo.'</td> </tr>
                            <tr> <td>Plan de Auditoria</td> <td> SASISOPA-'.$abr.'-'.$nosa.'-15-PL-01</td> </tr>
                        </table>
                        <table width="2560" style="margin-top: 7%; margin-left: 15%;">        
                            <tr>
                                <th>Estación de Servicio:</th>
                                <td>'.$nombre.'</td>
                            </tr>
                            <tr>
                                <th>Dirección</th>
                                <td>'.$dir.'</td>
                            </tr>
                            <tr>
                                <th>Representante Técnico</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Periodo de Auditoria</th>
                                <td>'.$periodo.'</td>
                            </tr>
                            <tr>
                                <th>Alcance</th>
                                <td>'.$alcance.'</td>
                            </tr>
                            <tr>
                                <th>Criterios de Auditoria</th>
                                <td>'.$criterio.'</td>
                            </tr>
                            <tr>
                                <th>Tipo de Auditoria</th>
                                <td>'.$tAuditoria.'</td>
                            </tr>
                            <tr>
                                <th>Objetivos</th>
                                <td>'.$objetivos.'</td>
                            </tr>
                            <tr>
                                <th colspan="2">Roles</th>
                            </tr>
                            <tr>
                                <td colspan="2">Auditor Lider: '.$auditorL.'</td>
                            </tr>
                            <tr>
                                <td colspan="2">Auditor 1: '.$auditor1.'</td>
                            </tr>
                        </table>
                        <table width="560" style="margin-top: 7%; margin-left: 15%; margin-right: 75%;">
                            <tr>
                                <th colspan="3">Actividades realizadas</th>
                            </tr>
                            <tr>
                                <td>Fecha</td>
                                <td>Proceso</td>
                                <td>Auditor</td>
                            </tr>
                        </table>
                    </body>
                    </html>');
        $html2pdf->output();
    }
    if($auditor2 != ""){
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
                        <table style="margin-left: 9%;">
                            <tr>
                                <td colspan="2">Sistema de Administración de Seguridad Industrial Seguridad Operativa y Protección al Medio Ambiente</td>            
                            </tr>
                            <tr> <td colspan="2">'.$titulo.'</td> </tr>
                            <tr> <td>Plan de Auditoria</td> <td> SASISOPA-'.$abr.'-'.$nosa.'-15-PL-01</td> </tr>
                        </table>
                        <table width="2560" style="margin-top: 7%; margin-left: 15%;">        
                            <tr>
                                <th>Estación de Servicio:</th>
                                <td>'.$nombre.'</td>
                            </tr>
                            <tr>
                                <th>Dirección</th>
                                <td>'.$dir.'</td>
                            </tr>
                            <tr>
                                <th>Representante Técnico</th>
                                <td>'.$rt.'</td>
                            </tr>
                            <tr>
                                <th>Periodo de Auditoria</th>
                                <td>'.$periodo.'</td>
                            </tr>
                            <tr>
                                <th>Alcance</th>
                                <td>'.$alcance.'</td>
                            </tr>
                            <tr>
                                <th>Criterios de Auditoria</th>
                                <td>'.$criterio.'</td>
                            </tr>
                            <tr>
                                <th>Tipo de Auditoria</th>
                                <td>'.$tAuditoria.'</td>
                            </tr>
                            <tr>
                                <th>Objetivos</th>
                                <td>'.$objetivos.'</td>
                            </tr>
                            <tr>
                                <th colspan="2" >Roles</th>
                            </tr>
                            <tr>
                                <td colspan="2">Auditor Lider:'.$auditorL.'</td>
                            </tr>
                            <tr>
                                <td colspan="2">Auditor 1:'.$auditor1.'</td>
                            </tr>
                            <tr>
                                <td colspan="2">Auditor 2:'.$auditor2.'</td>
                            </tr>
                            <tr>
                                <th>Actividades realizadas</th>
                                <td>todas las actividadesde por medio de un for</td>
                            </tr>
                        </table>
                    </body>
                    </html>');
        $html2pdf->output();
    }
    
?>