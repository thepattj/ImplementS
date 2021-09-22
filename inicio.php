<?php
    $U = $_GET["ty"];
    $id = $_GET["x"];

    include 'php/conex.php';
    $con = Conectarse();
    

?>

<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Panel de Inicio | ImplementS</title>
    <style type="text/css">
        a:link, a:visited, a:active {
            text-decoration:none;
        }
    </style>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- font awesome CSS
        ============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- meanmenu CSS
        ============================================ -->
    <link rel="stylesheet" href="css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- summernote CSS
        ============================================ -->
    <link rel="stylesheet" href="css/summernote/summernote.css">
    <!-- Range Slider CSS
        ============================================ -->
    <link rel="stylesheet" href="css/themesaller-forms.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- Notika icon CSS
        ============================================ -->
    <link rel="stylesheet" href="css/notika-custom-icon.css">
    <!-- bootstrap select CSS
        ============================================ -->
    <link rel="stylesheet" href="css/bootstrap-select/bootstrap-select.css">
    <!-- datapicker CSS
        ============================================ -->
    <link rel="stylesheet" href="css/datapicker/datepicker3.css">
    <!-- Color Picker CSS
        ============================================ -->
    <link rel="stylesheet" href="css/color-picker/farbtastic.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="css/chosen/chosen.css">
    <!-- notification CSS
        ============================================ -->
    <link rel="stylesheet" href="css/notification/notification.css">
    <!-- dropzone CSS
        ============================================ -->
    <link rel="stylesheet" href="css/dropzone/dropzone.css">
    <!-- wave CSS
        ============================================ -->
    <link rel="stylesheet" href="css/wave/waves.min.css">
    <!-- Data Table JS
    ============================================ -->
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">

    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!-- Modal para los puntos que solo cargan archivos-->
  <!-- MODAL DE POLITICA UPDATE FALTA -->
      <div class="modal fade" id="modalpt1"  role="dialog">
        <div class="modal-dialog modals-default">
          <div class="modal-content" style="border-radius: 35px;">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" style="background: #d58512;"> X </button>
            </div>
            <div class="modal-body">
              <h2>Punto 1 - Política</h2>
              <p>Complementar la información de la implementación del punto.</p>
              <form name="politicaenviar" id="enviarP" enctype="multipart/form-data" method="post" >
                <p>Describe la forma de divulgación de la política </p>
                <div class="form-group nk-int-st">
                  <input type="text" class="form-control" placeholder="Indica si se uso lona, cartas, en televisión y/o reunión." id="dvlpolitica" name="dvlpolitica">
                </div> 
                <p>Agrega pruebas de divulgación (.zip, .pdf)</p>
                <input type="file" class="form-control" placeholder="col-lg-4" id="archviopol" name="archviopol">
                <input style="display:none;" type="input" class="form-control" placeholder="" id="cre" name="cre">
                <input style="display:none;" type="input" class="form-control" placeholder="" id="ic" name="ic">
                <input style="display:none;" type="input" class="form-control" placeholder="" id="opc" name="opc">

                <p>Fecha de divulgación</p>
                <div class="fm-checkbox">
                  <label>
                    <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                      <div class="input-group date nk-int-st">
                        <span class="input-group-addon"></span>
                        <input type="text" class="form-control" id="fechadiv" name="fechadiv" value="08/22/2020">
                      </div>
                    </div>
                  </label>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-warning" id="btnGuardarP">Guardar</button>
            </div>
          </div>
        </div>
      </div>
      <!-- MODAL DE AR UPDATE FALTA -->
      <div class="modal fade" id="modalpt2"  role="dialog">
        <div class="modal-dialog modals-default">
          <div class="modal-content" style="border-radius: 35px;">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" style="background: #d58512;"> X </button>
            </div>
            <div class="modal-body">
              <h2>Punto 2 - Análisis de Riesgo y evaluación de impactos ambientales</h2>
              <p>Complementar la información de la implementación del punto.</p>
              <form name="arenviar" id="enviarAR" enctype="multipart/form-data" method="post">
                <p>Escribe la forma de divulgación del Análisis de Riesgo </p>
                <div class="form-group nk-int-st">
                  <input type="text" class="form-control" placeholder="Indica si se uso lona, cartas, en televisión y/o reunión." id="dvlar" name="dvlar">
                </div>

                <p>Agregar pruebas de divulgacion (.zip, .pdf)</p>
                <input type="file" class="form-control" placeholder="" id="archivoAR" name="archivoAR">
                <input style="display:none;" type="input" class="form-control" placeholder="" id="crear" name="crear">
                <input style="display:none;" type="input" class="form-control" placeholder="" id="icar" name="icar">
                <input style="display:none;" type="input" class="form-control" placeholder="" id="opc" name="opcar">


                <!-- <p>Carga el resultado de la evaluación de analisis de riesgo y aspectos ambientales.</p>
                <input type="file" class="form-control" placeholder="" id="archivoAR" name="archivorelsult"> -->
                  
                <!-- <input type="file" class="form-control" placeholder="col-lg-4" id="archviopol" name="archviopol"> -->
                <p>Fecha de cumplimiento</p>        
                <div class="fm-checkbox">
                  <label>
                    <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                      <div class="input-group date nk-int-st">
                        <span class="input-group-addon"></span>
                        <input type="text" class="form-control" id="fechardiv" name="fechardiv" value="03/19/2020">
                      </div>
                    </div>
                  </label>
                </div>          
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-warning" id="btnGuardarAR">Guardar</button>
            </div>
          </div>
        </div>
      </div>
      <!-- MODAL DE PUNTO4 UPDATE FALTA -->
      <div class="modal fade" id="modalpt4"  role="dialog">
        <div class="modal-dialog modals-default">
          <div class="modal-content" style="border-radius: 35px;">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" style="background: #d58512;"> X </button>
            </div>
            <div class="modal-body">
              <h2>Punto 4 - Objetivo, metas e indicadores</h2>
              <p>Cargar la prueba documental del cumplimento del objetivo, meta o indicador. </p>

              <p>Selecciona el objetivo</p>
              <div class="chosen-select-act fm-cmp-mg">
                <select class="chosen" name="" id="objetivopt4">
                  <option value="0" style="display: none;">Selecciona un objetivo</option>
                  <?php $qri = "SELECT idCobj as id, descripcion as objetivo FROM cobjetivo";
                        $res = mysqli_query($con, $qri);
                        while($row = $res->fetch_object()){ ?>
                  <option value="<?php echo ($row->id); ?>"> <?php echo ($row->objetivo); ?> </option>
                        <?php } ?>
                </select>
              </div>

              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"> <p>Fecha de cumplimiento</p> </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"> <p>Responsable</p> </div>

              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="fm-checkbox">
                  <label>
                    <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                      <div class="input-group date nk-int-st">
                        <span class="input-group-addon"></span>
                        <input type="text" class="form-control" id="fechapt4" value="03/19/2018">
                      </div>
                    </div>
                  </label>
                </div> 
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="form-group nk-int-st">
                  <input type="text" class="form-control" placeholder="Puesto de trabajador" value="Representante Técnico" id="objrespon" name="objrespon" disabled>
                </div>
              </div>

              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
              <p>Prueba de Cumplimiento</p>
              <div class="form-group nk-int-st">
                <input type="text" class="form-control" placeholder="Nombre de documento" id="cumpliobj" name="cumpliobj">
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-warning" id="btnGuardar4">Guardar</button>
            </div>
          </div>
        </div>  
      </div>
      <!-- MODAL DE SUG Y QUEJAS UPDATE FALTA -->
      <div class="modal fade" id="modalpt7" role="dialog">
        <div class="modal-dialog modals-default">
          <div class="modal-content" style="border-radius: 35px;">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" style="background: #d58512;"> X </button>
            </div>
            <div class="modal-body">
              <h2>Punto 7 - Comunicación, Participación y Consulta</h2>
              <p></p>

              <?php $mhoy = date("F"); if($mhoy == "August"){ $mhoy = "Agosto";} if($mhoy == "January"){ $mhoy = "Enero";} if($mhoy == "February"){ $mhoy = "Febrero";}if($mhoy == "March"){ $mhoy = "Marzo";} if($mhoy == "April"){ $mhoy = "Abril";} if($mhoy == "May"){ $mhoy = "Mayo";} if($mhoy == "June"){ $mhoy = "Junio";} if($mhoy == "July"){ $mhoy = "Julio";} if($mhoy == "September"){ $mhoy = "Septiembre";} if($mhoy == "October"){ $mhoy = "Octubre";} if($mhoy == "November"){ $mhoy = "Noviembre";} if($mhoy == "Decenmber"){ $mhoy = "Diciembre";} ?>

              <form name="enviarsq" id="enviarsq" enctype="multipart/form-data" method="post">
                <div class="modal-body" style="display: ;">
                  <p>¿Se tiene alguna Sugerencia y/o Quejas en el mes que termino (<?php echo $mhoy; ?>)? </p>
                  <select id="qsugque" name="qsugque">
                      <option style="display: none;" value="0"> Selecciona una opción</option>
                      <option value="1">SI</option>
                      <option value="2">NO</option>
                  </select>
                </div>

                <div class="modal-body" id="sugquese" name="sugquese" style="display: none;">
                  <p>Agrega el seguimiento que se a realizado ante las Sugerencias y/o Quejas (.pdf y/o .zip)</p>
                  <input type="file" class="form-control" placeholder="" id="archivosq" name="archivosq">
                  
                  <input style="display:none;" type="input" class="form-control" placeholder="" id="cresq" name="cresq">
                  <input style="display:none;" type="input" class="form-control" placeholder="" id="icsq" name="icsq">
                  <input style="display:none;" type="input" class="form-control" placeholder="" id="opc" name="opcsq">
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-warning" id="btnGuardar7">Guardar</button>
            </div>
          </div>
        </div>  
      </div>
      <!-- MODAL DE PUNTO 8 -->
      <div class="modal fade" id="modalpt8" role="dialog">
        <div class="modal-dialog modals-default">
          <div class="modal-content" style="border-radius: 35px;">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" style="background: #d58512;"> X </button>
            </div>
            <div class="modal-body">
              <h2>Punto 8 - Control de documentos</h2>
              <p>Para terminar este punto, deberas Descarga el control de los documentos de SASISOPA</p>


            </div>
            <div class="modal-footer">
              <?php
                $partes = explode("/", $id);
                $x = $partes[0].$partes[1];
              ?>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-warning" id="btnGuardar8"><a href="documents/Punto8/<?php echo $x?>/08SASISOPA.zip" class="nounderline" style="color: white;">Descargar</a></button>
            </div>
          </div>
        </div>
      </div>
      <!-- MODAL DE PRE UPDATE FALTA -->
      <div class="modal fade" id="modalpt13" role="dialog">
        <div class="modal-dialog modals-default">
          <div class="modal-content" style="border-radius: 35px;">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" style="background: #d58512;"> X </button>
            </div>
            <div class="modal-body">
              <h2>Punto 13 - Protocolos de respuesta a Emergencias</h2>
              <p></p>
              <p></p>

              <?php $compre = "SELECT idPRE as id FROM pre WHERE idCESH = '".$id."'";
                  //$compre = "SELECT idPRE as id FROM pre WHERER idCESH = 'PL/22402/EXP/ES/2019'";
                  $resultadopre = mysqli_query($con, $compre);
                  if($resultadopre->num_rows > 0){
                    while($fila = $resultadopre->fetch_assoc()){
                      $idPre = $fila['id'];
                    }
                  }else{
                    $idPre = "";
                  }
                  //echo "ESTO ES LO QUE SALE DEL SELECT: ".$idPre;
              ?>
              <?php if($idPre != ""){?>
                <form name="enviarSimP" id="enviarSimP" enctype="multipart/form-data" method="post">
                    <div class="modal-body" id="dos" style="display: ;">
                      <p>Carga de informe de simulacro</p>
                      <p>Selecciona el simulacro</p>
                          <!-- <button type="button" class="btn btn-primary"><a href="documents/Punto16/16-FM.zip" class="nounderline" >Descargar</a></button> -->
                      <select id="qsimulacro" name="qsimulacro">
                        <option style="display: none;" value="0"> Selecciona una opción</option>
                        <option value="macro">Macro simulacro</option>
                        <option value="primeros">Primeros Auxilios</option>
                        <option value="inmueble">Evaluación de inmuebles</option>
                        <option value="incendio">Conato de incendio</option>
                        <option value="sismo">Sismo</option>
                        <option value="colision">Colisión en la estación de servicio</option>
                        <option value="derrame">Emergencia derrame de hidrocarburos</option>
                        <option value="inundación">Inundación</option>
                        <option value="lesionado">Rescate de lesionado</option>
                      </select>
                      <p>Fecha de realización</p>
                        <div class="fm-checkbox">
                          <label>
                           <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                              <div class="input-group date nk-int-st">
                                <span class="input-group-addon"></span>
                                <input type="text" class="form-control" id="fechadivpre" name="fechadivpre" value="08/27/2020">
                              </div>
                            </div>
                          </label>
                        </div>
                      <p>Agrega el informe del simulacro (.pdf)</p>
                      <input type="file" class="form-control" name="archivosimu" id="archivosimu">
                      <input style="display:none;" type="input" class="form-control" placeholder="" id="crespre" name="crespre">
                    <input style="display:none;" type="input" class="form-control" placeholder="" id="icspre" name="icspre">
                    <input style="display:none;" type="input" class="form-control" placeholder="" id="opcspre" name="opcspre">
                    </div>
                  </form>
                </div>
            
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-warning" id="btnGuardarSimulacro">Guardar</button>
            </div>

              <?php }else{ ?>
                <form name="enviarPRE" id="enviarPRE" enctype="multipart/form-data" method="post">
                  <div class="modal-body" style="display: ;">
                    <p>Agrega el acuse de ingreso a ASEA de tu Protocolos de Respuesta a Emergencias P.R.E. (.pdf)</p>
                    <input type="file" class="form-control" name="archivopre" id="archivopre">
                    <input style="display:none;" type="input" class="form-control" placeholder="" id="crepre" name="crepre">
                    <input style="display:none;" type="input" class="form-control" placeholder="" id="icpre" name="icpre">
                    <input style="display:none;" type="input" class="form-control" placeholder="" id="opc" name="oppre">
                  </div>
                 </form>
            </div>
            
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-warning" id="btnGuardarPRE">Guardar</button>
            </div>
              <?php } ?>

            
          </div>
        </div>
      </div>
      <!-- MODAL DE PUNTO16 NO SIRVE -->
      <div class="modal fade" id="modalpt16" role="dialog">
        <div class="modal-dialog modals-default">
          <div class="modal-content" style="border-radius: 35px;">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" style="background: #d58512;"> X </button>
            </div>
            <div class="modal-body">
              <h2>Punto 16 - Investigación de Incidentes y accidentes</h2>
              <p></p>
              <p></p>
                
                <div class="modal-body">
                  <p>¿Haz tenido algún accidente o incidente en tu ES?</p>
                    <select id="qincident" name="qincident">
                      <option style="display: none;" value="0"> Selecciona una opción</option>
                      <option value="1">SI</option>
                      <option value="2">NO</option>
                    </select>
                </div>
                <div class="modal-body" id="descarga1" style="display: none;">
                    <p>Tipo de Incidente</p>
                        <select id="tipinc" name="tipinc">
                            <option style="display: none;" value="0"> Selecciona una opción</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    
                    <p>Descarga estos formatos y acompletalos</p>
                    <button id="tipo1" style="display: none; background: #FF5722;" type="button" class="btn "><a href="documents/Punto16/t1.zip" style="color: white; " >Descargar</a></button>
                    <button id="tipo2" style="display: none; background: #FF5722;" type="button" class="btn "><a href="documents/Punto16/t2.zip" style="color: white; " >Descargar</a></button>
                    <button id="tipo3" style="display: none; background: #FF5722;" type="button" class="btn "><a href="documents/Punto16/t3.zip" style="color: white; " >Descargar</a></button>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-warning" id="btnGuardar16">Guardar</button>
            </div>
          </div>
        </div>
      </div>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    <div class="header-top-area" style="background: white;">
      <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12"><img src="images/Logo-esquina.png"></div>
      <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12" style="background:rgb(27,22,50);">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <h4 id="dataRS" style="color:white; background:rgb(102,103,102); border-radius: 35px; text-align: center;"> Nombre de Usuario </h4>
          </div> <!-- CAMBIAR A UN BUTTON -->
      </div>
      <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12" style="background:rgb(102,103,102);">
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"> <H1 id="usuario" style="color:white; "> Bienvenidos </H1> </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"> </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <div class="dropdown-trig-sgn" style="margin-left: 80% !important; margin-top:2% !important;">
              <button class="btn triger-fadeIn" data-toggle="dropdown" style="background: rgba(102,103,102, .4) !important;"> <i class="notika-icon notika-menu"></i> </button>
                <ul class="dropdown-menu triger-fadeIn-dp" style="margin-left: 28%;">
                  <!-- <li><a href="#">Contacto con Energas</a></li>
                  <li><a href="#">Agenda</a></li>
                  <li><a href="#">Something else here</a></li>  -->
                  <li class="divider"></li>
                  <li id="adios"><a>Cerrar Sesión</a></li>
                </ul>
              </div>
        </div>
      </div>
      <div class="container" style="background: white;"> </div>
    </div>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        
    </div>
    <!-- Mobile Menu end -->


    <!-- Start Sale Statistic area-->
    <div class="notika-status-area">
        <div class="typography-area" style="padding-top: 2%;">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="">
              <img id="btnatras" src="images/flecha-izq.png" style="width: 38%; position: relative; margin-left: 20%; margin-top: 35%; padding-bottom: 30%;" alt>
            </div>

            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8" style="">
                <div class="tab-pane wizard-ctn" id="1pt" style="display:block;">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                      <img src="images/Punto-1.png" style="position: relative; margin-left: ;" id="pt1" data-toggle="modal" data-target="#modalpt1">
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="pt2" data-toggle="modal" data-target="#modalpt2">
                      <img src="images/Punto-2.png" style="width:; position: relative; margin-left: 5%;" alt>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12"> <!-- PUNTO 3 REQ. LEGALES -->
                      <img id="pt3" src="images/Punto-3.png" style="width:; position: relative; margin-left: 5%;" alt>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="pt4" data-toggle="modal" data-target="#modalpt4">
                      <img src="images/Punto-4.png" style="width:; position: relative; margin-left: 5%;" alt>
                    </div>
                </div>


                <div class="tab-pane wizard-ctn" id="2pt" style="display:none;">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="pt5" data-toggle="modal" data-target="">
                      <img src="images/Punto-5.png" style="width:; position: relative; margin-left: ;" alt>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="pt6" data-toggle="modal" data-target="">
                      <img src="images/Punto-6.png" style="width:; position: relative; margin-left: 5%;" alt>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="pt7" data-toggle="modal" data-target="#modalpt7">
                      <img src="images/Punto-7.png" style="width:; position: relative; margin-left: 5%;" alt>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="pt8" data-toggle="modal" data-target="#modalpt8">
                      <img src="images/Punto-8.png" style="width:; position: relative; margin-left: 5%;" alt>
                    </div>
                </div>


                <div class="tab-pane wizard-ctn" id="3pt" style="display:none;">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="pt9" data-toggle="modal" data-target="">
                      <img src="images/Punto-9.png" style="width:; position: relative; margin-left: %;" alt>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="pt10" data-toggle="modal" data-target="">
                      <img src="images/Punto-10.png" style="width:; position: relative; margin-left: 5%;" alt>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="pt11" data-toggle="modal" data-target="">
                      <img src="images/Punto-11.png" style="width:; position: relative; margin-left: 5%;" alt>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="pt12">
                      <img src="images/Punto-12.png" style="width:; position: relative; margin-left: 5%;" alt>
                    </div>
                </div>

                <div class="tab-pane wizard-ctn" id="4pt" style="display:none;">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="pt13" data-toggle="modal" data-target="#modalpt13">
                      <img src="images/Punto-13.png" style="width:; position: relative; margin-left: %;" alt>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="pt14" data-toggle="modal" data-target="">
                      <img src="images/Punto-14.png" style="width:; position: relative; margin-left: 5%;" alt>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="pt15">
                      <img src="images/Punto-15.png" style="width:; position: relative; margin-left: 5%;" alt>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="pt16" data-toggle="modal" data-target="#modalpt16">
                      <img src="images/Punto-16.png" style="width:; position: relative; margin-left: 5%;" alt>
                    </div>
                </div>

                <div class="tab-pane wizard-ctn" id="5pt" style="display:none;">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12"></div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="pt17">
                      <img src="images/Punto-17.png" style="width:; position: relative; margin-left: 5%;" alt>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="pt18" data-toggle="modal" data-target="">
                      <img src="images/Punto-18.png" style="width:; position: relative; margin-left: 5%;" alt>
                    </div>
                  </div>
                </div>

            </div>

            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="">
              <img id="btnadelante" src="images/flecha-der.png" style="width: 38%; position: relative; margin-left: 40%; margin-top: 35%; padding-bottom: 30%;" alt>
            </div>

            <div class="col-lg-12 col-md-2 col-sm-2 col-xs-2">
        </div>
    </div>
    <!-- End Sale Statistic area-->
    <!-- Start Email Statistic area-->
    <div class="notika-email-post-area" style="padding-top: 19.9%;">
        <div class="container">
            <div class="row">
               <div class="typography-heading typography-mgn"   style="background: rgba(255, 255, 255, .1);">
                <!-- IMAGEN DEL PUNTO 1 -->
                <?php 
                  $sql = "SELECT idCESH FROM politica WHERE idCESH = '".$id."' GROUP BY idCESH";
                  $resultado = mysqli_query($con, $sql);
                  if($resultado->num_rows > 0){ ?>
                    <img src="images/dispensarioL.png" style="width: 5%; margin-left: 1.5%;">
                  <?php } else {?>
                    <img src="images/dispensario.png" style="width: 5%; margin-left: 1.5%;">
                  <?php } 
                  /*IMAGEN DEL PUNTO 2*/
                  $sql1 = "SELECT idCESH FROM ar WHERE idCESH = '".$id."' GROUP BY idCESH";
                  $resultado1 = mysqli_query($con, $sql1);
                  if($resultado1->num_rows > 0){ ?>
                    <img src="images/dispensarioL.png" style="width: 5%;">
                <?php } else { ?>
                    <img src="images/dispensario.png" style="width: 5%;">
                <?php } 
                  /*IMAGEN DEL PUNTO 3*/
                  $sql2 = "SELECT idCESH FROM documento WHERE idCESH = '".$id."' GROUP BY idCESH";
                  $resultado2 = mysqli_query($con, $sql2);
                  if($resultado2->num_rows > 0){ ?>
                    <img src="images/dispensarioL.png" style="width: 5%;">
                <?php } else {?>
                    <img src="images/dispensario.png" style="width: 5%;">
                <?php } 
                  /*IMAGEN DEL PUNTO 4*/
                  $sql3 = "SELECT idCESH FROM objetivo WHERE idCESH = '".$id."' GROUP BY idCESH";
                  $resultado3 = mysqli_query($con, $sql3);
                  if($resultado3->num_rows > 0){?>
                    <img src="images/dispensarioL.png" style="width: 5%;">
                <?php }else{ ?>
                    <img src="images/dispensario.png" style="width: 5%;">
                <?php } 
                  /*IMAGEN DEL PUNTO 5*/
                  $sql4 = "SELECT idCESH FROM organigrama WHERE idCESH = '".$id."' GROUP BY idCESH";
                  $resultado4 = mysqli_query($con, $sql4);
                  if($resultado4->num_rows > 0){ ?>
                    <img src="images/dispensarioL.png" style="width: 5%;">
                <?php }else{ ?>
                    <img src="images/dispensario.png" style="width: 5%;">
                <?php } 
                  /*IMAGEN DEL PUNTO 6*/
                  $sql5 = "SELECT idCESH FROM curso WHERE idCESH = '".$id."' GROUP BY idCESH";
                  $resultado5 = mysqli_query($con, $sql5);
                  if($resultado5->num_rows > 0){ ?>
                    <img src="images/dispensarioL.png" style="width: 5%;">
                <?php } else {?>
                    <img src="images/dispensario.png" style="width: 5%;">
                <?php } 
                  /*IMAGEN DEL PUNTO 7*/
                  $sql6 = "SELECT idCESH FROM sugque WHERE idCESH = '".$id."' GROUP BY idCESH";
                  $resultado6 = mysqli_query($con, $sql6);
                  if($resultado6->num_rows > 0){ ?>
                    <img src="images/dispensarioL.png" style="width: 5%;">
                <?php }else{ ?>
                    <img src="images/dispensario.png" style="width: 5%;">
                <?php }
                  /*IMAGEN DEL PUNTO 8*/
                  $sql7 = "SELECT idCESH FROM control WHERE idCESH = '".$id."' GROUP BY idCESH";
                  $resultado7 = mysqli_query($con, $sql7);
                  if($resultado7->num_rows > 0){ ?>
                    <img src="images/dispensarioL.png" style="width: 5%;">
                <?php }else{ ?>
                    <img src="images/dispensario.png" style="width: 5%;">
                <?php }
                  /*IMAGEN DEL PUNTO 9*/
                  $sql8 = "SELECT idCESH FROM rbpo WHERE idCESH = '".$id."' GROUP BY idCESH";
                  $sql08 = "SELECT idCESH FROM controlrbpo WHERE idCESH = '".$id."' GROUP BY idCESH";
                  $resultado8 = mysqli_query($con, $sql8);
                  $resultado9 = mysqli_query($con, $sql08);
                  if($resultado8->num_rows > 0) { ?>
                    <img src="images/dispensarioL.png" style="width: 5%;">
                <?php }else{ ?>
                    <img src="images/dispensario.png" style="width: 5%;">
                <?php }
                  /*IMAGEN DEL PUNTO 10*/
                  $sql9 = "SELECT idCESH FROM dzbitacora WHERE idCESH = '".$id."' GROUP BY idCESH";
                  $sql10 = "SELECT idCESH FROM dzcambiop WHERE idCESH = '".$id."' GROUP BY idCESH";
                  $sql11 = "SELECT idCESH FROM dzcambiot WHERE idCESH = '".$id."' GROUP BY idCESH";
                  $sql12 = "SELECT idCESH FROM dzordentr WHERE idCESH = '".$id."' GROUP BY idCESH";

                  $resultado10 = mysqli_query($con, $sql9); //BITCORAS
                  $resultado010 = mysqli_query($con, $sql10); //CAMBIO DE PERSONAL
                  $resultado11 = mysqli_query($con, $sql11); //CAMBIO TECNOLOGICO
                  $resultado011 = mysqli_query($con, $sql12); //ORDEN DE TRABAJO
                  if($resultado10->num_rows > 0) { ?>
                    <img src="images/dispensarioL.png" style="width: 5%;">
                <?php }else{ ?>
                    <img src="images/dispensario.png" style="width: 5%;">
                <?php } 
                  /*if($resultado010->num_rows > 0){}
                    if($resultado11->num_rows > 0){}
                    if($resultado011->num_rows > 0){}*/
                  /*IMAGEN DEL PUNTO 11*/
                  $sql13 = "SELECT idCESH FROM bitacoras WHERE idCESH = '".$id."' GROUP BY idCESH";
                  $resultado12 = mysqli_query($con, $sql13);
                  if($resultado12->num_rows > 0){ ?>
                    <img src="images/dispensarioL.png" style="width: 5%;">
                <?php }else{ ?>
                    <img src="images/dispensario.png" style="width: 5%;">
                <?php }
                  /*IMAGEN DEL PUNTO 12*/
                  $sql14 = "SELECT idCESH FROM dcproveedor WHERE idCESH = '".$id."' GROUP BY idCESH";
                  $sql15 = "SELECT idCESH FROM dctraex WHERE idCESH = '".$id."' GROUP BY idCESH";
                  $resultado012 = mysqli_query($con, $sql14);
                  $resultado13 = mysqli_query($con, $sql15);
                  if($resultado012->num_rows > 0){ ?>
                    <img src="images/dispensarioL.png" style="width: 5%;">
                <?php }else{ ?>
                    <img src="images/dispensario.png" style="width: 5%;">
                <?php }
                  /*if($resultado13->num_rows > 0){}*/
                  /*IMAGEN DEL PUNTO 13*/
                  $sql16 = "SELECT idCESH FROM pre WHERE idCESH = '".$id."' GROUP BY idCESH";
                  $resultado014 = mysqli_query($con, $sql16);
                  if($resultado014->num_rows > 0){ ?>
                    <img src="images/dispensarioL.png" style="width: 5%;">
                <?php }else{ ?>
                    <img src="images/dispensario.png" style="width: 5%;">
                <?php }
                  /*IMAGEN DEL PUNTO 14*/
                  $sql17 = "SELECT idCESH FROM monverif WHERE idCESH = '".$id."' GROUP BY idCESH";
                  $resultado15 = mysqli_query($con, $sql17);
                  if($resultado15->num_rows > 0){ ?>
                    <img src="images/dispensarioL.png" style="width: 5%;">
                <?php }else{ ?>
                    <img src="images/dispensario.png" style="width: 5%;">
                <?php }
                  /*IMAGEN DEL PUNTO 15*/
                  $sql18 = "SELECT idCESH FROM reportea WHERE idCESH = '".$id."' GROUP BY idCESH";
                  $resultado015 = mysqli_query($con, $sql18);
                  if($resultado015->num_rows > 0){ ?>
                    <img src="images/dispensarioL.png" style="width: 5%;">
                <?php }else{ ?>
                    <img src="images/dispensario.png" style="width: 5%;">
                <?php }
                  /*IMAGEN DEL PUNTO 16*/
                  $sql19 ="SELECT idCESH FROM incidentes WHERE idCESH = '".$id."' GROUP BY idCESH";
                  $resultado16 = mysqli_query($con, $sql19);
                  if($resultado16->num_rows > 0){ ?>
                    <img src="images/dispensarioL.png" style="width: 5%;">
                <?php }else{ ?>
                    <img src="images/dispensario.png" style="width: 5%;">
                <?php } 
                  /*IMAGEN DEL PUNTO 17*/
                  /*if(){*/ ?>
                    <img src="images/dispensario.png" style="width: 5%;">
                <?php /*}else{*/ ?>
                    <!-- <img src="images/dispensarioL.png" style="width: 5%;"> -->
                <?php /*}*/ 
                  /*IMAGEN DEL PUNTO 18*/
                  /*if(){*/ ?>
                    <img src="images/dispensario.png" style="width: 5%;">
                <?php /*}else{*/ ?>
                    <!-- <img src="images/dispensarioL.png" style="width: 5%;"> -->
                <?php /*}*/ ?>
            </div>
          </div>
        </div>
    </div>
    <!-- End Email Statistic area-->

    <!-- Start Footer area-->
    <!-- Start Footer area-->
    <!-- <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2018 
. All rights reserved. ENERGAS S.A de C.V.<a href="https://colorlib.com"></a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Footer area-->
    
    <!-- jquery
        ============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
        ============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- knob JS
        ============================================ -->
    <script src="js/knob/jquery.knob.js"></script>
    <script src="js/knob/jquery.appear.js"></script>
    <script src="js/knob/knob-active.js"></script>
    <!-- Input Mask JS
        ============================================ -->
    <script src="js/jasny-bootstrap.min.js"></script>
    <!-- icheck JS
        ============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
    <!-- rangle-slider JS
        ============================================ -->
    <script src="js/rangle-slider/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="js/rangle-slider/jquery-ui-touch-punch.min.js"></script>
    <script src="js/rangle-slider/rangle-active.js"></script>
    <!-- datapicker JS
        ============================================ -->
    <script src="js/datapicker/bootstrap-datepicker.js"></script>
    <script src="js/datapicker/datepicker-active.js"></script>
    <!-- bootstrap select JS
        ============================================ -->
    <script src="js/bootstrap-select/bootstrap-select.js"></script>
    <!--  color-picker JS
        ============================================ -->
    <script src="js/color-picker/farbtastic.min.js"></script>
    <script src="js/color-picker/color-picker.js"></script>
    <!--  notification JS
        ============================================ -->
    <script src="js/notification/bootstrap-growl.min.js"></script>
    <script src="js/notification/notification-active.js"></script>
    <!--  summernote JS
        ============================================ -->
    <script src="js/summernote/summernote-updated.min.js"></script>
    <script src="js/summernote/summernote-active.js"></script>
    <!-- dropzone JS
        ============================================ -->
    <script src="js/dropzone/dropzone.js"></script>
    <!--  wave JS
        ============================================ -->
    <script src="js/wave/waves.min.js"></script>
    <script src="js/wave/wave-active.js"></script>
    <!--  chosen JS
        ============================================ -->
    <script src="js/chosen/chosen.jquery.js"></script>
    <!--  Chat JS
        ============================================ -->
    <script src="js/chat/jquery.chat.js"></script>
    <!--  todo JS
        ============================================ -->
    <script src="js/todo/jquery.todo.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="js/main.js"></script>

    <!-- Data Table JS
    ============================================ -->
    <script src="js/data-table/jquery.dataTables.min.js"></script>
    <script src="js/data-table/data-table-act.js"></script>

    <!-- tawk chat JS
        ============================================ -->
    <!-- <script src="js/tawk-chat.js"></script> -->

    <!--  wizard JS
        ============================================ -->
    <script src="js/wizard/jquery.bootstrap.wizard.min.js"></script>
    <script src="js/wizard/wizard-active.js"></script>

    <!-- jvectormap JS
        ============================================ -->
    <script src="js/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/jvectormap/jvectormap-active.js"></script>


    <script type="text/javascript" src="js/funciones.js"></script>
    <script type="text/javascript" src="js/onload.js"></script>

    <script src="js/vendor/jquery.min.js"></script>
</body>

</html>