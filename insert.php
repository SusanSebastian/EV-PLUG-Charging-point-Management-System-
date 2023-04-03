<?php
// Replace with your database credentials
$host = 'localhost';
$dbname = 'db_evplug';
$username = 'root';
$password = '';

// Connect to the database
 $db = mysqli_connect("localhost","root","","db_evplug");

// Get the content from the POST request
date_default_timezone_set('Asia/Kolkata');
$content = $_POST['content'];
$date = date("Y-m-d");
$time_in = date("Y-m-d H:i:s");


// Insert the data into the database
// $stmt = $pdo->prepare("INSERT INTO qr_codes (content) VALUES (:content)");
// $stmt->bindParam(':content', $content);
// list($name, $email) = explode(",", $content);
// list($name_label, $name_value) = explode(":", $name);
// list($email_label, $email_value) = explode(":", $email);

$data = explode(",", $content);
echo "\n";
echo $customerId = $data[0] . "\n";
echo $customerName = $data[1] . "\n";
echo $vehicleNo = $data[2] . "\n";
echo $stationName = $data[3] . "\n";
echo $port = $data[4] . "\n";
echo $place = $data[5] . "\n";
echo $landmark = $data[6] . "\n";
echo $contact = $data[7] . "\n";
echo $bookingDate = $data[8] . "\n";
echo $reservedTime = $data[9] . "\n";
echo $Amount = $data[10] . "\n";
echo $bookingId = $data[11] . "\n";
echo "Check in time : $time_in" . "\n";


$ins = mysqli_query($db, "INSERT INTO tbl_complete(booking_id, time_in) VALUES ('$bookingId','$time_in')");
if($ins){
        echo "Succcessfully inserted";
      }
      else {
        echo "Failed";
      } 
  

// $stmt = $pdo->prepare("INSERT INTO tbl_complete(customerId, BookingDate, time_in) VALUES (:customerId, :date, :time_in)");

// $stmt->bindParam(':customerId', $customerId);
// $stmt->bindParam(':BookingDate', $date);
// $stmt->bindParam(':time_in', $time_in);

// // $stmt->execute();
// if ($stmt->execute()) {
//   echo "Data inserted successfully";
// } else {
//   echo "Failed to insert data";
// }
?>