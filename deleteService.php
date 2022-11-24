<?php
$db = mysqli_connect("localhost","root","","db_evplug");
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
$id=$_REQUEST['id'];
echo"<script Type='text/javascript'>alert($id)</script>";
$query = "UPDATE tbl_service SET status=0 WHERE serviceId=$id"; 
$result = mysqli_query($db,$query) or die ( mysqli_error());
header("Location: viewService.php"); 
?>