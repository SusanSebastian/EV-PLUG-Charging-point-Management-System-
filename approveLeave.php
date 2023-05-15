<?php
$db = mysqli_connect("localhost","root","","db_evplug");
//initializing variables

// REGISTER USER
    $leaveid = $_GET['id'];
    $updatereg_query = "UPDATE tbl_leave SET status=3 WHERE leave_id=$leaveid";
    $reg_queryresult = mysqli_query($db, $updatereg_query);
    if($reg_queryresult){
        echo "<script>window.location.href='manageLeave.php';</script>";
    } else {
        echo "<script Type='text/javascript'>alert('Failed to Approve')</script>";
    } 
?>
