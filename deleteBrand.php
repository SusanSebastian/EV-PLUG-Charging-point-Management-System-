<?php
$db = mysqli_connect("localhost","root","","db_evplug");
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
$id=$_GET['id'];
$query = "UPDATE tbl_vehiclebrand SET status=1 WHERE brandId=$id"; 
$result = mysqli_query($db,$query);
header("Location: viewBrand.php"); 
?>