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
    
    $reporteOT = "SELECT numOrdenT, fecha, ubicacion, detallesT, tipo, tipoT, horario, horariof, peligro, precaucion, areaT, nombreT FROM dzordentr WHERE idCESH = '".$id."' ORDER BY numOrdenT DESC LIMIT 1";

    //echo $reportecambio;
    $resul = mysqli_query($con, $reporteOT);

   if($resul->num_rows > 0){
        while($fila1 = $resul->fetch_assoc()){
            $fecha = $fila1['fecha'];
            $idOrden = $fila1['numOrdenT'];
            $ubicacion = $fila1['ubicacion'];
            $detalle = $fila1['detallesT'];
            $nombreT = $fila1['nombreT'];
            $tipoTrab = $fila1['tipo'];
            $trabajo = $fila1['tipoT'];
            $horai = $fila1['horario'];
            $horaf = $fila1['horariof'];
            $pg = $fila1['peligro'];
            $pr = $fila1['precaucion'];
            $area = $fila1['areaT'];
        }
    }
?>

'<!doctype html>
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
                <td colspan="2">Sistema de Administración de Seguridad Industrial Seguridad Operativa y Protección al Medio Ambiente</td>            
            </tr>
            <tr> <td colspan="2"><?php echo $titulo; ?></td> </tr>
            <tr> <td>Orden de Trabajo</td> <td> SASISOPA-<?php echo $abr.'-'.$nosa; ?>-10-FM-01</td> </tr>
        </table>
        <table width="460" style="margin-top: 2%; margin-left:10%;">        
            <tr>
                <td colspan="4" style="background-color: #F0F0F0;">Este permiso de trabajo debe ser expedido para cualquier actividad a realizar dentro de la estación</td>
            </tr>
        </table>
        <table width="460" style="margin-top: 5%; margin-left:10%;">
            <tr>
                <th style="background-color: #F0F0F0;">Fecha: </th>
                <td><?php echo $fecha; ?></td>
                <th style="background-color: #F0F0F0;">Permiso: </th>
                <td><?php echo $idOrden; ?></td>
            </tr>
            <tr>
                <th style="background-color: #F0F0F0;">Ubicación del Trabajo: </th>
                <td colspan="3"><?php echo $ubicacion; ?></td>
            </tr>
            <tr>
                <td colspan="4"><b>Detalles del trabajo:</b><?php echo $detalle; ?></td>
            </tr>
            <tr>
                <th style="background-color: #F0F0F0;">Personal Competente</th>
                <td><?php echo $nombreT; ?></td>
                <th style="background-color: #F0F0F0;">Personal Interno/Externo</th>
                <td><?php echo $tipoTrab; ?></td>
            </tr>
            <tr>
                <th colspan="4" style="background-color: #F0F0F0;">Trabajo a realizar</th>
            </tr>
            <tr>
                <td colspan="4"><?php echo $trabajo; ?></td>
            </tr>
            <tr>
                <th colspan="4" style="background-color: #F0F0F0;">Horario</th>
            </tr>
            <tr>
                <td colspan="2"><?php echo $horai; ?></td>
                <td colspan="2"><?php echo $horaf; ?></td>
            </tr>
            <tr>
                <th colspan="4" style="background-color: #F0F0F0;"> Peligros </th>
            </tr>
            <tr>
                <td colspan="4"><?php echo $pg; ?></td>
            </tr>
            <tr>
                <th colspan="4" style="background-color: #F0F0F0;"> Precauciones Requeridas/Equipos </th>
            </tr>
            <tr>
                <td colspan="4"><?php echo $pr; ?></td>
            </tr>
            <tr>
                <th style="background-color: #F0F0F0;">Area donde se trabaja</th>
                <td colspan="3"><?php echo $area; ?></td>
            </tr>
            <tr>
                <td colspan="2" style="background-color: #F0F0F0;">Nombre y firma de Autorización</td>
                <td colspan="2"> </td>
            </tr>
            <tr>
                <td colspan="2" style="background-color: #F0F0F0;">Nombre y firma del Ejecutante</td>
                <td colspan="2"> </td>
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
    $dompdf->stream('OrdenTrabajo_.pdf', array("Attachment" => false)); //false para abrir, true para bajarse
?>