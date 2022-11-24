<?php
session_start();
if(!isset($_SESSION['id'])){
  header("location: ../../home.html");
}
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
    <link rel="stylesheet" href="admincss.css">
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

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href="#"><span>[</span>EVPLUG<span>]</span></a></div>
    <div class="br-sideleft overflow-y-auto">
      <label class="sidebar-label pd-x-15 mg-t-20">Menu</label>
      <div class="br-sideleft-menu">
        <a href="index.php" class="br-menu-link">
          <div class="br-menu-item">
            <!--<i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>-->
            <span class="menu-item-label">Home</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <a href="" class="br-menu-link">
          <div class="br-menu-item">
            <!--<<i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>-->
            <span class="menu-item-label">Profile</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->

        <a href="#" class="br-menu-link active">
          <div class="br-menu-item">
            <!--<<i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>-->
            <span class="menu-item-label">Station</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
          <li class="nav-item"><a href="viewStation.php" class="nav-link">View Station</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Add Station</a></li>
          <li class="nav-item"><a href="mappingStationService.php" class="nav-link">Mapping</a></li>
        </ul>
        <a href="#" class="br-menu-link">
          <div class="br-menu-item">
            <!--<<i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>-->
            <span class="menu-item-label">Vehicle</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
          <li class="nav-item"><a href="viewBrand.php" class="nav-link">Brand</a></li>
          <li class="nav-item"><a href="addvehicle.php" class="nav-link">Model</a></li>
        </ul>
        <a href="#" class="br-menu-link">
          <div class="br-menu-item">
            <!--<<i class="menu-item-icon ion-ios-redo-outline tx-24"></i>-->
            <span class="menu-item-label">Manager</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
          <li class="nav-item"><a href="viewManager.php" class="nav-link">View Manager</a></li>
          <li class="nav-item"><a href="addManager.php" class="nav-link">Add Manager</a></li>
        </ul>
        <a href="#" class="br-menu-link">
          <div class="br-menu-item">
            <!--<<i class="menu-item-icon ion-ios-pie-outline tx-20"></i>-->
            <span class="menu-item-label">Service</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
          <li class="nav-item"><a href="viewService.php" class="nav-link">View Service</a></li>
          <li class="nav-item"><a href="addService.php" class="nav-link">Add Service</a></li>
        </ul>
                <a href="viewBooking.php" class="br-menu-link">
          <div class="br-menu-item">
            <!--<<i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>-->
            <span class="menu-item-label">Booking</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->


 <a href="Password.php" class="br-menu-link">
          <div class="br-menu-item">
            <!--<<i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>-->
            <span class="menu-item-label">Change Password</span>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        



      <br>
    </div><!-- br-sideleft -->

    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="br-header">
      <div class="br-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href="#"><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href="#"><i class="icon ion-navicon-round"></i></a></div>
        <div class="input-group hidden-xs-down wd-170 transition">
          <!--<input id="searchbox" type="text" class="form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-secondary" type="button"><i class="fa fa-search"></i></button>
          </span> -->
        </div><!-- input-group -->
      </div><!-- br-header-left -->
      <div class="br-header-right">
        <nav class="nav">



          <div class="dropdown">
            <a href="#" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name hidden-md-down"><?php echo $_SESSION['username'] ?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">
                <li><a href="Logout.php"><i class="icon ion-power"></i> Sign Out</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
<!-- navicon-right -->
      </div><!-- br-header-right -->
    </div><!-- br-header -->
  </div>

    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
   
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->
   
<!-- ########## START: MAIN PANEL ########## -->
    
<!-- ==========Add Station=============== -->

<div id="addStation">
  <!-- station Management -->
  <?php

$db = mysqli_connect("localhost","root","","db_evplug");

$query = "SELECT * from tbl_service";
$result = mysqli_query($db,$query);

?>

<form method="POST" name="addStation">
    <center>
      <h1 style="margin-top: 10%; margin-left: 175px">New Station</h1>
    <table>
        <tr>
          <td><input type="text" placeholder="Station Name" id="sname" name="sname" onchange="return stationnameValidate()" />
          </td>
          <td>
            <input type="number" style="width: 100%;padding: 12px 20px;margin: 8px 0;display: inline-block;border: 1px solid #ccc;
              border-radius: 4px;box-sizing: border-box;" name="noofports" id="noofports" min="0" placeholder="Enter port">
        
          </td>
          <tr>
               <td><span id="stationnameValidate" class="validate"></span></td>
               <td><span id="placeValidate" class="validate"></span></td>
            </tr>

        </tr>
        <tr>
          <td><input type="text" placeholder="Contact" maxlength="13" id="contact" name="contact" onchange="return cnoValidate()"/>
          </td>
          <td><input type="email" placeholder="Email" id="email" name="email" onchange="return emailValidate()" /></td>
        </tr>
          <tr>
               <td><span id="cnoValidate" class="validate"></span></td>
               <td><span id="emailValidate" class="validate"></span></td>
          </tr>

          <tr>
            <td><input type="text" placeholder="Place" id="place" name="place" onchange="return placeValidate()"/></td>
            <td><select name="district" id="district" required>
              <option selected disabled hidden>Select a District</option>
              <option value="Trivandrum">Trivandrum</option>
               <option value="Kollam">Kollam</option>
                <option value="Pathanamthitta">Pathanamthitta</option>
                 <option value="Alappuzha">Alappuzha</option>
                  <option value="Kottayam">Kottayam</option>
                   <option value="Idukki">Idukki</option>
                    <option value="Ernakulam">Ernakulam</option>
                     <option value="Thrissur">Thrissur</option>
                      <option value="Palakkadu">Palakkadu</option>
                       <option value="Malappuram">Malappuram</option>
                        <option value="Kozhikode">Kozhikode</option>
                         <option value="Wayanadu">Wayanadu</option>
                          <option value="Kannur">Kannur</option>
                           <option value="Kasargod">Kasargod</option>
            </select></td>
          
<!--           <td><input type="file" class="custom-file-input" name="StationImage"></td>
 -->        </tr>
             <tr>
               <td>

               </td>
             </tr>
      </table>
      <center><textarea id="landmark" name="landmark" required placeholder="Enter a Landmark" style="width: 34%;padding: 12px 20px;margin-left:250px;display: inline-block;border: 1px solid #ccc;
              border-radius: 4px;box-sizing: border-box;"></textarea></center>
      <button class="Submitbutton" name="addStation" id="addStation" style="width: 10%; margin-left: 20%" onclick="return addstationValid()">Add Station</button>
    </center>
  </form>
 </div>
 <script src="adminScript.js"></script>
<!-- ==========Add Station=============== -->



    <script src="../lib/jquery/jquery.js"></script>
    <script src="../lib/popper.js/popper.js"></script>
    <script src="../lib/bootstrap/bootstrap.js"></script>
    <script src="../lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="../lib/moment/moment.js"></script>
    <script src="../lib/jquery-ui/jquery-ui.js"></script>
    <script src="../lib/jquery-switchbutton/jquery.switchButton.js"></script>
    <script src="../lib/peity/jquery.peity.js"></script>
    <script src="../lib/chartist/chartist.js"></script>
    <script src="../lib/jquery.sparkline.bower/jquery.sparkline.min.js"></script>
    <script src="../lib/d3/d3.js"></script>
    <script src="../lib/rickshaw/rickshaw.min.js"></script>


    <script src="../js/bracket.js"></script>
    <script src="../js/ResizeSensor.js"></script>
    <script src="../js/dashboard.js"></script>
    <script>
      $(function(){
        'use strict'

        // FOR DEMO ONLY
        // menu collapsed by default during first page load or refresh with screen
        // having a size between 992px and 1299px. This is intended on this page only
        // for better viewing of widgets demo.
        $(window).resize(function(){
          minimizeMenu();
        });

        minimizeMenu();

        function minimizeMenu() {
          if(window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {
            // show only the icons and hide left menu label by default
            $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
            $('body').addClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideUp();
          } else if(window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass('collapsed-menu')) {
            $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
            $('body').removeClass('collapsed-menu');
            $('.show-sub + .br-menu-sub').slideDown();
          }
        }
      });
    </script>
   

  </body>

<!-- Mirrored from themetrace.com/templates/bracket/app/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Oct 2019 08:23:39 GMT -->
</html>


<?php
$db = mysqli_connect("localhost","root","","db_evplug");
//initializing variables
  $errors = array(); 
  

// REGISTER USER
if (isset($_POST['addStation'])) {
//   // receive all input values from the form
  $sname = $_POST['sname'];
  $place =  $_POST['place'];
  $contact = $_POST['contact'];
  $email = $_POST['email'];
  if(isset($_POST['noofports'])){
  $nop=$_POST['noofports'];
  }
  $district = $_POST['district'];
  $landmark = $_POST['landmark'];
  // $service =  $_POST['service'];
  

  $user_check_query = "SELECT * FROM tbl_station WHERE (email='$email' or contact='$contact') and status=1";
  $checkqueryresult = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($checkqueryresult);
  if ($user){ // if user exists
    if ($user['email'] == $email) {
      array_push($errors, "This email has registered with another station");
    }
    else if($user['contact'] == $contact){
      array_push($errors,"This contact has already in use");
    }
    
  }
  if (count($errors) == 0) {
      $reg_query = "INSERT INTO tbl_station(stationName,place,district,landmark,noOfports,contact,email,status)
      VALUES('$sname','$place','$district','$landmark','$nop','$contact','$email',1)";
      $reg_queryresult = mysqli_query($db,$reg_query);
      if($reg_queryresult){
        $stationidselectionquery = "SELECT stationId FROM tbl_station WHERE email='$email'";
        $stationidselectionqueryresult = mysqli_query($db, $stationidselectionquery);
        $user = mysqli_fetch_assoc($stationidselectionqueryresult);
        $stationId = $user['stationId'];
        while($nop>0){
          $port = mysqli_query($db, "INSERT into tbl_port(stationIdn)values('$stationId')");
          $nop = $nop-1; 
        }

        $timeslot1=mysqli_query($db, "INSERT into tbl_timeslot(slot,type,stationId,status)values('9:00-10:00',1,'$stationId',0)");
        $timeslot2=mysqli_query($db, "INSERT into tbl_timeslot(slot,type,stationId,status)values('10:00-11:00',1,'$stationId',0)");
        $timeslot3=mysqli_query($db, "INSERT into tbl_timeslot(slot,type,stationId,status)values('11:00-12:00',1,'$stationId',0)");
        $timeslot4=mysqli_query($db, "INSERT into tbl_timeslot(slot,type,stationId,status)values('12:00-01:00',1,'$stationId',0)");

        $qtimeslot1=mysqli_query($db, "INSERT into tbl_timeslot(slot,type,stationId,status)values('9:00-9:30',2,'$stationId',0)");
        $qtimeslot2=mysqli_query($db, "INSERT into tbl_timeslot(slot,type,stationId,status)values('9:30-10:00',2,'$stationId',0)");
        $qtimeslot3=mysqli_query($db, "INSERT into tbl_timeslot(slot,type,stationId,status)values('10:30-11:00',2,'$stationId',0)");
        $qtimeslot4=mysqli_query($db, "INSERT into tbl_timeslot(slot,type,stationId,status)values('11:30-12:00',2,'$stationId',0)");
        echo"<script Type='text/javascript'>alert('Station Added')</script>";
        echo"<script>window.location.href='http://localhost/NEW EVPLUG/Admin/app/viewStation.php';</script>";
      }
      else {
        echo"<script Type='text/javascript'>alert('Failed to add')</script>";
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