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

	$reporte9 = "SELECT procedimiento as pro, sugerencia as reco, mes as m, estado as sta, responsable as rt FROM controlrbpo WHERE idCESH = '".$id."' ORDER BY idControlR DESC LIMIT 1";
    $resul = mysqli_query($con, $reporte9);

    if($resul->num_rows > 0){
        while($fila1 = $resul->fetch_assoc()){
            $procedimiento = $fila1['pro'];
            $recomendacion = $fila1['reco'];
            $mes = $fila1['m'];
            $estado = $fila1['sta'];
            $responsable = $fila1['rt'];
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
                <td colspan="2">Sistema de Administracion de Seguridad Industrial, Seguridad Operativa, y Proteccion Al Medio Ambiente</td>            
            </tr>
            <tr> <td colspan="2"><?php echo $titulo; ?></td> </tr>
            <tr> <td>Control y Seguimiento a recomendaciones de RBPO</td> <td> SASISOPA-<?php echo $abr.'-'.$nosa; ?>-09-FM-02</td> </tr>
        </table>
        <table width="460" style="margin-top: 2%; margin-left: 7%; margin-right: 35%;">
            <tr>
                <th>Nombre del procedimiento</th>
                <td><?php echo $procedimiento; ?></td>
            </tr>
            <tr>
                <th>Sugerencia</th>
                <td><?php echo $recomendacion; ?></td>
            </tr>
            <tr>
                <th>Mes programado</th>
                <td><?php echo $mes; ?></td>
            </tr>
            <tr>
                <th>Estatus</th>
                <td><?php echo $estado; ?></td>
            </tr>
            <tr>
                <th>Responsable</th>
                <td><?php echo $responsable; ?></td>
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
    $dompdf->stream('controlrbpo_.pdf', array("Attachment" => false)); //false para abrir, true para bajarse
?>