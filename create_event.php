<?php 
    include 'inc/config.php'; 
    include 'inc/header.php';    
  //  require_once("ajax_table.class.php");
  //  $obj = new ajax_table();
  //  $records = $obj->getRecords();
?>
 <script>
     // Column names must be identical to the actual column names in the database, if you dont want to reveal the column names, you can map them with the different names at the server side.
     var columns = new Array("fname","lname","tech","address");
     var placeholder = new Array("Enter First Name","Enter Last Name","Enter Technology","Enter Address");
     var inputType = new Array("text","text","text","textarea");
     var table = "presenceTable";
     
     // Set button class names 
     var savebutton = "ajaxSave";
     var deletebutton = "ajaxDelete";
     var editbutton = "ajaxEdit";
     var updatebutton = "ajaxUpdate";
     var cancelbutton = "cancel";
     
     var saveImage = "images/save.png"
     var editImage = "images/edit.png"
     var deleteImage = "images/remove.png"
     var cancelImage = "images/back.png"
     var updateImage = "images/save.png"

     // Set highlight animation delay (higher the value longer will be the animation)
     var saveAnimationDelay = 3000; 
     var deleteAnimationDelay = 1000;
      
     // 2 effects available available 1) slide 2) flash
     var effect = "flash"; 
  
  </script>
  <script src="js/vendor/jquery-1.11.0.min.js"></script>   
  <script src="js/jquery-ui.js"></script>   
  <script src="js/script.js"></script>  
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
        <form id="advanced-wizard" action="add_event.php" method="post" class="form-horizontal" enctype="multipart/form-data">
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
                            <input type="text" id="event_title" name="event_title" class="form-control">
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
                            <input type="text" id="turnout" name="turnout" class="form-control">
                            <span class="input-group-addon"><i class="fa fa-asterisk fa-fw"></i></span>
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
                                <div class="social input-group">
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
                        <div class="col-xs-6 text-center active">2. Sponsorship Options</div>
                    </div>
                </div>
                <!-- END Step Info -->
                <div class="form-group">
                    <div class="table-responsive">
                        <table class ="table presenceTable">
                            <thead>
                                <tr>
                                    <th>Type of Presence</th>
                                    <th>Title</th>
                                    <th>Sponsorship Amount</th>
                                    <th>Slots</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <?
                            if(count($records)){
                             $i = 1;    
                             foreach($records as $key=>$eachRecord){
                            ?>
                            <tr id="<?=$eachRecord['id'];?>">
                                <td class="fname"><?=$eachRecord['fname'];?></td>
                                <td class="lname"><?=$eachRecord['lname'];?></td>
                                <td class="tech"><?=$eachRecord['tech'];?></td>
                                <td class="tech"><?=$eachRecord['address'];?></td>

                                <td>
                                    <a href="javascript:;" id="<?=$eachRecord['id'];?>" class="ajaxEdit"><img src="" class="eimage"></a>
                                    <a href="javascript:;" id="<?=$eachRecord['id'];?>" class="ajaxDelete"><img src="" class="dimage"></a>
                                </td>
                            </tr>
                            <? }
                            }
                            ?>
                        </table>
                    </div>
                </div>
                 <div class="form-group">
                    <label class="control-label col-md-2" for="example-advanced-newsletter"></label>
                    <div class="col-md-10">
                        <div class="checkbox">
                            <label for="no_presence">
                                <input type="checkbox" id="no_presence" name="no_presence"> Or check here if you have no fixed presence to offer
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
            $('#facebook_title').show();
            $('#facebook_event').show();
            $('#facebook_event_title').show();
            $('#twitter').show();
            $('#twitter_title').show();
            $('#instagram').show();
            $('#instagram_title').show();

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
    
                    turnout: {
                    required: false,
                    number: false
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