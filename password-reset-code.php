<?php 
session_start();
$db = mysqli_connect("localhost","root","","db_evplug");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

function send_password_reset($resetEmail,$token){

  //Server settings
    // $mail = new PHPMailer(true); 
    // $mail->isSMTP();                                     
    // $mail->SMTPAuth   = true;
    // $mail->SMTPKeepAlive = true;  
    // $mail->Mailer = "smtp"; 
    // $mail->CharSet = 'utf-8';  
    // $mail->SMTPDebug  = 0;
    // $mail->Host       = 'evplug.inc@gmail.com';
    // $mail->Username   = 'susansebastian057@gmail.com';                     //SMTP username
    // $mail->Password   = '***';                               //SMTP password
    // $mail->SMTPSecure = "TLS";            //Enable implicit TLS encryption
    // $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`               // enable SMTP authentication  
 


    //        $mail = new PHPMailer();
    //        $mail->IsSMTP();  // telling the class to use SMTP
    //        $mail->SMTPDebug = 2;
    //        $mail->Mailer = "smtp";
    //        $mail->Host       = 'evplug.inc@gmail.com';
    //        $mail->Port = 587;
    //        $mail->SMTPAuth = true; // turn on SMTP authentication
    //        $mail->Username   = 'susansebastian057@gmail.com';  // SMTP username
    //        $mail->Password = "#Saho3769"; // SMTP password
    //        $Mail->Priority = 1;
    //        $mail->SetFrom($email);
    //        $mail->AddReplyTo($email);
    //        $mail->Subject  = "This is a Test Message";
    //        $mail->Body     = $user_message;
    //        $mail->WordWrap = 50;

    // //Recipients
    // $mail->addAddress($email);  //Add a recipient
    // $mail->Subject = "Reset password notification";

    // $email_template = "
    // <h2>Hello</h2>
    // <h3>You're receiving this email because we've received a password reset notification from your account.</h3>
    // <br/><br/>
    // <a href='http://localhost/NEW%20EVPLUG/password-change.php?token=$token&email=$email'>Click to change</a>
    // ";
    // $mail->Body = $email_template;
    // $mail->send();

         $to = $resetEmail;
         $subject = "Password Reset Notification";
         
         $message = "<html>
                      <body>
                      <h2>Hello</h2>
                      <h3>You're receiving this email because we've received a password reset notification from your account.</h3>
                    <br/>
                    <a href='http://localhost/NEW%20EVPLUG/password-change.php?token=$token&email=$resetEmail'>Click to change</a>
                    </body>
                    </html>";
         
         $header = "From: evplug.inc@gmail.com";
         $retval = mail ($to,$subject,$message,$header);
         if($retval){
            $_SESSION['status'] = "We emailed you a password reset link";

         }
}

if(isset($_POST['password_reset_link'])){
  $resetEmail = mysqli_real_escape_string($db,$_POST['resetEmail']);
  $token = md5(rand());

  $check_email="SELECT * FROM tbl_login where email='$resetEmail' LIMIT 1";
  $check_email_run = mysqli_query($db,$check_email);

  if(mysqli_num_rows($check_email_run ) > 0){
      $row = mysqli_fetch_array($check_email_run);
      $update_token = "INSERT into password_reset_temp(email,token,status)values('$resetEmail','$token',1)";
      $update_token_run = mysqli_query($db,$update_token);

      if($update_token_run){
            $_SESSION['resetEmail']=$resetEmail;
            $_SESSION['token']=$token;
            send_password_reset($resetEmail,$token);
            header("Location:password-reset.php");
            exit(0);
      }
      else{
            $_SESSION['status'] = "Something went wrong. #";
            header("Location:password-reset.php");
            exit(0);
      }
  }
  else{
    $_SESSION['status'] = "No email Found";
    header("location:password-reset.php");
  }
}


?>