<?php
$db = mysqli_connect("localhost","root","","db_evplug");
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
$id=$_GET['id'];
$email=$_GET['email']; 
$query = "UPDATE tbl_manager SET status=0 WHERE managerId=$id"; 
$result = mysqli_query($db,$query);
$query2 = "UPDATE tbl_login SET status=0 WHERE email='$email'";
$result2 = mysqli_query($db,$query2);
header("Location: viewManager.php"); 
?>