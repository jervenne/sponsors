<?php 
include 'inc/header.php';  
include 'inc/dbconfig.php';
?>
<!-- Page content -->
<div id="page-content">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-2 col-lg-8 col-lg-offset-2">
            <!-- Clickable Wizard Block -->
            <div class="block">
                <!-- Clickable Wizard Title -->
                <div class="block-title">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-effect-ripple btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
                    </div>
                    <h2>Create an event with us!</h2>
                </div>
                <!-- END Clickable Wizard Title -->

                <!-- Clickable Wizard Content -->
                <form id="clickable-wizard" action="add_event.php" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data" >
                 <!-- First Step -->
                 <div id="clickable-first" class="step">
                    <!-- Step Info -->
                    <div class="form-group">
                        <div class="col-xs-12">
                            <ul class="nav nav-pills nav-justified clickable-steps">
                                <li class="active">
                                    <a href="javascript:void(0)" data-gotostep="clickable-first">
                                        <i class="fa fa-user"></i>
                                        <strong>Event basics</strong>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-gotostep="clickable-second">
                                        <i class="fa fa-pencil-square-o"></i> 
                                        <strong>Event details</strong>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-gotostep="clickable-third">
                                        <i class="fa fa-check"></i> 
                                        <strong>Sponsoring Options</strong>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- END Step Info -->
                    <div class="form-group">
                        <label class="col-md-3 control-label">Title</label>
                        <div class="col-md-9">
                            <input type="text" id="title" name="title" class="form-control" placeholder="Your event title">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Location</label>
                        <div class="col-md-9">
                            <input type="text" id="location" name="location" class="form-control ui-wizard-content" placeholder="Where is your event location?">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Event Date</label>
                        <div class="col-md-9">
                            <div class="input-group input-daterange" data-date-format="dd M yyyy">
                                <input type="text" id="start_date" name="start_date" class="form-control" placeholder="From">
                                <span class="input-group-addon"><i class="fa fa-chevron-right"></i></span>
                                <input type="text" id="end_date" name="end_date" class="form-control" placeholder="To">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Start Time</label>
                        <div class="col-md-9">
                            <div class="input-group bootstrap-timepicker">
                                <input type="text" id="start_time" name="start_time" class="form-control input-timepicker text-center" placeholder="From">
                                <span class="input-group-btn">
                                    <a href="javascript:void(0)" class="btn btn-default"><i class="fa fa-clock-o"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">End Time</label>
                            <div class="col-md-9">
                                <div class="input-group bootstrap-timepicker">
                                    <input type="text" id="end_time" name="end_time" class="form-control input-timepicker text-center" placeholder="From">
                                    <span class="input-group-btn">
                                        <a href="javascript:void(0)" class="btn btn-default"><i class="fa fa-clock-o"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Your Event Type</label>
                                <div class="col-md-9">
                                    <fieldset class="group"> 
                                        <ul class="checkbox">
                                            <?php

                                            $sql = "SELECT * FROM type_of_events";
                                            $result = mysql_query($sql);

                                            while ($row = mysql_fetch_array($result)) { ?>

                                            <li><input type="checkbox" id="event_type" name="event_types[]" value="<?=$row['id']?>"> <?=$row['type']?></li>

                                            <?
                                        }
                                        ?>
                                    </ul>
                                </fieldset>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Target Audience</label>
                            <div class="col-md-9">
                                <fieldset class="group"> 
                                    <ul class="checkbox">
                                        <?php

                                        $sql = "SELECT * FROM target_audience";
                                        $result = mysql_query($sql);
                                        while ($row = mysql_fetch_array($result)) { ?>
                                        
                                        <li><input type="checkbox" id="target_audience" name="target_audience[]" value="<?=$row['id']?>"> <?=$row['type']?></li>

                                        <?
                                    }
                                    ?>
                                </ul>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <!-- END First Step -->

                <!-- Second Step -->
                <div id="clickable-second" class="step">
                    <!-- Step Info -->
                    <div class="form-group">
                        <div class="col-xs-12">
                            <ul class="nav nav-pills nav-justified clickable-steps">
                                <li><a href="javascript:void(0)" class="text-muted" data-gotostep="clickable-first"><i class="fa fa-user"></i> <del><strong>Event Basics</strong></del></a></li>
                                <li class="active"><a href="javascript:void(0)" data-gotostep="clickable-second"><i class="fa fa-pencil-square-o"></i> <strong>Event Details</strong></a></li>
                                <li><a href="javascript:void(0)" data-gotostep="clickable-third"><i class="fa fa-check"></i> <strong>Sponsoring Options</strong></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- END Step Info -->
                    <div class="form-group">
                        <label class="col-md-3 control-label">Logo</label>
                        <div class="col-md-9">
                            <input type="File" id="logo" name="logo" class="form-control" placeholder="Upload your logo here">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Estimated Turnout *</label>
                        <div class="col-md-9">
                            <div class="input-group">
                                <input type="text" id="turnout" name="turnout" class="form-control">
                                <span class="input-group-addon"><i class="fa fa-asterisk fa-fw"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Event Details</label>
                        <div class="col-md-9">
                            <textarea id="description" name="description" rows="6" class="form-control textarea-elastic ui-wizard-content" placeholder="Tell us more about your event!" style="overflow: hidden; height: 136px;"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Organisation Info</label>
                        <div class="col-md-9">
                            <textarea id="orgInfo" name="orgInfo" rows="6" class="form-control textarea-elastic ui-wizard-content" placeholder="Tell us more about your organising team!" style="overflow: hidden; height: 136px;"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Your Event's Social Media Sites</label>
                        <label class="switch switch-primary"><input type="checkbox" id="switch"><span></span></label>

                    </div>
                    <div class="form-group">
                        <label class="col-md-3"></label>
                        <div class="col-md-9">
                            <div class="social input-group">
                                <label class ="" for="social" id="facebook_title" style="display:none;"><i class="fa fa-facebook-square"></i> facebook.com/</label>
                                <input type="text" id="facebook" name="facebook" class="form-control" style="display:none;">
                            </div>
                            <div class="social input-group">
                                <label class ="" for="social" id="facebook_event_title" style="display:none;"><i class="fa fa-facebook"></i> facebook.com/events/</label>
                                <input type="text" id="facebook_event" name="facebook_event" class="form-control" style="display:none;">
                            </div>
                            <div class="social input-group">
                                <label class ="" for="social" id="twitter_title" style="display:none;"><i class="fa fa-twitter"></i> twitter.com/</label>
                                <input type="text" id="twitter" name="twitter" class="form-control" style="display:none;">
                            </div>
                            <div class="social input-group">
                                <label class ="" for="social" id="instagram_title" style="display:none;"><i class="fa fa-instagram"></i> instagram.com/</label>
                                <input type="text" id="instagram" name="instagram" class="form-control" style="display:none;">
                            </div>
                            <div class="social input-group">
                                <label class ="" for="social" id="website_title" style="display:none;"><i class="fa fa-globe"></i> Website http://</label>
                                <input type="text" id="website" name="website" class="form-control" style="display:none;">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Second Step -->

                <!-- Third Step -->
                <!-- Third Step -->
                <div id="clickable-third" class="step">
                    <!-- Step Info -->
                    <div class="form-group">
                        <div class="col-xs-12">
                            <ul class="nav nav-pills nav-justified clickable-steps">
                                <li><a href="javascript:void(0)" class="text-muted" data-gotostep="clickable-first"><i class="fa fa-user"></i> <del><strong>Event Basics</strong></del></a></li>
                                <li><a href="javascript:void(0)" class="text-muted" data-gotostep="clickable-second"><i class="fa fa-pencil-square-o"></i> <del><strong>Event Details</strong></del></a></li>
                                <li class="active"><a href="javascript:void(0)" data-gotostep="clickable-third"><i class="fa fa-check"></i> <strong>Sponsoring Options</strong></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- END Step Info -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="example-clickable-pc">Package</label>
                        <div class="col-md-6">
                            <input type="text" id="example-clickable-pc" name="example-clickable-pc" class="form-control" placeholder="">
                        </div>
                    </div>

                </div>
                <!-- END Third Step -->

                <!-- Form Buttons -->
                <div class="form-group form-actions">
                    <div class="col-md-8 col-md-offset-4">
                        <button type="reset" class="btn btn-effect-ripple btn-danger" id="back">Back</button>
                        <button type="submit" class="btn btn-effect-ripple btn-primary" id="next">Next</button>
                    </div>
                </div>
                <!-- END Form Buttons -->


            </form> <!-- END Clickable Wizard Content -->
        </div>
        <!-- END Clickable Wizard Block -->

    </div>
</div>

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


<!-- ckeditor.js, load it only in the page you would like to use CKEditor (it's a heavy plugin to include it with the others!) -->
<script src="js/plugins/ckeditor/ckeditor.js"></script>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/formsWizard.js"></script>
<script>$(function(){ FormsWizard.init(); });</script>

<script src="js/dropzone.js"></script>

<script src="js/pages/formsComponents.js"></script>
<script>$(function(){ FormsComponents.init(); });</script>

<script type="text/javascript">
//<![CDATA[ 
$(window).load(function(){
    $("#switch").click(function () {
        if ($(this).prop('checked') === true) {
            $('#facebook').show();
            $('#facebook_title').show();
            $('#facebook_event').show();
            $('#facebook_event_title').show();
            $('#twitter').show();
            $('#twitter_title').show();
            $('#instagram').show();
            $('#instagram_title').show();
            $('#website').show();
            $('#website_title').show();

        } 
        if ($(this).prop('checked') === false) {
            $('#facebook').hide();
            $('input[name=facebook]').prop('required',false);   
            $('#facebook_title').hide();
            $('input[name=facebook_title]').prop('required',false);   
            $('#facebook_event').hide();
            $('input[name=facebook_event]').prop('required',false);   
            $('#facebook_event_title').hide();
            $('input[name=facebook_event_title]').prop('required',false);
            $('#twitter').hide();
            $('input[name=twitter]').prop('required',false);   
            $('#twitter_title').hide();
            $('input[name=twitter_title]').prop('required',false); 
            $('#instagram').hide();
            $('input[name=instagram]').prop('required',false);   
            $('#instagram_title').hide();
            $('input[name=instagram_title]').prop('required',false);  
            $('#website_title').hide();
            $('input[name=website_title]').prop('required',false);                 
        }
    });
$("#no_presence").click(function () {
    if ($(this).prop('checked') === true) {
        $('.presenceTable').hide();
    } 
    if ($(this).prop('checked') === false) {
        $('.presenceTable').show();
    } 
});
});//]]>  

</script>

</body>
</html>