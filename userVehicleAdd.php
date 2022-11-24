<?php
session_start();
if(!isset($_SESSION['id'])){
    header("location: ../home.html");
}
$db = mysqli_connect("localhost","root","","db_evplug");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>EVPLUG</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 
        
        <style>
            table {
              width: 40%;
              margin: 2% 0% 0% 0%;
            }
            input[type=text], select {
              width: 100%;
              padding: 12px 20px;
              margin: 8px 0;
              display: inline-block;
              border: 1px solid #ccc;
              border-radius: 4px;
              box-sizing: border-box;
            }

            input[type=submit] {
              width: 10%;
              background-color: red;
              color: white;
              padding: 14px 20px;
              margin: 8px 0;
              border: none;
              border-radius: 4px;
              cursor: pointer;
            }

            input[type=submit]:hover {
              background-color: indianred;
            }

            .validate{
                color: red;
            }
        </style> 

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="charging_type.js"></script>

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-12">
                        <div class="logo">
                            <a href="index.php">
                                <h1>EV<span>PLUG</span></h1>
                                <!-- <img src="img/logo.jpg" alt="Logo"> -->
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-3">
                        <div class="top-bar-item">
                            <div class="top-bar-icon">
                                <i class="fa fa-phone-alt"></i>
                            </div>
                            <div class="top-bar-text">
                                <h3>Call Us</h3>
                                <p>+91 8590683520</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="top-bar-item">
                            <div class="top-bar-icon">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="top-bar-text">
                                <h3>Email Us</h3>
                                <p>evplug.inc@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="top-bar-item" style="margin-right: 25px;">
                            <div class="top-bar-text">
                                <button><a href="Logout.php">Sign Out</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="index.php" class="nav-item nav-link active">Home</a>
                            <a href="about.html" class="nav-item nav-link">About</a>
                            <a href="service.html" class="nav-item nav-link">Service</a>
                            <a href="price.html" class="nav-item nav-link">Price</a>
                            <a href="location.html" class="nav-item nav-link">Charging Points</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu">
                                    <a href="blog.html" class="dropdown-item">Blog Grid</a>
                                    <a href="single.html" class="dropdown-item">Detail Page</a>
                                    <a href="team.html" class="dropdown-item">Team Member</a>
                                    <a href="booking.html" class="dropdown-item">Schedule Booking</a>
                                </div>
                            </div>
                            <a href="contact.html" class="nav-item nav-link">Contact</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->


        
        <!-- Form Starts -->

        <div id="addStation">
 

<form method="POST" onsubmit="return chargeValid()" name="addStation">
    <center>
    <table>
        <tr>
          <td><Label style="margin-left: 70%;">Vehicle Type</Label></td>
        </tr>

        <tr>
            <td>
                <div>
                    <select style="margin-left: 35%;" name="vehicletype" id="vehicletype" required>
                        <option selected disabled>Choose a Type</option>
                        <?php 
                            $getvehicletypequery = "select distinct vehicleType from tbl_vehicleModel order by vehicletype asc";
                            $getvehicletyperesult = mysqli_query($db,$getvehicletypequery);
                            while($getvehicletyperow = mysqli_fetch_array($getvehicletyperesult)){
                                $ttype = $getvehicletyperow['vehicleType'];
                                if($ttype==2){
                                    $vehicletype="Two Wheeler";
                                }
                                else if($ttype==3){
                                    $vehicletype="Three Wheeler";
                                }
                                else{
                                    $vehicletype="Four Wheeler";
                                }
                                ?>
                                <option value="<?php echo $ttype;?>"><?php echo $vehicletype; ?></option>
                            <?php }
                        ?>
                    </select>
                </div>
            </td>
        </tr>

        <tr>
          <td><Label>Vehicle Registration Number</Label></td>
          <td><Label style="margin-left: 20px;">Vehicle Brand</Label></td>
        </tr>

        <tr>
            <td><input type="text" placeholder="Enter your vehicle number" name="vehicleno" id="vehicleno" onblur="return rnoValidate()">
            </td>
            <td>
                <div>
                    <select style="margin-left: 20px;" name="vehiclebrand" id="vehiclebrand" required>
                        <option selected disabled>Choose a Brand</option>
                        <?php 
                            $getbrandquery = "select * from tbl_vehicleBrand where status=0";
                            $getbrandresult = mysqli_query($db,$getbrandquery);
                            while($getbrandrow = mysqli_fetch_array($getbrandresult)){?>
                                <option value="<?php echo $getbrandrow['brandId']; ?>"><?php echo $getbrandrow['brandName']; ?></option>
                            <?php }
                        ?>
                    </select>
                </div>
            </td>
        </tr>
        <tr>
            <td><span id="rnoValidate" class="validate"></span></td>
        </tr>

        <tr>
          <td><Label style="margin-left: 67%;">Vehicle Model</Label></td>
        </tr>

        <tr>
            <td>
                <div>
                    <select style="margin-left: 35%;" name="vehiclemodel" id="vehiclemodel" required>
                        <option selected disabled>Choose a Model</option>
                    </select>
                </div>
            </td>
        </tr>                     
       
      </table>
      <input type="submit" class="Submitbutton" name="chargetype" id="chargetype" value="Continue" onclick="return chargeValid()">
    </center>
  </form>

 </div>

        <!-- Form Ends -->


        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-contact">
                            <h2>Get In Touch</h2>
                            <p><i class="fa fa-map-marker-alt"></i>123 Street, New York, USA</p>
                            <p><i class="fa fa-phone-alt"></i>+012 345 67890</p>
                            <p><i class="fa fa-envelope"></i>info@example.com</p>
                            <div class="footer-social">
                                <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Popular Links</h2>
                            <a href="">About Us</a>
                            <a href="">Contact Us</a>
                            <a href="">Our Service</a>
                            <a href="">Service Points</a>
                            <a href="">Pricing Plan</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Useful Links</h2>
                            <a href="">Terms of use</a>
                            <a href="">Privacy policy</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-newsletter">
                            <h2>Newsletter</h2>
                            <form>
                                <input class="form-control" placeholder="Full Name">
                                <input class="form-control" placeholder="Email">
                                <button class="btn btn-custom">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <p>&copy; <a href="#">Your Site Name</a>, All Right Reserved. Designed By <a href="https://htmlcodex.com">HTML Codex</a></p>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
        <script>
// $(document).ready(function() {
//     $('#vehicletype').on('change', function() {
//             var vehicleType = this.value;
//             $.ajax({
//                 url: "get_vehicle_type.php",
//                 type: "POST",
//                 data: {
//                    vehicleType: vehicleType
//                 },
//                 cache: false,
//                 success: function(dataResult){ 
//                     $("#vehiclebrand").html(dataResult);
//                 }
//             });
        
        
//     });
// });

$(document).ready(function() {
    $('#vehiclebrand').on('change', function() {
            var brandId = this.value;
            $.ajax({
                url: "get_subcat.php",
                type: "POST",
                data: {
                   brandId: brandId
                },
                cache: false,
                success: function(dataResult){ 
                    $("#vehiclemodel").html(dataResult);
                }
            });
        
        
    });
});
</script>
    </body>
</html>

 <?php
//database connectivity
$db = mysqli_connect("localhost","root","","db_evplug");
$errors = array(); 

if(isset($_POST['chargetype'])){
    $vehicletype = $_POST['vehicletype'];
    $vehicleRegNo = $_POST['vehicleno'];
    $vehicleBrand = $_POST['vehiclebrand'];
    $vehicleModel = $_POST['vehiclemodel'];
    $loginId=$_SESSION['id'];
    //echo"<script Type='text/javascript'>alert($loginId)</script>";
    $vehicle_check_query = "SELECT * FROM tbl_userVehicle WHERE vehicleRegNo='$vehicleRegNo'";
    $vehiclecheckqueryresult = mysqli_query($db, $vehicle_check_query);
    $user = mysqli_fetch_assoc($vehiclecheckqueryresult);
    if ($user){ // if user exists
        if ($user['vehicleRegNo'] == $vehicleRegNo) {
            array_push($errors, "Vehicle already Registered");
        }   
    
    }

    if (count($errors) == 0) {
      $reg_query = "INSERT INTO tbl_userVehicle(vehicleRegNo,vehicleBrand,vehicleModel,vehicleType,loginId)VALUES('$vehicleRegNo','$vehicleBrand','$vehicleModel','$vehicletype','$loginId')";
      $reg_queryresult = mysqli_query($db,$reg_query);
      if($reg_queryresult){
        echo"<script Type='text/javascript'>alert('Vehicle Added')</script>";
        echo"<script>window.location.href='http://localhost/NEW EVPLUG/Customer/userVehicleView.php'</script>";
      }
      else {
        echo"<script Type='text/javascript'>alert('Fail to add service')</script>";
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
?>