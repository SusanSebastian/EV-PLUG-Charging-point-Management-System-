<?php 
$db = mysqli_connect("localhost","root","","db_evplug");
session_start();
$lid=$_SESSION['id'];
if(isset($_POST['paymentid'])){
    $pymnt_id=$_POST['paymentid'];
    $amt=$_POST['amount'];
    $payment_status="completed";
    
$ins_query=mysqli_query($db,"INSERT INTO tbl_payment(userId,razorPay,status,amount)VALUES('$lid','$pymnt_id','$payment_status','$amt')");

}