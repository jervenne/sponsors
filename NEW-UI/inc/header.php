<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>Eventory</title>

    <meta name="description" content="AppUI is a Bootstrap Admin Web App Template created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="apple-touch-icon" href="img/icon57.png" sizes="57x57">
    <link rel="apple-touch-icon" href="img/icon72.png" sizes="72x72">
    <link rel="apple-touch-icon" href="img/icon76.png" sizes="76x76">
    <link rel="apple-touch-icon" href="img/icon114.png" sizes="114x114">
    <link rel="apple-touch-icon" href="img/icon120.png" sizes="120x120">
    <link rel="apple-touch-icon" href="img/icon144.png" sizes="144x144">
    <link rel="apple-touch-icon" href="img/icon152.png" sizes="152x152">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Bootstrap is included in its original form, unaltered -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Related styles of various icon packs and plugins -->
    <link rel="stylesheet" href="css/plugins.css">

    <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
    <link rel="stylesheet" href="css/main.css">

    <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

    <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
    <link rel="stylesheet" href="css/themes.css">
    <!-- END Stylesheets -->

    <!-- Modernizr (browser feature detection library) -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
    <!-- Page Wrapper -->
    <!-- In the PHP version you can set the following options from inc/config file -->
<!--
    Available classes:

    'page-loading'      enables page preloader
-->
<div id="page-wrapper" class="page-loading">
    <!-- Preloader -->
    <!-- Preloader functionality (initialized in js/app.js) - pageLoading() -->
    <!-- Used only if page preloader enabled from inc/config (PHP version) or the class 'page-loading' is added in body element (HTML version) -->
    <div class="preloader">
        <div class="inner">
            <!-- Animation spinner for all modern browsers -->
            <div class="preloader-spinner themed-background hidden-lt-ie10"></div>

            <!-- Text for IE9 -->
            <h3 class="text-primary visible-lt-ie10"><strong>Loading..</strong></h3>
        </div>
    </div>
    <!-- END Preloader -->

    <!-- Page Container -->
    <!-- In the PHP version you can set the following options from inc/config file -->
    <!--
        Available #page-container classes:

        'sidebar-visible-lg-mini'                       main sidebar condensed - Mini Navigation (> 991px)
        'sidebar-visible-lg-full'                       main sidebar full - Full Navigation (> 991px)

        'sidebar-alt-visible-lg'                        alternative sidebar visible by default (> 991px) (You can add it along with another class)

        'header-fixed-top'                              has to be added only if the class 'navbar-fixed-top' was added on header.navbar
        'header-fixed-bottom'                           has to be added only if the class 'navbar-fixed-bottom' was added on header.navbar

        'fixed-width'                                   for a fixed width layout (can only be used with a static header/main sidebar layout)
    -->
    <div id="page-container" class="header-fixed-top sidebar-visible-lg-full">
        <!-- Alternative Sidebar -->
        <div id="sidebar-alt" tabindex="-1" aria-hidden="true">
            <!-- Toggle Alternative Sidebar Button (visible only in static layout) -->
            <a href="javascript:void(0)" id="sidebar-alt-close" onclick="App.sidebar('toggle-sidebar-alt');"><i class="fa fa-times"></i></a>

            <!-- Wrapper for scrolling functionality -->
            <div id="sidebar-scroll-alt">
                <!-- Sidebar Content -->
                <div class="sidebar-content">
                    <!-- Color Themes -->
                    <!-- Preview a theme on a page functionality can be found in js/app.js - colorThemePreview() -->
                    <div class="sidebar-section">
                        <h2 class="text-light">Colors</h2>
                        <ul class="sidebar-themes clearfix">
                            <li>
                                <a href="javascript:void(0)" class="themed-background-default" data-theme="default" data-theme-navbar="navbar-inverse"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="themed-background-social" data-theme="css/themes/social.css" data-theme-navbar="navbar-inverse"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="themed-background-flat" data-theme="css/themes/flat.css" data-theme-navbar="navbar-inverse"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="themed-background-amethyst" data-theme="css/themes/amethyst.css" data-theme-navbar="navbar-inverse"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="themed-background-creme" data-theme="css/themes/creme.css" data-theme-navbar="navbar-inverse"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="themed-background-passion" data-theme="css/themes/passion.css" data-theme-navbar="navbar-inverse"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="themed-background-default themed-navbar-light" data-theme="default" data-theme-navbar="navbar-default"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="themed-background-social themed-navbar-light" data-theme="css/themes/social.css" data-theme-navbar="navbar-default"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="themed-background-flat themed-navbar-light" data-theme="css/themes/flat.css" data-theme-navbar="navbar-default"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="themed-background-amethyst themed-navbar-light" data-theme="css/themes/amethyst.css" data-theme-navbar="navbar-default"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="themed-background-creme themed-navbar-light" data-theme="css/themes/creme.css" data-theme-navbar="navbar-default"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="themed-background-passion themed-navbar-light" data-theme="css/themes/passion.css" data-theme-navbar="navbar-default"></a>
                            </li>
                        </ul>
                    </div>
                    <!-- END Color Themes -->

                    <!-- Profile -->
                    <div class="sidebar-section">
                        <h2 class="text-light">Profile</h2>
                        <form action="index.html" method="post" class="form-control-borderless" onsubmit="return false;">
                            <div class="form-group">
                                <label for="side-profile-name">Name</label>
                                <input type="text" id="side-profile-name" name="side-profile-name" class="form-control" value="John Doe">
                            </div>
                            <div class="form-group">
                                <label for="side-profile-email">Email</label>
                                <input type="email" id="side-profile-email" name="side-profile-email" class="form-control" value="john.doe@example.com">
                            </div>
                            <div class="form-group">
                                <label for="side-profile-password">New Password</label>
                                <input type="password" id="side-profile-password" name="side-profile-password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="side-profile-password-confirm">Confirm New Password</label>
                                <input type="password" id="side-profile-password-confirm" name="side-profile-password-confirm" class="form-control">
                            </div>
                            <div class="form-group remove-margin">
                                <button type="submit" class="btn btn-effect-ripple btn-primary" onclick="App.sidebar('close-sidebar-alt');">Save</button>
                            </div>
                        </form>
                    </div>
                    <!-- END Profile -->

                    <!-- Settings -->
                    <div class="sidebar-section">
                        <h2 class="text-light">Settings</h2>
                        <form action="index.html" method="post" class="form-horizontal form-control-borderless" onsubmit="return false;">
                            <div class="form-group">
                                <label class="col-xs-7 control-label-fixed">Notifications</label>
                                <div class="col-xs-5">
                                    <label class="switch switch-success"><input type="checkbox" checked><span></span></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-7 control-label-fixed">Public Profile</label>
                                <div class="col-xs-5">
                                    <label class="switch switch-success"><input type="checkbox" checked><span></span></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-7 control-label-fixed">Enable API</label>
                                <div class="col-xs-5">
                                    <label class="switch switch-success"><input type="checkbox"><span></span></label>
                                </div>
                            </div>
                            <div class="form-group remove-margin">
                                <button type="submit" class="btn btn-effect-ripple btn-primary" onclick="App.sidebar('close-sidebar-alt');">Save</button>
                            </div>
                        </form>
                    </div>
                    <!-- END Settings -->
                </div>
                <!-- END Sidebar Content -->
            </div>
            <!-- END Wrapper for scrolling functionality -->
        </div>
        <!-- END Alternative Sidebar -->
        <div id="sidebar">
            <!-- Sidebar Brand -->
            <div id="sidebar-brand" class="themed-background">
                <a href="index.html" class="sidebar-title">
                    <i class="gi gi-magic"></i> <span class="sidebar-nav-mini-hide">EVENTORY</span>
                </a>
            </div>
            <!-- END Sidebar Brand -->

            
        </div>

        <!-- Main Container -->
        <div id="main-container" style="margin:0px">
            <!-- Header -->
            <!-- In the PHP version you can set the following options from inc/config file -->
            <!--
                Available header.navbar classes:

                'navbar-default'            for the default light header
                'navbar-inverse'            for an alternative dark header

                'navbar-fixed-top'          for a top fixed header (fixed main sidebar with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar())
                    'header-fixed-top'      has to be added on #page-container only if the class 'navbar-fixed-top' was added

                'navbar-fixed-bottom'       for a bottom fixed header (fixed main sidebar with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar()))
                    'header-fixed-bottom'   has to be added on #page-container only if the class 'navbar-fixed-bottom' was added
                -->
                <header class="navbar navbar-inverse navbar-fixed-top">
                    <!-- Left Header Navigation -->
                    <ul class="nav navbar-nav-custom">


                        <!-- Header Link -->
                        <li class="hidden-xs animation-fadeInQuick">
                            <a href="event-listings.html"><strong>Events Listings</strong></a>
                        </li>
                        <!-- END Header Link -->
                    </ul>
                    <!-- END Left Header Navigation -->

                    <!-- Right Header Navigation -->
                    <ul class="nav navbar-nav-custom pull-right">
                        <!-- Search Form -->
                        <li>
                            <form action="page_ready_search_results.html" method="post" class="navbar-form-custom" role="search">
                                <input type="text" id="top-search" name="top-search" class="form-control" placeholder="Search..">
                            </form>
                        </li>
                        <!-- END Search Form -->

                        <!-- Alternative Sidebar Toggle Button -->
                        <li>
                            <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar-alt');">
                                <i class="gi gi-settings"></i>
                            </a>
                        </li>
                        <!-- END Alternative Sidebar Toggle Button -->

                        <!-- User Dropdown -->
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="img/placeholders/avatars/avatar9.jpg" alt="avatar">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li class="dropdown-header">
                                    <strong>ADMINISTRATOR</strong>
                                </li>
                                <li>
                                    <a href="page_app_email.html">
                                        <i class="fa fa-inbox fa-fw pull-right"></i>
                                        Inbox
                                    </a>
                                </li>
                                <li>
                                    <a href="page_app_social.html">
                                        <i class="fa fa-pencil-square fa-fw pull-right"></i>
                                        Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="page_app_media.html">
                                        <i class="fa fa-picture-o fa-fw pull-right"></i>
                                        Media Manager
                                    </a>
                                </li>
                                <li class="divider"><li>
                                    <li>
                                        <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar-alt');">
                                            <i class="gi gi-settings fa-fw pull-right"></i>
                                            Settings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="page_ready_lock_screen.html">
                                            <i class="gi gi-lock fa-fw pull-right"></i>
                                            Lock Account
                                        </a>
                                    </li>
                                    <li>
                                        <a href="page_ready_login.html">
                                            <i class="fa fa-power-off fa-fw pull-right"></i>
                                            Log out
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END User Dropdown -->
                        </ul>
                        <!-- END Right Header Navigation -->
                    </header>
                    <!-- END Header -->
