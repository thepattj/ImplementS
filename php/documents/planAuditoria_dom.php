<?php
    ob_start();
?>

<?php
    include '../conex.php';
    $id = $_GET["x"];
    $con = Conectarse();
    //echo "listo";
    

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
    
    $auditoriarep = "SELECT idAuditoria as numaud, alcance, criterioAud, tipoA, objetivos, auditorLider, auditor1, auditor2, periodo FROM auditoria WHERE idCESH = '".$id."' ORDER BY idAuditoria DESC LIMIT 1";

    $resul = mysqli_query($con, $auditoriarep);

   if($resul->num_rows > 0){
        while($fila1 = $resul->fetch_assoc()){
            $idaud = $fila1['numaud'];
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

    $reptecql = "SELECT nombre as nmb, apellidoP as appt, apellidoM as apmt FROM organigrama WHERE puesto LIKE '%Representante%' AND idCESH = '".$id."'";
    $represul = mysqli_query($con, $reptecql);

    if($represul->num_rows > 0){
        while ($fila2 = $represul->fetch_assoc()) {
            $n = $fila2['nmb'];
            $app = $fila2['appt'];
            $apm = $fila2['apmt'];
        }
    }
    

    /*echo $auditoriarep;
    echo 'periodo: '.$periodo.' alcance: '.$alcance;*/
?>    
<!doctype html>
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
        <table style="margin-left: 3%;">
            <tr>
                <td colspan="2">Sistema de Administración de Seguridad Industrial Seguridad Operativa y Protección al Medio Ambiente</td>            
            </tr>
            <tr> <td colspan="2"><?php echo $titulo; ?></td> </tr>
                <tr> <td>Plan de Auditoria</td> <td> SASISOPA-<?php echo $abr.'-'.$nosa; ?>-15-PL-01</td> </tr>
        </table>
        <table width="460" style="margin-top: 4%; margin-left: 7%; margin-right: 35%;">        
            <tr>
                <th style="background: rgb(178,178,178);">Estación de Servicio:</th>
                <td><?php echo $nombre; ?></td>
            </tr>
            <tr>
                <th style="background: rgb(178,178,178);">Dirección</th>
                <td><?php echo $dir; ?> </td>
            </tr>
            <tr>
                <th style="background: rgb(178,178,178);">Representante Técnico</th>
                <td><?php echo $n." ".$app." ".$apm; ?> </td>
            </tr>
            <tr>
                <th style="background: rgb(178,178,178);">Periodo de Auditoria</th>
                <td><?php echo $periodo; ?></td>
            </tr>
            <tr>
                <th style="background: rgb(178,178,178);">Alcance</th>
                <td><?php echo $alcance; ?></td>
            </tr>
            <tr>
                <th style="background: rgb(178,178,178);">Criterios de Auditoria</th>
                <td><?php echo $criterio; ?></td>
            </tr>
            <tr>
                <th style="background: rgb(178,178,178);">Tipo de Auditoria</th>
                <td><?php echo $tAuditoria; ?></td>
            </tr>
            <tr>
                <th style="background: rgb(178,178,178);">Objetivos</th>
                <td><?php echo $objetivos; ?></td>
            </tr>
            <tr>
                <th colspan="2" style="background: rgb(178,178,178);">Roles</th>
            </tr>
            <tr>
                <td colspan="2">Auditor Lider: <?php echo $auditorL; ?></td>
            </tr>
            <tr>
                <td colspan="2">Auditor 1:<?php echo $auditor1; ?></td>
            </tr>
        </table>
        <table width="460" style="margin-top: 3%; margin-left: 7%; margin-right: 35%;">
            <tr>
                <th colspan="3" style="background: rgb(178,178,178);">Actividades realizadas</th>
            </tr>
            <tr>
                <th>Fecha</td>
                <th>Proceso</td>
                <th>Auditor</td>
            </tr>
            <?php $activit = "SELECT proceso, fecha, auditor FROM actauditoria WHERE idAuditoria = ".$idaud;
                  $resactivi = mysqli_query($con, $activit);
                  while($row = $resactivi->fetch_object()){ ?>
            <tr>
                <td style="font-size: .8em;"> <?php echo $row->fecha; ?> </td>
                <td style="font-size: .8em;"> <?php echo $row->proceso; ?> </td>
                <td style="font-size: .8em;"> <?php echo $row->auditor; ?> </td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>  
<?php
    $html=ob_get_clean();
   //echo $html;

    require_once '../../librerias/dompdf/autoload.inc.php';
    use Dompdf\Dompdf;
    $dompdf = new Dompdf();

    //$dompdf->loadHtml("1");
    $dompdf->loadHtml($html);
    $dompdf->setPaper('letter'); //A4, landscape
    $dompdf->render();
    $dompdf->stream('planAuditoria_.pdf', array("Attachment" => false)); //false para abrir, true para bajarse

?>