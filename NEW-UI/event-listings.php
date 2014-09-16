<?php 
include 'inc/header.php';  
include 'inc/dbconfig.php';
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);
?>

<!-- Page content -->
<div id="page-content">
    <!-- Gallery Header -->
    <div class="content-header">
        <!-- Gallery Filter Links -->
        <!-- Custom Gallery functionality is initialized in js/pages/compGallery.js -->
        <!-- Add the category value you want each link in .gallery-filter to filter out in its data-category attribute. Add the value 'all' to show all items -->
        <div class="header-section text-center">
            <div class="btn-group gallery-filter">
                <a href="javascript:void(0)" class="btn btn-effect-ripple btn-primary" data-category="preferred">My Preferred</a>
                <a href="javascript:void(0)" class="btn btn-effect-ripple btn-primary active" data-category="all">All</a>
                <a href="javascript:void(0)" class="btn btn-effect-ripple btn-primary" data-category="new">New</a>
                <a href="javascript:void(0)" class="btn btn-effect-ripple btn-primary" data-category="popular">Popular</a>
                <a href="javascript:void(0)" class="btn btn-effect-ripple btn-primary" data-category="soon">Happening Soon!</a>
            </div>
        </div>
        <!-- END Gallery Filter Links -->
        <!--
        <div class="alert alert-info alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4>Do you know that you filter to your preferred event type? To customize your filters, click here.</h4>
        </div>
    -->
</div>
<!-- END Gallery Header -->

<!-- Gallery Items -->
<div class="row gallery">
    <div class="col-sm-4">
        <div class="gallery-image-container animation-fadeInQuick2" data-category="new">
            <a href="page_ready_article.html" class="widget">
                <div class="widget-content themed-background text-light-op grid-header">
                    <span class="pull-right"><i class="fa fa-users"></i>20000</span>
                    <i class="fa fa-fw fa-file-text"></i> <strong>Concert</strong>
                </div>
                <div class="widget-image widget-image-sm">
                    <img src="img/placeholders/photos/photo19.jpg" alt="image">
                    <div class="widget-image-content">
                    </div>
                </div>
                <div class="widget-content text-dark">
                    <div class="g-row">
                        <span class="pull-right">14 Oct 2014</span>
                        <h3 class="widget-heading"><strong>Big Shot Workshop</strong></h3>
                    </div>
                    <div class="g-row">
                        <h5 class="widget-heading"><em>by Standard Chartered</em></h5>
                    </div>
                    <div class="g-row event-desc">
                        <h4 class="widget-heading">Wanna be a bigshot? You have to attend this. Fun games and informative session!</h4>
                    </div>
                    <div class="g-row">
                        <h6 class="widget-heading"><i class="fa fa-tags"></i> <span class="label label-default">Young Professionals</span>, <span class="label label-default">General Crowd</span>, <span class="label label-default">Seniors</span></h6>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="gallery-image-container animation-fadeInQuick2" data-category="popular">
            <a href="page_ready_article.html" class="widget">
                <div class="widget-content themed-background text-light-op grid-header">
                    <span class="pull-right"><i class="fa fa-users"></i>20000</span>
                    <i class="fa fa-fw fa-file-text"></i> <strong>Concert</strong>
                </div>
                <div class="widget-image widget-image-sm">
                    <img src="img/placeholders/photos/photo19.jpg" alt="image">
                    <div class="widget-image-content">
                    </div>
                </div>
                <div class="widget-content text-dark">
                    <div class="g-row">
                        <span class="pull-right">14 Oct 2014</span>
                        <h3 class="widget-heading"><strong>Big Shot Workshop</strong></h3>
                    </div>
                    <div class="g-row">
                        <h5 class="widget-heading"><em>by Standard Chartered</em></h5>
                    </div>
                    <div class="g-row event-desc">
                        <h4 class="widget-heading">Wanna be a bigshot? You have to attend this. Fun games and informative session!</h4>
                    </div>
                    <div class="g-row">
                        <h6 class="widget-heading"><i class="fa fa-tags"></i> <span class="label label-default">Young Professionals</span>, <span class="label label-default">General Crowd</span>, <span class="label label-default">Seniors</span></h6>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="gallery-image-container animation-fadeInQuick2" data-category="soon">
            <a href="page_ready_article.html" class="widget">
                <div class="widget-content themed-background text-light-op grid-header">
                    <span class="pull-right"><i class="fa fa-users"></i>20000</span>
                    <i class="fa fa-fw fa-file-text"></i> <strong>Concert</strong>
                </div>
                <div class="widget-image widget-image-sm">
                    <img src="img/placeholders/photos/photo19.jpg" alt="image">
                    <div class="widget-image-content">
                    </div>
                </div>
                <div class="widget-content text-dark">
                    <div class="g-row">
                        <span class="pull-right">14 Oct 2014</span>
                        <h3 class="widget-heading"><strong>Big Shot Workshop</strong></h3>
                    </div>
                    <div class="g-row">
                        <h5 class="widget-heading"><em>by Standard Chartered</em></h5>
                    </div>
                    <div class="g-row event-desc">
                        <h4 class="widget-heading">Wanna be a bigshot? You have to attend this. Fun games and informative session!</h4>
                    </div>
                    <div class="g-row">
                        <h6 class="widget-heading"><i class="fa fa-tags"></i> <span class="label label-default">Young Professionals</span>, <span class="label label-default">General Crowd</span>, <span class="label label-default">Seniors</span></h6>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!--start-->
    
    <?php

    $sql = "SELECT * FROM event";
    $result = mysql_query($sql);

    while ($row = mysql_fetch_array($result)) { 

        //get event id
        $event_id = $row['id'];

        ?>
        <div class="col-sm-4">
            <div class="gallery-image-container animation-fadeInQuick2" data-category="soon">
                <a href="page_ready_article.html" class="widget">
                    <div class="widget-content themed-background text-light-op grid-header">
                        <span class="pull-right"><i class="fa fa-users"></i><?=$row['turnout']?></span>
                        <i class="fa fa-fw fa-file-text"></i> <strong>
                        <?
            //get list of event types
                        $sql1 = "SELECT type FROM events_type et, type_of_events toe WHERE et.event_type_id=toe.id AND event_id=".$event_id;
                        $result1 = mysql_query($sql1);

                        $str = '';
                        while ($row1 = mysql_fetch_array($result1)) {

                            $str .= $row1['type'].",";
                        }
                        $str = substr($str, 0, strlen($str) - 1);
                        echo $str;
                        ?>
                    </strong>
                </div>
                <div class="widget-image widget-image-sm">
                    <img src="<?=$row['logo']?>" alt="image">
                    <div class="widget-image-content">
                    </div>
                </div>
                <div class="widget-content text-dark">
                    <div class="g-row">
                        <span class="pull-right"><?=$row['start_date']?></span>
                        <h3 class="widget-heading"><strong><?=$row['event_name']?></strong></h3>
                    </div>
                    <div class="g-row">
                        <h5 class="widget-heading"><em>by <?=$row['organizer']?></em></h5>
                    </div>
                    <div class="g-row event-desc">
                        <h4 class="widget-heading"><?=$row['description']?></h4>
                    </div>
                    <div class="g-row">
                        <h6 class="widget-heading"><i class="fa fa-tags"></i> 

                            <?

            //get list of target audience
                            $sql2 = "SELECT type FROM events_audience ea, target_audience ta WHERE ea.audience_id=ta.id AND event_id=".$event_id;
                            $result2 = mysql_query($sql2);

                            $str = '';
                            while ($row2 = mysql_fetch_array($result2)) {

                                $str .= '<span class="label label-default">'.$row2['type']."</span>,";
                            }
                            $str = substr($str, 0, strlen($str) - 1);
                            echo $str;
                            ?>
                        </h6>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <?
}
?>
<!--end-->

</div>
<!-- END Gallery Items -->
</div>
<!-- END Page Content -->
</div>
<!-- END Main Container -->
</div>
<!-- END Page Container -->
</div>
<!-- END Page Wrapper -->

<!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>!window.jQuery && document.write(decodeURI('%3Cscript src="js/vendor/jquery-2.1.1.min.js"%3E%3C/script%3E'));</script>

<!-- Bootstrap.js, Jquery plugins and Custom JS code -->
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/app.js"></script>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/compGallery.js"></script>
<script>$(function(){ CompGallery.init(); });</script>
</body>
</html>