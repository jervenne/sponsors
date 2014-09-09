<?
session_start();
require_once('inc/dbconfig.php');

$title = $_POST['event_title'];
$location = $_POST['location'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$start_time = $_POST['start_time'];
$end_time = $_POST['end_time'];
$turnout = $_POST['turnout'];
$logo = $_FILES['logo']['name'];
$description = $_POST['description'];
$orgInfo = $_POST['orgInfo'];
$facebook = $_POST['facebook'];
$facebook_event = $_POST['facebook_event'];
$twitter = $_POST['twitter'];
$instagram = $_POST['instagram'];

//file paths
$event_logo = 'images/'.$logo;


//move photos

if(move_uploaded_file($_FILES['logo']['tmp_name'],$event_logo)) {
}

$sql = "INSERT INTO candidate (name, picture, icon) VALUES ('$name', '$photo', '$icon')";
	$result = mysql_query($sql) or die(mysql_error());
	
    if ($result){
		echo '<script>location.replace("admin.php?id=p");</script>';
	}
	else{
		echo '<script>location.replace("admin.php?id=f");</script>';
	}
?>