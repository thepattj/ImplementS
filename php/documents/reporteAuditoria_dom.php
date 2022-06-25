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
    
    $auditoriarep = "SELECT idAuditoria as numaud, fechaR, elaborado, comentario, conclusion, recomendacion FROM reportea WHERE idCESH = '".$id."' ORDER BY idAuditoria DESC LIMIT 1";

    $resul = mysqli_query($con, $auditoriarep);

   if($resul->num_rows > 0){
        while($fila1 = $resul->fetch_assoc()){
            $idaud = $fila1['numaud'];
            $fechaR = $fila1['fechaR'];
            $ela = $fila1['elaborado'];
            $comm = $fila1['comentario'];
            $conc = $fila1['conclusion'];
            $reco = $fila1['recomendacion'];
        }
    }

    $tipAud = "SELECT tipoA FROM auditoria WHERE idAuditoria =".$idaud;
    $resultip = mysqli_query($con, $tipAud);
    if($resultip->num_rows > 0){
        while ($fila2 = $resultip->fetch_assoc()) {
            $tipoAuditoria = $fila2['tipoA'];
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
                <tr> <td>Reporte de resultados</td> <td> SASISOPA-<?php echo $abr.'-'.$nosa; ?>-15-FM-02</td> </tr>
        </table>
        <table width="460" style="margin-top: 4%; margin-left: 7%; margin-right: 35%;">        
            <tr>
                <th colspan="4" style="background: rgb(178,178,178);">REPORTE DE RESULTADOS DE AUDITORIAS</th>
            </tr>
            <tr>
                <th style="background: rgb(178,178,178);">No. Auditoria: </th>
                <td><?php echo $idaud; ?></td>
                <th style="background: rgb(178,178,178);">Tipo de Auditoria: </th>
                <td><?php echo $tipoAuditoria; ?> </td>
            </tr>
            <tr>
                <th style="background: rgb(178,178,178);">Fecha de elaboración: </th>
                <td colspan="3"><?php echo $fechaR; ?> </td>
            </tr>
            <tr>
                <th style="background: rgb(178,178,178);">Reporte Elaborado por: </th>
                <td colspan="3"><?php echo $ela; ?></td>
            </tr>
            <tr>
                <th colspan="4" style="background: rgb(178,178,178);">Comentarios de hallazgos de la auditoria: </th>
            </tr>
            <tr>
                <td colspan="4"><?php echo $comm; ?></td>
            </tr>
            <tr>
                <th colspan="4" style="background: rgb(178,178,178);">Conclusiones: </th>
            </tr>
            <tr>
                <td colspan="4"><?php echo $conc; ?></td>
            </tr>
            <tr>
                <th colspan="4" style="background: rgb(178,178,178);">Recomendaciones: </th>
            </tr>
            <tr>
                <td colspan="4"><?php echo $reco; ?></td>
            </tr>
        </table>
        <p>Este reporte será comunicado a todos los niveles de la estación de servicio.</p>

        <p>Nombre y firma de quien recibe el reporte.</p>
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
    $dompdf->stream('reporteAuditoria_.pdf', array("Attachment" => false)); //false para abrir, true para bajarse

?>