<?php
// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_evplug";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Query to get count of bookings for each station
$sql = "SELECT tbl_station.stationName, COUNT(*) as count FROM tbl_booking 
        INNER JOIN tbl_station ON tbl_booking.station_id = tbl_station.stationId
        GROUP BY tbl_booking.station_id";

$result = $conn->query($sql);

// Store data in an array
$data = array();
while($row = $result->fetch_assoc()) {
  $data[] = [$row['stationName'], (int)$row['count']];
}

// Close database connection
$conn->close();
?>

<!-- Load Google Charts -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {'packages':['bar']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Station');
    data.addColumn('number', 'Count');
    data.addRows(<?php echo json_encode($data); ?>);

    var options = {
      chart: {
        title: 'Bookings by Station',
        subtitle: 'Number of bookings per station',
      },
      bars: 'horizontal',
      legend: { position: 'none' },
      colors: ['#0066cc']
    };

    var chart = new google.charts.Bar(document.getElementById('chart_div'));

    chart.draw(data, google.charts.Bar.convertOptions(options));
  }
</script>

<!-- Display the chart -->
<div id="chart_div" style="width: 500px; height: 400px;"></div>
