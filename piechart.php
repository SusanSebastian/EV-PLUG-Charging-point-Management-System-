<?php
session_start();
// Get the station id from the session
$station_id = $_SESSION['id'];

// Connect to the database
$db = mysqli_connect("localhost","root","","db_evplug");

// Retrieve all the booking dates for the given station
$query = "SELECT booking_date, COUNT(*) AS num_bookings
          FROM tbl_booking
          WHERE station_id = 17
          GROUP BY booking_date";
$result = mysqli_query($db, $query);

// Create an array to hold the bookings per date
$bookings_per_date = array();

// Loop through the results and populate the bookings array
while ($row = mysqli_fetch_assoc($result)) {
    $bookings_per_date[$row['booking_date']] = $row['num_bookings'];
}

// Generate a histogram from the bookings array using a charting library
// For example, using Google Charts
echo "<script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>";
echo "<script type='text/javascript'>
      google.charts.load('current', {packages: ['corechart', 'bar']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Date');
        data.addColumn('number', 'Bookings');";

// Loop through the bookings array and add the data to the chart
foreach ($bookings_per_date as $date => $bookings) {
    echo "data.addRow(['$date', $bookings]);";
}

echo "var options = {
          title: 'Daily Bookings',
          legend: { position: 'none' },
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));

        chart.draw(data, options);
      }
      </script>";
// Display the chart
echo "<div id='chart_div' style='width: 500px; height: 300px; border: 1px solid black;'></div>";
