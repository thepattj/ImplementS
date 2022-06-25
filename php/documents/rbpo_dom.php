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
        <table>
            <tr>
                <td colspan="2">Sistema de Administración de Seguridad Industrial Seguridad Operativa y Protección al Medio Ambiente</td>            
            </tr>
            <tr> <td colspan="2"><?php echo $titulo; ?></td> </tr>
            <tr> <td>Revisión de mejores prácticas de Operación</td> <td> SASISOPA-<?php echo $abr.'-'.$nosa; ?>-09-FM-01</td> </tr>
        </table>
        <table width="460" style="margin-top: 2%; margin-left: 7%;">        
            <tr>
                <td colspan=""> Fecha: </td>
                <td><?php echo date("F j, Y, g:i a"); ?></td>
                <td> Área: </td>
                <td><?php echo $ar; ?></td>            
            </tr>
            <tr>
                <td >Operación/Actividad</td>
                <td colspan="3"><?php echo $act; ?></td>
            </tr>
            <tr>
                <td>Nombre del Supervisor</td>
                <td colspan="3"><?php echo $nombre1; ?></td>
            </tr>
            <tr>
                <td>Nombre del trabajador</td>
                <td colspan="3"><?php echo $nombre2; ?></td>
            </tr>
        </table>
        <table width="500" style="margin-top: 2%; margin-left: 3%; margin-right: 70%;">
            <tr>
                <th>Descripción de la actividad</th>
            </tr>
            <tr>
                <td><?php echo $desc; ?></td>
            </tr>
            <tr>
                <th>Incidentes y/o accidentes de actividad</th>
            </tr>
            <tr>
                <td><?php echo $ia; ?></td>
            </tr>
            <tr>
                <th>Causas que pueden generar el incidente y/o accidente</th>
            </tr>
            <tr>
                <td><?php echo $causa; ?></td>
            </tr>
            <tr>
                <th>Observaciones</th>
            </tr>
            <tr>
                <td><?php echo $obs; ?></td>
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
    $dompdf->stream('revbpo_.pdf', array("Attachment" => false)); //false para abrir, true para bajarse
?>
