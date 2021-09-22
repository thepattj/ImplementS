<?php
    include 'php/conex.php';
    $id = $_GET["x"];
    $con = Conectarse();
?>

<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Revisión de Resultados | ImplementS</title>
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
    <style type="text/css">
        .notika-status-area{
            font-family: 'Book Antiqua', 'Source Serif Variable';
        }

    </style>
</head>

<body id="" style="background-image:url('images/backgroundp.png'); background-repeat: no-repeat; background-position: center; background-size: cover;">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


    <!-- Start Header Top Area -->
    <div class="header-top-area" style="background: transparent; !important">
        <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12"><img src="images/Logo-esquina.png"></div>
        <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12" style="background:rgb(27,22,50);">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><h4 id="dataRS" style="color:white; background:rgb(102,103,102); border-radius: 35px; text-align: right;"> Nombre de Usuario </h4> </div> <!-- CAMBIAR A UN BUTTON -->
        </div>
              <!-- <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="background: while;"><img src="">A1</div> -->
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="background:rgb(102,103,102); border-bottom-right-radius: 50px;"><H1 id="usuario" style="color:white; "> Punto 17 </H1></div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><label></label></div>

        <div class="container">
            <div class="row">
                <!-- <div class=" col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="#"><img src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav"> -->
                            <!-- <li class="nav-item dropdown">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-search"></i></span></a>
                                <div role="menu" class="dropdown-menu search-dd animated flipInX">
                                    <div class="search-input">
                                        <i class="notika-icon notika-left-arrow"></i>
                                        <input type="text" />
                                    </div>
                                </div>
                            </li> -->
                            <!-- <li class="nav-item dropdown">
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
                            </li> -->
                           <!-- <li class="nav-item nc-al"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-alarm"></i></span> <div class="spinner4 spinner-4"></div><div class="ntd-ctn"><span>3</span></div> </a>
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
                            </li>-->
                            <!-- <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-menus"></i></span><div class="spinner4 spinner-4"></div><div class="ntd-ctn"><span>2</span></div></a>
                                <div role="menu" class="dropdown-menu message-dd task-dd animated zoomIn">
                                    <div class="hd-mg-tt">
                                        <h2>Tasks</h2>
                                    </div>
                                    <div class="hd-message-info hd-task-info">
                                        <div class="skill">
                                            <div class="progress">
                                                <div class="lead-content">
                                                    <p>HTML5 Validation Report</p>
                                                </div>
                                                <div class="progress-bar wow fadeInLeft" data-progress="95%" style="width: 95%;" data-wow-duration="1.5s" data-wow-delay="1.2s"> <span>95%</span>
                                                </div>
                                            </div>
                                            <div class="progress">
                                                <div class="lead-content">
                                                    <p>Google Chrome Extension</p>
                                                </div>
                                                <div class="progress-bar wow fadeInLeft" data-progress="85%" style="width: 85%;" data-wow-duration="1.5s" data-wow-delay="1.2s"><span>85%</span> </div>
                                            </div>
                                            <div class="progress">
                                                <div class="lead-content">
                                                    <p>Social Internet Projects</p>
                                                </div>
                                                <div class="progress-bar wow fadeInLeft" data-progress="75%" style="width: 75%;" data-wow-duration="1.5s" data-wow-delay="1.2s"><span>75%</span> </div>
                                            </div>
                                            <div class="progress">
                                                <div class="lead-content">
                                                    <p>Bootstrap Admin</p>
                                                </div>
                                                <div class="progress-bar wow fadeInLeft" data-progress="93%" style="width: 65%;" data-wow-duration="1.5s" data-wow-delay="1.2s"><span>65%</span> </div>
                                            </div>
                                            <div class="progress progress-bt">
                                                <div class="lead-content">
                                                    <p>Youtube App</p>
                                                </div>
                                                <div class="progress-bar wow fadeInLeft" data-progress="55%" style="width: 55%;" data-wow-duration="1.5s" data-wow-delay="1.2s"><span>55%</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hd-mg-va">
                                        <a href="#">View All</a>
                                    </div>
                                </div>
                            </li> -->
                            <!-- <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-chat"></i></span></a>
                                <div role="menu" class="dropdown-menu message-dd chat-dd animated zoomIn">
                                    <div class="hd-mg-tt">
                                        <h2>Chat</h2>
                                    </div>
                                    <div class="search-people">
                                        <i class="notika-icon notika-left-arrow"></i>
                                        <input type="text" placeholder="Search People" />
                                    </div>
                                    <div class="hd-message-info">
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img chat-img">
                                                    <img src="img/post/1.jpg" alt="" />
                                                    <div class="chat-avaible"><i class="notika-icon notika-dot"></i></div>
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>David Belle</h3>
                                                    <p>Available</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img chat-img">
                                                    <img src="img/post/2.jpg" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>Jonathan Morris</h3>
                                                    <p>Last seen 3 hours ago</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img chat-img">
                                                    <img src="img/post/4.jpg" alt="" />
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>Fredric Mitchell</h3>
                                                    <p>Last seen 2 minutes ago</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img chat-img">
                                                    <img src="img/post/1.jpg" alt="" />
                                                    <div class="chat-avaible"><i class="notika-icon notika-dot"></i></div>
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>David Belle</h3>
                                                    <p>Available</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img chat-img">
                                                    <img src="img/post/2.jpg" alt="" />
                                                    <div class="chat-avaible"><i class="notika-icon notika-dot"></i></div>
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>Glenn Jecobs</h3>
                                                    <p>Available</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="hd-mg-va">
                                        <a href="#">View All</a>
                                    </div>
                                </div>
                            </li> -->
                      <!--   </ul>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    <!--     <div class="mobile-menu-area">
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
    <!-- <div class="main-menu-area mg-tb-40">
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
    <!-- Main Menu area End-->
    <!-- Start Status area -->
    <div class="notika-status-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!--<div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Revisión de Resultados</h2>
                                        <p><span class="bread-ntd" id="datacre">No. E. S.</span> </p> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                            </div>
                        </div>
                    </div>-->

                    <!-- SE VAN AGREGAR ESTO  ESTACION,DIRECCION, REPRESENTANTE TEC. PERIODO, CARGO-->
                    <!-- ******************* REPORTE auditorías *********************** -->
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10 col-md-8 col-sm-8 col-xs-8" id="tabrevision">
                        <div class="form-element-list "style="border-radius: 35px;">
                            <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Revisión de Resultados</h2>
                                        <p><span class="bread-ntd" id="datacre">No. E. S.</span> </p>
                                    </div>
                                </div>
                            <div class="basic-tb-hd">
                                <!-- <h2>Revisión de desempeño</h2> -->
                                <p>En la siguiente tabla veras los estatus de tus avances por punto, al finalizar la tabla encontraras un espacio para que puedas anexar tus conclusiones de la evaluación que le das a tus cumplimientos.</p>
                            </div>
                                
                            <!-- TABLA DE ESTATUS -->
                            <div class="row" style="boder: black 1px solid">
                                <div class="" style="overflow: auto; width: 80%; height: 250px; margin-left: 10%;"> <!-- AQUI AGREGUE EL SCROLL -->
                                    <table class="table table-cl">
                                        <thead style="background: rgb(198,198,198);">
                                            <tr>
                                                <th>Punto</th>
                                                <th>Concepto</th>
                                                <th colspan="2">Estatus</th>
                                                <!-- <th></th> -->
                                                <!-- <th>No disponible</th> -->
                                                <th>Observación</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <!-- VALORES QUE SE TIENEN DE 1 -->
                                            <tr>
                                                <td style="border-right: rgb(198,198,198) 1px solid;">1.</td>
                                                <td style="border-right: rgb(198,198,198) 1px solid;">Política</td>
                                                <?php 
                                                $sql = "SELECT idCESH FROM politica WHERE idCESH = '".$id."' GROUP BY idCESH";
                                                $resultado = mysqli_query($con, $sql);
                                                if($resultado->num_rows > 0){ ?>
                                                    <td colspan="2" style="background: rgb(254,174,0); border-right: rgb(198,198,198) 1px solid;">Completo</td>    
                                                <?php } else {?>
                                                    <td colspan="2" style="background: rgb(27,22,50); border-right: rgb(198,198,198) 1px solid; color:white;">En tramite</td>
                                                <?php } ?>
                                                <td><input type="text" name=""></td>
                                            </tr>
                                            <!-- VALORES QUE DE 2-->
                                            <tr style="background: rgba(198,198,198,.4);">
                                                <td style="border-right: rgb(198,198,198) 1px solid;">2.</td>
                                                <td style="border-right: rgb(198,198,198) 1px solid;">Identificación de peligros y aspectos ambientales, Análisis de riesgo y evaluación de impactos ambientales</td>
                                                <?php
                                                $sql1 = "SELECT idCESH FROM ar WHERE idCESH = '".$id."' GROUP BY idCESH";
                                                $resultado1 = mysqli_query($con, $sql1);
                                                if($resultado1->num_rows > 0){ ?>
                                                    <td colspan="2" style="background: rgb(254,174,0); border-right: rgb(198,198,198) 1px solid;">Completo</td>    
                                                <?php } else { ?>
                                                    <td colspan="2" style="background: rgb(27,22,50); border-right: rgb(198,198,198) 1px solid; color:white;">En tramite</td>
                                                <?php } ?>
                                                <td><input type="text" name=""></td>
                                            </tr>
                                            <!-- VALORES DE 3 -->
                                            <tr>
                                                <td style="border-right: rgb(198,198,198) 1px solid;">3.</td>
                                                <td style="border-right: rgb(198,198,198) 1px solid;">Requisitos Legales</td>
                                                <?php
                                                $sql2 = "SELECT idCESH FROM documento WHERE idCESH = '".$id."' GROUP BY idCESH";
                                                $resultado2 = mysqli_query($con, $sql2);
                                                if($resultado2->num_rows > 0){ ?>
                                                    <td colspan="2" style="background: rgb(254,174,0); border-right: rgb(198,198,198) 1px solid;">Completo</td>    
                                                <?php } else {?>
                                                    <td colspan="2" style="background: rgb(27,22,50); border-right: rgb(198,198,198) 1px solid; color:white;">En tramite</td>
                                                <?php } ?>
                                                <td><input type="text" name=""></td>                                               
                                            </tr>
                                            <!-- VALORES DE 4 -->
                                            <tr style="background: rgba(198,198,198,.4);">
                                                <td style="border-right: rgb(198,198,198) 1px solid;">4.</td>
                                                <td style="border-right: rgb(198,198,198) 1px solid;">Objetivos, Metas e indicadores</td>
                                                <?php
                                                $sql3 = "SELECT idCESH FROM objetivo WHERE idCESH = '".$id."' GROUP BY idCESH";
                                                $resultado3 = mysqli_query($con, $sql3);
                                                if($resultado3->num_rows > 0){?>
                                                    <td colspan="2" style="background: rgb(254,174,0); border-right: rgb(198,198,198) 1px solid;">Completo</td>    
                                                <?php }else{ ?>
                                                    <td colspan="2" style="background: rgb(27,22,50); border-right: rgb(198,198,198) 1px solid; color:white;">En tramite</td>
                                                <?php } ?>
                                                <td><input type="text" name=""></td>
                                            </tr>
                                            <!-- VALORES DE 5 -->
                                            <tr>
                                                <td style="border-right: rgb(198,198,198) 1px solid;">5.</td>
                                                <td style="border-right: rgb(198,198,198) 1px solid;">Funciones, Responsabilidades y Autoridad</td>
                                                <?php
                                                $sql4 = "SELECT idCESH FROM organigrama WHERE idCESH = '".$id."' GROUP BY idCESH";
                                                $resultado4 = mysqli_query($con, $sql4);
                                                if($resultado4->num_rows > 0){ ?>
                                                    <td colspan="2" style="background: rgb(254,174,0); border-right: rgb(198,198,198) 1px solid;">Completo</td>
                                                <?php }else{ ?>
                                                    <td colspan="2" style="background: rgb(27,22,50); border-right: rgb(198,198,198) 1px solid; color:white;">En tramite</td>
                                                <?php } ?>
                                                <td><input type="text" name=""></td>
                                            </tr>
                                             <!-- VALORES DE 6 -->
                                            <tr style="background: rgba(198,198,198,.4);">
                                                <td style="border-right: rgb(198,198,198) 1px solid;">6. </td>
                                                <td style="border-right: rgb(198,198,198) 1px solid;">Competencia del personal, capacitación y entrenamiento</td>
                                                <?php
                                                $sql5 = "SELECT idCESH FROM curso WHERE idCESH = '".$id."' GROUP BY idCESH";
                                                $resultado5 = mysqli_query($con, $sql5);
                                                if($resultado5->num_rows > 0){ ?>
                                                    <td colspan="2" style="background: rgb(254,174,0); border-right: rgb(198,198,198) 1px solid;">Completo</td>
                                                <?php } else {?>
                                                    <td colspan="2" style="background: rgb(27,22,50); border-right: rgb(198,198,198) 1px solid; color:white;">En tramite</td>
                                                <?php } ?>
                                                <td><input type="text" name=""></td>
                                            </tr>
                                            <!-- VALORES DE 7 -->
                                            <tr>
                                                <td style="border-right: rgb(198,198,198) 1px solid;">7.</td>
                                                <td style="border-right: rgb(198,198,198) 1px solid;">Comunicación, Participación y Consulta</td>
                                                <?php
                                                $sql6 = "SELECT idCESH FROM sugque WHERE idCESH = '".$id."' GROUP BY idCESH";
                                                $resultado6 = mysqli_query($con, $sql6);
                                                if($resultado6->num_rows > 0){ ?>
                                                    <td colspan="2" style="background: rgb(254,174,0); border-right: rgb(198,198,198) 1px solid;">Completo</td>
                                                <?php }else{ ?>
                                                    <td colspan="2" style="background: rgb(27,22,50); border-right: rgb(198,198,198) 1px solid; color:white;">En tramite</td>
                                                <?php }?>
                                                <td><input type="text" name=""></td>
                                            </tr>
                                            <!-- VALORES DE 8 -->
                                            <tr style="background: rgba(198,198,198,.4);">
                                                <td style="border-right: rgb(198,198,198) 1px solid;">8.</td>
                                                <td style="border-right: rgb(198,198,198) 1px solid;">Control de documentos y registros</td>
                                                <?php
                                                $sql7 = "SELECT idCESH FROM control WHERE idCESH = '".$id."' GROUP BY idCESH";
                                                $resultado7 = mysqli_query($con, $sql7);
                                                if($resultado7->num_rows > 0){ ?>
                                                    <td colspan="2" style="background: rgb(254,174,0); border-right: rgb(198,198,198) 1px solid;">Completo</td>
                                                <?php }else{ ?>
                                                    <td colspan="2" style="background: rgb(27,22,50); border-right: rgb(198,198,198) 1px solid; color:white;">En tramite</td>
                                                <?php } ?>
                                                <td><input type="text" name=""></td>
                                            </tr>
                                            <!-- VALORES DE 9 -->
                                            <tr>
                                                <td style="border-right: rgb(198,198,198) 1px solid;">9.</td>
                                                <td style="border-right: rgb(198,198,198) 1px solid;">Mejores prácticas y estándares</td>
                                                <?php
                                                $sql8 = "SELECT idCESH FROM rbpo WHERE idCESH = '".$id."' GROUP BY idCESH";
                                                $sql08 = "SELECT idCESH FROM controlrbpo WHERE idCESH = '".$id."' GROUP BY idCESH";
                                                $resultado8 = mysqli_query($con, $sql8);
                                                $resultado9 = mysqli_query($con, $sql08);
                                                if($resultado8->num_rows > 0) { ?>
                                                    <td colspan="2" style="background: rgb(254,174,0); border-right: rgb(198,198,198) 1px solid;">Completo</td>
                                                <?php }else{ ?>
                                                    <td colspan="2" style="background: rgb(27,22,50); border-right: rgb(198,198,198) 1px solid; color:white;">En tramite</td>
                                                <?php }
                                                //if($resultado9->num_rows > 0){} ?>
                                                <td><input type="text" name=""></td>
                                            </tr>
                                            <!-- VALORES DE 10 -->
                                            <tr style="background: rgba(198,198,198,.4);">
                                                <td style="border-right: rgb(198,198,198) 1px solid;">10.</td>
                                                <td style="border-right: rgb(198,198,198) 1px solid;">Control de actividades y procesos</td>
                                                <?php
                                                $sql9 = "SELECT idCESH FROM dzbitacora WHERE idCESH = '".$id."' GROUP BY idCESH";
                                                $sql10 = "SELECT idCESH FROM dzcambiop WHERE idCESH = '".$id."' GROUP BY idCESH";
                                                $sql11 = "SELECT idCESH FROM dzcambiot WHERE idCESH = '".$id."' GROUP BY idCESH";
                                                $sql12 = "SELECT idCESH FROM dzordentr WHERE idCESH = '".$id."' GROUP BY idCESH";

                                                $resultado10 = mysqli_query($con, $sql9);
                                                $resultado010 = mysqli_query($con, $sql10);
                                                $resultado11 = mysqli_query($con, $sql11);
                                                $resultado011 = mysqli_query($con, $sql12);
                                                if($resultado10->num_rows > 0) { ?>
                                                    <td colspan="2" style="background: rgb(254,174,0); border-right: rgb(198,198,198) 1px solid;">Completo</td>
                                                <?php }else{ ?>
                                                    <td colspan="2" style="background: rgb(27,22,50); border-right: rgb(198,198,198) 1px solid; color:white;">En tramite</td>
                                                <?php } 
                                                /*if($resultado010->num_rows > 0){}
                                                if($resultado11->num_rows > 0){}
                                                if($resultado011->num_rows > 0){}*/?>
                                                <td><input type="text" name=""></td>
                                            </tr>
                                            <!-- VALORES DE  11-->
                                            <tr>
                                                <td style="border-right: rgb(198,198,198) 1px solid;">11.</td>
                                                <td style="border-right: rgb(198,198,198) 1px solid;">Integridad mécanica y aseguramiento de la calidad</td>
                                                <?php
                                                $sql13 = "SELECT idCESH FROM bitacoras WHERE idCESH = '".$id."' GROUP BY idCESH";
                                                $resultado12 = mysqli_query($con, $sql13);
                                                if($resultado12->num_rows > 0){ ?>
                                                    <td colspan="2" style="background: rgb(254,174,0); border-right: rgb(198,198,198) 1px solid;">Completo</td>
                                                <?php }else{ ?>
                                                    <td colspan="2" style="background: rgb(27,22,50); border-right: rgb(198,198,198) 1px solid; color:white;">En tramite</td>
                                                <?php } ?>
                                                <td><input type="text" name=""></td>
                                            </tr>
                                            <!-- VALOR DE 12 -->
                                            <tr style="background: rgba(198,198,198,.4);">
                                                <td style="border-right: rgb(198,198,198) 1px solid;">12.</td>
                                                <td style="border-right: rgb(198,198,198) 1px solid;"> Seguridad de contratistas</td>
                                                <?php
                                                $sql14 = "SELECT idCESH FROM dcproveedor WHERE idCESH = '".$id."' GROUP BY idCESH";
                                                $sql15 = "SELECT idCESH FROM dctraex WHERE idCESH = '".$id."' GROUP BY idCESH";

                                                $resultado012 = mysqli_query($con, $sql14);
                                                $resultado13 = mysqli_query($con, $sql15);
                                                if($resultado012->num_rows > 0){ ?>
                                                    <td colspan="2" style="background: rgb(254,174,0); border-right: rgb(198,198,198) 1px solid;">Completo</td>
                                                <?php }else{ ?>
                                                    <td colspan="2" style="background: rgb(27,22,50); border-right: rgb(198,198,198) 1px solid; color:white;">En tramite</td>
                                                <?php }
                                                /*if($resultado13->num_rows > 0){}*/ ?>
                                                <td><input type="text" name=""></td>
                                            </tr>
                                            <!-- VALORES DE 13 -->
                                            <tr>
                                                <td style="border-right: rgb(198,198,198) 1px solid;">13.</td>
                                                <td style="border-right: rgb(198,198,198) 1px solid;">Protocolo de respuesta a Emergencias / Preparación y respuesta a Emergencias </td>
                                                <?php
                                                $sql16 = "SELECT idCESH FROM pre WHERE idCESH = '".$id."' GROUP BY idCESH";
                                                $resultado014 = mysqli_query($con, $sql16);
                                                if($resultado014->num_rows > 0){ ?>
                                                    <td colspan="2" style="background: rgb(254,174,0); border-right: rgb(198,198,198) 1px solid;">Completo</td>
                                                <?php }else{ ?>
                                                    <td colspan="2" style="background: rgb(27,22,50); border-right: rgb(198,198,198) 1px solid; color:white;">En tramite</td>
                                                <?php } ?>
                                                <td><input type="text" name=""></td>
                                            </tr>
                                            <!-- VALORES DE 14 -->
                                            <tr style="background: rgba(198,198,198,.4);">
                                                <td style="border-right: rgb(198,198,198) 1px solid;">14.</td>
                                                <td style="border-right: rgb(198,198,198) 1px solid;">Monitoreo, Verificación y Evaluación</td>
                                                <?php
                                                $sql17 = "SELECT idCESH FROM monverif WHERE idCESH = '".$id."' GROUP BY idCESH";
                                                $resultado15 = mysqli_query($con, $sql17);
                                                if($resultado15->num_rows > 0){ ?>
                                                    <td colspan="2" style="background: rgb(254,174,0); border-right: rgb(198,198,198) 1px solid;">Completo</td>
                                                <?php }else{ ?>
                                                    <td colspan="2" style="background: rgb(27,22,50); border-right: rgb(198,198,198) 1px solid; color:white;">En tramite</td>
                                                <?php } ?>
                                                <td><input type="text" name=""></td>
                                            </tr>
                                            <!-- VALORES DE 15 -->
                                            <tr>
                                                <td style="border-right: rgb(198,198,198) 1px solid;">15.</td>
                                                <td style="border-right: rgb(198,198,198) 1px solid;">Auditorías</td>
                                                <?php
                                                $sql18 = "SELECT idCESH FROM reportea WHERE idCESH = '".$id."' GROUP BY idCESH";
                                                $resultado015 = mysqli_query($con, $sql18);
                                                if($resultado015->num_rows > 0){ ?>
                                                    <td colspan="2" style="background: rgb(254,174,0); border-right: rgb(198,198,198) 1px solid;">Completo</td>
                                                <?php }else{ ?>
                                                    <td colspan="2" style="background: rgb(27,22,50); border-right: rgb(198,198,198) 1px solid; color:white;">En tramite</td>
                                                <?php } ?>
                                                <td><input type="text" name=""></td>
                                            </tr>
                                             <!-- DATOS DE TANQUE DE ALMACENAMIENTO -->
                                            <tr style="background: rgba(198,198,198,.4);">
                                                <td style="border-right: rgb(198,198,198) 1px solid;">16.</td>
                                                <td style="border-right: rgb(198,198,198) 1px solid;">Investigación de incidentes y accidentes</td>
                                                <?php
                                                $sql19 ="SELECT idCESH FROM incidentes WHERE idCESH = '".$id."' GROUP BY idCESH";
                                                $resultado16 = mysqli_query($con, $sql19);
                                                if($resultado16->num_rows > 0){ ?>
                                                    <td colspan="2" style="background: rgb(254,174,0); border-right: rgb(198,198,198) 1px solid;">Completo</td>
                                                <?php }else{ ?>
                                                    <td colspan="2" style="background: rgb(27,22,50); border-right: rgb(198,198,198) 1px solid; color:white;">En tramite</td>
                                                <?php } ?>
                                                <td><input type="text" name=""></td>
                                            </tr>
                                             <!-- DATOS DE DISPENSARIOS -->
                                            <tr>
                                                <td style="border-right: rgb(198,198,198) 1px solid;">17.</td>
                                                <td style="border-right: rgb(198,198,198) 1px solid;">Revisión de resultados</td>
                                                <?php
                                                $s="";
                                                $r="";
                                                /*if(){*/ ?>
                                                    <td colspan="2" style="background: rgb(254,174,0); border-right: rgb(198,198,198) 1px solid;">Completo</td>
                                                <?php /*}else{*/ ?>
                                                    <!-- <td colspan="2" style="background: rgb(27,22,50); border-right: rgb(198,198,198) 1px solid; color:white;">En tramite</td> -->
                                                <?php /*}*/ ?>
                                                <td><input type="text" name=""></td>
                                            </tr>
                                            <!-- DATOS DE CONTROL DE INVENTARIOS -->
                                            <tr style="background: rgba(198,198,198,.4);">
                                                <td style="border-right: rgb(198,198,198) 1px solid;">18.</td>
                                                <td style="border-right: rgb(198,198,198) 1px solid;">Informes de desempeño</td>
                                                <?php
                                                $s="";
                                                $r="";
                                                /*if(){*/ ?>
                                                    <!-- <td colspan="2" style="background: rgb(254,174,0); border-right: rgb(198,198,198) 1px solid;">Completo</td> -->
                                                     <td colspan="2" style="background: rgb(27,22,50); border-right: rgb(198,198,198) 1px solid; color:white;">En tramite</td>
                                                <?php /*}else{*/ ?>
                                                    <!-- <td colspan="2" style="background: rgb(27,22,50); border-right: rgb(198,198,198) 1px solid; color:white;">En tramite</td> -->
                                                <?php /*}*/ ?>
                                                <td><input type="text" name=""></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1"></div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Status area-->

    <!-- End Sale Statistic area-->
    <!-- Start Email Statistic area-->
    <!-- <div class="notika-email-post-area">
        <div class="container">
            <div class="row">
                <div class=" col-md-6 col-sm-6 col-xs-12">
                    <div class="email-statis-inner notika-shadow">
                        <div class="email-ctn-round">
                            <div class="email-rdn-hd">
                                    <h2>Email Statistics</h2>
                                </div>
                            <div class="email-statis-wrap">
                                <div class="email-round-nock">
                                    <input type="text" class="knob" value="0" data-rel="55" data-linecap="round" data-width="130" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true">
                                </div>
                                <div class="email-ctn-nock">
                                    <p>Total Emails Sent</p>
                                </div>
                            </div>
                            <div class="email-round-gp">
                                <div class="email-round-pro">
                                    <div class="email-signle-gp">
                                        <input type="text" class="knob" value="0" data-rel="75" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled>
                                    </div>
                                    <div class="email-ctn-nock">
                                        <p>Bounce Rate</p>
                                    </div>
                                </div>
                                <div class="email-round-pro">
                                    <div class="email-signle-gp">
                                        <input type="text" class="knob" value="0" data-rel="35" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled>
                                    </div>
                                    <div class="email-ctn-nock">
                                        <p>Total Opened</p>
                                    </div>
                                </div>
                                <div class="email-round-pro sm-res-ds-n lg-res-mg-bl">
                                    <div class="email-signle-gp">
                                        <input type="text" class="knob" value="0" data-rel="45" data-linecap="round" data-width="90" data-bgcolor="#E4E4E4" data-fgcolor="#00c292" data-thickness=".10" data-readonly="true" disabled>
                                    </div>
                                    <div class="email-ctn-nock">
                                        <p>Total Ignored</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-md-6 col-sm-6 col-xs-12">
                    <div class="recent-post-wrapper notika-shadow sm-res-mg-t-30 tb-res-ds-n dk-res-ds">
                        <div class="recent-post-ctn">
                            <div class="recent-post-title">
                                <h2>Recent Posts</h2>
                            </div>
                        </div>
                        <div class="recent-post-items">
                            <div class="recent-post-signle rct-pt-mg-wp">
                                <a href="#">
                                    <div class="recent-post-flex">
                                        <div class="recent-post-img">
                                            <img src="img/post/2.jpg" alt="" />
                                        </div>
                                        <div class="recent-post-it-ctn">
                                            <h2>Smith</h2>
                                            <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="recent-post-signle">
                                <a href="#">
                                    <div class="recent-post-flex rct-pt-mg">
                                        <div class="recent-post-img">
                                            <img src="img/post/1.jpg" alt="" />
                                        </div>
                                        <div class="recent-post-it-ctn">
                                            <h2>John Deo</h2>
                                            <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="recent-post-signle">
                                <a href="#">
                                    <div class="recent-post-flex rct-pt-mg">
                                        <div class="recent-post-img">
                                            <img src="img/post/4.jpg" alt="" />
                                        </div>
                                        <div class="recent-post-it-ctn">
                                            <h2>Malika</h2>
                                            <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="recent-post-signle">
                                <a href="#">
                                    <div class="recent-post-flex rct-pt-mg">
                                        <div class="recent-post-img">
                                            <img src="img/post/2.jpg" alt="" />
                                        </div>
                                        <div class="recent-post-it-ctn">
                                            <h2>Smith</h2>
                                            <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="recent-post-signle">
                                <a href="#">
                                    <div class="recent-post-flex rct-pt-mg">
                                        <div class="recent-post-img">
                                            <img src="img/post/1.jpg" alt="" />
                                        </div>
                                        <div class="recent-post-it-ctn">
                                            <h2>John Deo</h2>
                                            <p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="recent-post-signle">
                                <a href="#">
                                    <div class="recent-post-flex rc-ps-vw">
                                        <div class="recent-post-line rct-pt-mg">
                                            <p>View All</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-md-6 col-sm-6 col-xs-12">
                    <div class="recent-items-wp notika-shadow sm-res-mg-t-30">
                        <div class="rc-it-ltd">
                            <div class="recent-items-ctn">
                                <div class="recent-items-title">
                                    <h2>Recent Items</h2>
                                </div>
                            </div>
                            <div class="recent-items-inn">
                                <table class="table table-inner table-vmiddle">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th style="width: 60px">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="f-500 c-cyan">4555</td>
                                            <td>Samsung Galaxy Mega</td>
                                            <td class="f-500 c-cyan">$921</td>
                                        </tr>
                                        <tr>
                                            <td class="f-500 c-cyan">4556</td>
                                            <td>Huawei Ascend P6</td>
                                            <td class="f-500 c-cyan">$240</td>
                                        </tr>
                                        <tr>
                                            <td class="f-500 c-cyan">8778</td>
                                            <td>HTC One M8</td>
                                            <td class="f-500 c-cyan">$400</td>
                                        </tr>
                                        <tr>
                                            <td class="f-500 c-cyan">5667</td>
                                            <td>Samsung Galaxy Alpha</td>
                                            <td class="f-500 c-cyan">$870</td>
                                        </tr>
                                        <tr>
                                            <td class="f-500 c-cyan">7886</td>
                                            <td>LG G3</td>
                                            <td class="f-500 c-cyan">$790</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                                <div id="recent-items-chart" class="flot-chart-items flot-chart vt-ct-it tb-rc-it-res"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    End Email Statistic area
    Start Realtime sts area
    <div class="realtime-statistic-area">
        <div class="container">
            <div class="row">
                <div class=" col-md-6 col-sm-6 col-xs-12">
                    <div class="realtime-wrap notika-shadow mg-t-30">
                        <div class="realtime-ctn">
                            <div class="realtime-title">
                                <h2>Realtime Visitors</h2>
                            </div>
                        </div>
                        <div class="realtime-visitor-ctn">
                            <div class="realtime-vst-sg">
                                <h4><span class="counter">4,35,456</span></h4>
                                <p>Visitors last 24h</p>
                            </div>
                            <div class="realtime-vst-sg">
                                <h4><span class="counter">4,566</span></h4>
                                <p>Visitors last 30m</p>
                            </div>
                        </div>
                        <div class="realtime-map">
                            <div class="vectorjsmarp" id="world-map"></div>
                        </div>
                        <div class="realtime-country-ctn realtime-ltd-mg">
                            <h5>September 4, 21:44:02 (2 Mins 56 Seconds)</h5>
                            <div class="realtime-ctn-bw">
                                <div class="realtime-ctn-st">
                                    <span><img src="img/country/1.png" alt="" /></span> <span>United States</span>
                                </div>
                                <div class="realtime-bw">
                                    <span>Firefox</span>
                                </div>
                                <div class="realtime-bw">
                                    <span>Mac OSX</span>
                                </div>
                            </div>
                        </div>
                        <div class="realtime-country-ctn">
                            <h5>September 7, 20:44:02 (5 Mins 56 Seconds)</h5>
                            <div class="realtime-ctn-bw">
                                <div class="realtime-ctn-st">
                                    <span><img src="img/country/2.png" alt="" /></span> <span>Australia</span>
                                </div>
                                <div class="realtime-bw">
                                    <span>Firefox</span>
                                </div>
                                <div class="realtime-bw">
                                    <span>Mac OSX</span>
                                </div>
                            </div>
                        </div>
                        <div class="realtime-country-ctn">
                            <h5>September 9, 19:44:02 (10 Mins 56 Seconds)</h5>
                            <div class="realtime-ctn-bw">
                                <div class="realtime-ctn-st">
                                    <span><img src="img/country/3.png" alt="" /></span> <span>Brazil</span>
                                </div>
                                <div class="realtime-bw">
                                    <span>Firefox</span>
                                </div>
                                <div class="realtime-bw">
                                    <span>Mac OSX</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-md-6 col-sm-6 col-xs-12">
                    <div class="add-todo-list notika-shadow mg-t-30">
                        <div class="realtime-ctn">
                            <div class="realtime-title">
                                <h2>Add Todo</h2>
                            </div>
                        </div>
                        <div class="card-box">
                            <div class="todoapp">
                                <div class="row">
                                    <div class="col-sm-6 col-md-6 col-sm-6 col-xs-12">
                                        <h4 id="todo-message"><span id="todo-remaining"></span> of <span id="todo-total"></span> remaining</h4>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="notika-todo-btn">
                                            <a href="#" class="pull-right btn btn-primary btn-sm" id="btn-archive">Archive</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="notika-todo-scrollbar">
                                    <ul class="list-group no-margn todo-list" id="todo-list"></ul>
                                </div>
                                <div id="todo-form">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-sm-12 col-xs-12 todo-inputbar">
                                            <div class="form-group nk-int-st todo-flex">
                                                <div class="nk-int-st">
                                                    <input type="text" id="todo-input-text" name="todo-input-text" class="form-control" placeholder="Add new todo">
                                                </div>
                                                <div class="todo-send">
                                                    <button class="btn-primary btn-md btn-block btn notika-add-todo" type="button" id="todo-btn-submit">Add</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-md-6 col-sm-6 col-xs-12">
                    <div class="notika-chat-list notika-shadow mg-t-30 tb-res-ds-n dk-res-ds">
                        <div class="realtime-ctn">
                            <div class="realtime-title">
                                <h2>Chat Box</h2>
                            </div>
                        </div>
                        <div class="card-box">
                            <div class="chat-conversation">
                                <div class="widgets-chat-scrollbar">
                                    <ul class="conversation-list">
                                        <li class="clearfix">
                                            <div class="chat-avatar">
                                                <img src="img/post/1.jpg" alt="male">
                                                <i>10:00</i>
                                            </div>
                                            <div class="conversation-text">
                                                <div class="ctext-wrap">
                                                    <i>John Deo</i>
                                                    <p>
                                                        Hello!
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="clearfix odd">
                                            <div class="chat-avatar">
                                                <img src="img/post/2.jpg" alt="Female">
                                                <i>10:01</i>
                                            </div>
                                            <div class="conversation-text">
                                                <div class="ctext-wrap chat-widgets-cn">
                                                    <i>Smith</i>
                                                    <p>
                                                        Hi, How are you? What about our next meeting?
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <div class="chat-avatar">
                                                <img src="img/post/1.jpg" alt="male">
                                                <i>10:01</i>
                                            </div>
                                            <div class="conversation-text">
                                                <div class="ctext-wrap">
                                                    <i>John Deo</i>
                                                    <p>
                                                        Yeah everything is fine
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="clearfix odd">
                                            <div class="chat-avatar">
                                                <img src="img/post/2.jpg" alt="male">
                                                <i>10:02</i>
                                            </div>
                                            <div class="conversation-text">
                                                <div class="ctext-wrap chat-widgets-cn">
                                                    <i>Smith</i>
                                                    <p>
                                                        Wow that's great
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <div class="chat-avatar">
                                                <img src="img/post/1.jpg" alt="male">
                                                <i>10:01</i>
                                            </div>
                                            <div class="conversation-text">
                                                <div class="ctext-wrap">
                                                    <i>John Deo</i>
                                                    <p>
                                                        Doing Better i am thinking about that..
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="clearfix odd">
                                            <div class="chat-avatar">
                                                <img src="img/post/2.jpg" alt="male">
                                                <i>10:02</i>
                                            </div>
                                            <div class="conversation-text">
                                                <div class="ctext-wrap chat-widgets-cn">
                                                    <i>Smith</i>
                                                    <p>
                                                        Wow, You also tallent man...
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="chat-widget-input">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-sm-12 col-xs-12 chat-inputbar">
                                            <div class="form-group nk-int-st todo-flex">
                                                <div class="nk-int-st">
                                                    <input type="text" class="form-control chat-input" placeholder="Enter your text">
                                                </div>
                                                <div class="chat-send">
                                                    <button type="submit" class="btn btn-md btn-primary btn-block notika-chat-btn">Send</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Realtime sts area-->
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
    <!--  wizard JS
        ============================================ -->
    <script src="js/wizard/jquery.bootstrap.wizard.min.js"></script>
    <script src="js/wizard/wizard-active.js"></script>
    <!--  todo JS
        ============================================ -->
    <script src="js/todo/jquery.todo.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
        ============================================ -->
    <!-- <script src="js/tawk-chat.js"></script> -->


    <script type="text/javascript" src="js/funciones.js"></script>
    <script type="text/javascript" src="js/onload.js"></script>

    <script src="js/vendor/jquery.min.js"></script>
</body>

</html>