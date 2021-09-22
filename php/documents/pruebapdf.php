<?php
	include '../conex.php';
    $id = $_GET["x"];
    $con = Conectarse();

	require __DIR__.'\vendor\autoload.php';
	use Spipu\Html2Pdf\Html2Pdf;

    //PRUEBA DE DATOS
    //echo $idreporte."NO ESTACION: ".$nosa." INSTALACION: ".$nombre;

    $html2pdf = new Html2Pdf('P','A4','es','true','UTF-8');
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
                                <td rowspan="3"> </td>
                                <td colspan="2">Sistema de Administración de Seguridad Industrial Seguridad Operativa y Protección al Medio Ambiente</td>            
                            </tr>
                            
                        </table>
                    </body>
                    </html>');
    $html2pdf->output();
?>