<?php 
include 'inc/header.php';  
?>
<!-- Page content -->
<div id="page-content">
    <!-- Blank Header -->
    <div class="content-header">
        <div class="row">
            <div class="col-sm-6">
                <div class="header-section">
                    <h1>Links</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- END Blank Header -->

    <!-- Get Started Block -->
    <div class="block full">
        <!-- Get Started Title -->
            <h2><a href="event-create.php">Create Event</a></h2>
    </div>
    <div class="block full">
        <!-- Get Started Title -->
            <h2><a href="event-listings.php">View all Events</a></h2>
    </div>
    <div class="block full">
        <!-- Get Started Title -->
            <h2><a href="event-details.php?id=1">View an event (example)</a></h2>
    </div>
    <!-- END Get Started Block -->
</div>
<!-- END Page Content -->
</div>
<!-- END Main Container -->
</div>
<!-- END Page Container -->
</div>
<!-- END Page Wrapper -->

<!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
<script src="js/vendor/jquery-2.1.1.min.js"></script>
<script>!window.jQuery && document.write(decodeURI('%3Cscript src="js/vendor/jquery-2.1.1.min.js"%3E%3C/script%3E'));</script>

<!-- Bootstrap.js, Jquery plugins and Custom JS code -->
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/app.js"></script>
</body>
</html>