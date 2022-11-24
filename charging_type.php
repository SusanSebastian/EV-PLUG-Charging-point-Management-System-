<?php
session_start();
if(!isset($_SESSION['id'])){
    header("location : ../index.html");
}
$loginId = $_SESSION['id'];
$db = mysqli_connect("localhost","root","","db_evplug");
$findVehicleQuery = mysqli_query($db, "SELECT vehicleRegNo from tbl_uservehicle WHERE loginId='$loginId'");
$rowCount=mysqli_num_rows($findVehicleQuery);
if($rowCount==0){
    echo "<script>alert('Add your vehicle to continue booking!')</script>";
    echo"<script>window.location.href='http://localhost/NEW EVPLUG/Customer/userVehicleAdd.php'</script>";
}
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
              width: 20%;
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
 

<form method="POST" name="addStation">
    <center>
    <table>
        <tr>
          <td><Label>Select Charging Type</Label></td>
        </tr>

        <tr>
            <td>
                <div>
                    <input type="radio" name="chargingType" checked="checked" value="2">
                    <label>Quick Charge</label>
                    <input type="radio" style="margin-left: 10px;" name="chargingType" value="1">
                    <label>Full Charge</label>
                </div>
            </td>
        </tr>

        <tr>
          <td><Label>Vehicle Registration Number</Label></td>
        </tr>

        <tr>
            <td><select name="vehicleno" required>
                    <option disabled hidden>Choose your vehicle</option>
                    <?php
                        $populateOwnedVehicleQuery = mysqli_query($db, "SELECT vehicleRegNo from tbl_userVehicle where loginId='$loginId'");
                        while($fetchVehicleResult = mysqli_fetch_assoc($populateOwnedVehicleQuery)){
                            ?>
                            <option value="<?php echo $fetchVehicleResult['vehicleRegNo']; ?>"><?php echo $fetchVehicleResult['vehicleRegNo']; ?></option>
                            <?php

                        }
                    ?>
            </select></td>
        </tr>
        <tr>
            <td><span id="rnoValidate" class="validate"></span></td>
        </tr>

        <tr>
          <td><Label>Contact Number</Label></td>
        </tr>

        <tr>
            <td><input placeholder="Enter your contact number" type="text" name="contact" required maxlength="13" id="contact" onblur="return cnoValidate()"></td>
        </tr>
        <tr>
            <td><span id="cnoValidate" class="validate"></span></td>
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

if(isset($_POST['chargetype'])){
    $_SESSION['chargingtype']=$_POST['chargingType'];
    $typeOfCharge = $_POST['chargingType'];
    $_SESSION['vehicleno'] = $_POST['vehicleno'];
    $_SESSION['contact'] = $_POST['contact'];
    $vehicleno = $_POST['vehicleno'];
    $findVehicleTypeQuery = mysqli_query($db, "SELECT * from tbl_uservehicle where vehicleRegNo='$vehicleno'");
    $fetchVehicleQuery = mysqli_fetch_assoc($findVehicleTypeQuery);
    $model = $fetchVehicleQuery['vehicleModel'];
    $type = $fetchVehicleQuery['vehicleType'];
    $findModelCapacityQuery = mysqli_query($db, "SELECT * from tbl_vehiclemodel where modelId='$model'");
    $fetchModelCapacity = mysqli_fetch_assoc($findModelCapacityQuery);
    $capacity = $fetchModelCapacity['capacity'];
    if($type == 2){
        if($typeOfCharge==1){
            $price = round(($capacity * 8.5) + 15);
        }
        else{
            $price = round(($capacity * 8.5)/2 + 10);

        }
    }
    if($type == 3){
        if($typeOfCharge==1){
            $price = round(($capacity * 8.5) + 25);
        }
        else{
            $price = round(($capacity * 8.5)/2 + 20);

        }
    }
    if($type == 4){
        if($typeOfCharge==1){
            $price = round(($capacity * 8.5) + 40);
        }
        else{
            $price = round(($capacity * 8.5)/2 + 30);

        }
    }
    $_SESSION['price']=$price;
    echo"<script>window.location.href='http://localhost/NEW EVPLUG/Customer/date_time.php'</script>";
 }
?>