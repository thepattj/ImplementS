<?php
    include 'php/conex.php';
    $cre = $_GET["x"];
    $con = Conectarse();
    $rep="";
?>

<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Requisitos Legales | ImplementS</title>
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
    <!-- Bootstrap CSS
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
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- jvectormap CSS
		============================================ -->
    <link rel="stylesheet" href="css/jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/notika-custom-icon.css">
    <!-- chosen CSS
        ============================================ -->
    <link rel="stylesheet" href="css/chosen/chosen.css">
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
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"><h4 id="dataRS" style="color:white; background:rgb(102,103,102); border-radius: 35px; text-align: center;"> Nombre de Usuario </h4> </div> <!-- CAMBIAR A UN BUTTON -->
        </div>
              <!-- <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="background: while;"><img src="">A1</div> -->
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="background:rgb(102,103,102); border-bottom-right-radius: 50px;"><H1 id="usuario" style="color:white; "> Punto 3 </H1></div>
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
                                        <h2>Requisitos Legales</h2>
                                        <p><span class="bread-ntd" id="datacre">No. E. S.</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">

                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                                <div class="col-lg-1 col-md-1 col-sm-1"></div>
                                <div class="col-lg-1 col-md-1 col-sm-1"></div>
                                <div class="col-lg-1 col-md-1 col-sm-1"></div>
                                
                                

                                <div class="col-lg-2 col-md-1 col-sm-1" style="background: rgb(254,174,0); color: rgb(27,22,50);">Documentación Legal</div>
                                <div class="col-lg-1 col-md-1 col-sm-1" style="background: rgb(27,22,50); color: rgb(255,255,255);">ASEA</div>
                                <div class="col-lg-1 col-md-1 col-sm-1" style="background: rgb(27,22,50); color: rgb(255,255,255);">CRE</div>
                                <div class="col-lg-1 col-md-1 col-sm-1" style="background: rgb(27,22,50); color: rgb(255,255,255);">PROFECO</div>
                                <div class="col-lg-2 col-md-1 col-sm-1" style="background: rgb(27,22,50); color: rgb(255,255,255);">Protección Cívil</div>
                                <div class="col-lg-1 col-md-1 col-sm-1" style="background: rgb(27,22,50); color: rgb(255,255,255);">Sec. Eco.</div>
                                <div class="col-lg-1 col-md-1 col-sm-1" style="background: rgb(27,22,50); color: rgb(255,255,255);">STPS</div>
                                
                                
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
                                    <h2>Requisitos Legales</h2>
                                    <p><span class="bread-ntd"><?php echo $cre; ?></span> </p>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-3">
                                <button id="btnlegal" style="background: rgb(254,174,0); color: rgb(27,22,50); margin-left: 31%;">Documentación Legal</button>
                                <button id="btnasea" style="background: rgb(27,22,50); color: rgb(255,255,255); ">ASEA</button>
                                <button id="btncre" style="background: rgb(27,22,50); color: rgb(255,255,255); ">CRE</button>
                                <button id="btnprofeco" style="background: rgb(27,22,50); color: rgb(255,255,255); ">PROFECO</button>
                                <button id="btnpc" style="background: rgb(27,22,50); color: rgb(255,255,255); ">Protección Cívil</button>
                                <button id="btnse" style="background: rgb(27,22,50); color: rgb(255,255,255); ">Sec. Eco.</button>
                                <button id="btnstps" style="background: rgb(27,22,50); color: rgb(255,255,255); ">STPS</button>
                                <!-- <button id="btnevap" style="background: rgb(27,22,50); color: rgb(255,255,255); ">Evaluación de Proveedor</button> -->
                            </div>

                            <div class="basic-tb-hd" id="" style="display: ; margin-top: 5%;">      
                                <h2 id="titdoc" style="display: ;">Requisitos documentales de Estación de Servicio:</h2>
                                <h2 id="titasea" style="display: none;">Requisitos Documentales - Agencia de Seguridad, Energía y Ambiente:</h2>
                                <h2 id="titcre" style="display: none;">Requisitos Documentales - Comisión Reguladora de Energía:</h2>
                                <h2 id="titpro" style="display: none;">Requisitos Documentales - Procuraduría Federal del Consumidor:</h2>
                                <h2 id="titpc" style="display: none;">Requisitos Documentales - Protección Civil:</h2>
                                <h2 id="titse" style="display: none;">Requisitos Documentales - Secretaría de Economía:</h2>
                                <h2 id="titstps" style="display: none;">Requisitos Documentales - Secretaría del Trabajo y Prevensión Social:</h2>
                                <p>Completar el formulario con la información que se te pide para tu control.<br><b>NOTA: Debes de responder todo el formulario no importa que el documento no lo encuentres en tu estación.</b> De lo contrario no se guardara la información</p>
                            </div>

                            <!-- REQUISITOS LEGALES-->
                            <div class="row" style="border: black 1px solid; display: ;" id="legal">
                                <?php
                                    $sqldoc = "SELECT cumplimiento, status, evidencia FROM documento WHERE tipo = 'Documentación' AND idCESH = '".$cre."' ORDER BY num ASC";
                                    $resultadodoc =mysqli_query($con, $sqldoc);
                                    if($resultadodoc->num_rows > 0){
                                        $n = 0;
                                        while($filadoc = $resultadodoc->fetch_assoc()){
                                            $dcumpl = $filadoc['cumplimiento'];
                                            $dstatus = $filadoc['status'];
                                            //$dporce = $filadoc['porcentaje'];
                                            $devid = $filadoc['evidencia'];

                                            $datos6 [$n] = $dcumpl;
                                            $datos6 [$n+18] = $dstatus;
                                            $datos6 [$n+36] = $devid;
                                            //  $datos6 [$n+54] = $devid;
                                            $n++;
                                        }
                                    }else{  for ($i=0; $i<=71; $i++) { $datos6[$i] = "-"; } }
                                    //echo "cumplimiento: ".$datos6[13]." status1: ".$datos6[31]." evidencia: ".$datos6[49];
                                    //echo $datos6[71];
                                ?>
                                <div class="" style="overflow: auto; width: 100%; height: 250px; border-bottom: black 1px solid;">
                                    <table class="table table-cl">
                                        <thead style="background: rgb(198,198,198); color: rgb(0,0,0);">
                                            <tr>
                                                <th>#</th> <th>Documentos</th> <th>¿Cumple?</th> <th>Estatus </th> <!-- <th>Porcentaje</th> --> <th>No. Control</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <!-- VALORES QUE SE TIENEN DE ACTA -->
                                           <tr>
                                                <td>1</td>
                                                <td>Acta Constitutiva</td>
                                                <?php if($datos6[0] == "Si"){  ?>
                                                    <td value="1" id="cActa" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos6[0] == "No") { ?>
                                                    <td value="0" id="cActa" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos6[0] == "-") { ?>
                                                    <td value="" id="cActa" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>
                                                
                                                <td>
                                                    <?php if($datos6[18] == "Otorgada"){ ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estAct">
                                                                <option value="0" style="display: none;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos6[18] == "Tramite"){ ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estAct">
                                                                <option value="0" style="display: none;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos6[18] == "NA"){ ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estAct">
                                                                <option value="0" style="display: none;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos6[18] == "-"){ ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estAct">
                                                                <option value="0" style="display: none;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }?>                                                    
                                                </td>
                                                <td>
                                                    <?php if($datos6[36] != '-') { ?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos6[36]; ?>" class="form-control" id="eviAct" placeholder="No. de Acta"> </div>
                                                    <?php } else {?> 
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="eviAct" placeholder="No. de Acta"> </div> 
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                            <!-- VALORES QUE TIENEN PODER NOTARIAL -->
                                            <tr style="background: rgba(198,198,198,.5);">
                                                <td>2</td>
                                                <td>Poder Notarial</td>
                                                <?php if($datos6[1] == "Si"){ ?>
                                                <td value="1" id="cPNot" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos6[1] == "No") { ?>
                                                <td value="0" id="cPNot" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos6[1] == "-") { ?>
                                                <td value="" id="cPNot" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>      

                                                <td>
                                                    <?php if($datos6[19] == "Otorgada"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estPn">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } if($datos6[19] == "Tramite"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estPn">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } if($datos6[19] == "NA"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estPn">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } if($datos6[19] == "-"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estPn">
                                                                <option value="0" style="display: none;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <?php if($datos6[37]!="-"){?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos6[37]; ?>" class="form-control" id="eviPn" placeholder="No. de Poder"> </div>
                                                    <?php }else{?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="eviPn" placeholder="No. de Poder"> </div>
                                                    <?php }?>
                                                </td>
                                            </tr>
                                            <!-- VALORES QUE TIENEN ALTA DE SHCP -->
                                            <tr>
                                                <td>3</td>
                                                <td>Comprobante Original de alta ante hacienda</td>
                                                <?php if($datos6[2] === "Si"){ ?>
                                                <td value="1" id="altaSHCP" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos6[2] === "No") { ?>
                                                <td value="0" id="altaSHCP" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos6[2] === "-") { ?>
                                                <td value="" id="altaSHCP" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>
                                                
                                                <td>
                                                    <?php if($datos6[20] == "Otorgada"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estSHCP">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos6[20] == "Tramite"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estSHCP">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos6[20] == "NA"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estSHCP">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos6[20] == "-"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estSHCP">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }?>
                                                </td>
                                                <td>
                                                    <?php if($datos6[38] !='-'){?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos6[38];?>" class="form-control" id="eviSHCP" placeholder="No. de tramite"> </div>
                                                    <?php } else { ?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="eviSHCP" placeholder="No. de tramite"> </div>
                                                    <?php } ?>
                                                </td>                                                
                                            </tr>
                                            <!-- VALORES QUE TIENEN RFC ORIGINAL -->
                                            <tr style="background: rgb(198,198,198);">
                                                <td>4</td>
                                                <td>R.F.C. Original</td>
                                                <?php if($datos6[3] === "Si"){ ?>
                                                <td value="1" id="RFCS" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos6[3] === "No") { ?>
                                                <td value="0" id="RFCS" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos6[3] === "-") { ?>
                                                <td value="" id="RFCS" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>
                                                
                                                <td>
                                                    <?php if($datos6[21] == "Otorgada"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estSRFCS">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos6[21] == "Tramite"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estSRFCS">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos6[21] == "NA"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estSRFCS">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos6[21] == "-"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estSRFCS">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } ?>                                                    
                                                </td>
                                                <td>
                                                    <?php if($datos6[39] != "-"){?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos6[39];?>" class="form-control" id="eviRFCS" placeholder="No. de tramite"> </div>
                                                    <?php } else { ?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="eviRFCS" placeholder="No. de tramite"> </div>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                            <!-- VALORES DE PERMISO DE LA CRE -->
                                            <tr>
                                                <td>5</td>
                                                <td>Permiso de la comisión reguladora de Energía <b>(CRE)</b></td>
                                                <?php if($datos6[4] == "Si"){ ?>
                                                <td value="1" id="PL" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos6[4] == "No") { ?>
                                                <td value="0" id="PL" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos6[4] == "-") { ?>
                                                <td value="" id="PL" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>

                                                <td>
                                                    <?php if($datos6[22] == "Otorgada"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estPL">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos6[22] == "Tramite"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estPL">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos6[22] == "NA"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estPL">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos6[22] == "-"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estPL">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } ?>                                                    
                                                </td>
                                                <td>
                                                    <?php if($datos6[40] != '-') {?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos6[40];?>" class="form-control" id="eviPL" placeholder="No. de PL"> </div>
                                                    <?php }else{?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="eviPL" placeholder="No. de PL"> </div>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                             <!-- VALORES DE LICENCIA DE MUNICIPIO -->
                                            <tr style="background: rgb(198,198,198);">
                                                <td>6</td>
                                                <td>Licencia de Funcionamiento (Municipal)</td>
                                                <?php if($datos6[5] == "Si"){ ?>
                                                <td value="1" id="LFM" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos6[5] == "No") { ?>
                                                <td value="0" id="LFM" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos6[5] == "-") { ?>
                                                <td value="" id="LFM" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>
                                                
                                                <td>
                                                    <?php if($datos6[23] == "Otorgada"){ ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estLFM">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos6[23] == "Tramite"){ ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estLFM">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos6[23] == "NA"){ ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estLFM">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos6[23] == "-"){ ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estLFM">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <?php if($datos6[41] !="-"){?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos6[41];?>" class="form-control" id="eviLFM" placeholder="No. de Licencia"> </div>
                                                    <?php }else{?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="eviLFM" placeholder="No. de Licencia"> </div>
                                                    <?php }?>
                                                </td>
                                            </tr>
                                            <!-- VALORES DE DICTAMEN DE SUELO -->
                                            <tr>
                                                <td>7</td>
                                                <td>Dictamenten de uso de suelo / Factibilidad de uso de suelo</td>
                                                <?php if($datos6[6] == "Si"){ ?>
                                                <td value="1" id="dicSuelo" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos6[6] == "No") { ?>
                                                <td value="0" id="dicSuelo" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos6[6] == "-") { ?>
                                                <td value="" id="dicSuelo" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>
                                                
                                                <td>
                                                    <?php if($datos6[24] == "Otorgada"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estdicS">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos6[24] == "Tramite"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estdicS">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos6[24] == "NA"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estdicS">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos6[24] == "-"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estdicS">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }?>
                                                </td>
                                                <td>
                                                    <?php if($datos6[42]!="-"){?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos6[42];?>" class="form-control" id="evidicS" placeholder="Numero de estudio"> </div>
                                                    <?php }else{ ?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evidicS" placeholder="Numero de estudio"> </div>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                            <!-- VALORES DE TARJETA IMSS -->
                                            <tr style="background: rgb(198,198,198);">
                                                <td>8</td>
                                                <td>Tarjeta oficial de IMSS (Número Patronal)</td>
                                                <?php if($datos6[7] == "Si"){ ?>
                                                <td value="1" id="oImss" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos6[7] == "No") { ?>
                                                <td value="0" id="oImss" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos6[7] == "-") { ?>
                                                <td value="" id="oImss" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>
                                                
                                                <td>
                                                    <?php if($datos6[25] =="Otorgada"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estoIm">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos6[25] =="Tramite"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estoIm">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos6[25] =="NA"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estoIm">
                                                               <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos6[25] =="-"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estoIm">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }?>
                                                </td>
                                                <td>
                                                    <?php if($datos6[43] !='-'){?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos6[43];?>" class="form-control" id="evidoIm" placeholder="No. de Licencia"> </div>
                                                    <?php }else{?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evidoIm" placeholder="No. de Licencia"> </div>
                                                    <?php }?>
                                                </td>
                                            </tr>
                                            <!-- VALORES DE PLANOS -->
                                            <tr>
                                                <td>9</td>
                                                <td>Planos Arquitectonicos</td>
                                                <?php if($datos6[8] == "Si"){ ?>
                                                <td value="1" id="planoA" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos6[8] == "No") { ?>
                                                <td value="0" id="planoA" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos6[8] == "-") { ?>
                                                <td value="" id="planoA" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>
                                                
                                                <td>
                                                    <?php if($datos6[26] == "Otorgada"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estplano">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos6[26] == "Tramite"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estplano">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos6[26] == "NA"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estplano">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos6[26] == "-"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estplano">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }?>
                                                </td>
                                                <td>
                                                    <?php if($datos6[44] !="-"){?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos6[44];?>" class="form-control" id="evidplano" placeholder="No. de "> </div> 
                                                    <?php }else{?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evidplano" placeholder="No. de "> </div> 
                                                    <?php }?>
                                                </td>
                                            </tr>
                                            <!-- VALORES DE SIEM -->
                                            <tr style="background: rgb(198,198,198);">
                                                <td>10</td>
                                                <td><b>SIEM</b> (Sistema de Información Empresarial Mexicano)</td>
                                                <?php if($datos6[9] == "Si"){ ?>
                                                <td value="1" id="aSiem" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos6[9] == "No") { ?>
                                                <td value="0" id="aSiem" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos6[9] == "-") { ?>
                                                <td value="" id="aSiem" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>
                                                
                                                <td>
                                                    <?php if($datos6[27]== "Otorgada"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estSiem">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos6[27]== "Tramite"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estSiem">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos6[27]== "NA"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estSiem">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos6[27]== "-"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estSiem">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }?>
                                                </td>
                                                <td>
                                                    <?php if($datos6[45]!="-"){?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos6[45];?>" class="form-control" id="evidSiem" placeholder="Número"> </div>
                                                    <?php }else{?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evidSiem" placeholder="Número"> </div>
                                                    <?php }?>
                                                </td>
                                            </tr>
                                            <!-- VALORES DE DICTAMENES ELECTRICOS -->
                                            <tr>
                                                <td>11</td>
                                                <td>Dictámenes eléctricos</td>
                                                <?php if($datos6[10] == "Si"){ ?>
                                                <td value="1" id="dElec" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos6[10] == "No") { ?>
                                                <td value="0" id="dElec" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos6[10] == "-") { ?>
                                                <td value="" id="dElec" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>
                                                
                                                <td>
                                                    <?php if($datos6[28] == "Otorgada"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estdElec">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos6[28] == "Tramite"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estdElec">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos6[28] == "NA"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estdElec">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos6[28] == "-"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estdElec">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <?php if($datos6[46]!='-'){?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos6[46];?>" class="form-control" id="eviddElec" placeholder="Número"> </div>
                                                    <?php }else{?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="eviddElec" placeholder="Número"> </div>
                                                    <?php }?>
                                                </td>
                                            </tr>
                                            <!-- VALOR DE TIERRAS FISICAS -->
                                            <tr style="background: rgb(198,198,198);">
                                                <td>12</td>
                                                <td>Dictámenes Tierras Fisicas y pararrayos</td>
                                                <?php if($datos6[11] == "Si"){ ?>
                                                <td value="1" id="dTfisica" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos6[11] == "No") { ?>
                                                <td value="0" id="dTfisica" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos6[11] == "-") { ?>
                                                <td value="" id="dTfisica" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>
                                                
                                                <td>
                                                    <?php if($datos6[29] == "Otorgada"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estdTfi">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos6[29] == "Tramite"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estdTfi">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos6[29] == "NA"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estdTfi">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos6[29] == "-"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estdTfi">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }?>
                                                </td>
                                                <td>
                                                    <?php if($datos6[47] !='-'){?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos6[47];?>" class="form-control" id="eviddTfi" placeholder="Número"> </div>
                                                    <?php }else{?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="eviddTfi" placeholder="Número"> </div>
                                                    <?php }?>
                                                </td>
                                            </tr>
                                            <!-- VALORES DE CALIBRACION -->
                                            <tr>
                                                <td>13</td>
                                                <td>Calibración de dispensarios (PROFECO)</td>
                                                <?php if($datos6[12] == "Si"){ ?>
                                                <td value="1" id="calDisp" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos6[12] == "No") { ?>
                                                <td value="0" id="calDisp" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos6[12] == "-") { ?>
                                                <td value="" id="calDisp" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>
                                                
                                                <td>
                                                    <?php if($datos6[30] == "Otorgada"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estcalD">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } if($datos6[30] == "Tramite"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estcalD">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } if($datos6[30] == "NA"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estcalD">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } if($datos6[30] == "-"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estcalD">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <?php if($datos6[48] != '-'){?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos6[48];?>" class="form-control" id="evidcalD" placeholder="Número"> </div>
                                                    <?php }else{?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evidcalD" placeholder="Número"> </div>
                                                    <?php }?>
                                                </td>
                                            </tr>
                                            <!-- VALORES DE HERMETICIDAD -->
                                            <tr style="background: rgb(198,198,198);">
                                                <td>14</td>
                                                <td>Pruebas de Hermeticidad a Tanques</td>
                                                <?php if($datos6[13] == "Si"){ ?>
                                                <td value="1" id="pHerm" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos6[13] == "No") { ?>
                                                <td value="0" id="pHerm" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos6[13] == "-") { ?>
                                                <td value="" id="pHerm" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>
                                                
                                                <td>
                                                    <?php if($datos6[31] == "Otorgada"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estpHerm">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos6[31] == "Tramite"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estpHerm">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos6[31] == "NA"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estpHerm">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos6[31] == "-"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estpHerm">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }?>
                                                </td>
                                                <td>
                                                    <?php if($datos6[49] !='-'){?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos6[49];?>" class="form-control" id="evidpHerm" placeholder="Número"> </div>
                                                    <?php }else{?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evidpHerm" placeholder="Número"> </div>
                                                    <?php }?>
                                                </td>
                                            </tr>
                                            <!-- VALORES DE HERMITICIDAD A TUBERIAS -->
                                            <tr>
                                                <td>15</td>
                                                <td>Pruebas de Hermeticidad a Tuberias</td>
                                                <?php if($datos6[14] === "Si"){ ?>
                                                <td value="1" id="pHermT" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos6[14] === "No") { ?>
                                                <td value="0" id="pHermT" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos6[14] === "-") { ?>
                                                <td value="" id="pHermT" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>
                                                
                                                <td>
                                                    <?php if($datos6[32]=="Otorgada"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estpHt">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos6[32]=="Tramite"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estpHt">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos6[32]=="NA"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estpHt">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos6[32]=="-"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estpHt">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }?>
                                                </td>
                                                <td>
                                                    <?php if($datos6[50]!='-'){?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos6[50];?>" class="form-control" id="evidpHt" placeholder="Número"> </div>
                                                    <?php }else{?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evidpHt" placeholder="Número"> </div>
                                                    <?php }?>
                                                </td>
                                            </tr>
                                             <!-- DATOS DE TANQUE DE ALMACENAMIENTO -->
                                            <tr style="background: rgb(198,198,198);">
                                                <td>16</td>
                                                <td>Ficha Técnica y manual de tanque de almacenamiento</td>
                                                <?php if($datos6[15] === "Si"){ ?>
                                                <td value="1" id="tanqueA" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos6[15] === "No") { ?>
                                                <td value="0" id="tanqueA" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos6[15] === "-") { ?>
                                                <td value="" id="tanqueA" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>
                                                
                                                <td>
                                                    <?php if($datos6[33] == "Otorgada"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estTanque">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos6[33] == "Tramite"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estTanque">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos6[33] == "NA"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estTanque">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos6[33] == "-"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estTanque">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }?>
                                                </td>
                                                <td>
                                                    <?php if($datos6[51] != '-'){?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos6[51];?>" class="form-control" id="evidTanque" placeholder="Número"> </div>
                                                    <?php }else{?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evidTanque" placeholder="Número"> </div>
                                                    <?php }?>
                                                </td>
                                            </tr>
                                             <!-- DATOS DE DISPENSARIOS -->
                                            <tr>
                                                <td>17</td>
                                                <td>Ficha técnica y manual de dispensarios</td>
                                                <?php if($datos6[16] === "Si"){ ?>
                                                    <td value="1" id="dispensarios" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos6[16] === "No") { ?>
                                                    <td value="0" id="dispensarios" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos6[16] === "-") { ?>
                                                    <td value="" id="dispensarios" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>
                                                
                                                <td>
                                                    <?php if($datos6[34] == "Otorgada"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estdisp">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos6[34] == "Tramite"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estdisp">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos6[34] == "NA"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estdisp">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos6[34] == "-"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estdisp">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }?>                                                    
                                                </td>
                                                <td>
                                                    <?php if($datos6[52] !='-'){?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos6[52]; ?>" class="form-control" id="eviddisp" placeholder="Número"> </div>
                                                    <?php }else{?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="eviddisp" placeholder="Número"> </div>
                                                    <?php }?>
                                                </td>
                                            </tr>
                                            <!-- DATOS DE CONTROL DE INVENTARIOS -->
                                            <tr style="background: rgb(198,198,198);">
                                                <td>18</td>
                                                <td>Ficha técnica y manual de Control de inventarios</td>
                                                <?php if($datos6[17] === "Si"){ ?>
                                                <td value="1" id="cIventarios" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos6[17] === "No") { ?>
                                                <td value="0" id="cIventarios" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos6[17] === "-") { ?>
                                                <td value="" id="cIventarios" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>
                                                
                                                <td>
                                                    <?php if($datos6[35] == "Otorgada"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estCiv">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos6[35] == "Tramite"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estCiv">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos6[35] == "NA"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estCiv">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos6[35] == "-"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estCiv">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }?>
                                                </td>
                                                <td>
                                                    <?php if($datos6[53] !='-'){?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos6[53];?>" class="form-control" id="evidCiv" placeholder="Número"> </div>
                                                    <?php }else{?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evidCiv" placeholder="Número"> </div>
                                                    <?php }?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <?php if($datos6[53] == "-"){?>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"></div>
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                    <button id="guardarDocEst" class="btn btn-warning notika-btn-warning">Guardar</button>                   
                                </div>
                                <?php }else{ //echo "EL VALOR 71 ES: ".$datos6[71];?>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"></div>
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                    <button id="actualizarDocEst" class="btn btn-info notika-btn-info">Actualizar </button>                   
                                </div>
                                <?php } ?>
                            </div>
                            <!-- REQUISITOS LEGALES ASEA-->
                            <div class="row" style="border: black 1px solid; display: none;" id="asea">
                                <?php
                                    $sqlasea = "SELECT cumplimiento, status, evidencia FROM documento WHERE tipo = 'ASEA' AND idCESH = '".$cre."' ORDER BY num ASC";
                                    $resultadoasea = mysqli_query($con, $sqlasea);
                                    if($resultadoasea->num_rows > 0){
                                        $j = 0;
                                        while($fila = $resultadoasea->fetch_assoc()){
                                            $acumpl = $fila['cumplimiento'];
                                            $astatus = $fila['status'];
                                            //$aporce = $fila['porcentaje'];
                                            $aevid = $fila['evidencia'];

                                            $datos1 [$j] = $acumpl;
                                            $datos1 [$j+7] = $astatus;
                                            //$datos1 [$j+12] = $aporce;
                                            $datos1 [$j+14] = $aevid;
                                            $j++;
                                        }
                                    }else{  for ($i=0; $i<=20; $i++) { $datos1[$i] = "-"; } }
                                    /*echo "cumplimiento: ".$datos6[0]." status1: ".$datos6[18]." porcentaje: ".$datos6[36]." evidencia: ".$datos6[54];*/
                                ?>
                                <div class="bsc-tbl-cls" style="overflow: auto; width: 100%; height: 250px; border-bottom: black 1px solid;">
                                    <table class="table table-cl">
                                        <thead style="background: rgb(198,198,198); color: rgb(0,0,0);">
                                            <tr>
                                                <th>#</th> <th>Cumplimiento ASEA</th> <th>¿Cumple?</th> <th>Estauts</th> <!-- <th>Porcentaje</th> --> <th>Evidencia</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- DATOS DE NOM-005 -->
                                            <tr>
                                                <td>1</td>
                                                <td>Dictamen de NOM-005-ASEA-2016.</td>
                                                <?php if($datos1[0] == "Si"){ ?>
                                                <td value="1" id="c005" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos1[0] == "No") { ?>
                                                <td value="0" id="c005" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos1[0] == "-") { ?>
                                                <td value="" id="c005" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?> 

                                                <td>
                                                    <?php if($datos1[7] == "Otorgada") {?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estc005">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } if($datos1[7] == "Tramite") {?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estc005">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } if($datos1[7] == "NA") {?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estc005">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } if($datos1[7] == "-") {?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estc005">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <?php if($datos1[14] != "-"){ ?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos1[14]; ?>" class="form-control" id="evidc005" placeholder="Número de Dictamen"> </div>
                                                    <?php } else { ?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evidc005" placeholder="Número de Dictamen"> </div>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                            <!-- DATOS DE MIA -->
                                            <tr style="background: rgb(198,198,198);">
                                                <td>2</td>
                                                <td>Manifiesto Impacto Ambiental (<b>MIA</b>)</td>
                                                <?php if($datos1[1] == "Si"){ ?>
                                                <td value="1" id="cMia" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos1[1] == "No") { ?>
                                                <td value="0" id="cMia" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos1[1] == "NA") { ?>
                                                <td value="0" id="cMia" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos1[1] == "-") { ?>
                                                <td value="" id="cMia" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>                                                
                                                
                                                <td>
                                                    <?php if ($datos1[8] == "Otorgada") { ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estcMia">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } if ($datos1[8] == "Tramite") { ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estcMia">
                                                                <option value="0" style="display: none;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } if ($datos1[8] == "NA") { ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estcMia">
                                                                <option value="0" style="display: none;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } if ($datos1[8] == "-") { ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estcMia">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } ?>                                                        
                                                </td>
                                                <td> 
                                                    <?php if($datos1[15] != "-"){?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos1[15]; ?>" class="form-control" id="evidcMia" placeholder="Número de oficio"> </div>
                                                    <?php } else {?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evidcMia" placeholder="Número de oficio"> </div> 
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                            <!-- DATOS DE IP -->
                                            <tr>
                                                <td>3</td>
                                                <td>Informe Preventivo (<b>IP</b>)</td>
                                                <?php if($datos1[2] == "Si"){ ?>
                                                <td value="1" id="cIp" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos1[2] == "No") { ?>
                                                <td value="0" id="cIp" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos1[2] == "NA") { ?>
                                                <td value="0" id="cIp" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos1[2] == "-") { ?>
                                                <td value="" id="cIp" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>                                                
                                                
                                                <td>
                                                    <?php if($datos1[9] == "Otorgada") { ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estcIp">
                                                                <option value="0" style="display: none;">Selecciona una opción</option>
                                                                <option value="Otorgada" selected>Otorgada</option>
                                                                <option value="Tramite">En tramite</option>
                                                                <option value="NA">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } if($datos1[9] == "Tramite") { ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estcIp">
                                                                <option value="0" style="display: none;">Selecciona una opción</option>
                                                                <option value="Otorgada">Otorgada</option>
                                                                <option value="Tramite" selected>En tramite</option>
                                                                <option value="NA">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } if($datos1[9] == "NA") { ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estcIp">
                                                                <option value="0" style="display: none;">Selecciona una opción</option>
                                                                <option value="Otorgada">Otorgada</option>
                                                                <option value="Tramite">En tramite</option>
                                                                <option value="NA" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } if($datos1[9] == "-") { ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estcIp">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } ?>                                                            
                                                </td>
                                                <td>
                                                    <?php if($datos1[16] != "-") {?> 
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos1[16]; ?>" class="form-control" id="evidcIp" placeholder="Número de oficio"> </div>
                                                    <?php } else {?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evidcIp" placeholder="Número de oficio"> </div>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                            <!-- DATOS DE LF -->
                                            <tr style="background: rgb(198,198,198);">
                                                <td>4</td>
                                                <td>Licencia Ambiental Única (<b>LAU</b>) / Licencia de Funcionamiento(<b>LF</b>)</td>
                                                <?php if($datos1[3] == "Si"){ ?>
                                                <td value="1" id="cLf" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos1[3] == "No") { ?>
                                                <td value="0" id="cLf" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos1[3] == "-") { ?>
                                                <td value="" id="cLf" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>                                                
                                                
                                                <td>
                                                    <?php if($datos1[10] == "Otorgada") { ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estcLf">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } if($datos1[10] == "Tramite") { ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estcLf">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } if($datos1[10] == "NA") { ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estcLf">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } if($datos1[10] == "-") { ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estcLf">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } ?>                                                        
                                                </td>
                                                <td>
                                                    <?php if($datos1[17] != '-'){ ?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos1[17]; ?>" class="form-control" id="evidcLf" placeholder="Número de licencia de funcionamiento"> </div>
                                                    <?php } else { ?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evidcLf" placeholder="Número de licencia de funcionamiento"> </div>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                            <!-- DATOS DE RGRP -->
                                            <tr>
                                                <td>5</td>
                                                <td>Registro de Generador de Residuos Peligrosos (<b>GRP</b>)</td>
                                                <?php if($datos1[4] == "Si"){ ?>
                                                <td value="1" id="cGrp" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos1[4] == "No") { ?>
                                                <td value="0" id="cGrp" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos1[4] == "-") { ?>
                                                <td value="" id="cGrp" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>                                                
                                                
                                                <td>
                                                    <?php if($datos1[11] == "Otorgada"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estcGrp">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } if($datos1[11] == "Tramite") {?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estcGrp">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } if($datos1[11] == "NA") {?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estcGrp">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } if($datos1[11] == "-") {?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estcGrp">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } ?>                                                    
                                                </td>
                                                <td>
                                                    <?php if($datos1[18] != '-') { ?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos1[18]; ?>" class="form-control" id="evidcGrp" placeholder="Número de registro"> </div>
                                                    <?php } else { ?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evidcGrp" placeholder="Número de registro"> </div>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                            <!-- DATOS DE COA -->
                                            <tr style="background: rgb(198,198,198);">
                                                <td>6</td>
                                                <td>Cedula Operación Anual(<b>COA</b>)</td>
                                                <?php if($datos1[5] == "Si"){ ?>
                                                <td value="1" id="cCoa" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos1[5] == "No") { ?>
                                                <td value="0" id="cCoa" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos1[5] == "-") { ?>
                                                <td value="" id="cCoa" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>                                                
                                                
                                                <td>
                                                    <?php if($datos1[12] == "Otorgada") {?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estcCoa">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } if($datos1[12] == "Tramite") {?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estcCoa">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } if($datos1[12] == "NA") {?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estcCoa">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } if($datos1[12] == "-") {?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estcCoa">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } ?>                                                    
                                                </td>
                                                <td>
                                                    <?php if($datos1[19] != "-"){?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos1[19]; ?>" class="form-control" id="evidcCoa" placeholder="Número de bitacora"> </div>
                                                    <?php } else {?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evidcCoa" placeholder="Número de bitacora"> </div>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                            <!-- DATOS POLIZA DE SEGURO -->
                                            <tr>
                                                <td>7</td>
                                                <td>Registro de polizas Contratadas</td>
                                                <?php if($datos1[6] == "Si"){ ?>
                                                <td value="1" id="cPoliza" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos1[6] == "No") { ?>
                                                <td value="0" id="cPoliza" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos1[6] == "-") { ?>
                                                <td value="" id="cPoliza" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>                                                
                                                
                                                <td>
                                                    <?php if($datos1[13] == "Otorgada"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estcPol">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } if($datos1[13] == "Tramite") {?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estcPol">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } if($datos1[13] == "NA") {?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estcPol">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } if($datos1[13] == "-") {?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estcPol">
                                                                <option value="0" style="display: none;">Selecciona una opción</option>
                                                                <option value="Otorgada">Otorgada</option>
                                                                <option value="Tramite">En tramite</option>
                                                                <option value="Seguimiento">Seguimiento</option>
                                                            </select>
                                                        </div>
                                                    <?php } ?>                                                    
                                                </td>
                                                <td>
                                                    <?php if($datos1[20] != '-') { ?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos1[20]; ?>" class="form-control" id="evidcPol" placeholder="Número de registro"> </div>
                                                    <?php } else { ?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evidcPol" placeholder="Número de registro"> </div>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <?php if($datos1[20] == "-"){?>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"></div>
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                    <button id="guardarDocASEA" class="btn btn-warning notika-btn-warning">Guardar</button>                  
                                </div>
                                <?php }else{ ?>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"></div>
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                    <button id="actualizarDocASEA" class="btn btn-info notika-btn-info">Actualizar </button>                 
                                </div>
                                <?php } ?>
                            </div>
                            <!-- REQUISITOS LEGALES CRE-->
                            <div class="row" style="border: black 1px solid; display: none;" id="cre">
                                <?php
                                    $sqlcre = "SELECT cumplimiento, status, evidencia FROM documento WHERE tipo = 'CRE' AND idCESH = '".$cre."' ORDER BY num ASC";
                                    $resultadocre = mysqli_query($con, $sqlcre);
                                    if($resultadocre->num_rows > 0){
                                        $l = 0;
                                        while($filacre = $resultadocre->fetch_assoc()){
                                            $ccumpl = $filacre['cumplimiento'];
                                            $cstatus = $filacre['status'];
                                            //$cporce = $filacre['porcentaje'];
                                            $cevid = $filacre['evidencia'];

                                            $datos4 [$l] = $ccumpl;
                                            $datos4 [$l+10] = $cstatus;
                                            //$datos4 [$l+24] = $cporce;
                                            $datos4 [$l+20] = $cevid;
                                            $l++;
                                        }
                                    }else{  for ($i=0; $i<=29; $i++) { $datos4[$i] = "-"; } }
                                    /*echo "cre 4 cumplimiento: ".$datos4[3]." status1: ".$datos4[13]." evidencia: ".$datos4[23];*/
                                ?>
                                <div class="bsc-tbl-cls" style="overflow: auto; width: 100%; height: 250px; border-bottom: black 1px solid;">
                                    <table class="table table-cl">
                                        <thead style="background: rgb(198,198,198); color: rgb(0,0,0);">
                                            <tr>
                                                <th>#</th> <th>Cumplimiento CRE</th> <th>¿Cumple?</th> <th>Estatus</th> <!-- <th>Porcentaje</th> --> <th>Evidencia</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Reporte Diario (Volúmenes)</td>
                                                <?php if($datos4[0] == "Si"){ ?>
                                                    <td value="1" id="rDiariov" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos4[0] == "No") { ?>
                                                    <td value="0" id="rDiariov" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos4[0] == "-") { ?>
                                                    <td value="" id="rDiariov" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?> 

                                                <td>
                                                    <?php if($datos4[10] == "Otorgada"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estRdia">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos4[10] == "Tramite"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estRdia">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos4[10] == "NA"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estRdia">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos4[10] == "-"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estRdia">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }?>                                                    
                                                </td>
                                                <td>
                                                    <?php if($datos4[20] !='-'){?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos4[20];?>" class="form-control" id="evidRdia" placeholder="Número"> </div>
                                                    <?php }else{?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evidRdia" placeholder="Número"> </div>
                                                    <?php }?>
                                                </td>
                                            </tr>
                                            <!-- DATOS DE REPORTE DE PRECIOS -->
                                            <tr style="background: rgb(198,198,198);">
                                                <td>2</td>
                                                <td>Reporte Precios</td>
                                                <?php if($datos4[1] == "Si"){ ?>
                                                    <td value="1" id="rDiariop" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos4[1] == "No") { ?>
                                                    <td value="0" id="rDiariop" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos4[1] == "-") { ?>
                                                    <td value="" id="rDiariop" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>                                                
                                                
                                                <td>
                                                    <?php if($datos4[11] == "Otorgada"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estRdiap">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } if($datos4[11] == "Tramite") {?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estRdiap">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } if($datos4[11] == "NA") {?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estRdiap">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } if($datos4[11] == "-") {?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estRdiap">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } ?>                                                    
                                                </td>
                                                <td>
                                                    <?php if($datos4[21] != "-"){ ?> 
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos4[21]; ?>" class="form-control" id="evidRdiap" placeholder="Número"> </div>
                                                    <?php } else {?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evidRdiap" placeholder="Número"> </div>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                            <!-- DICTAMEN DE LA 16 -->
                                            <tr>
                                                <td>3</td>
                                                <td>Dictamen de Calidad de petrolíferos<br>(<b>NOM-016-CRE-2016</b>)</td>
                                                <?php if($datos4[2] == "Si"){ ?>
                                                <td value="1" id="016" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos4[2] == "No") { ?>
                                                <td value="0" id="016" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos4[2] == "-") { ?>
                                                <td value="" id="016" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>                                                
                                                
                                                <td>
                                                    <?php if($datos4[12] == "Otorgada"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="est016">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos4[12] == "Tramite"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="est016">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos4[12] == "NA"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="est016">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos4[12] == "-"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="est016">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } ?>                                                    
                                                </td>
                                                <td>
                                                    <?php if($datos4[22] != "-"){?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos4[22]; ?>" class="form-control" id="evid016" placeholder="Número"> </div>
                                                    <?php } else { ?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evid016" placeholder="Número"> </div>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                            <!-- PAGO DE SUPERVISION -->
                                            <tr style="background: rgb(198,198,198);">
                                                <td>4</td>
                                                <td>Reporte de Pagos Supervisión de permisos<br>(Derechos, Productos y Aprovechamiento)</td>
                                                <?php if($datos4[3] == "Si"){ ?>
                                                <td value="1" id="rPsupervi" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos4[3] == "No") { ?>
                                                <td value="0" id="rPsupervi" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos4[3] == "-") { ?>
                                                <td value="" id="rPsupervi" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>
                                                
                                                <td>
                                                    <?php if($datos4[13] == "Otorgada"){ ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estrPs">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos4[13] == "Tramite"){ ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estrPs">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos4[13] == "NA"){ ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estrPs">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos4[13] == '-'){ ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estrPs">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } ?>                                                    
                                                </td>
                                                <td>
                                                    <?php if($datos4[23] != '-'){?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos4[23]; ?>" class="form-control" id="evidrPs" placeholder="Número"> </div>
                                                    <?php } else {?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evidrPs" placeholder="Número"> </div>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                            <!-- POLIZA SEGURO -->
                                            <tr>
                                                <td>5</td>
                                                <td>Poliza anual vigente de seguro</td>
                                                <?php if($datos4[4] == "Si"){ ?>
                                                <td value="1" id="polizAnual" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos4[4] == "No") { ?>
                                                <td value="0" id="polizAnual" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos4[4] == "-") { ?>
                                                <td value="" id="polizAnual" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>                                                
                                                
                                                <td>
                                                    <?php if($datos4[14] == "Otorgada"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estPoliza">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos4[14] == "Tramite"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estPoliza">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos4[14] == "NA"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estPoliza">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos4[14] == '-'){ ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estPoliza">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }?>                                                    
                                                </td>
                                                <td>
                                                    <?php if($datos4[24] != "-"){?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos4[24]; ?>" class="form-control" id="evidPoliza" placeholder="Número"> </div> 
                                                    <?php } else {?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evidPoliza" placeholder="Número"> </div> 
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                            <!-- REPORTE DE QUEJAS -->
                                            <tr style="background: rgb(198,198,198);">
                                                <td>6</td>
                                                <td>Reporte de Quejas</td>
                                                <?php if($datos4[5] == "Si"){ ?>
                                                    <td value="1" id="rQue" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos4[5] == "No") { ?>
                                                    <td value="0" id="rQue" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos4[5] == "-") { ?>
                                                    <td value="" id="rQue" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>                                                
                                                
                                                <td>
                                                    <?php if($datos4[15] == "Otorgada"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estrQ">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos4[15] == "Tramite"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estrQ">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos4[15] == "NA"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estrQ">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos4[15] == '-'){ ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estrQ">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } ?>                                                    
                                                </td>
                                                <td>
                                                    <?php if($datos4[25] !='-'){ ?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos4[25]; ?>" class="form-control" id="evidrQ" placeholder="Número"> </div>
                                                    <?php } else { ?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evidrQ" placeholder="Número"> </div>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                            <!-- FACTURAS DE PROCEDENCIA -->
                                            <tr>
                                                <td>7</td>
                                                <td>Procedencia del producto (facturas)</td>
                                                <?php if($datos4[6] == "Si"){ ?>
                                                    <td value="1" id="factProd" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos4[6] == "No") { ?>
                                                    <td value="0" id="factProd" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos4[6] == "-") { ?>
                                                    <td value="" id="factProd" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>
                                                
                                                <td>
                                                    <?php if($datos4[16]=="Otorgada"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estFacP">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos4[16]=="Tramite"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estFacP">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos4[16]=="NA"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estFacP">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos4[16]=="-"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estFacP">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }?>
                                                </td>
                                                <td>
                                                    <?php if($datos4[26] !='-'){?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos4[26];?>" class="form-control" id="evidFacP" placeholder="Número"> </div>
                                                    <?php }else{?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evidFacP" placeholder="Número"> </div>
                                                    <?php }?>
                                                </td>
                                            </tr>
                                            <!-- REPORTE DE INCIDENTES -->
                                            <tr style="background: rgb(198,198,198);">
                                                <td>8</td>
                                                <td>Reporte de inicidentes o emergencias</td>
                                                <?php if($datos4[7] == "Si"){ ?>
                                                    <td value="1" id="incidentes" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos4[7] == "No") { ?>
                                                    <td value="0" id="incidentes" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos4[7] == "-") { ?>
                                                    <td value="" id="incidentes" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>                                                
                                                
                                                <td>
                                                    <?php if($datos4[17]=="Otorgada"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estInc">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos4[17]=="Tramite"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estInc">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos4[17]=="NA"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estInc">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos4[17]=="-"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estInc">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }?>
                                                </td>
                                                <td>
                                                    <?php if($datos4[27]!='-'){ ?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos4[27];?>" class="form-control" id="evidInc" placeholder="Número"> </div>
                                                    <?php }else{ ?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evidInc" placeholder="Número"> </div>
                                                    <?php }?>
                                                </td>
                                            </tr>
                                            <!-- ANUNCIO PL -->
                                            <tr>
                                                <td>9</td>
                                                <td>Anuncio Independiente<br>(número de permiso CRE PL/XX/EXP/ES/20XX)</td>
                                                <?php if($datos4[8] == "Si"){ ?>
                                                <td value="1" id="anInde" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos4[8] == "No") { ?>
                                                <td value="0" id="anInde" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos4[8] == "-") { ?>
                                                <td value="" id="anInde" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>
                                                
                                                <td>
                                                    <?php if($datos4[18] == "Otorgada"){ ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estAnI">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos4[18] == "Tramite"){ ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estAnI">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos4[18] == "NA"){ ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estAnI">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos4[18] == "-"){ ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estAnI">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }?>                                                    
                                                </td>
                                                <td>
                                                    <?php if($datos4[28] != "-"){?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos4[28];?>" class="form-control" id="evidAnI" placeholder="Número"> </div>
                                                    <?php }else{ ?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evidAnI" placeholder="Número"> </div>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                            <!-- SGM -->
                                            <tr style="background: rgb(198,198,198);">
                                                <td>10</td>
                                                <td>Sistema de Gestión de las mediciones <b>(SGM)</b> </td>
                                                <?php if($datos4[9] == "Si"){ ?>
                                                    <td value="1" id="sgm" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos4[9] == "No") { ?>
                                                    <td value="0" id="sgm" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos4[9] == "-") { ?>
                                                    <td value="" id="sgm" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>                                                
                                                
                                                <td>
                                                    <?php if($datos4[19]=="Otorgada"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estSgm">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos4[19]=="Tramite"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estSgm">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos4[19]=="NA"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estSgm">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos4[19]=="-"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" name="" id="estSgm">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }?>
                                                </td>
                                                <td>
                                                    <?php if($datos4[29]!='-'){ ?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos4[29];?>" class="form-control" id="evidSgm" placeholder="Número"> </div>
                                                    <?php }else{ ?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evidSgm" placeholder="Número"> </div>
                                                    <?php }?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <?php if($datos4[29] == "-"){?>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"></div>
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                    <button id="guardarDoCre" class="btn btn-warning notika-btn-warning">Guardar</button>                   
                                </div>
                                <?php }else{ ?>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"></div>
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                    <button id="actualizarDoCre" class="btn btn-info notika-btn-info">Actualizar </button>                   
                                </div>
                                <?php } ?>
                            </div>
                            <!-- REQUISITOS LEGALES PROFECO-->
                            <div class="row" style="border: black 1px solid; display: none;" id="profeco">
                                <?php
                                    $sqlprofe = "SELECT cumplimiento, status, evidencia FROM documento WHERE tipo = 'PROFECO' AND idCESH = '".$cre."' ORDER BY num ASC";
                                    $resultadoprofe = mysqli_query($con, $sqlprofe);
                                    if($resultadoprofe->num_rows > 0){
                                        $n = 0;
                                        while($filadoc = $resultadoprofe->fetch_assoc()){
                                            $pfdcumpl = $filadoc['cumplimiento'];
                                            $pfstatus = $filadoc['status'];                                            
                                            $pfevid = $filadoc['evidencia'];

                                            $datos2 [$n] = $pfdcumpl;
                                            $datos2 [$n+4] = $pfstatus;                                            
                                            $datos2 [$n+8] = $pfevid;
                                            $n++;
                                        }
                                    }else{  for ($i=0; $i<=11; $i++) { $datos2[$i] = "-"; } }
                                    //echo "datos: - ".$datos2[5];
                                ?>
                                <div class="bsc-tbl-cls" style="border-bottom: black 1px solid;">
                                    <table class="table table-cl">
                                        <thead style="background: rgb(198,198,198); color: rgb(0,0,0);">
                                            <tr>
                                                <th>#</th> <th>Cumplimiento PROFECO</th> <th>¿Cumple?</th> <th>Estatus</th> <!-- <th>Porcentaje</th> --> <th>Evidencia</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- VERIFICACION PERIODICA -->
                                            <tr>
                                                <td>1</td>
                                                <td>Verificación periódica de dispensarios </td>
                                                <?php if($datos2[0] == "Si"){ ?>
                                                <td value="1" id="vPerdisp" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos2[0] == "No") { ?>
                                                <td value="0" id="vPerdisp" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos2[0] == "-") {?>         
                                                <td value="" id="vPerdisp" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>                                        
                                                
                                                <td>
                                                    <?php if($datos2[4] == "Otorgada") {?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estvPd">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } if ($datos2[4] == "Tramite") { ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estvPd">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } if ($datos2[4] == "NA") { ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estvPd">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } if ($datos2[4] == "-") { ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estvPd">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } ?>
                                                </td>
                                                <td> 
                                                    <?php if($datos2[8] !='-'){ ?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos2[8];?>" class="form-control" id="evidvPd" placeholder="Número"> </div> 
                                                    <?php } else {?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evidvPd" placeholder="Número"> </div> 
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                            <!-- CONTROL A DISTANCIA -->
                                            <tr style="background: rgb(198,198,198);">
                                                <td>2</td>
                                                <td>Reporte de control a distancia </td>
                                                <?php if($datos2[1] == "Si"){ ?>
                                                <td value="1" id="rControldis" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos2[1] == "No") { ?>
                                                <td value="0" id="rControldis" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos2[1] == "-") {?>   
                                                <td value="" id="rControldis" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>                                            
                                                
                                                <td>
                                                    <?php if($datos2[5] == "Otorgada") {?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estrCtd">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } if($datos2[5] == "Tramite") {?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estrCtd">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } if($datos2[5] == "NA") {?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estrCtd">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } if($datos2[5] == "-") {?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estrCtd">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <?php if($datos2[9] !='-'){ ?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos2[9];?>" class="form-control" id="evidrCtd" placeholder="Número"> </div> </td>
                                                    <?php } else {?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evidrCtd" placeholder="Número"> </div> </td>
                                                    <?php } ?> 
                                                </td>   
                                            </tr>
                                            <!-- CERTIFICADO MODELO PROTOTICO -->
                                            <tr>
                                                <td>3</td>
                                                <td>Certificado Modelo Prototipo (NOM-005-SCFI-2017)</td>
                                                <?php if($datos2[2] == "Si"){ ?>
                                                <td value="1" id="prototipoi" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos2[2] == "No") { ?>
                                                <td value="0" id="prototipoi" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos2[2] == "-") {?>   
                                                <td value="" id="prototipoi" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>                                            
                                                
                                                <td>
                                                    <?php if($datos2[6] == "Otorgada") {?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estproto">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } if($datos2[6] == "Tramite") {?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estproto">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } if($datos2[6] == "NA") {?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estproto">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } if($datos2[6] == "-") {?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estproto">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <?php if($datos2[10] !='-'){ ?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos2[10];?>" class="form-control" id="evidproto" placeholder="Número"> </div> </td>
                                                    <?php } else {?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evidproto" placeholder="Número"> </div> </td>
                                                    <?php } ?> 
                                                </td>   
                                            </tr>
                                            <!-- INOCUIDAD -->
                                            <tr style="background: rgb(198,198,198);">
                                                <td>4</td>
                                                <td>Certificado de Inocuidad (NOM-185-SCFI-2017)</td>
                                                <?php if($datos2[3] == "Si"){ ?>
                                                <td value="1" id="cIno" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos2[3] == "No") { ?>
                                                <td value="0" id="cIno" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos2[3] == "-") {?>   
                                                <td value="" id="cIno" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>                                            
                                                
                                                <td>
                                                    <?php if($datos2[7] == "Otorgada") {?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estcIno">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } if($datos2[7] == "Tramite") {?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estcIno">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } if($datos2[7] == "NA") {?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estcIno">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } if($datos2[7] == "-") {?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estcIno">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <?php if($datos2[11] !='-'){ ?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos2[11];?>" class="form-control" id="evidcIno" placeholder="Número"> </div> </td>
                                                    <?php } else {?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evidcIno" placeholder="Número"> </div> </td>
                                                    <?php } ?> 
                                                </td>   
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <?php if($datos2[11] == "-"){?>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"></div>
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                    <button id="guardarDocp" class="btn btn-warning notika-btn-warning">Guardar</button>                   
                                </div>
                                <?php }else{ ?>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"></div>
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                    <button id="actualizarDocP" class="btn btn-info notika-btn-info">Actualizar </button>                   
                                </div>
                                <?php } ?>
                            </div>
                            <!-- REQUISITOS LEGALES CIVIL-->
                            <div class="row" style="border: black 1px solid; display: none;" id="pc">
                                <?php
                                    $sqlpc = "SELECT cumplimiento, status, evidencia FROM documento WHERE tipo = 'Protección Civil' AND idCESH = '".$cre."' ORDER BY num ASC";
                                    $resultadopc = mysqli_query($con, $sqlpc);
                                    if($resultadopc->num_rows > 0){
                                        $k = 0;
                                        //echo "Si encuentra algo";
                                        while($filapc = $resultadopc->fetch_assoc()){
                                            $pcumpl = $filapc['cumplimiento'];
                                            $pcstatus = $filapc['status'];
                                            $pcevid = $filapc['evidencia'];

                                            $datos3 [$k] = $pcumpl;
                                            $datos3 [$k+2] = $pcstatus;
                                            $datos3 [$k+4] = $pcevid;
                                            $k++;
                                        }
                                    }else{  for ($i=0; $i<=5; $i++) { $datos3[$i] = "-"; } }
                                    //echo "SQL".$sqlpc." : cumplimiento".$datos3[0]." - ".$datos3[1];
                                ?>
                                <div class="bsc-tbl-cls" style="overflow: auto; width: 100%; height: 250px; border-bottom: black 1px solid;">
                                    <table class="table table-cl">
                                        <thead style="background: rgb(198,198,198); color: rgb(0,0,0);">
                                            <tr>
                                                <th>#</th> <th>Cumplimiento Protección Civil</th> <th>¿Cumple?</th> <th>Estatus</th> <!-- <th>Porcentaje</th> --> <th>Evidencia</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- DATOS DE VISTO BUENO -->
                                            <tr>
                                                <td>1</td>
                                                <td>Visto Bueno</td>
                                                <?php if($datos3[0] == "Si"){ ?>
                                                <td value="1" id="vBueno" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos3[0] == "No") { ?>
                                                <td value="0" id="vBueno" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos3[0] == "-") { ?>
                                                <td value="" id="vBueno" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>                                                
                                                
                                                <td>
                                                    <?php if($datos3[2] == "Otorgada") { ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estVb">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                     <?php } if($datos3[2] == "Tramite") { ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estVb">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                     <?php } if($datos3[2] == "NA") { ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estVb">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                     <?php } if($datos3[2] == "-") { ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estVb">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <?php if($datos3[4] != "-"){ ?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos3[4]; ?>" class="form-control" id="evidVb" placeholder="Número"> </div>
                                                    <?php } else { ?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evidVb" placeholder="Número"> </div>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                            <!-- DATOS DE AUTO DECLARATORIA -->
                                            <tr style="background: rgb(198,198,198);">
                                                <td>2</td>
                                                <td>Auto declaratoria</td>
                                                <?php if($datos3[1] == "Si"){ ?>
                                                <td value="1" id="cdecla" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos3[1] == "No") { ?>
                                                <td value="0" id="cdecla" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos3[1] == "-") { ?>
                                                <td value="" id="cdecla" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>                                                
                                                
                                                <td> 
                                                    <?php if($datos3[3] == "Otorgada"){  ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estCdc">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } if ($datos3[3] == "Tramite"){ ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estCdc">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } if ($datos3[3] == "NA"){ ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estCdc">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } if ($datos3[3] == "-"){ ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estCdc">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <?php if($datos3[5] != "-"){?>
                                                    <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos3[5]; ?>" class="form-control" id="evidCdc" placeholder="Número"> </div>
                                                    <?php } else {?>
                                                    <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evidCdc" placeholder="Número"> </div>
                                                    <?php }?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <?php if($datos3[5] == "-"){?>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"></div>
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                    <button id="guardarDocPc" class="btn btn-warning notika-btn-warning">Guardar</button>                   
                                </div>
                                <?php }else{ ?>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"></div>
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                    <button id="actualizarDocPc" class="btn btn-info notika-btn-info">Actualizar </button>                   
                                </div>
                                <?php } ?>
                            </div>
                            <!-- REQUISITOS LEGALES ECONOMIA -->
                            <div class="row" style="border: black 1px solid; display: none;" id="se">
                                <?php
                                    $sqlse = "SELECT cumplimiento, status, evidencia FROM documento WHERE tipo = 'Sec. Economia' AND idCESH = '".$cre."' ORDER BY num ASC";
                                    $resultadose = mysqli_query($con, $sqlse);
                                    if($resultadose->num_rows > 0){
                                        $l = 0;
                                        while($filase = $resultadose->fetch_assoc()){
                                            $secumpl = $filase['cumplimiento'];
                                            $sestatus = $filase['status'];
                                            $seevid = $filase['evidencia'];

                                            $datos7 [$l] = $secumpl;
                                            $datos7 [$l+1] = $sestatus;
                                            $datos7 [$l+2] = $seevid;
                                            $l++;
                                        }
                                    }else{  for ($i=0; $i<=3; $i++) { $datos7[$i] = "-"; } }
                                ?>
                                <div class="bsc-tbl-cls" style="overflow: auto; width: 100%; height: 250px; border-bottom: black 1px solid;">
                                    <table class="table table-cl">
                                        <thead style="background: rgb(198,198,198); color: rgb(0,0,0);">
                                            <tr>
                                                <th>#</th> <th>Cumplimiento Secretaría de Economía</th> <th>¿Cumple?</th> <th>Estatus</th> <!-- <th>Porcentaje</th> --> <th>Evidencia</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Informe de Contenido Nacional (Permisos)</td>
                                                <?php if($datos7[0] == "Si"){ ?>
                                                <td value="1" id="conNac"  class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos7[0] == "No") { ?>
                                                <td value="0" id="conNac" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos7[0] == "-") { ?>
                                                <td value="" id="conNac" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>                                                
                                                
                                                <td>
                                                    <?php if($datos7[1] == "Otorgada"){ ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estconNac">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } if($datos7[1] == "Tramite"){ ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estconNac">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } if($datos7[1] == "NA"){ ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estconNac">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } if($datos7[1] == "-"){ ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="estconNac">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <?php if($datos7[2] != '-') {?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos7[2];?>" class="form-control" id="evidconNac" placeholder="Número"> </div>
                                                    <?php } else {?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evidconNac" placeholder="Número"> </div>
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <?php if($datos7[2] == "-"){?>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"></div>
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                    <button id="guardarDocSe" class="btn btn-warning notika-btn-warning">Guardar</button>                   
                                </div>
                                <?php }else{ ?>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"></div>
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                    <button id="actualizarDocSe" class="btn btn-info notika-btn-info">Actualizar </button>                   
                                </div>
                                <?php } ?>
                            </div>
                            <!-- REQUISITOS LEGALES STPS -->
                            <div class="row" style="border: black 1px solid; display: none;" id="stps">
                                <?php
                                    $sqlstps = "SELECT cumplimiento, status, evidencia FROM documento WHERE tipo = 'STPS' AND idCESH = '".$cre."' ORDER BY num ASC";
                                    $resultadostps = mysqli_query($con, $sqlstps);
                                    if($resultadostps->num_rows > 0){
                                        $m = 0;
                                        while($filastps = $resultadostps->fetch_assoc()){
                                            $stpscumpl = $filastps['cumplimiento'];
                                            $stpsstatus = $filastps['status'];
                                            //$stpsporce = $filastps['porcentaje'];
                                            $stpsevid = $filastps['evidencia'];

                                            $datos5 [$m] = $stpscumpl;
                                            $datos5 [$m+18] = $stpsstatus;
                                            //$datos5 [$m+2] = $stpsporce;
                                            $datos5 [$m+36] = $stpsevid;
                                            $m++;
                                        }
                                    }else{  for ($i=0; $i<=53; $i++) { $datos5[$i] = "-"; } }
                                    //echo "cumplimiento: ".$datos5[15]." estatus: ".$datos5[31]." evidencia: ".$datos5[45];
                                ?>
                                <div class="bsc-tbl-cls" style="overflow: auto; width: 100%; height: 250px; border-bottom: black 1px solid;">
                                    <table class="table table-cl">
                                        <thead style="background: rgb(198,198,198); color: rgb(0,0,0);">
                                            <tr>
                                                <th>#</th> <th>Cumplimiento STPS</th> <th>¿Cumple?</th> <th>Estatus </th> <!-- <th>Porcentaje</th> --> <th>Evidencia</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Edificios, locales, instalaciones y áreas en los centros de trabajo<br><b>NOM-001-STPS-2008.</b></td>
                                                <?php if($datos5[0] == "Si"){ ?>
                                                    <td value="1" id="001stps" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos5[0] == "No") { ?>
                                                    <td value="0" id="001stps" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos5[0] == "-") { ?>
                                                    <td value="" id="001stps" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>                                                
                                                <td>
                                                    <?php if($datos5[18]=="Otorgada"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est001">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[18]=="Tramite"){ ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est001">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[18]=="NA"){ ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est001">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[18]=="-"){ ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est001">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <?php if($datos5[36]!="-"){?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos5[36];?>" class="form-control" id="evid001" placeholder="Número"> </div>
                                                    <?php }else{?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evid001" placeholder="Número"> </div>
                                                    <?php }?>
                                                </td>
                                            </tr>
                                            <tr style="background: rgb(198,198,198);">
                                                <td>2</td>
                                                <td>Condiciones de seguridad-Prevención y protección contra incendios en los centros de trabajo<br><b>NOM-002-STPS-2010.</b></td>
                                                <?php if($datos5[1] == "Si"){ ?>
                                                <td value="1" id="002stps" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos5[1] == "No") { ?>
                                                <td value="0" id="002stps" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos5[1] == "-") { ?>
                                                <td value="" id="002stps" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>

                                                <td>
                                                    <?php if($datos5[19] == "Otorgada"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est002">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[19] == "Tramite"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est002">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[19] == "NA"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est002">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[19] == "-"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est002">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }?>                                                    
                                                </td>
                                                <td>
                                                    <?php if($datos5[37]!='-'){?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos5[37];?>" class="form-control" id="evid002" placeholder="Número"> </div>
                                                    <?php }else{?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evid002" placeholder="Número"> </div>
                                                    <?php }?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Sistemas de protección y dispositivos de seguridad en la maquinaria y equipo que se utilice en los centros de trabajo<br><b>NOM-004-STPS-1999.</b></td>
                                                <?php if($datos5[2] == "Si"){ ?>
                                                    <td value="1" id="004stps" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos5[2] == "No") { ?>
                                                    <td value="0" id="004stps" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos5[2] == "-") { ?>
                                                    <td value="" id="004stps" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>                                                
                                                <td>
                                                    <?php if($datos5[20]=="Otorgada"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est004">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[20]=="Tramite"){ ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est004">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[20]=="NA"){ ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est004">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[20]=="-"){ ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est004">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <?php if($datos5[38]!="-"){?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos5[38];?>" class="form-control" id="evid004" placeholder="Número"> </div>
                                                    <?php }else{?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evid004" placeholder="Número"> </div>
                                                    <?php }?>
                                                </td>
                                            </tr>
                                            <tr style="background: rgb(198,198,198);">
                                                <td>4</td>
                                                <td>Relativa a las condiciones de seguridad e higiene en los centros de trabajo para el manejo, transporte y almacenamiento de sustancias químicas peligrosas<br><b>NOM-005-STPS-1998.</b></td>
                                                <?php if($datos5[3] == "Si"){ ?>
                                                <td value="1" id="005stps" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos5[3] == "No") { ?>
                                                <td value="0" id="005stps" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos5[3] == "-") { ?>
                                                <td value="" id="005stps" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>

                                                <td>
                                                    <?php if($datos5[21] == "Otorgada"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est005">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[21] == "Tramite"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est005">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[21] == "NA"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est005">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[21] == "-"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est005">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }?>                                                    
                                                </td>
                                                <td>
                                                    <?php if($datos5[39]!='-'){?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos5[39];?>" class="form-control" id="evid005" placeholder="Número"> </div>
                                                    <?php }else{?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evid005" placeholder="Número"> </div>
                                                    <?php }?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Manejo y almacenamiento de materiales-Condiciones de seguridad y salud en el trabajo<br><b>NOM-006-STPS-2014.</b></td>
                                                <?php if($datos5[4] == "Si"){ ?>
                                                    <td value="1" id="006stps" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos5[4] == "No") { ?>
                                                    <td value="0" id="006stps" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos5[4] == "-") { ?>
                                                    <td value="" id="006stps" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>                                                
                                                <td>
                                                    <?php if($datos5[22]=="Otorgada"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est006">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[22]=="Tramite"){ ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est006">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[22]=="NA"){ ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est006">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[22]=="-"){ ?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est006">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <?php if($datos5[40]!="-"){?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos5[40];?>" class="form-control" id="evid006" placeholder="Número"> </div>
                                                    <?php }else{?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evid006" placeholder="Número"> </div>
                                                    <?php }?>
                                                </td>
                                            </tr>
                                            <tr style="background: rgb(198,198,198);">
                                                <td>6</td>
                                                <td>Condiciones de seguridad para realizar trabajos en altura<br><b>NOM-009-STPS-2011.</b></td>
                                                <?php if($datos5[5] == "Si"){ ?>
                                                    <td value="1" id="009stps" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos5[5] == "No") { ?>
                                                    <td value="0" id="009stps" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos5[5] == "-") { ?>
                                                    <td value="" id="009stps" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>                                                
                                                <td>
                                                    <?php if($datos5[23] == "Otorgada"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est009">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[23] == "Tramite"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est009">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[23] == "NA"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est009">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[23] == "-"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est009">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }?>
                                                </td>
                                                <td>
                                                    <?php if($datos5[41] !="-"){?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos5[41];?>" class="form-control" id="evid009" placeholder="Número"> </div>
                                                    <?php }else{?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evid009" placeholder="Número"> </div>
                                                    <?php }?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Evaluación de ruido<br><b>NOM-011-STPS-2001</b></td>
                                                <?php if($datos5[6] == "Si"){ ?>
                                                    <td value="1" id="011stps" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos5[6] == "No") { ?>
                                                    <td value="0" id="011stps" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos5[6] == "-") { ?>
                                                    <td value="" id="011stps" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>                                                
                                                <td>
                                                    <?php if($datos5[24] =="Otorgada"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est011">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[24] =="Tramite"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est011">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[24] =="NA"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est011">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[24] =="-"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est011">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }?>
                                                </td>
                                                <td> 
                                                    <?php if($datos5[42] !="-"){?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos5[42];?>" class="form-control" id="evid011" placeholder="Número"> </div>
                                                    <?php }else{?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evid011" placeholder="Número"> </div>
                                                    <?php }?>
                                                </td>
                                            </tr>
                                            <tr style="background: rgb(198,198,198);">
                                                <td>8</td>
                                                <td>Equipo de protección personal-Selección, uso y manejo en los centros de trabajo<br><b>NOM-017-STPS-2008.</b></td>
                                                <?php if($datos5[7] == "Si"){ ?>
                                                    <td value="1" id="017stps" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos5[7] == "No") { ?>
                                                    <td value="0" id="017stps" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos5[7] == "-") { ?>
                                                    <td value="" id="017stps" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>

                                                <td>
                                                    <?php if($datos5[25] == "Otorgada"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est017">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[25] == "Tramite"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est017">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[25] == "NA"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est017">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[25] == "-"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est017">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }?>
                                                </td>
                                                <td>
                                                    <?php if($datos5[43] !="-"){?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos5[43];?>" class="form-control" id="evid017" placeholder="Número"> </div>
                                                    <?php }else{?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evid017" placeholder="Número"> </div>
                                                    <?php }?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>Sistema armonizado para la identificación y comunicación de peligros y riesgos por sustancias químicas peligrosas en los centros de trabajo<br><b>NOM-018-STPS-2015.</b></td>
                                                <?php if($datos5[8] == "Si"){ ?>
                                                    <td value="1" id="018stps" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos5[8] == "No") { ?>
                                                    <td value="0" id="018stps" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos5[8] == "-") { ?>
                                                    <td value="" id="018stps" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>                                                
                                                <td>
                                                    <?php if($datos5[26] == "Otorgada"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est018">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[26] == "Tramite"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est018">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[26] == "NA"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est018">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[26] == "-"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est018">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }?>
                                                </td>
                                                <td> 
                                                    <?php if($datos5[44] !='-'){?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos5[44];?>" class="form-control" id="evid018" placeholder="Número"> </div>
                                                    <?php }else{?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evid018" placeholder="Número"> </div>
                                                    <?php }?>
                                                </td>
                                            </tr>
                                            <tr style="background: rgb(198,198,198);">
                                                <td>10</td>
                                                <td>Constitución, integración, organización y funcionamiento de las comisiones de seguridad e higiene<br><b>NOM-019-STPS-2011.</b></td>
                                                <?php if($datos5[9] == "Si"){ ?>
                                                <td value="1" id="019stps" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos5[9] == "No") { ?>
                                                <td value="0" id="019stps" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos5[9] == "-") { ?>
                                                <td value="" id="019stps" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>
                                                
                                                <td>
                                                    <?php if($datos5[27] == "Otorgada"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est019">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[27] == "Tramite"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est019">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[27] == "NA"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est019">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[27] == "-"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est019">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php } ?>                                                    
                                                </td>
                                                <td>
                                                    <?php if($datos5[45] !='-'){?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos5[45];?>" class="form-control" id="evid019" placeholder="Número"> </div>
                                                    <?php }else{?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evid019" placeholder="Número"> </div>
                                                    <?php }?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>Recipientes sujetos a presión, recipientes criogénicos, y generadores de vapor o calderas<br><b>NOM-020-STPS-2011</b></td>
                                                <?php if($datos5[10] == "Si"){ ?>
                                                <td value="1" id="020stps" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos5[10] == "No") { ?>
                                                <td value="0" id="020stps" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos5[10] == "-") { ?>
                                                <td value="" id="020stps" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>                                                
                                                
                                                <td>
                                                    <?php if($datos5[28]=="Otorgada"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est020">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[28]=="Tramite"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est020">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[28]=="NA"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est020">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[28]=="-"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est020">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }?>                                                    
                                                </td>
                                                <td>
                                                    <?php if($datos5[46] !='-'){?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos5[46];?>" class="form-control" id="evid020" placeholder="Número"> </div>
                                                    <?php }else{?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evid020" placeholder="Número"> </div>
                                                    <?php }?>
                                                </td>
                                            </tr>
                                            <tr style="background: rgb(198,198,198);">
                                                <td>12</td>
                                                <td>Evaluación de electricidad estática en los centros de trabajo<br><b>NOM-022-STPS-2008</b></td>
                                                <?php if($datos5[11] == "Si"){ ?>
                                                <td value="1" id="022stps" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos5[11] == "No") { ?>
                                                <td value="0" id="022stps" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos5[11] == "-") { ?>
                                                <td value="" id="022stps" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>

                                                <td>
                                                    <?php if($datos5[29] == "Otorgada"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est022">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[29] == "Tramite"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est022">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[29] == "NA"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est022">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[29] == "-"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est022">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }?>
                                                </td>
                                                <td>
                                                    <?php if($datos5[47] !="-"){?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos5[47];?>" class="form-control" id="evid022" placeholder="Número"> </div>
                                                    <?php }else{?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evid022" placeholder="Número"> </div>
                                                    <?php }?>
                                                </td>
                                            </tr>
                                            <tr >
                                                <td>13</td>
                                                <td>Evaluación de las condiciones de iluminación<br><b>NOM-025-STPS-2008</b></td>
                                                <?php if($datos5[12] == "Si"){ ?>
                                                    <td value="1" id="025stps" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos5[12] == "No") { ?>
                                                    <td value="0" id="025stps" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos5[12] == "-") { ?>
                                                    <td value="" id="025stps" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>                                                
                                                <td>
                                                    <?php if($datos5[30] == "Otorgada"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est025">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[30] == "Tramite"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est025">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[30] == "NA"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est025">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[30] == "-"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est025">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }?>                                                
                                                </td>
                                                <td>
                                                    <?php if($datos5[48] !="-"){?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos5[48];?>" class="form-control" id="evid025" placeholder="Número"> </div>
                                                    <?php }else{?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evid025" placeholder="Número"> </div>
                                                    <?php }?>
                                                </td>
                                            </tr>
                                            <tr style="background: rgb(198,198,198);">
                                                <td>14</td>
                                                <td>Colores y señales de seguridad e higiene, e identificación de riesgos por fluidos conducidos en tuberías<br><b>NOM-026-STPS-2008.</b></td>
                                                <?php if($datos5[13] == "Si"){ ?>
                                                <td value="1" id="026stps" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos5[13] == "No") { ?>
                                                <td value="0" id="026stps" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos5[13] == "-") { ?>
                                                <td value="" id="026stps" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>
                                               
                                                <td>
                                                    <?php if($datos5[31] == "Otorgada"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est026">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[31] == "Tramite"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est026">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[31] == "NA"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est026">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[31] == "-"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est026">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }?>
                                                </td>
                                                <td>
                                                    <?php if($datos5[49] !="-"){?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos5[49];?>" class="form-control" id="evid026" placeholder="Número"> </div>
                                                    <?php }else{?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evid026" placeholder="Número"> </div>
                                                    <?php }?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>15</td>
                                                <td>Mantenimiento de las instalaciones eléctricas en los centros de trabajo<br><b>NOM-029-STPS-2011.</b></td>
                                                <?php if($datos5[14] == "Si"){ ?>
                                                <td value="1" id="029stps" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos5[14] == "No") { ?>
                                                <td value="0" id="029stps" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos5[14] == "-") { ?>
                                                <td value="" id="029stps" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>
                                                
                                                <td>
                                                    <?php if($datos5[32] == "Otorgada"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est029">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[32] == "Tramite"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est029">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[32] == "NA"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est029">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[32] == "-"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est029">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }?>
                                                </td>
                                                <td>
                                                    <?php if($datos5[50] != "-"){?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos5[50];?>" class="form-control" id="evid029" placeholder="Número"> </div>
                                                    <?php }else{?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evid029" placeholder="Número"> </div>
                                                    <?php }?>
                                                </td>
                                            </tr>
                                            <tr style="background: rgb(198,198,198);">
                                                <td>16</td>
                                                <td>Servicios preventivos de seguridad y salud en el trabajo<br><b>NOM-030-STPS-2009.</b></td>
                                                <?php if($datos5[15] == "Si"){ ?>
                                                <td value="1" id="030stps" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos5[15] == "No") { ?>
                                                <td value="0" id="030stps" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos5[15] == "-") { ?>
                                                <td value="" id="030stps" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>
                                               
                                                <td>
                                                    <?php if($datos5[33] == "Otorgada"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est030">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[33] == "Tramite"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est030">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[33] == "NA"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est030">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[33] == "-"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est030">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }?>
                                                </td>
                                                <td>
                                                    <?php if($datos5[51] !="-"){?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos5[51];?>" class="form-control" id="evid030" placeholder="Número"> </div>
                                                    <?php }else{?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evid030" placeholder="Número"> </div>
                                                    <?php }?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>17</td>
                                                <td>Condiciones de seguridad para realizar trabajos en espacios confinados<br><b>NOM-033-STPS-2015.</b></td>
                                                <?php if($datos5[16] == "Si"){ ?>
                                                    <td value="1" id="033stps" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos5[16] == "No") { ?>
                                                    <td value="0" id="033stps" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos5[16] == "-") { ?>
                                                    <td value="" id="033stps" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>

                                                <td>
                                                    <?php if($datos5[34]=="Otorgada"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est033">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[34]=="Tramite"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est033">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[34]=="NA"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est033">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[34]=="-"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est033">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }?>
                                                </td>
                                                <td>
                                                    <?php if($datos5[52] !="-"){?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos5[52];?>" class="form-control" id="evid033" placeholder="Número"> </div>
                                                    <?php }else{?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evid033" placeholder="Número"> </div>
                                                    <?php }?>
                                                </td>
                                            </tr>
                                            <tr style="background: rgb(198,198,198);">
                                                <td>18</td>
                                                <td>Factores de riesgo psicosocial en el trabajo-Identificación, análisis y prevención<br><b>NOM-035-STPS-2018.</b></td>
                                                <?php if($datos5[17] == "Si"){ ?>
                                                    <td value="1" id="035stps" class="" style="background: rgb(254,174,0); color: rgb(0,0,0); text-align: center;">Si</td>
                                                <?php } if($datos5[17] == "No") { ?>
                                                    <td value="0" id="035stps" class="" style="background: rgb(27,22,50); color: rgb(255,255,255); text-align: center;">No</td>
                                                <?php } if($datos5[17] == "-") { ?>
                                                    <td value="" id="035stps" style="background: rgba(198,198,198,.4); color: rgb(102,103,102); text-align: center;"> - </td>
                                                <?php } ?>

                                                <td>
                                                    <?php if($datos5[35]=="Otorgada"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est035">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;" selected>Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[35]=="Tramite"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est035">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;" selected>En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[35]=="NA"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est035">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;" selected>No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }if($datos5[35]=="-"){?>
                                                        <div class="chosen-select-act fm-cmp-mg">
                                                            <select class="chosen" id="est035">
                                                                <option value="0" style="display: none; text-align: center;">Selecciona una opción</option>
                                                                <option value="Otorgada" style="text-align: center;">Otorgada</option>
                                                                <option value="Tramite" style="text-align: center;">En tramite</option>
                                                                <option value="NA" style="text-align: center;">No Aplica</option>
                                                            </select>
                                                        </div>
                                                    <?php }?>
                                                </td>
                                                <td>
                                                    <?php if($datos5[53] !="-"){?>
                                                        <div class="form-group nk-int-st"> <input type="text" value="<?php echo $datos5[53];?>" class="form-control" id="evid035" placeholder="Número"> </div>
                                                    <?php }else{?>
                                                        <div class="form-group nk-int-st"> <input type="text" class="form-control" id="evid035" placeholder="Número"> </div>
                                                    <?php }?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <?php if($datos5[53] == "-"){?>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"></div>
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                    <button id="guardarDocstp" class="btn btn-warning notika-btn-warning">Guardar</button>                   
                                </div>
                                <?php }else{ ?>
                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10"></div>
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                    <button id="actualizarDocstp" class="btn btn-info notika-btn-info">Actualizar </button>                   
                                </div>
                                <?php } ?>                                
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
    <!-- jvectormap JS
		============================================ -->
    <script src="js/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/jvectormap/jvectormap-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/curvedLines.js"></script>
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
    <!--  chosen JS    ============================================ -->
    <script src="js/chosen/chosen.jquery.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="js/todo/jquery.todo.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
	<!--  Chat JS
		============================================ -->
    <script src="js/chat/moment.min.js"></script>
    <script src="js/chat/jquery.chat.js"></script>
    <!--  wizard JS
        ============================================ -->
    <script src="js/wizard/jquery.bootstrap.wizard.min.js"></script>
    <script src="js/wizard/wizard-active.js"></script>
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