<?php
    include '../conex.php';
    $id = $_GET["x"];
    $con = Conectarse();

    require __DIR__.'\vendor\autoload.php';
    use Spipu\Html2Pdf\Html2Pdf;

    $encab = "SELECT razonSocial AS inst, abreviatura as abrv, rtec as tecnico, rl as legal, tipoCESH as giro, correo as correo, telefono as numero FROM cesh a INNER JOIN estado b ON a.idEstado = b.idEstado WHERE idCESH = '".$id."'";
    $rese = mysqli_query($con, $encab);
    if($rese->num_rows > 0){
        while($fila0 = $rese->fetch_assoc()){
            $nombre = $fila0['inst'];
            $abr = $fila0['abrv'];
            $rept = $fila0['tecnico'];
            $repl = $fila0['legal'];
            $giro = $fila0['giro'];
            $correocomun = $fila0['correo'];
            $numcomun = $fila0['numero'];
        }
    }

    //dividir aqui la parte del PL
    $separador = explode("/",$id);
    $nosa = $separador[0].$separador[1];
    $titulo = $nosa." ".$nombre;    


    $politica = "SELECT idCESH, tipoD, fechaD FROM politica WHERE idCESH = '".$id."' GROUP BY idCESH";
    $pt1res = mysqli_query($con, $sql);
    if($resultado->num_rows > 0){
        $respolitica = "CUMPLIMIENTO";
        $respolitica1 = "SE DIO";
        $politicadif = $pt1res['tipoD'];
        $politicafecha = $pt1res['fechaD'];
    } else {
        $respolitica = "INCUMPLIMIENTO";
        $respolitica1 = "NO SE DIO";
        $politicadif = "La solicitadas por la Agencia";
        $politicafecha = "actual";
    }


    $ar = "SELECT idCESH FROM ar WHERE idCESH = '".$id."' GROUP BY idCESH";
    $pt2res = mysqli_query($con, $ar);
    if($pt2res->num_rows > 0){
        $resar = "Cumplimiento";
    } else {
        $resar = "Incumplimiento";
    }

    $legales = "SELECT idCESH FROM documento WHERE idCESH = '".$id."' GROUP BY idCESH";
    $pt3res = mysqli_query($con, $legales);
    if($pt3res->num_rows > 0){
        $legalesres = "Cumplimiento";
        $legalesgiro = $giro;
    } else {
        $legalesres = "Incumplimiento";
        $legalesgiro = $giro;
    }



    $obj = "SELECT idCESH FROM objetivo WHERE idCESH = '".$id."' GROUP BY idCESH";
    $pt4res = mysqli_query($con, $obj);
    if($pt4res->num_rows > 0){
        $objres = "Cumplimiento";
    }else{
        $objres = "Incumplimiento";
    }

    $respon = "SELECT idCESH FROM organigrama WHERE idCESH = '".$id."' GROUP BY idCESH";
    $pt5res = mysqli_query($con, $respon);
    if($pt5res->num_rows > 0){
        $resorganigrama = "Cumplimiento";
    }else{
        $resorganigrama = "Incumplimiento";
    }

    $compe = "SELECT idCESH FROM curso WHERE idCESH = '".$id."' GROUP BY idCESH";
    $pt6res = mysqli_query($con, $compe);
    if($pt6res->num_rows > 0){
        $rescompetencia = "Cumple";
    } else {
        $rescompetencia = "No cumple"
    }


    $comun = "SELECT idCESH FROM sugque WHERE idCESH = '".$id."' GROUP BY idCESH";
    $pt7res = mysqli_query($con, $comun);
    if($pt7res->num_rows > 0){
        $rescomun = "Cumplimiento";
        $res1comun = "Presentanción";
    }else{
        $rescomun = "Incumplimiento";
        $res1comun = "no presenta";
    }

    $controld = "SELECT idCESH FROM control WHERE idCESH = '".$id."' GROUP BY idCESH";
    $pt8res = mysqli_query($con, $controld);
    if($pt8res->num_rows > 0){
        $controlres = "Cumplimiento";
    }else{
        $controlres = "Incumplimiento";
    }

    $pract = "SELECT idCESH FROM rbpo WHERE idCESH = '".$id."' GROUP BY idCESH";
    $pt9res = mysqli_query($con, $pract);
    if($pt9res->num_rows > 0){
        $respracticas = "Cumplimiento";
        $respracticase = "por la ejecución";
    }else{
        $respracticas = "Incumplimiento";
        $respracticase = "nula participación";
    }


    $control = "SELECT idCESH FROM dzbitacora WHERE idCESH = '".$id."' GROUP BY idCESH";
    $controlp = "SELECT idCESH FROM dzcambiop WHERE idCESH = '".$id."' GROUP BY idCESH";
    $controlt = "SELECT idCESH FROM dzcambiot WHERE idCESH = '".$id."' GROUP BY idCESH";
    $controlo = "SELECT idCESH FROM dzordentr WHERE idCESH = '".$id."' GROUP BY idCESH";

    $pt10 = mysqli_query($con, $control);
    $pt10p = mysqli_query($con, $controlp);
    $pt10t = mysqli_query($con, $controlt);
    $pt10o = mysqli_query($con, $controlo);
    
    if($pt10->num_rows > 0) {
        if($pt10o->num_rows > 0){
            $res10 = "Cumplimiento";
        }else{
            $res10 = "Utilización de uno de los elementos";
        }
    }else{
        $res10 = "Incumplimiento";
    } 


    $bitacoras = "SELECT idCESH FROM bitacoras WHERE idCESH = '".$id."' GROUP BY idCESH";
    $pt11 = mysqli_query($con, $bitacoras);
    if($pt11->num_rows > 0){
        $resbit11 = "Cumplimiento se presenta las ";
    }else{
        $resbit11 = "incumplimiento, ya que no se presento ninguno de las ";
    }


    $contratistas = "SELECT idCESH FROM dcproveedor WHERE idCESH = '".$id."' GROUP BY idCESH";
    $pt12 = mysqli_query($con, $contratistas);
    if($pt12->num_rows > 0){
        $rescont0 = "Cumplimiento";
    }else{
        $rescont0 = "Incumplimiento";
    }

    $pres = "SELECT idCESH, noOficio FROM pre WHERE idCESH = '".$id."' GROUP BY idCESH";
    $pt13 = mysqli_query($con, $pres);
    if($pt13->num_rows > 0){
        $respre1 = $pt13['noOficio'];
        $respre0 = "Cumplimiento, gracias a que presento los anexos siguientes: ";
    }else{
        $respre1 = "NO PRESENTANDO";
        $respre0 = "Incumplimiento, ya que no presento ningún elemento de prueba";
    }


    $auditoria = "SELECT idCESH FROM reportea WHERE idCESH = '".$id."' GROUP BY idCESH";
    $pt15 = mysqli_query($con, $auditoria);
    if($resultado015->num_rows > 0){
        $auditores = "Cumplimiento";
    }else{
        $auditores = "Incumplimiento";
    }

    $incidentes ="SELECT fechaInicio, fechaActualizada FROM incidentes WHERE idCESH = '".$id."' GROUP BY idCESH";
    $pt16res = mysqli_query($con, $incidentes);
    if($pt16res->num_rows > 0){
        $fechainicio = $pt16res['fechaInicio'];
        $fechafin = $pt16res['fechaActualizada'];
        $succ = "logrado";
        $razon = "esto mediante la implementación de todo los controles tanto operativos, técnicos y administrativos establecidos";
    }else{
        $fechainicio = ;
        $fechafin = ;
        $succ = "no logrado";
        $razon = "esto a falta de la completa implementación del sistema administrativo";
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
                                <table style="margin-left:5%;">
                                    <tr>
                                        <td rowspan="3">IMG</td>
                                        <td colspan="2">Sistema de Administración de Seguridad Industrial Seguridad Operativa y Protección al Medio Ambiente</td>            
                                    </tr>
                                    <tr> <td colspan="2">E0 ESTACION</td> </tr>
                                    <tr> <td>Orden de Trabajo</td> <td> SASISOPA--'.$abr.'-'.$nosa.'-18-RP-01</td> </tr>
                                </table>

                                Elemento 1: Política<br>
                                Se da'.$respolitica.'a este elemento de política de seguridad, salud y medio ambiente SASISOPA-'.$abr.'-'.$nosa.'-01-POL-01. La cual fue Revisada y firmada por alta dirección y'.$respolitica1.'la difusión mediante '.$politicadif.' en fecha '.$politicafecha.' que se realizó al personal directo, contratistas y proveedores de la estación de servicios como parte del cumplimiento de la implementación del SASISOPA en toda actividad y operación verificando su cumplimiento durante las visitas de inspección. Como prueba se presenta el Anexo 1 en el apartado correcto.

                                Elemento 2: Análisis de Riesgo
                                El análisis de riesgo del sector de hidrocarburos se realizan aplicando metodologías para identificación de los riesgos o peligros, en este análisis de riesgo utilizamos el método de William T Fine para la identificación de riesgos en donde se relacionan tareas de los procesos con la identificación de consecuencias bajo las categorías de Daños al personal, Daños al medio ambiente, Daños a la instalación, así como la categoría de riesgos. Se utilizo un simulador (ALOHA) para determinar los escenarios de riesgo en las distintas etapas.

                                Se adjunta evidencia electrónica documental del estudio:
                                    •   El Análisis de Riesgo.
                                    •   Evidencia de difusiones de los listados a los empleados y contratistas y difusión del ARSH con los Contratistas y el seguimiento de las recomendaciones mediante inspecciones.
                                    •   Listado de Peligros y Riesgos en las Áreas de Trabajo. 
                                    •   El resultado del Análisis de Riesgo y resultado de la evaluación de Aspectos Ambientales.

                                Con esto da '.$resar.' de este elemento, al establecer el mecanismo para la identificación de riesgos con el desarrollo de un análisis de riesgo del sector de hidrocarburos. Dentro de las capacitaciones/actividades que se dan a los empleados/colaboradores ante su ingreso a las actividades cotidianas.

                                Elemento 3: Requisitos Legales
                                El cumplimiento de los requisitos legales está dentro de nuestra política y hace que nos comprometamos con tener cada uno de elementos y otros aplicables actualizados y correctamente identificados.
                                <table>
                                    <>
                                    <>
                                </table>

                                El seguimiento de los mismo en cuanto la actualización se lleva mediante la visita de nuestro GESTOR y su portal web quienes verifican las actualizaciones y novedades con respecto a los cambios y de las cuales se revisa los documentos o procesos.
                                Las actualizaciones pueden ser:
                                •   La incorporación de nuevas actividades, servicios o procesos en la organización o proyecto.
                                •   La ampliación o modificación de las instalaciones o sitios de trabajo.
                                •   La identificación de nuevos peligros y su evaluación de riesgo.
                                •   La identificación de nuevos aspectos ambientales y su impacto.
                                Adicional en este rubro se verifica a las empresas que nos prestan servicios para asegurar que cumplan con los requisitos de matriz de identificación de Requisitos Legales, mediante auditorías internas que se les programa, en las cuales cuando se detectan hallazgos estos son comunicados de inmediato a la empresa para su cumplimiento.
                                Los documentos que se tienen en el SASISOPA con respecto a este elemento y el seguimiento al cumplimiento de requisitos legales incluyendo los oficios de entrega y las autorizaciones respectivas, también se reporta mensualmente a nuestro gestor de los cambios realizados y que fueron comunicados vía correo electrónico. 
                                Se realizo la verificación de requisitos legales aplicables a las actividades en '.$legalesres.' de la '.$legalesgiro.', donde se contemplan el listado de los requisitos legales vigentes y otros requisitos aplicables a los procesos y a las actividades de los Regulados, incluyendo permisos, autorizaciones, licencias y otros trámites.


                                Elemento 4: Metas, objetivos e indicadores
                                Se establecen procedimientos para el diseño y realización de objetivos, metas, programas e indicadores, los cuales son revisados por dirección.
                                En las revisiones que se realizan mensualmente estos resultados que se presentan en formato de estadística:
                                <table></table>

                                De acuerdo al número se da el '.$objres.' respecto a los elementos de los programas de gestión de objetivos, metas e indicadores conforme al mejoramiento que se presentan en la política, principios de SASISOPA y requerimientos legales.


                                Elemento 5: Funciones, Responsabilidades y autoridad

                                Se cuenta con un mecanismo para la visualización de funciones, responsabilidades y autoridad, que se puede ver en la estructura organizacional para las operaciones de servicios que presta la empresa, además es importante mencionar que el Sistema de Administración es conforme con los requisitos establecidos en los Lineamientos y demás normativa aplicable, donde se proponer la adopción de las mejores prácticas  en la implementación del Sistema de Administración, para coordinar las acciones necesarias y subsanar los incumplimientos de la normatividad interna y externa aplicable, Informando a la alta dirección del Regulado acerca del desempeño del Sistema de Administración.

                                La siguiente matriz describe puestos y responsabilidades de esta estructura.
                                <table></table>

                                De acuerdo a la implementación del punto se presenta el '.$resorganigrama.' con la entrega del organigrama de la empresa actualizado de acuerdo a la revisión con la Dirección general donde se actualizan, descripciones de puesto de los integrantes, también se anexa la carta del representante Técnico de SASISOPA (Anexo 2). 


                                Elemento 6: Competencia, capacitación y entrenamiento

                                La empresa establece requerimientos para que asegurar que el personal cuenta con las competencias técnicas y de seguridad, estas definida por su descripción de puesto para garantizar un desempeño adecuado. Programas anuales para el desarrollo de la competencia que incluyan al menos:
                                        a.  Capacitación para operar o mantener equipos nuevos.
                                        b.  Capacitación inicial para el personal de nuevo ingreso.
                                        c. Capacitación de actualización para el personal al menos cada 3 años de acuerdo a la actualización o cambios en las instrucciones de trabajo, la tecnología, los Procedimientos y la normatividad. El programa deberá contemplar a los contratistas, subcontratistas, prestadores de servicios y proveedores.
                                Registros de competencia (inducción, capacitación, entrenamientos y reentrenamientos), del personal propio, así como el de los contratistas, subcontratistas, prestadores de servicio y proveedores.
                                <table></table>
                                Plan Anual de Capacitación. Programas de capacitación y entrenamiento para contratista y empleados, para fomentar entre los trabajadores sobre los riesgos y peligros a que están expuestos durante el desempeño de sus labores, para que sean conscientes de la importancia de la política del Sistema de Administración, sus objetivos y metas, así como de la importancia de la aplicación de los controles operacionales (Anexo 3).
                                De acuerdo al numeral se '.$rescompetencia.' derivado de los documentos que se tienen en el SASISOPA con respecto a este elemento, mencionando en específico la Matriz de Capacitación por Puesto de Trabajo, también se incluye el Plan Anual de Capacitación, y las difusiones de los requerimientos del elemento con el personal, así como la evidencia de capacitación generada.


                                Elemento 7: Comunicación, participación y consulta

                                La comunicación es fundamental, dentro de una instalación facilita que todos los colaboradores, incluyendo a los personal exterior (contratistas) cumplan utilizando como herramienta el sistema de administración. Para asegurar el reporte de los actos y condiciones inseguras de trabajo, así como, la identificación de actos y condiciones que pueden dañar al ambiente:
                                    •   Los Riesgos propios del Proyecto.
                                    •   Los Aspectos Ambientales.
                                    •   Los requisitos legales vigentes y otros requisitos aplicables al Proyecto.
                                    •   El cumplimiento de objetivos y metas.
                                    •   Los resultados de las Auditorías al Sistema de Administración.
                                    •   Los resultados de la evaluación del Desempeño sobre la Seguridad. Industrial, Seguridad Operativa y Protección al Medio Ambiente.
                                    •    La revisión de resultados por parte de la Dirección y las acciones que se deriven de ésta.
                                Los mecanismos de participación y consulta establecidas que se presentan en el sistema de Administración se darán cumplimiento al tener un buzón de quejas, que quede al alcance del personal interno como externo, también puede ser enviado por buzón electrónico a '.$correocomun.' o al numero '.$numcomun.' al servicio público en general. 


                                Una vez identificadas estas mismas se les dio el seguimiento y atención correspondiente.
                                De acuerdo al número la verificación se muestra el '.$rescomun.' por la '.$res1comun.' de los formatos que la instalación establece para la atención, respuesta y seguimiento de inquietudes, necesidades de información, quejas y sugerencias con el cual se pueden hacer llegar cualquier comunicación, y es para uso general de todo el personal interno.

                                Elemento 8: Control de documentos y registros
                                El sistema de administración cuenta con un mecanismo, con el propósito de mantenerlos revisados, aprobados, actualizados y protegidos; considerando su distribución, acceso, control de cambios, prevención del uso no intencionado de documentos obsoletos y que el personal tenga acceso a los documentos pertinentes a sus actividades, cuidando que se respete la confidencialidad de la información.
                                Listado de la información documentada que conforma el Sistema de Administración se presenta en el Anexo 3.
                                De acuerdo al numeral '.$controlres.' con todos los documentos descritos en el sistema de administración por cada uno de sus elementos y formatos correspondientes, estos registros permanecen legibles e identificables.


                                Elemento 9: Mejores prácticas y estándares

                                La prioridad de '.$nombre.' es mantener e inspeccionar sus instalaciones, procesos, sistemas de seguridad y todo aquello relativo, el objetivo es garantizar suficientes medidas de control de riesgos para todas las actividades de la compañía, y donde se esbozan las responsabilidades de gestión en relación con el "Control de Riesgos Operacionales", incluyéndose procedimientos de acuerdo a las operaciones que se supervisan y los cuales cumplen con el proceso de control de documentos para su implementación en campo.
                                Se está proyectando que la tecnología, equipos y ampliaciones que se realicen sea con mecanismos para integrar, conservar y mantener actualizado un paquete de información de la tecnología y la seguridad relativa al Proyecto que desarrolla. Éste debe contener, sin ser limitativo: 
                                a)  La información de Seguridad Industrial, Seguridad Operativa y de protección al medio ambiente de los materiales peligrosos manejados en el Proyecto en todas sus Etapas de Desarrollo (materia prima, productos, subproductos, residuos, materiales auxiliares en la operación, materiales del mantenimiento y la inspección, catalizadores u otros).
                                b)  La información relativa al proceso y su filosofía de operación como son, de manera enunciativa, mas no limitativa: diagramas de flujo de proceso, diagramas de tubería e instrumentación, química del proceso, inventarios máximos previstos, variables del proceso y sus límites seguros de operación y balances de materia y energía
                                c)  La información relacionada con el equipo como son, de manera enunciativa, mas no limitativa: materiales de construcción, diagramas de tubería e instrumentación, diagramas de flujo de proceso, la ingeniería de detalle del sistema contra incendio, planos de clasificación eléctrica, planos estructurales, bases de diseño de los equipos, bases de diseño de equipos de relevo de presión, bases de diseño de sistemas de desfogue y quemadores, bases de diseño de sistemas instrumentados de seguridad, entre otros.

                                [VERIFICACION CON RESPECTO AL ENTRENAMIENTO]
                                <table></table>
                                
                                Se otorga el '$respracticas' de mejores prácticas de ingeniería '.$respracticase.' de los estándares de calidad del servicio, aplicación de mejores prácticas, para que se cumplan todas las condiciones de seguridad en el desarrollo de cada una de las actividades que con lleve a una operación libre de accidentes e incidentes, dado el registro de revisiones de buenas prácticas de operación.
                                Esta revisión se realiza utilizando normas, códigos, estándares u otras regulaciones reconocidas y generalmente aceptadas a nivel internacional y garantiza las suficientes medidas de control de riesgos para todas las actividades de la compañía.

                                Elemento 10:    Control de actividades y procesos.
                                Las actividades que se están llevando a cabo en campo y las operaciones son administradas por el Sistema de administración (SASISOPA) en las que mencionamos que podrían ocurrir son: construcción, situaciones de arranque inicial, operaciones normales, temporales, paros programados y no programados, arranques, mantenimiento, inspecciones y pruebas, entre otras propias nuestros proyectos, con base en documentos escritos y prácticas seguras de trabajo documentadas, considerando los resultados del proceso de evaluación de impactos y riesgos y tomando en consideración los requisitos legales aplicables.
                                Se comunicará a los contratistas, subcontratistas, prestadores de servicios y proveedores aquellos Mecanismos en donde estén establecidos controles para actividades que éstos realicen.

                                Contamos con un Sistema de Permisos para Trabajos con Riesgo, (SASISOPA-'.$abr.'-'.$nosa.'-10-FM-01), para la planeación y autorización de la ejecución de trabajos de alto riesgo que establezca el análisis y verificación de condiciones de SASISOPA.
                                Contamos con un mecanismo para ejecutar los análisis de seguridad de los trabajos Instructivo para el Análisis de Seguridad en el Trabajo. 
                                A través del documento Procedimiento de Administración de Cambios en los Procesos, Instalaciones y Personal para Puestos Críticos (SASISOPA-'.$abr.'-'.$nosa.'-10-FM-03), logramos administrar, documentar y comunicar cambios temporales o definitivos, exceptuando reemplazos equivalentes, en las sustancias peligrosas, variables del proceso, tecnología, instalaciones, equipo, procedimientos organizacionales y de personal.

                                A través de los lineamientos establecidos en el Procedimiento de Revisión de Seguridad de Pre-Arranque logramos ejecutar la verificación de SASISOPA, previo al arranque de instalaciones nuevas, o de instalaciones con reparaciones o modificaciones mayores, considerando la verificación del cumplimiento de las especificaciones de diseño, la actualización y comunicación de los procedimientos.

                                Para las actividades de la etapa de preparación y construcción, considerando, entre otras, las siguientes:
                                    a.   Trabajo de excavación, terracerías, montaje, colados, trabajos en altura, en espacios confinados, trabajos de soldadura y eléctricos.
                                    b.   Uso de maquinaria, equipo, manejo de combustibles y sustancias químicas, y
                                    c.    Protección de flora y fauna, protección del suelo y cuerpos de agua, descarga de agua residual, emisión de ruido, emisión de gases a la atmósfera y manejo de residuos.
                                    Actividades de la etapa de operación y mantenimiento considerando, entre otras, las siguientes:
                                    a.   Pruebas y puesta en marcha de instalaciones y equipos.
                                    b.   Uso de maquinaria, equipo, manejo de combustibles y sustancias químicas.
                                    c.    Protección de suelo y cuerpos de agua, descarga de agua residual, emisión de ruido, emisión de gases a la atmósfera y manejo de residuos;
                                    d.   Expendio al público de Gas Natural, Distribución y Expendio al público de Gas Licuado de Petróleo y de Petrolíferos.
                                    e.   Acceso y circulación de auto-tanques y vehículos de reparto.
                                    f.    Manejo de recipientes transportables (cilindros) de Gas L.P.
                                    g.   Administración de cambios de tecnología.
                                    h.   Administración de cambios de personal.

                                Actividades de la etapa de desmantelamiento y abandono considerando las siguientes:
                                    a.   Uso de maquinaria, equipo, manejo de combustibles y sustancias químicas;
                                    b.   Protección de suelo y cuerpos de agua, descarga de agua residual, emisión de ruido, emisión de gases a la atmósfera y manejo de residuos;
                                    c.    Desmantelamiento de recipientes sujetos a presión, tanques de almacenamiento, tuberías y accesorios.
                                    d.   Restauración de áreas contaminadas y manejo de pasivos ambientales, en su caso.

                                    Para la detección de actos y condiciones se utiliza el procedimiento () Auditorias efectivas para personal interno propio, así como contratistas, subcontratistas, prestadores de servicios y proveedores, involucrados durante las etapas de construcción, puesta en marcha, operación y mantenimiento, de esta forma registramos, atendemos y cerramos

                                El numeral da como '.$res10.' a este punto se ejecutaron practicas de Seguridad Industrial, Seguridad Operativa y de Protección Ambiental, apegadas a los requisitos establecidos en las guías, procedimientos y practicas seguras de trabajo documentados y anexados (Anexo 4 a 4.3).



                                Elemento 11: Integridad mecánica y aseguramiento de la calidad.
                                Asegurar la integridad mecánica de los activos y el aseguramiento de la calidad de equipos de proceso, instalados o nuevos, sus refacciones y partes de repuesto, en cualquiera de las etapas de desarrollo del proyecto y desde sus especificaciones de diseño, compra, transporte, almacenamiento, construcción e instalación es uno de los objetivos de '.$nombre.'. Esto hace que se contemple el ejecutar las actividades de Seguridad Industrial, Operativa y de protección al medio ambiente en la construcción de igual forma.
                                [ESPECIFICAR A TRAVES DEL PUNTO 17 LO SIGUIENTE: Durante la etapa de evaluación se realizaron cambios de equipos críticos los cuales son / Durante la etapa de evaluación no se realizaron cambios de equipos críticos, sin embargo, se ha designado que el equipo crítico, las tareas críticas y las refacciones críticas para la seguridad del proceso, de los equipo y procesos involucrados en todas las etapas]
                                En la '.$nombre.' se realizaron mecanismos de control para asegurar la eficiencia de los equipos, componentes y sistemas críticos, así mismo, la administración de los riesgos. Para su '.$resbit11.' bitácoras para este control de equipos y la aplicación el mecanismo para el mantenimiento, las inspecciones y pruebas.


                                Elemento 12: Seguridad de contratistas
                                Todos los contratistas, proveedores y /o prestadores de '.$nombre.' tienen la responsabilidad de cumplir y hacer cumplir con las disposiciones de seguridad industrial, seguridad operativa y protección ambiental esta actividad está declarada dentro de la Política. La responsabilidad de contratar empresas de servicios para ejecutar obras y servicios necesarios y requeridos para la operación de campos en sus distintas fases de la cadena de valor.

                                Asume la responsabilidad por la ejecución de las actividades y la administración de riesgos que se derivan de actividades propias, de los contratistas, subcontratistas, prestadores de servicio y proveedores que participan en cualquiera de las Etapas de Desarrollo del Proyecto. Documento emitido por el Regulado donde asume la responsabilidad por la administración de Riesgo y de Impactos al Ambiente que se deriven de las actividades de los contratistas, subcontratistas, prestadores de servicio y proveedores (ANEXO 4)

                                Seleccionamos a nuestros contratistas, subcontratistas proveedores y prestadores de servicio considerando su desempeño en Seguridad Industrial, Seguridad Operativa y protección del medio ambiente, evaluando entre otros: 
                                        a)  El histórico de incidentes y accidentes.
                                        b)  Los indicadores de desempeño de Seguridad Operativa, Seguridad Industrial y protección al medio ambiente.
                                        c)  La competencia del personal propuesto para desarrollar las actividades y
                                        d)  administrar la Seguridad Operativa, Seguridad Industrial y protección al medio ambiente.
                                        e)  Su experiencia en la materia, así como de su capacidad técnica.
                                        f)  Que la infraestructura propuesta cumpla con la normatividad aplicable.
                                        g)  Los criterios de Seguridad Operativa, Seguridad Industrial y protección al medio ambiente para la aceptación de los contratistas, subcontratistas, prestadores de servicios y proveedores, para ser susceptibles de contrato

                                Las contratistas deberán presentar mensualmente al Rep. Técnico, la medición mensual de su cumplimiento con el Sistema de Administración de Seguridad Industrial, Seguridad Operativa y Protección Ambiental (SASISOPA). 
                                
                                Desempeño de los Contratistas
                                '.$nombre.' tiene un resultado de desempeño de los contratistas evaluados en el periodo de '.$rescont1.' con porcentaje de '.$rescont2.'% de cumplimiento en materia de seguridad industrial protección ambiental y salud ocupacional. 
                                Durante todos estos procesos también se realizaron inspecciones, auditoria efectivas, reuniones con contratistas inspecciones y seguimientos de no conformidades para garantizar la comunicación con los contratistas mediante todos los mecanismos establecidos 
                                Los requisitos en materia de Seguridad Industrial, Seguridad Operativa y la protección al medio ambiente a los que deben sujetarse los contratistas, subcontratistas, prestadores de servicio y proveedores.                                 

                                Para el cumplimiento del elemento se verifica la experiencia y competencia de la empresa prestadora de servicios, validando historia de trabajo ejecutados para el servicio contratado, capacidad técnica, tecnología a implementar en los servicios, capacidad técnica del personal, y reputación.
                                Se revisa periódicamente y se verifica el '.$rescont0.' de los requisitos según el anexo de control de auditorías de contratistas.


                                Elemento 13: Protocolos de respuesta a emergencias.

                                En la previsión de un incidente operativo o ambiental, se cuenta con los protocolos de planes a respuesta a emergencias en dicho documento identifica situaciones potenciales de emergencia, tales como fugas, derrames, incendios o explosiones, por el manejo de las sustancias peligrosas y otras situaciones de emergencia potenciales relacionadas con factores externos como los meteorológicos o los sociales.
                                Asegure la disponibilidad de los recursos necesarios para controlar o hacer frente al evento, tales como recursos financieros y personal capacitado y en su caso, certificado, servicios médicos, equipamiento, sistema contra incendio, sistemas de contención de fugas, rutas de evacuación, equipo de protección personal y medios de comunicación, entre otros, es decir, con planes de atención a emergencias que den respuesta eficaz a todas las situaciones potenciales de emergencia identificadas por el Regulado, donde  se describen las responsabilidades de los funcionarios, con base en la capacidad de respuesta instalada mínima necesaria en el Campo, caso contrario se escalaría a una solicitud de asistencia con convenios de apoyo con los regulados y entidades municipales y así dar cumplimiento de las actividades en nuestra área contractual durante todas las etapas.
                                '.$nombre.' establece actividades para identificar situaciones potenciales de emergencia y accidentes que pueden tener impacto en la seguridad, salud ocupacional y protección ambiental y cómo responder a ellos en el procedimiento: plan de Respuesta a emergencias.
                                Se comunicará y proveerá la información relevante a todo el personal, contratistas, subcontratistas, prestadores de servicio y proveedores, acerca de sus funciones y responsabilidades ante una emergencia.
                                Es importante establecer programas de simulacros que incluyan a todas las situaciones de emergencia identificadas. Se elaboró un plan de simulacros de respuesta para los diferentes escenarios posibles, incluyendo el peor de ellos y el más frecuente, evaluando la respuesta para determinar acciones para la mejora continua.                                 

                                Planes de atención para respuesta a emergencias y programa de simulacros, que incluyan el resguardo y la evaluación de las condiciones de integridad de las instalaciones. (Anexo 5)
                                
                                El listado de las situaciones potenciales de emergencia identificadas para todas las instalaciones y sitios donde se desarrollen las actividades. (Anexo 6)
 
                                Se garantiza el resguardo de las instalaciones después de una emergencia real para evitar la alteración del escenario, una vez controlada la emergencia; lo anterior con el fin de disponer de los elementos suficientes para llevar a cabo la investigación y análisis de la emergencia y evaluar las condiciones de integridad de las instalaciones
                                Derivado de las nuevas Disposiciones Administrativas de Carácter General (DAGC) emitidas por la ASEA en el DOF con fecha del 22/03/2019, se realizó la actualización del mismo y fue ingresado a la AGENCIA mediante el oficio '.$respre1.', y debido a sus recientes cambios se está haciendo la difusión con el personal de la empresa incluyendo a los contratistas-subcontratistas.
                                De acuerdo al numeral se demuestra que '.$respre0.':

                                    Anexo 5
                                    Anexo 6
                                    Anexo 7
                                    Anexo 7.1
                                    Anexo 7.2
                                    Anexo 7.3

                                al ejecutar mecanismos de respuesta para las situaciones que se presenten en medidas de SASISOPA.  Se adjunta el presente elemento en el numeral correspondiente, la información digital con respecto a: Reportes de Simulacros de emergencia, reportes fotográficos, inspecciones a equipo de emergencia, brigadas constituidas.

                                Elemento 14: Monitoreo, verificación y evaluación.

                                El seguimiento y medición de los procesos del Sistema de Administración de Seguridad Industrial, Seguridad Operativa y Protección al Ambiente, se lleva a cabo mediante el mecanismo Procedimiento, por medio del cual hacemos el monitoreo, verificación y evaluación, a través del cual se identifican los puntos críticos de control del proceso (requisitos, especificaciones, atributos, parámetros, rangos, operaciones o actividades) que deben ser monitoreadas y medidas en cumplimiento con el sistema de administración, verificando las especificaciones del mismo para su control a través de los registros de los procesos del Sistema de Gestión Integrado, y de ser necesario, aplicado el método apropiado para el seguimiento y la medición de los procesos. 
                                    <table></table>
                                  
                                Elemento 15: Auditorias

                                Las auditorías realizadas dentro y fuera de la organización son importantes, ya que nos permiten saber el cumplimiento de nuestros proveedores, también para evaluar cómo estamos trabajando internamente y las áreas donde debemos reforzar para que se logre una estandarización adecuada de los procesos y se controlen los riesgos durante las actividades de campo. 
                                Utilizamos un [recurso] de revisión, el cual establece los criterios para la realización de auditorías internas que nos ayuden a verificar el cumplimiento de nuestro sistema de gestión Integrado y la normatividad legal de las disposiciones Operadora de campos establece un programa de auditorías internas ejecutadas por el corporativo para garantizar la implementación de los 18 requerimientos del Sistema de Administración de SASISOPA.
                                Se planificará, implementara y mantendrá un Programa de Auditorías al Sistema de Administración, que especifique el objetivo, alcance, Procedimientos de Auditoría, frecuencia, métodos, definición de criterios, responsabilidades, competencia, requerimientos de planeación, reporte y selección de auditores.
                                Los criterios de competencia para la calificación, entrenamiento y selección de auditores internos. [La gestión de las no conformidades detectadas, este módulo nos permite realizar un análisis y detectar la raíz que lo origino, así como establecer un plan de acción para su cierre y prevención].
                                Con la finalidad de identificar el grado de cumplimiento mediante el procedimiento con el podemos saber nuestras áreas de oportunidad y mejora en procesos actuales; además de corregir actos y condiciones inseguras se nota el '.$auditores.' según lo presentado en la tabla, Anexo 8
                                Se debe de comunicar los resultados de las Auditorías internas y externas a todos los niveles de la organización. Donde se debe indicar la forma de conservar los registros asociados a la realización de Auditorías internas y externas.   

                                Elemento 16: Investigación de incidentes y accidentes

                                De acuerdo con las Disposiciones administrativas de carácter general que establecen los lineamientos para informar la ocurrencia de incidentes y accidentes a la Agencia Nacional de Seguridad Industrial y de Protección al Medio Ambiente del Sector Hidrocarburos, establece los lineamientos para informar la ocurrencia de incidentes y accidentes a la Agencia Nacional de Seguridad Industrial y de Protección al Medio Ambiente del Sector Hidrocarburos, así como la clasificación, comunicación y la divulgación de accidentes laborales, ambientales, enfermedades ocupacionales e incidentes con alto potencial. 
                                Metodología utilizada para la investigación de Incidentes y Accidentes y la determinación de la causa raíz, atendiendo a las Disposiciones administrativas de carácter general que para tal efecto emita la Agencia.
                                De acuerdo a las Disposiciones administrativas de carácter general que establecen los lineamientos para informar la ocurrencia de incidentes y accidentes a la Agencia Nacional de Seguridad Industrial y de Protección al Medio Ambiente del Sector Hidrocarburos publicada en el Diario Oficial de la Federación el viernes 4 de noviembre de 2016, DOF estable los lineamientos para informar la ocurrencia de incidentes y accidentes a la Agencia Nacional de Seguridad Industrial y de Protección al Medio Ambiente del Sector Hidrocarburos, así como la clasificación, comunicación y la divulgación de accidentes laborales, ambientales, enfermedades ocupacionales e incidentes con alto potencial.
                                Durante el desarrollo de las actividades ejecutadas en el periodo '.$fechainicio.'-'.$fechafin.', en las diferentes áreas de esta '.$giro.' se han cumplido con las metas y objetivos planteados, '.$succ.' la meta de “CERO ACCIDENTES”, '.$razon.'

                                Elemento 17: Revisión de resultados.

                                Se implemento el monitoreo y medición del desempeño del Sistema de Administración se ha llevado a cabo de una manera mensual inicialmente durante el proceso de implementación, a través de la revisión por la dirección en el cual se restablecen las directrices necesarias para la medición y mejora del sistema, estas actividades son realizadas por un comité de gestión integrado por el gerente del activo, representante técnico, gerentes y coordinadores de las diferentes áreas de la organización, su reunión es trimestral o cuando ocurran cambios que podrían impactar el sistema de gestión donde establece el mecanismo y pasos que se deben seguir para la revisión, así como el personal involucrado, y donde lo más importante es analizar los avances que hay con respecto a la implementación del SASISOPA, los cambios en los procesos y los recursos que se requieren para el logro de los objetivos y metas establecidas en la organización.

                                        Entre los puntos de la revisión se mencionan los siguientes:
                                            • Cumplimiento alcanzado en los objetivos, metas y programas (Objetivos de la estrategia, Planes de HSE)
                                            • Resultados de evaluaciones e Identificación de áreas de oportunidad. 
                                            • Cumplimiento de programas de atención a recomendaciones de auditorías y visitas de verificación.
                                            • Cumplimiento de los requisitos legales aplicables.
                                            • Identificación de elementos que no estén operando adecuadamente
                                            • Comunicaciones con las partes interesadas externas, incluyendo quejas y sugerencias.
                                            • Indicadores de Seguridad Industrial, Seguridad Operativa y Protección al Medio Ambiente (HSE).
                                            • Recomendaciones para mejorar el sistema y los productos.
                                            • Cambios, incluidos los requisitos legales y marco normativo aplicables a los procesos.
                                            • El desempeño del Sistema de Administración y Efectividad de los procesos, incluidos los resultados de la evaluación de riesgos.
                                            • Recomendaciones para la mejora continua del sistema y los productos.
                                            • Seguimiento de acciones de revisiones de desempeño anteriores.
                                            • Desempeño de los contratistas que prestan un servicio para la empresa.
                                            • Estado de las investigaciones de incidentes, acciones correctivas y preventivas y Resultados.
                                            • El estado de las acciones aplicadas para la administración de Hallazgos.
                                            • Capacitación y Competencia (Resultados de Competencias)
                                            • Revisión y análisis de fallas en el servicio y/o productos relacionados con el servicio.
                                            • Estado de preparación para emergencias (Plan de Respuesta de Emergencia local).
                                            • Desempeño ambiental de la organización.
                                            • Los cambios en las circunstancias, incluyendo las actualizaciones del marco normativo aplicable.
                                            • Efectividad de la capacitación y participación de los empleados y contratistas en asuntos de HSE.
                                            • Verificación e identificación de elementos que no estén operando adecuadamente
                                            • El   seguimiento de las acciones resultantes de las revisiones previas llevadas a cabo por la Dirección.
                                            • Los cambios que afectan a los procesos del Sistema de Gestión Integrado, incluyendo la evolución de los requisitos legales y otros requisitos relacionados.
                                            • Análisis de la eventual   necesidad de cambios en la Política, los Objetivos, los procedimientos y otros elementos del Sistema de Gestión Integrado.
                                    Criterios e indicadores con los cuales se va a evaluar el Desempeño del Sistema de Administración. La verificación de los resultados obtenidos en el periodo establecido desarrollados durante las actividades operativas de desempeño al SASISOPA se realiza de manera escrita a través de este formato
                                    <table></table>

                                Elemento 18: Informe de desempeño.
                                La Dirección general por medio de los informes de desempeño demuestra el liderazgo y compromiso con respecto al sistema de administración SASISOPA, asegurándose mediante estos informes el cumplimiento de las políticas de la empresa, de la integración de los requisitos del sistema del administración SASISOPA en los procesos de negocio de la organización, promoviendo el uso del enfoque a procesos y el pensamiento basado en riesgos, asegurándose de que se cuente con los recursos necesarios para que el sistema de administración estén disponibles a toda la organización, comunicando la importancia de una gestión eficaz y conforme con los requisitos del sistema del administración comprometiéndose, dirigiendo y apoyando a las personas, para contribuir a la eficacia del sistema del administración SASISOPA a través de la mejora continua.
                                Además de involucrar la información del Elemento anterior de Revisión por la Dirección como una forma de comunicación interna, también se cuenta con la obligatoriedad de hacer entrega de reportes a la ASEA, razón misma de presente documento, se presenta la tabla de reportes identificados de acuerdo con los lineamientos establecidos.
                                Para su cumplimiento a este elemento y como evidencia se presenta el informa anual en seguimiento y ejecución a nuestro Sistema de administración de las actividades ejecutadas.
                                Así mismo se evidencia las actividades correspondientes a las actividades ejecutas dentro del periodo establecido, comunicando los resultados de la evaluación del Desempeño del Sistema de Administración a todos los niveles pertinentes del Regulado.
                                [ANEXO DE LOS INFORMES QUE SE TIENEN]
                                Conclusiones Generales.
                                De acuerdo con los resultados de las actividades ejecutadas durante el [segundo semestre] de implementación () del Sistema de Administración de Seguridad Industrial, Seguridad Operativa y Protección Ambiental se concluye lo siguiente:
                                •   [Razón Social] Se encuentra en un proceso de implementación del sistema de administración en materia de Seguridad Industrial, Seguridad Operativa y Protección del Medio Ambiente en las operaciones previstas dentro del Plan de trabajo, aplicando las buenas prácticas, procedimientos.
                                •   [Hemos fortalecido los recursos necesarios (humanos, financieros, servicios e infraestructura) para garantizar el desempeño en Seguridad Industrial, Seguridad Operativa y Protección del Medio Ambiente, actualmente [RAZON SOCIAL] tiene un [59%] de avance en la implementación de este./ Se mantiene el control y desempeño de la gestión de Seguridad Industrial, Seguridad Operativa y Protección del Medio Ambiente en las operaciones previstas dentro del Plan de trabajo, aplicando las buenas prácticas, procedimientos.]
                                •   Se mantiene el compromiso de tener cero accidentes en las operaciones y actividades realizadas en campo aplicando los controles necesarios para evitar su ocurrencia, esto también incluye un seguimiento de las actividades de nuestras contratistas que participan en actividades operativas en campo.
                                •   Se cuenta con un avance significativo en el programa de Implementación del SASISOPA de acuerdo a las disposiciones administrativas de la ASEA, por lo que se ha visto un buen desempeño en los procesos de la empresa, lo que permite la estandarización de los métodos de trabajo y eso nos brinda en un panorama claro sobre lo que se tiene que hacer y cumplir incluyendo el Plan de Evaluación aprobado por la CNH, lo cual nos da confianza para siendo una operadora segura y confiable dentro del Sector Hidrocarburos de México.
                            </body>
                            </html>');
    $html2pdf->output();
?>