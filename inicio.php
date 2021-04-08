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

<body >
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


    <!-- Modal -->
<!-- MODAL DE POLITICA UPDATE FALTA -->
<div class="modal fade" id="modalpt1"  role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Punto 1 - Política</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form name="politicaenviar" id="enviarP" enctype="multipart/form-data" method="post">
      <div class="modal-body">
        <p>Describe la forma de divulgación de la política </p>
        <div class="form-group nk-int-st">
          <input type="text" class="form-control" placeholder="Indica si se uso lona, cartas, en televisión y/o reunión." id="dvlpolitica" name="dvlpolitica">
        </div> 

        <p>Agrega pruebas de divulgación (.zip, .pdf)</p>
        <input type="file" class="form-control" placeholder="col-lg-4" id="archviopol" name="archviopol">
        <input style="display:none;" type="input" class="form-control" placeholder="" id="cre" name="cre">
        <input style="display:none;" type="input" class="form-control" placeholder="" id="ic" name="ic">
        <input style="display:none;" type="input" class="form-control" placeholder="" id="opc" name="opc">
        
        <!-- <input type="file" class="form-control" placeholder="col-lg-4" id="archviopol" name="archviopol"> -->

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

        <!-- <p>Fecha para cumplir</p>        
            <div class="fm-checkbox">
              <label>
                <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                  <div class="input-group date nk-int-st">
                    <span class="input-group-addon"></span>
                    <?php /*$q = "SELECT fechaImp as imple FROM sasisopa WHERE idCESH = '".$id."'";
                    $r = mysqli_query($con,$q);
                    while($rst = $r->fetch_object()){ $fecha=$rst->imple; }?>
                    <input type="text" class="form-control" id="fechaplan" name="fechadiv" value="<?php $pfecha = explode("-", $fecha); $fecha = $pfecha[1]."/".$pfecha[2]."/".$pfecha[0]; echo $fecha;*/  ?>" disabled>
                  </div>
                </div>
              </label>
            </div> -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" id="btnGuardarP">Guardar</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- MODAL DE AR UPDATE FALTA -->
<div class="modal fade" id="modalpt2"  role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Punto 2 - Análisis de Riesgo y evaluación de impactos ambientales</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form name="arenviar" id="enviarAR" enctype="multipart/form-data" method="post">
        <div class="modal-body">
          <p>Escribe la forma de divulgación del Análisis de Riesgo </p>
          <div class="form-group nk-int-st">
            <input type="text" class="form-control" placeholder="Indica si se uso lona, cartas, en televisión y/o reunión." id="dvlar" name="dvlar">
          </div>

          <p>Agregar pruebas de divulgacion de Riesgos en las instalaciones (.zip, .pdf)</p>
          <input type="file" class="form-control" placeholder="" id="archivoAR" name="archivoAR">
          <input style="display:none;" type="input" class="form-control" placeholder="" id="crear" name="crear">
          <input style="display:none;" type="input" class="form-control" placeholder="" id="icar" name="icar">
          <input style="display:none;" type="input" class="form-control" placeholder="" id="opc" name="opcar">
          
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
        </div>
      </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" id="btnGuardarAR">Guardar</button>
      </div>
    </div>
  </div>
</div>
<!-- MODAL DE PUNTO4 UPDATE FALTA -->
<div class="modal fade" id="modalpt4"  role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Punto 4 - Objetivo, metas e indicadores</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
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

        <p>Fecha de cumplimiento</p>        
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

        <p>Responsable</p>
        <div class="form-group nk-int-st">
          <input type="text" class="form-control" placeholder="Puesto de trabajador" value="Representante Técnico" id="objrespon" name="objrespon" disabled>
        </div>

        <p>Prueba de Cumplimiento</p>
        <div class="form-group nk-int-st">
          <input type="text" class="form-control" placeholder="Nombre de documento" id="cumpliobj" name="cumpliobj">
        </div>

        
        
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" id="btnGuardar4">Guardar</button>
      </div>
    </div>
  </div>
</div>

<!-- MODAL DE SUG Y QUEJAS UPDATE FALTA -->
<div class="modal fade" id="modalpt7"  role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Punto 7 - Comunicación, Participación y Consulta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
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
        <p></p>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> </div>
        <!-- <p>Mes de concentrado</p>
          <div class="chosen-select-act fm-cmp-mg">
            <select class="chosen" name="mesconcentrado" id="mesconcentrado">
              <option value="Selecciona" style="display: none;">Selecciona una opción</option>
              <option value="Enero">Enero</option>
              <option value="Febrero">Febrero</option>
              <option value="Marzo">Marzo</option>
              <option value="Abril">Abril</option>
              <option value="Mayo">Mayo</option>
              <option value="Junio">Junio</option>
              <option value="Julio">Julio</option>
              <option value="Agosto">Agosto</option>
              <option value="Septiembre">Septiembre</option>
              <option value="Octubre">Octubre</option>
              <option value="Noviembre">Noviembre</option>
              <option value="Diciembre">Diciembre</option>
            </select>
          </div> -->
        <input style="display:none;" type="input" class="form-control" placeholder="" id="cresq" name="cresq">
        <input style="display:none;" type="input" class="form-control" placeholder="" id="icsq" name="icsq">
        <input style="display:none;" type="input" class="form-control" placeholder="" id="opc" name="opcsq">
      </div>
    </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" id="btnGuardar7">Guardar</button>
      </div>
    </div>
  </div>
</div>


<!-- MODAL DE PUNTO8 NO SIRVE -->
<div class="modal fade" id="modalpt8"  role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Punto 8 - Control de documentos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="descarga8">
        <p>Para terminar este punto, deberas Descarga el control de los documentos de SASISOPA</p>
      </div>
      <div class="modal-footer">
        <?php
          $partes = explode("/", $id);
          $x = $partes[0].$partes[1];
        ?>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" id="btnGuardar8"><a href="documents/Punto8/<?php echo $x?>/08SASISOPA.zip" class="nounderline" >Descargar</a></button>
      </div>
    </div>
  </div>
</div>


<!-- MODAL DE PRE UPDATE FALTA -->
<div class="modal fade" id="modalpt13"  role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Punto 13 - Protocolos de respuesta a Emergencias</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

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
                <option value="inmueble">Evaluación de inmuebles</option>
                <option value="incendio">Conato de incendio</option>
                <option value="colision">Colisión en la estación de servicio</option>
                <option value="derrame">Emergencia derrame de hidrocarburos</option>
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
            </div>
          </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-warning" id="btnCargarSimu">Carga de Simulacro</button>
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
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" id="btnGuardarPRE">Guardar</button>
      </div>
    <?php } ?>
      

      
        
        
     
    </div>
  </div>
</div>



<!-- MODAL DE PUNTO16 NO SIRVE -->
<div class="modal fade" id="modalpt16"  role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Punto 16 - Investigación de Incidentes y accidentes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>¿Haz tenido algún accidente o incidente en tu ES? </p>
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
        <button id="tipo1" style="display: none;" type="button" class="btn btn-primary"><a href="documents/Punto16/t1.zip" class="nounderline" >Descargar</a></button>
        <button id="tipo2" style="display: none;" type="button" class="btn btn-primary"><a href="documents/Punto16/t2.zip" class="nounderline" >Descargar</a></button>
        <button id="tipo3" style="display: none;" type="button" class="btn btn-primary"><a href="documents/Punto16/t3.zip" class="nounderline" >Descargar</a></button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" id="btnGuardar16">Guardar</button>
      </div>
    </div>
  </div>
</div>

<!-- *****************************************SASISOPA************************************* -->
<!-- MODAL DE AGREGAR ESTACION -->
<div class="modal fade" id="modaladdsta"  role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"> Agregar Estación </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        </div>
        <div class="modal-body">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> <p>Razon Social</p> </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                <div class="form-group nk-int-st">
                    <input type="text" class="form-control" id="RS" placeholder="">
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> Permiso de la Cre </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                <div class="form-group nk-int-st">
                    <input type="text" class="form-control" id="PL" placeholder="">
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> Num. de Estación</div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                <div class="form-group nk-int-st">
                    <input type="text" class="form-control" id="idStation" placeholder="">
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>


            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> <p>Franquicia</p> </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
            <div class="form-group nk-int-st">
                <input type="text" class="form-control" id="franq" placeholder="">
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>


        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> <p>Dirección Fiscal</p> </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
            <div class="form-group nk-int-st">
                <input type="text" class="form-control" id="dirFis" placeholder="">
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> <p>RFC de estación</p> </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
            <div class="form-group nk-int-st">
                <input type="text" class="form-control" id="rfcStation" placeholder="">
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> <p>Ubicación de Proyecto</p> </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
            <div class="form-group nk-int-st">
                <input type="text" class="form-control" id="ubiStation" placeholder="">
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> <p>Telefono de estación</p> </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
            <div class="form-group nk-int-st">
                <input type="text" class="form-control" id="telStation" placeholder="">
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> <p>Correo para ASEA</p> </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
            <div class="form-group nk-int-st">
                <input type="text" class="form-control" id="correoASEA" placeholder="">
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> <p>Número de Autorización</p> </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
            <div class="form-group nk-int-st">
                <input type="text" class="form-control" id="sasiAutori" placeholder="">
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> <p>Fecha de Autorización</p> </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
            <div class="fm-checkbox">
                <label>
                    <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                        <div class="input-group date nk-int-st">
                            <span class="input-group-addon"></span>
                            <input type="text" class="form-control" id="fechaAut" name="fechaAut" value="08/22/2020">
                        </div>
                    </div>
                </label>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> <p>Nombre de Representante Legal</p> </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
            <div class="form-group nk-int-st">
                <input type="text" class="form-control" id="nameRL" placeholder="">
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> <p>RFC Representante Legal</p> </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
            <div class="form-group nk-int-st">
                <input type="text" class="form-control" id="rfcRL" placeholder="">
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> <p>CURP Representante Legal</p> </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
            <div class="form-group nk-int-st">
                <input type="text" class="form-control" id="curpRL" placeholder="">
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> <p>Estado</p> </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
            <div class="chosen-select-act fm-cmp-mg">
                <select class="chosen" data-placeholder="Selecciona Estado"  name="" id="estadoStation">
                    <option id="" value="0" style="display: none;">Selecciona el estado</option>
                    <?php $qri = "SELECT idEstado as id, nombre as estado FROM estado";
                          $resul = mysqli_query($con,$qri);
                          while($row = $resul->fetch_object()){ ?>
                    <option value="<?php echo $row->id; $value = $row->id;?>"><?php echo ($row->estado);?> </option>
                    
                    <?php } ?>
                </select>
            </div>            
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> <p>Municipio</p> </div>
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
            <div class="form-group nk-int-st">
                <input type="text" class="form-control" id="municipioStation" placeholder="">
            </div>
            <!-- <div class="chosen-select-act fm-cmp-mg">
                 <select class="chosen" data-placeholder="Selecciona Municipio" name="" id="municipioStation">
                     <option id="" value="0" style="display: none;">Selecciona el estado</option>
                     <?php /*$qro = "SELECT idMunicipio as id, nombre as municipio FROM municipio WHERE idEstado =".$value;
                           $res = mysqli_query($con,$qro);
                           while($row1 = $res->fetch_object()){ */?>
                     <option value="<?php/* echo $row1->id; */?>"><?php/* echo ($row1->municipio);*/?> </option>
                     
                     <?php /*}*/ ?>
                 </select>
             </div>   --> 
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" id="btnGuardarEstacion" data-toggle="modal" data-target="#modalsucc">Guardar</button>
        </div>
    </div>
  </div>
</div>
<!-- MODAL DE EDITAR DATOS ESTACION -->
<div class="modal fade" id="modaleditsta"  role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"> Editar Estación </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>

            <p>Selecciona la estación a editar</p>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <div class="chosen-select-act fm-cmp-mg">
                <select class="chosen" name="nombreEstacion" id="nombreEstacion">
                  <option id="" value="0" style="display: none;">Selecciona un nombre</option>
                    <?php $qestacion = "SELECT idCESH as id, razonSocial as nombre FROM cesh";
                          $rrazon = mysqli_query($con,$qestacion);
                          while($row1 = $rrazon->fetch_object()){ ?>
                            <option value="<?php echo $row1->id; ?>"> <?php echo ($row1->nombre); ?> </option>
                    <?php } ?>
                </select>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <button type="button" class="btn btn-primary" id="btnSeleccionarEstacion" data-toggle="modal" data-target="">Seleccionar</button>
            </div>  
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
        </div>
        <div class="modal-body" style="display: none;" id="actuB">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> <p>Razon Social</p> </div>
          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
            <div class="form-group nk-int-st">
              <input type="text" class="form-control" id="RSu" placeholder="">
            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> Permiso de la Cre </div>
          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
            <div class="form-group nk-int-st">
              <input type="text" class="form-control" id="PLu" disabled placeholder="">
            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> Num. de Estación</div>
          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
            <div class="form-group nk-int-st">
              <input type="text" class="form-control" id="idStationu" placeholder="">
            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>


          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> <p>Franquicia</p> </div>
          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
            <div class="form-group nk-int-st">
              <input type="text" class="form-control" id="franqu" placeholder="">
            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> <p>Dirección Fiscal</p> </div>
          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
            <div class="form-group nk-int-st">
              <input type="text" class="form-control" id="dirFisu" placeholder="">
            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> <p>RFC de estación</p> </div>
          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
            <div class="form-group nk-int-st">
              <input type="text" class="form-control" id="rfcStationu" placeholder="">
            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> <p>Ubicación de Proyecto</p> </div>
          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
            <div class="form-group nk-int-st">
              <input type="text" class="form-control" id="ubiStationu" placeholder="">
            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> <p>Telefono de estación</p> </div>
          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
            <div class="form-group nk-int-st">
              <input type="text" class="form-control" id="telStationu" placeholder="">
            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> <p>Correo para ASEA</p> </div>
          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
            <div class="form-group nk-int-st">
              <input type="text" class="form-control" id="correoASEAu" placeholder="">
            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> <p>Nombre de Representante Legal</p> </div>
          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
            <div class="form-group nk-int-st">
              <input type="text" class="form-control" id="nameRLu" placeholder="">
            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> <p>RFC Representante Legal</p> </div>
          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
            <div class="form-group nk-int-st">
              <input type="text" class="form-control" id="rfcRLu" placeholder="">
            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>

          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> <p>CURP Representante Legal</p> </div>
          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
            <div class="form-group nk-int-st">
              <input type="text" class="form-control" id="curpRLu" placeholder="">
            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
        
        </div>
        <div class="modal-footer" style="display: none;" id="actuF">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" id="btnActualizarEstacion" data-toggle="modal" data-target="#modalsuccu">Actualizar</button>
        </div>
    </div>
  </div>
</div>
<!-- MODAL DE USUARIO Y CONTRASEÑA DE ESTACION CREADA-->
<div class="modal fade" id="modalsucc" role="dialog">
    <div class="modal-dialog modals-default nk-gv">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h2>Carga Satisfactoria.</h2>
                <p>Usuario: </p> <p id="userentry"> </p> <b></b>
                <p>Contraseña: </p> <p id="pssentry"> </p> <b></b>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" id="btnCerrarModals" data-dismiss="modal">Aceptar</button>
            </div>
        </div>
    </div>
</div>   
<!-- MODAL DE CREACION DE USARIO RL  -->
<div class="modal fade" id="modaladduser"  role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"> Agregar Usuario </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        </div>
        <div class="modal-body">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> <p>Usuario</p> </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                <div class="form-group nk-int-st">
                    <input type="text" class="form-control" id="UserC" placeholder="Max 10 caracteres">
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> Contraseña</div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                <div class="form-group nk-int-st">
                    <input type="text" class="form-control" id="passC" placeholder="Max 8 caracteres">
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>

            <p>Selecciona la estación para agregar Usuario</p>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <div class="chosen-select-act fm-cmp-mg">
                <select class="chosen" name="nombreEstacion" id="nombreEstacion">
                  <option id="" value="0" style="display: none;">Selecciona un nombre</option>
                    <?php $qestacion = "SELECT idCESH as id, razonSocial as nombre FROM cesh";
                          $rrazon = mysqli_query($con,$qestacion);
                          while($row1 = $rrazon->fetch_object()){ ?>
                            <option value="<?php echo $row1->id; ?>"> <?php echo ($row1->nombre); ?> </option>
                    <?php } ?>
                </select>
              </div>
            </div>

            
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" id="btnGuardarUser" data-toggle="modal" data-target="#modalsucc">Guardar</button>
        </div>
    </div>
  </div>
</div>





    <!-- Start Header Top Area -->
    <div class="header-top-area" style="background: white; !important"> <!-- AQUI TIENE EL COLOR VERDE -->
      <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12"><img src="images/Logo-esquina.png"></div>
        <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12" style="background:rgb(27,22,50);">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><h4 id="dataRS" style="color:white; background:rgb(102,103,102); border-radius: 35px; text-align: right;"> Nombre de Usuario </h4> </div> <!-- CAMBIAR A UN BUTTON -->
        </div>
              <!-- <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="background: while;"><img src="">A1</div> -->
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="background:rgb(102,103,102); border-bottom-right-radius: 50px;"><H1 id="usuario" style="color:white; "> Bienvenidos </H1></div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><label></label></div>
        <div class="container">
            <div class="row">
              
                <!-- <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="#"><img src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
                            <li class="nav-item dropdown">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-search"></i></span></a>
                                <div role="menu" class="dropdown-menu search-dd animated flipInX">
                                    <div class="search-input">
                                        <i class="notika-icon notika-left-arrow"></i>
                                        <input type="text" />
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-mail"></i></span></a>
                                <div role="menu" class="dropdown-menu message-dd animated zoomIn">
                                    <div class="hd-mg-tt">
                                        <h2>Messages</h2>
                                    </div>
                                    <div class="hd-message-info">
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="img/post/1.jpg" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>David Belle</h3>
                                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="img/post/2.jpg" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>Jonathan Morris</h3>
                                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="img/post/4.jpg" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>Fredric Mitchell</h3>
                                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="img/post/1.jpg" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>David Belle</h3>
                                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="img/post/2.jpg" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>Glenn Jecobs</h3>
                                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="hd-mg-va">
                                        <a href="#">View All</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item nc-al"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-alarm"></i></span><div class="spinner4 spinner-4"></div><div class="ntd-ctn"><span>3</span></div></a>
                                <div role="menu" class="dropdown-menu message-dd notification-dd animated zoomIn">
                                    <div class="hd-mg-tt">
                                        <h2>Notification</h2>
                                    </div>
                                    <div class="hd-message-info">
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="img/post/1.jpg" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>David Belle</h3>
                                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="img/post/2.jpg" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>Jonathan Morris</h3>
                                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="img/post/4.jpg" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>Fredric Mitchell</h3>
                                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="img/post/1.jpg" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>David Belle</h3>
                                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <img src="img/post/2.jpg" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>Glenn Jecobs</h3>
                                                    <p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="hd-mg-va">
                                        <a href="#">View All</a>
                                    </div>
                                </div>
                            </li>
                            
                            <li class="nav-item" id="btnclosei"><a href="" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-close"></i></span></a>
                            </li>
                        </ul>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    <!-- <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a data-toggle="collapse" data-target="#Charts" href="#">Home</a>
                                    <ul class="collapse dropdown-header-top">
                                        <li><a href="index.html">Dashboard One</a></li>
                                        <li><a href="index-2.html">Dashboard Two</a></li>
                                        <li><a href="index-3.html">Dashboard Three</a></li>
                                        <li><a href="index-4.html">Dashboard Four</a></li>
                                        <li><a href="analytics.html">Analytics</a></li>
                                        <li><a href="widgets.html">Widgets</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demoevent" href="#">Email</a>
                                    <ul id="demoevent" class="collapse dropdown-header-top">
                                        <li><a href="inbox.html">Inbox</a></li>
                                        <li><a href="view-email.html">View Email</a></li>
                                        <li><a href="compose-email.html">Compose Email</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#democrou" href="#">Interface</a>
                                    <ul id="democrou" class="collapse dropdown-header-top">
                                        <li><a href="animations.html">Animations</a></li>
                                        <li><a href="google-map.html">Google Map</a></li>
                                        <li><a href="data-map.html">Data Maps</a></li>
                                        <li><a href="code-editor.html">Code Editor</a></li>
                                        <li><a href="image-cropper.html">Images Cropper</a></li>
                                        <li><a href="wizard.html">Wizard</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demolibra" href="#">Charts</a>
                                    <ul id="demolibra" class="collapse dropdown-header-top">
                                        <li><a href="flot-charts.html">Flot Charts</a></li>
                                        <li><a href="bar-charts.html">Bar Charts</a></li>
                                        <li><a href="line-charts.html">Line Charts</a></li>
                                        <li><a href="area-charts.html">Area Charts</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demodepart" href="#">Tables</a>
                                    <ul id="demodepart" class="collapse dropdown-header-top">
                                        <li><a href="normal-table.html">Normal Table</a></li>
                                        <li><a href="data-table.html">Data Table</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demo" href="#">Forms</a>
                                    <ul id="demo" class="collapse dropdown-header-top">
                                        <li><a href="form-elements.html">Form Elements</a></li>
                                        <li><a href="form-components.html">Form Components</a></li>
                                        <li><a href="form-examples.html">Form Examples</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">App views</a>
                                    <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                        <li><a href="notification.html">Notifications</a>
                                        </li>
                                        <li><a href="alert.html">Alerts</a>
                                        </li>
                                        <li><a href="modals.html">Modals</a>
                                        </li>
                                        <li><a href="buttons.html">Buttons</a>
                                        </li>
                                        <li><a href="tabs.html">Tabs</a>
                                        </li>
                                        <li><a href="accordion.html">Accordion</a>
                                        </li>
                                        <li><a href="dialog.html">Dialogs</a>
                                        </li>
                                        <li><a href="popovers.html">Popovers</a>
                                        </li>
                                        <li><a href="tooltips.html">Tooltips</a>
                                        </li>
                                        <li><a href="dropdown.html">Dropdowns</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages</a>
                                    <ul id="Pagemob" class="collapse dropdown-header-top">
                                        <li><a href="contact.html">Contact</a>
                                        </li>
                                        <li><a href="invoice.html">Invoice</a>
                                        </li>
                                        <li><a href="typography.html">Typography</a>
                                        </li>
                                        <li><a href="color.html">Color</a>
                                        </li>
                                        <li><a href="login-register.html">Login Register</a>
                                        </li>
                                        <li><a href="404.html">404 Page</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <!--<div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
        <li class="active"><a data-toggle="tab" href="#Home"><i class="notika-icon notika-house"></i> Home</a>
        </li>
        <li><a data-toggle="tab" href="#mailbox"><i class="notika-icon notika-mail"></i> Email</a>
        </li>
        <li><a data-toggle="tab" href="#Interface"><i class="notika-icon notika-edit"></i> Interface</a>
        </li>
        <li><a data-toggle="tab" href="#Charts"><i class="notika-icon notika-bar-chart"></i> Charts</a>
        </li>
        <li><a data-toggle="tab" href="#Tables"><i class="notika-icon notika-windows"></i> Tables</a>
        </li>
        <li><a data-toggle="tab" href="#Forms"><i class="notika-icon notika-form"></i> Forms</a>
        </li>
        <li><a data-toggle="tab" href="#Appviews"><i class="notika-icon notika-app"></i> App views</a>
        </li>
        <li><a data-toggle="tab" href="#Page"><i class="notika-icon notika-support"></i> Pages</a>
        </li>
    </ul>
    <div class="tab-content custom-menu-content">
        <div id="Home" class="tab-pane in active notika-tab-menu-bg animated flipInX">
            <ul class="notika-main-menu-dropdown">
                <li><a href="index.html">Dashboard One</a>
                </li>
                <li><a href="index-2.html">Dashboard Two</a>
                </li>
                <li><a href="index-3.html">Dashboard Three</a>
                </li>
                <li><a href="index-4.html">Dashboard Four</a>
                </li>
                <li><a href="analytics.html">Analytics</a>
                </li>
                <li><a href="widgets.html">Widgets</a>
                </li>
            </ul>
        </div>
        <div id="mailbox" class="tab-pane notika-tab-menu-bg animated flipInX">
            <ul class="notika-main-menu-dropdown">
                <li><a href="inbox.html">Inbox</a>
                </li>
                <li><a href="view-email.html">View Email</a>
                </li>
                <li><a href="compose-email.html">Compose Email</a>
                </li>
            </ul>
        </div>
        <div id="Interface" class="tab-pane notika-tab-menu-bg animated flipInX">
            <ul class="notika-main-menu-dropdown">
                <li><a href="animations.html">Animations</a>
                </li>
                <li><a href="google-map.html">Google Map</a>
                </li>
                <li><a href="data-map.html">Data Maps</a>
                </li>
                <li><a href="code-editor.html">Code Editor</a>
                </li>
                <li><a href="image-cropper.html">Images Cropper</a>
                </li>
                <li><a href="wizard.html">Wizard</a>
                </li>
            </ul>
        </div>
        <div id="Charts" class="tab-pane notika-tab-menu-bg animated flipInX">
            <ul class="notika-main-menu-dropdown">
                <li><a href="flot-charts.html">Flot Charts</a>
                </li>
                <li><a href="bar-charts.html">Bar Charts</a>
                </li>
                <li><a href="line-charts.html">Line Charts</a>
                </li>
                <li><a href="area-charts.html">Area Charts</a>
                </li>
            </ul>
        </div>
        <div id="Tables" class="tab-pane notika-tab-menu-bg animated flipInX">
            <ul class="notika-main-menu-dropdown">
                <li><a href="normal-table.html">Normal Table</a>
                </li>
                <li><a href="data-table.html">Data Table</a>
                </li>
            </ul>
        </div>
        <div id="Forms" class="tab-pane notika-tab-menu-bg animated flipInX">
            <ul class="notika-main-menu-dropdown">
                <li><a href="form-elements.html">Form Elements</a>
                </li>
                <li><a href="form-components.html">Form Components</a>
                </li>
                <li><a href="form-examples.html">Form Examples</a>
                </li>
            </ul>
        </div>
        <div id="Appviews" class="tab-pane notika-tab-menu-bg animated flipInX">
            <ul class="notika-main-menu-dropdown">
                <li><a href="notification.html">Notifications</a>
                </li>
                <li><a href="alert.html">Alerts</a>
                </li>
                <li><a href="modals.html">Modals</a>
                </li>
                <li><a href="buttons.html">Buttons</a>
                </li>
                <li><a href="tabs.html">Tabs</a>
                </li>
                <li><a href="accordion.html">Accordion</a>
                </li>
                <li><a href="dialog.html">Dialogs</a>
                </li>
                <li><a href="popovers.html">Popovers</a>
                </li>
                <li><a href="tooltips.html">Tooltips</a>
                </li>
                <li><a href="dropdown.html">Dropdowns</a>
                </li>
            </ul>
        </div>
        <div id="Page" class="tab-pane notika-tab-menu-bg animated flipInX">
            <ul class="notika-main-menu-dropdown">
                <li><a href="contact.html">Contact</a>
                </li>
                <li><a href="invoice.html">Invoice</a>
                </li>
                <li><a href="typography.html">Typography</a>
                </li>
                <li><a href="color.html">Color</a>
                </li>
                <li><a href="login-register.html">Login Register</a>
                </li>
                <li><a href="404.html">404 Page</a>
                </li>
            </ul>
        </div>
    </div>
</div> 
            </div>
        </div>
    </div>-->
<?php
    /*$U = "clientes";*/

    if( $U == "estacion"){ /*VISTA PARA CLIENTES QUE AGREGARAN CONTENIDO*/  
        echo '<div class="notika-status-area" id="inicioc" style="background:white;">
        <div class="container">
            <div class="row">
                <div class="tab-pane wizard-ctn" id="1pt" style="display:block;">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                      <img src="images/Punto-1.png" style="width: 80%; position: relative; margin-left: 12%;" id="pt1" data-toggle="modal" data-target="#modalpt1">'.

                        
                        /*<div  class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                            <div id="pt1text" class="website-traffic-ctn">
                                <h2><span>Punto 1</span></h2>
                                <p>Política</p>
                            </div>
                        </div>*/
                    '</div>
        
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="pt2" data-toggle="modal" data-target="#modalpt2">
                      <img src="images/Punto-2.png" style="width: 80%; position: relative; margin-left: 12%;" alt>'.
                        /*<div  class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                            <div class="website-traffic-ctn">
                                <h2 id="pt2Title" ><span class="">Punto 2</span></h2>
                                <p id="pt2Text" >Análisis de Riesgo ... </p>
                            </div>
                            <!-- <div class="sparkline-bar-stats2">1,4,8,3,5,6,4,8,3,3,9,5</div> -->
                        </div>*/
                    '</div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12"> <!-- PUNTO 3 REQ. LEGALES -->
                        <img id="pt3" src="images/Punto-3.png" style="width: 80%; position: relative; margin-left: 12%;" alt>'.
                        /*<div id="pt3" class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                            <div class="website-traffic-ctn">
                                <h2 id="pt3Title" ><span class="">Punto 3</span></h2>
                                <p id="pt3Text" >Requisitos Legales</p>
                            </div>
                            <!-- <div class="sparkline-bar-stats3">4,2,8,2,5,6,3,8,3,5,9,5</div> -->
                        </div>*/
                    '</div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="pt4" data-toggle="modal" data-target="#modalpt4">
                        <img src="images/Punto-4.png" style="width: 80%; position: relative; margin-left: 12%;" alt>'.
                        /*<div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                            <div class="website-traffic-ctn">
                                <h2 id="pt4Title" ><span class="">Punto 4</span></h2>
                                <p id="pt4Text" >Objetivos, metas e indicadores</p>
                            </div>
                            <!-- <div class="sparkline-bar-stats4">2,4,8,4,5,7,4,7,3,5,7,5</div> -->
                        </div>*/
                    '</div>
                </div>

                <div class="tab-pane wizard-ctn" id="2pt" style="display:none;">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="pt5" data-toggle="modal" data-target="">
                        <img src="images/Punto-5.png" style="width: 80%; position: relative; margin-left: 12%;" alt>'.
                        /*<div  class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                            <div class="website-traffic-ctn">
                                <h2 id="pt5Title" ><span class="">Punto 5</span></h2>
                                <p id="pt5Text" >Funciones y responsabilidades</p>
                            </div>
                        </div>*/
                    '</div>
        
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="pt6" data-toggle="modal" data-target="">
                        <img src="images/Punto-6.png" style="width: 80%; position: relative; margin-left: 12%;" alt>'.
                        /*<div  class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                            <div class="website-traffic-ctn">
                                <h2 id="pt6Title" ><span class="">Punto 6</span></h2>
                                <p id="pt6Text" >Competencia y capacitación</p>
                            </div>
                            <!-- <div class="sparkline-bar-stats2">1,4,8,3,5,6,4,8,3,3,9,5</div> -->
                        </div>*/
                    '</div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="pt7" data-toggle="modal" data-target="#modalpt7">
                        <img src="images/Punto-7.png" style="width: 80%; position: relative; margin-left: 12%;" alt>'.
                        /*<div  class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                            <div class="website-traffic-ctn">
                                <h2 id="pt7Title" ><span class="">Punto 7</span></h2>
                                <p id="pt7Text" >Comunicación, Participación...</p>
                            </div>
                            <!-- <div class="sparkline-bar-stats4">2,4,8,4,5,7,4,7,3,5,7,5</div> -->
                        </div>*/
                    '</div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="pt8" data-toggle="modal" data-target="#modalpt8">
                        <img src="images/Punto-8.png" style="width: 80%; position: relative; margin-left: 12%;" alt>'.
                        /*<div  class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                            <div class="website-traffic-ctn">
                                <h2 id="pt8Title" ><span class="">Punto 8</span></h2>
                                <p id="pt8Text" >Control de documentos</p>
                            </div>
                            <!-- <div class="sparkline-bar-stats4">2,4,8,4,5,7,4,7,3,5,7,5</div> -->
                        </div>*/
                    '</div>
                </div>

                <div id="3pt" style="display:none;">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="pt9" data-toggle="modal" data-target="">
                      <img src="images/Punto-9.png" style="width: 80%; position: relative; margin-left: 12%;" alt>'.
                        /*<div  class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                            <div class="website-traffic-ctn">
                                <h2 id="pt9Title" ><span class="">Punto 9</span></h2>
                                <p id="pt9Text" >Mejores practicas y estándares</p>
                            </div>
                        </div>*/
                    '</div>
        
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="pt10" data-toggle="modal" data-target="">
                        <img src="images/Punto-10.png" style="width: 80%; position: relative; margin-left: 12%;" alt>'.
                        /*<!--<div  class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                            <div class="website-traffic-ctn">
                                <h2 id="pt10Title" ><span class="">Punto 10</span></h2>
                                <p id="pt10Text" >Control de actividades y procesos</p>
                            </div>
                             <div class="sparkline-bar-stats2">1,4,8,3,5,6,4,8,3,3,9,5</div> -->*/                        
                    '</div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="pt11" data-toggle="modal" data-target="">
                        <img src="images/Punto-11.png" style="width: 80%; position: relative; margin-left: 12%;" alt>'.
                        /*<div  class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                            <div id="pt11" class="website-traffic-ctn">
                                <h2 id="pt11Title" ><span class="">Punto 11</span></h2>
                                <p id="pt11Text" >Integridad mécanica y ...</p>
                            </div>
                            <!-- <div class="sparkline-bar-stats3">4,2,8,2,5,6,3,8,3,5,9,5</div> -->
                        </div>*/
                    '</div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="pt12">
                        <img src="images/Punto-12.png" style="width: 80%; position: relative; margin-left: 12%;" alt>'.
                        /*<div  class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                            <div class="website-traffic-ctn">
                                <h2 id="pt12Title" ><span class="">Punto 12</span></h2>
                                <p id="pt12Text" >Seguridad de Contratista</p>
                            </div>
                            <!-- <div class="sparkline-bar-stats4">2,4,8,4,5,7,4,7,3,5,7,5</div> -->
                        </div>*/
                    '</div>
                </div>

                <div id="4pt" style="display:none;">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="pt13" data-toggle="modal" data-target="#modalpt13">
                      <img src="images/Punto-13.png" style="width: 80%; position: relative; margin-left: 12%;" alt>'.
                          /*<div  class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                              <div class="website-traffic-ctn">
                                  <h2 id="pt13Title" ><span class="">Punto 13</span></h2>
                                  <p style="display:none;">Protocolos de respuesta ...</p>
                                  <p id="pt13Text" >PRE</p>
                              </div>
                          </div>*/
                    '</div>
        
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="pt14" data-toggle="modal" data-target="">
                        <img src="images/Punto-14.png" style="width: 80%; position: relative; margin-left: 12%;" alt>'.
                        /*<div  class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                            <div class="website-traffic-ctn">
                                <h2 id="pt14Title" ><span class="">Punto 14</span></h2>
                                <p id="pt14Text" >Monitoreo, verificación ...</p>
                            </div>
                            <!-- <div class="sparkline-bar-stats2">1,4,8,3,5,6,4,8,3,3,9,5</div> -->
                        </div>*/
                    '</div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="pt15">
                        <img src="images/Punto-15.png" style="width: 80%; position: relative; margin-left: 12%;" alt>'.
                        /*<div  class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                            <div class="website-traffic-ctn">
                                <h2 id="pt15Title" ><span class="">Punto 15</span></h2>
                                <p id="pt15Text" >Auditorias</p>
                            </div>
                            <!-- <div class="sparkline-bar-stats3">4,2,8,2,5,6,3,8,3,5,9,5</div> -->
                        </div>*/
                    '</div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="pt16" data-toggle="modal" data-target="#modalpt16">
                      <img src="images/Punto-16.png" style="width: 80%; position: relative; margin-left: 12%;" alt>'.
                        /*<div  class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                            <div class="website-traffic-ctn">
                                <h2 id="pt16Title" ><span class="">Punto 16</span></h2>
                                <p id="pt16Text" >Investigación de incidentes y ...</p>
                            </div>
                        </div>*/
                    '</div>
                </div>

                <div id="5pt" style="display:none;">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="pt17">
                        <img src="images/Punto-17.png" style="width: 80%; position: relative; margin-left: 12%;" alt>'.
                        /*<div  data-toggle="modal" data-target="" class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                            <div class="website-traffic-ctn">
                                <h2 id="pt17Title" ><span class="">Punto 17</span></h2>
                                <p id="pt17Text" >Revisión por la Dirección</p>
                            </div>
                        </div>*/
                    '</div>
        
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="pt18" data-toggle="modal" data-target="">
                        <img src="images/Punto-18.png" style="width: 80%; position: relative; margin-left: 12%;" alt>'.
                        /*<div  class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                            <div class="website-traffic-ctn">
                                <h2 id="pt18Title" ><span class="">Punto 18</span></h2>
                                <p id="pt18Text" >Informe de desempeño</p>
                            </div>
                            <!-- <div class="sparkline-bar-stats2">1,4,8,3,5,6,4,8,3,3,9,5</div> -->
                        </div>*/
                    '</div>
                </div>
            </div>

            <div class="wizard-action-pro">
                <ul class="wizard-nav-ac">
                    <li id="btninicio"><a class="button-first a-prevent"><i class="notika-icon notika-more-button"></i></a></li>
                    <li id="btnatras"><a class="button-previous a-prevent"><i class="notika-icon notika-back"></i></a></li>
                    <li id="btnadelante"><a class="button-next a-prevent"><i class="notika-icon notika-next-pro"></i></a></li>
                    <li id="btnfinal"> <a class="button-last a-prevent"><i class="notika-icon notika-more-button"></i></a></li>
                </ul>
            </div>
        </div>
        </div>';/*
        echo '<div class="sale-statistic-area">
        <div class="container">
            <div class="row">
              

            </div>
        </div>
        </div>';*/
    }if( $U == "Admin"){/*VISTA PARA SISTEMAS Y ENERGAS*/
        /*AREA DE PUNTOS*/
        echo '<div class="notika-status-area">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 "> <h1> Bienvenido </h1></div>
            <div class="row">                
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div id="" data-toggle="" data-target="" class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="">Estaciones</span></h2>
                            <p></p>
                        </div>
                        <div style="margin-left: 15%;"> <i class="notika-icon notika-flag"></i> </div>
                    </div>
                </div>
    
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div id="" data-toggle="" data-target="" class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="">Puntos SASISOPA</span></h2>
                            <p></p>
                        </div>
                        <div style="margin-left: 15%;"> <i class="notika-icon notika-draft"></i> </div>
                        <!-- <div class="sparkline-bar-stats2">1,4,8,3,5,6,4,8,3,3,9,5</div> BARRAS DE GRAFICAS-->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div id="" class="website-traffic-ctn">
                            <h2><span class="">Configuración</span></h2>
                            <p></p>
                        </div>
                        <div style="margin-left: 15%;"> <i class="notika-icon notika-settings"></i> </div>
                        
                        <!-- <div class="sparkline-bar-stats2">1,4,8,3,5,6,4,8,3,3,9,5</div> BARRAS DE GRAFICAS-->
                    </div>
                </div>
            </div>
        </div>
        </div>';
        echo'<div class="sale-statistic-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">
                    <div class="sale-statistic-inner notika-shadow mg-tb-30">
                        <div class="curved-inner-pro">
                            <div class="curved-ctn">
                                <h2>Progreso de SASISOPA por estado</h2>
                                <p></p>
                            </div>
                        </div>
                        <div id="curved-line-chart" class="flot-chart-sts flot-chart"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
                    <div class="statistic-right-area notika-shadow mg-tb-30 sm-res-mg-t-0">
                        <div class="past-day-statis">
                            <h2>Notificaciones</h2>
                            <p></p>
                        </div>
                            <div class="dash-widget-visits"></div>
                        <div class="past-statistic-an">
                            <div class="past-statistic-ctn">
                                <h3><span class="counter"></span></h3>
                                <p>Carga de Clientes</p>
                            </div>
                            <div class="past-statistic-graph">
                                <div class="stats-bar"></div>
                            </div>
                        </div>
                        <div class="past-statistic-an">
                            <div class="past-statistic-ctn">
                                <h3><span class="counter"></span></h3>
                                <p>Faltantes de Clientes</p>
                            </div>
                            <div class="past-statistic-graph">
                                <div class="stats-line"></div>
                            </div>
                        </div>
                        <div class="past-statistic-an">
                            <div class="past-statistic-ctn">
                                <h3><span class="counter"></span></h3>
                                <p>Punto menos realizado</p>
                            </div>
                            <div class="past-statistic-graph">
                                <div class="stats-bar-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>';
    }if($U == "sasisopa"){    /*VISTA PARA SASISOPA*/
        echo  '<div class="notika-status-area">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 "> <h1> Bienvenido </h1></div>
            <div class="row">                
                <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div id="btnstasasi" data-toggle="modal" data-target="" class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="">Estaciones</span></h2>
                            <p></p>
                        </div>
                        <div style="margin-left: 15%;"> <i class="notika-icon notika-plus-symbol"> </i> </div>
                    </div>
                </div> -->
    
                <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div id="btnsasisasi" data-toggle="" data-target="" class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="">Puntos SASISOPA</span></h2>
                            <p></p>
                        </div>
                        <div style="margin-left: 15%;"> <i class="notika-icon notika-plus-symbol"> </i> </div>
                        
                    </div>
                </div> -->
            </div>
        </div>
        </div>';
        echo '<div class="wizard-area" id="spaesta" style="display: none;">
        <div class="container">
            <div class="row">
                
            </div>
        </div>
        </div>';
        echo '<div class="sale-statistic-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                    <div class="sale-statistic-inner notika-shadow mg-tb-30">
                        <div class="curved-inner-pro">
                            <div class="curved-ctn">
                                <h2>Progreso de SASISOPA por estaciones</h2>
                                <p></p>
                            </div>
                        </div>
                        <div id="curved-line-chart" class="flot-chart-sts flot-chart"></div>
                    </div>
                </div>

                <!-- ESTA ES LA NUEVA LISTA QUE SE VA ESTAR USANDO -->
                
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div id="btnaddst" data-toggle="modal" data-target="#modaladdsta" class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class=""> <a href="#tab1" data-toggle="tab">Agregar Estaciones</a> </span></h2>
                            <p></p>
                        </div>
                        <div style="margin-left: 15%;"> <i class="notika-icon notika-plus-symbol"> </i> </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div id="btnstasasi" data-toggle="modal" data-target="#modaleditsta" class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class=""><a href="#tab2" data-toggle="tab"> Actualizar Estaciones</a> </span></h2>
                            <p></p>
                        </div>
                        <div style="margin-left: 15%;"> <i class="notika-icon notika-plus-symbol"> </i> </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div id="btnstasasi" data-toggle="modal" data-target="#modaladduser" class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h4><span class=""> <a href="#tab3" data-toggle="tab">Agregar Usarios a Estaciones</a> </span></h4>
                            <p></p>
                        </div>
                        <div style="margin-left: 15%;"> <i class="notika-icon notika-plus-symbol"> </i> </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="btnsas">
                    <div id="" data-toggle="modal" data-target="" class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class=""><a> Bloquear Estaciones</a> </span></h2>
                            <p></p>
                        </div>
                        <div style="margin-left: 15%;"> <i class="notika-icon notika-plus-symbol"> </i> </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div id="btnbl" data-toggle="modal" data-target="" class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class=""><a>Implementación</a></span></h2>
                            <p></p>
                        </div>
                        <div style="margin-left: 15%;"> <i class="notika-icon notika-plus-symbol"> </i> </div>
                    </div>
                </div>
                
                <!-- <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
                    <div class="statistic-right-area notika-shadow mg-tb-30 sm-res-mg-t-0">
                        <div class="past-day-statis">
                            <h2>Notificaciones</h2>
                            <p></p>
                        </div>
                            <div class="dash-widget-visits"></div>
                        <div class="past-statistic-an">
                            <div class="past-statistic-ctn">
                                <h3><span class="counter"></span></h3>
                                <p>Carga de Clientes</p>
                            </div>
                            <div class="past-statistic-graph">
                                <div class="stats-bar"></div>
                            </div>
                        </div>
                        <div class="past-statistic-an">
                            <div class="past-statistic-ctn">
                                <h3><span class="counter"></span></h3>
                                <p>Faltantes de Clientes</p>
                            </div>
                            <div class="past-statistic-graph">
                                <div class="stats-line"></div>
                            </div>
                        </div>
                        <div class="past-statistic-an">
                            <div class="past-statistic-ctn">
                                <h3><span class="counter"></span></h3>
                                <p>Punto menos realizado</p>
                            </div>
                            <div class="past-statistic-graph">
                                <div class="stats-bar-2"></div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        </div>';
    }
?>




    <!-- Start Footer area-->
    <div class="footer-copyright-area">
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
    </div>
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