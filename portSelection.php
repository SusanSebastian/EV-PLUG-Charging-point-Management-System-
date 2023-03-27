<?php
session_start();
if(!isset($_SESSION['id'])){
    header("location: ../home.html");
}
$db = mysqli_connect("localhost","root","","db_evplug");
$date = $_SESSION['date'];
$sid=$_SESSION['sid'];
$time = $_SESSION['time'];

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
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        
        <style>
            body {
                  font-family: Arial;
                  font-size: 17px;
                  padding: 8px;
                }
                * {
                  box-sizing: border-box;
                }
                .row {
                  display: -ms-flexbox; /* IE10 */
                  display: flex;
                  -ms-flex-wrap: wrap; /* IE10 */
                  flex-wrap: wrap;
                  margin: 0 -16px;
                }
                .col-25 {
                  -ms-flex: 25%; /* IE10 */
                  flex: 25%;
                }
                .col-50 {
                  -ms-flex: 50%; /* IE10 */
                  flex: 50%;
                }
                .col-75 {
                  -ms-flex: 75%; /* IE10 */
                  flex: 75%;
                }

                .col-25,
                .col-50,
                .col-75 {
                  padding: 0 16px;
                }

                .container1 {
                  background-color: #f2f2f2;
                  padding: 5px 20px 15px 20px;
                  border: 1px solid lightgrey;
                  border-radius: 3px;
                  margin-top: 50px;
                }

                input[type=text] {
                  width: 100%;
                  margin-bottom: 20px;
                  padding: 12px;
                  border: 1px solid #ccc;
                  border-radius: 3px;
                }

                label {
                  margin-bottom: 10px;
                  display: block;
                }

                .icon-container {
                  margin-bottom: 20px;
                  padding: 7px 0;
                  font-size: 24px;
                }

                .btn {
                  background-color: #04AA6D;
                  color: white;
                  padding: 12px;
                  margin: 10px 0;
                  border: none;
                  width: 100%;
                  border-radius: 3px;
                  cursor: pointer;
                  font-size: 17px;
                }
                .btn:hover {
                  background-color: #45a049;
                }

                a {
                  color: #2196F3;
                }

                hr {
                  border: 1px solid lightgrey;
                }

                span.price {
                  float: right;
                  color: grey;
                }

                /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
                @media (max-width: 800px) {
                  .row {
                    flex-direction: column-reverse;
                  }
                  .col-25 {
                    margin-bottom: 20px;
                  }
                }
            th, td {
              text-align: left;
              padding: 10px;
            }

            .second-row{
                margin-left: 0px;
            }

            tr{
                height: 60px;
            }
            .cardPort {
              box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
              transition: 0.3s;
              margin-left: 30px;
              margin-top: 20px;
              width: 7%;
            }

            .cardPort:hover {
              box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
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
        <script>
            
            function bookPort(x,y){
                var btn = document.getElementById('btn' + x).style.backgroundColor;
                var button = document.getElementById('btn' + x);
                if(btn=="" || null){
                let value = 'Port ' + x;
                document.getElementById('btn' + x).style.backgroundColor = "green";
                $.ajax({
                    url: "set_session.php",
                    type: "GET",
                    data: {
                        id: x
                    }
                });
                triggerButton(x,y);                
                }
                else{
                document.getElementById('btn' + x).style.backgroundColor = "";
                triggerButton(x,y);
                }
            }

            function triggerButton(x,y){
                var isSelected = document.getElementById('btn'+x).style.backgroundColor;
                if(isSelected == "green"){
                    for(i=1;i<=y;i++){
                        if(i!=x){
                            document.getElementById('btn'+i).disabled = true;
                        }
                    }
                }
                else{
                    for(i=1;i<=y;i++){    
                        document.getElementById('btn'+i).disabled = false;
                    }
                }
            }


        </script>
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
                            <a href="userVehicleView.php" class="nav-item nav-link">My Vehicles</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu">
                                    <a href="blog.html" class="dropdown-item">Blog Grid</a>
                                    <a href="single.html" class="dropdown-item">Detail Page</a>
                                    <a href="team.html" class="dropdown-item">Team Member</a>
                                    <a href="booking.html" class="dropdown-item">Schedule Booking</a>
                                </div>
                            </div>
                            <a href="contact.h9tml" class="nav-item nav-link">Contact</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->

        <center>
            <form method="POST" onload="onInit()">
        <div style="margin-left: 80px;" class="row">
            
        <?php
            $portquery = mysqli_query($db, "SELECT * from tbl_port where stationId='$sid'");
            $portCount=mysqli_num_rows($portquery);
            $i=1;
            for($j = 0; $j < $portCount; $j++){
            while($row = mysqli_fetch_array($portquery)){ 
                $portidmain = $row['port_id'];
                $portName = $row['portName'];
                $power = $row['power'];
                $getBookedPortQuery = mysqli_query($db, "SELECT distinct port_id FROM tbl_port_date where (timeSlot='$time' AND portdate='$date') AND station_id='$sid'");
                if(mysqli_num_rows($getBookedPortQuery)>0){
                    while($getBookedPort = mysqli_fetch_array($getBookedPortQuery)){
                    $portid = $getBookedPort['port_id'];
                        if($portid==$portidmain){
                            echo '<button disabled style="background-color:red" class="cardPort">
                                    <h4><b name="portName">'.$portName.'</b></h4> 
                                    <p name="power">'.$power.'</p>
                                  </button>';
                            $i++;
                        }
                        else{
                            echo '<button id="btn'.$i.'" onclick="bookPort('.$i.', '.$portCount.'); return false" name="btn'.$i.'" class="cardPort">
                                    <h4><b name="portName">'.$portName.'</b></h4> 
                                    <p name="power">'.$power.'</p>
                                  </button>';
                            $i++;
                        }
                    }
                }
                else {
                    echo '<button id="btn'.$i.'" onclick="bookPort('.$i.', '.$portCount.'); return false" name="btn'.$i.'" class="cardPort">
                                    <h4><b name="portName">'.$portName.'</b></h4> 
                                    <p name="power">'.$power.'</p>
                                  </button>';
                            $i++;
                }

            }
        }

            
        ?>     
              
        </div> 
        <button class="btn btn-danger" name="continue" style="width:10%">Continue</button>
        </form> 
        </center>

        
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
                            <a href="">FAQs</a>
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
</script>
    </body>
</html>
<?php
    if(isset($_POST['continue'])){
    $portselectedid=$_SESSION['portName'];
    $text = 'Port ' . $portselectedid;
    $_SESSION['portData'] = $text;
    //echo "<script>alert('$text')</script>";
    echo"<script>window.location.href='http://localhost/NEW EVPLUG/Customer/payment1.php'</script>";
    }
?>
