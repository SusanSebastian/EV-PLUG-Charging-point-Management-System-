<?php
session_start();
$db = mysqli_connect("localhost","root","","db_evplug");
$id = $_GET['id'];
 $time = $_SESSION['time'];
 $sid = $_SESSION['sid'];
$cancelquery = mysqli_query($db, "UPDATE tbl_booking SET status=2 where booking_id='$id'");
if($cancelquery){
	$timeslotstatusquery = mysqli_query($db, "update tbl_timeslot set status=0 where stationId='$sid' and slot='$time'");
	header('Location: my_bookings.php');
}
?>