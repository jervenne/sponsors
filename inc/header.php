<?php
/**
 * top.php

 * The first block of code used in every page of the template
 * Start of html, head tag, as well as the sidebars and the header of the page are included here
 *
 */
?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title><?php echo $template['title'] ?></title>

        <meta name="description" content="<?php echo $template['description'] ?>">
        <meta name="author" content="<?php echo $template['author'] ?>">
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
        <link rel="stylesheet" href="css/bootstrap.css">

        <!-- Related styles of various icon packs and javascript plugins -->
        <link rel="stylesheet" href="css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="css/main.css">

        <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->
        <?php if ($template['theme']) { ?>
        <link id="theme-link" rel="stylesheet" href="css/themes/<?php echo $template['theme']; ?>.css">
        <?php } ?>

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="css/themes.css">
        <!-- END Stylesheets -->

        <!-- Modernizr (Browser feature detection library) & Respond.js (Enable responsive CSS code on browsers that don't support it, eg IE8) -->
        <script src="js/vendor/modernizr-2.7.1-respond-1.4.2.min.js"></script>
    </head>

    <!-- Body -->
   
  
    <body<?php if ($body_classes) { echo ' class="' . $body_classes . '"'; } ?>>

        <!-- Right Sidebar -->
        <!-- In the PHP version you can set the following options from the config file -->
        <!-- If you add the class .enable-hover, then a small portion of right sidebar will be visible and it can be opened with a mouse hover (> 1200px) (may affect website performance) -->
        <div id="sidebar-right"<?php if ($template['sidebar_right'] == 'enable-hover') { echo ' class="enable-hover"'; } ?>>
            <!-- Sidebar Content -->
            <div class="sidebar-content">
                <!-- User Info -->
                <div class="user-info">
                    <div class="user-details"><a href="page_special_user_profile.php">pixelcave</a><br><em>Web Designer</em></div>
                    <img src="img/template/avatar.png" alt="Avatar">
                </div>
                <!-- END User Info -->

                <!-- Wrapper for scrolling functionality -->
                <div class="sidebar-right-scroll">
                    <!-- Color Themes -->
                    <div class="sidebar-section">
                        <h2 class="sidebar-header">Color Themes</h2>
                        <!-- Change Color Theme functionality can be found in main.js - templateOptions() -->
                        <ul class="theme-colors clearfix">
                            <li class="active">
                                <a href="javascript:void(0)" class="themed-background-default themed-border-default" data-theme="default" data-toggle="tooltip" title="Default"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="themed-background-river themed-border-river" data-theme="css/themes/river.css" data-toggle="tooltip" title="River"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="themed-background-amethyst themed-border-amethyst" data-theme="css/themes/amethyst.css" data-toggle="tooltip" title="Amethyst"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="themed-background-dragon themed-border-dragon" data-theme="css/themes/dragon.css" data-toggle="tooltip" title="Dragon"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="themed-background-emerald themed-border-emerald" data-theme="css/themes/emerald.css" data-toggle="tooltip" title="Emerald"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="themed-background-grass themed-border-grass" data-theme="css/themes/grass.css" data-toggle="tooltip" title="Grass"></a>
                            </li>
                        </ul>
                    </div>
                    <!-- END Color Themes -->

                    <!-- User Menu -->
                    <ul class="sidebar-nav">
                        <li>
                            <h2 class="sidebar-header">Explore</h2>
                        </li>
                        <li>
                            <a href="page_special_timeline.php"><i class="fa fa-clock-o"></i> Updates</a>
                        </li>
                        <li>
                            <a href="page_special_user_profile.php"><i class="fa fa-pencil-square"></i> Profile</a>
                        </li>
                        <li>
                            <a href="page_special_message_center.php"><i class="fa fa-envelope-o"></i> Messages</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="fa fa-cog"></i> Settings</a>
                        </li>
                        <li>
                            <a href="page_special_login.php"><i class="fa fa-power-off"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- END User Menu -->

                    <!-- Notifications -->
                    <div class="sidebar-section">
                        <h2 class="sidebar-header">Notifications</h2>
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <small><em>2 hours ago</em></small><br>
                            PHP version updated successfully on <a href="javascript:void(0)">Server #5</a>
                        </div>
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <small><em>3 hours ago</em></small><br>
                            <a href="javascript:void(0)">Game Server</a> crashed but restored!
                        </div>
                        <div class="alert alert-warning alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <small><em>5 hours ago</em></small><br>
                            <a href="javascript:void(0)">FTP Server</a> went down for maintenance!
                        </div>
                    </div>
                    <!-- END Notifications -->

                    <!-- Messages -->
                    <div class="sidebar-section">
                        <h2 class="sidebar-header">Messages</h2>
                        <div class="alert alert-info">
                            <small><a href="page_special_user_profile.php">Claire</a>, 2 minutes ago</small><br>
                            Hi John, I just wanted to let you know that.. <a href="page_special_message_center.php">more</a>
                        </div>
                        <div class="alert alert-info">
                            <small><a href="page_special_user_profile.php">Michael</a>, 5 minutes ago</small><br>
                            The project is moving along just fine and we.. <a href="page_special_message_center.php">more</a>
                        </div>
                    </div>
                    <!-- END Messages -->
                </div>
                <!-- END Wrapper for scrolling functionality -->
            </div>
            <!-- END Sidebar Content -->
        </div>
        <!-- END Right Sidebar -->

        <!-- Page Container -->
        <!-- In the PHP version you can set the following options from the config file -->
        <!-- Add the class .full-width for a full width page (100%, 1920px max width) -->
        <div id="page-container"<?php if ($template['page'] == 'full-width') { echo ' class="full-width"'; } ?>>
            <!-- Header -->
            <!-- In the PHP version you can set the following options from the config file -->
            <!-- Add the class .navbar-default or .navbar-inverse for a light or dark header respectively -->
            <!-- Add the class .navbar-fixed-top or .navbar-fixed-bottom for a fixed header on top or bottom respectively -->
            <!-- If you add the class .navbar-fixed-top remember to add the class .header-fixed-top to <body> element -->
            <!-- If you add the class .navbar-fixed-bottom remember to add the class .header-fixed-bottom to <body> element -->
            <header class="navbar<?php if ($template['header_navbar']) { echo ' ' . $template['header_navbar']; } ?><?php if ($template['header']) { echo ' '. $template['header']; } ?>">
                <!-- Right Header Navigation -->
                <ul class="nav header-nav pull-right">
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-cogs"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-custom pull-right">
                            <li class="dropdown-header text-center">HEADER</li>
                            <li>
                                <div class="btn-group btn-group-justified btn-group-sm">
                                    <a href="javascript:void(0)" class="btn btn-default" id="options-header-default">Default</a>
                                    <a href="javascript:void(0)" class="btn btn-default" id="options-header-inverse">Inverse</a>
                                </div>
                            </li>
                            <li>
                                <div class="btn-group btn-group-justified btn-group-sm">
                                    <a href="javascript:void(0)" class="btn btn-default" id="options-header-top">Top</a>
                                    <a href="javascript:void(0)" class="btn btn-default" id="options-header-bottom">Bottom</a>
                                </div>
                            </li>
                            <li class="hidden-xs hidden-sm dropdown-header text-center">FULL WIDTH PAGE</li>
                            <li class="hidden-xs hidden-sm">
                                <div class="btn-group btn-group-justified btn-group-sm">
                                    <a href="javascript:void(0)" class="btn btn-default" id="options-fw-disable">Disable</a>
                                    <a href="javascript:void(0)" class="btn btn-default" id="options-fw-enable">Enable</a>
                                </div>
                            </li>
                            <li class="visible-lg dropdown-header text-center">PIN SIDEBARS</li>
                            <li class="visible-lg">
                                <div class="btn-group btn-group-justified btn-group-sm">
                                    <a href="javascript:void(0)" class="btn btn-default" id="options-pin-left">Pin Left</a>
                                    <a href="javascript:void(0)" class="btn btn-default" id="options-pin-right">Pin Right</a>
                                </div>
                            </li>
                            <li class="visible-lg dropdown-header text-center">SIDEBARS MOUSE HOVER</li>
                            <li class="visible-lg">
                                <div class="btn-group btn-group-justified btn-group-sm">
                                    <a href="javascript:void(0)" class="btn btn-default" id="options-hover-left">Left</a>
                                    <a href="javascript:void(0)" class="btn btn-default" id="options-hover-right">Right</a>
                                </div>
                            </li>
                            <li class="visible-lg hidden-lt-ie9 dropdown-header text-center">EFFECT WHEN SIDEBARS OPEN</li>
                            <li class="visible-lg hidden-lt-ie9 text-center">
                                <div class="btn-group-vertical btn-group-sm" id="option-effects">
                                    <button class="btn btn-default" data-fx="fx-none">None</button>
                                    <button class="btn btn-default" data-fx="fx-opacity">Opacity</button>
                                    <button class="btn btn-default" data-fx="fx-move">Move</button>
                                    <button class="btn btn-default" data-fx="fx-push">Push</button>
                                    <button class="btn btn-default" data-fx="fx-rotate">Rotate</button>
                                    <button class="btn btn-default" data-fx="fx-push-move">Push and Move</button>
                                    <button class="btn btn-default" data-fx="fx-push-rotate">Push and Rotate</button>
                                </div>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
                <!-- END Right Header Navigation -->


                <!-- Header Brand -->
                <a href="index.php" class="navbar-brand">
                    <img src="img/template/drop.png" alt="FreshUI">
                    <span><?php echo $template['name']; ?></span>
                </a>
                <!-- END Header Brand -->
            </header>
            <!-- END Header -->

            <!-- FX Container -->
            <!-- In the PHP version you can set the following options from the config file -->
            <!--
                All effects apply in resolutions larger than 1200px width
                Add one of the following classes to #fx-container for setting an effect to main content when one of the sidebars are opened
                'fx-none'           remove all effects (better website performance)
                'fx-opacity'        opacity effect
                'fx-move'           move effect
                'fx-push'           push effect
                'fx-rotate'         rotate effect
                'fx-push-move'      push-move effect
                'fx-push-rotate'    push-rotate effect
            -->
            <div id="fx-container"<?php if ($template['content_fx']) { echo ' class="'.$template['content_fx'].'"'; } ?>>