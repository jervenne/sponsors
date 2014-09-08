<?php include 'inc/config.php'; // Configuration php file ?>
<?php include 'inc/header.php';    // Meta data and header   ?>

<!-- Page content -->
<div id="page-content" class="block">
    <!-- Wizard Header -->
    <div class="block-header">
        <!-- If you do not want a link in the header, instead of .header-title-link you can use a div with the class .header-section -->
        <a href="" class="header-title-link">
            <h1>
                Create Event<br><small>Fill up your event details for potential sponsors to know you!</small>
            </h1>
        </a>
    </div>
    <!-- END Wizard Header -->

    <!-- Advanced Wizard Block -->
    <div class="block">
     
        <!-- END Advanced Wizard Title -->

        <!-- Advanced Wizard Content -->
        <form id="advanced-wizard" action="page_forms_wizard.php" method="post" class="form-horizontal">
            <!-- First Step -->
            <div id="advanced-first" class="step">
                <!-- Step Info -->
                <div class="wizard-steps">
                    <div class="row">
                        <div class="col-xs-6 text-center active">1. Event Details</div>
                        <div class="col-xs-6 text-center">2. Sponsorship Options</div>
                    </div>
                </div>
                <!-- END Step Info -->
                <div class="form-group">
                    <label class="control-label col-md-2" for="event_title">Event Title *</label>
                    <div class="col-md-3">
                        <div class="input-group">
                            <input type="text" id="event_title" name="event_title" class="form-control" required>
                            <span class="input-group-addon"><i class="fa fa-calendar-o"></i></span>
                       
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="location">Location</label>
                    <div class="col-md-3">
                        <div class="input-group">
                            <input type="text" id="location" name="location" class="form-control" >
                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2" for="location">Event Date</label>
                    <div class="col-md-3">
                        <div class="input-group input-daterange" data-date-format="mm/dd/yyyy">
                            <input type="text" id="start_date" name="start_date" class="form-control text-center" placeholder="From">
                            <span class="input-group-addon"><i class="fa fa-angle-right"></i></span>
                            <input type="text" id="end_date" name="end_date" class="form-control text-center" placeholder="To">
                        </div>
                    </div>
                </div>                 
                <div class="form-group">
                    <label class="control-label col-md-2" for="location">Start Time</label>
                    <div class="col-md-3">
                        <div class="input-group bootstrap-timepicker">
                            <input type="text" id="start_time" name="start_time" class="form-control input-timepicker text-center" placeholder="From">
                            <span class="input-group-btn">
                            <a href="javascript:void(0)" class="btn btn-default"><i class="fa fa-clock-o"></i></a>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="location">End Time</label>
                    <div class="col-md-3">
                        <div class="input-group bootstrap-timepicker">
                            <input type="text" id="end_time" name="end_time" class="form-control input-timepicker text-center" placeholder="From">
                            <span class="input-group-btn">
                            <a href="javascript:void(0)" class="btn btn-default"><i class="fa fa-clock-o"></i></a>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="logo">Estimated Turnout *</label>
                    <div class="col-md-3">
                        <div class="input-group">
                            <input type="text" id="turnout" name="turnout" class="form-control" required>
                            <span class="input-group-addon"><i class="fa fa-users"></i></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="logo">Event Logo</label>
                    <div class="col-md-3">
                        <div class="input-group">
                            <input type="file" id="logo" name="logo">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="logo">Event Description</label>
                    <div class="col-md-5">
                         <textarea id="description" name="description" rows="6" class="form-control textarea-elastic" placeholder="Tell us more about your event!"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="logo">Organization Info</label>
                    <div class="col-md-5">
                        <textarea id="description" name="description" rows="6" class="form-control textarea-elastic" placeholder="Tell us more about your organizing team!"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="logo">Links to Social Media</label>
                    <div class="col-md-3">
                        <div class="input-group">
                            <label class="switch switch-primary"><input type="checkbox" id="switch"><span></span></label>
                                <div class="social">
                                    <label class ="" for="social" id="facebook_title" style="display:none;"><i class="fa fa-facebook-square"></i> facebook.com/</label>
                                    <input type="text" id="facebook" name="facebook" class="form-control" style="display:none;">
                                </div>
                                <div class="social">
                                    <label class ="" for="social" id="facebook_event_title" style="display:none;"><i class="fa fa-facebook"></i> facebook.com/events/</label>
                                    <input type="text" id="facebook_event" name="facebook_event" class="form-control" style="display:none;">
                                </div>
                                <div class="social">
                                    <label class ="" for="social" id="twitter_title" style="display:none;"><i class="fa fa-twitter"></i> twitter.com/</label>
                                    <input type="text" id="twitter" name="twitter" class="form-control" style="display:none;">
                                </div>
                                <div class="social">
                                    <label class ="" for="social" id="instagram_title" style="display:none;"><i class="fa fa-instagram"></i> instagram.com/</label>
                                    <input type="text" id="instagram" name="instagram" class="form-control" style="display:none;">
                                </div>
                        
                        </div>
                    </div>
                </div>
               
            </div>
            <!-- END First Step -->

            <!-- Second Step -->
            <div id="advanced-second" class="step">
                <!-- Step Info -->
                <div class="wizard-steps">
                    <div class="row">
                        <div class="col-xs-6 text-center done">1. Account <i class="fa fa-check"></i></div>
                        <div class="col-xs-6 text-center active">2. Info</div>
                    </div>
                </div>
                <!-- END Step Info -->
                <div class="form-group">
                    <label class="control-label col-md-2" for="example-advanced-bio">Bio</label>
                    <div class="col-md-10">
                        <textarea id="example-advanced-bio" name="example-advanced-bio" rows="6" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2" for="example-advanced-newsletter">Newsletter</label>
                    <div class="col-md-10">
                        <div class="checkbox">
                            <label for="example-advanced-newsletter">
                                <input type="checkbox" id="example-advanced-newsletter" name="example-advanced-newsletter">  Sign up
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2"><a href="javascript:void(0)">Terms and Conditions</a></label>
                    <div class="col-md-10">
                        <div class="checkbox">
                            <label for="val_terms">
                                <input type="checkbox" id="val_terms" name="val_terms" value="1"> Accept
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Second Step -->

            <!-- Form Buttons -->
            <div class="form-group">
                <div class="col-md-10 col-md-offset-2">
                    <input type="reset" class="btn btn-default" id="back2" value="Back">
                    <input type="submit" class="btn btn-primary" id="next2" value="Next">
                </div>
            </div>
            <!-- END Form Buttons -->
        </form>
        <!-- END Advanced Wizard Content -->
    </div>
    <!-- END Advanced Wizard Block -->
</div>
<!-- END Page Content -->

<?php include 'inc/footer.php'; // Footer and scripts ?>

<!-- Javascript code only for this page -->
<script type="text/javascript">
//<![CDATA[ 
$(window).load(function(){
$("#switch").click(function () {
    if ($(this).prop('checked') === true) {
        $('#facebook').show();
        $('input[name=facebook]').prop('required',true);
        $('#facebook_title').show();
        $('input[name=facebook_title]').prop('required',true);
        $('#facebook_event').show();
        $('input[name=facebook_event]').prop('required',true);
        $('#facebook_event_title').show();
        $('input[name=facebook_event_title]').prop('required',true);
        $('#twitter').show();
        $('input[name=twitter]').prop('required',true);
        $('#twitter_title').show();
        $('input[name=twitter_title]').prop('required',true);
        $('#instagram').show();
        $('input[name=instagram]').prop('required',true);
        $('#instagram_title').show();
        $('input[name=instagram_title]').prop('required',true);

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
    }
});
});//]]>  

</script>
<script>
    $(function(){

        $('#basic-wizard').formwizard({focusFirstInput: true, disableUIStyles: true, inDuration: 0, outDuration: 0});

        /* Initialize Advanced Wizard with Validation */
        $('#advanced-wizard').formwizard({
            disableUIStyles : true,
            validationEnabled: true,
            validationOptions: {
                errorClass: 'help-block',
                errorElement: 'span',
                errorPlacement: function(error, e) {
                    e.parents('.form-group > div').append(error);
                },
                highlight: function(e){
                    $(e).closest('.form-group').removeClass('has-success has-error').addClass('has-error');
                    $(e).closest('.help-block').remove();
                },
                success: function(e){
                    // You can remove the .addClass('has-success') part if you don't want the inputs to get green after success!
                    e.closest('.form-group').removeClass('has-success has-error').addClass('has-success');
                    e.closest('.help-block').remove();
                },
                rules: {
                    val_username: {
                        required: true,
                        minlength: 2
                    },
                    val_password: {
                        required: true,
                        minlength: 5
                    },
                    val_confirm_password: {
                        required: true,
                        minlength: 5,
                        equalTo: '#val_password'
                    },
                    val_email: {
                        required: true,
                        email: true
                    },
                    val_terms: {
                        required: true
                    }
		},
		messages: {
                    val_username: {
                        required: 'Please enter a username',
                        minlength: 'Your username must consist of at least 2 characters'
                    },
                    val_password: {
                        required: 'Please provide a password',
                        minlength: 'Your password must be at least 5 characters long'
                    },
                    val_confirm_password: {
                        required: 'Please provide a password',
                        minlength: 'Your password must be at least 5 characters long',
                        equalTo: 'Please enter the same password as above'
                    },
                    val_email: 'Please enter a valid email address',
                    val_terms: 'Please accept the terms to continue'
		}
            },
            inDuration: 0,
            outDuration: 0
        });
    });
</script>

<?php include 'inc/bottom.php'; // Close body and html tags ?>