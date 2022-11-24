

<!-- connect to the database -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="db_evplug";
$db = mysqli_connect($servername, $username, $password,$database);
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
//initializing variables
	$errors = array(); 
  

// REGISTER USER
if (isset($_POST['register'])) {
//   // receive all input values from the form
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
  $contact =  $_POST['contact'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $email = $_POST['email'];
  $pwd =  $_POST['pwd'];
  $password = md5($pwd);



  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM tbl_login WHERE email='$email'";
  $checkqueryresult = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($checkqueryresult);
  if ($user){ // if user exists
    if ($user['email'] == $email) {
      array_push($errors, "Email already exists");
    }
    
  }

  //Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $log_query = "INSERT INTO tbl_login(email,password,type,status)VALUES('$email','$password',2,1)";
  	$logqueryresult = mysqli_query($db,$log_query);
    if($logqueryresult) {
      $idselectionquery = "SELECT loginId FROM tbl_login WHERE email='$email'";
      $idselectionqueryresult = mysqli_query($db, $idselectionquery);
      $user = mysqli_fetch_assoc($idselectionqueryresult);
      $loginId = $user['loginId'];
      $reg_query = "INSERT INTO tbl_user(userFirstName,userLastName,userContact,city,state,loginId)
      VALUES('$fname','$lname','$contact','$city','$state','$loginId')";
      $reg_queryresult = mysqli_query($db,$reg_query);
      if($reg_queryresult){
        echo"<script Type='text/javascript'>alert('Registration Success')</script>";
        echo"<script>window.location.href='http://localhost/NEW EVPLUG/index.html';</script>";
      }
      else {
        echo"<script Type='text/javascript'>alert('Registration not Success')</script>";
      } 
    }
  }
}

?>

<?php  if (count($errors) > 0) : ?>
   <div class="error" style="color:red">
     <?php foreach ($errors as $error) : ?>
       <p><?php echo"<script Type='text/javascript'>alert('$error')</script>"; ?></p>
     <?php endforeach ?>
   </div>
 <?php  endif ?>