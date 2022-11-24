<?php
  $db = mysqli_connect("localhost","root","","db_evplug");
  session_start();
  $email = $_SESSION['resetEmail'];
  $token = $_SESSION['token'];
?>
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from themetrace.com/templates/bracket/app/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Oct 2019 08:21:46 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="../../../../themepixels.me/bracket/img/bracket-social.html">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracket">
    <meta property="og:title" content="Bracket">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="../../../../themepixels.me/bracket/img/bracket-social.html">
    <meta property="og:image:secure_url" content="../../../../themepixels.me/bracket/img/bracket-social.html">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Admin-EVPLUG</title>

    <!-- vendor css -->
    <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="../lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="../lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">
    <link href="../lib/rickshaw/rickshaw.min.css" rel="stylesheet">
    <link href="../lib/chartist/chartist.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="../css/bracket.css">
    <link rel="stylesheet" href="Admin/app/admincss.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <style>

table {
  font-family: arial, sans-serif;
  margin-left: 250px;
}


</style>


</head>

<body>

<form method="GET" name="password">
  
  <div>
    <center>
      <h2>Change Password</h2>
    </center>
    
    <table style="margin-top: 5%;">
      <tr>
        <div class="col-md-6">
           <td><label for="psw"><b>New Password</b></label></td>
           <label style="display: none;" id="newPassword"></label>
           <td><input style ="width: 500px;" type="text" placeholder="Enter New Password" name="newPassword" required></td>
        </div>
      </tr>     
    </div>

    <tr>
      <td>
        <div class="col-md-6">
           <label for="psw"><b>Confirm Password</b></label>
           <label style="display: none;" id="cPassword"></label>
           <td><input style ="width: 500px;" type="text" placeholder="Confirm New Password" name="confirmPassword" required></td>
        </div>
      </td>
    </tr>

    
    </table>

  <button type="submit" class="registerbtn" name="changepassword" style="margin-left: 50%""background-color: #4CAF50";>Update</button>
  </div>
</form>
</body>
</html>

<?php 

if(isset($_GET['changepassword'])){
  $new_password=$_GET['newPassword'];
  $confirm_password=$_GET['confirmPassword'];
  $password = md5($new_password);


      //checking token is valid or not
      $check_token = "SELECT token FROM password_reset_temp WHERE token='$token' and status=1";
      $check_token_run = mysqli_query($db, $check_token);
      if(mysqli_num_rows($check_token_run ) > 0){

        if($new_password == $confirm_password){

          $update_password = "UPDATE tbl_login SET password = '$password' where email='$email'";
          $update_password_run = mysqli_query($db, $update_password);

          $reset_status = "UPDATE password_reset_temp SET status = 0 where email='$email'";
          $reset_status_run = mysqli_query($db, $reset_status);
          if($reset_status_run){
            header("location: index.html");
          }
        }

        else{

          $_SESSION['status'] = "Password and Confirm Password does not match";
          header("location: password_change.php?token=$token&email=$email");
          exit(0);
        }
      }

}

?>