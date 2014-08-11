<?php include 'inc/config.php'; // Configuration php file ?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>Eventory</title>

        <meta name="description" content="<?php echo $template['description'] ?>">
        <meta name="author" content="<?php echo $template['author'] ?>">
        <meta name="robots" content="noindex, nofollow">

        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="img/shake_hand.ico">
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
    <body>
        
        <!-- Login Container -->
        <div id="login-container">
            <!-- Page Content -->
            <div id="page-content" class="block remove-margin">
                <!-- Login Title -->
                <div class="block-header">
                    <div class="header-section">
                        <h1>Get Started!</h1>
                    </div>
                </div>
				<!-- END Login Title -->
		
		<!-- Search Container -->
			<!-- Pre-search -->
				<h1><small>Find an organisation:</small></h1>
			
			<br><form>
                <input type="text" placeholder="Search..." required>
                <input type="button" value="Search">
			</br></form>
    </body>
</html>