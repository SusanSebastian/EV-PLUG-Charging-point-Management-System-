<?php
  session_start();
  if(!isset($_SESSION['id'])){
      header("location: ../dashboard.php");
}
  $db = mysqli_connect("localhost","root","","db_evplug");
    // $portid = $_REQUEST['id'];
    // $selectquery = mysqli_query($db, "SELECT * from tbl_port WHERE port_id='$portid'");
    // $row=mysqli_fetch_assoc($selectquery);
  $lid = $_SESSION['id'];
  //echo "<script>alert($lid)</script>";
?>

<!--
=========================================================
* Material Dashboard 2 - v3.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
    Material Dashboard 2 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
    .card {
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
      transition: 0.3s;
      margin-left: 230px;
      margin-top: 20px;
      width: 35%;
      padding: 50px;
    }

    .card:hover {
      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }

    .container {
      padding: 2px 16px;
    }

    .btnAdd {
      border: none;
      background-color: inherit;
      padding: 14px 28px;
      font-size: 16px;
      cursor: pointer;
      display: inline-block;
      margin-left: 80%;
      font-weight: bold;
    }

    .btnAdd:hover {
      background: #bbc3c9;
    }

    .success {
      color: green;
    }
    #sidenav-collapse-main{
      overflow-y: hidden;
    }

  </style>
</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <span class="ms-1 font-weight-bold text-white">EV PLUG</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <!-- ##To remove scroll# -->
    <!-- <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main"> -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white " href="../dashboard.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="managerProfile.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="port.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Port</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="addTimeSlot.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Time Slot</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="viewBook.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">view_in_ar</i>
            </div>
            <span class="nav-link-text ms-1">View Bookings</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="../qrcodesample/index.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Scan</span>
          </a>  
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="leave.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1"> Apply Leave</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="manageLeave.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">ManageLeave</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="http://127.0.0.1:5000">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Fire Prediction</span>
          </a>
        </li>
      </ul>
    </div>
    <!-- <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
        <a class="btn bg-gradient-primary mt-4 w-100" href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a>
      </div>
    </div> -->
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <!-- <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Billing</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Billing</h6>
        </nav> -->
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <!-- <div class="input-group input-group-outline">
              <label class="form-label">Type here...</label>
              <input type="text" class="form-control">
            </div> -->
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <p class="btn btn-outline-primary btn-sm mb-0 me-3"><?php echo $_SESSION['username']; ?></p>
            </li>
            <li class="nav-item d-flex align-items-center">
              <a href="managerLogout.php" class="nav-link text-body font-weight-bold px-0"> 
                <span class="d-sm-inline d-none">Logout</span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="about" id="booking"> 
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="section-header text-left">
                            <h3>Manage Leaves</h3>
                        </div>
                        <div class="about-content">
                            <form method="POST" name="leave_status">
                                <center>
                                    <div class="table-title">
                                    </div>
                                    <?php
                                    $Id = $_SESSION['id'];
                                    $midquery = mysqli_query($db,"SELECT * from tbl_manager where loginId='$Id'");
                                    $mrow = mysqli_fetch_assoc($midquery);
                                    $mid=$mrow['managerId'];
                                    $result1 = mysqli_query($db, "SELECT * from tbl_leave where manager_id='$mid'");
                                    ?>
                                    <table class="table" style="width:100%">
                                        <thead>
                                            <tr>
                                                <!-- <th style="width: 200px;">SI.No</th> -->
                                                <th style="width: 200px;">From</th>
                                                <th style="width: 200px;">To</th>
                                                <th style="width: 200px;">Applied On</th>
                                                <th style="width: 220px;">Reason</th>
                                                <th style="width: 220px;">Status</th>
                                                <th style="width: 220px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while($row = mysqli_fetch_array($result1)){ ?>
                                                <tr>
                                                <td><?php echo $row['start_date']; ?></td>
                                                <td><?php echo $row['end_date']; ?></td>
                                                <td><?php echo $row['applied_on']; ?></td>
                                                <td><?php echo $row['reason']; ?></td>
                                                

                                                <!-- //set status type -->
                                                <?php $status = $row['status'];
                                                    if($status==1){
                                                        $status_type='Applied';
                                                    }
                                                    if($status==2){
                                                        $status_type='Cancelled';
                                                    }
                                                    if($status==3){
                                                        $status_type='Approved';
                                                    }
                                                    if($status==4){
                                                      $status_type='Rejected';
                                                    }
                                                ?>
                                                <td><?php echo $status_type ?></td>

                                                <?php if($status==1){ ?>
                                                <td>
                                                    <button style="width:80px" class="btn btn-danger">
                                                      <a style="color:white" href="cancelBooking.php?id=<?php echo $row['leave_id']; ?>" onclick="return checkCancel()">Cancel</a></button>
                                                </td>
                                                <?php }?>
                                           </tr>
                                           <?php } ?>
                                        </tbody>
                                    </table>
                                </center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Choose your theme</h5>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>

        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
</body>

</html>

?>
