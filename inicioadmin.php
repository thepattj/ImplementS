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
  <!-- MODAL DE ESTACIONES (AGREGAR, ACTUALIZAR Y ELIMINAR) -->
      <div class="modal fade" id="modalsta"  role="dialog">

        <div class="modal-dialog modals-default">
          <button type="button" id="addstajs" class="close" data-dismiss="" style="background: #f0ad4e; margin-right:-15%; margin-top: 25%; border-radius: 5% !important; width: 100px; text-shadow: 0 0px 0;"> Agregar </button>
          <button type="button" id="upstajs" class="close" data-dismiss="" style="background: #5bc0de; margin-right:-15%; margin-top: 30%; border-radius: 5% !important; width: 100px; text-shadow: 0 0px 0;"> Actualizar </button>
          <button type="button" id="delstajs" class="close" data-dismiss="" style="background: #F44336; margin-right:-15%; margin-top: 35%; border-radius: 5% !important; width: 100px; text-shadow: 0 0px 0;"> Eliminar </button>
          <div class="modal-content" style="border-radius: 35px;">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" style="background: #d58512;"> X </button>
            </div>
            <div class="modal-body">
              <h2>Estaciones</h2>              
              <p>En la parte izquierda podras dar clic en la acción que deseas realizar con la estación:</p>

              <div class="row" id="agregarNew" style="display: none;">
                <div class="col-lg-6">
                  <div class="form-group">
                    <div class="nk-int-st">
                      <label style="margin-right: 3%;" >Permiso Cre </label> <input type="text" class="form-group" placeholder="PL/****/" id="staCre" name="staCre">
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="form-group">
                    <div class="nk-int-st">
                      <label style="margin-right: 3%;" >No. Estación </label> <input type="text" class="form-group" placeholder="" id="staNo" name="staNo">
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="form-group">
                    <div class="nk-int-st">
                      <label style="margin-right: 3%;" >Tipo de actividad </label> <input type="text" class="form-group" placeholder="Expendio, Transporte, etc" id="staTipo" name="staRs">
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="form-group">
                    <div class="nk-int-st">
                      <label style="margin-right: 3%;" >Razón Social </label> <input type="text" class="form-group" placeholder="necesaria" id="staRs" name="staRs">
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="form-group">
                    <div class="nk-int-st">
                      <label style="margin-right: 3%;" >Franquicia </label> <input type="text" class="form-group" placeholder="Pemex, Mobil, Shell" id="staFra" name="staFra">
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="form-group">
                    <div class="nk-int-st">
                      <label style="margin-right: 3%;" >Ubicación </label> <input type="text" class="form-group" placeholder="Dirección Fiscal o por comprobante " id="staUb" name="staUb">
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="form-group">
                    <div class="nk-int-st">
                      <label style="margin-right: 3%;" >RFC de la estación </label> <input type="text" class="form-group" placeholder="Necesaria" id="starfc" name="starfc">
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="form-group">
                    <div class="nk-int-st">
                      <label style="margin-right: 3%;" >Fecha de Autorización </label>
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
                </div>

                <div class="col-lg-6">
                  <div class="form-group">
                    <div class="nk-int-st">
                      <label style="margin-right: 3%;" >Estado </label> <div class="chosen-select-act fm-cmp-mg">
                    <select class="chosen" name="" id="staEst">
                      <option value="0" style="display: none;">Selecciona el estado</option>
                      <?php $qrsta = "SELECT idEstado, nombre FROM estado";
                            $rest = mysqli_query($con, $qrsta);
                            while($row0 = $rest->fetch_object()){ ?>
                      <option value="<?php echo ($row0->idEstado); ?>"> <?php echo ($row0->nombre); ?> </option>
                            <?php } ?>
                    </select>
                  </div> 
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="form-group">
                    <div class="nk-int-st">
                      <label style="margin-right: 3%;" >Municipio </label> <div class="chosen-select-act fm-cmp-mg">
                    <select class="chosen" name="" id="staMun">
                      <option value="0" style="display: none;">Selecciona el municipio</option>
                      <?php $qrmun = "SELECT idMunicipio, nombre FROM municipio";
                            $resm = mysqli_query($con, $qrmun);
                            while($row1 = $resm->fetch_object()){ ?>
                      <option value="<?php echo ($row1->idMunicipio); ?>"> <?php echo ($row1->nombre); ?> </option>
                            <?php } ?>
                    </select>
                  </div>     
                    </div>
                  </div>
                </div>
              </div>

              <div class="row" id="actualizaRw" style="display: none;">
                <div class="col-lg-6">
                  <div class="form-group">
                    <div class="nk-int-st">
                      <label style="margin-right: 3%;" >Razón Social </label> <div class="chosen-select-act fm-cmp-mg">
                        <select class="chosen" name="" id="staActu">
                          <option value="0" style="display: none;">Selecciona la instalación</option>
                          <?php $qrcesh = "SELECT razonSocial, idCESH FROM cesh ORDER BY razonSocial ASC";
                                $rescesh = mysqli_query($con, $qrcesh);
                                while($row1 = $rescesh->fetch_object()){ ?>
                          <option value="<?php echo ($row1->idCESH); ?>"> <?php echo ($row1->razonSocial)." ".($row1->idCESH); ?> </option>
                          <?php } ?>
                        </select>
                        </div>    
                    </div>
                  </div>                  
                </div>

                <div class="col-lg-6">
                  <button type="button" class="btn btn-warning" id="btnBuscarEstacion" >Buscar</button>
                </div>

                <div class="col-lg-12" style="display: none;" id="contenidoAct">
                  <div class="col-lg-6">
                  <div class="form-group">
                    <div class="nk-int-st">
                      <label style="margin-right: 3%;" >Permiso Z Cre </label> <input type="text" class="form-group" placeholder="PL/****/" id="staCre" name="staCre">
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="form-group">
                    <div class="nk-int-st">
                      <label style="margin-right: 3%;" >No. Estación </label> <input type="text" class="form-group" placeholder="" id="staNo" name="staNo">
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="form-group">
                    <div class="nk-int-st">
                      <label style="margin-right: 3%;" >Tipo de actividad </label> <input type="text" class="form-group" placeholder="Expendio, Transporte, etc" id="staTipo" name="staRs">
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="form-group">
                    <div class="nk-int-st">
                      <label style="margin-right: 3%;" >Razón Social </label> <input type="text" class="form-group" placeholder="necesaria" id="staRs" name="staRs">
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="form-group">
                    <div class="nk-int-st">
                      <label style="margin-right: 3%;" >Franquicia </label> <input type="text" class="form-group" placeholder="Pemex, Mobil, Shell" id="staFra" name="staFra">
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="form-group">
                    <div class="nk-int-st">
                      <label style="margin-right: 3%;" >Ubicación </label> <input type="text" class="form-group" placeholder="Dirección Fiscal o por comprobante " id="staUb" name="staUb">
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="form-group">
                    <div class="nk-int-st">
                      <label style="margin-right: 3%;" >RFC de la estación </label> <input type="text" class="form-group" placeholder="Necesaria" id="starfc" name="starfc">
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="form-group">
                    <div class="nk-int-st">
                      <label style="margin-right: 3%;" >Fecha de Autorización </label>
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
                </div>

                <div class="col-lg-6">
                  <div class="form-group">
                    <div class="nk-int-st">
                      <label style="margin-right: 3%;" >Estado </label> <div class="chosen-select-act fm-cmp-mg">
                    <select class="chosen" name="" id="staEst">
                      <option value="0" style="display: none;">Selecciona el estado</option>
                      <?php $qrsta = "SELECT idEstado, nombre FROM estado";
                            $rest = mysqli_query($con, $qrsta);
                            while($row0 = $rest->fetch_object()){ ?>
                      <option value="<?php echo ($row0->idEstado); ?>"> <?php echo ($row0->nombre); ?> </option>
                            <?php } ?>
                    </select>
                  </div> 
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="form-group">
                    <div class="nk-int-st">
                      <label style="margin-right: 3%;" >Municipio </label> <div class="chosen-select-act fm-cmp-mg">
                    <select class="chosen" name="" id="staMun">
                      <option value="0" style="display: none;">Selecciona el municipio</option>
                      <?php $qrmun = "SELECT idMunicipio, nombre FROM municipio";
                            $resm = mysqli_query($con, $qrmun);
                            while($row1 = $resm->fetch_object()){ ?>
                      <option value="<?php echo ($row1->idMunicipio); ?>"> <?php echo ($row1->nombre); ?> </option>
                            <?php } ?>
                    </select>
                  </div>     
                    </div>
                  </div>
                </div>
                </div>

                

              </div>

              <div class="row" id="borrarDe" style="display: none;">
                <div class="col-lg-6">
                  <div class="form-group">
                    <div class="nk-int-st">
                      <label style="margin-right: 3%;" >Razón Social </label> <div class="chosen-select-act fm-cmp-mg">
                        <select class="chosen" name="" id="staDel">
                          <option value="0" style="display: none;">Selecciona la instalación</option>
                          <?php $qrcesh = "SELECT razonSocial, idCESH FROM cesh ORDER BY razonSocial ASC";
                                $rescesh = mysqli_query($con, $qrcesh);
                                while($row1 = $rescesh->fetch_object()){ ?>
                          <option value="<?php echo ($row1->idCESH); ?>"> <?php echo ($row1->razonSocial)." ".($row1->idCESH); ?> </option>
                          <?php } ?>
                        </select>
                        </div>    
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-warning" id="btnGuardarEstacion" style="display: none;">Guardar</button>
              <button type="button" class="btn btn-warning" id="btnActualizarEstacion" style="display: none;">Actualizar</button>
              <button type="button" class="btn btn-warning" id="btnDesactivarEstacion" style="display: none;">Borrar</button>
            </div>

          </div>
        </div>
      </div>
      <!-- MODAL DE PUNTO 17 - AGREGAR FALTA -->
      <div class="modal fade" id="modalinf"  role="dialog">
        <div class="modal-dialog modals-default">
          <div class="modal-content" style="border-radius: 35px;">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" style="background: #d58512;"> X </button>
            </div>
            <div class="modal-body">
              <h2>Informe de desempeño (Punto 17)</h2>              
              <p>Se mostraran los datos que el regulado a subido para su informes semestrales, auditorias internas y reportes anuales</p>

              <div class="row" id="" style="display: ;">
                <div class="col-lg-6">
                  <div class="form-group">
                    <div class="nk-int-st">
                      <label style="margin-right: 3%;" >Razón Social </label> <div class="chosen-select-act fm-cmp-mg">
                        <select class="chosen" name="" id="stapt17">
                          <option value="0" style="display: none;">Selecciona la instalación</option>
                          <?php $qrcesh = "SELECT razonSocial, idCESH FROM cesh ORDER BY razonSocial ASC";
                                $rescesh = mysqli_query($con, $qrcesh);
                                while($row1 = $rescesh->fetch_object()){ ?>
                          <option value="<?php echo ($row1->idCESH); ?>"> <?php echo ($row1->razonSocial)." ".($row1->idCESH); ?> </option>
                          <?php } ?>
                        </select>
                        </div>    
                    </div>
                  </div>                  
                </div>
                <div class="col-lg-6">
                  <button type="button" class="btn btn-warning" id="btnBuscarEstacion17" >Buscar</button>
                </div>
              </div>
              <div class="row" style="boder: black 1px solid; display:;">
                <div class="" id="punto17inserts" style="overflow: auto; width: 100%; height: 255px; margin-left: 3%;"> <!-- AQUI AGREGUE EL SCROLL -->
                  
                </div>
              </div>


              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-warning" id="btnGuardarpt17Adm">Guardar</button>
            </div>
          </div>
        </div>
      </div>
      <!-- MODAL DE REPORTE -->
      <div class="modal fade" id="modaldir"  role="dialog">
        <div class="modal-dialog modals-default">
          <div class="modal-content" style="border-radius: 35px;">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" style="background: #d58512;"> X </button>
            </div>
            <div class="modal-body">
              <h2>Reporte SASISOPA</h2>              
              <p>Se creara y se subira el reporte final semestral o anual de las estaciones de servicio.</p>

              <div class="row" id="" style="display: ;">
                <div class="col-lg-12">
                    <div class="form-group">
                      <div class="nk-int-st">
                        <label style="margin-right: 3%;" >Razón Social </label> <div class="chosen-select-act fm-cmp-mg">
                          <select class="chosen" name="" id="staRep">
                            <option value="0" style="display: none;">Selecciona la instalación</option>
                            <?php $qrepcesh = "SELECT razonSocial, idCESH FROM cesh ORDER BY razonSocial ASC";
                                  $resrpcesh = mysqli_query($con, $qrepcesh);
                                  while($row2 = $resrpcesh->fetch_object()){ ?>
                            <option value="<?php echo ($row2->idCESH); ?>"> <?php echo ($row2->razonSocial)." ".($row2->idCESH); ?> </option>
                            <?php } ?>
                          </select>
                          </div>    
                      </div>
                    </div>                  
                  </div>
                  <div class="col-lg-12">
                    <p>Selecciona la actividad a realizar: </p>
                  </div>
                  <div class="col-lg-6">
                    <button type="button" class="btn btn-warning" id="btnCrearReporte">Crear Reporte</button>
                  </div>
                  <div class="col-lg-6">
                    <button type="button" class="btn btn-warning" id="btnCargarReporte">Cargar Acuse</button>
                  </div>

              </div>

            </div>
            <div class="modal-footer">
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
            <div class="col-lg-2 col-md-1 col-sm-1" style=""> </div>

            <div class="col-lg-8 col-md-10 col-sm-10 col-xs-10" style="">
                <div class="tab-pane wizard-ctn" id="1pt" style="display:block;">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                      <img src="images/boton-estacion.png" style="position: relative; margin-left: ;" id="estacion" data-toggle="modal" data-target="#modalsta">
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="informe" data-toggle="modal" data-target="#modalinf">
                      <img src="images/boton-informe.png" style="width:; position: relative; margin-left: 5%;" alt>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="revadmin" data-toggle="modal" data-target="#modaldir">
                      <img src="images/boton-revision.png" style="width:; position: relative; margin-left: 5%;" alt>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sale Statistic area-->
    <!-- Start Email Statistic area-->
    <div class="notika-email-post-area" style="padding-top: 19.9%;">
        <div class="container">
            <div class="row">
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