<?php
    ob_start();
?>

<?php
    //echo "hola";
    include '../conex.php';
    $id = $_GET["x"];
    $con = Conectarse();
    
    $encab = "SELECT razonSocial AS inst, abreviatura as abrv FROM cesh a INNER JOIN estado b ON a.idEstado = b.idEstado WHERE idCESH = '".$id."'";
    //echo $encab;
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
    //echo $titulo;
    
    $reportecambio = "SELECT a.area as area, a.motivo as motivo, b.nombre as nombre, b.apellidoP as apellidoP, b.apellidoM as apellidoM, b.puesto as puesto FROM dzcambiop a INNER JOIN organigrama b ON a.idTrab = b.idTrab WHERE a.idCESH = '".$id."' ORDER BY idCambio DESC LIMIT 1";

    //echo $reportecambio;
    $resul = mysqli_query($con, $reportecambio);

    if($resul->num_rows > 0){
        while($fila1 = $resul->fetch_assoc()){
            $ar = $fila1['area'];
            $mt = $fila1['motivo'];
            $nm = $fila1['nombre'];
            $ap = $fila1['apellidoP'];
            $am = $fila1['apellidoM'];
            $pst = $fila1['puesto'];
        }
    }
    
    if($ar != "FinLaboral"){
        $movimiento = 'Cambio de departamento';
    }if($ar == "FinLaboral"){
        $movimiento = 'Fin de relación Laboral';
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
        <table style="margin-left: 1%;">
            <tr>
                <td colspan="2">Sistema de Administración de Seguridad Industrial Seguridad Operativa y Protección al Medio Ambiente</td>            
            </tr>
            <tr> <td colspan="2"><?php echo $titulo; ?></td> </tr>
            <tr> <td>Cambio de Personal</td> <td> SASISOPA-<?php echo $abr.'-'.$nosa; ?>-10-FM-04</td> </tr>
        </table>
        <table width="500" style="margin-top: 15%; margin-left: 3%; margin-right: 35%; ">                                    
            <tr>
                <th> Movimiento realizado: </th>
                <td><?php echo $movimiento; ?></td>
                <th> Nombre Personal: </th>
                <td><?php echo $nm.' '.$ap.' '.$am; ?></td>
            </tr>
            <tr>
                <th colspan="4"> Motivo del movimiento </th>
            </tr>
            <tr>
                <td colspan="4"><?php echo $mt; ?></td>
            </tr>
            <tr>
               <th colspan="4"> Autorización de cambio (Nombre y firma) </th>
            </tr>
            <tr>
                <td colspan="4"><?php echo $n." ".$app." ".$apm; ?><br></td>
                <!-- <td colspan="4"><?php echo $reptecql; ?><br></td> -->
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
    $dompdf->stream('cambioPersonal_.pdf', array("Attachment" => false));   
?>