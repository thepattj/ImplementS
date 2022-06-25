<?php
    ob_start();
?>


<?php
    include '../conex.php';
    $id = $_GET["x"];
    //$id = 'PL/0000/EXP/ES/2020';
    $con = Conectarse();
    //echo $id; //prueba de que el ID si llega a esta pagina de la seleccion del modal del admin.
    
    // Variables para dar un cumplimiento a lo puntos de tener información dentro de la tabla, no quiere decir que este bien el contenido de la misma.
    $tienept1 = 0;
    $tienept2 = 0;
    $tienept3 = 0;
    $tienept4 = 0;
    $tienept5 = 0;
    $tienept6 = 0;
    $tienept7 = 0;
    $tienept8 = 0;
    $tienept9 = 0;
    $tienept10 = 0;
    $tienept11 = 0;
    $tienept12 = 0;
    $tienept13A = 0;
    $tienept13S = 0;
    $tienept14 = 0;
    $tienept15 = 0;
    $tienept16 = 0;
    $tienept18 = 0;

    
    $encab = "SELECT razonSocial AS inst, abreviatura as abrv, tipoCESH as giro FROM cesh a INNER JOIN estado b ON a.idEstado = b.idEstado WHERE idCESH = '".$id."'";
    $rese = mysqli_query($con, $encab);
    if($rese->num_rows > 0){
        while($fila0 = $rese->fetch_assoc()){
            $nombre = $fila0['inst'];
            $abr = $fila0['abrv'];
            $giro = $fila0['giro'];
        }
    }

    //dividir aqui la parte del PL
    $separador = explode("/",$id);
    $nosa = $separador[0].$separador[1];
    $titulo = $nosa." ".$nombre;
    //echo $titulo; // prueba de que el query y el titulo funcionan con la información correcta 

    //SQL POLITICA
    $politica = "SELECT idCESH, tipoD, fechaD, direccion FROM politica WHERE idCESH = '".$id."' GROUP BY idCESH";
    $pt1res = mysqli_query($con, $politica);
    if($pt1res->num_rows > 0){
        $respolitica = "CUMPLIMIENTO";
        $respolitica1 = "SE DIO";
        while($filaPol = $pt1res->fetch_assoc()){
            $politicadif = $filaPol['tipoD'];
            $politicafecha = $filaPol['fechaD'];
            $politicadir = $filaPol['direccion'];
        }
        $tienept1 = 1;
    }
    //echo "respuesta".$respolitica." ".$respolitica1." tipo de divulgación: ".$politicadif." fecha de divulgación: ".$politicafecha." dirección de archivo: ".$politicadir; //DA LOS RESULTADOS ESPERADOS.

    //SQL ANALISIS DE RIESGOS
    $ar = "SELECT idCESH, direccion FROM ar WHERE idCESH = '".$id."' GROUP BY idCESH";
    $pt2res = mysqli_query($con, $ar);
    $contador = 0;
    if($pt2res->num_rows > 0){
        $resar = "CUMPLIMIENTO";
        $tienept2 = 1;
        while($filaAR = $pt2res->fetch_assoc()){
            $contador++;
            $ardireccion = $filaAR['direccion'];
        }
    }
    //echo "Dirección del ar cargado: ".$ardireccion." cuantos archivos hay? ".$contador;

    //SQL REQUISITOS LEGALES
    $legales = "SELECT idCESH FROM documento WHERE idCESH = '".$id."' GROUP BY idCESH";
    $pt3res = mysqli_query($con, $legales);
    if($pt3res->num_rows > 0){
        $legalesres = "CUMPLIDO";
        $tienept3 = 1;
    }

    //SQL OBJETIVOS   
    $obj = "SELECT idCESH FROM objetivo WHERE idCESH = '".$id."' GROUP BY idCESH";
    $pt4res = mysqli_query($con, $obj);
    if($pt4res->num_rows > 0){
        $objres = "CUMPLIMIENTO";
        $tienept4 = 1;
    }

    //SQL AUTORIDAD REP TECNICO
    $respon = "SELECT idCESH FROM organigrama WHERE idCESH = '".$id."' GROUP BY idCESH";
    $pt5res = mysqli_query($con, $respon);
    if($pt5res->num_rows > 0){
        $resorganigrama = "CUMPLIMIENTO";
        $tienept5 = 1;
    }

    //SQL COMPETENCIAS
    $compe = "SELECT idCESH FROM trabcurso WHERE idCESH = '".$id."' GROUP BY idCESH";
    $pt6res = mysqli_query($con, $compe);
    if($pt6res->num_rows > 0){
        $rescompetencia = "CUMPLE";
        $tienept6 = 1;
    }


    $comun = "SELECT idCESH FROM sugque WHERE idCESH = '".$id."' GROUP BY idCESH";
    $pt7res = mysqli_query($con, $comun);
    if($pt7res->num_rows > 0){
        $rescomun = "CUMPLIMIENTO";
        $res1comun = "Presentanción";
        $tienept7 = 1;
    }

    $controld = "SELECT idCESH FROM control WHERE idCESH = '".$id."' GROUP BY idCESH";
    $pt8res = mysqli_query($con, $controld);
    if($pt8res->num_rows > 0){
        $controlres = "CUMPLIMIENTO";
        $tienept8 = 1;
    }//else{
        //$controlres = "Incumplimiento";
    //}

    $pract = "SELECT idCESH FROM rbpo WHERE idCESH = '".$id."' GROUP BY idCESH";
    $pt9res = mysqli_query($con, $pract);
    if($pt9res->num_rows > 0){
        $respracticas = "CUMPLIMIENTO";
        $respracticase = "por la ejecución";
        $tienept9 = 1;
    }//else{
        //$respracticas = "Incumplimiento";
        //$respracticase = "nula participación";
    //}


    $control = "SELECT idCESH FROM dzbitacora WHERE idCESH = '".$id."' GROUP BY idCESH";
    $controlp = "SELECT idCESH FROM dzcambiop WHERE idCESH = '".$id."' GROUP BY idCESH";
    $controlt = "SELECT idCESH FROM dzcambiot WHERE idCESH = '".$id."' GROUP BY idCESH";
    $controlo = "SELECT idCESH FROM dzordentr WHERE idCESH = '".$id."' GROUP BY idCESH";

    $pt10 = mysqli_query($con, $control);
    $pt10p = mysqli_query($con, $controlp);
    $pt10t = mysqli_query($con, $controlt);
    $pt10o = mysqli_query($con, $controlo);
    
    if($pt10->num_rows > 0) {
        $tienept10 = 1;
    }
    if($pt10->num_rows > 3) {
        $tienept10 = 2;
        $res10 = "CUMPLIMIENTO";
    }
    if($pt10o->num_rows > 0){
        $tienept10 = 2;
        $res10 = "CUMPLIMIENTO";
    }
    if($pt10t->num_rows > 0){
        $tienept10 = 2;
        $res10 = "CUMPLIMIENTO";
    }


    $bitacoras = "SELECT idCESH FROM bitacoras WHERE idCESH = '".$id."' GROUP BY idCESH";
    $pt11 = mysqli_query($con, $bitacoras);
    if($pt11->num_rows > 3){
        $resbit11 = "CUMPLIMIENTO se presenta las ";
        $tienept11 = 1;
    }


    $contratistas = "SELECT idCESH FROM dcproveedor WHERE idCESH = '".$id."' GROUP BY idCESH";
    $pt12 = mysqli_query($con, $contratistas);
    if($pt12->num_rows > 0){
        $rescont0 = "CUMPLIMIENTO";
        $tienept12 = 1;
    }

    $pres = "SELECT idCESH, direccion, tipo FROM pre WHERE tipo LIKE '%acuse%' AND idCESH = '".$id."' GROUP BY idCESH";
    $pt13 = mysqli_query($con, $pres);
    if($pt13->num_rows > 0){
        $respre0 = "CUMPLIDO, el anexado de la copia por medio electronicos del ingreso de formato FF-ASEA-037 y el proyecto mismo en el medio electronico.";
        $tienept13A = 1;
    }
    $preSim = "SELECT idCESH FROM pre WHERE tipo LIKE '%reporte%' AND idCESH = '".$id."' GROUP BY idCESH";
    $pt13Sim = mysqli_query($con, $preSim);
    if($pt13Sim->num_rows > 0){
        $respreSim = "CUMPLIDO";
        $tienept13S = 1;
    }else{
        $tienept13S = 0;
    }
    //echo $preSim; VERIFICACION DE QUERY
    //echo " valores del pre: ".$tienept13A." o ".$tienept13S." acuse / reporte"; //VERIFICACION DE VALORES de reporte o acuse.

    $monitoreo = "SELECT idCESH FROM monverif WHERE idCESH = '".$id."' GROUP BY idCESH";
    $pt14 = mysqli_query($con, $monitoreo);
    if($pt14->num_rows > 0){
        $subsanacion = "CUMPLIDO";
        $tienept14 = 1;
    }    

    $auditoria = "SELECT idCESH FROM reportea WHERE idCESH = '".$id."' GROUP BY idCESH";
    $pt15 = mysqli_query($con, $auditoria);
    if($pt15->num_rows > 0){
        $auditores = "CUMPLIDO";
        $tienept15 = 1;
    }

    $incidentes ="SELECT fechaInicio, fechaActualizada FROM incidentes WHERE idCESH = '".$id."' GROUP BY idCESH";
    $pt16res = mysqli_query($con, $incidentes);
    if($pt16res->num_rows > 0){
        $fechainicio = $pt16res['fechaInicio'];
        $fechafin = $pt16res['fechaActualizada'];
        $succ = "LOGRADO";
        $razon = "esto mediante la implementación de todo los controles tanto operativos, técnicos y administrativos establecidos";
        $tienept16 = 1;
    }

    $informe ="SELECT idCESH FROM informe WHERE idCESH = '".$id."'";
    $pt18res = mysqli_query($con, $informe);
    if($pt18res->num_rows > 0){
        //$fechainicio = $pt18res['fechaInicio'];
        $tienept18 = 1;
    }
?>
    <!-- PRUEBA DE DATOS
    echo $idreporte."NO ESTACION: ".$nosa." INSTALACION: ".$nombre; -->

<!doctype html>
<html class="no-js" lang="">
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
        <style>            
            td, th {
                border: 1px solid rgb(0, 0, 0);
                padding: 8px;
                text-align:center;
            }
            #cuerpo{
                font-family: "Source Sans Pro", cursive;
            }
        </style>        
    </head>
    
    <body id="cuerpo">
        <div>
            <table style="margin-left:5%;">
                <tr>
                    <td colspan="2">Sistema de Administración de Seguridad Industrial Seguridad Operativa y Protección al Medio Ambiente</td>            
                </tr>
                <tr> <td colspan="2"><?php echo $nosa." ".$nombre;?></td> </tr>
                <tr> <td>Reporte Semestral</td> <td> SASISOPA-<?php echo $abr; ?>-<?php echo $nosa; ?>-17-RP-01</td> </tr>
            </table>    
        </div>
        <div id="politica">      
            <h3>Elemento 1: POLÍTICA.</h3>
            <?php
                if($tienept1 == 1){ ?>
                    <p style="text-align:justify;">Se da <b><?php echo $respolitica; ?></b> a este elemento de política de seguridad, salud y medio ambiente SASISOPA-<?php echo $abr; ?>-<?php echo $nosa; ?>-01-POL-01. La cual fue Revisada y firmada por alta dirección y <?php echo $respolitica1;?> la difusión mediante <?php echo $politicadif; ?> en fecha <?php echo $politicafecha; ?> que se realizó al personal directo, contratistas y/o proveedores de la estación de servicios como parte del cumplimiento de la implementación del SASISOPA en toda actividad y operación verificando su cumplimiento durante las visitas de inspección. Como prueba se presenta el <a href="<?php echo $politicadir; ?>">Anexo I</a> en el apartado correcto.</p>
            <?php
                }else{ ?>
                    <p style="text-align:justify;">Se dara cumplimiento al elemento de la política de seguridad, salud y medio ambiente una vez que se de a conocer nuestro documento SASISOPA-<?php echo $abr; ?>-<?php echo $nosa; ?>-01-POL-01. La cual sera revisada y firmada por alta dirección y se difundira en en el siguiente semestre de la implementación.</p>
            <?php
                } ?>
        </div>
        <!-- EVALUACION DE ASPECTOS AMBIENTALES Y ANALISIS DE RIESGOS -->
        <div>
            <h3>Elemento 2: IDENTIFICACIÓN DE PELIGROS Y ASPECTOS AMBIENTALES, ANÁLISIS DE RIESGOS Y EVALUACIÓN DE IMPACTOS AMBIENTALES</h3>
            <?php
                if($tienept2 == 1){ ?>
                    <p style="text-align:justify;">El análisis de riesgo y la Evaluación de Aspectos ambientales se realizo, aplicando metodologías para la identificación de los riesgos o peligros. En el análisis de riesgo utilizamos el método de William T Fine para la identificación de riesgos en donde se relacionan tareas de los procesos con la identificación de consecuencias bajo las categorías de Daños al personal, Daños al medio ambiente, Daños a la instalación, así como la categoría de riesgos asociado a escenarios: riesgo bajo (A y B), riesgo medio (C1 y C2) y riesgo Alto (D y E).<br>

                    Es nuestro compromiso identificar los peligros, así como analizar, evaluar, jerarquizar, monitorear y mitigar los riesgos y aspectos ambientales, relacionados con las actividades propias de su Proyecto en las diferentes Etapas de Desarrollo del mismo para lo cual contamos con el mecanismo descrito en los procedimientos SASISOPA-<?php echo $abr; ?>-<?php echo $nosa; ?>-02-PR-01 y SASISOPA-<?php echo $abr; ?>-<?php echo $nosa; ?>-02-PR-02.

                    Se adjunta evidencia electrónica documental del estudio:
                        <ol type="A">
                            <li>Evaluación de Análisis de Riesgo. (<a href="<?php echo $ardireccion; ?>">Anexo II</a>)</li>
                            <li>Evaluación de Aspectos Ambientales. (<a href="<?php echo $ardireccion; ?>">Anexo III</a>)</li>
                            <li>Listado de Peligros, Riesgos y Aspectos Ambientales a controlar en las Áreas de Trabajo. (Anexo IV)</li>
                        </ol>

                    Como esta establecido en la autorización de nuestro SASISOPA se da <b><?php echo $resar; ?></b> de este elemento, al establecer el mecanismo para la identificación de riesgos con la evaluación del análisis de riesgo y de los aspectos ambientales, por medio de este primer informe semestral.</p>
            <?php
                }else{ ?>
                    <p style="text-align:justify;">El análisis de riesgo y la Evaluación de Aspectos ambientales se realizara, aplicando metodologías para la identificación de los riesgos o peligros. En el análisis de riesgo utilizamos el método de William T Fine para la identificación de riesgos en donde se relacionan tareas de los procesos con la identificación de consecuencias bajo las categorías de Daños al personal, Daños al medio ambiente, Daños a la instalación, así como la categoría de riesgos asociado a escenarios: C1 (riesgo bajo), C2 y C3 (riesgo medio) y C4, C5(riesgo Alto).<br>

                    Se adjuntara los siguientes resultados como parte de la implementación:
                        <ol type="A">
                            <li>Evaluación de Análisis de Riesgo. (<a href="<?php echo $ardireccion; ?>">Anexo II</a>)</li>
                            <li>Evaluación de Aspectos Ambientales. (<a href="<?php echo $ardireccion; ?>">Anexo III</a>)</li>
                            <li>Listado de Peligros, Riesgos y Aspectos Ambientales a controlar en las Áreas de Trabajo. (Anexo III inciso a)</li>
                        </ol>
            <?php
                } ?>            
        </div>
        <!-- REQUISITOS LEGALES -->
        <div>
            <h3>Elemento 3: REQUISITOS LEGALES.</h3>
            <?php
                if($tienept3 == 1){ ?>
                    <p style="text-align:justify;">El cumplimiento de los requisitos legales está dentro de nuestra política y por lo tanto nos comprometamos con tener cada uno de elementos y otros aplicables actualizados y correctamente identificados.</p>
            
                    <table>
                        <tr>
                            <th colspan="4">Requisitos Legales para <?php echo $giro; ?></th>
                        </tr>
                        <tr>
                            <th>No.</th>
                            <th>Dependencia</th>
                            <th>Documento</th>
                            <th>Evidencia</th>
                        </tr>
                        <?php
                            $documentacionN = ['0','Dictamen de NOM-005-ASEA-2016','Manifiesto Impacto Ambiental (MIA)','Informe Preventivo (IP)','Licencia Ambiental Única (LAU) / Licencia de Funcionamiento(LF)','Registro de Generador de Residuos Peligrosos (GRP)','Cedula Operación Anual(COA)','Registro de polizas Contratadas','Reporte Diario (Volúmenes)','Reporte Precios','Dictamen de Calidad de petrolíferos (Laboratorios) (NOM-016-CRE-2016)','Reporte de Pagos Supervisión de permisos (Derechos, Productos y Aprovechamiento)','Poliza anual vigente de seguro (Seguro)','Reporte de Quejas','Procedencia del producto (facturas)','Reporte de inicidentes o emergencias','Anuncio Independiente (número de permiso CRE PL/XX/EXP/ES/20XX)','Sistema de Gestión de las mediciones','Acta Constitutiva','Poder Notarial','Comprobante Original de alta ante hacienda','R.F.C. Original','Permiso de la comisión reguladora de Energía (CRE)','Licencia de Funcionamiento (Municipal)','Dictamenten de uso de suelo / Factibilidad de uso de suelo','Tarjeta oficial de IMSS','Planos Arquitectonicos','SIEM (Sistema de Información Empresarial Mexicano)','Dictámenes eléctricos',' Dictámenes Tierras Fisicas y pararrayos','Calibración de dispensarios','Pruebas de Hermeticidad','Pruebas de Hermeticidad a Tuberias','Ficha Técnica y manual de tanque de almacenamiento','Ficha técnica y manual de dispensarios','Ficha técnica y manual de Control de inventarios','Verificación periódica de dispensarios','Reporte de control a distancia','Certificado Modelo Prototipo','Certificado de Inocuidad','Visto Bueno','Auto declaratoria','Informe de Contenido Nacional (Permisos)','NOM-001-STPS-2008.','NOM-002-STPS-2010.','NOM-004-STPS-1999.','NOM-005-STPS-1998.','NOM-006-STPS-2014.','NOM-009-STPS-2011','NOM-011-STPS-2001.','NOM-017-STPS-2008.','NOM-018-STPS-2015.','NOM-019-STPS-2011.','NOM-020-STPS-2011','NOM-022-STPS-2008','NOM-025-STPS-2008','NOM-026-STPS-2008.','NOM-029-STPS-2011.','NOM-030-STPS-2009.','NOM-033-STPS-2015.','NOM-035-STPS-2018.'];
                            $docslegales = "SELECT tipo, num, cumplimiento, evidencia FROM documento WHERE idCESH = '".$id."' ORDER BY tipo ASC";
                            $respdocs = mysqli_query($con, $docslegales);
                            if($respdocs->num_rows > 0){
                                $i = 1;
                                while ($pt3d = $respdocs->fetch_assoc()) {?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $pt3d['tipo']?>
                                        <td><?php echo $documentacionN[$i]; ?></td>
                                        <td><?php echo $pt3d['evidencia']; ?></td>
                                    </tr>
                        <?php       $i++;
                                }
                            }?>
                        
                    </table>

                    <p style="text-align:justify;">El seguimiento de los documentos en lo relacionado con la actualización se lleva mediante la visita de nuestro GESTOR y su portal web quienes verifican las actualizaciones y novedades con respecto a los cambios en las obligaciones de cada depencia.<br>
            
                    Las actualizaciones pueden ser:
                    <ol>
                        <li>La incorporación de nuevas actividades, servicios o procesos en la organización o proyecto.</li>
                        <li>La ampliación o modificación de las instalaciones o sitios de trabajo. </li>
                        <li>La identificación de nuevos peligros y su evaluación de riesgo.</li>
                        <li>La identificación de nuevos aspectos ambientales y su impacto.</li> 
                    </ol>
                    
                    Adicional en este rubro se realizaran verificaciones periodicas a la instalación para asegurar que se cumplan con los requisitos de matriz de identificación de Requisitos Legales, mediante auditorías internas que se les programa, en las cuales cuando se detectan hallazgos estos son comunicados de inmediato a la instalación para su cumplimiento.<br>
                    Los documentos que se tienen en el SASISOPA con respecto a este elemento y el seguimiento al cumplimiento de requisitos legales incluyendo los oficios de entrega y las autorizaciones respectivas, también se reporta mensualmente a nuestro gestor de las actualizaciones realizados y que fueron comunicados vía correo electrónico.<br><br>
                    
                    Se realizo la verificación de requisitos legales aplicables a la actividad de <?php echo $giro; ?> y se da por <b><?php echo $legalesres; ?></b>, el listado que contemplan los requisitos legales vigentes y otros requisitos aplicables a los procesos y a las actividades de los Regulados, incluyendo permisos, autorizaciones, licencias y otros trámites federales, estatales y municipales.</p>
            <?php
                }else{ ?>
                    <p style="text-align:justify;">El cumplimiento de este punto de los requisitos legales está dentro de nuestra política y por lo tanto nos comprometamos con tener cada uno de elementos y otros aplicables actualizados y correctamente identificados.

                    El seguimiento de los documentos en lo relacionado con la actualización se lleva mediante la visita de nuestro GESTOR y su portal web quienes verifican las actualizaciones y novedades con respecto a los cambios en las obligaciones de cada depencia.<br>
            
                    Las actualizaciones pueden ser:
                        <ol>
                            <li>La incorporación de nuevas actividades, servicios o procesos en la organización o proyecto.</li>
                            <li>La ampliación o modificación de las instalaciones o sitios de trabajo. </li>
                            <li>La identificación de nuevos peligros y su evaluación de riesgo.</li>
                            <li>La identificación de nuevos aspectos ambientales y su impacto.</li> 
                        </ol>
                    </p>
            <?php
                }
            ?>
        </div>
        <!-- OBJETIVOS METAS E INDICARORES -->
        <div>
            <h3>Elemento 4: METAS, OBJETIVOS E INDICADORES.</h3>
            <?php
                if($tienept4 == 1){ ?>
                    <p style="text-align:justify;">Se establecen procedimientos para el diseño y realización de objetivos, metas, programas e indicadores, los cuales son revisados por dirección.<br>
                    Las revisiones de los objetivos se realizan mensualmente, en el formato establecido SASISOPA-<?php echo $abr."-".$nosa; ?>-04-FM-01.<br>
                    En relación con los Objetivos y Metas, se establecieron indicadores proactivos y reactivos, solicitados por la ASEA y presentados en el SASISOPA:

                    <table>
                        <tr>
                            <th colspan="6">Objetivo <b>Cumplir nuestra politica.</b> </th>
                        </tr>
                        <tr>
                            <th>No.</th>
                            <th>Meta</th>
                            <th>Responsable</th>
                            <th>Cumplimiento</th>
                            <th>Indicador</th>
                            <th>Recursos necesarios para logro del objetivo</th>
                        </tr>
                        <?php
                            $objetivosql = "SELECT c.descripcion, c.indicador, o.cumplimiento, o.responsable FROM objetivo o INNER JOIN cobjetivo c ON o.obj = c.idCobj WHERE o.idCESH = '".$id."' ORDER BY c.idCobj ASC";
                            $respObj = mysqli_query($con, $objetivosql);
                            if($respObj->num_rows > 0){
                                $j=1;
                                while($pt4o = $respObj->fetch_assoc()) {?>
                                    <tr>
                                        <td><?php echo $j; ?></td>
                                        <td><?php echo $pt4o['descripcion']; ?></td>
                                        <td><?php echo $pt4o['responsable']; ?></td>
                                        <td><?php echo $pt4o['cumplimiento']; ?></td>
                                        <td><?php echo $pt4o['indicador']; ?></td>
                                        <td>Varios</td>
                                    </tr>
                        <?php
                                    $j++;
                                }
                            } ?>
                    </table>

                    De acuerdo al número de elemento se da el <b><?php echo $objres; ?></b> respecto a los elementos de los programas de gestión de objetivos, metas e indicadores conforme al mejoramiento que se presentan en la política, principios de SASISOPA y requerimientos legales.</p>
            <?php
                }else{ ?>
                    <p style="text-align:justify;">En <?php echo $nombre; ?> se establecen procedimientos para el diseño y realización de objetivos, metas, programas e indicadores, los cuales son revisados por dirección.<br>
                    Las revisiones de los objetivos se realizan mensualmente, en el formato establecido SASISOPA-<?php echo $abr."-".$nosa; ?>-04-FM-01.<br>
                    En relación con los Objetivos y Metas, se establecieron indicadores proactivos y reactivos, solicitados por la ASEA y presentados en el SASISOPA.
            <?php } ?>
        </div>                                
        <!-- AUTORIDAD Y FUNCIONES -->
        <div>
            <h3>Elemento 5: FUNCIONES, RESPONSABILIDADES Y AUTORIDAD</h3>
            <?php
                if($tienept5 == 1){ ?>
                    <p style="text-align:justify;">Se cuenta con un mecanismo para la visualización de funciones, responsabilidades y autoridad, que se puede ver en la estructura organizacional para las operaciones de servicios que presta la empresa, además es importante mencionar que el Sistema de Administración es conforme con los requisitos establecidos en los Lineamientos y demás normativa aplicable, donde se proponer la adopción de las mejores prácticas  en la implementación del Sistema de Administración, para coordinar las acciones necesarias y subsanar los incumplimientos de la normatividad interna y externa aplicable, informando a la alta dirección de la instalación acerca del desempeño del Sistema de Administración.<br>

                    La siguiente matriz describe puestos y responsabilidades de esta estructura.
                    <table>
                        <tr>
                            <th colspan="3">Personal de Estación</th>
                        </tr>
                        <tr>
                            <th>No.</th>
                            <th>Puesto</th>
                            <th>Nombre</th>
                        </tr>
                        <?php
                            $personal = "SELECT nombre, apellidoP, apellidoM, puesto FROM organigrama WHERE status = 'ACTIVO' AND idCESH = '".$id."' ORDER BY puesto ASC";
                            $respPerso = mysqli_query($con, $personal);
                            if($respPerso->num_rows > 0){ 
                                $k = 1;
                                while($pt5p = $respPerso->fetch_assoc()){ ?>
                                    <tr>
                                        <td><?php echo $k; ?> </td>
                                        <td><?php echo $pt5p['puesto']; ?></td>
                                        <td><?php echo $pt5p['nombre'].$pt5p['apellidoP'].$pt5p['apellidoM']; ?></td>                            
                                    </tr>
                        <?php 
                                    $k++;
                                }
                            } ?>
                    </table>

                    <table>
                        <tr>
                            <th colspan="3">Descripción de puestos</th>
                        </tr>
                        <tr>
                            <th>Puesto</th>
                            <th>Objetivo de la posición</th>
                            <th>Responsabilidades</th>
                        </tr>
                        <tr>
                            <th>Representante Legal</th>
                            <td>Firmar y autorizar los documentos oficiales del Sistema de Administración, Seguridad Industrial, Seguridad Operativa y Protección al Medio Ambiente (SASISOPA) para presentación a las autoridades.</td>
                            <td>
                                <ol>
                                    <li> Revisar y Autorizar la Política SASISOPA.</li>
                                    <li> Aprobar los objetivos y metas del Sistema de Administración, así como los programas que se implementarán para asegurar su cumplimiento y seguimiento. </li>
                                    <li> Dar seguimiento al cumplimiento de los requisitos legales y otros requisitos.</li>
                                    <li> Autorizar el Programa de Auditoría.</li>
                                    <li> Notificar los resultados de las Auditorías y definir el Plan de Atención de Hallazgos.</li>
                                </ol>
                            </td>
                        </tr>
                        <tr>
                            <th>Representante Técnico</th>
                            <td> Revisar todos los asuntos relacionados con el Sistema de Administración. </td>
                            <td>
                                <ol>
                                    <li> El análisis de riesgo y la evaluación de los aspectos ambientales.</li>
                                    <li> Asegurar que el SASISOPA es conforme con los requisitos establecidos en los lineamientos y demás normativa aplicable.</li>
                                    <li> Informar a la alta dirección acerca del desempeño del SASISOPA.</li>
                                    <li> Proponer la adopción de medidas para aplicar las mejores prácticas nacionales e internacionales en la implementación del SASISOPA. </li>
                                    <li> Coordinar y apoyar al resto de las áreas en la definición e implementación de las acciones necesarias para subsanar los incumplimientos de los requisitos del SA.</li>
                                    <li>Informar a la Agencia de cualquier situación crítica relativa al proyecto que pudiera poner en riesgo la SASISOPA.</li>
                                </ol>
                            </td>
                        </tr>
                        <tr>
                            <th>Administrativo</th>
                            <td> Auxiliar al Responsable Técnico en los actos administrativos.</td>
                            <td> Controlar la documentación relevante al SASISOPA. </td>
                        </tr>
                        <tr>
                            <th>Despachador</th>
                            <td> Suministrar combustible, agua, aceite y lubricantes a los vehículos de clientes de <?php echo $nombre; ?> utilizando los equipos y materiales requeridos para brindar con eficiencia los servicios solicitados por los usuarios.</td>
                            <td>
                                <ol>
                                    <li> Participar de forma directa en la mejora del SASISOPA, proponiendo sugerencias o comentarios, de forma verbal o escrita.</li>
                                    <li> Identificar y comunicar los peligros relacionados con las actividades.</li>
                                    <li> Participar y asistir a cada una de las capacitaciones que se imparten relacionadas con el Sistema de Administración</li>
                                </ol>
                            </td>
                        </tr>
                        <tr>
                            <th>Mantenimiento</th>
                            <td>Revisar todos los asuntos relacionados con el Sistema de Administración, Seguridad Industrial, Seguridad Operativa y Protección al Medio Ambiente (SASISOPA).</td>
                            <td>
                                <ol>
                                    <li> Comunicar al responsable técnico nuevos riesgos y aspectos ambientales.</li>
                                    <li> Informar a la alta dirección acerca de cualquier eventualidad de la implementación del SASISOPA.</li>
                                    <li> Proponer la adopción de medidas para aplicar las mejores prácticas nacionales e internacionales en la implementación del SASISOPA.</li>
                                    <li>Reporte de incidentes y accidentes, quejas y sugerencias en materia del SASISOPA.</li>
                                </ol>
                            </td>
                        </tr>
                    </table>

                    De acuerdo a la implementación del punto se presenta el <b><?php echo $resorganigrama; ?></b> con la designación de representante técnico actualizado (<a href="">Anexo V</a>). De acuerdo a la revisión de la Dirección general se realizas las descripciones de puesto de los integrantes del capital humano. 
            <?php
                }else{ ?>
                    <p style="text-align:justify;">Se contara con un mecanismo para la visualización de funciones, responsabilidades y autoridad, donde se pueda revisar la estructura organizacional para las operaciones de servicios que presta la instalación, además es importante mencionar que el Sistema de Administración es conforme con los requisitos establecidos en los Lineamientos y demás normativa aplicable, donde se proponer la adopción de las mejores prácticas  en la implementación del Sistema de Administración, para coordinar las acciones necesarias y subsanar los incumplimientos de la normatividad interna y externa aplicable, informando a la alta dirección de la instalación acerca del desempeño del Sistema de Administración.<br>
                    Implementar y emplear la asignación de representante Técnico el cual nos ayudara a definir el cumplimineto y procedimiento de nuestra implementación de SASISOPA.</p>
            <?php
                }
            ?>            
        </div>
        <!-- CURSO Y COMPETENCIAS -->
        <div>
            <h3>Elemento 6: COMPETENCIA, CAPACITACIÓN Y ENTRENAMIENTO</h3>
            <?php
                if($tienept6 == 1){ ?>
                    <p style="text-align:justify;">La empresa establece requerimientos para asegurar que el personal cuentan con las competencias técnicas y de seguridad, las mismas estan definidas por su descripción de puesto para garantizar un desempeño adecuado. Programas anuales para el desarrollo de la competencia que incluyan al menos:<br>            
                    <ol>
                        <li>Capacitación para operar o mantener equipos nuevos.</li>
                        <li>Capacitación inicial para el personal de nuevo ingreso.</li>
                        <li>Capacitación de actualización para el personal al menos cada 3 años de acuerdo a la actualización o cambios en las instrucciones de trabajo, la tecnología, los Procedimientos y la normatividad. El programa deberá contemplar a los contratistas, subcontratistas, prestadores de servicios y proveedores.</li>
                    </ol>
                    
                    Registros de competencia
                    <table>
                        <tr>
                            <th colspan="4">Cursos, entrenamientos y/o capacitaciones</th>
                        </tr>
                        <tr>
                            <th>No.</th>
                            <th>Curso</th>
                            <th>Nombre de empleado</th>
                            <th>Fecha</th>
                        </tr>
                    <?php
                        $cursos = "SELECT c.nombreCurso, c.fecha, t.nombre, t.apellidoP, t.apellidoM FROM trabcurso u INNER JOIN curso c ON u.idCurso = c.idCurso INNER JOIN organigrama t ON u.idTrab = t.idTrab WHERE u.idCESH = '".$id."' ORDER BY c.fecha ASC";
                        $respcurs = mysqli_query($con, $cursos);
                        if($respcurs->num_rows > 0){
                            $l = 1;
                            while($pt6c = $respcurs->fetch_assoc()){ ?>
                                <tr>
                                    <td><?php echo $l; ?></td>
                                    <td><?php echo $pt6c['nombreCurso']; ?></td>
                                    <td><?php echo $pt6c['nombre']." ".$pt6c['apellidoP']." ".$pt6c['apellidoM']; ?></td>
                                    <td><?php echo $pt6c['fecha']; ?></td>
                                </tr>
                    <?php
                                $l++;
                            }
                        }   ?>                                         
                    </table>
                    
                    Se presenta un Plan Anual de Capacitación (<a href="">Anexo VI</a>) para fomentar entre los trabajadores sobre los riesgos y peligros a que están expuestos durante el desempeño de sus labores, para que sean conscientes de la importancia de la política del Sistema de Administración, sus objetivos y metas, así como de la importancia de la aplicación de los controles operacionales.
                    
                    De acuerdo al numeral se <b><?php echo $rescompetencia; ?></b>; mencionando en específico la Matriz de Capacitación por Puesto de Trabajo, también se incluye el Plan Anual de Capacitación, y las difusiones de los requerimientos del elemento con el personal, así como la evidencia de capacitación generada.</p>
            <?php
                }else{ ?>
                    <p style="text-align:justify;">La empresa establece requerimientos para asegurar que el personal cuentan con las competencias técnicas y de seguridad, las mismas estan definidas por su descripción de puesto para garantizar un desempeño adecuado. Programas anuales para el desarrollo de la competencia que incluyan al menos:<br>
            
                    <ol>
                        <li>Capacitación para operar o mantener equipos nuevos.</li>
                        <li>Capacitación inicial para el personal de nuevo ingreso.</li>
                        <li>Capacitación de actualización para el personal al menos cada 3 años de acuerdo a la actualización o cambios en las instrucciones de trabajo, la tecnología, los Procedimientos y la normatividad. El programa deberá contemplar a los contratistas, subcontratistas, prestadores de servicios y proveedores.</li>
                    </ol>
                    
                    Se presentara un Plan Anual de Capacitación para fomentar entre los trabajadores sobre los riesgos y peligros a que están expuestos durante el desempeño de sus labores, para que sean conscientes de la importancia de la política del Sistema de Administración, sus objetivos y metas, así como de la importancia de la aplicación de los controles operacionales.</p>
            <?php
                }
            ?>            
        </div>
        <!-- COMUNICACION Y PARTICIPACION -->
        <div>
            <h3>Elemento 7: COMUNICACIÓN, PARTICIPACIÓN Y CONSULTA</h3>
            <?php
                if($tienept7 == 1){ ?>
                    <p style="text-align:justify;">La comunicación es fundamental, dentro de una instalación facilita que todos los colaboradores, incluyendo a los personal exterior (contratistas) cumplan, esto utilizando como herramienta el sistema de administración. Para asegurar el reporte de los actos y condiciones inseguras de trabajo, así como, la identificación de actos y condiciones que pueden dañar al ambiente:
                    <ol>
                        <li>Los Riesgos propios del Proyecto.</li>
                        <li>Los Aspectos Ambientales.</li>
                        <li>Los requisitos legales vigentes y otros requisitos aplicables al Proyecto.</li>
                        <li>El cumplimiento de objetivos y metas.</li>
                        <li>Los resultados de las Auditorías al Sistema de Administración.</li>
                        <li>Los resultados de la evaluación del Desempeño sobre la Seguridad. Industrial, Seguridad Operativa y Protección al Medio Ambiente.</li>
                        <li>La revisión de resultados por parte de la Dirección y las acciones que se deriven de ésta.</li>
                    </ol>
                    Los mecanismos de participación y consulta establecidas que se presentan en el sistema de Administración se darán cumplimiento al tener un buzón de quejas, que quede al alcance del personal interno como externo o también puede ser enviado por medio de un buzón electrónico o a un numero telefonico al servicio público en general.

                    Una vez identificadas estas mismas se les dio el seguimiento y atención correspondiente. De acuerdo al número la verificación se muestra el <b><?php echo $rescomun; ?></b> por la <?php echo $res1comun; ?> de los formatos que la instalación establece para la atención, respuesta y seguimiento de inquietudes, necesidades de información, quejas y sugerencias con el cual se pueden hacer llegar cualquier comunicación, y es para uso general de todo el personal interno.</p>
            <?php
                }else{ ?>
                    <p style="text-align:justify;">La comunicación es fundamental, dentro de una instalación facilita que todos los colaboradores, incluyendo a los personal exterior (contratistas) cumplan utilizando como herramienta el sistema de administración. Para asegurar el reporte de los actos y condiciones inseguras de trabajo, así como, la identificación de actos y condiciones que pueden dañar al ambiente:
                    <ol>
                        <li>Los Riesgos propios del Proyecto.</li>
                        <li>Los Aspectos Ambientales.</li>
                        <li>Los requisitos legales vigentes y otros requisitos aplicables al Proyecto.</li>
                        <li>El cumplimiento de objetivos y metas.</li>
                        <li>Los resultados de las Auditorías al Sistema de Administración.</li>
                        <li>Los resultados de la evaluación del Desempeño sobre la Seguridad. Industrial, Seguridad Operativa y Protección al Medio Ambiente.</li>
                        <li>La revisión de resultados por parte de la Dirección y las acciones que se deriven de ésta.</li>
                    </ol>
                    Por esta razón se utilizaran mecanismos de participación y consulta establecidas que se presentan en el sistema de Administración se darán cumplimiento al tener un buzón de quejas, que quede al alcance del personal interno como externo o también puede ser enviado por medio de un buzón electrónico o a un numero telefonico al servicio público en general.</p>
            <?php
                }
            ?>
        </div>               
        <!-- CONTROL DE DOCUMENTOS -->
        <div>
            <h3>Elemento 8: CONTROL DE DOCUMENTOS Y REGISTROS.</h3>
            <?php
                if($tienept8 == 1){ ?>
                    <p style="text-align:justify;">El sistema de administración cuenta con un mecanismo, con el propósito de mantenerlos revisados, aprobados, actualizados y protegidos; considerando su distribución, acceso, control de cambios, prevención del uso no intencionado de documentos obsoletos y que el personal tenga acceso a los documentos pertinentes a sus actividades, cuidando que se respete la confidencialidad de la información.<br>

                    Listado de la información documentada que conforma el Sistema de Administración se presenta en el <a href="documents/Punto8/<?php echo $id; ?>/08SASISOPA.zip">Anexo VII</a>. De acuerdo al numeral se da el <b><?php echo $controlres; ?></b> con todos los documentos descritos en el sistema de administración por cada uno de sus elementos y formatos correspondientes, estos registros permanecen legibles e identificables.</p>
            <?php
                }else{ ?>
                    <p style="text-align:justify;">El sistema de administración contara con un mecanismo, con el propósito de mantenerlos revisados, aprobados, actualizados y protegidos; considerando su distribución, acceso, control de cambios, prevención del uso no intencionado de documentos obsoletos y que el personal tenga acceso a los documentos pertinentes a sus actividades, cuidando que se respete la confidencialidad de la información.</p>
            <?php
                }
            ?>            
        </div>                        
        <!-- RBPO -->
        <div>
            <h3>Elemento 9: MEJORES PRÁCTICAS Y ESTÁNDARES</h3>
            <?php
                if ($tienept9 == 1) { ?>
                    <p style="text-align:justify;">La prioridad de <?php echo $nombre; ?> al operar es mantener e inspeccionar sus instalaciones, procesos, sistemas de seguridad y todo aquello relativo a la instalación, el objetivo es garantizar suficientes medidas de control de riesgos para todas las actividades de la compañía, incluyéndose procedimientos de acuerdo a las operaciones que se supervisan y los cuales cumplen con el proceso de control de documentos para su implementación en campo. <br>
            
                    Se entiende que una actualización que se base en la tecnología, equipos y ampliaciones que se realicen sea con mecanismos para integrar, conservar y mantener actualizada toda la información de la tecnología y la seguridad relativa a la etapa del proyecto que se desarrolla. Éste debe contener: 
                    <ol>
                        <li>a)  La información de Seguridad Industrial, Seguridad Operativa y de protección al medio ambiente de los materiales peligrosos manejados en el Proyecto en todas sus Etapas de Desarrollo (materia prima, productos, subproductos, residuos, materiales auxiliares en la operación, materiales del mantenimiento y la inspección, catalizadores u otros).</li>
                        <li>b)  La información relativa al proceso y sus estandares de operación que se pueda tener de manera enunciativa a traves de diagramas de flujo de proceso, diagramas de tubería e instrumentación, química del proceso, inventarios máximos previstos, variables del proceso y sus límites seguros de operación y balances de materia y energía</li>
                        <li>c)  La información relacionada con los equipos utilizados en las diferentes etapas del proyecto, como son: materiales de construcción, diagramas de tubería e instrumentación, diagramas de flujo de proceso, la ingeniería de detalle del sistema contra incendio, planos de clasificación eléctrica, planos estructurales, bases de diseño de los equipos, bases de diseño de equipos de relevo de presión, bases de diseño de sistemas de desfogue y quemadores, bases de diseño de sistemas instrumentados de seguridad, entre otros.</li>
                    </ol>
                    
                    <!-- [VERIFICACION CON RESPECTO AL ENTRENAMIENTO]
                    <table></table> -->
                                        
                    Se otorga el <b><?php echo $respracticas; ?></b> de mejores prácticas de ingeniería <?php echo $respracticase; ?> de los estándares de calidad del servicio, aplicación de mejores prácticas, para que se cumplan todas las condiciones de seguridad en el desarrollo de cada una de las actividades que con lleve a una operación libre de accidentes e incidentes, dado el registro de revisiones de buenas prácticas de operación.<br>
                    Esta revisión se realiza utilizando normas, códigos, estándares u otras regulaciones reconocidas y generalmente aceptadas a nivel internacional y garantiza las suficientes medidas de control de riesgos para todas las actividades de la compañía.</p>
            <?php
                }else{ ?>
                    <p style="text-align:justify;">Las mejores prácticas de ingeniería de los estándares de calidad del servicio y la  aplicación de mejores prácticas para el cumplimeinto de todas las condiciones de seguridad en el desarrollo de cada una de las actividades que con lleve a una operación libre de accidentes e incidentes, dado el registro de revisiones de buenas prácticas de operación es una parte importante para nuestra instalación. Realizada esta revisión a traves de normas, códigos, estándares u otras regulaciones reconocidas y generalmente aceptadas a nivel internacional que garantizan las suficientes medidas de control de riesgos para todas las actividades de la instalación.<br>

                    La prioridad de <?php echo $nombre; ?> sera el operar y mantener conforme a las inspecciones de sus instalaciones, procesos, sistemas de seguridad y todo aquello relativo a la instalación, el objetivo es garantizar suficientes medidas de control de riesgos para todas las actividades de la compañía, incluyéndose procedimientos de acuerdo a las operaciones que se supervisan y los cuales cumplen con el proceso de control de documentos para su implementación en campo.</p>
            <?php
                }
            ?>           
        </div>                        
        <!-- CONTROL DE ACTIVIDADES -->
        <div>
            <h3>Elemento 10: CONTROL DE ACTIVIDADES Y PROCESOS</h3>
            <?php
                if($tienept10 == 2){ ?>
                    <p style="text-align:justify;">Las actividades que se están llevando a cabo en campo y las operaciones son administradas por el Sistema de administración (SASISOPA) en las que mencionamos que podrían ocurrir en las diferentes etapas de desarrollo (Construcción, Operación, Mantenimiento, Cierre, Desmantelamiento y Abandono), con base en documentos escritos y prácticas seguras de trabajo documentadas, considerando los resultados del proceso de evaluación de impactos y riesgos y tomando en consideración los requisitos legales aplicables.<br>
            
                    Se comunicará a los contratistas, subcontratistas, prestadores de servicios y proveedores aquellos Mecanismos en donde estén establecidos controles para actividades que éstos realicen.<br>

                    Contamos con un Sistema de Permisos para Trabajos con Riesgo, (SASISOPA-<?php echo $abr.'-'.$nosa; ?>-10-FM-01), para la planeación y autorización de la ejecución de trabajos de alto riesgo que establezca el análisis y verificación de condiciones de SASISOPA.<br>
                    Contamos con un mecanismo para ejecutar los análisis de seguridad de los trabajos Instructivo para el Análisis de Seguridad en el Trabajo. 
                    A través del documento Procedimiento de Administración de Cambios en los Procesos, Instalaciones y Personal para Puestos Críticos (SASISOPA-<?php echo $abr.'-'.$nosa; ?>-10-FM-03), logramos administrar, documentar y comunicar cambios temporales o definitivos, exceptuando reemplazos equivalentes, en las sustancias peligrosas, variables del proceso, tecnología, instalaciones, equipo, procedimientos organizacionales y de personal.<br>


                    A través de los lineamientos establecidos en el Procedimiento de Revisión de Seguridad de Operación logramos ejecutar la verificación de SASISOPA, en el mantenimiento y operación de las instalaciones con reparaciones o modificaciones mayores, considerando la verificación del cumplimiento de las especificaciones de diseño, cierre y desmantelamiento.<br>            

                    Actividades de la etapa de <b>desmantelamiento y abandono</b> considerando las siguientes:
                    <ol>
                        <li>a. Uso de maquinaria, equipo, manejo de combustibles y sustancias químicas;</li>
                        <li>b. Protección de suelo y cuerpos de agua, descarga de agua residual, emisión de ruido, emisión de gases a la atmósfera y manejo de residuos;</li>
                        <li>c. Desmantelamiento de recipientes sujetos a presión, tanques de almacenamiento, tuberías y accesorios.</li>
                        <li>d. Restauración de áreas contaminadas y manejo de pasivos ambientales, en su caso.</li>
                    </ol>
                                            
                    Con los formatos en uso se da por <b><?php echo $res10; ?></b> en este punto dado que se ejecutaron practicas de Seguridad Industrial, Seguridad Operativa y de Protección Ambiental, apegadas a los requisitos establecidos en las guías, procedimientos y practicas seguras de trabajo documentados y anexados como Bitacoras de Control de actividades y procesos (Anexo VIII).</p>
            <?php
                }else{ ?>
                    <p style="text-align:justify;">Las actividades que se están llevando a cabo en campo y las operaciones son administradas por el Sistema de administración (SASISOPA) en las que mencionamos que podrían ocurrir en las diferentes etapas de desarrollo (Construcción, Operación, Mantenimiento, Cierre, Desmantelamiento y Abandono), con base en documentos escritos y prácticas seguras de trabajo documentadas, considerando los resultados del proceso de evaluación de impactos y riesgos y tomando en consideración los requisitos legales aplicables.<br>
            
                    Contamos con varios mecanismos de analisis para nuestra etapa de vida de nuestra instalación (<b>Operación y Mantenimiento</b>). Esto con el fin de establecer los riesgos, la seguridad de los trabajos, los instructivos que se utilizan para poder realizas las actividades diferentes de trabajo.<br> A través de los lineamientos establecidos en el Procedimiento de Revisión de Seguridad de Operación logramos ejecutar la verificación de SASISOPA, en el mantenimiento y operación de las instalaciones con reparaciones o modificaciones mayores, considerando la verificación futura del cumplimiento de las especificaciones del cierre y desmantelamiento.<br>            

                    En actividades futuras de las etapas de <b>desmantelamiento y abandono</b> se considera:
                        <ol>
                            <li>a. Uso de maquinaria, equipo, manejo de combustibles y sustancias químicas;</li>
                            <li>b. Protección de suelo y cuerpos de agua, descarga de agua residual, emisión de ruido, emisión de gases a la atmósfera y manejo de residuos;</li>
                            <li>c. Desmantelamiento de recipientes sujetos a presión, tanques de almacenamiento, tuberías y accesorios.</li>
                            <li>d. Restauración de áreas contaminadas y manejo de pasivos ambientales, en su caso.</li>
                        </ol>
                    </p>
            <?php
                }
            ?>            
        </div>
        <!-- BITACORAS PUNTO 11 -->
        <div>
            <h3>Elemento 11: INTEGRIDAD MECÁNICA Y ASEGURAMIENTO DE LA CALIDAD.</h3>
            <?php
                if($tienept11 == 1){ ?>
                    <p style="text-align:justify;">Asegurar la integridad mecánica de los activos y la calidad de equipos de proceso, instalados o nuevos, sus refacciones y partes de repuesto, en cualquiera de las etapas de desarrollo del proyecto y desde sus especificaciones de diseño, compra, transporte, almacenamiento, construcción e instalación asi como su deshuso, desinstalación, actualización resguardo y manejo adecuado del residuo son los objetivos de <?php echo $nombre; ?>. Esto hace que se contemple el ejecutar las actividades de Seguridad Industrial, Operativa y de protección al medio ambiente en la operación, cierre, desmantelamiento y abandono de igual forma.<br>           
                    También como parte de la revisión de los procesos en campo, usamos el mecanismo mediante el dictamen otorgado por un tercero de la NOM-005-ASEA-2015, con el cual verificamos el cumplimiento en campo con respecto a la calidad y servicio requeridos, esto, con el fin de asegurar el cumplimiento con los requisitos operativos, seguridad, salud, medio ambiente<br>
                    En <?php echo $nombre; ?> se realizaron mecanismos de control para asegurar la eficiencia de los equipos, componentes y sistemas críticos, así mismo, la administración de los riesgos. Para su <b><?php echo $resbit11; ?></b> bitácoras para este control de equipos y la aplicación el mecanismo para el mantenimiento, las inspecciones y pruebas, anexados como Bitacoras de Integridad Mecánica y aseguramiento de la calidad (Anexo IX).</p>
            <?php
                }else{?>
                    <p style="text-align:justify;">Se establecen los mecanismos mediante los cuales se asegura la integridad mecánica y el aseguramiento de la calidad de equipos, sus accesorios, partes de repuesto entre otros, en cualquiera de las etapas de desarrollo del proyecto. Esto hace que se contemplen las actividades de Seguridad Industrial, Operativa y de protección al medio ambiente.<br>En la estación de servicio se realizaron mecanismos de control para asegurar la eficiencia de los equipos, componentes y sistemas críticos, así mismo, la administración de los riesgos. Para su cumplimiento se presenta las bitácoras en donde se lleva el control de equipos y la aplicación del mecanismo para el mantenimiento, las inspecciones y pruebas.</p>
            <?php
                }
            ?>            
        </div>
        <!-- CONTRATISTAS -->
        <div>
            <h3>Elemento 12: SEGURIDAD DE CONTRATISTAS</h3>
            <?php
                if($tienept12 == 1){ ?>
                    <p style="text-align:justify;">Todos los contratistas, proveedores y/o prestadores de <?php echo $nombre;?> tienen la responsabilidad de cumplir y hacer cumplir con las disposiciones de seguridad industrial, seguridad operativa y protección ambiental esta actividad está declarada dentro de la Política. La responsabilidad de contratar empresas de servicios para ejecutar obras y servicios necesarios y requeridos para la operación de campos en sus distintas fases de la cadena de valor. competen la revisión y ejecución del Sistema Administrativo.<br>
                    Asume la responsabilidad por la ejecución de las actividades y la administración de riesgos que se derivan de actividades propias, de los contratistas, subcontratistas, prestadores de servicio y proveedores que participan en cualquiera de las Etapas de Desarrollo del Proyecto. El documento emitido por el Regulado donde asume la responsabilidad por la administración de Riesgo y de Impactos al Ambiente que se deriven de las actividades de los contratistas, subcontratistas, prestadores de servicio y proveedores a traves del (ANEXO X)<br>
                    Los contratistas deberán presentar mensualmente al Rep. Técnico, la medición mensual de su cumplimiento con el Sistema de Administración de Seguridad Industrial, Seguridad Operativa y Protección Ambiental (SASISOPA).                                        
                    <h4>Desempeño de los Contratistas</h4>
                    <table>
                        <tr>
                            <th colspan="4">Contratistas, proveedores y/o prestadores de <?php echo $nombre;?> </th>
                        </tr>
                        <tr>
                            <th>No.</th>
                            <th>Nombre</th>
                            <th>Servicio</th>
                            <th>Evaluación</th>
                        </tr> 
                    <?php
                        $contrat = "SELECT razonSocial, deServicio, evaluacion FROM dcproveedor WHERE idCESH = '".$id."'";
                        $respcont = mysqli_query($con,$contrat);
                        if($respcont->num_rows > 0){
                            $m = 1;
                            while ($pt12co = $respcont->fetch_assoc()) {?>                   
                                <tr>
                                    <td><?php echo $m; ?></td>
                                    <td><?php echo $pt12co['razonSocial']; ?></td>
                                    <td><?php echo $pt12co['deServicio']; ?></td>
                                    <td><?php echo $pt12co['evaluacion']; ?></td>
                                </tr>
                    <?php   $m++;
                            }
                        } ?>
                    </table>
                    
                    Para el cumplimiento del elemento se verifica la experiencia y competencia de la empresa prestadora de servicios, validando historia de trabajo ejecutados para el servicio contratado, capacidad técnica, tecnología a implementar en los servicios, capacidad técnica del personal, y reputación.<br>
                    Dado que se revisa periódicamente y se verifica estos elementos de evaluación se da por <b><?php echo $rescont0;?></b> los requisitos según el anexo de control de auditorías de contratistas.</p>

            <?php
                }else{ ?>
                    <p style="text-align:justify;">Todos los contratistas, proveedores y/o prestadores de servicio de la instalación <?php echo $nombre;?> tienen la responsabilidad de cumplir y hacer cumplir con las disposiciones de seguridad industrial, seguridad operativa y protección ambiental esta actividad está declarada dentro de la Política. La responsabilidad de contratar empresas de servicios para ejecutar obras y servicios necesarios y requeridos para la operación y mantenimiento de las instalación en sus distintas fases de vida dependera de la administracion y de los elementos que competen la revisión y ejecución del Sistema Administrativo.<br>
                    Seleccionamos a nuestros contratistas, subcontratistas proveedores y prestadores de servicio considerando su desempeño en Seguridad Industrial, Seguridad Operativa y protección del medio ambiente, evaluando entre otros:
                    <ol>
                        <li>a) El histórico de incidentes y accidentes.</li>
                        <li>b) Los indicadores de desempeño de Seguridad Operativa, Seguridad Industrial y protección al medio ambiente.</li>
                        <li>c) La competencia del personal propuesto para desarrollar las actividades y administrar la Seguridad Operativa, Seguridad Industrial y protección al medio ambiente.</li>
                        <li>d) Su experiencia en la materia, así como de su capacidad técnica.</li>
                        <li>e) Que la infraestructura propuesta cumpla con la normatividad aplicable.</li>
                        <li>f) Los criterios de Seguridad Operativa, Seguridad Industrial y protección al medio ambiente para la aceptación de los contratistas, subcontratistas, prestadores de servicios y proveedores, para ser susceptibles de contrato</li>
                    </ol>
                                            
                    Durante todos estos procesos también se realizaron inspecciones, auditorias efectivas, reuniones con contratistas inspecciones y seguimientos de no conformidades para garantizar la comunicación con los contratistas mediante todos los mecanismos establecidos, para que asi puedan cumplir los requisitos en materia de Seguridad Industrial, Seguridad Operativa y la protección al medio ambiente a los que deben sujetarse.</p>
            <?php 
                }
            ?>            
        </div>
        <!-- PRE -->
        <div>
            <h3>Elemento 13: PREPARACIÓN Y RESPUESTA A EMERGENCIAS</h3>
            <?php
                if(($tienept13A == 1)&&($tienept13S == 0)){ ?>
                    <p style="text-align:justify;">En la previsión de un incidente operativo o ambiental, se cuenta con los protocolos de planes a respuesta a emergencias en dicho documento identifica situaciones potenciales de emergencia, tales como fugas, derrames, incendios o explosiones, por el manejo de las sustancias peligrosas y otras situaciones de emergencia potenciales relacionadas con factores externos como los meteorológicos o los sociales.<br>
                    
                    Asegure la disponibilidad de los recursos necesarios para controlar o hacer frente al evento, tales como recursos financieros y personal capacitado y en su caso, certificado, servicios médicos, equipamiento, sistema contra incendio, sistemas de contención de fugas, rutas de evacuación, equipo de protección personal y medios de comunicación, entre otros, es decir, con planes de atención a emergencias que den respuesta eficaz a todas las situaciones potenciales de emergencia identificadas por el Regulado, donde  se describen las responsabilidades de los funcionarios, con base en la capacidad de respuesta instalada mínima necesaria en el Campo, caso contrario se escalaría a una solicitud de asistencia con convenios de apoyo con los regulados y entidades municipales y así dar cumplimiento de las actividades en nuestra área contractual durante todas las etapas.<br>
                    
                    <b><?php echo $nombre; ?></b> establece actividades para identificar situaciones potenciales de emergencia y accidentes que pueden tener impacto en la seguridad, salud ocupacional y protección ambiental y cómo responder a ellos en el procedimiento: plan de Respuesta a emergencias.<br>

                    Derivado de las nuevas Disposiciones Administrativas de Carácter General (DAGC) emitidas por la ASEA en el DOF con fecha del 22/03/2019, se realizó la actualización del mismo y fue ingresado a la AGENCIA mediante el oficio <a href="">AnexoXI</a>, y debido a sus recientes cambios se está haciendo la difusión con el personal de la empresa incluyendo a los contratistas-subcontratistas.<br>
                    De acuerdo lo solicitado en la Autorización: Como parte de su informe semestral de cumplimiento del Programa de Implementación, el REGULADO deberá presentar el Formato FF-ASEA-037 “Actualización del Protocolo de Respuesta a Emergencias”, anexando una copia en medios magnéticos o electrónicos del mismo.(Anexo XII)<br>
                    Respecto a esta información solicitada se da por <b><?php echo $respre0;?></b>

            <?php }if(($tienept13A == 0)&&($tienept13S == 0)){ ?>
                    <p style="text-align:justify;">En la previsión de un incidente operativo o ambiental, se cuenta con los protocolos de planes a respuesta a emergencias en dicho documento identifica situaciones potenciales de emergencia, tales como fugas, derrames, incendios o explosiones, por el manejo de las sustancias peligrosas y otras situaciones de emergencia potenciales relacionadas con factores externos como los meteorológicos o los sociales.<br>
                    
                    Asegure la disponibilidad de los recursos necesarios para controlar o hacer frente al evento, tales como recursos financieros y personal capacitado y en su caso, certificado, servicios médicos, equipamiento, sistema contra incendio, sistemas de contención de fugas, rutas de evacuación, equipo de protección personal y medios de comunicación, entre otros, es decir, con planes de atención a emergencias que den respuesta eficaz a todas las situaciones potenciales de emergencia identificadas por el Regulado, donde  se describen las responsabilidades de los funcionarios, con base en la capacidad de respuesta instalada mínima necesaria en el Campo, caso contrario se escalaría a una solicitud de asistencia con convenios de apoyo con los regulados y entidades municipales y así dar cumplimiento de las actividades en nuestra área contractual durante todas las etapas.<br>
                    
                    <?php echo $nombre; ?> establece actividades para identificar situaciones potenciales de emergencia y accidentes que pueden tener impacto en la seguridad, salud ocupacional y protección ambiental y cómo responder a ellos en el procedimiento: Plan de Respuesta a emergencias.<br>
                    
                    Se comunicará y proveerá la información relevante a todo el personal, contratistas, subcontratistas, prestadores de servicio y proveedores, acerca de sus funciones y responsabilidades ante una emergencia.<br>
                    Es importante establecer programas de simulacros que incluyan a todas las situaciones de emergencia identificadas. Se elaboró un plan de simulacros de respuesta para los diferentes escenarios posibles, incluyendo el peor de ellos y el más frecuente, evaluando la respuesta para determinar acciones para la mejora continua.<br>

            <?php }if(($tienept13A == 1)&&($tienept13S == 1)){?>
                    <p style="text-align:justify;">Derivado de las nuevas Disposiciones Administrativas de Carácter General (DAGC) emitidas por la ASEA en el DOF con fecha del 22/03/2019, se realizó la actualización del mismo y fue ingresado a la AGENCIA mediante el oficio <a href="">AnexoXI</a>, y debido a sus recientes cambios se está haciendo la difusión con el personal de la empresa incluyendo a los contratistas-subcontratistas.<br>
                    De acuerdo lo solicitado en la Autorización: Como parte de su informe semestral de cumplimiento del Programa de Implementación, el REGULADO deberá presentar el Formato FF-ASEA-037 “Actualización del Protocolo de Respuesta a Emergencias”, anexando una copia en medios magnéticos o electrónicos del mismo.(Anexo XII)<br>
                    Respecto a esta información solicitada se da por <b><?php echo $respre0;?></b>

                    Al ejecutar mecanismos de respuesta por medio de simulacros, esto para que se vean las posibles situaciones que se presenten en las instalaciones con el fin de evitar alguna nula ejecución de los principales protocoles de respuesta de emergencias. Esto como medidas de control y mitigación respectivas del SASISOPA.  Se adjunta el presente elemento en el numeral correspondiente, la información digital con respecto a: Reportes de Simulacros de emergencia. (Anexo XIV)<br> 
                    <table>
                        <tr>
                            <th colspan="4">Reporte de Simulacros de <?php echo $nombre;?> </th>
                        </tr>
                        <tr>
                            <th>No.</th>
                            <th>Simulacro</th>
                            <th>Fecha</th>
                            <th>Reporte</th> <!-- (reporte 8.1) -->
                        </tr>
                        <?php
                            $preinfo = "SELECT tipoSimulacro, fechaSimulacro, informeSimulacro FROM pre WHERE tipo = 'Informe' AND idCESH = '".$id."'";
                            $resprein = mysqli_query($con, $preinfo);
                            if($resprein->num_rows > 0) {
                                $n = 1;
                                while($pt13rs = $resprein->fetch_assoc()){ ?>
                                    <tr>
                                        <td><?php echo $n; ?></td>
                                        <td><?php echo $pt13rs['tipoSimulacro']; ?></td>
                                        <td><?php echo $pt13rs['fechaSimulacro']; ?></td>
                                        <td> <a href="<?php echo $pt13rs['informeSimulacro']; ?>">Anexo 8.<?php echo $n;?></a> </td>
                                    </tr>
                        <?php       $n++;
                                }
                            } ?>
                    </table>
                
                    Dada esta información y anexado el programa de simulacros (Anexo XIII), el numeral queda <b><?php echo $respreSim; ?></b>, con todos los reportes de simulacros que se realizaron en el periodo de establecido por este reporte.</</p>
            <?php } ?>            
        </div>
        <!-- MONITOREO -->
        <div>
            <h3>Elemento 14: MONITOREO, VERIFICACIÓN Y EVALUACIÓN</h3>
            <p style="text-align:justify;">El seguimiento y medición de los procesos del Sistema de Administración de Seguridad Industrial, Seguridad Operativa y Protección al Ambiente, se lleva a cabo mediante el mecanismo de auditorias internas, por medio del cual hacemos el monitoreo, verificación y evaluación. Con este mecanismo se identifican los puntos críticos de control del proceso (requisitos, especificaciones, atributos, parámetros, rangos, operaciones o actividades) que deben ser monitoreadas y medidos en cumplimiento con el sistema de administración, verificando las especificaciones del mismo para su control a través de los registros de los procesos del Sistema de Gestión Integrado, y de ser necesario, aplicado el método apropiado para el seguimiento y la medición de los procesos. 
            <?php
                if($tienept14 == 1){ ?>
                    <p style="text-align:justify;">Se da por <b><?php echo $subsanacion; ?></b> el elemento derivado de uso, seguimiento y subsanación de las no conformidades y el monitoreo que se realizó para la conclusión de la no conformidad.
                        <table>
                            <tr>
                                <th colspan="5">Reporte de subnaciones y monitoreos de <?php echo $nombre;?> </th>
                            </tr>
                            <tr>
                                <th>#</th>
                                <th>Hallazgo</th>
                                <th>No conformidad</th>
                                <th>Fecha de subsanación</th>
                                <th>Estatus</th> <!-- (reporte 8.1) -->
                            </tr>
                        <?php
                            $monitoreo = "SELECT solicitud, nConformidad, fechaA, estatus FROM monverif WHERE idCESH = '".$id."'"; 
                            $resmon = mysqli_query($con, $monitoreo);
                            if($resmon->num_rows > 0){
                                $o = 1;
                                while ($pt14m = $resmon->fetch_assoc()){ ?>
                                    <tr>
                                        <td><?php echo $o; ?></td>
                                        <td><?php echo $pt14m['solicitud']; ?></td>
                                        <td><?php echo $pt14m['nConformidad']; ?></td>
                                        <td><?php echo $pt14m['fechaA']; ?></td>
                                        <td><?php echo $pt14m['estatus']; ?></td>
                                    </tr>
                        <?php       $o++;
                                }
                            } ?>
                        </table>
                    </p>
            <?php
                }else{ ?>
                    <p style="text-align:justify;">Se espera la revisión de los procedimientos para evaluar las conformmidades basadas en los diversos criterios de evaluación, prodecimientos y/o auditorias establecidas por las diferentes herramientas del SASISOPA.</p>
            <?php
                }
            ?>
               
            </p>
        </div>
        <!-- AUDITORIAS -->
        <div>
            <h3>Elemento 15: AUDITORÍAS</h3>
            <?php
                if($tienept15 == 1){ ?>
                    <p style="text-align:justify;">Las auditorías realizadas internas y externas en la instalación son importantes, ya que nos permiten saber el cumplimiento de nosotros y de nuestros proveedores, también para evaluar cómo estamos trabajando internamente y las áreas donde debemos reforzar para que se logre una estandarización adecuada de los procesos y se controlen los riesgos durante las actividades de campo.<br>

                    Utilizamos un recurso de revisión, el cual establece los criterios para la realización de auditorías internas que nos ayuden a verificar el cumplimiento de nuestro sistema de gestión Integrado y la normatividad legal de las disposiciones. <?php $nombre; ?> establece un programa de auditorías internas ejecutadas por el corporativo para garantizar la implementación de los 18 requerimientos del Sistema de Administración de SASISOPA.<br>

                    Se planificará, implementara y mantendrá un Programa de Auditorías al Sistema de Administración, que especifique el objetivo, alcance, Procedimientos de Auditoría, frecuencia, métodos, definición de criterios, responsabilidades, competencia, requerimientos de planeación, reporte y selección de auditores.<br>

                    Los criterios de competencia para la calificación, entrenamiento y selección de auditores internos se tienen atraves de la capacitación establecida por la EMA en su curso Auditores Expertos, el cual se debe de tomar para poder certificarnos de que tenemos el conocimiento y la practica para llevar a cabo una auditoría correcta.<br>
                    La gestión de las no conformidades detectadas, se llevaran a traves del elemento numero 14. Lo cual nos permite realizar un análisis y detectar la raíz que lo origino, así como establecer un plan de acción para su cierre y prevención. Con la finalidad de identificar el grado de cumplimiento mediante el procedimiento con el podemos saber nuestras áreas de oportunidad y mejora en procesos actuales; además de corregir actos y condiciones inseguras.<br>
                    
                    Se debe de comunicar los resultados de las Auditorías internas y externas a todos los niveles de la organización. Donde se debe indicar la forma de conservar los registros asociados a la realización de Auditorías internas y externas.<br> 
                    De acuerdo al numeral del SASISOPA se da por <b><?php echo $auditores; ?></b>, este elemento atraves de la evidencia electronica documental que se anexan como evidencia la difusión de este elemento. (Anexo: Auditorias) </p>
            <?php
                }else{ ?>
                    <p style="text-align:justify;">Las auditorías realizadas internas y externas de la organización son importantes, ya que nos permiten saber el cumplimiento de nuestros proveedores, también para evaluar cómo estamos trabajando internamente y las áreas donde debemos reforzar para que se logre una estandarización adecuada de los procesos y se controlen los riesgos durante las actividades de campo.<br>

                    Utilizaremos un recurso de revisión, el cual establece los criterios para la realización de auditorías internas que nos ayuden a verificar el cumplimiento de nuestro sistema de gestión Integrado y la normatividad legal de las disposiciones.<br> En <?php $nombre; ?> establecemos un programa de auditorías internas ejecutadas por el corporativo para garantizar la implementación de los 18 requerimientos del Sistema de Administración de SASISOPA.<br>
                    La planificación, implementación y mantenenimiento del Programa de Auditorías, especificara el objetivo, alcance, Procedimientos de Auditoría, frecuencia, métodos, definición de criterios, responsabilidades, competencia, requerimientos de planeación, reporte y selección de auditores.<br>

                    Nuestros auditores internos deberas ser capacitados sobre los criterios de competencia establecidos por la EMA en su curso Auditores Expertos, el cual se debe de tomar para poder avalar el conocimiento y la practica  de llevar a cabo una auditoría correcta.<br>
                    La gestión de las no conformidades detectadas, se llevaran a traves del elemento numero 14.</p>
            <?php
                }
            ?>            
        </div>        
        <!-- INCIDENTES Y ACCIDENTES -->                      
        <div>
            <h3>Elemento 16: INVESTIGACIÓN DE INCIDENTES Y ACCIDENTES</h3>
            <?php
                if($tienept16 == 1){ ?>
                    <p style="text-align:justify;">De acuerdo a las Disposiciones administrativas de carácter general que establecen los lineamientos para informar la ocurrencia de incidentes y accidentes a la Agencia Nacional de Seguridad Industrial y de Protección al Medio Ambiente del Sector Hidrocarburos publicada en el Diario Oficial de la Federación el viernes 4 de noviembre de 2016, DOF estable los lineamientos para informar la ocurrencia de incidentes y accidentes a la Agencia Nacional de Seguridad Industrial y de Protección al Medio Ambiente del Sector Hidrocarburos, así como la clasificación, comunicación y la divulgación de accidentes laborales, ambientales, enfermedades ocupacionales e incidentes con alto potencial.<br>
                    La metodología utilizada para la investigación de Incidentes y Accidentes sera <i>Metodo Ishikawa</i>, para la determinación de la causa raíz, atendiendo a las Disposiciones administrativas de carácter general que para tal efecto emita la Agencia.<br>
                    De acuerdo a la estadisitica reportado durante el desarrollo de las actividades ejecutadas en el periodo <?php echo $fechainicio.'-'.$fechafin;?>, en las diferentes áreas de esta <?php echo $giro; ?> se han cumplido con las metas y objetivos planteados en el tema de prevenir riesgos que puedan derivar en un accidente o incidente. Con esto se declara que se ha <?php echo $succ;?> la meta de “CERO ACCIDENTES”, <?php echo $razon; ?>. Se da por <b>Concluido</b> el numeral presentado, esto atraves de un reporte de Accidentabilidad del mes (<a href="">Anexo XV / o formato de consolidación mensual</a>) y un consolidado del periodo de implementación reportado.</p>
            <?php
                }else{ ?>
                    <p style="text-align:justify;">De acuerdo a las Disposiciones administrativas de carácter general que establecen los lineamientos para informar la ocurrencia de incidentes y accidentes a la Agencia Nacional de Seguridad Industrial y de Protección al Medio Ambiente del Sector Hidrocarburos publicada en el Diario Oficial de la Federación el viernes 4 de noviembre de 2016, DOF estable los lineamientos para informar la ocurrencia de incidentes y accidentes a la Agencia Nacional de Seguridad Industrial y de Protección al Medio Ambiente del Sector Hidrocarburos, así como la clasificación, comunicación y la divulgación de accidentes laborales, ambientales, enfermedades ocupacionales e incidentes con alto potencial.<br>
                    La metodología utilizada para la investigación de Incidentes y Accidentes sera <i>Metodo Ishikawa</i>, para la determinación de la causa raíz, atendiendo a las Disposiciones administrativas de carácter general que para tal efecto emita la Agencia.<br></p>
            <?php
                }
            ?>
        </div>
        <!-- REVISIÓN DE RESULTADOS -->
        <div>
            <h3>Elemento 17: REVISIÓN DE RESULTADOS</h3>
            <p style="text-align:justify;">Se implemento el monitoreo y medición del desempeño del Sistema de Administración se ha llevado a cabo de una manera <b>Semestral</b>, inicialmente durante el proceso de implementación, a través de la revisión por la dirección en el cual se restablecen las directrices necesarias para la medición y mejora del sistema, estas actividades son realizadas por un comité de gestión integrado por el gerente del activo, representante técnico, gerentes y coordinadores de las diferentes áreas de la organización, su reunión es trimestral o cuando ocurran cambios que podrían impactar el sistema de gestión donde establece el mecanismo y pasos que se deben seguir para la revisión, así como el personal involucrado, y donde lo más importante es analizar los avances que hay con respecto a la implementación del SASISOPA, los cambios en los procesos y los recursos que se requieren para el logro de los objetivos y metas establecidas en la organización.<br>
            Entre los puntos de la revisión se mencionan los siguientes:
                <ol>
                    <li>Cumplimiento alcanzado en los objetivos, metas y programas (Objetivos de la estrategia, Planes de HSE)</li>
                    <li>Resultados de evaluaciones e Identificación de áreas de oportunidad.</li>
                    <li>Cumplimiento de programas de atención a recomendaciones de auditorías y visitas de verificación.</li>
                    <li>Cumplimiento de los requisitos legales aplicables.</li>
                    <li>Identificación de elementos que no estén operando adecuadamente</li>
                    <li>Comunicaciones con las partes interesadas externas, incluyendo quejas y sugerencias.</li>
                    <li>Indicadores de Seguridad Industrial, Seguridad Operativa y Protección al Medio Ambiente (HSE).</li>
                    <li>Recomendaciones para mejorar el sistema y los productos.</li>
                    <li>Cambios, incluidos los requisitos legales y marco normativo aplicables a los procesos.</li>
                    <li>El desempeño del Sistema de Administración y Efectividad de los procesos, incluidos los resultados de la evaluación de riesgos.</li>
                    <li>Recomendaciones para la mejora continua del sistema y los productos.</li>
                    <li>Seguimiento de acciones de revisiones de desempeño anteriores.</li>
                    <li>Desempeño de los contratistas que prestan un servicio para la empresa.</li>
                    <li>Estado de las investigaciones de incidentes, acciones correctivas y preventivas y Resultados.</li>
                    <li>El estado de las acciones aplicadas para la administración de Hallazgos.</li>
                    <li>Capacitación y Competencia (Resultados de Competencias)</li>
                    <li>Revisión y análisis de fallas en el servicio y/o productos relacionados con el servicio.</li>
                    <li>Estado de preparación para emergencias (Plan de Respuesta de Emergencia local).</li>
                    <li>Desempeño ambiental de la organización.</li>
                    <li>Los cambios en las circunstancias, incluyendo las actualizaciones del marco normativo aplicable.</li>
                    <li>Efectividad de la capacitación y participación de los empleados y contratistas en asuntos de HSE.</li>
                    <li>Verificación e identificación de elementos que no estén operando adecuadamente</li>
                    <li>El   seguimiento de las acciones resultantes de las revisiones previas llevadas a cabo por la Dirección.</li>
                    <li>Los cambios que afectan a los procesos del Sistema de Gestión Integrado, incluyendo la evolución de los requisitos legales y otros requisitos relacionados.</li>
                    <li>Análisis de la eventual   necesidad de cambios en la Política, los Objetivos, los procedimientos y otros elementos del Sistema de Gestión Integrado.</li>
                </ol>                        
            
            Criterios e indicadores con los cuales se va a evaluar el Desempeño del Sistema de Administración. La verificación de los resultados obtenidos en el periodo establecido desarrollados durante las actividades operativas de desempeño al SASISOPA se realiza de manera escrita a través de este formato
                <table>
                    <tr>
                        <th colspan="4">Revisión de resultados</th>
                    </tr>
                    <tr>
                        <th>Punto</th>
                        <th>Concepto</th>
                        <th>Estatus</th>
                        <th>Indicador</th>
                    </tr>
                    <?php
                        $revisionR = "SELECT m.concepto, m.indicador, r.meta, r.estatus FROM cMetas m INNER JOIN revision r ON r.meta = m.idMeta WHERE r.idCESH = '".$id."' ORDER BY r.meta ASC";
                        $repR = mysqli_query($con, $revisionR);
                        if($repR->num_rows > 0){
                            while($pt17 = $repR->fetch_assoc()){ ?>
                                <tr>
                                    <td><?php echo $pt17['meta']; ?></td>
                                    <td><?php echo $pt17['concepto']; ?></td>
                                    <td><?php echo $pt17['estatus']; ?></td>
                                    <td><?php echo $pt17['indicador']; ?></td>
                                </tr>
                    <?php   }
                        }
                        ?>
                </table>
            </p>
        </div>
        <!-- INFORMES DE DESEMPEÑO -->
        <div>
            <h3>Elemento 18: INFORMES DE DESEMPEÑO.</h3>
            <?php if($tienept18 == 0){ ?>
                <p style="text-align:justify;">La Dirección general por medio de los informes de desempeño demuestra el liderazgo y compromiso con respecto al sistema de administración SASISOPA, asegurándose mediante estos informes el cumplimiento de las políticas de la empresa, de la integración de los requisitos del sistema del administración SASISOPA en los procesos de negocio de la organización, promoviendo el uso del enfoque a procesos y el pensamiento basado en riesgos, asegurándose de que se cuente con los recursos necesarios para que el sistema de administración estén disponibles a toda la organización, comunicando la importancia de una gestión eficaz y conforme con los requisitos del sistema del administración comprometiéndose, dirigiendo y apoyando a las personas, para contribuir a la eficacia del sistema del administración SASISOPA a través de la mejora continua.<br>
                Además de involucrar la información del Elemento anterior de Revisión por la Dirección como una forma de comunicación interna, también se cuenta con la obligación de hacer entrega de reportes a la ASEA, razón misma de presente documento, se presenta la tabla de reportes identificados de acuerdo con los lineamientos establecidos.<br>

                Así mismo se dara las evidencias las actividades correspondientes a las actividades ejecutas dentro del periodo establecido, comunicando los resultados de la evaluación del Desempeño del Sistema de Administración a todos los niveles pertinentes del Regulado.<br></p>
            <?php }if($tienept18 == 1){ ?>
                <p style="text-align:justify;">La Dirección general por medio de los informes de desempeño demuestra el liderazgo y compromiso con respecto al sistema de administración SASISOPA, asegurándose mediante estos informes el cumplimiento de las políticas de la empresa, de la integración de los requisitos del sistema del administración SASISOPA en los procesos de negocio de la organización, promoviendo el uso del enfoque a procesos y el pensamiento basado en riesgos, asegurándose de que se cuente con los recursos necesarios para que el sistema de administración estén disponibles a toda la organización, comunicando la importancia de una gestión eficaz y conforme con los requisitos del sistema del administración comprometiéndose, dirigiendo y apoyando a las personas, para contribuir a la eficacia del sistema del administración SASISOPA a través de la mejora continua.<br>
                Además de involucrar la información del Elemento anterior de Revisión por la Dirección como una forma de comunicación interna, también se cuenta con la obligación de hacer entrega de reportes a la ASEA, razón misma de presente documento, se presenta la tabla de reportes identificados de acuerdo con los lineamientos establecidos.<br>
                    <table>
                        <tr>
                            <th colspan="3">Entrega de reportes.</th>
                        </tr>
                        <tr>
                            <th>No.</th>
                            <th>Concepto</th>
                            <th>Fecha</th>
                            <th>Estatus</th>
                        </tr>
                        <?php
                        $informet = "SELECT tiporeporte, fechaIngreso, estatus FROM informe WHERE idCESH = '".$id."'";
                        $reInfo = mysqli_query($con, $informet);
                        $x = 1;
                        if($reInfo->num_rows > 0){
                            while($pt18res = $reInfo->fetch_assoc()){ ?>
                                <tr>
                                    <td><?php echo $x; ?></td>
                                    <td><?php echo $pt18res['tiporeporte']; ?></td>
                                    <td><?php echo $pt18res['fechaIngreso']; ?></td>
                                    <td><?php echo $pt18res['estatus']; ?></td>
                                </tr>
                    <?php   $x++;
                            }
                        }
                        ?>                    
                    </table>

                Para su <b>cumplimiento</b> a este elemento y como evidencia se presenta los reportes previos de los reportes antes ingresados antes esta agencia, en cuestión del seguimiento y ejecución a nuestro Sistema de administración de las actividades ejecutadas.<br>
                Así mismo se evidencia las actividades correspondientes a las actividades ejecutas dentro del periodo establecido, comunicando los resultados de la evaluación del Desempeño del Sistema de Administración a todos los niveles pertinentes del Regulado.<br></p>
            <?php } ?>
        </div>      
        <div>
            <h3>Conclusiones Generales.</h3>
            <p style="text-align:justify;">De acuerdo con los resultados de las actividades ejecutadas durante el periodo de implementación del Sistema de Administración de Seguridad Industrial, Seguridad Operativa y Protección Ambiental se concluye lo siguiente:
                <?php   $tienept17 = 1;
                        $total = $tienept1+$tienept2+$tienept3+$tienept4+$tienept5+$tienept6+$tienept7+$tienept8+$tienept9+$tienept10+$tienept11+$tienept12+$tienept13A+$tienept13S+$tienept14+$tienept15+$tienept16+$tienept17+$tienept18;
                        $porcentaje = ($total*100)/20;
                        if($tienept18 == 0){ ?>
                            <ol>
                                <li><?php echo $nombre; ?> se encuentra en un proceso de implementación del sistema de administración en materia de Seguridad Industrial, Seguridad Operativa y Protección del Medio Ambiente en las operaciones previstas dentro del Programa de implementación, aplicando las buenas prácticas, procedimientos.</li>
                                <li>Se mantiene el control y desempeño de la gestión de Seguridad Industrial, Seguridad Operativa y Protección del Medio Ambiente en las operaciones previstas dentro del Plan de trabajo, aplicando las buenas prácticas, procedimientos.</li>
                                <li>Se mantiene el compromiso de tener cero accidentes en las operaciones y actividades realizadas en campo aplicando los controles necesarios para evitar su ocurrencia, esto también incluye un seguimiento de las actividades de nuestras contratistas que participan en actividades operativas en campo.</li>
                                <li>Se cuenta con un avance significativo en el programa de Implementación del SASISOPA de acuerdo a las disposiciones administrativas de la ASEA, por lo que se ha visto un buen desempeño en los procesos de la empresa</li>
                                <li>Hemos fortalecido los recursos necesarios (humanos, financieros, servicios e infraestructura) para garantizar el desempeño en Seguridad Industrial, Seguridad Operativa y Protección del Medio Ambiente, actualmente <?php echo $nombre; ?> tiene un <?php echo $porcentaje; ?> de avance en la implementación de este.</li>
                            </ol>
                <?php  } if($tienept18 == 1){ ?>
                            <ol>
                                <li><?php echo $nombre; ?> a finalizado proceso de implementación del sistema de administración en materia de Seguridad Industrial, Seguridad Operativa y Protección del Medio Ambiente en las operaciones previstas dentro del Programa de implementación, aplicando las buenas prácticas, procedimientos.</li>
                                <li>Se mantendra el control y desempeño de la gestión de Seguridad Industrial, Seguridad Operativa y Protección del Medio Ambiente en las operaciones previstas dentro del Plan de Implementación, aplicando las buenas prácticas, procedimientos.</li>
                                <li>Se mantiene el compromiso de tener cero accidentes en las operaciones y actividades realizadas en campo aplicando los controles necesarios para evitar su ocurrencia, esto también incluye un seguimiento de las actividades de nuestras contratistas que participan en actividades operativas en campo.</li>
                                <li>Al terminar la implementación se a fortalecido los recursos necesarios (humanos, financieros, servicios e infraestructura) para garantizar el desempeño en Seguridad Industrial, Seguridad Operativa y Protección del Medio Ambiente, actualmente <?php echo $nombre; ?> tiene un 100% de implementación, se seguira con la mejora continua asi como las auditorias y revisiones pertinentes.</li>
                            </ol>
                <?php  } ?>
            </p>
        </div>                                
    </body>
</html>

<?php
    $html=ob_get_clean();
    echo $html;

    /*require_once '../../librerias/dompdf/autoload.inc.php';
    use Dompdf\Dompdf;
    $dompdf = new Dompdf();*/

    //$dompdf->loadHtml("1");
    /*$dompdf->loadHtml($html);
    $dompdf->setPaper('letter'); //A4, landscape
    $dompdf->render();
    $dompdf->stream('reporteSemestral_.pdf', array("attachment" => false));*/ //false para abrir, true para bajarse

?>