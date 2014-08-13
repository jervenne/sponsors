<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/top.php';    // Meta data and header   ?>

<!-- Page content -->
<div id="page-content" class="block">
    <!-- Dashboard Header -->
    <div class="block-header">
        <div class="row remove-margin">
            <!-- Title -->
            <div class="col-md-4">
                <!-- If you do not want a link in the header, instead of .header-title-link you can use a div with the class .header-section -->
                <a href="" class="header-title-link">
                    <h1>Hall 11<br><small>Welcome admin!</small></h1>
                </a>
            </div>
            <!-- END Title -->

            <!-- Statistics -->
            <div class="col-md-8">
                <!-- Outer Grid -->
                <div class="row">
                    <div class="col-sm-6">
                        <!-- Inner Grid 1 -->
                        <div class="row">
                            <div class="col-xs-6">
                                <a href="page_comp_charts.php" class="header-link">
                                    <h1 class="animation-pullDown">
                                        <strong>0</strong><br><small>Requests</small>
                                    </h1>
                                </a>
                            </div>
                            <div class="col-xs-6">
                                <a href="page_comp_charts.php" class="header-link">
                                    <h1 class="animation-pullDown">
                                        <strong>0</strong><br><small>Sponsors</small>
                                    </h1>
                                </a>
                            </div>
                        </div>
                        <!-- END Inner Grid 1 -->
                    </div>
                    <div class="col-sm-6">
                        <!-- Inner Grid 2 -->
                        <div class="row">
                            <div class="col-xs-6">
                                <a href="page_special_timeline.php" class="header-link">
                                    <h1 class="animation-pullDown">
                                        <strong>1</strong><br><small>Events</small>
                                    </h1>
                                </a>
                            </div>
                            <div class="col-xs-6">
                                <a href="page_special_message_center.php" class="header-link">
                                    <h1 class="animation-pullDown">
                                        <strong>0</strong><br><small>Messages</small>
                                    </h1>
                                </a>
                            </div>
                        </div>
                        <!-- END Inner Grid 2 -->
                    </div>
                </div>
                <!-- END Outer Grid  -->
            </div>
            <!-- END Statistics -->
        </div>
		<!-- Action buttons -->
			<div>
			<a href='organisation_info.php'><button type="button">Create Event</button>
			<a href='organisation_info.php'><button type="button">Add Member</button>
			<a href='organisation_info.php'><button type="button">View Members</button>
			</div>
		<!-- End of Action buttons -->
    </div>	
    <!-- END Dashboard Header -->
    <!-- Dashboard Content -->
    <div class="row gutter30">
		<div class="col-md-6">

            <!-- Recent Updates Block -->
            <div class="block full">
                <!-- Recent Updates Title -->
                <div class="block-title">
                    <h2><i class="fa fa-rss"></i> Profile</h2>
                </div>
                <!-- END Recent Updates Title -->

                <!-- Update Profile Form -->
				<div>
				Hi there, we are a group of students from Hall 11 of NTU. We are actively looking for sponsors to help sponsor
				some of our upcoming event, thanks for visiting our profile.
				.
				.
				.
				</div>
                <br><form action="index.php" method="post" class="profile-status block-top" onsubmit="return false;">
                    <div class="clearfix">
                        <button type="submit" id="status-update-btn" class="btn btn-primary pull-right"><i class="fa fa-angle-right"></i> Edit</button>
                        <a href="javascript:void(0)" class="btn btn-link btn-icon" data-toggle="tooltip" data-placement="bottom" title="Add Location"><i class="fa fa-location-arrow"></i></a>
                        <a href="javascript:void(0)" class="btn btn-link btn-icon" data-toggle="tooltip" data-placement="bottom" title="Record Voice"><i class="fa fa-microphone"></i></a>
                        <a href="javascript:void(0)" class="btn btn-link btn-icon" data-toggle="tooltip" data-placement="bottom" title="Take Photo"><i class="fa fa-camera"></i></a>
                        <a href="javascript:void(0)" class="btn btn-link btn-icon" data-toggle="tooltip" data-placement="bottom" title="Upload File"><i class="fa fa-cloud-upload"></i></a>
                    </div>
                </br></form>
                <!-- END Update Status Form -->

                <!-- Updates -->
                <div class="timeline-con">
                    <ul class="timeline remove-margin">
                        <li class="alt-color">
                            <div class="timeline-item">
                                <h4 class="timeline-title"><small class="timeline-meta">3 min ago</small><i class="fa fa-plus"></i> Added Event</h4>
                                <div class="timeline-content">
                                    <p class="clearfix">
                                        <img src="img/template/avatar.png" alt="avatar" class="img-circle pull-right">
                                        <a href="page_special_user_profile.php">Sports</a> Soccer game!
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- END Updates -->
            </div>
            <!-- END Recent Updates Block -->
        </div>
        <div class="col-md-6">

            <!-- Extra Block -->
            <div class="block">
                <!-- Extra Title -->
                <div class="block-title">
                    <h2></i>Organisation Logo</h2>
                </div>
                <!-- END Extra Title -->

                <!-- Extra Content -->
                <div class="content-text clearfix">
                    <img src="img/template/hall 11.jpg" alt="avatar" class="img-circle img-responsive pull-left">
                </div>
                <!-- END Extra Content -->
            </div>
            <!-- END Extra Block -->
        </div>
    </div>
    <!-- END Dashboard Content -->
</div>
<!-- END Page Content -->

<!-- Remember to include excanvas for IE8 chart support -->
<!--[if IE 8]><script src="js/helpers/excanvas.min.js"></script><![endif]-->

<?php include 'inc/footer.php'; // Footer and scripts ?>

<!-- Javascript code only for this page -->
<script>
    $(function(){
        // Set up timeline scrolling functionality
        $('.timeline-con').slimScroll({ height: 565, color: '#000000', size: '3px', touchScrollStep: 100, distance: '0' });
        $('.timeline').css('min-height', '565px');

        // Demo status updates and timeline functionality
        var statusUpdate    = $('#status-update');
        var statusUpdateVal = '';

        $('#accept-request').click(function(){ $(this).replaceWith('<span class="label label-success">Awesome, you became friends!'); });

        $('#status-update-btn').click(function(){
            statusUpdateVal = statusUpdate.val();

            if ( statusUpdateVal ) {
                $('.timeline-con').slimScroll({scrollTo: '0px'});

                $('.timeline').prepend('<li class="animation-pullDown">' +
                        '<div class="timeline-item">' +
                        '<h4 class="timeline-title"><small class="timeline-meta">just now</small><i class="fa fa-file"></i> Status</h4>' +
                        '<div class="timeline-content"><p>' + $('<div />').text(statusUpdateVal).html().substring(0, 200) + '</p><em>Demo functionality</em></div>' +
                        '</div>' +
                        '</li>');

                statusUpdate.val('').attr('placeholder', 'I hope you like it! :-)');
            }
        });

        /*
         * Flot 0.8.2 Jquery plugin is used for charts
         *
         * For more examples or getting extra plugins you can check http://www.flotcharts.org/
         * Plugins included in this template: pie, resize, stack
         */

        // Get the elements where we will attach the charts
        var chartClassic    = $('#chart-classic');

        // Random data for the charts
        var dataEarnings    = [[0, 60],[1, 100],[2, 80],[3, 84],[4, 124],[5, 90],[6, 150]];
        var dataSales       = [[0, 30],[1, 50],[2, 40],[3, 42],[4, 62],[5, 45],[6, 75]];

        /* Classic Chart */
        $.plot(chartClassic,
            [
                {
                    data: dataEarnings,
                    lines: { show: true, fill: true, fillColor: { colors: [{ opacity: 0.25 }, { opacity: 0.25 }] } },
                    points: { show: true, radius: 7 }
                },
                {
                    data: dataSales,
                    lines: { show: true, fill: true, fillColor: { colors: [{ opacity: 0.15 }, { opacity: 0.15 }] } },
                    points: { show: true, radius: 7 }
                }
            ],
            {
                colors: ['#f39c12', '#2e3030'],
                legend: { show: false },
                grid: { borderWidth: 0, hoverable: true, clickable: true },
                yaxis: { show: false },
                xaxis: { show: false }
            }
        );

        // Creating and attaching a tooltip to the classic chart
        var previousPoint = null, ttlabel = null;
        chartClassic.bind('plothover', function (event, pos, item) {

            if (item) {
                if (previousPoint !== item.dataIndex) {
                    previousPoint = item.dataIndex;

                    $('#chart-tooltip').remove();
                    var x = item.datapoint[0], y = item.datapoint[1];

                    if ( item.seriesIndex === 1 ) {
                        ttlabel = '<strong>' + y +'</strong> sales';
                    } else {
                        ttlabel = '$ <strong>' + y +'</strong>';
                    }

                    $('<div id="chart-tooltip" class="chart-tooltip">' + ttlabel + '</div>')
                        .css( { top: item.pageY - 45, left: item.pageX + 5 }).appendTo("body").show();
                }
            }
            else {
                $('#chart-tooltip').remove();
                previousPoint = null;
            }
        });
    });
</script>

<?php include 'inc/bottom.php'; // Close body and html tags ?>