<?php
    include 'php/conex.php';
    $id = $_GET["x"];
    $con = Conectarse();
    $value = "";
?>

<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Control de actividades y procesos | ImplementS</title>
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
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="background:rgb(102,103,102); border-bottom-right-radius: 50px;"><H1 id="usuario" style="color:white; "> Punto 10 </H1></div>
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
                    <!-- <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Control de actividades y procesos</h2>
                                        <p><span class="bread-ntd"> <?php /*echo $id;*/ ?> </span> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                               <div class="breadcomb-report">
                                   <button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button>
                               </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"></div>
                                <div class="col-lg-1 col-md-2 col-sm-2 col-xs-2" style="background: rgb(254,174,0); color: rgb(27,22,50);">Alta de nuevo personal</div>
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="background: rgb(27,22,50); color: rgb(255,255,255);"> Cambio de personal </div>
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="background: rgb(27,22,50); color: rgb(255,255,255);"> Cambio ténologico </div>
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="background: rgb(27,22,50); color: rgb(255,255,255);"> Alta de Contratista </div>
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="background: rgb(27,22,50); color: rgb(255,255,255);"> Orden de trabajo </div>
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="background: rgb(27,22,50); color: rgb(255,255,255);"> Carga de bitacoras </div>
                            </div>
                        </div>
                    </div> -->



                    

                    <div class="col-lg-1"></div>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" id="" style="display: ;">
                        <div class="form-element-list">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-icon">
                                    <i class="notika-icon notika-edit"></i>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>Control de actividades</h2>
                                    <p><span class="bread-ntd"><?php echo $id; ?></span> </p>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-3">
                                <button id="btnNper" style="background: rgb(254,174,0); color: rgb(27,22,50); margin-left: 13%;">Alta de ingreso</button>
                                <button id="btnper" style="background: rgb(27,22,50); color: rgb(255,255,255); ">Cambio de personal</button>
                                <button id="btntec" style="background: rgb(27,22,50); color: rgb(255,255,255); ">Cambio técnologico</button>
                                <button id="btnorden" style="background: rgb(27,22,50); color: rgb(255,255,255); ">Orden de trabajo</button>
                                <button id="btnbitacora" style="background: rgb(27,22,50); color: rgb(255,255,255); ">Carga de bitacora</button>
                                <!-- <button id="btnevap" style="background: rgb(27,22,50); color: rgb(255,255,255); ">Evaluación de Proveedor</button> -->
                            </div>

                            <div class="basic-tb-hd" id="personalAInst" style="display: ;">                                
                                <p>Agregaras de manera detalladas información del nuevo personal de la estación de servicio.</p>
                            </div>
                            <div class="basic-tb-hd" id="personalInst" style="display: none;">                                
                                <p>Actualizaras de manera detallada el cambio de personal de la estación de servicio.</p>
                            </div>
                            <div class="basic-tb-hd" id="tecnoInst" style="display: none;">                                
                                <p>Actualizaras de manera detallada los cambios técnologicos de la estación de servicio.</p>
                            </div>
                            <div class="basic-tb-hd" id="ordentInst" style="display: none;">                                
                                <p>Expedición de orden de trabajo para realizar cualquier actividad dentro de la estación.</p>
                            </div>
                            <div class="basic-tb-hd" id="bitInst" style="display: none;">                                
                                <p>Completar el siguiente formulario, anexando las fechas de las bitácoras que ya se han implementado y subirlo en PDF en los campos señalados.</p>
                            </div>

                            <!-- ******************* ALTA DE PERSONAL *********************** -->
                            <div class="row" style="border: black 1px solid; display:;" id="personalN">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="fm-checkbox"> <label> Puesto de trabajo </label> </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="chosen-select-act fm-cmp-mg">
                                        <select class="chosen" name="" id="areaCn">
                                            <option value="Selecciona" style="display: none;">Selecciona una opción</option>
                                            <option value="Direccion">Alta Dirección</option>
                                            <option value="RepresentanteT">Representante Técnico</option>
                                            <option value="Administrativos">Administrativos</option>
                                            <option value="Despachador">Despachador</option>
                                            <option value="Intendente">Intendente</option>
                                            <option value="FinLaboral">Fin de relación laboral</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                   <div class="fm-checkbox"> <label> Nombre del personal </label> </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="form-group nk-int-st"> <input type="text" class="form-control" id="nombreCn"> </div>
                                </div>
                                <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div> -->
                                
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="fm-checkbox"> <label> Apellido paterno </label> </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="form-group nk-int-st"> <input type="text" class="form-control" id="apellidoCpat"> </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="fm-checkbox"> <label> Apellido materno </label> </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="form-group nk-int-st"> <input type="text" class="form-control" id="apellidoCmat"> </div>
                                </div>
                                <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div> -->

                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="fm-checkbox"> <label> CURP </label> </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="form-group nk-int-st">
                                        <input type="text" class="form-control" id="Ncurp">
                                    </div>
                                </div>
                                <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div> -->

                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="fm-checkbox"> <label> RFC </label> </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="form-group nk-int-st">
                                        <input type="text" class="form-control" id="Nrfc">
                                    </div>
                                </div>
                                <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div> -->

                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="fm-checkbox"> <label> Numero de Seguro Social (NSS) </label> </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="form-group nk-int-st"> <input type="text" class="form-control" id="nss"> </div>
                                </div>
                                <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div> -->
                    
                    
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="fm-checkbox"> <label>  Fecha de ingreso </label> </div>
                                </div>
                               <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="fm-checkbox">
                                        <label>
                                            <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                                                <div class="input-group date nk-int-st">
                                                    <span class="input-group-addon"></span>
                                                    <input type="text" class="form-control" id="fechaIngresoN" value="03/19/2020">
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
                                
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"></div>
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">                                   
                                    <button id="guardarNPersonal" class="btn btn-warning notika-btn-warning">Guardar</button>
                                </div>
                            </div>

                            <!-- ******************* CAMBIO DE PERSONAL *********************** -->
                            <div class="row" style="border: black 1px solid; display: none;" id="personal">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <div class="fm-checkbox"> <label> Nueva área </label> </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <div class="chosen-select-act fm-cmp-mg">
                                        <select class="chosen" name="" id="aNueva">
                                            <option value="Selecciona" style="display: none;">Selecciona una opción</option>
                                            <option value="Direccion">Alta Dirección</option>
                                            <option value="RepresentanteT">Representante Técnico</option>
                                            <option value="Administrativos">Administrativos</option>
                                            <option value="Despachador">Despachador</option>
                                            <option value="Intendente">Intendente</option>
                                            <option value="FinLaboral">Fin de relación laboral</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
                    
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <div class="fm-checkbox"> <label> Nombre del personal </label>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <div class="chosen-select-act fm-cmp-mg">
                                        <select class="chosen" name="" id="nombreTrabjC">
                                          <option id="" value="0" style="display: none;">Selecciona un nombre</option>
                                          <?php $qri = "SELECT idTrab as id, nombre as NT, apellidoP as AP, apellidoM as AM FROM organigrama WHERE status = 'ACTIVO' AND idCESH = '".$id."'";
                                                $resul = mysqli_query($con,$qri);
                                                while($row = $resul->fetch_object()){ ?>
                                          <option value="<?php echo $row->id; $value = $row->id;?>"><?php echo ($row->NT)." ".($row->AP)." ".($row->AM);?> </option>
                                          <?php } ?>
                                        </select>
                                    </div>   
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
                    
                    
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <div class="fm-checkbox"> <label> Autorizacion de cambio </label>
                                    </div>
                                </div>
                               <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <div class="form-group nk-int-st">
                                        <?php 
                                              $qi = "SELECT nombre as N, apellidoP as AP, apellidoM as AM FROM organigrama WHERE status = 'ACTIVO' AND puesto = 'RepresentanteT' AND idCESH = '".$id."'";
                                              $rsul = mysqli_query($con,$qi);
                                              while($rw = $rsul->fetch_assoc()){
                                                $nrt = $rw['N'];
                                                $atn = $rw['AP'];
                                                $amt = $rw['AM'];
                                              }?>
                                        <input type="text" class="form-control" id="autori" value="<?php echo $nrt." ".$atn." ".$amt; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
                    
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <div class="fm-checkbox"> <label> Motivo de cambio </label> </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <div class="form-group nk-int-st">
                                        <textarea class="form-control" rows="5" id="motivoC"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>

                                <div class="col-lg-8 col-md-9 col-sm-9 col-xs-10"></div>
                                <div class="col-lg-2 col-md-1 col-sm-1 col-xs-1">
                                    <button id="guardarCPersonal" class="btn btn-warning notika-btn-warning">Guardar</button>
                                </div>
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                    <button id="pdfcpersonal" class="btn btn-warning notika-btn-warning">Descargar</button>
                                </div>
                            </div>

                            <!-- ******************* CAMBIOS TECNOLOGICOS *********************** -->
                            <div class="row" style="border: black 1px solid; display: none;" id="tecno">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="fm-checkbox"> <label> Equipo </label> </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="form-group nk-int-st"> <input type="text" class="form-control" id="equipoC"> </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="fm-checkbox"> <label> Fecha </label> </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                    <div class="fm-checkbox">
                                        <label>
                                            <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                                                <div class="input-group date nk-int-st">
                                                    <span class="input-group-addon"></span>
                                                    <input type="text" class="form-control" id="fechaCT" value="03/19/2018">
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div> -->
                    
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <div class="fm-checkbox"> <label> Descripcion de cambio </label> </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm- col-xs-8">
                                    <div class="form-group nk-int-st"> <textarea class="form-control" rows="5" id="descrpC"></textarea> </div>
                                </div>
                                <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div> -->

                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <div class="fm-checkbox"> <label> Responsable de realización del mantenimiento </label> </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <div class="chosen-select-act fm-cmp-mg">
                                        <select class="chosen" name="" id="respMant">
                                          <option id="" value="0" style="display: none;">Selecciona un nombre</option>
                                          <?php $qri = "SELECT idTrab as id, nombre as NT, apellidoP as AP, apellidoM as AM FROM organigrama WHERE status = 'ACTIVO' AND idCESH = '".$id."'";
                                                $resul = mysqli_query($con,$qri);
                                                while($row = $resul->fetch_object()){ ?>
                                          <option value="<?php echo $row->id; $value = $row->id;?>"><?php echo ($row->NT)." ".($row->AP)." ".($row->AM);?> </option>
                                          <?php } ?>
                                        </select>
                                    </div>   
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>

                                <div class="col-lg-8 col-md-10 col-sm-10 col-xs-10"></div>
                                <div class="col-lg-2 col-md-1 col-sm-1 col-xs-1">                                   
                                    <button id="guardarCTec" class="btn btn-warning notika-btn-warning">Guardar</button>
                                </div>
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                    <button id="pdfctecnico" class="btn btn-warning notika-btn-warning">Descargar</button>
                                </div>
                            </div>

                            <!-- ******************* ORDEN DE TRABAJOS *********************** -->
                            <div class="row" style="border: black 1px solid; display: none;" id="ordent">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                            <div class="fm-checkbox"> <label> Fecha </label> </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                            <div class="fm-checkbox">
                                                <label>
                                                    <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                                                        <div class="input-group date nk-int-st">
                                                            <span class="input-group-addon"></span>
                                                            <input type="text" class="form-control" id="fechaOT" value="03/19/2018">
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>            
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                            <div class="fm-checkbox"> <label> No. permiso </label> </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                            <?php $sql = "SELECT numOrdenT FROM dzordentr WHERE idCESH = '".$id."' ORDER BY idOrdenT DESC LIMIT 1";
                                                  $resultado =mysqli_query($con, $sql);
                                                  if($resultado->num_rows > 0){
                                                    $fila1 = $resultado->fetch_assoc();
                                                    $datos1 = implode("", $fila1);
                                                  }else{
                                                    $datos1 = "0";
                                                  }
                                            ?>
                                            <div class="form-group nk-int-st"> <input type="text" class="form-control" id="noPermiso" disabled value="<?php echo $datos1+1 ?>"> </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>


                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                            <div class="fm-checkbox"> <label>  Ubicación del trabajo </label> </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                            <div class="form-group nk-int-st">
                                                <input type="text" class="form-control" id="ubicacionT">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                            <div class="fm-checkbox"> <label> Tipo de trabajo </label> </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                            <div class="chosen-select-act fm-cmp-mg">
                                                <select class="chosen" id="tipoTrabajo">
                                                    <option value="0" style="display: none;">Selecciona una opción</option>
                                                    <option value="Electrico">Eléctrico</option>
                                                    <option value="Trabajo en">Trabajo en Alturas</option>
                                                    <option value="Caliente">Trabajo en Caliente</option>
                                                    <option value="Extraordinaria">Limpieza Extraordinaria</option>
                                                    <option value="EConfinados">Espacios Confinados</option>
                                                    <option value="Otros">Otros</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>

                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                            <div class="fm-checkbox"> <label> Personal competente </label> </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                            <div class="form-group nk-int-st"> <input type="text" class="form-control" id="personalC" placeholder="Nombre completo del personal" > </div>
                                        </div>                    
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                            <div class="fm-checkbox"> <label> Tipo de personal </label> </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                            <div class="chosen-select-act fm-cmp-mg">
                                                <select class="chosen" name="" id="tipoT">
                                                    <option value="0" style="display: none;"> Selecciona una opción </option>
                                                    <option value="INTERNO">INTERNO</option>
                                                    <option value="EXTERNO">EXTERNO</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>

                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                            <div class="fm-checkbox"> <label> Detalles del trabajo: </label> </div>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                            <div class="form-group nk-int-st"> <textarea class="form-control" rows="5" id="detallesT" placeholder="Observación."></textarea> </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>

                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                            <div class="fm-checkbox"> <label> Horario de: </label> </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                            <div class="chosen-select-act fm-cmp-mg">
                                                <select class="chosen" id="hrIni">
                                                    <option value="00">00</option>
                                                    <option value="01">01</option>
                                                    <option value="02">02</option>
                                                    <option value="03">03</option>
                                                    <option value="04">04</option>
                                                    <option value="05">05</option>
                                                    <option value="06">06</option>
                                                    <option value="07">07</option>
                                                    <option value="08">08</option>
                                                    <option value="09">09</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                </select>
                                            </div>
                                        </div>
                                         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                            <div class="chosen-select-act fm-cmp-mg">
                                                <select class="chosen" id="minIni">
                                                    <option value="00">00</option>
                                                    <option value="01">01</option>
                                                    <option value="02">02</option>
                                                    <option value="03">03</option>
                                                    <option value="04">04</option>
                                                    <option value="05">05</option>
                                                    <option value="06">06</option>
                                                    <option value="07">07</option>
                                                    <option value="08">08</option>
                                                    <option value="09">09</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                                    <option value="23">23</option>
                                                    <option value="33">33</option>
                                                    <option value="34">34</option>
                                                    <option value="35">35</option>
                                                    <option value="36">36</option>
                                                    <option value="37">37</option>
                                                    <option value="38">38</option>
                                                    <option value="39">39</option>
                                                    <option value="40">40</option>
                                                    <option value="41">41</option>
                                                    <option value="42">42</option>
                                                    <option value="43">43</option>
                                                    <option value="44">44</option>
                                                    <option value="45">45</option>
                                                    <option value="46">46</option>
                                                    <option value="47">47</option>
                                                    <option value="48">48</option>
                                                    <option value="49">49</option>
                                                    <option value="50">50</option>
                                                    <option value="51">51</option>
                                                    <option value="52">52</option>
                                                    <option value="53">53</option>
                                                    <option value="54">54</option>
                                                    <option value="55">55</option>
                                                    <option value="56">56</option>
                                                    <option value="57">57</option>
                                                    <option value="58">58</option>
                                                    <option value="59">59</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                            <div class="fm-checkbox"> <label> a </label> </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                            <div class="chosen-select-act fm-cmp-mg">
                                                <select class="chosen" id="hrFin">
                                                    <option value="00">00</option>
                                                    <option value="01">01</option>
                                                    <option value="02">02</option>
                                                    <option value="03">03</option>
                                                    <option value="04">04</option>
                                                    <option value="05">05</option>
                                                    <option value="06">06</option>
                                                    <option value="07">07</option>
                                                    <option value="08">08</option>
                                                    <option value="09">09</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                </select>
                                            </div>
                                        </div>
                                         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                            <div class="chosen-select-act fm-cmp-mg">
                                                <select class="chosen" id="minFin">
                                                    <option value="00">00</option>
                                                    <option value="01">01</option>
                                                    <option value="02">02</option>
                                                    <option value="03">03</option>
                                                    <option value="04">04</option>
                                                    <option value="05">05</option>
                                                    <option value="06">06</option>
                                                    <option value="07">07</option>
                                                    <option value="08">08</option>
                                                    <option value="09">09</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                                    <option value="23">23</option>
                                                    <option value="33">33</option>
                                                    <option value="34">34</option>
                                                    <option value="35">35</option>
                                                    <option value="36">36</option>
                                                    <option value="37">37</option>
                                                    <option value="38">38</option>
                                                    <option value="39">39</option>
                                                    <option value="40">40</option>
                                                    <option value="41">41</option>
                                                    <option value="42">42</option>
                                                    <option value="43">43</option>
                                                    <option value="44">44</option>
                                                    <option value="45">45</option>
                                                    <option value="46">46</option>
                                                    <option value="47">47</option>
                                                    <option value="48">48</option>
                                                    <option value="49">49</option>
                                                    <option value="50">50</option>
                                                    <option value="51">51</option>
                                                    <option value="52">52</option>
                                                    <option value="53">53</option>
                                                    <option value="54">54</option>
                                                    <option value="55">55</option>
                                                    <option value="56">56</option>
                                                    <option value="57">57</option>
                                                    <option value="58">58</option>
                                                    <option value="59">59</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>

                                        <!-- <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                            <div class="fm-checkbox"> <label> No. de Revalidación</label> </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                            <div class="chosen-select-act fm-cmp-mg">
                                                <select class="chosen" id="revapermiso">
                                                    <option value="00">00</option>
                                                    <option value="01">01</option>
                                                    <option value="02">02</option>
                                                    <option value="03">03</option>
                                                    <option value="04">04</option>
                                                    <option value="05">05</option>
                                                    <option value="06">06</option>
                                                    <option value="07">07</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div> -->
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            Asegúrese de que los siguientes peligros son identificados y conocidos por todas las personas y que existen controles en el sitio.
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                            <div class="fm-checkbox"> <label> Peligros </label> </div>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                            <div class="chosen-select-act fm-cmp-mg">
                                                <select class="chosen" multiple data-placeholder="Selecciona una/varias opciones" id="peligros">
                                                    <!-- <option value="0" style="display:none;">Selecciona una opción</option> -->
                                                    <option value="Gravedad y movimientos">Gravedad y movimientos</option>
                                                    <option value="Herramientas/Equipos/Maquinaria">Herramientas/Equipos/Maquinaria</option>
                                                    <option value="Transporte terrestres"> Transporte terrestres</option>
                                                    <option value="Transporte aereo"> Transporte aéreo</option>
                                                    <option value="Clima">Clima</option>
                                                    <option value="Electricidad">Electricidad</option>
                                                    <option value="Presion">Presión</option>
                                                    <option value="Temperatura">Temperatura</option>
                                                    <option value="Vibracion/Ruido">Vibración/Ruido</option>
                                                    <option value="Radiacion">Radiación</option>
                                                    <option value="Fuego">Fuego</option>
                                                    <option value="Materiales Peligrosos">Materiales Peligrosos</option>
                                                    <option value="Biologicos">Biológicos</option>
                                                    <option value="Fenomenos Naturales">Fenómenos Naturales</option>
                                                    <option value="Otros">Otros</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>

          
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                            <div class="fm-checkbox"> <label> Precauciones requeridas/Equipos </label> </div>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                            <div class="chosen-select-act fm-cmp-mg">
                                                <select class="chosen" multiple data-placeholder="Selecciona una/varias opciones" id="precauciones">
                                                    <!-- <option value="0" style="display:none;">Selecciona una opción</option> -->
                                                    <option value="Personal competente">Personal competente</option>
                                                    <option value="Equipo de combate de incendios">Equipo de combate de incendios</option>
                                                    <option value="Iluminacion">Iluminación</option>
                                                    <option value="Material combustible removido">Material combustible removido</option>
                                                    <option value="Circuitos Eléctricos Aislados">Circuitos Eléctricos Aislados</option>
                                                    <option value="Equipos de detección">Equipos de detección</option>
                                                    <option value="Equipos de Ignicion">Equipos de Ignición</option>
                                                    <option value="Aparejos de carga certificados">Aparejos de carga certificados</option>
                                                    <option value="Tanques de combustible llenos de agua">Tanques de combustible llenos de agua</option>
                                                    <option value="Equipos de Respiracion">Equipos de Respiración</option>
                                                    <option value="Equipo de hizaje apropiado">Equipo de hizaje apropiado</option>
                                                    <option value="Barricadas / Barreras">Barricadas / Barreras</option>
                                                    <option value="Señales preventivas">Señales preventivas<option>
                                                    <option value="Seguridad / Fuego prevención">Seguridad / Fuego prevención</option>
                                                    <option value="Rutas de escape despejadas">Rutas de escape despejadas</option>
                                                    <option value="Equipos de seguridad relevantes">Equipos de seguridad relevantes</option>
                                                    <option value="EPP">EPP</option>
                                                    <option value="Comunicaciones">Comunicaciones</option>
                                                    <option value="Botiquín">Botiquín</option>
                                                    <option value="Bloqueo">Bloqueo</option>
                                                    <option value="Bloqueos / Soportes">Bloqueos / Soportes</option>
                                                    <option value="MSDS">MSDS</option>
                                                    <option value="Ventilación">Ventilación</option>
                                                    <option value="Otros">Otros</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>


                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                            <div class="fm-checkbox"> <label> Area donde se trabajara </label> </div>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                            <div class="chosen-select-act fm-cmp-mg">
                                                <select class="chosen" id="areaTrab">
                                                    <option value="0" style="display:none;">Selecciona una opción</option>
                                                    <option value="Dispensario">Dispensario</option>
                                                    <option value="Tanques">Tanques</option>
                                                    <option value="Techos, faldones, anuncio independiente">Techos, faldones, anuncio independiente</option>
                                                    <option value="Cuarto Electrico">Cuarto Eléctrico</option>
                                                    <option value="Cuarto de Maquinas">Cuarto de Maquinas</option>
                                                    <option value="Otro">Otro</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>

                                        <div class="col-lg-8 col-md-10 col-sm-10 col-xs-10"></div>
                                        <div class="col-lg-2 col-md-1 col-sm-1 col-xs-1">                                   
                                            <button id="guardarOrdenTrabajo" class="btn btn-warning notika-btn-warning">Guardar</button>
                                        </div>
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                            <button id="pdfordenT" class="btn btn-warning notika-btn-warning">Descargar</button>
                                        </div>
                            </div>

                            <div class="row" style="border: black 1px solid; display: none;" id="bit">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="fm-checkbox"> <label> Mantemiento Preventivo y Correctivo (10-BT-01) (.pdf) </label> </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>

                                <form name="enviarbt01" id="enviarbt01" enctype="multipart/form-data" method="post">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                        <div class="fm-checkbox">
                                            <label>
                                                <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                                                    <div class="input-group date nk-int-st">
                                                        <span class="input-group-addon"></span>
                                                        <input type="text" class="form-control" name="datebt01" id="datebt01" value="03/19/2018">
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div> -->

                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                        <div class="form-group nk-int-st"> <input type="file" class="form-control" placeholder="col-lg-4" id="archivobt01" name="archivobt01"> </div>
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                        <div class="form-group nk-int-st"> <input style="display:none;" type="input" class="form-control" placeholder="" id="idbt01" name="idbt01"> </div>
                                    </div>
                                    <?php 
                                        $sqlprueba = "SELECT idBitacoras as id FROM dzbitacora WHERE idCESH = '".$id."' AND descripcion = 'bt-01' ORDER BY idBitacoras DESC LIMIT 1";
                                        $result =mysqli_query($con, $sqlprueba);
                                        if($result->num_rows > 0){ 
                                            $fila1 = $result->fetch_assoc();
                                            $datos1 = implode("", $fila1);
                                            //echo $datos1; ?>
                                        <!-- <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                            <div class="form-group nk-int-st">
                                               <input style="display:none;" type="input" class="form-control" value="<?php /*echo $datos1;*/ ?>" placeholder="" id="idActualiza01" name="idActualiza01">
                                            </div>
                                        </div> -->
                                        
                                    </form>
                                    <?php }else{ ?>
                                    </form>
                                    <?php } ?>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                        <button type="button" class="btn btn-warning" id="btnGuardar01">Guardar</button>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>

                        
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="fm-checkbox"> <label> Residuos Peligrosos (10-BT-02) (.pdf) </label> </div>
                                    </div>
                                    <form name="enviarbt02" id="enviarbt02" enctype="multipart/form-data" method="post">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                            <div class="fm-checkbox">
                                                <label>
                                                    <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                                                        <div class="input-group date nk-int-st">
                                                            <span class="input-group-addon"></span>
                                                            <input type="text" class="form-control" name="datebt02" id="datebt02" value="03/19/2018">
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                            <div class="form-group nk-int-st"> <input type="file" class="form-control" placeholder="col-lg-4" id="archivobt02" name="archivobt02"> </div>
                                        </div>
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                            <div class="form-group nk-int-st"> <input style="display:none;" type="input" class="form-control" placeholder="" id="idbt02" name="idbt02"> </div>
                                        </div>
                                    <?php 
                                        $sqlprueb = "SELECT idBitacoras as id FROM dzbitacora WHERE idCESH = '".$id."' AND descripcion = 'bt-02' ORDER BY idBitacoras DESC LIMIT 1";
                                        $resul =mysqli_query($con, $sqlprueb);
                                        if($resul->num_rows > 0){ 
                                            $fila2 = $resul->fetch_assoc();
                                            $datos2 = implode("", $fila2);
                                            //echo $datos1; ?>
                                        <!-- <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                            <div class="form-group nk-int-st">
                                               <input style="display:none;" type="input" class="form-control" value="<?php /*echo $datos2;*/ ?>" placeholder="" id="idActualiza" name="idActualiza02">
                                            </div>
                                        </div> -->                                        
                                    </form>
                                    <?php }else{ ?>
                                    </form>
                                    <?php } ?>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                        <button type="button" class="btn btn-warning" id="btnGuardar02">Guardar</button>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
                        
                        
                                    
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="fm-checkbox">
                                            <label>
                                               Recepción, Descarga y Desviación en el Balance de Producto (10-BT-03)
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>

                                    <form name="enviarbt03" id="enviarbt03" enctype="multipart/form-data" method="post">
                                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-3">
                                            <div class="fm-checkbox">
                                                <label>
                                                    <div class="form-group nk-datapk-ctm form-elet-mg" id="data_1">
                                                        <div class="input-group date nk-int-st">
                                                            <span class="input-group-addon"></span>
                                                            <input type="text" class="form-control" name="datebt03" id="datebt03" value="03/19/2018">
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                                                      
                                        
                                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                            <div class="form-group nk-int-st"> <input type="file" class="form-control" placeholder="col-lg-4" id="archivobt03" name="archivobt03"> </div>
                                        </div>
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                            <div class="form-group nk-int-st"> <input style="display:none;" type="input" class="form-control" placeholder="" id="idbt03" name="idbt03"> </div>
                                        </div>
                                    <?php 
                                        $sqlprue = "SELECT idBitacoras as id FROM dzbitacora WHERE idCESH = '".$id."' AND descripcion = 'bt-03' ORDER BY idBitacoras DESC LIMIT 1";
                                        $res =mysqli_query($con, $sqlprue);
                                        if($res->num_rows > 0){ 
                                            $fila3 = $res->fetch_assoc();
                                            $datos3 = implode("", $fila3);
                                            //echo $datos1; ?>
                                        <!-- <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                            <div class="form-group nk-int-st">
                                               <input style="display:none;" type="input" class="form-control" value="<?php /*echo $datos3;*/ ?>" placeholder="" id="idActualiza03" name="idActualiza03">
                                            </div>
                                        </div -->>
                                        
                                    </form>
                                    <?php }else{ ?>
                                    </form>
                                    <?php } ?>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                        <button type="button" class="btn btn-warning" id="btnGuardar03">Guardar</button>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
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