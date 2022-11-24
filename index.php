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
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <style>

table {
  font-family: arial, sans-serif;
  margin-left: 250px;
  margin-top: 30px;
}

td, th {
  border: 1px solid black;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

</style>


  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href="#"><span>[</span>EVPLUG<span>]</span></a></div>
    <div class="br-sideleft overflow-y-auto">
      <label class="sidebar-label pd-x-15 mg-t-20">Menu</label>
      <div class="br-sideleft-menu">
        <a href="#" class="br-menu-link active">
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

        <a href="#" class="br-menu-link">
          <div class="br-menu-item">
            <!--<<i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>-->
            <span class="menu-item-label">Station</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
          <li class="nav-item"><a href="viewStation.php" class="nav-link">View Station</a></li>
          <li class="nav-item"><a href="addStation.php" class="nav-link">Add Station</a></li>
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
   
   <div class="br-mainpanel">
    <br>

<!-- ######## CARD ####### -->

<!-- ######## Card1 ####### -->
      <div class="br-pagebody mg-t-5 pd-x-30">
        <div class="row row-sm">
          <div class="col-sm-6 col-xl-3">
            <div class="bg-teal rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="ion ion-earth tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Stations</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1"> 
                    <?php 

                      $db = mysqli_connect('localhost', 'root', '', 'db_evplug');
                      $user_check_query = "SELECT COUNT(stationId) FROM tbl_station";
                      $result1 = mysqli_query($db, $user_check_query);
                      $user = mysqli_fetch_array($result1);
                      $row1=$user[0];

                      echo "$row1";

                    ?> </p>

                </div>
              </div>
            </div>
          </div><!-- col-3 -->
<!-- ######## Card1 ####### -->

<!-- ######## Card2 ####### -->
          <div class="col-sm-6 col-xl-3">
            <div class="bg-teal rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="ion ion-earth tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Managers</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1"> 
                    <?php 

                      $db = mysqli_connect('localhost', 'root', '', 'db_evplug');
                      $user_check_query = "SELECT COUNT(managerId) FROM tbl_manager";
                      $result1 = mysqli_query($db, $user_check_query);
                      $user = mysqli_fetch_array($result1);
                      $row1=$user[0];

                      echo "$row1";

                    ?> </p>

                </div>
              </div>
            </div>
          </div><!-- col-3 -->
<!-- ######## Card2 ####### -->

<!-- ######## Card3 ####### -->
          <div class="col-sm-6 col-xl-3">
            <div class="bg-teal rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="ion ion-earth tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Ports</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1"> 
                    <?php 

                      $db = mysqli_connect('localhost', 'root', '', 'db_evplug');
                      $user_check_query = "SELECT SUM(noOfports) FROM tbl_station";
                      $result1 = mysqli_query($db, $user_check_query);
                      $user = mysqli_fetch_array($result1);
                      $row1=$user[0];

                      echo "$row1";

                    ?> </p>

                </div>
              </div>
            </div>
          </div><!-- col-3 -->
<!-- ######## Card3 ####### -->

<!-- ######## Card4 ####### -->
          <div class="col-sm-6 col-xl-3">
            <div class="bg-teal rounded overflow-hidden">
              <div class="pd-25 d-flex align-items-center">
                <i class="ion ion-earth tx-60 lh-0 tx-white op-7"></i>
                <div class="mg-l-20">
                  <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Services</p>
                  <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1"> 
                    <?php 

                      $db = mysqli_connect('localhost', 'root', '', 'db_evplug');
                      $user_check_query = "SELECT COUNT(serviceId) FROM tbl_service";
                      $result1 = mysqli_query($db, $user_check_query);
                      $user = mysqli_fetch_array($result1);
                      $row1=$user[0];

                      echo "$row1";

                    ?> </p>

                </div>
              </div>
            </div>
          </div><!-- col-3 -->
<!-- ######## Card4 ####### -->

      </div><!-- row -->
    </div>

     <!-- ######## CARD ####### -->
</div>



<!-- ==========Home Page Card View=============== -->



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