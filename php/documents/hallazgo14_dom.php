<?php
    ob_start();
?>

<?php
    include '../conex.php';
    $id = $_GET["x"];
    $con = Conectarse();
    
    
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
    //echo "cuatro".$titulo;
    
     $hallazgo = "SELECT proHall, solicitud, nConformidad, responP, responV, accion, responsableA, fechaA, estatus FROM monverif WHERE idCESH = '".$id."' ORDER BY idMonV DESC LIMIT 1";
    //echo $reporteOT;
    $resul = mysqli_query($con, $hallazgo);

    if($resul->num_rows > 0){
        while($fila1 = $resul->fetch_assoc()){
            $hallazgoP = $fila1['proHall'];
            $hallazgoS = $fila1['solicitud'];
            $noConformidad = $fila1['nConformidad'];
            $resPreve = $fila1['responP'];
            $resCump = $fila1['responV'];
            $acc = $fila1['accion'];
            $resAcc = $fila1['responsableA'];
            $fechaPrA = $fila1['fechaA'];
            $status = $fila1['estatus'];
        }
    }
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
        <table style="margin-left:1%;">
            <tr>
                <td colspan="2">Sistema de Administración de Seguridad Industrial Seguridad Operativa y Protección al Medio Ambiente</td>            
            </tr>
            <tr> <td colspan="2"><?php echo $titulo; ?></td> </tr>
            <tr> <td>Redacción de Hallazgos</td> <td> SASISOPA-<?php echo $abr.'-'.$nosa; ?>-14-FM-01</td> </tr>
        </table>
        <table width="460" style="margin-top: 7%; margin-left: 7%; margin-right: 35%;">        
            <tr>
                <th> Fecha: </th>
                <td><?php echo date("F j, Y, g:i a"); ?></td>
                <th> Folio: </th>
                <td> </td>
            </tr>
            <tr>
                <th colspan="4">Solicitud de Hallazgo</th>
            </tr>
            <tr>
                <td colspan="4"><?php echo $hallazgoS; ?></td>
            </tr>
            <tr>
                <th colspan="4">El Hallazgo Proviene: </th>
            </tr>
            <tr>
                <td colspan="4"><?php echo $hallazgoP; ?></td>
            </tr>
        </table>
        <table width="460" style="margin-top: 2%; margin-left: 7%;">        
            <tr>
                <th style="background: rgb(178,178,178);">Describir la no conformidad</th>
                <td><?php echo $noConformidad; ?></td>
            </tr>
            <tr>
                <th style="background: rgb(178,178,178);">Responsable de definir la(s) accion(es) preventivas</th>
                <td><?php echo $resPreve; ?></td>
            </tr>
            <tr>
                <th style="background: rgb(178,178,178);">Responsable de verificar el cumplimiento de las acciones</th>
                <td><?php echo $resCump; ?></td>
            </tr>
        </table>
        <table width="460" style="margin-top: 2%; margin-left: 7%;">        
            <tr>
                <th colspan="2">Plan de Acción</th>
            </tr>
            <tr>
                <th>Acciones: </th>
                <td><?php echo $acc; ?></td>
            </tr>
            <tr>
                <th>Fecha Programada</th>
                <td><?php echo $fechaPrA; ?></td>
            </tr>
            <tr>
                <th>Estatus</th>
                <td><?php echo $status; ?></td>
            </tr>
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
    $dompdf->stream('RedaccionHallazgo_.pdf', array("Attachment" => false)); //false para abrir, true para bajarse
?>