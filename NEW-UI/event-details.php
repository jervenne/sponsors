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
                <!-- END Blockquote Left Title -->

                <!-- Blockquote Left Content -->

                <div class="block-content-full">

                    <img src="<?=$row['logo'];?>" alt="image">

                </div>
            </br>
            <div class="clearfix">
               <article class ="article-story">
                <p>
                    <?=$row['description'];?>
                </p>
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
            <div class="widget-content widget-content-mini themed-background-dark text-light-op">
                <i class="gi gi-calendar"></i> <strong>  Where & When</strong>
            </div>
            <div class="widget-content themed-background-muted text-dark text-left">
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
                    <img src="img/placeholders/avatars/standchart.jpg" alt="avatar" class="img-circle img-thumbnail img-thumbnail-avatar-2x">
                    <h2 class="widget-heading h3 text-muted"><?=$row['organizer'];?></h2>
                </div>
                <div class="widget-content themed-background-muted text-dark text-center">
                    <?=$row['org_info'];?>
                </div>
                <div class="widget-content">
                    <div class="row text-center">
                        <a href="javascript:void(0)" class="col-xs-6">
                            <h4 class="widget-heading"><i class="gi gi-share_alt text-success push-bit"></i> <br><small>About Organizer</small></h4>
                        </a>
                        <a href="javascript:void(0)" class="col-xs-6">
                            <h4 class="widget-heading"><i class="gi gi-briefcase text-info push-bit"></i> <br><small>Discuss with me!</small></h4>
                        </a>
                    </div>
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
                    <tr class="active">
                        <td>
                            <h1>$<strong>9</strong><small>.99</small><br><small>per month</small></h1>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>1</strong> Domain</td>
                    </tr>
                    <tr>
                        <td><strong>1GB</strong> Storage</td>
                    </tr>
                    <tr>
                        <td><strong>10GB</strong> Bandwidth</td>
                    </tr>
                    <tr>
                        <td><strong>1</strong> Databases</td>
                    </tr>
                    <tr class="active">
                        <td>
                            <a href="javascript:void(0)" class="btn btn-effect-ripple  btn-success" style="overflow: hidden; position: relative;"><i class="fa fa-arrow-right"></i> Sign Up Today</a>
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
                        <th>Be a Bronze Sponsor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="active">
                        <td>
                            <h1>$<strong>19</strong><small>.99</small><br><small>per month</small></h1>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>5</strong> Domains</td>
                    </tr>
                    <tr>
                        <td><strong>10GB</strong> Storage</td>
                    </tr>
                    <tr>
                        <td><strong>1TB</strong> Bandwidth</td>
                    </tr>
                    <tr>
                        <td><strong>10</strong> Databases</td>
                    </tr>
                    <tr class="active">
                        <td>
                            <a href="javascript:void(0)" class="btn btn-effect-ripple  btn-success" style="overflow: hidden; position: relative;"><i class="fa fa-arrow-right"></i> Sign Up Today</a>
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
                    <tr class="active">
                        <td>
                            <h1>$<strong>39</strong><small>.99</small><br><small>per month</small></h1>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>10</strong> Domains</td>
                    </tr>
                    <tr>
                        <td><strong>20GB</strong> Storage</td>
                    </tr>
                    <tr>
                        <td><strong>5TB</strong> Bandwidth</td>
                    </tr>
                    <tr>
                        <td><strong>30</strong> Databases</td>
                    </tr>
                    <tr class="active">
                        <td>
                            <a href="javascript:void(0)" class="btn btn-effect-ripple  btn-success" style="overflow: hidden; position: relative;"><i class="fa fa-arrow-right"></i> Sign Up Today</a>
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
                        <th>Be a Gold Sponsor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="active">
                        <td>
                            <h1>$<strong>99</strong><small>.99</small><br><small>per month</small></h1>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Unlimited</strong> Domains</td>
                    </tr>
                    <tr>
                        <td><strong>Unlimited</strong> Storage</td>
                    </tr>
                    <tr>
                        <td><strong>Unlimited</strong> Bandwidth</td>
                    </tr>
                    <tr>
                        <td><strong>Unlimited</strong> Databases</td>
                    </tr>
                    <tr class="active">
                        <td>
                            <a href="javascript:void(0)" class="btn btn-effect-ripple  btn-success" style="overflow: hidden; position: relative;"><i class="fa fa-arrow-right"></i> Sign Up Today</a>
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
                        <th>Voice</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <h1><strong>FREE</strong><br><small><i class="fa fa-gift"></i></small></h1>
                        </td>
                    </tr>
                    <tr class="active">
                        <td>
                            <a href="javascript:void(0)" class="btn btn-effect-ripple  btn-success"><i class="fa fa-arrow-right"></i> Sign Up Today</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-sm-3">
            <table class="table table-pricing table-borderless">
                <thead>
                    <tr>
                        <th>Banner</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <h1>$<strong>1</strong><small>.99</small><br><small>per month</small></h1>
                        </td>
                    </tr>
                    <tr class="active">
                        <td>
                            <a href="javascript:void(0)" class="btn btn-effect-ripple  btn-success"><i class="fa fa-arrow-right"></i> Sign Up Today</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-sm-3">
            <table class="table table-pricing table-borderless">
                <thead>
                    <tr>
                        <th>Large Pack</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <h1>$<strong>2</strong><small>.99</small><br><small>per month</small></h1>
                        </td>
                    </tr>
                    <tr class="active">
                        <td>
                            <a href="javascript:void(0)" class="btn btn-effect-ripple  btn-success"><i class="fa fa-arrow-right"></i> Sign Up Today</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-sm-3">
            <table class="table table-pricing table-borderless">
                <thead>
                    <tr>
                        <th>Ultimate Pack</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <h1>$<strong>3</strong><small>.99</small><br><small>per month</small></h1>
                        </td>
                    </tr>
                    <tr class="active">
                        <td>
                            <a href="javascript:void(0)" class="btn btn-effect-ripple  btn-success"><i class="fa fa-arrow-right"></i> Sign Up Today</a>
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