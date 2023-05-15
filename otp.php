
<!DOCTYPE html>
<html>
<head>

	<title>Enter OTP</title>
	<style>
		body {
			background-color: #f2f2f2;
			font-family: Arial, sans-serif;
		}
		h1 {
			text-align: center;
			color: #333;
			margin-top: 150px;
		}
		form {
			max-width: 500px;
			margin: auto;
			margin-top: 50px;
			background-color: #fff;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0px 0px 10px #ccc;
		}
		label {
			display: inline-block;
			margin-bottom: 10px;
			color: #333;
		}
		input[type="text"] {
			width: 50px;
			padding: 10px;
			margin-right: 10px;
			font-size: 20px;
			border: none;
			border-bottom: 2px solid #ccc;
			text-align: center;
			outline: none;
			-webkit-appearance: none;
		}
		input[type="text"]:focus {
			border-bottom: 2px solid #333;
		}
		button[type="submit"] {
			display: block;
			margin: auto;
			margin-top: 30px;
			background-color: #333;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			font-size: 16px;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}
		button[type="submit"]:hover {
			background-color: #555;
		}
	</style>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
	<h1>Enter OTP</h1>
	<center>
		<form method="POST">
			<input type="text" name="digit1" id="digit1" maxlength="1" required pattern="[0-9]" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
			<input type="text" name="digit2" id="digit2" maxlength="1" required pattern="[0-9]" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
			<input type="text" name="digit3" id="digit3" maxlength="1" required pattern="[0-9]" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
			<input type="text" name="digit4" id="digit4" maxlength="1" required pattern="[0-9]" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
			<button name="submit" type="submit">Submit</button>
		</form>
	</center>	
	<script type="text/javascript">
		// Get the input fields
		var digit1 = document.getElementById("digit1");
		var digit2 = document.getElementById("digit2");
		var digit3 = document.getElementById("digit3");
		var digit4 = document.getElementById("digit4");

		// Add an event listener to digit1 input field
		digit1.addEventListener("input", function() {
		    // If digit1 has a value, move focus to digit2
		    if (digit1.value) {
		        digit2.focus();
		    }
		});

		// Add an event listener to digit2 input field
		digit2.addEventListener("input", function() {
		    // If digit2 has a value, move focus to digit3
		    if (digit2.value) {
		        digit3.focus();
		    }
		});

		// Add an event listener to digit3 input field
		digit3.addEventListener("input", function() {
		    // If digit3 has a value, move focus to digit4
		    if (digit3.value) {
		        digit4.focus();
		    }
		});

		// Add an event listener to digit4 input field
		digit4.addEventListener("input", function() {
		    // If digit4 has a value, do something else
		    if (digit4.value) {
		        // Do something else here
		    }
		});

	</script>
</body>
</html>


<?php
session_start();
$db = mysqli_connect("localhost","root","","db_evplug");
if(isset($_POST['submit'])){
	// Get the values of the input fields
	$digit1 = $_POST["digit1"];
	$digit2 = $_POST["digit2"];
	$digit3 = $_POST["digit3"];
	$digit4 = $_POST["digit4"];
	$otp = $_SESSION['otp'];
	$time = $_SESSION['inTime'];
	$bookingId = $_SESSION['bookingIdfromScanner'];
	$date = date("Y-m-d");
	// Concatenate the values into a single string
	$inputString = $digit1 . $digit2 . $digit3 . $digit4;
	if($inputString == $otp){
		$completeProcessQuery = mysqli_query($db, "INSERT INTO tbl_complete(booking_id, time_in, completed_date)values('$bookingId','$time','$date')");
		if($completeProcessQuery){
		  echo '<script>
		    swal({
		      title: "Congratulations!",
		      text: "Your booking has been verified!",
		      icon: "success",
		      button: "Continue"}).then(okay => {
		      	if(okay){
		      		window.location.href = "http://localhost/NEW EVPLUG/Manager/dashboard.php";
		      	}
		      	});
		  </script>';
		}
	}
	else{
		echo '<script>swal("Incorrect OTP")</script>';
	}
}
?>
