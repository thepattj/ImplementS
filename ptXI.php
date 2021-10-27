<?php
    include 'php/conex.php';
    $con = Conectarse();

    $id = $_GET["x"];
?>

<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Integridad mécanica y Aseguramiento de la calidad| ImplementS</title>
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
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="background:rgb(102,103,102); border-bottom-right-radius: 50px;"><H1 id="usuario" style="color:white; "> Punto 11 </H1></div>
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
    </div> -->
    <!-- Main Menu area End-->
    <!-- Start Status area -->
    <div class="notika-status-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Integridad Mecánica y Aseguramiento de la calidad</h2>
                                        <p><span class="bread-ntd" id="datacre">  </span> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                <div class="breadcomb-report">
                                   <button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button>
                               </div>
                            </div>
                        </div>
                    </div> -->

                    <div class="col-lg-1"></div>
                    <div class="col-lg-10 col-md-8 col-sm-8 col-xs-8" id="bit" style="">
                        <div class="form-element-list">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-icon">
                                    <i class="notika-icon notika-edit"></i>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>Integridad Mecánica y Aseguramiento de la calidad</h2>
                                    <p><span class="bread-ntd" id="datacre">  </span> </p>
                                </div>
                            </div>
                            <div class="basic-tb-hd">
                                <h2></h2>
                                <p>Completar el siguiente formulario, anexando las fechas de las bitácoras que ya se han implementado y subirlo en PDF en los campos señalados.</p>
                            </div>
                            <div class="row" style="border: black 1px solid; display:; overflow: auto; width: 90%; height: 290px; margin-left: 5%;" id="">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="fm-checkbox">
                                        <h4>Monitoreo y observación (11 BT 01)</h4>
                                        <p style="font-size: .8em;">(Se subiran Mensualmente .pdf)</p>
                                    </div>
                                </div>
                                <form name="frm11bt01" id="frm11bt01" enctype="multipart/form-data" method="post">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                        <div class="fm-checkbox">
                                            <label>
                                                <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                                                    <div class="input-group date nk-int-st">
                                                        <span class="input-group-addon"></span>
                                                        <input type="text" class="form-control" name="date11bt01" id="date11bt01" value="03/19/2018">
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                        <div class="form-group nk-int-st "> <input type="file" class="form-control" placeholder="col-lg-4" id="archivo11bt1" name="archivo11bt1"> </div>
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"> <!-- NO SE VE -->
                                        <div class="form-group nk-int-st"> <input style="display:none;" type="input" class="form-control" placeholder="" id="id11bt01" name="id11bt01"> </div>
                                    </div> 
                                </form>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <button type="button" class="btn btn-warning" id="btnGuardar11bt01">Guardar</button>
                                </div>
                                <?php
                                    $sqlmon = "SELECT count(descripcion) AS cuenta FROM bitacoras WHERE idCESH = '".$id."' AND descripcion = 'bt-01' ORDER BY idBit DESC LIMIT 1";
                                        $resulmon = mysqli_query($con, $sqlmon);
                                        if($resulmon->num_rows > 0){
                                            while($arrmon = $resulmon->fetch_assoc()){
                                                $monitoreoC = $arrmon['cuenta'];
                                            }
                                        }else { $monitoreoC = "No existe carga"; }

                                    $sqlmonf = "SELECT fechaI FROM bitacoras WHERE idCESH = '".$id."' AND descripcion = 'bt-01' ORDER BY fechaI DESC LIMIT 1";
                                        $resulmonf = mysqli_query($con, $sqlmonf);
                                        if($resulmonf->num_rows > 0){
                                            while($arrmonf = $resulmonf->fetch_assoc()){
                                                $monitoreoF = $arrmonf['fechaI'];
                                            }
                                        }else { $monitoreoF = "No existe carga"; }  
                                ?>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="col-lg-4"><p style="font-size: .8em;"><i>Cantidad de archivos cargados: </i> <?php echo $monitoreoC; ?></p></div>
                                    <div class="col-lg-6"><p style="font-size: .8em;"><i>Fecha de ultimo archivo cargado: </i> <?php echo $monitoreoF; ?> </p></div>
                                    <div class="col-lg-2"></div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div> <!-- TERMINA CARGA DE PRIMER BITACORA -->

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> <!-- INICIO DE SEGUNDA BITACORA -->
                                    <div class="fm-checkbox">
                                        <h4>Limpiezas y/o Mantemienito Preventico y Correctivo (Limpieza General - Diario - 11 BT 02)</h4>
                                        <p style="font-size: .8em;">(Se subiran Mensualmente, todas las bitacoras en un mismo .pdf)</p>
                                    </div>
                                </div>
                                
                                <form name="frm11bt02" id="frm11bt02" enctype="multipart/form-data" method="post">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                        <div class="fm-checkbox">
                                            <label>
                                                <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                                                    <div class="input-group date nk-int-st">
                                                        <span class="input-group-addon"></span>
                                                        <input type="text" class="form-control" name="date11bt02" id="date11bt02" value="03/19/2018">
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>    
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                        <div class="form-group nk-int-st"> <input type="file" class="form-control" placeholder="col-lg-4" id="archivo11bt2" name="archivo11bt2"> </div>
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                        <div class="form-group nk-int-st"> <input style="display:none;" type="input" class="form-control" placeholder="" id="id11bt02" name="id11bt02"> </div>
                                    </div>
                                </form>
                                <?php
                                    $sqllimpieza = "SELECT count(descripcion) AS cuenta FROM bitacoras WHERE idCESH = '".$id."' AND descripcion = 'bt-02 Diario' ORDER BY idBit DESC LIMIT 1";
                                    $resulimpieza = mysqli_query($con, $sqllimpieza);
                                    if($resulimpieza->num_rows > 0){
                                        while($arrlimp = $resulimpieza->fetch_assoc()){
                                            $limpiezaC = $arrlimp['cuenta'];
                                        }
                                    }else { $limpiezaC = "No existe carga"; }

                                    $sqllimpF = "SELECT fechaI FROM bitacoras WHERE idCESH = '".$id."' AND descripcion = 'bt-02 Diario' ORDER BY fechaI DESC LIMIT 1";
                                    $reslimpF = mysqli_query($con, $sqllimpF);
                                    if($reslimpF->num_rows > 0){
                                        while($arrlimF = $reslimpF->fetch_assoc()){
                                            $limpiezaF = $arrlimF['fechaI'];
                                        }
                                    }else { $limpiezaF = "No existe carga"; }
                                ?>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <button type="button" class="btn btn-warning" id="btnGuardar11bt02">Guardar</button>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="col-lg-4"><p style="font-size: .8em;"><i>Cantidad de archivos cargados: </i> <?php echo $limpiezaC; ?></p></div>
                                    <div class="col-lg-6"><p style="font-size: .8em;"><i>Fecha de ultimo archivo cargado: </i> <?php echo $limpiezaF; ?> </p></div>
                                    <div class="col-lg-2"></div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div><!-- TERMINA CARGA DE SEGUNDA BITACORA -->

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><!-- INICIO DE TERCERA BITACORA -->
                                    <div class="fm-checkbox">
                                        <h4> Limpiezas y/o Mantemiento Preventivio y Correctivo Mensual (11 BT 02)</h4>
                                        <p style="font-size: .8em;">(Se subiran Mensualmente las bitacoras - .pdf)</p>
                                    </div>
                                </div>
                                
                                <form name="frm11bt02m" id="frm11bt02m" enctype="multipart/form-data" method="post">
                                    <!-- <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"><b>Fecha</b></div> -->
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                        <div class="fm-checkbox">
                                            <label>
                                                <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                                                    <div class="input-group date nk-int-st">
                                                        <span class="input-group-addon"></span>
                                                        <input type="text" class="form-control" name="date11bt02m" id="date11bt02m" value="03/19/2018">
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div> -->

                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                        <div class="form-group nk-int-st"> <input type="file" class="form-control" placeholder="col-lg-4" id="archivo11bt2m" name="archivo11bt2m"> </div>
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                        <div class="form-group nk-int-st"> <input style="display:none;" type="input" class="form-control" placeholder="" id="id11bt02m" name="id11bt02m"> </div>
                                    </div>
                                </form>
                                <?php
                                    $sqlimpm = "SELECT count(descripcion) AS cuenta FROM bitacoras WHERE idCESH = '".$id."' AND descripcion = 'bt-02 Mensual' ORDER BY idBit DESC LIMIT 1";
                                    $resulimpm = mysqli_query($con, $sqlimpm);
                                    if($resulimpm->num_rows > 0){
                                        while($arrlimpm = $resulimpm->fetch_assoc()){
                                            $limpiezamC = $arrlimpm['cuenta'];
                                        }
                                    }else { $limpiezamC = "No existe carga"; }

                                    $sqlimpmF = "SELECT fechaI FROM bitacoras WHERE idCESH = '".$id."' AND descripcion = 'bt-02 Mensual' ORDER BY fechaI DESC LIMIT 1";
                                    $reslimpmF = mysqli_query($con, $sqlimpmF);
                                    if($reslimpmF->num_rows > 0){
                                        while($arrlimpmF = $reslimpmF->fetch_assoc()){
                                            $limpiezamF = $arrlimpmF['fechaI'];
                                        }
                                    }else { $limpiezamF = "No existe carga"; }
                                ?>

                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <button type="button" class="btn btn-warning" id="btnGuardar02m">Guardar</button>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="col-lg-4"><p style="font-size: .8em;"><i>Cantidad de archivos cargados: </i> <?php echo $limpiezamC; ?></p></div>
                                    <div class="col-lg-6"><p style="font-size: .8em;"><i>Fecha de ultimo archivo cargado: </i> <?php echo $limpiezamF; ?> </p></div>
                                    <div class="col-lg-2"></div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div> <!-- TERMINA CARGA DE TERCERA BITACORA -->

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> <!-- INICIA CARGA DE CUARTA BITACORA -->
                                    <div class="fm-checkbox">
                                        <h4>Mantemiento Preventivio y Correctivo Trimestral (Limpieza Ecologica - 11 BT 02)</h4>
                                        <p style="font-size: .8em;">(Se subiran Trismestralmente las bitacoras - .pdf)</p>
                                    </div>
                                </div>
                                <form name="frm11bt02t" id="frm11bt02t" enctype="multipart/form-data" method="post">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                        <div class="fm-checkbox">
                                            <label>
                                                <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                                                    <div class="input-group date nk-int-st">
                                                        <span class="input-group-addon"></span>
                                                        <input type="text" class="form-control" name="date11bt02t" id="date11bt02t" value="03/19/2018">
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                        <div class="form-group nk-int-st"> <input type="file" class="form-control" placeholder="col-lg-4" id="archivo11bt2t" name="archivo11bt2t"> </div>
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                        <div class="form-group nk-int-st"> <input style="display:none;" type="input" class="form-control" placeholder="" id="id11bt02t" name="id11bt02t"> </div>
                                    </div>
                                </form>
                                <?php
                                    $sqlimpt = "SELECT count(descripcion) AS cuenta FROM bitacoras WHERE idCESH = '".$id."' AND descripcion = 'bt-02 Trimestral' ORDER BY idBit DESC LIMIT 1";
                                    $resulimpt = mysqli_query($con, $sqlimpt);
                                    if($resulimpt->num_rows > 0){
                                        while($arrlimpt = $resulimpt->fetch_assoc()){
                                            $limpiezatC = $arrlimpt['cuenta'];
                                        }
                                    }else { $limpiezatC = "No existe carga"; }

                                    $sqlimptF = "SELECT fechaI FROM bitacoras WHERE idCESH = '".$id."' AND descripcion = 'bt-02 Trimestral' ORDER BY fechaI DESC LIMIT 1";
                                    $reslimptF = mysqli_query($con, $sqlimptF);
                                    if($reslimptF->num_rows > 0){
                                        while($arrlimptF = $reslimptF->fetch_assoc()){
                                            $limpiezatF = $arrlimptF['fechaI'];
                                        }
                                    }else { $limpiezatF = "No existe carga"; }
                                ?>

                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <button type="button" class="btn btn-warning" id="btnGuardar03t">Guardar</button>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="col-lg-4"><p style="font-size: .8em;"><i>Cantidad de archivos cargados: </i> <?php echo $limpiezatC; ?></p></div>
                                    <div class="col-lg-6"><p style="font-size: .8em;"><i>Fecha de ultimo archivo cargado: </i> <?php echo $limpiezatF; ?> </p></div>
                                    <div class="col-lg-2"></div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div> <!-- TERMINA CARGA DE CUARTA BITACORA -->

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> <!-- INICIA CARGA DE QUINTA BITACORA -->
                                    <div class="fm-checkbox">
                                        <h4> Mantemiento Preventivio y Correctivo Cuatrimestral (Señalamientos - 11 BT 02)</h4>
                                        <p style="font-size: .8em;">(Se subiran Cuatrimestralmente las bitacoras - .pdf)</p>
                                    </div>
                                </div>
                                <form name="frm11bt02c" id="frm11bt02c" enctype="multipart/form-data" method="post">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                        <div class="fm-checkbox">
                                            <label>
                                                <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                                                    <div class="input-group date nk-int-st">
                                                        <span class="input-group-addon"></span>
                                                        <input type="text" class="form-control" name="date11bt02c" id="date11bt02c" value="03/19/2018">
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                        <div class="form-group nk-int-st">
                                            <input type="file" class="form-control" placeholder="col-lg-4" id="archivo11bt2c" name="archivo11bt2c">
                                        </div>
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                        <div class="form-group nk-int-st">
                                           <input style="display:none;" type="input" class="form-control" placeholder="" id="id11bt02c" name="id11bt02c">
                                        </div>
                                    </div>
                                </form>
                                <?php
                                    $sqlimpct = "SELECT count(descripcion) AS cuenta FROM bitacoras WHERE idCESH = '".$id."' AND descripcion = 'bt-02 Cuatrimestral' ORDER BY idBit DESC LIMIT 1";
                                    $resulimpct = mysqli_query($con, $sqlimpct);
                                    if($resulimpct->num_rows > 0){
                                        while($arrlimpct = $resulimpct->fetch_assoc()){
                                            $limpiezactC = $arrlimpct['cuenta'];
                                        }
                                    }else { $limpiezactC = "No existe carga"; }

                                    $sqlimpctF = "SELECT fechaI FROM bitacoras WHERE idCESH = '".$id."' AND descripcion = 'bt-02 Cuatrimestral' ORDER BY fechaI DESC LIMIT 1";
                                    $reslimpctF = mysqli_query($con, $sqlimpctF);
                                    if($reslimpctF->num_rows > 0){
                                        while($arrlimpctF = $reslimpctF->fetch_assoc()){
                                            $limpiezactF = $arrlimpctF['fechaI'];
                                        }
                                    }else { $limpiezactF = "No existe carga"; }
                                ?>

                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <button type="button" class="btn btn-warning" id="btnGuardar03c">Guardar</button>
                                </div>        
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="col-lg-4"><p style="font-size: .8em;"><i>Cantidad de archivos cargados: </i> <?php echo $limpiezatC; ?></p></div>
                                    <div class="col-lg-6"><p style="font-size: .8em;"><i>Fecha de ultimo archivo cargado: </i> <?php echo $limpiezactF; ?> </p></div>
                                    <div class="col-lg-2"></div>
                                </div>                        
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div> <!-- TERMINA CARGA DE QUINTA BITACORA -->

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> <!-- INICIA CARGA DE L SEXTA -->
                                    <div class="fm-checkbox">
                                        <h4> Mantemiento Preventivio y Correctivo Semestral (Instalaciones eléctricas - 11 BT 02)</h4>
                                        <p style="font-size: .8em;">(Se subiran Semestralmente las bitacoras - .pdf)</p>
                                    </div>
                                </div>
                                <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div> -->
                                <form name="frm11bt02s" id="frm11bt02s" enctype="multipart/form-data" method="post">
                                    <!-- <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"><b>Fecha</b></div> -->
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                        <div class="fm-checkbox">
                                            <label>
                                                <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                                                    <div class="input-group date nk-int-st">
                                                        <span class="input-group-addon"></span>
                                                        <input type="text" class="form-control" name="date11bt02s" id="date11bt02s" value="03/19/2018">
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    

                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                        <div class="form-group nk-int-st"> <input type="file" class="form-control" placeholder="col-lg-4" id="archivo11bt02s" name="archivo11bt02s"> </div>
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                        <div class="form-group nk-int-st"> <input style="display:none;" type="input" class="form-control" placeholder="" id="id11bt02s" name="id11bt02s"> </div>
                                    </div>                                    
                                </form>
                                <?php
                                    $sqlimps = "SELECT count(descripcion) AS cuenta FROM bitacoras WHERE idCESH = '".$id."' AND descripcion = 'bt-02 Semestral' ORDER BY idBit DESC LIMIT 1";
                                    $resulimps = mysqli_query($con, $sqlimps);
                                    if($resulimps->num_rows > 0){
                                        while($arrlimps = $resulimps->fetch_assoc()){
                                            $limpiezasC = $arrlimps['cuenta'];
                                        }
                                    }else { $limpiezasC = "No existe carga"; }

                                    $sqlimpsF = "SELECT fechaI FROM bitacoras WHERE idCESH = '".$id."' AND descripcion = 'bt-02 Semestral' ORDER BY fechaI DESC LIMIT 1";
                                    $reslimpsF = mysqli_query($con, $sqlimpsF);
                                    if($reslimpsF->num_rows > 0){
                                        while($arrlimpsF = $reslimpsF->fetch_assoc()){
                                            $limpiezasF = $arrlimpsF['fechaI'];
                                        }
                                    }else { $limpiezasF = "No existe carga"; }
                                ?>


                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <button type="button" class="btn btn-warning" id="btnGuardar03s">Guardar</button>
                                </div>    
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="col-lg-4"><p style="font-size: .8em;"><i>Cantidad de archivos cargados: </i> <?php echo $limpiezasC; ?></p></div>
                                    <div class="col-lg-6"><p style="font-size: .8em;"><i>Fecha de ultimo archivo cargado: </i> <?php echo $limpiezasF; ?> </p></div>
                                    <div class="col-lg-2"></div>
                                </div>                            
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div> <!-- TERMINA CARGA SEXTA BITACORA -->

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> <!-- INICIA SEPTIMA BITACORA -->
                                    <div class="fm-checkbox">
                                        <h4> Mantemiento Preventivio y Correctivo Anual (11 BT 02)</h4>
                                        <p style="font-size: .8em;">(Se subiran Anualmente las bitacoras - .pdf)</p>
                                    </div>
                                </div>
                                <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div> -->
                                <form name="frm11bt02a" id="frm11bt02a" enctype="multipart/form-data" method="post">
                                    <!-- <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"><b>Fecha</b></div> -->
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                        <div class="fm-checkbox">
                                            <label>
                                                <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                                                    <div class="input-group date nk-int-st">
                                                        <span class="input-group-addon"></span>
                                                        <input type="text" class="form-control" name="date11bt02a" id="date11bt02a" value="03/19/2018">
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    

                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                        <div class="form-group nk-int-st"> <input type="file" class="form-control" placeholder="col-lg-4" id="archivo11bt02a" name="archivo11bt02a"> </div>
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                        <div class="form-group nk-int-st"> <input style="display:none;" type="input" class="form-control" placeholder="" id="id11bt02a" name="id11bt02a"> </div>
                                    </div>
                                </form>

                                <?php
                                    $sqlimpA = "SELECT count(descripcion) AS cuenta FROM bitacoras WHERE idCESH = '".$id."' AND descripcion = 'bt-02 Anual' ORDER BY idBit DESC LIMIT 1";
                                    $resulimpA = mysqli_query($con, $sqlimpA);
                                    if($resulimpA->num_rows > 0){
                                        while($arrlimpA = $resulimpA->fetch_assoc()){
                                            $limpiezaAC = $arrlimpA['cuenta'];
                                        }
                                    }else { $limpiezaAC = "No existe carga"; }

                                    $sqlimpAF = "SELECT fechaI FROM bitacoras WHERE idCESH = '".$id."' AND descripcion = 'bt-02 Anual' ORDER BY fechaI DESC LIMIT 1";
                                    $reslimpAF = mysqli_query($con, $sqlimpAF);
                                    if($reslimpAF->num_rows > 0){
                                        while($arrlimpAF = $reslimpAF->fetch_assoc()){
                                            $limpiezaAF = $arrlimpAF['fechaI'];
                                        }
                                    }else { $limpiezaAF = "No existe carga"; }
                                ?>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <button type="button" class="btn btn-warning" id="btnGuardar03a">Guardar</button>
                                </div>                     
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="col-lg-4"><p style="font-size: .8em;"><i>Cantidad de archivos cargados: </i> <?php echo $limpiezaAC; ?></p></div>
                                    <div class="col-lg-6"><p style="font-size: .8em;"><i>Fecha de ultimo archivo cargado: </i> <?php echo $limpiezaAF; ?> </p></div>
                                    <div class="col-lg-2"></div>
                                </div>           
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div> <!-- TERMINA SEPTIMA CARGA -->

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> <!-- INICIA OCTAVA CARGA -->
                                    <div class="fm-checkbox">
                                        <h4> Mantemiento Preventivio y Correctivo Quinquenal (11 BT 02)</h4>
                                        <p style="font-size: .8em;">(Se subiran Quinquenalmente las bitacoras - .pdf)</p>
                                    </div>
                                </div>
                                
                                <form name="frm11bt02q" id="frm11bt02q" enctype="multipart/form-data" method="post">
                                    <!-- <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"><b>Fecha</b></div> -->
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                        <div class="fm-checkbox">
                                            <label>
                                                <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                                                    <div class="input-group date nk-int-st">
                                                        <span class="input-group-addon"></span>
                                                        <input type="text" class="form-control" name="date11bt02q" id="date11bt02q" value="03/19/2018">
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                        <div class="form-group nk-int-st"> <input type="file" class="form-control" placeholder="col-lg-4" id="archivo11bt02q" name="archivo11bt02q"> </div>
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                        <div class="form-group nk-int-st"> <input style="display:none;" type="input" class="form-control" placeholder="" id="id11bt02q" name="id11bt02q"> </div>
                                    </div>
                                </form>
                                <?php
                                    $sqlimpQ = "SELECT count(descripcion) AS cuenta FROM bitacoras WHERE idCESH = '".$id."' AND descripcion = 'bt-02 Quinquenal' ORDER BY idBit DESC LIMIT 1";
                                    $resulimpQ = mysqli_query($con, $sqlimpQ);
                                    if($resulimpQ->num_rows > 0){
                                        while($arrlimpQ = $resulimpQ->fetch_assoc()){
                                            $limpiezaQC = $arrlimpQ['cuenta'];
                                        }
                                    }else { $limpiezaQC = "No existe carga"; }

                                    $sqlimpQF = "SELECT fechaI FROM bitacoras WHERE idCESH = '".$id."' AND descripcion = 'bt-02 Quinquenal' ORDER BY fechaI DESC LIMIT 1";
                                    $reslimpQF = mysqli_query($con, $sqlimpQF);
                                    if($reslimpQF->num_rows > 0){
                                        while($arrlimpQF = $reslimpQF->fetch_assoc()){
                                            $limpiezaQF = $arrlimpQF['fechaI'];
                                        }
                                    }else { $limpiezaQF = "No existe carga"; }
                                ?>
                                

                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <button type="button" class="btn btn-warning" id="btnGuardar03q">Guardar</button>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="col-lg-4"><p style="font-size: .8em;"><i>Cantidad de archivos cargados: </i> <?php echo $limpiezaAC; ?></p></div>
                                    <div class="col-lg-6"><p style="font-size: .8em;"><i>Fecha de ultimo archivo cargado: </i> <?php echo $limpiezaAF; ?> </p></div>
                                    <div class="col-lg-2"></div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div> <!-- TERMINA DE OCTAVA -->


                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> <!-- INICIA NOVENA -->
                                    <div class="fm-checkbox">
                                        <h4>Fugas, derrames, pruebas de hermeticidad y drenado de agua (11 BT 03)</h4>
                                        <p style="font-size: .8em;">(Se subiran Mensualmente .pdf)</p>
                                    </div>
                                </div>
                                
                                <form name="frm11bt03" id="frm11bt03" enctype="multipart/form-data" method="post">
                                    <!-- <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"><b>Fecha</b></div> -->
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                        <div class="fm-checkbox">
                                            <label>
                                                <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                                                    <div class="input-group date nk-int-st">
                                                        <span class="input-group-addon"></span>
                                                        <input type="text" class="form-control" name="date11bt03" id="date11bt03" value="03/19/2018">
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>                                
                                    

                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                        <div class="form-group nk-int-st"> <input type="file" class="form-control" placeholder="col-lg-4" id="archivo11bt03" name="archivo11bt03"> </div>
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                        <div class="form-group nk-int-st"> <input style="display:none;" type="input" class="form-control" placeholder="" id="id11bt03" name="id11bt03"> </div>
                                    </div>
                                </form>
                                <?php
                                    $sqlpruebas = "SELECT count(descripcion) AS cuenta FROM bitacoras WHERE idCESH = '".$id."' AND descripcion = 'bt-03' ORDER BY idBit DESC LIMIT 1";
                                    $resulpruebas = mysqli_query($con, $sqlpruebas);
                                    if($resulpruebas->num_rows > 0){
                                        while($arrpruebas = $resulpruebas->fetch_assoc()){
                                            $PruebasHFD = $arrpruebas['cuenta'];
                                        }
                                    }else { $PruebasHFD = "No existe carga"; }

                                    $sqlpruebasF = "SELECT fechaI FROM bitacoras WHERE idCESH = '".$id."' AND descripcion = 'bt-03' ORDER BY fechaI DESC LIMIT 1";
                                    $respruebasF = mysqli_query($con, $sqlpruebasF);
                                    if($respruebasF->num_rows > 0){
                                        while($arrpruebasF = $respruebasF->fetch_assoc()){
                                            $PruebasHFDF = $arrpruebasF['fechaI'];
                                        }
                                    }else { $PruebasHFDF = "No existe carga"; }
                                ?>
                                
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <button type="button" class="btn btn-warning" id="btnGuardar04">Guardar</button>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="col-lg-4"><p style="font-size: .8em;"><i>Cantidad de archivos cargados: </i> <?php echo $PruebasHFD; ?></p></div>
                                    <div class="col-lg-6"><p style="font-size: .8em;"><i>Fecha de ultimo archivo cargado: </i> <?php echo $PruebasHFDF; ?> </p></div>
                                    <div class="col-lg-2"></div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div> <!-- TERMINA NOVENA -->
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
                                            <a href="#" class="pull-right btn btn-warning btn-sm" id="btn-archive">Archive</a>
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
                                                    <button class="btn-warning btn-md btn-block btn notika-add-todo" type="button" id="todo-btn-submit">Add</button>
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
                                                    <button type="submit" class="btn btn-md btn-warning btn-block notika-chat-btn">Send</button>
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