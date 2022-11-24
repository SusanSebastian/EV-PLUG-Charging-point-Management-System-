`<?php
	$db = mysqli_connect("localhost","root","","db_evplug");
	$brandId=$_POST["brandId"];
	$result = mysqli_query($db,"SELECT * FROM tbl_vehiclemodel where brandId=$brandId");
?>
<option value="">Select Model</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
	<option value="<?php echo $row["modelId"];?>"><?php echo $row["modelName"];?></option>
<?php
}
?>