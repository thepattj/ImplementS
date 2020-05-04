<?php
    include 'php/conex.php';
    $cre = $_GET["x"];
    $con = Conectarse();
    $rep="";
?>

<!doctype html>
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
</head>

<body id="nombreestacioncompleto">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


    <!-- Start Header Top Area -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class=" col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="#"><img src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
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
                            <li class="nav-item nc-al"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-alarm"></i></span><!-- <div class="spinner4 spinner-4"></div><div class="ntd-ctn"><span>3</span></div> --></a>
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
                        </ul>
                    </div>
                </div>
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
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
<!--                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
</div> -->
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->
    <!-- Start Status area -->
    <div class="notika-status-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Requisitos Legales</h2>
                                        <p><span class="bread-ntd" id="datacre">No. E. S.</span> - <span class="bread-ntd" id="dataRS">Nombre E. S.</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                               <!--  <div class="breadcomb-report">
                                   <button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button>
                               </div> -->
                            </div>
                        </div>
                    </div>

                                       
                    <div class="wizard-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="wizard-wrap-int">
                                        <!-- <div class="wizard-hd">
                                            <h2></h2>
                                            <p></p>
                                        </div> -->
                                        <div id="rootwizard">
                                            <div class="navbar">
                                                <div class="navbar-inner">
                                                    <div class="container-pro wizard-cts-st">
                                                        <ul>
                                                            <li id="btnlegal"><a href="#tab1" data-toggle="tab">Documentación Legal</a></li>
                                                            <!-- <li id="btnlegis"><a href="#tab2" data-toggle="tab">Legislación Aplicable</a></li> -->
                                                            <li id="btnasea"><a href="#tab3" data-toggle="tab">ASEA</a></li>
                                                            <li id="btncre"><a href="#tab4" data-toggle="tab">CRE</a></li>
                                                            <li id="btnprofeco"><a href="#tab5" data-toggle="tab">PROFECO</a></li>
                                                            <li id="btnpc"><a href="#tab6" data-toggle="tab">Protección Civil</a></li>
                                                            <li id="btnstps"><a href="#tab7" data-toggle="tab">STPS</a>
                                                            </li>
                                                            <!-- <li id="btnsemt"><a href="#tab8" data-toggle="tab">SEMARNAT</a>
                                                            </li> -->
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-content"> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <?php
                        $sqldoc = "SELECT status as s FROM documento WHERE tipo = 'Documentación' AND idCESH = '".$cre."' ORDER BY num ASC";
                        $resultadodoc =mysqli_query($con, $sqldoc);
                        if($resultadodoc->num_rows > 0){
                            $n = 0;
                            while($filadoc = $resultadodoc->fetch_assoc()){
                                $consdoc = $filadoc['s'];
                                $datos6 [$n] = $consdoc;
                                $n++;
                            }
                        }else{ $datos6 = "000000000000000000"; }
                        //echo "datos: ".$datos6[0].$datos6[1].$datos6[2].$datos6[3].$datos6[4].$datos6[5];
                    ?>
                    <!-- DOCUMENTACION LEGAL -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="legal" style="display:block;">
                        <div class="form-element-list">
                            <div class="basic-tb-hd">
                                <h2>Requisitos documentales de Estación de Servicio</h2>
                                <p>Completa el formulario con la información que se te pide para tu control</p>
                            </div>
                            <div class="row">
                                <div class="bsc-tbl-cls">
                                    <table class="table table-cl">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Documentos</th>
                                                <th>¿Cumple?</th>
                                                <th>Periocidad </th>
                                                <th>Requisitos</th>
                                                <th>Presentación</th>
                                                <th style="font-size: .9em;">Pago Federal/Gestor</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Acta Constitutiva</td>
                                                <?php if($datos6[0] == 1){ ?>
                                                <td value="1" id="cActa" class="active">Si</td>
                                                <?php } if($datos6[0] == 0) { ?>
                                                <td value="0" id="cActa" class="success">No</td>
                                                <?php } if($datos6 == 500) { ?>
                                                <td value="" id="cActa"> - </td>
                                                <?php } ?>
                                                
                                                <td>Unica</td>
                                                <td style="font-size: .8em;">No especificado</td>
                                                <td style="font-size: .9em;">Impresa y digital</td>
                                                <td>No</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Poder Notarial</td>
                                                <?php if($datos6[1] == 1){ ?>
                                                <td value="1" id="cPNot" class="active">Si</td>
                                                <?php } if($datos6[1] == 0) { ?>
                                                <td value="0" id="cPNot" class="success">No</td>
                                                <?php } if($datos6 == 500) { ?>
                                                <td value="" id="cPNot"> - </td>
                                                <?php } ?>
                                                
                                                <td>Unica</td>
                                                <td style="font-size: .8em;">No especificado</td>
                                                <td style="font-size: .9em;">Impresa y digital</td>
                                                <td>No</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Comprobante Original de alta ante hacienda</td>
                                                <?php if($datos6[2] == 1){ ?>
                                                <td value="1" id="altaSHCP" class="active">Si</td>
                                                <?php } if($datos6[2] == 0) { ?>
                                                <td value="0" id="altaSHCP" class="success">No</td>
                                                <?php } if($datos6 == 500) { ?>
                                                <td value="" id="altaSHCP"> - </td>
                                                <?php } ?>
                                                
                                                <td>Unica</td>
                                                <td style="font-size: .8em;">No especificado</td>
                                                <td style="font-size: .9em;">Impresa y digital</td>
                                                <td>No</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>R.F.C. Original</td>
                                                <?php if($datos6[3] == 1){ ?>
                                                <td value="1" id="RFCS" class="active">Si</td>
                                                <?php } if($datos6[3] == 0) { ?>
                                                <td value="0" id="RFCS" class="success">No</td>
                                                <?php } if($datos6 == 500) { ?>
                                                <td value="" id="RFCS"> - </td>
                                                <?php } ?>
                                                
                                                <td>Unica</td>
                                                <td> - </td>
                                                <td style="font-size: .9em;">Impresa y digital</td>
                                                <td>Si</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Permiso de la comisión reguladora de Energía <b>(CRE)</b></td>
                                                <?php if($datos6[4] == 1){ ?>
                                                <td value="1" id="PL" class="active">Si</td>
                                                <?php } if($datos6[4] == 0) { ?>
                                                <td value="0" id="PL" class="success">No</td>
                                                <?php } if($datos6 == 500) { ?>
                                                <td value="" id="PL"> - </td>
                                                <?php } ?>

                                                <td>Unica</td>
                                                <td>Federal</td>
                                                <td style="font-size: .9em;">Impresa y digital</td>
                                                <td>Si</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Licencia de Funcionamiento (Municipal)</td>
                                                <?php if($datos6[5] == 1){ ?>
                                                <td value="1" id="LFM" class="active">Si</td>
                                                <?php } if($datos6[5] == 0) { ?>
                                                <td value="0" id="LFM" class="success">No</td>
                                                <?php } if($datos6 == 500) { ?>
                                                <td value="" id="LFM"> - </td>
                                                <?php } ?>
                                                
                                                <td>Anual</td>
                                                <td>Municipal</td>
                                                <td style="font-size: .9em;">Impresa y digital</td>
                                                <td>Si</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Dictamenten de uso de suelo / Factibilidad de uso de suelo</td>
                                                <?php if($datos6[6] == 1){ ?>
                                                <td value="1" id="dicSuelo" class="active">Si</td>
                                                <?php } if($datos6[6] == 0) { ?>
                                                <td value="0" id="dicSuelo" class="success">No</td>
                                                <?php } if($datos6 == 500) { ?>
                                                <td value="" id="dicSuelo"> - </td>
                                                <?php } ?>
                                                
                                                <td>Unica</td>
                                                <td>Municipal</td>
                                                <td style="font-size: .9em;">Impresa y digital</td>
                                                <td>Si</td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>Tarjeta oficial de IMSS</td>
                                                <?php if($datos6[7] == 1){ ?>
                                                <td value="1" id="oImss" class="active">Si</td>
                                                <?php } if($datos6[7] == 0) { ?>
                                                <td value="0" id="oImss" class="success">No</td>
                                                <?php } if($datos6 == 500) { ?>
                                                <td value="" id="oImss"> - </td>
                                                <?php } ?>
                                                
                                                <td>Unica</td>
                                                <td>Federal</td>
                                                <td style="font-size: .9em;">Impresa y digital</td>
                                                <td>Si</td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>Planos Arquitectonicos</td>
                                                <?php if($datos6[8] == 1){ ?>
                                                <td value="1" id="planoA" class="active">Si</td>
                                                <?php } if($datos6[8] == 0) { ?>
                                                <td value="0" id="planoA" class="success">No</td>
                                                <?php } if($datos6 == 500) { ?>
                                                <td value="" id="planoA"> - </td>
                                                <?php } ?>
                                                
                                                <td>Unica/Actualizaciones</td>
                                                <td> - </td>
                                                <td style="font-size: .9em;">Impresa y digital</td>
                                                <td>Si</td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td><b>SIEM</b> (Sistema de Información Empresarial Mexicano)</td>
                                                <?php if($datos6[9] == 1){ ?>
                                                <td value="1" id="aSiem" class="active">Si</td>
                                                <?php } if($datos6[9] == 0) { ?>
                                                <td value="0" id="aSiem" class="success">No</td>
                                                <?php } if($datos6 == 500) { ?>
                                                <td value="" id="aSiem"> - </td>
                                                <?php } ?>
                                                
                                                <td>Anual</td>
                                                <td>Federal</td>
                                                <td style="font-size: .9em;">Impresa y digital</td>
                                                <td>Si</td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>Dictámenes eléctricos</td>
                                                <?php if($datos6[10] == 1){ ?>
                                                <td value="1" id="dElec" class="active">Si</td>
                                                <?php } if($datos6[10] == 0) { ?>
                                                <td value="0" id="dElec" class="success">No</td>
                                                <?php } if($datos6 == 500) { ?>
                                                <td value="" id="dElec"> - </td>
                                                <?php } ?>
                                                
                                                <td>Cada 5 años</td>
                                                <td>Federal</td>
                                                <td>Impresa/Digital</td>
                                                <td>No</td>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>Dictámenes Tierras Fisicas y pararrayos</td>
                                                <?php if($datos6[11] == 1){ ?>
                                                <td value="1" id="dTfisica" class="active">Si</td>
                                                <?php } if($datos6[11] == 0) { ?>
                                                <td value="0" id="dTfisica" class="success">No</td>
                                                <?php } if($datos6 == 500) { ?>
                                                <td value="" id="dTfisica"> - </td>
                                                <?php } ?>
                                                
                                                <td>Cada 5 años</td>
                                                <td>Federal</td>
                                                <td>Impresa/Digital</td>
                                                <td>No</td>
                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td>Calibración de dispensarios</td>
                                                <?php if($datos6[12] == 1){ ?>
                                                <td value="1" id="calDisp" class="active">Si</td>
                                                <?php } if($datos6[12] == 0) { ?>
                                                <td value="0" id="calDisp" class="success">No</td>
                                                <?php } if($datos6 == 500) { ?>
                                                <td value="" id="calDisp"> - </td>
                                                <?php } ?>
                                                
                                                <td>Semestral</td>
                                                <td>Federal</td>
                                                <td>Impresa/Digital</td>
                                                <td>Si</td>
                                            </tr>
                                             <tr>
                                                <td>14</td>
                                                <td>Pruebas de Hermeticidad</td>
                                                <?php if($datos6[13] == 1){ ?>
                                                <td value="1" id="pHerm" class="active">Si</td>
                                                <?php } if($datos6[13] == 0) { ?>
                                                <td value="0" id="pHerm" class="success">No</td>
                                                <?php } if($datos6 == 500) { ?>
                                                <td value="" id="pHerm"> - </td>
                                                <?php } ?>
                                                
                                                <td>Semestral</td>
                                                <td>Federal</td>
                                                <td>Impresa/Digital</td>
                                                <td>Si</td>
                                            </tr>
                                            <tr>
                                                <td>15</td>
                                                <td>Pruebas de Hermeticidad a Tuberias</td>
                                                <?php if($datos6[14] == 1){ ?>
                                                <td value="1" id="pHermT" class="active">Si</td>
                                                <?php } if($datos6[14] == 0) { ?>
                                                <td value="0" id="pHermT" class="success">No</td>
                                                <?php } if($datos6 == 500) { ?>
                                                <td value="" id="pHermT"> - </td>
                                                <?php } ?>
                                                
                                                <td> - </td>
                                                <td> - </td>
                                                <td>Impresa/Digital</td>
                                                <td>Si</td>
                                            </tr>
                                            <tr>
                                                <td>16</td>
                                                <td>Ficha Técnica y manual de tanque de almacenamiento</td>
                                                <?php if($datos6[15] == 1){ ?>
                                                <td value="1" id="tanqueA" class="active">Si</td>
                                                <?php } if($datos6[15] == 0) { ?>
                                                <td value="0" id="tanqueA" class="success">No</td>
                                                <?php } if($datos6 == 500) { ?>
                                                <td value="" id="tanqueA"> - </td>
                                                <?php } ?>
                                                
                                                <td>Diverso</td>
                                                <td>Federal</td>
                                                <td style="font-size: .9em;">Impresa y digital</td>
                                                <td>No</td>
                                            </tr>
                                            <tr>
                                                <td>17</td>
                                                <td>Ficha técnica y manual de dispensarios</td>
                                                <?php if($datos6[16] == 1){ ?>
                                                <td value="1" id="dispensarios" class="active">Si</td>
                                                <?php } if($datos6[16] == 0) { ?>
                                                <td value="0" id="dispensarios" class="success">No</td>
                                                <?php } if($datos6 == 500) { ?>
                                                <td value="" id="dispensarios"> - </td>
                                                <?php } ?>
                                                
                                                <td>Diverso</td>
                                                <td>Federal</td>
                                                <td style="font-size: .9em;">Impresa y digital</td>
                                                <td>No</td>
                                            </tr>
                                            <tr>
                                                <td>18</td>
                                                <td>Ficha técnica y manual de Control de inventarios</td>
                                                <?php if($datos6[17] == 1){ ?>
                                                <td value="1" id="cIventarios" class="active">Si</td>
                                                <?php } if($datos6[17] == 0) { ?>
                                                <td value="0" id="cIventarios" class="success">No</td>
                                                <?php } if($datos6 == 500) { ?>
                                                <td value="" id="cIventarios"> - </td>
                                                <?php } ?>
                                                
                                                <td>Diverso</td>
                                                <td>Federal</td>
                                                <td style="font-size: .9em;">Impresa y digital</td>
                                                <td>No</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <?php if($datos6 == 000000000000000000){?>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">             
                                    <button id="guardarDocEst" class="btn btn-success notika-btn-success">Guardar</button>                   
                                </div>
                                <?php }else{ ?>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">             
                                    <button id="actualizarDocEst" class="btn btn-info notika-btn-info">Actualizar </button>                   
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                    <!-- DOCUMENTACION ASEA -->
                    <?php
                        $sqlasea = "SELECT num as n, status as s FROM documento WHERE tipo = 'ASEA' AND idCESH = '".$cre."' ORDER BY num ASC";
                        $resultadoasea =mysqli_query($con, $sqlasea);
                        if($resultadoasea->num_rows > 0){
                            $i = 0;
                            while($fila = $resultadoasea->fetch_assoc()){
                                $id = $fila['n'];
                                $cons = $fila['s'];
                                $datos1 [$i] = $cons;
                                $i++;
                            }
                        }else{ $datos1 = "000000"; }
                        //echo "datos: ".$datos1[0].$datos1[1].$datos1[2].$datos1[3].$datos1[4].$datos1[5];
                    ?>
                    <!-- DOCUMENTACION ASEA -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="asea" style="display:none;">
                        <div class="form-element-list">
                            <div class="basic-tb-hd">
                                <h2>Requisitos Documentales - Agencia de Seguridad, Energía y Ambiente</h2>
                                <p>Completa el formulario con la información que se te pide para tu control</p>
                            </div>
                            <div class="row">
                                <div class="bsc-tbl-cls">
                                    <table class="table table-cl">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Cumplimiento ASEA</th>
                                                <th>¿Cumple?</th>
                                                <th>Periocidad </th>
                                                <th>Requisitos</th>
                                                <th>Presentación</th>
                                                <th style="font-size: .9em;">Pago Federal / Gestor</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>NOM-005-ASEA-2016.</td>
                                                <?php if($datos1[0] == 1){ ?>
                                                <td value="1" id="c005" class="active">Si</td>
                                                <?php } if($datos1[0] == 0) { ?>
                                                <td value="0" id="c005" class="success">No</td>
                                                <?php } if($datos1 == 500) { ?>
                                                <td value="" id="c005"> - </td>
                                                <?php } ?>                                                
                                                <td>Diverso</td>
                                                <td>Federal</td>
                                                <td>Documental</td>
                                                <td>Gestor</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Manifiesto Impacto Ambiental (<b>MIA</b>)</td>
                                                <?php if($datos1[1] == 1){ ?>
                                                <td value="1" id="cMia" class="active">Si</td>
                                                <?php } if($datos1[1] == 0) { ?>
                                                <td value="0" id="cMia" class="success">No</td>
                                                <?php } if($datos1 == 500) { ?>
                                                <td value="" id="cMia"> - </td>
                                                <?php } ?>                                                
                                                <td>Único / Actualizar</td>
                                                <td>Federal</td>
                                                <td>Impresa/digital</td>
                                                <td>Ambos</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Informe Preventivo (<b>IP</b>)</td>
                                                <?php if($datos1[2] == 1){ ?>
                                                <td value="1" id="cIp" class="active">Si</td>
                                                <?php } if($datos1[2] == 0) { ?>
                                                <td value="0" id="cIp" class="success">No</td>
                                                <?php } if($datos1 == 500) { ?>
                                                <td value="" id="cIp"> - </td>
                                                <?php } ?>                                                
                                                <td>Único / Actualizar</td>
                                                <td>Federal</td>
                                                <td>Impresa/Digital</td>
                                                <td>Ambos</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Licencia Ambiental Única (<b>LAU</b>) / Licencia de Funcionamiento(<b>LF</b>)</td>
                                                <?php if($datos1[3] == 1){ ?>
                                                <td value="1" id="cLf" class="active">Si</td>
                                                <?php } if($datos1[3] == 0) { ?>
                                                <td value="0" id="cLf" class="success">No</td>
                                                <?php } if($datos1 == 500) { ?>
                                                <td value="" id="cLf"> - </td>
                                                <?php } ?>                                                
                                                <td>Unica / Actualizar</td>
                                                <td style="font-size: .9em;">Estatal / Municipal</td>
                                                <td>Impresa/Digital</td>
                                                <td>Ambos</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Residuos Peligrosos (<b>RP</b>)</td>
                                                <?php if($datos1[4] == 1){ ?>
                                                <td value="1" id="cGrp" class="active">Si</td>
                                                <?php } if($datos1[4] == 0) { ?>
                                                <td value="0" id="cGrp" class="success">No</td>
                                                <?php } if($datos1 == 500) { ?>
                                                <td value="" id="cGrp"> - </td>
                                                <?php } ?>                                                
                                                <td>Unica / Actualizar</td>
                                                <td style="font-size: .9em;">Estatal / Municipal</td>
                                                <td>Impresa/Digital</td>
                                                <td>Federal</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Cedula Operación Anual(<b>COA</b>)</td>
                                                <?php if($datos1[5] == 1){ ?>
                                                <td value="1" id="cCoa" class="active">Si</td>
                                                <?php } if($datos1[5] == 0) { ?>
                                                <td value="0" id="cCoa" class="success">No</td>
                                                <?php } if($datos1 == 500) { ?>
                                                <td value="" id="cCoa"> - </td>
                                                <?php } ?>                                                
                                                <td style="font-size: .9em;">Anual, posterior a Licencia</td>
                                                <td>Federal</td>
                                                <td>Impresa/Digital</td>
                                                <td>Gestor</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <?php if($datos1 == 000000){?>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">             
                                    <button id="guardarDocASEA" class="btn btn-success notika-btn-success">Guardar</button>                   
                                </div>
                                <?php }else{ ?>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">             
                                    <button id="actualizarDocASEA" class="btn btn-info notika-btn-info">Actualizar </button>                   
                                </div>
                                <?php } ?>
                                
                            </div>
                        </div>
                    </div>


                    <!-- DOCUMENTACION CRE -->
                    <?php
                        $sqlcre = "SELECT status as s FROM documento WHERE tipo = 'CRE' AND idCESH = '".$cre."' ORDER BY num ASC";
                        $resultadocre =mysqli_query($con, $sqlcre);
                        if($resultadocre->num_rows > 0){
                            $l = 0;
                            while($filacre = $resultadocre->fetch_assoc()){
                                //$idprofe = $filaprofe['n'];
                                $conscre = $filacre['s'];
                                $datos4 [$l] = $conscre;
                                $l++;
                            }
                        }else{ $datos4 = "000000000000"; }
                        //echo "datos: ".$datos4[0].$datos4[1];
                    ?>

                    <!-- DOCUMENTACION CRE -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="cre" style="display:none;">
                        <div class="form-element-list">
                            <div class="basic-tb-hd">
                                <h2>Requisitos Documentales - Comisión Reguladora de Energía</h2>
                                <p>Completa el formulario con la información que se te pide para tu control</p>
                            </div>
                            <div class="row">
                                <div class="bsc-tbl-cls">
                                    <table class="table table-cl">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Cumplimiento CRE</th>
                                                <th>¿Cumple?</th>
                                                <th>Periocidad </th>
                                                <th>Requisitos</th>
                                                <th>Presentación</th>
                                                <th>Pago Federal / Gestor</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Reporte Diario (Volúmenes)</td>
                                                <?php if($datos4[0] == 1){ ?>
                                                <td value="1" id="rDiariov" class="active">Si</td>
                                                <?php } if($datos4[0] == 0) { ?>
                                                <td value="0" id="rDiariov" class="success">No</td>
                                                <?php } if($datos4 == 500) { ?>
                                                <td value="" id="rDiariov"> - </td>
                                                <?php } ?>                                                
                                                <td>Diario</td>
                                                <td>Federal</td>
                                                <td>Electrónico/Línea</td>
                                                <td>No</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Reporte Diario (Precios)</td>
                                                <?php if($datos4[1] == 1){ ?>
                                                <td value="1" id="rDiariop" class="active">Si</td>
                                                <?php } if($datos4[1] == 0) { ?>
                                                <td value="0" id="rDiariop" class="success">No</td>
                                                <?php } if($datos4 == 500) { ?>
                                                <td value="" id="rDiariop"> - </td>
                                                <?php } ?>                                                
                                                <td>Diario</td>
                                                <td>Federal</td>
                                                <td>Electrónico/Línea</td>
                                                <td>No</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Estadística; Volúmenes, Capacidad (L), Procedencia del producto, Fletes</td>
                                                <?php if($datos4[2] == 1){ ?>
                                                <td value="1" id="cEstad" class="active">Si</td>
                                                <?php } if($datos4[2] == 0) { ?>
                                                <td value="0" id="cEstad" class="success">No</td>
                                                <?php } if($datos4 == 500) { ?>
                                                <td value="" id="cEstad"> - </td>
                                                <?php } ?>                                                
                                                <td>1 al 10 de enero (Reporte de octubre-diciembre) 1 al 10 de abril</td>
                                                <td>Federal</td>
                                                <td>Electrónico/Línea</td>
                                                <td>No</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Calidad de petrolíferos (Laboratorios)<br>(<b>NOM-016-CRE-2016</b>)</td>
                                                <?php if($datos4[3] == 1){ ?>
                                                <td value="1" id="016" class="active">Si</td>
                                                <?php } if($datos4[3] == 0) { ?>
                                                <td value="0" id="016" class="success">No</td>
                                                <?php } if($datos4 == 500) { ?>
                                                <td value="" id="016"> - </td>
                                                <?php } ?>                                                
                                                <td>Semestral</td>
                                                <td>Federal</td>
                                                <td>Impresa y Digital</td>
                                                <td>Si</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Dictamen  de Calidad de petrolíferos (Laboratorios)<br>(<b>NOM-016-CRE-2017</b>)</td>
                                                <?php if($datos4[4] == 1){ ?>
                                                <td value="1" id="0162017" class="active">Si</td>
                                                <?php } if($datos4[4] == 0) { ?>
                                                <td value="0" id="0162017" class="success">No</td>
                                                <?php } if($datos4 == 500) { ?>
                                                <td value="" id="0162017"> - </td>
                                                <?php } ?>                                                
                                                <td>Anual</td>
                                                <td>Federal</td>
                                                <td>Impresa y Digital</td>
                                                <td>Si</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Reporte de Pagos Supervisión de permisos<br>(Derechos, Productos y Aprovechamiento)</td>
                                                <?php if($datos4[5] == 1){ ?>
                                                <td value="1" id="rPsupervi" class="active">Si</td>
                                                <?php } if($datos4[5] == 0) { ?>
                                                <td value="0" id="rPsupervi" class="success">No</td>
                                                <?php } if($datos4 == 500) { ?>
                                                <td value="" id="rPsupervi"> - </td>
                                                <?php } ?>
                                                <td>Anual, 1 - 15 feb.</td>
                                                <td>Federal</td>
                                                <td>Impresa y Digital</td>
                                                <td>No</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Poliza anual vigente de seguro (Seguro)</td>
                                                <?php if($datos4[6] == 1){ ?>
                                                <td value="1" id="polizAnual" class="active">Si</td>
                                                <?php } if($datos4[6] == 0) { ?>
                                                <td value="0" id="polizAnual" class="success">No</td>
                                                <?php } if($datos4 == 500) { ?>
                                                <td value="" id="polizAnual"> - </td>
                                                <?php } ?>                                                
                                                <td>Anual, 1 - 10 abr. del año siguiente</td>
                                                <td>Federal</td>
                                                <td>Impresa y Digital</td>
                                                <td>No</td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>Poliza de seguro (Seguro)</td>
                                                <?php if($datos4[7] == 1){ ?>
                                                <td value="1" id="polizaSg" class="active">Si</td>
                                                <?php } if($datos4[7] == 0) { ?>
                                                <td value="0" id="polizaSg" class="success">No</td>
                                                <?php } if($datos4 == 500) { ?>
                                                <td value="" id="polizaSg"> - </td>
                                                <?php } ?>                                                
                                                <td>En caso de renovación</td>
                                                <td>Federal</td>
                                                <td>Impresa y Digital</td>
                                                <td>No</td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>Reporte de Quejas</td>
                                                <?php if($datos4[8] == 1){ ?>
                                                <td value="1" id="rQue" class="active">Si</td>
                                                <?php } if($datos4[8] == 0) { ?>
                                                <td value="0" id="rQue" class="success">No</td>
                                                <?php } if($datos4 == 500) { ?>
                                                <td value="" id="rQue"> - </td>
                                                <?php } ?>                                                
                                                <td>Anual, 1 - 10 abr. del año siguiente</td>
                                                <td>Federal</td>
                                                <td>Impresa y Digital</td>
                                                <td>No</td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>Procedencia del producto (facturas)</td>
                                                <?php if($datos4[9] == 1){ ?>
                                                <td value="1" id="factProd" class="active">Si</td>
                                                <?php } if($datos4[9] == 0) { ?>
                                                <td value="0" id="factProd" class="success">No</td>
                                                <?php } if($datos4 == 500) { ?>
                                                <td value="" id="factProd"> - </td>
                                                <?php } ?>
                                                
                                                <td>Anual, 2 - 10 abr. del año siguiente</td>
                                                <td>Federal</td>
                                                <td>Impresa y Digital</td>
                                                <td>No</td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>Reporte de inicidentes o emergencias</td>
                                                <?php if($datos4[10] == 1){ ?>
                                                <td value="1" id="incidentes" class="active">Si</td>
                                                <?php } if($datos4[10] == 0) { ?>
                                                <td value="0" id="incidentes" class="success">No</td>
                                                <?php } if($datos4 == 500) { ?>
                                                <td value="" id="incidentes"> - </td>
                                                <?php } ?>                                                
                                                <td>Anual, 1 - 10 abr. del año siguiente</td>
                                                <td>Federal</td>
                                                <td>Impresa y Digital</td>
                                                <td>No</td>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>Anuncio Independiente<br>(número de permiso CRE PL/XX/EXP/20XX)</td>
                                                <?php if($datos4[11] == 1){ ?>
                                                <td value="1" id="anInde" class="active">Si</td>
                                                <?php } if($datos4[11] == 0) { ?>
                                                <td value="0" id="anInde" class="success">No</td>
                                                <?php } if($datos4 == 500) { ?>
                                                <td value="" id="anInde"> - </td>
                                                <?php } ?>
                                                
                                                <td>Unico</td>
                                                <td>Federal</td>
                                                <td>Impresa y Digital</td>
                                                <td>No</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <?php if($datos4 == 000000000000){?>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">             
                                    <button id="guardarDoCre" class="btn btn-success notika-btn-success">Guardar</button>                   
                                </div>
                                <?php }else{ ?>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">             
                                    <button id="actualizarDoCre" class="btn btn-info notika-btn-info">Actualizar </button>                   
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>


                    <!-- DOCUMENTACION PROFECO -->
                    <?php
                        $sqlprofe = "SELECT status as s FROM documento WHERE tipo = 'PROFECO' AND idCESH = '".$cre."' ORDER BY num ASC";
                        $resultadoprofe =mysqli_query($con, $sqlprofe);
                        if($resultadoprofe->num_rows > 0){
                            $j = 0;
                            while($filaprofe = $resultadoprofe->fetch_assoc()){
                                //$idprofe = $filaprofe['n'];
                                $consprofe = $filaprofe['s'];
                                $datos2 [$j] = $consprofe;
                                $j++;
                            }
                        }else{ $datos2 = "00"; }
                        //echo "datos: ".$datos2." - ".$datos2[0];
                    ?>

                    <!-- DOCUMENTACION PROFECO -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="profeco" style="display:none;">
                        <div class="form-element-list">
                            <div class="basic-tb-hd">
                                <h2>Requisitos Documentales - Procuraduría Federal del Consumidor</h2>
                                <p>Completa el formulario con la información que se te pide para tu control</p>
                            </div>
                            <div class="row">
                                <div class="bsc-tbl-cls">
                                    <table class="table table-cl">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Cumplimiento PROFECO</th>
                                                <th>¿Cumple?</th>
                                                <th>Periocidad </th>
                                                <th>Requisitos</th>
                                                <th>Presentación</th>
                                                <th>Pago Federal / Gestor</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Verificación periódica de dispensarios </td>
                                                <?php if($datos2[0] == 1){ ?>
                                                <td value="1" id="vPerdisp" class="active">Si</td>
                                                <?php } if($datos2[0] == 0) { ?>
                                                <td value="0" id="vPerdisp" class="success">No</td>
                                                <?php } ?>                                                
                                                <td>Semestrales</td>
                                                <td>UVA</td>
                                                <td>Documental</td>
                                                <td>Ambas</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Reporte de control a distancia </td>
                                                <?php if($datos2[1] == 1){ ?>
                                                <td value="1" id="rControldis" class="active">Si</td>
                                                <?php } if($datos2[1] == 0) { ?>
                                                <td value="0" id="rControldis" class="success">No</td>
                                                <?php } ?>                                                
                                                <td>Anual</td>
                                                <td>Federal</td>
                                                <td>Documental</td>
                                                <td>Ambas</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <?php if($datos2 == 00){?>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">             
                                    <button id="guardarDocp" class="btn btn-success notika-btn-success">Guardar</button>                   
                                </div>
                                <?php }else{ ?>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">             
                                    <button id="actualizarDocP" class="btn btn-info notika-btn-info">Actualizar </button>                   
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>


                    <!-- DOCUMENTACION PROTECCION CIVIL -->
                    <?php
                        $sqlpc = "SELECT status as s FROM documento WHERE tipo = 'Protección Civi' AND idCESH = '".$cre."' ORDER BY num ASC";
                        $resultadopc =mysqli_query($con, $sqlpc);
                        if($resultadopc->num_rows > 0){
                            $k = 0;
                            while($filapc = $resultadopc->fetch_assoc()){
                                //$idprofe = $filaprofe['n'];
                                $conspc = $filapc['s'];
                                $datos3 [$k] = $conspc;
                                $k++;
                            }
                        }else{ $datos3 = "00"; }
                        //echo "datos: ".$datos3[0].$datos3[1];
                    ?>

                    <!-- DOCUMENTACION PROTECCION CIVIL -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="pc" style="display:none;">
                        <div class="form-element-list">
                            <div class="basic-tb-hd">
                                <h2>Requisitos Documentales - Protección Civil</h2>
                                <p>Completa el formulario con la información que se te pide para tu control</p>
                            </div>
                            <div class="row">
                                <div class="bsc-tbl-cls">
                                    <table class="table table-cl">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Cumplimiento Protección Civil</th>
                                                <th>¿Cumple?</th>
                                                <th>Periocidad </th>
                                                <th>Requisitos</th>
                                                <th>Presentación</th>
                                                <th>Pago Federal / Gestor</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Visto Bueno</td>
                                                <?php if($datos3[0] == 1){ ?>
                                                <td value="1" id="vBueno" class="active">Si</td>
                                                <?php } if($datos3[0] == 0) { ?>
                                                <td value="0" id="vBueno" class="success">No</td>
                                                <?php } if($datos1 == 500) { ?>
                                                <td value="" id="vBueno"> - </td>
                                                <?php } ?>                                                
                                                <td>Unica</td>
                                                <td>Municipal</td>
                                                <td>Documental</td>
                                                <td>Ambas</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Auto declaratoria</td>
                                                <?php if($datos3[1] == 1){ ?>
                                                <td value="1" id="cdecla" class="active">Si</td>
                                                <?php } if($datos3[1] == 0) { ?>
                                                <td value="0" id="cdecla" class="success">No</td>
                                                <?php } if($datos1 == 500) { ?>
                                                <td value="" id="cdecla"> - </td>
                                                <?php } ?>                                                
                                                <td>Anual</td>
                                                <td>Municipal</td>
                                                <td>Documental</td>
                                                <td>Ambas</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <?php if($datos1 == 00){?>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">             
                                    <button id="guardarDocPc" class="btn btn-success notika-btn-success">Guardar</button>                   
                                </div>
                                <?php }else{ ?>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">             
                                    <button id="actualizarDocPc" class="btn btn-info notika-btn-info">Actualizar </button>                   
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>


                    <!-- DOCUMENTACION STPS -->
                    <?php
                        $sqlstp = "SELECT status as s FROM documento WHERE tipo = 'STPS' AND idCESH = '".$cre."' ORDER BY num ASC";
                        $resultadostp =mysqli_query($con, $sqlstp);
                        if($resultadostp->num_rows > 0){
                            $m = 0;
                            while($filastp = $resultadostp->fetch_assoc()){
                                //$idprofe = $filaprofe['n'];
                                $consstp = $filastp['s'];
                                $datos5 [$m] = $consstp;
                                $m++;
                            }
                        }else{ $datos5 = "000000000000000"; }
                        //echo "datos: ".$datos5[0].$datos5[1].$datos5[2].$datos5[3];
                    ?>

                    <!-- DOCUMENTACION STPS -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="stps" style="display:none;">
                        <div class="form-element-list">
                            <div class="basic-tb-hd">
                                <h2>Requisitos Documentales - Secretaría del Trabajo y Prevensión Social</h2>
                                <p>Completa el formulario con la información que se te pide para tu control</p>
                            </div>
                            <div class="row">
                                <div class="bsc-tbl-cls">
                                    <table class="table table-cl">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Cumplimiento STPS</th>
                                                <th>¿Cumple?</th>
                                                <th>Periocidad </th>
                                                <th>Requisitos</th>
                                                <th>Presentación</th>
                                                <th>Pago Federal / Gestor</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Edificios, locales, instalaciones y áreas en los centros de trabajo<br><b>NOM-001-STPS-2008.</b></td>
                                                <?php if($datos5[0] == 1){ ?>
                                                <td value="1" id="001stps" class="active">Si</td>
                                                <?php } if($datos5[0] == 0) { ?>
                                                <td value="0" id="001stps" class="success">No</td>
                                                <?php } if($datos5 == 500) { ?>
                                                <td value="" id="001stps"> - </td>
                                                <?php } ?>                                                
                                                <td>Bianual/Actualización</td>
                                                <td>Federal</td>
                                                <td>Documental</td>
                                                <td>Gestor</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Condiciones de seguridad-Prevención y protección contra incendios en los centros de trabajo<br><b>NOM-002-STPS-2010.</b></td>
                                                <?php if($datos5[1] == 1){ ?>
                                                <td value="1" id="002stps" class="active">Si</td>
                                                <?php } if($datos5[1] == 0) { ?>
                                                <td value="0" id="002stps" class="success">No</td>
                                                <?php } if($datos5 == 500) { ?>
                                                <td value="" id="002stps"> - </td>
                                                <?php } ?>
                                                <td>Trianual/Actualización</td>
                                                <td>Federal</td>
                                                <td>Documental</td>
                                                <td>Gestor</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Condiciones de seguridad para realizar trabajos en altura<br><b>NOM-009-STPS-2011.</b></td>
                                                <?php if($datos5[2] == 1){ ?>
                                                <td value="1" id="009stps" class="active">Si</td>
                                                <?php } if($datos5[2] == 0) { ?>
                                                <td value="0" id="009stps" class="success">No</td>
                                                <?php } if($datos5 == 500) { ?>
                                                <td value="" id="009stps"> - </td>
                                                <?php } ?>                                                
                                                <td>Bianual/Actualización</td>
                                                <td>Federal</td>
                                                <td>Documental</td>
                                                <td>Gestor</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Evaluación de sustancias química<br><b>NOM-010-STPS-2014.</b></td>
                                                <?php if($datos5[3] == 1){ ?>
                                                <td value="1" id="010stps" class="active">Si</td>
                                                <?php } if($datos5[3] == 0) { ?>
                                                <td value="0" id="010stps" class="success">No</td>
                                                <?php } if($datos5 == 500) { ?>
                                                <td value="" id="010stps"> - </td>
                                                <?php } ?>                                                
                                                <td>Dependiendo los resultados</td>
                                                <td>Federal</td>
                                                <td>Documental</td>
                                                <td>Gestor</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Evaluación de ruido<br><b>NOM-011-STPS-2001</b></td>
                                                <?php if($datos5[4] == 1){ ?>
                                                <td value="1" id="011stps" class="active">Si</td>
                                                <?php } if($datos5[4] == 0) { ?>
                                                <td value="0" id="011stps" class="success">No</td>
                                                <?php } if($datos5 == 500) { ?>
                                                <td value="" id="011stps"> - </td>
                                                <?php } ?>                                                
                                                <td>Anual</td>
                                                <td>Federal</td>
                                                <td>Documental</td>
                                                <td>Gestor</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Equipo de protección personal-Selección, uso y manejo en los centros de trabajo<br><b>NOM-017-STPS-2008.</b></td>
                                                <?php if($datos5[5] == 1){ ?>
                                                <td value="1" id="017stps" class="active">Si</td>
                                                <?php } if($datos5[5] == 0) { ?>
                                                <td value="0" id="017stps" class="success">No</td>
                                                <?php } if($datos5 == 500) { ?>
                                                <td value="" id="017stps"> - </td>
                                                <?php } ?>
                                                <td>Bianual/Actualización</td>
                                                <td>Federal</td>
                                                <td>Documental</td>
                                                <td>Gestor</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Sistema armonizado para la identificación y comunicación de peligros y riesgos por sustancias químicas peligrosas en los centros de trabajo<br><b>NOM-018-STPS-2015.</b></td>
                                                <?php if($datos5[6] == 1){ ?>
                                                <td value="1" id="018stps" class="active">Si</td>
                                                <?php } if($datos5[6] == 0) { ?>
                                                <td value="0" id="018stps" class="success">No</td>
                                                <?php } if($datos5 == 500) { ?>
                                                <td value="" id="018stps"> - </td>
                                                <?php } ?>                                                
                                                <td>Bianual/Actualización</td>
                                                <td>Federal</td>
                                                <td>Documental</td>
                                                <td>Gestor</td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>Constitución, integración, organización y funcionamiento de las comisiones de seguridad e higiene<br><b>NOM-019-STPS-2011.</b></td>
                                                <?php if($datos5[7] == 1){ ?>
                                                <td value="1" id="019stps" class="active">Si</td>
                                                <?php } if($datos5[7] == 0) { ?>
                                                <td value="0" id="019stps" class="success">No</td>
                                                <?php } if($datos5 == 500) { ?>
                                                <td value="" id="019stps"> - </td>
                                                <?php } ?>
                                                <td>Bianual/Actualización</td>
                                                <td>Federal</td>
                                                <td>Documental</td>
                                                <td>Gestor</td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>Evaluación de electricidad estática en los centros de trabajo<br><b>NOM-022-STPS-2008</b></td>
                                                <?php if($datos5[8] == 1){ ?>
                                                <td value="1" id="022stps" class="active">Si</td>
                                                <?php } if($datos5[8] == 0) { ?>
                                                <td value="0" id="022stps" class="success">No</td>
                                                <?php } if($datos5 == 500) { ?>
                                                <td value="" id="022stps"> - </td>
                                                <?php } ?>                                                
                                                <td>Anual</td>
                                                <td>Federal</td>
                                                <td>Documental</td>
                                                <td>Gestor</td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>Condiciones de seguridad e higiene en los centros de trabajo<br><b>NOM-024-STPS-2015</b></td>
                                                <?php if($datos5[9] == 1){ ?>
                                                <td value="1" id="024stps" class="active">Si</td>
                                                <?php } if($datos5[9] == 0) { ?>
                                                <td value="0" id="024stps" class="success">No</td>
                                                <?php } if($datos5 == 500) { ?>
                                                <td value="" id="024stps"> - </td>
                                                <?php } ?> 

                                                <td>Anual</td>
                                                <td>Federal</td>
                                                <td>Documental</td>
                                                <td>Gestor</td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>Evaluación de las condiciones de iluminación<br><b>NOM-025-STPS-2008</b></td>
                                                <?php if($datos5[10] == 1){ ?>
                                                <td value="1" id="025stps" class="active">Si</td>
                                                <?php } if($datos5[10] == 0) { ?>
                                                <td value="0" id="025stps" class="success">No</td>
                                                <?php } if($datos5 == 500) { ?>
                                                <td value="" id="025stps"> - </td>
                                                <?php } ?>
                                                <td>Bianual/Actualización</td>
                                                <td>Federal</td>
                                                <td>Documental</td>
                                                <td>Gestor</td>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>Colores y señales de seguridad e higiene, e identificación de riesgos por fluidos conducidos en tuberías<br><b>NOM-026-STPS-2008.</b></td>
                                                <?php if($datos5[11] == 1){ ?>
                                                <td value="1" id="026stps" class="active">Si</td>
                                                <?php } if($datos5[11] == 0) { ?>
                                                <td value="0" id="026stps" class="success">No</td>
                                                <?php } if($datos5 == 500) { ?>
                                                <td value="" id="026stps"> - </td>
                                                <?php } ?>                                                
                                                <td>Bianual/Actualización</td>
                                                <td>Federal</td>
                                                <td>Documental</td>
                                                <td>Gestor</td>
                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td>Actividades de soldadura y corte-Condiciones de seguridad e higiene<br><b>NOM-027-STPS-2008.</b></td>
                                                <?php if($datos5[12] == 1){ ?>
                                                <td value="1" id="027stps" class="active">Si</td>
                                                <?php } if($datos5[12] == 0) { ?>
                                                <td value="0" id="027stps" class="success">No</td>
                                                <?php } if($datos5 == 500) { ?>
                                                <td value="" id="027stps"> - </td>
                                                <?php } ?>
                                                <td>Bianual/Actualización</td>
                                                <td>Federal</td>
                                                <td>Documental</td>
                                                <td>Gestor</td>
                                            </tr>
                                            <tr>
                                                <td>14</td>
                                                <td>Mantenimiento de las instalaciones eléctricas en los centros de trabajo<br><b>NOM-029-STPS-2011.</b></td>
                                                <?php if($datos5[13] == 1){ ?>
                                                <td value="1" id="029stps" class="active">Si</td>
                                                <?php } if($datos5[13] == 0) { ?>
                                                <td value="0" id="029stps" class="success">No</td>
                                                <?php } if($datos5 == 500) { ?>
                                                <td value="" id="029stps"> - </td>
                                                <?php } ?>
                                                <td>Bianual/Actualización</td>
                                                <td>Federal</td>
                                                <td>Documental</td>
                                                <td>Gestor</td>
                                            </tr><tr>
                                                <td>15</td>
                                                <td>Condiciones de seguridad para realizar trabajos en espacios confinados<br><b>NOM-033-STPS-2015.</b></td>
                                                <?php if($datos5[14] == 1){ ?>
                                                <td value="1" id="033stps" class="active">Si</td>
                                                <?php } if($datos5[14] == 0) { ?>
                                                <td value="0" id="033stps" class="success">No</td>
                                                <?php } if($datos5 == 500) { ?>
                                                <td value="" id="033stps"> - </td>
                                                <?php } ?>

                                                <td>Anual</td>
                                                <td>Federal</td>
                                                <td>Documental</td>
                                                <td>Gestor</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <?php if($datos5 == 000000000000000){?>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">             
                                    <button id="guardarDocstp" class="btn btn-success notika-btn-success">Guardar</button>                   
                                </div>
                                <?php }else{ ?>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">             
                                    <button id="actualizarDocstp" class="btn btn-info notika-btn-info">Actualizar </button>                   
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

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