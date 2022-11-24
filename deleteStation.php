<?php
$db = mysqli_connect("localhost","root","","db_evplug");
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
$id=$_REQUEST['id'];
// echo"<script Type='text/javascript'>alert($id)</script>";
$query = "UPDATE tbl_station SET status=0 WHERE stationId=$id"; 
$result = mysqli_query($db,$query) or die ( mysqli_error());
header("Location: viewStation.php"); 
?>