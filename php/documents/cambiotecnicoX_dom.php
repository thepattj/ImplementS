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

    $reportecambio = "SELECT a.equipo, a.descripcionC, a.fechaC, b.nombre, b.apellidoP, b.apellidoM FROM dzcambiot a INNER JOIN organigrama b ON a.idTrab = b.idTrab WHERE a.idCESH = '".$id."' ORDER BY a.idCambioT DESC LIMIT 1";

    //echo $reportecambio;
    $resul = mysqli_query($con, $reportecambio);

   if($resul->num_rows > 0){
        while($fila1 = $resul->fetch_assoc()){
            $eq = $fila1['equipo'];
            $des = $fila1['descripcionC'];
            $fecha = $fila1['fechaC'];
            $nombre = $fila1['nombre'];
            $apt = $fila1['apellidoP'];
            $amt = $fila1['apellidoM'];
        }
    }
    //PRUEBA DE DATOS
    //echo $idreporte."NO ESTACION: ".$nosa." INSTALACION: ".$nombre;

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
            <tr> <td>Administración de Cambios técnologicos</td> <td> SASISOPA-<?php echo $abr.'-'.$nosa; ?>-10-FM-03</td> </tr>
        </table>
        <table width="500" style="margin-top: 10%; margin-left:3%; margin-right: 25%;">
            <tr>
                <td colspan="2" style="border: 0px solid rgb(0, 0, 0);"></td>
                <th>Fecha: </th>
                <td><?php echo $fecha; ?></td>
            </tr><tr>
                <th colspan="2"> Equipo/Proceso/tecnología: </th>
                <td colspan="2"><?php echo $eq; ?></td>
            </tr>
            <tr>
                <th colspan="4"> Descripción de cambio: </th>
            </tr>
            <tr>
                <td colspan="4"><?php echo $des; ?></td>
            </tr>
            <tr>
                <th style="font-size: .7em;">Responsable de la realización de Mantenimiento (Nombre y firma): </th>
                <td style="font-size: .6em;"><?php echo $nombre.' '.$apt.' '.$amt; ?></td>
                <th style="font-size: .7em;">Responsable autorización de cambio (Nombre y firma): </th>
                <td style="font-size: .6em;"><?php echo $n.' '.$app.' '.$apm; ?></td>
            </tr>
            <tr>
                
            </tr>
            <tr>
                
            </tr>
            <tr>
                
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
    $dompdf->stream('cambiotecnico_.pdf', array("Attachment" => false)); //false para abrir, true para bajarse
?>