
<?php
session_start();
$db = mysqli_connect("localhost","root","","db_evplug");
if(isset($_POST["submit"]))
{
 
  $name=$_POST['name'];
  $email=$_POST['email'];
  $rating=$_POST['rating'];
  $comment=$_POST['comment'];
  $sql1=mysqli_query($db,"INSERT INTO tbl_feedback(Name,Email,Rating,Comment)VALUES('$name','$email','$rating','$comment')");
  echo"<script Type='text/javascript'>alert('Feedback submitted successfully')</script>";
  echo"<script>window.location.href='http://localhost/NEW EVPLUG/home.html'</script>";
    
    }  
  	
?>
