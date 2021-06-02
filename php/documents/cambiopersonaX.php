<?php
	include '../conex.php';
    $id = $_GET["x"];
    $con = Conectarse();

	require __DIR__.'\vendor\autoload.php';
	use Spipu\Html2Pdf\Html2Pdf;

    $encab = "SELECT razonSocial AS inst, abreviatura as abrv, rtec as tecnico, rl as legal FROM cesh a INNER JOIN estado b ON a.idEstado = b.idEstado WHERE idCESH = '".$id."'";
    $rese = mysqli_query($con, $encab);
    if($rese->num_rows > 0){
        while($fila0 = $rese->fetch_assoc()){
            $nombre = $fila0['inst'];
            $abr = $fila0['abrv'];
            $rept = $fila0['tecnico'];
            $repl = $fila0['legal'];
        }
    }

    //dividir aqui la parte del PL
    $separador = explode("/",$id);
    $nosa = $separador[0].$separador[1];

    $titulo = $nosa." ".$nombre;

	$reportecambio = "SELECT a.area, a.motivo, b.nombre, b.apellidoP, b.apellidoM, b.puesto, d.nombreCurso FROM dzcambiop a JOIN organigrama b ON a.idTrab = b.idTrab JOIN trabcurso c ON c.idTrab = a.idTrab JOIN curso d ON d.idCurso = c.idCurso WHERE a.idCESH = '".$id."' ORDER BY idCambio DESC LIMIT 1";

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
            $curso = $fila1['nombreCurso'];
        }
    }
    //PRUEBA DE DATOS
    //echo $idreporte."NO ESTACION: ".$nosa." INSTALACION: ".$nombre;

    $html2pdf = new Html2Pdf('P','letter','es','true','UTF-8');
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
                                        <td rowspan="3">IMG</td>
                                        <td colspan="2">Sistema de Administración de Seguridad Industrial Seguridad Operativa y Protección al Medio Ambiente</td>            
                                    </tr>
                                    <tr> <td colspan="2">'.$titulo.'</td> </tr>
                                    <tr> <td>Cambio de Personal</td> <td> SASISOPA-'.$abr.'-'.$nosa.'-10-FM-04</td> </tr>
                                </table>

                                <table width="2560" style="margin-top: 15%; margin-left: 10%;">                                    
                                    <tr>
                                        <th> Área: </th>
                                        <td>'.$ar.'</td>
                                        <th> Nombre Personal: </th>
                                        <td>'.$nm.' '.$ap.' '.$am.'</td>
                                    </tr>
                                    <tr>
                                        <th colspan="4">Capacitación/Cursos</th>
                                    </tr>
                                    <tr>
                                        <td colspan="4">'.$curso.'</td>
                                    </tr>
                                    <tr>
                                        <td >Autorización de cambio</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"> '.$rept.' </td>
                                    </tr>
                                    <tr>
                                        <th colspan="4">Motivo de cambio</th>
                                    </tr>
                                    <tr>
                                        <td colspan="4">'.$mt.'</td>
                                    </tr>
                                </table>

                                <table width="2560" style="margin-top: 45%;">
                                    <tr>
                                        <td>Elaborado por: <br> '.$rept.'</td>
                                        <td>Revisado por: <br> '.$rept.'</td>
                                        <td>Aprobado por: <br> '.$repl.'</td>
                                        <td>Fecha de publicación: <br></td>
                                        <td>Fecha de edición: <br></td>
                                    </tr>
                                </table>
                                
                            </body>
                            </html>');
    $html2pdf->output();
?>