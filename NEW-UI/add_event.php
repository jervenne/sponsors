<?
session_start();
require_once('inc/dbconfig.php');

$title = $_POST['title'];
$location = $_POST['location'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$start_time = $_POST['start_time'];
$end_time = $_POST['end_time'];
$turnout = $_POST['turnout'];
$target_audience = $POST['target_audience'];
$description = $_POST['description'];
$orgInfo = $_POST['orgInfo'];
$facebook = $_POST['facebook'];
$facebook_event = $_POST['facebook_event'];
$twitter = $_POST['twitter'];
$instagram = $_POST['instagram'];
$website = $_POST['website'];

//file paths
$filename = $_FILES["logo"]['name']; //file name
$path = 'img/logos/'.$filename; //generate the destination path


//move photos

if(move_uploaded_file($_FILES['logo']['tmp_name'],$path)) {
}

$sql = "INSERT INTO event (event_name,location, start_date, end_date, start_time, end_time, turnout, logo, description, org_info, facebook, facebook_event, twitter, instagram, website) 
VALUES ('$title', '$location', '$start_date', '$end_date', '$start_time', '$end_time', '$turnout', '$path', '$description', '$orgInfo', '$facebook', '$facebook_event', '$twitter', '$instagram', '$website')";

$result = mysql_query($sql) or die(mysql_error());

//get event_id
$event_id = mysql_insert_id();

//add event type
if(isset($_POST["event_types"])) //checks if event type is selected
{
    foreach($_POST["event_types"] as $event_type_id)
    {
        $sql = "INSERT INTO events_type (event_id, event_type_id) VALUES ('$event_id', '$event_type_id')";
		$result = mysql_query($sql) or die(mysql_error());

    }
}

//add target audience
if(isset($_POST["target_audience"])) //checks if target audience is selected
{
    foreach($_POST["target_audience"] as $audience_id)
    {
        $sql = "INSERT INTO events_audience (event_id, audience_id) VALUES ('$event_id', '$audience_id')";
		$result = mysql_query($sql) or die(mysql_error());

    }
}

if ($result){
	header("Location: event-listings.php");
	//echo '<script>location.replace("event_listings.php?success=1);</script>';
}
else{
	echo '<script>location.replace("event_create.php?success=0");</script>';
}

?>