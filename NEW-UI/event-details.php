<?php 
include 'inc/header.php';  
include 'inc/dbconfig.php';
$event_id=$_GET['id'];


$sql = "SELECT * FROM event WHERE id=".$event_id;
$result = mysql_query($sql);

$row = mysql_fetch_array($result);

?>

<!-- Page content -->
<div id="page-content">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-7">
            <!-- Blockquote Left Block -->
            <div class="block full">
                <!-- Blockquote Left Title -->
                <div class="block-title">
                    <h1><strong><?=$row['event_name'];?></strong></h1>
                </div>

                <div class="block-content-full">

                    <img src="<?=$row['banner'];?>">

                </div>
            </br>
            <div class="widget">
                <div class="widget-content widget-content-mini themed-background-dark text-light-op">
                    
                        Event's type: 
                        <?
            //get list of event types
                        $sql1 = "SELECT type FROM events_type et, type_of_events toe WHERE et.event_type_id=toe.id AND event_id=".$event_id;
                        $result1 = mysql_query($sql1);

                        $str = '';
                        while ($row1 = mysql_fetch_array($result1)) {

                            $str .= $row1['type'].", ";
                        }
                        $str = substr($str, 0, strlen($str) - 2);
                        echo $str;
                        ?>
                    </div>
                    <article class="article-story">
                        <p><?=$row['description'];?></p>

                    </article>

                </div>
                <!-- END Blockquote Left Content -->
            </div>
            <!-- END Blockquote Left Block -->
        </div>
        <div class="col-md-3">
            <!-- Blockquote Right Block -->
            <div class="block full">
                <div class="turnout">
                    <div class="text-center clearfix">
                        <h1 class="h1">
                            <strong><span data-toggle="counter"><?=$row['turnout'];?></span></strong>
                        </h1>
                        <span class="text-muted">expected turnout</span>
                    </div>
                </div>
                <button type="button" class="btn btn-effect-ripple btn-success sponsorBtn"><h4><strong>Sponsor this Event!</strong></h4></button>

                <br>
                <div class="widget">
                    <div class="widget-content widget-content-mini themed-background-muted">
                        <i class="gi gi-group"></i>  <strong class="text-dark">Target Audience</strong>
                    </div>
                    <div class="widget-content">

                        <h4 class="widget-heading">

                            <?

            //get list of target audience
                            $sql2 = "SELECT type FROM events_audience ea, target_audience ta WHERE ea.audience_id=ta.id AND event_id=".$event_id;
                            $result2 = mysql_query($sql2);

                            $str = '';
                            while ($row2 = mysql_fetch_array($result2)) {

                                $str .= ''.$row2['type']."<br/>";
                            }
                            $str = substr($str, 0, strlen($str) - 5);
                            echo $str;
                            ?>
                        </h4>

                    </div>
                </div>

                <div class="widget">
                    <div class="widget-content widget-content-mini themed-background-muted">
                        <i class="gi gi-calendar"></i> <strong>  Where & When</strong>
                    </div>
                    <div class="widget-content text-dark text-left">
                        <p><?=$row['location'];?></p>
                        <?
                        if ($row['start_date'] == $row['end_date']){
                            echo "<p>".$row['start_date']."</p>";
                        }
                        else{
                            echo "<p>".$row['start_date']." - ".$row['end_date']."</p>";
                        }
                        ?>
                        <p><?=$row['start_time'];?> to <?=$row['end_time'];?></p>
                    </div>
                </div>


                <div class="">
                    <!-- Stats User Widget -->
                    <div class="widget">
                        <div class="widget-content widget-content-mini themed-background-dark text-light-op">
                            <i class="fa fa-fw fa-trophy"></i> <strong>Organisation</strong>
                        </div>
                        <div class="widget-content text-center">
                            <img src="<?=$row['org_logo'];?>" class="img-circle img-thumbnail img-thumbnail-avatar-2x">
                            <h2 class="widget-heading h3 text-muted"><?=$row['organizer'];?></h2>
                        </div>
                        <div class="widget-content themed-background-muted text-dark text-left">
                            <?=$row['org_info'];?>
                        </div>
                        <div class="widget-content">
                            <div class="row text-center">
                                <a href="javascript:void(0)" class="col-xs-6">
                                    <h4 class="widget-heading"><i class="gi gi-nameplate_alt text-info push-bit"></i> <br><small>View Organizer</small></h4>
                                </a>
                                <a href="javascript:void(0)" class="col-xs-6">
                                    <h4 class="widget-heading"><i class="gi gi-pizza text-success push-bit"></i> <br><small>Discuss with me!</small></h4>
                                </a>
                            </div>
                        </div>

                        <div class ="widget-content">
                            <div class="col-xs-3 social-links"><a href="<?=$row['facebook'];?>" data-toggle="tooltip" data-original-title="facebook page"><i class="fa fa-facebook-square"></i></a></div>
                            <div class="col-xs-3 social-links"><a href="<?=$row['facebook_event'];?>" data-toggle="tooltip" data-original-title="facebook event page"><i class="fa fa-facebook"></i></a></div>
                            <div class="col-xs-3 social-links"><a href="<?=$row['instagram'];?>" data-toggle="tooltip" data-original-title="instagram"><i class="fa fa-instagram"></i></a></div>
                            <div class="col-xs-3 social-links"><a href="<?=$row['website'];?>" data-toggle="tooltip" data-original-title="website"><i class="gi gi-global"></i></a></div>
                        </div>
                    </div>
                    <!-- END Stats User Widget -->
                </div>
            </div>
            <!-- END Blockquote Right Block -->
        </div>
        <div class="col-md-1"></div>
    </div>

    <!-- Sponsorship Packages Content -->
    <div class="block">
        <div class="block-title">
            <h2>Sponsorship Packages</h2>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <table class="table table-borderless table-pricing">
                    <thead>
                        <tr>
                            <th>Be a Platinum Sponsor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Logo Placement</strong></li></td>
                        </tr>
                        <tr>
                            <td><strong>Emcee shoutout x1</strong></td>
                        </tr>
                        <tr class="active">
                            <td>
                                <h2>$500<br><small>10 slots left</small></h2>
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                <a href="javascript:void(0)" class="btn btn-effect-ripple  btn-success" style="overflow: hidden; position: relative;"><i class="fa fa-arrow-right"></i> Register Today</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-muted">
                                <small><em>* All plans include free support!</em></small>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-3">
                <table class="table table-borderless table-pricing">
                    <thead>
                        <tr>
                            <th>Be a Bronze Sponsor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Logo Placement</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Emcee shoutout x2</strong></td>
                        </tr>
                        <tr>
                            <td><strong></strong></td>
                        </tr>
                        <tr class="active">
                            <td>
                                <h1>$800<small></small><br><small>5 slots left</small></h1>
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                <a href="javascript:void(0)" class="btn btn-effect-ripple  btn-success" style="overflow: hidden; position: relative;"><i class="fa fa-arrow-right"></i> Register Today</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-muted">
                                <small><em>* All plans include free support!</em></small>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-3">
                <table class="table table-borderless table-pricing">
                    <thead>
                        <tr>
                            <th>Be a Silver Sponsor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Logo Placement</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Emcee shoutout every 3hr</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Social media shoutout</strong></td>
                        </tr>
                        <tr class="active">
                            <td>
                                <h1>$2000<small></small><br><small>5 slot left</small></h1>
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                <a href="javascript:void(0)" class="btn btn-effect-ripple  btn-success" style="overflow: hidden; position: relative;"><i class="fa fa-arrow-right"></i> Register Today</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-muted">
                                <small><em>* All plans include free support!</em></small>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-3">
                <table class="table table-borderless table-pricing table-featured">
                    <thead>
                        <tr>
                            <th>Be a Gold Sponsor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Logo Placement</strong> (extra big)</td>
                        </tr>
                        <tr>
                            <td><strong>Emcee shoutout every 1hr</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Social media shoutout</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Participants' likes for your page</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Participants engagement with your brand</strong></td>
                        </tr>
                        <tr class="active">
                            <td>
                                <h1>$5000<small></small><br><small>1 slot left</small></h1>
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                <a href="javascript:void(0)" class="btn btn-effect-ripple  btn-success" style="overflow: hidden; position: relative;"><i class="fa fa-arrow-right"></i> Register Today</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-muted">
                                <small><em>* All plans include free support!</em></small>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END Sponsorship Packages Content -->
    </div>
    <!--Single Sponsorship Presence -->
    <div class="block">
        <!-- Mini Pricing Tables Title -->
        <div class="block-title">
            <h2>Marketing Presence (single item)</h2>
        </div>
        <!-- END Mini Pricing Tables Title -->

        <!-- Mini Pricing Tables Content -->
        <div class="row">
            <div class="col-sm-3">
                <table class="table table-pricing table-borderless">
                    <thead>
                        <tr>
                            <th>Emcee Shoutout</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <h2>$100<br></h2>
                                <h4>Our emcee will give a shoutout about your brand</h4>
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                <a href="javascript:void(0)" class="btn btn-effect-ripple  btn-success"><i class="fa fa-arrow-right"></i> Register Today</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-3">
                <table class="table table-pricing table-borderless">
                    <thead>
                        <tr>
                            <th>Goodies</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <h2>$200<br></h2>
                                <h4>We'll pack distribute your products to our participants</h4>
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                <a href="javascript:void(0)" class="btn btn-effect-ripple  btn-success"><i class="fa fa-arrow-right"></i> Register Today</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-3">
                <table class="table table-pricing table-borderless">
                    <thead>
                        <tr>
                            <th>Banner Placement</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <h2>$1000<br></h2>
                                <h4>Your brand logo will be on our mega event banner</h4>
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                <a href="javascript:void(0)" class="btn btn-effect-ripple  btn-success"><i class="fa fa-arrow-right"></i> Register Today</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-3">
                <table class="table table-pricing table-borderless">
                    <thead>
                        <tr>
                            <th>Participants Engagement</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <h2>$2000<br></h2>
                                <h4>We'll have our partipants to come to your store and to learn more about your brand.</h4>
                            </td>
                        </tr>
                        <tr class="active">
                            <td>
                                <a href="javascript:void(0)" class="btn btn-effect-ripple  btn-success"><i class="fa fa-arrow-right"></i> Register Today</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END single Presence Items -->
    </div>

    <div class="block full">
        <ul class="pager">
            <button type="button" class="btn btn-block btn-success">Confirm Sponsoring Selection</button>

            <button type="button" class="btn btn-block btn-warning">Propose an Offer</button>
        </ul>
    </div>


</div>
<!-- END Page Content -->
</div>
<!-- END Main Container -->
</div>
<!-- END Page Container -->
</div>
<!-- END Page Wrapper -->
<script type="text/javascript">//<![CDATA[ 
$(window).load(function(){

    $("input[id=target_audience]").change(function(){
        var max= 3;
        if( $("input[id=target_audience]:checked").length == max ){
            $("input[id=target_audience]").attr('disabled', 'disabled');
            $("input[id=target_audience]:checked").removeAttr('disabled');
        }else{
           $("input[id=target_audience]").removeAttr('disabled');
       }
   })

});//]]>  

</script>

<!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
<script src="js/vendor/jquery-2.1.1.min.js"></script>
<script>!window.jQuery && document.write(decodeURI('%3Cscript src="js/vendor/jquery-2.1.1.min.js"%3E%3C/script%3E'));</script>

<!-- Bootstrap.js, Jquery plugins and Custom JS code -->
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/app.js"></script>


<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/compMaps.js"></script>
<script>$(function(){ CompMaps.init(); });</script>
</body>
</html>