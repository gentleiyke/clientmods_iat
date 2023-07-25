<?php
global $hooks;
global $menu_array;
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="keywords" content="admin, dashboard, bootstrap, template, flat, modern, theme, responsive, fluid, retina, backend, html5, css, css3">
        <meta name="description" content="">
        <meta name="author" content="ThemeBucket">
        <!--<link rel="shortcut icon" href="#" type="image/png">-->
        <title><?php $hooks->do_action("the_title"); ?> - Index Assets Trading</title>

        <!--icheck-->
        <!--<link href="/assets/js/iCheck/skins/minimal/minimal.css" rel="stylesheet">
        <link href="/assets/js/iCheck/skins/square/square.css" rel="stylesheet">
        <link href="/assets/js/iCheck/skins/square/red.css" rel="stylesheet">
        <link href="/assets/js/iCheck/skins/square/blue.css" rel="stylesheet">-->

        <!--dashboard calendar-->
        <!--<link href="/assets/css/clndr.css" rel="stylesheet">-->

        <!--Morris Chart CSS -->
        <!--<link rel="stylesheet" href="/assets/js/morris-chart/morris.css">-->

        <!--common-->
       <!--<link href="/assets/css/style.css" rel="stylesheet">-->
        <!--<link href="/assets/css/style-responsive.css" rel="stylesheet">
        <link href="/assets/css/responsivetabel.css" rel="stylesheet">-->
        <?php $hooks->do_action("global_css"); ?>




        <style type="text/css">
            #loading{width: 100%;
height: 100%;
position: absolute;
background: rgba(128, 128, 128, 0.6);
color: #fff;
display:none;}
#loading p{width: 50%;
overflow: auto;
margin: auto;
position: absolute;
top: 0;
left: 0;
bottom: 0;
right: 0;
text-align: center;
font-size: 21px;
height: 24px;}
.pagination li {
    float: left;
    margin: 0 1px;
    border: 1px solid #ddd;
    list-style: none;
}

.pagination li.disabled a {
    color: #c7c7c7;
}

.pagination li a {
    color: #797979;
    padding: 5px 10px;
    display: inline-block;
}

.pagination li:hover a, .pagination li.active a {
    color: #fff;
    background: #5156be;
    text-decoration: none;
}

.pagination li:hover,
.pagination li.active {
    border-color: #5156be;
}

.pagination li.disabled:hover,
.pagination li.disabled:hover a {
    color: #C7C7C7;
    background: #fff;
    border-color: #DDDDDD;
    cursor: no-drop;
}

.pagination {
    float: right;
    margin-bottom: 15px;
}
.panel-heading {
    border: medium none;
    font-size: 13px;
    margin: -15px -15px -15px;
}

.panel-heading {
    padding: 8px 15px;
}
.panel-heading > li > a, .panel-heading > li.active > a, .panel-heading > li.active > a:hover, .panel-heading > li.active > a:focus {
    border-width: 0;
    border-radius: 0;
}

.panel-heading > li > a {
    color: #898989;
}

.panel-heading > li.active > a, .panel-heading > li > a:hover {
    color: #65CEA7;
    background: #fff;
}

.panel-heading > li:first-child.active > a, .panel-heading > li:first-child > a:hover {
    border-radius: 4px 0 0 0 !important;
    -webkit-border-radius: 4px 0 0 0 !important;
}

.panel-heading > li:first-child.active > a, .panel-heading > li:first-child > a:hover {
    border-radius: 0 !important;
    -webkit-border-radius: 0 !important;
}

.panel-heading > li:last-child.active > a, .panel-heading > li:last-child > a:hover {
    border-radius: 0 4px 0 0 !important;
    -webkit-border-radius: 0 4px 0 0 !important;
}

.panel-heading > li > a {
    margin-left: 1px;
    margin-right: 0px;
}

.panel-heading.dark {
    background: #353F4F;
    color: #fff;
}

.panel-heading.dark a:hover, .panel-heading.dark a:focus {
    color: #fff;
}
.panel {
    display: block;
    margin-left: 45px;
    position: relative;
    text-align: left;
    background: #fff;
}
.panel {
    margin-bottom: 5px;
}
.panel {
    margin-left: 0;
    margin-right: 45px;
}
.panel {
    float: right;
    margin-left: 15px;
}
.panel {
    float: left;
    margin-right: 20px;
}
.panel span {
    color: #49586e;
    font-size: 13px;
    font-weight: normal;
    text-transform: uppercase;
}

.panel h3 {
    font-size: 20px;
    font-weight: bold;
    line-height: 20px;
    margin: 0;
}

.panel h3 {
    color: #65cea7;
}

.panel h3 {
    color: #fc8675;
}
.panel {
        width: 100%;
    }

        </style>

        <!--Start of Merge Links-->
        <!-- App favicon -->
        <link rel="shortcut icon" href="asset/images/favicon.ico">
        <!-- plugin css -->
        <link href="/asset/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- preloader css -->
        <link rel="stylesheet" href="/asset/css/preloader.min.css" type="text/css" />
        <!-- Bootstrap Css -->
        <link href="/asset/css/bootstrap-rtl.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="/asset/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="/asset/css/app-rtl.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <!-- End of Merge Links -->



        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body data-layout="horizontal">

        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="/asset/images/logo-dark.png" alt="Index" height="24">
                                </span>
                                <span class="logo-lg">
                                    <img src="/asset/images/logo-dark.png" alt="Index" height="24"> <span class="logo-txt">Assets Trading</span>
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="/asset/images/logo-dark.png" alt="Index" height="24">
                                </span>
                                <span class="logo-lg">
                                    <img src="/asset/images/logo-dark.png" alt="Index" height="24"> <span class="logo-txt">Assets Trading</span>
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-none d-sm-inline-block">
                            <button type="button" class="btn header-item"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img id="header-lang-img" src="/asset/images/flags/us.jpg" alt="Header Language" height="16">
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="en">
                                    <img src="/asset/images/flags/us.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">English</span>
                                </a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp">
                                    <img src="/asset/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr">
                                    <img src="/asset/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it">
                                    <img src="/asset/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru">
                                    <img src="/asset/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                                </a>
                            </div>
                        </div>

                        <!--<div class="dropdown d-none d-sm-inline-block">
                            <button type="button" class="btn header-item" id="mode-setting-btn">
                                <i data-feather="moon" class="icon-lg layout-mode-dark"></i>
                                <i data-feather="sun" class="icon-lg layout-mode-light"></i>
                            </button>
                        </div>-->

                        <!--<div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="grid" class="icon-lg"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                                <div class="p-2">
                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="/asset/images/brands/github.png" alt="Github">
                                                <span>GitHub</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="/asset/images/brands/bitbucket.png" alt="bitbucket">
                                                <span>Bitbucket</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="/asset/images/brands/dribbble.png" alt="dribbble">
                                                <span>Dribbble</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="/asset/images/brands/dropbox.png" alt="dropbox">
                                                <span>Dropbox</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="/asset/images/brands/mail_chimp.png" alt="mail_chimp">
                                                <span>Mail Chimp</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="/asset/images/brands/slack.png" alt="slack">
                                                <span>Slack</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->

                        <!--<div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon position-relative" id="page-header-notifications-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="bell" class="icon-lg"></i>
                                <span class="badge bg-danger rounded-pill">5</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0"> Notifications </h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#!" class="small text-reset text-decoration-underline"> Unread (3)</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 230px;">
                                    <a href="#!" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <img src="/asset/images/users/avatar-3.jpg"
                                                class="me-3 rounded-circle avatar-sm" alt="user-pic">
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">James Lemire</h6>
                                                <div class="font-size-13 text-muted">
                                                    <p class="mb-1">It will seem like simplified English.</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>1 hour ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#!" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="avatar-sm me-3">
                                                <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                    <i class="bx bx-cart"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Your order is placed</h6>
                                                <div class="font-size-13 text-muted">
                                                    <p class="mb-1">If several languages coalesce the grammar</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>3 min ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#!" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="avatar-sm me-3">
                                                <span class="avatar-title bg-success rounded-circle font-size-16">
                                                    <i class="bx bx-badge-check"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Your item is shipped</h6>
                                                <div class="font-size-13 text-muted">
                                                    <p class="mb-1">If several languages coalesce the grammar</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>3 min ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#!" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <img src="/asset/images/users/avatar-6.jpg"
                                                class="me-3 rounded-circle avatar-sm" alt="user-pic">
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Salena Layfield</h6>
                                                <div class="font-size-13 text-muted">
                                                    <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>1 hours ago</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 border-top d-grid">
                                    <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                        <i class="mdi mdi-arrow-right-circle me-1"></i> <span>View More..</span> 
                                    </a>
                                </div>
                            </div>
                        </div>-->

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item right-bar-toggle me-2">
                                <i data-feather="settings" class="icon-lg"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item bg-soft-light border-start border-end" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="/asset/images/users/avatar-1.jpg"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium">Hi <?php echo strtoupper($_SESSION["uname"]); ?></span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="/profile"><i class="mdi mdi-face-profile font-size-16 align-middle me-1"></i> Profile</a>
                                <a class="dropdown-item" href="/profile/chpin"><i class="mdi mdi-lock font-size-16 align-middle me-1"></i> Change Pin</a>
                                <div class="dropdown-divider"></div>
                                <?php if (isset($_SESSION["godmode"]["status"])) { ?>
                                    <a class="dropdown-item" href="/godmode-off"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Back as Admin</a>
                                <?php } else { ?>
                                    <a class="dropdown-item" href="/logout"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a>
                                <?php } ?>
                            </div>
                        </div>
            
                    </div>
                </div>
            </header>

            <div class="topnav">
                <div class="container-fluid">
                    <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                        <div class="collapse navbar-collapse" id="topnav-menu-content">
                            <?php menu_render($menu_array); ?>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <!-- TradingView Widget BEGIN -->
                                    <div class="tradingview-widget-container">
                                        <div class="tradingview-widget-container__widget"></div>
                                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                                              {
                                              "symbols": [
                                                {
                                                  "proName": "FOREXCOM:SPXUSD",
                                                  "title": "S&P 500"
                                                },
                                                {
                                                  "proName": "FOREXCOM:NSXUSD",
                                                  "title": "US 100"
                                                },
                                                {
                                                  "proName": "FX_IDC:EURUSD",
                                                  "title": "EUR/USD"
                                                },
                                                {
                                                  "proName": "BITSTAMP:BTCUSD",
                                                  "title": "Bitcoin"
                                                },
                                                {
                                                  "proName": "BITSTAMP:ETHUSD",
                                                  "title": "Ethereum"
                                                },
                                                {
                                                  "description": "ETH/BTC",
                                                  "proName": "BINANCE:ETHBTC"
                                                },
                                                {
                                                  "description": "Tesla",
                                                  "proName": "NASDAQ:TSLA"
                                                },
                                                {
                                                  "description": "EUR/USD",
                                                  "proName": "FX:EURUSD"
                                                },
                                                {
                                                  "description": "GBP/USD",
                                                  "proName": "FX:GBPUSD"
                                                },
                                                {
                                                  "description": "ETH Futures",
                                                  "proName": "CME:ETH1!"
                                                },
                                                {
                                                  "description": "BTC Futures",
                                                  "proName": "CME:BTC1!"
                                                }
                                              ],
                                              "showSymbolLogo": true,
                                              "colorTheme": "light",
                                              "isTransparent": true,
                                              "displayMode": "adaptive",
                                              "locale": "en"
                                            }
                                              </script>
                                            </div>
                                            <!-- TradingView Widget END -->
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-h-100">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <span class="text-muted mb-3 lh-1 d-block text-truncate">My Wallet</span>
                                                <h4 class="mb-3">
                                                    <span><?php echo ($_SESSION["role"] == "1" ? "$" . current_fund() : "UNLIMITED"); ?></span>
                                                </h4>
                                            </div>
        
                                            <div class="col-6">
                                                <div id="mini-chart1" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                                            </div>
                                        </div>
                                        <div class="text-nowrap">
                                            <span class="badge bg-soft-success text-success">
                                                <strong>
                                                    <?php 
                                                            if (verifyAccount()) {
                                                                echo "ACCOUNT VERIFIED";
                                                            } else {
                                                                echo "ACCOUNT NOT VERIFIED";
                                                            }
                                                    ?>
                                                </strong>
                                            </span>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
        
                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-h-100">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <span class="text-muted mb-3 lh-1 d-block text-truncate">Number of Trades</span>
                                                <h4 class="mb-3">
                                                    <span data-target="6258"><?php echo displayTranscount(); ?></span>
                                                </h4>
                                            </div>
                                            <div class="col-6">
                                                <div id="mini-chart2" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                                            </div>
                                        </div>
                                        <div class="text-nowrap">
                                            <span class="badge bg-soft-success text-success"><?php echo '+'. displayWeeklytrans(); ?></span>
                                            <span class="ms-1 text-muted font-size-13">Since last week</span>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col-->
        
                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-h-100">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <span class="text-muted mb-3 lh-1 d-block text-truncate">Invested Amount</span>
                                                <h4 class="mb-3">
                                                    $<span data-target="4.32"><?php echo sumTransactions(); ?></span>M
                                                </h4>
                                            </div>
                                            <div class="col-6">
                                                <div id="mini-chart3" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                                            </div>
                                        </div>
                                        <div class="text-nowrap">
                                            <span class="badge bg-soft-success text-success"><?php echo "+". sumWeekly() ."k"; ?></span>
                                            <span class="ms-1 text-muted font-size-13">Since last week</span>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
        
                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-h-100">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <span class="text-muted mb-3 lh-1 d-block text-truncate">Uncleared Funds</span>
                                                <h4 class="mb-3">
                                                    <span><?php echo ($_SESSION["role"] == "1" ? "$" . current_register_fund() : "UNLIMITED"); ?></span>
                                                </h4>
                                            </div>
                                            <div class="col-6">
                                                <div id="mini-chart4" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                                            </div>
                                        </div>
                                        <div class="text-nowrap">
                                            <span class="badge bg-soft-success text-success">0%</span>
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->    
                        </div>
                        <!-- end row-->
       